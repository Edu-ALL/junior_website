<?php

namespace App\Http\Controllers\V1;

use App\Http\Controllers\Controller;
use App\Models\BlogCategories;
use App\Models\BlogReads;
use App\Models\Blogs;
use Illuminate\Http\Request;
use DOMDocument;

class WebController extends Controller
{
    public function home()
    {
        return view('page.home');
    }

    public function about_us()
    {
        return view('page.about-us');
    }

    public function programs()
    {
        return view('page.programs');
    }

    public function contact_us()
    {
        return view('page.contact-us');
    }

    public function science()
    {
        return view('page.science');
    }

    public function creative_communication()
    {
        return view('page.creative-communication');
    }

    public function entrepreneurship()
    {
        return view('page.entrepreneurship');
    }

    public function coding_robotics()
    {
        return view('page.coding-robotics');
    }

    public function visual_arts()
    {
        return view('page.visual-arts');
    }

    public function blog()
    {
        return view('page.blog');
    }

    public function detail_blog(Request $request)
    {
        $locale = $lang = $request->route('locale');
        $slug = $request->route('slug');
        // $lang = substr($locale, 3, 2);
        $blog = Blogs::where('slug', $slug)->first();

        // check if blog is exsit
        // or blog lang not equal with locale
        if (!$blog || $lang != $blog->lang) {
            $lang = $lang == 'id' ? 'en' : 'id';

            if (!$blog || $lang != $blog->lang) { 
                abort(404);
            } else {
                return redirect()->route('blog.detail', ['locale' => $lang, 'slug' => $slug]);
            }
        }

        // read ip address
        $ip_address = request()->ip();

        $last_updated = $blog->updated_at;

        // if ip address already registered then skip else register new ip address
        $ip_isregistered = BlogReads::where('blog_id', $blog->id)->where('ip_address',  $ip_address)->exists();

        if (!$ip_isregistered) {
            BlogReads::create([
                'blog_id' => $blog->id,
                'ip_address' => $ip_address,
            ]);

            // update blog click count
            // $blog->update([
            //     'click_count' => $blog->click_count + 1,
            //     'updated_at' => $last_updated,
            // ]);
        }

        // dd($blog);
        $recomendation_blogs = Blogs::latest()
            ->where('id', '!=', $blog->id)
            ->where('cat_id', $blog->cat_id)
            ->where('blog_status', 'publish')
            ->take(3)->get();


        // return $blog->blog_description;
        // Blog Section
        $doc =  new DOMDocument();
        $doc->loadHTML($blog->blog_description, LIBXML_NOERROR);
        $title_list = $doc->getElementsByTagName('h2');


        $blog_section = [];
        foreach ($title_list as $index => $title) {
            $title->setAttribute("id", "blog_title_" . $index);
            $blog_section[] = $title->nodeValue;
        }

        $blog->blog_description = $doc->saveHTML();

        // Related Blogs
        $related_blogs = Blogs::whereNot('slug', $slug)->whereHas('category', function ($query) use ($blog) {
            $query->where('category_name', $blog->category->category_name);
        })->where('lang', $lang)->get();


        return view('page.detail-blog')->with([
            'locale' => $locale,
            'blog' => $blog,
            'recomendation_blogs' => $recomendation_blogs,
            'blog_section_list' => $blog_section,
            'related_blogs' => $related_blogs
        ]);
    }
}
