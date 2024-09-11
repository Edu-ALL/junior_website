<?php

namespace App\Http\Controllers\V1\Admin;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use App\Models\WebsiteSetting;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\Facades\DataTables;

class TestimonialController extends Controller
{
    public function index(){
        return view('admin.testimonial.index', [
            'website_data' => WebsiteSetting::first(),
        ]);
    }

    public function getTestimonial(Request $request){
        if ($request->ajax()) {
            $data = Testimonial::orderBy('updated_at', 'desc')->get();
            return DataTables::of($data)
            ->addIndexColumn()
            ->editColumn('subcategory', function($d){
                if ($d->testi_subcategory != null) {
                    $result = '
                        '.$d->testi_subcategory.'
                    ';
                } else {
                    $result = '-';
                }
                return $result;
            })
            ->editColumn('image', function($d){
                $path = asset('uploaded_files/'.'testimonial/'.$d->created_at->format('Y').'/'.$d->created_at->format('m').'/'.$d->testi_thumbnail);
                if ($d->testi_thumbnail != null) {
                    $result = '
                        <img data-original="'.$path.'" src="'.$path.'" alt="" width="80">
                    ';
                } else {
                    $result = '-';
                }
                return $result;
            })
            ->editColumn('language', function($d){
                
                $language = $d->lang == "en" ? "English" : "Indonesia";
                $path = asset('assets/img/flag/flag-'.$d->lang.'.png');
                $result = '
                    <img data-original="'.$path.'" src="'.$path.'" alt="" width="30">
                    <p class="pt-1" style="font-size: 13px !important">
                        '.$language.'
                    </p>
                ';
                return $result;
            })
            ->editColumn('status', function($d){
                if ($d->testi_status == 'active') {
                    $result = '
                        <button class="btn btn-success" type="button" data-bs-toggle="modal" data-bs-target="#deactivate" style="text-transform: capitalize;" onclick="formDeactivate('.$d->group.')">
                            <span class="p-0" data-bs-toggle="tooltip" data-bs-title="Deactivate this testimonial">
                                '.$d->testi_status.'
                            </span>
                        </button>
                    ';
                } else {
                    $result = '
                        <button class="btn btn-danger" type="button" data-bs-toggle="modal" data-bs-target="#activate" style="text-transform: capitalize;" onclick="formActivate('.$d->group.')">
                            <span class="p-0" data-bs-toggle="tooltip" data-bs-title="Activate this testimonial">
                                '.$d->testi_status.'
                            </span>
                        </button>
                    ';
                }
                return $result;
            })
            ->editColumn('action', function($d){
                $result = '
                <div class="d-flex flex-row justify-content-center gap-1">
                    <a type="button" class="btn btn-warning" href="/admin/testimonial/'.$d->group.'/edit">
                        <i class="fa-solid fa-pen-to-square" data-bs-toggle="tooltip" data-bs-title="Edit this testimonial"></i>
                    </a>
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete" onclick="formDelete('.$d->group.')">
                        <i class="fa-regular fa-trash-can" data-bs-toggle="tooltip" data-bs-title="Delete this testimonial"></i>
                    </button>
                </div>
                ';
                return $result;
            })
            ->rawColumns(['subcategory', 'image', 'language', 'status', 'action'])
            ->make(true);
        }
    }

    public function create(){
        return view('admin.testimonial.create', [
            'website_data' => WebsiteSetting::first(),
        ]);
    }

