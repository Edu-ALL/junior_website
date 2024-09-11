<?php

namespace App\Http\Controllers\V1\Admin;

use App\Http\Controllers\Controller;
use App\Models\BlogCategories;
use App\Models\BlogReads;
use App\Models\Blogs;
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

class BlogController extends Controller
{

    public function index(){
        return view('admin.blog.index', [
            'website_data' => WebsiteSetting::first(),
        ]);
    }

    public function getBlog(Request $request){
        if ($request->ajax()) {
            $data = Blogs::orderBy('updated_at', 'desc')->get();

            return Datatables::of($data)
            ->addIndexColumn()
            ->editColumn('category', function($d){
                $result = $d->category->category_name;
                return $result;
            })
            ->editColumn('mentor', function($d){
                if ($d->mt_id == 0 || $d->mt_id == null) {
                    $result = '-';
                } else {
                    $result = $d->mentor?->mentor_fullname;
                }
                return $result;
            })
            ->editColumn('image', function($d){
                $path = asset('uploaded_files/'.'blogs/'.$d->created_at->format('Y').'/'.$d->created_at->format('m').'/'.$d->blog_thumbnail);
                $result = '
                    <img data-original="'.$path.'" src="'.$path.'" alt="" width="80">
                ';
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
            ->editColumn('highlight', function($d){
                $path = asset('assets/img/flag/flag-'.$d->lang.'.png');
                $route = route('highlight-blogs', ['id' => $d->id]);
                $toggle = ($d->is_highlight == "false") ? "" : "checked";
                $check = ($d->is_highlight == "false") ? "Off" : "On";
                $result = '
                    <div class="col d-flex align-items-center justify-content-center">
                        <form action="'.$route.'" method="POST">
                            '.csrf_field().'
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch" name="is_highlight" id="is_highlight" '.$toggle.' onchange="this.form.submit()" style="font-size: 18px !important">
                                <label class="form-label card-title p-0 pt-1 m-0" for="is_highlight">
                                    '.$check.'
                                </label>
                            </div>
                        </form>
                    </div>
                ';
                return $result;
            })
            ->editColumn('status', function($d){
                if ($d->blog_status == 'publish') {
                    $result = '
                        <button class="btn btn-success" type="button" data-bs-toggle="modal" data-bs-target="#draft" style="text-transform: capitalize;" onclick="formDraft('.$d->id.')">
                            <span class="p-0" data-bs-toggle="tooltip" data-bs-title="Set to Draft">
                                '.$d->blog_status.'
                            </span>
                        </button>
                    ';
                } else {
                    $result = '
                        <button class="btn btn-danger" type="button" data-bs-toggle="modal" data-bs-target="#publish" style="text-transform: capitalize;" onclick="formPublish('.$d->id.')">
                            <span class="p-0" data-bs-toggle="tooltip" data-bs-title="Set to Publish">
                                '.$d->blog_status.'
                            </span>
                        </button>
                    ';
                }
                return $result;
            })
            ->editColumn('last_updated', function($d){
                $result = $d->updated_at ;
                return $result;
            })
            ->editColumn('action', function($d){
                $result = '
                <div class="d-flex flex-row justify-content-center gap-1">
                    <a type="button" class="btn btn-primary" href="/admin/blogs/'.$d->id.'/view">
                        <i class="fa-solid fa-magnifying-glass" data-bs-toggle="tooltip" data-bs-title="View this blog"></i>
                    </a>
                    <a type="button" class="btn btn-warning" href="/admin/blogs/'.$d->id.'/edit">
                        <i class="fa-solid fa-pen-to-square" data-bs-toggle="tooltip" data-bs-title="Edit this blog"></i>
                    </a>
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete" onclick="formDelete('.$d->id.')">
                        <i class="fa-regular fa-trash-can" data-bs-toggle="tooltip" data-bs-title="Delete this blog"></i>
                    </button>
                </div>
                ';
                return $result;
            })
            ->rawColumns(['category', 'mentor', 'image', 'language', 'highlight', 'status', 'last_updated', 'action'])
            ->make(true);
        }
    }

    public function checkPublish(){
        $blogs = Blogs::where('blog_status', 'draft')->get();
        foreach ($blogs as $blog) {
            if (date('Y-m-d', strtotime($blog->publish_date)) == date('Y-m-d')) {
                DB::beginTransaction();
                try {
                    $blog->blog_status = 'publish';
                    $blog->update_at = date('Y-m-d H:i:s');
                    $blog->save();
                    Log::info('check publish is running');
                    DB::commit();
                } catch (Exception $e) {
                    Log::error('check publish not running');
                    DB::rollBack();
                    return Redirect::back()->withErrors($e->getMessage());
                }
            }
        }
    }

    public function create(){
        $category_en = BlogCategories::where('lang', 'en')->get();
        $category_id = BlogCategories::where('lang', 'id')->get();
        return view('admin.blog.create', [
            'category_en' => $category_en,
            'category_id' => $category_id,
            'website_data' => WebsiteSetting::first(),
        ]);
    }

    public function store(Request $request){

        // return $request->all();
        $messages = [
            'required'  => 'The :attribute field is required.',
        ];

        $rules = [
            'blog_thumbnail' => 'required|mimes:jpeg,jpg,png,bmp,webp|max:2048',
            'blog_alt' => 'required',
            'lang' => 'nullable', # mandatory field
            'category.*' => 'required',
            'blog_title.*' => 'required',
            'blog_slug.*' => 'required',
            'blog_summary.*' => 'required',
            'blog_description.*' => 'required',
            'seo_title.*' => 'required',
            'seo_keyword.*' => 'required',
            'seo_desc.*' => 'required',
            'duration_read' => 'required',
            'publish_date' => 'nullable',
            'blog_status' => 'required',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            return Redirect::back()->withInput()->withErrors($validator->messages());
        }

        DB::beginTransaction();
        try {

            if ($request->hasFile('blog_thumbnail')) {
                $file = $request->file('blog_thumbnail');
                $file_format = $request->file('blog_thumbnail')->getClientOriginalExtension();
                $destinationPath = public_path().'/uploaded_files/'.'blogs/'.date('Y').'/'.date('m').'/';
                $time = date('YmdHis');
                $fileName = 'Blogs-thumbnail-'.$time.'.'.$file_format;
                $file->move($destinationPath, $fileName);
            }

            if ($request->blog_status == 'publish' && $request->publish_date == null){
                $publish_date = date('Y-m-d H:i:s');
            } else if ($request->blog_status == 'publish' && $request->publish_date != null) {
                $publish_date = $request->publish_date;
            } else if ($request->blog_status == 'draft' && $request->publish_date != null) {
                $publish_date = $request->publish_date;
            } else if ($request->blog_status == 'draft' && $request->publish_date == null) {
                $publish_date = null;
            }
            
            $i = 0;
            while ($i < 2)
            {
                $lang = $i == 0 ? 'en' : 'id';
                $blogs[] = [
                    'group' => date('YmdHis'),
                    'blog_thumbnail' => $fileName,
                    'blog_thumbnail_alt' => $request->blog_alt,
                    'cat_id' => $request->category[$lang],
                    'blog_title' => $request->blog_title[$lang],
                    'slug' => $request->blog_slug[$lang],
                    'blog_summary' => $request->blog_summary[$lang],
                    'blog_description' => $request->blog_description[$lang],
                    'seo_title' => $request->seo_title[$lang],
                    'seo_keyword' => $request->seo_keyword[$lang],
                    'seo_desc' => $request->seo_desc[$lang],
                    'blog_status' => $request->blog_status,
                    'lang' => $lang,
                    'click_count' => 0,
                    'duration_read' => $request->duration_read,
                    'is_highlight' => 'false',
                    'publish_date' => $publish_date,
                ];
                $i++;
            }
            Blogs::insert($blogs);

            DB::commit();
            Log::notice('Blog : "'.$blogs[0]['blog_title'].'" has been successfully Created by '.Auth::guard('web-admin')->user()->name);
        } catch (Exception $e) {
            DB::rollBack();
            Log::error('Create Blog failed : '.$e->getMessage());
            return redirect('/admin/blogs/create')->withErrors($e->getMessage());
        }

        return Redirect::to('admin/blogs')->withSuccess('Blogs Was Successfully Created');
    }


    public function getBlogRead(Request $request, $blog_id){
        if ($request->ajax()) {
            $data = BlogReads::where('blog_id', $blog_id)->orderBy('updated_at', 'desc')->get();
            return Datatables::of($data)
            ->addIndexColumn()
            ->make(true);
        }
    }

    public function view($id){
        $blog = Blogs::find($id);
        $blogs = Blogs::orderBy('blog_title', 'asc')->where('lang',$blog->lang)->get();
        return view('admin.blog.view', [
            'blog' => $blog,
            'blogs' => $blogs,
            'website_data' => WebsiteSetting::first(),
        ]);
    }

    public function edit($id){
        $blog = Blogs::find($id);
        $category_en = BlogCategories::where('lang', 'en')->get();
        $category_id = BlogCategories::where('lang', 'id')->get();
        return view('admin.blog.update', [
            'blog' => $blog,
            'category_en' => $category_en,
            'category_id' => $category_id,
            'website_data' => WebsiteSetting::first(),
        ]);
    }

    public function update($id, Request $request){
        $messages = [
            'required'  => 'The :attribute field is required.',
        ];

        $rules = [
            'blog_thumbnail' => 'nullable|mimes:jpeg,jpg,png,bmp,webp|max:2048',
            'blog_alt' => 'required',
            'lang' => 'required',
            'category' => 'required',
            'blog_title' => 'required',
            'blog_slug' => 'required',
            'blog_summary' => 'required',
            'blog_description' => 'required',
            'seo_title' => 'required',
            'seo_keyword' => 'required',
            'seo_desc' => 'required',
            'duration_read' => 'required',
            'publish_date' => 'nullable',
            'blog_status' => 'required',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            return Redirect::back()->withErrors($validator->messages());
        }

        DB::beginTransaction();
        try {
            $blog = Blogs::find($id);
            if ($request->hasFile('blog_thumbnail')) {
                if ($old_image_path_en = $blog->blog_thumbnail) {
                    $file_path = public_path('uploaded_files/'.'blogs/'.$blog->created_at->format('Y').'/'.$blog->created_at->format('m').'/'.$old_image_path_en);
                    if (File::exists($file_path)) {
                        File::delete($file_path);
                    }
                }
                $file = $request->file('blog_thumbnail');
                $file_format = $request->file('blog_thumbnail')->getClientOriginalExtension();
                $destinationPath = public_path().'/uploaded_files/'.'blogs/'.$blog->created_at->format('Y').'/'.$blog->created_at->format('m').'/';
                $time = date('YmdHis');
                $fileName = 'Blogs-thumbnail-'.$time.'.'.$file_format;
                $file->move($destinationPath, $fileName);
                $blog->blog_thumbnail = $fileName;
            }
            $blog->blog_thumbnail_alt = $request->blog_alt;
            $blog->cat_id = $request->category;
            $blog->blog_title = $request->blog_title;
            $blog->slug = $request->blog_slug;
            $blog->blog_summary = $request->blog_summary;
            // $blog->blog_description = str_replace('<p>&nbsp;</p>', '<br>', $request->blog_description);
            $blog->blog_description = $request->blog_description;
            $blog->seo_title = $request->seo_title;
            $blog->seo_keyword = $request->seo_keyword;
            $blog->seo_desc = $request->seo_desc;
            $blog->blog_status = $request->blog_status;
            $blog->lang = $request->lang;
            $blog->click_count = 0;
            $blog->duration_read = $request->duration_read;
            $blog->is_highlight = 'false';
            if ($request->blog_status == 'publish' && $request->publish_date == null){
                $blog->publish_date = date('Y-m-d H:i:s');
            } else if ($request->blog_status == 'publish' && $request->publish_date != null) {
                $blog->publish_date = $request->publish_date;
            } else if ($request->blog_status == 'draft' && $request->publish_date != null) {
                $blog->publish_date = $request->publish_date;
            } else if ($request->blog_status == 'draft' && $request->publish_date == null) {
                $blog->publish_date = null;
            }
            $blog->updated_at = date('Y-m-d H:i:s');
            $blog->save();
            DB::commit();
            Log::notice('Blog : "'.$blog->blog_title.'" has been successfully Updated by '.Auth::guard('web-admin')->user()->name);
        } catch (Exception $e) {
            DB::rollBack();
            Log::error('Update Blog failed : '.$e->getMessage());
            return Redirect::back()->withErrors($e->getMessage());
        }

        return redirect('/admin/blogs/'.$id.'/view')->withSuccess('Blogs Was Successfully Updated');
    }

    public function delete($id){
        DB::beginTransaction();
        try {
            $blog = Blogs::find($id);
            $blog_title = $blog->blog_title;
            if ($old_image_path = $blog->blog_thumbnail) {
                $file_path = public_path('uploaded_files/'.'blogs/'.$blog->created_at->format('Y').'/'.$blog->created_at->format('m').'/'.$old_image_path);
                if (File::exists($file_path)) {
                    File::delete($file_path);
                }
            }
            $blog->delete();
            DB::commit();
            Log::notice('Blog : "'.$blog_title.'" has been successfully Deleted by '.Auth::guard('web-admin')->user()->name);
        } catch (Exception $e) {
            DB::rollBack();
            Log::error('Delete Blog failed : '.$e->getMessage());
            return Redirect::back()->withErrors($e->getMessage());
        }

        return redirect('/admin/blogs')->withSuccess('Blogs Was Successfully Deleted');
    }

    public function status_draft($id){
        DB::beginTransaction();
        try {
            $blog = Blogs::find($id);
            $blog->blog_status = 'draft';
            $blog->publish_date = null;
            $blog->updated_at = date('Y-m-d H:i:s');
            $blog->save();
            DB::commit();
            Log::notice('Blog : "'.$blog->blog_title.'" has been successfully set to Draft by '.Auth::guard('web-admin')->user()->name);
        } catch (Exception $e) {
            DB::rollBack();
            Log::error('Set Draft Blog failed : '.$e->getMessage());
            return Redirect::back()->withErrors($e->getMessage());
        }

        return redirect('/admin/blogs');
    }

    public function status_publish($id){
        DB::beginTransaction();
        try {
            $blog = Blogs::find($id);
            $blog->blog_status = 'publish';
            $blog->publish_date = date('Y-m-d H:i:s');
            $blog->updated_at = date('Y-m-d H:i:s');
            $blog->save();
            DB::commit();
            Log::notice('Blog : "'.$blog->blog_title.'" has been successfully set to Publish by '.Auth::guard('web-admin')->user()->name);
        } catch (Exception $e) {
            DB::rollBack();
            Log::error('Set Publish Blog failed : '.$e->getMessage());
            return Redirect::back()->withErrors($e->getMessage());
        }

        return redirect('/admin/blogs');
    }

    public function set_highlight($id){
        DB::beginTransaction();
        try {
            $blog = Blogs::find($id);
            $status_msg = '';
            if ($blog->is_highlight == 'false'){
                $blog->is_highlight = 'true';
                $status_msg = 'Highlighted';
            } else {
                $blog->is_highlight = 'false';
                $status_msg = 'removed from Highlight';
            }
            $blog->updated_at = date('Y-m-d H:i:s');
            $blog->save();
            DB::commit();
            Log::notice('Blog : "'.$blog->blog_title.'" has been successfully '.$status_msg.' by '.Auth::guard('web-admin')->user()->name);
        } catch (Exception $e) {
            DB::rollBack();
            Log::error('Set Highlight Blog failed : '.$e->getMessage());
            return Redirect::back()->withErrors($e->getMessage());
        }

        return redirect('/admin/blogs');
    }
}