    public function store(Request $request){
        $messages = [
            'required'  => 'The :attribute field is required.',
        ];

        $rules = [
            'testi_name' => 'required',
            'testi_subtitle' => 'nullable',
            'testi_thumbnail' => 'nullable|mimes:jpeg,jpg,png,bmp,webp|max:2048',
            'testi_alt' => 'nullable',
            'testi_desc_en' => 'required',
            'testi_desc_id' => 'required',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            return Redirect::back()->withInput()->withErrors($validator->messages());
        }

        DB::beginTransaction();
        try {
            $testi_en = new Testimonial;
            $testi_en->group = date('YmdHis');
            $testi_en->testi_name = $request->testi_name;
            $testi_en->testi_subtitle = $request->testi_subtitle;
            $testi_en->testi_alt = $request->testi_alt;
            $testi_en->testi_desc = $request->testi_desc_en;
            $testi_en->testi_status = 'active';
            $testi_en->lang = 'en';

            $testi_id = new Testimonial;
            $testi_id->group = $testi_en->group;
            $testi_id->testi_name = $request->testi_name;
            $testi_id->testi_subtitle = $request->testi_subtitle;
            $testi_id->testi_alt = $request->testi_alt;
            $testi_id->testi_desc = $request->testi_desc_id;
            $testi_id->testi_status = 'active';
            $testi_id->lang = 'id';

            if ($request->hasFile('testi_thumbnail')) {
                $file = $request->file('testi_thumbnail');
                $file_format = $request->file('testi_thumbnail')->getClientOriginalExtension();
                $destinationPath = public_path().'/uploaded_files/'.'testimonial/'.date('Y').'/'.date('m').'/';
                $time = $testi_en->group;
                $fileName = 'Testimonial-thumbnail-'.$time.'.'.$file_format;
                $file->move($destinationPath, $fileName);
                $testi_en->testi_thumbnail = $fileName;
                $testi_id->testi_thumbnail = $fileName;
            }

            $testi_en->save();
            $testi_id->save();
            DB::commit();
            Log::notice('New Testimony : '. $testi_en->testi_name .', Was Successfully Created By : ' . Auth::guard('web-admin')->user()->name);
        } catch (Exception $e) {
            DB::rollBack();
            Log::error('Testimony Was Failed To Create: ' .  $e);
            return Redirect::back()->withErrors($e->getMessage());
        }

        return redirect('/admin/testimonial')->withSuccess('Testimonial Was Successfully Created');
    }

    public function edit($group){
        $testimonial = Testimonial::where('group', $group)->get();
        return view('admin.testimonial.update', [
            'testimonial' => $testimonial,
            'website_data' => WebsiteSetting::first(),
        ]);
    }

    public function update($group, Request $request){
        $messages = [
            'required'  => 'The :attribute field is required.',
        ];

        $rules = [
            'testi_name' => 'required',
            'testi_subtitle' => 'nullable',
            'testi_thumbnail' => 'nullable|mimes:jpeg,jpg,png,bmp,webp|max:2048',
            'testi_alt' => 'nullable',
            'testi_desc_en' => 'required',
            'testi_desc_id' => 'required',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            return Redirect::back()->withErrors($validator->messages());
        }

        DB::beginTransaction();
        try {
            $testi = Testimonial::where('group', $group)->get();
            $testi_en = $testi[0];
            $testi_en->testi_name = $request->testi_name;
            $testi_en->testi_subtitle = $request->testi_subtitle;
            $testi_en->testi_alt = $request->testi_alt;
            $testi_en->testi_desc = $request->testi_desc_en;
            $testi_en->updated_at = date('Y-m-d H:i:s');

            $testi_id = $testi[1];
            $testi_id->testi_name = $request->testi_name;
            $testi_id->testi_subtitle = $request->testi_subtitle;
            $testi_id->testi_alt = $request->testi_alt;
            $testi_id->testi_desc = $request->testi_desc_id;
            $testi_id->updated_at = date('Y-m-d H:i:s');

            if ($request->hasFile('testi_thumbnail')) {
                $file = $request->file('testi_thumbnail');
                $file_format = $request->file('testi_thumbnail')->getClientOriginalExtension();
                $destinationPath = public_path().'/uploaded_files/'.'testimonial/'.$testi_en->created_at->format('Y').'/'.$testi_en->created_at->format('m').'/';
                $time = $testi_en->group;
                $fileName = 'Testimonial-thumbnail-'.$time.'.'.$file_format;
                $file->move($destinationPath, $fileName);
                $testi_en->testi_thumbnail = $fileName;
                $testi_id->testi_thumbnail = $fileName;
            } elseif ($request->hasFile('testi_thumbnail') && $request->checkThumbnail == 'true') {
                $file = $request->file('testi_thumbnail');
                $file_format = $request->file('testi_thumbnail')->getClientOriginalExtension();
                $destinationPath = public_path().'/uploaded_files/'.'testimonial/'.$testi_en->created_at->format('Y').'/'.$testi_en->created_at->format('m').'/';
                $time = $testi_en->group;
                $fileName = 'Testimonial-thumbnail-'.$time.'.'.$file_format;
                $file->move($destinationPath, $fileName);
                $testi_en->testi_thumbnail = $fileName;
                $testi_id->testi_thumbnail = $fileName;
            } elseif ($request->checkThumbnail == 'true') {
                if ($testi_en->testi_thumbnail == $testi_id->testi_thumbnail) {
                    $old_image_path = $testi_en->testi_thumbnail;
                    $file_path = public_path('uploaded_files/'.'testimonial/'.$testi_en->created_at->format('Y').'/'.$testi_en->created_at->format('m').'/'.$old_image_path);
                    if (File::exists($file_path)) {
                        File::delete($file_path);
                    }
                }
                $testi_en->testi_thumbnail = null;
                $testi_id->testi_thumbnail = null;
            }

            $testi_en->save();
            $testi_id->save();

            DB::commit();
            Log::notice('Testimony : '. $testi_en->testi_name .', Was Successfully Updated By : ' . Auth::guard('web-admin')->user()->name);
        } catch (Exception $e) {
            DB::rollBack();
            Log::error('Testimony Was Failed To Update: ' .  $e);
            return Redirect::back()->withErrors($e->getMessage());
        }

        return redirect('/admin/testimonial/'.$group.'/edit')->withSuccess('Testimonial Was Successfully Updated');
    }

    public function delete($group){
        DB::beginTransaction();
        try {
            $testi = Testimonial::where('group', $group)->get();
            if ($old_image_path_en = $testi[0]->testi_thumbnail) {
                $file_path_en = public_path('uploaded_files/'.'testimonial/'.$testi[0]->created_at->format('Y').'/'.$testi[0]->created_at->format('m').'/'.$old_image_path_en);
                if (File::exists($file_path_en)) {
                    File::delete($file_path_en);
                }
            }
            if ($old_image_path_id = $testi[1]->testi_thumbnail) {
                $file_path_id = public_path('uploaded_files/'.'testimonial/'.$testi[1]->created_at->format('Y').'/'.$testi[1]->created_at->format('m').'/'.$old_image_path_id);
                if (File::exists($file_path_id)) {
                    File::delete($file_path_id);
                }
            }
            $testi[0]->delete();
            $testi[1]->delete();
            DB::commit();
            Log::notice('Testimony : '. $testi[0]->testi_name .', Was Successfully Deleted By : ' . Auth::guard('web-admin')->user()->name);
        } catch (Exception $e) {
            DB::rollBack();
            Log::error('Testimony Was Failed To Delete: ' .  $e);
            return Redirect::back()->withErrors($e->getMessage());
        }

        return redirect('/admin/testimonial')->withSuccess('Testimonial Was Successfully Deleted');
    }

    public function deactivate($group){
        DB::beginTransaction();
        try {
            $testi = Testimonial::where('group', $group)->get();
            $testi[0]->testi_status = 'inactive';
            $testi[1]->testi_status = 'inactive';
            $testi[0]->save();
            $testi[1]->save();

            DB::commit();
            Log::notice('Testimony : '. $testi[0]->testi_name .', Was Successfully Deactivate By : ' . Auth::guard('web-admin')->user()->name);
        } catch (Exception $e) {
            DB::rollBack();
            Log::error('Testimony Was Failed To Deactivate: ' .  $e);
            return Redirect::back()->withErrors($e->getMessage());
        }

        return redirect('/admin/testimonial');
    }

    public function activate($group){
        DB::beginTransaction();
        try {
            $testi = Testimonial::where('group', $group)->get();
            $testi[0]->testi_status = 'active';
            $testi[1]->testi_status = 'active';
            $testi[0]->save();
            $testi[1]->save();
            DB::commit();
            Log::notice('Testimony : '. $testi[0]->testi_name .', Was Successfully Activate By : ' . Auth::guard('web-admin')->user()->name);
        } catch (Exception $e) {
            DB::rollBack();
            Log::error('Testimony Was Failed To Aactivate: ' .  $e);
            return Redirect::back()->withErrors($e->getMessage());
        }

        return redirect('/admin/testimonial');
    }
}
