<?php

namespace App\Http\Controllers\V1;

use App\Http\Controllers\Controller;
use App\Models\BlogCategories;
use App\Models\BlogReads;
use App\Models\Blogs;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class WebController extends Controller
{
    public $testimonial;

    function __construct(Request $request)
    {
        $this->testimonial = Testimonial::where('lang', $request->segment(1))->where('testi_status', 'active')->limit(3)->get();
    }

    public function home($locale)
    {
        return view('page.home', [
            'locale' => $locale,
            'testimonial' => $this->testimonial,
        ]);
    }

    public function about_us($locale)
    {
        return view('page.about-us', ['locale' => $locale]);
    }

    public function programs($locale)
    {
        return view('page.programs', ['locale' => $locale]);
    }

    public function contact_us($locale)
    {
        return view('page.contact-us', ['locale' => $locale]);
    }

    public function science($locale)
    {
        return view('page.science', [
            'locale' => $locale,
            'testimonial' => $this->testimonial,
        ]);
    }

    public function creative_communication($locale)
    {
        return view('page.creative-communication', [
            'locale' => $locale,
            'testimonial' => $this->testimonial,
        ]);
    }

    public function entrepreneurship($locale)
    {
        return view('page.entrepreneurship', [
            'locale' => $locale,
            'testimonial' => $this->testimonial,
        ]);
    }

    public function coding_robotics($locale)
    {
        return view('page.coding-robotics', [
            'locale' => $locale,
            'testimonial' => $this->testimonial,
        ]);
    }

    public function visual_arts($locale)
    {
        return view('page.visual-arts', [
            'locale' => $locale,
            'testimonial' => $this->testimonial,
        ]);
    }

    public function blog(Request $request)
    {
        $locale = $lang = $request->route('locale');

        // Latest Blog
        $latest_blog = Blogs::where('lang', $locale)->limit(3)->orderBy('created_at', 'DESC')->get();

        // HighLight Blog
        $highlight_blog = Blogs::where('lang', $locale)->where('is_highlight', 'true')->take(5)->orderBy('created_at', 'DESC')->get();

        // All Blog 
        $blogs = Blogs::where('lang', $locale)->orderBy('created_at', 'DESC')->paginate(6);

        // All Category
        $categories = BlogCategories::where('lang', $locale)->orderBy('category_name', 'ASC')->get();

        // filter by category
        if ($request->route('slug')) {
            $category = BlogCategories::where('slug', $request->route('slug'))->first();
            if ($category) {
                $blogs = Blogs::where('lang', $locale)->where('cat_id', $category->id)->orderBy('created_at', 'DESC')->paginate(6);
            } else {
                return redirect()->route('blogs', app()->getLocale());
            }
        }

        return view('page.blog', [
            'latest' => $latest_blog,
            'highlight' => $highlight_blog,
            'categories' => $categories,
            'blogs' => $blogs,
            'locale' => $locale
        ]);
    }

    public function detail_blog(Request $request)
    {
        $locale = $lang = $request->route('locale');
        $slug = $request->route('slug');
        $blog = Blogs::where('slug', $slug)->first();


        // check if blog is exsit and blog locale not equal with lang
        if ($blog && $locale != $blog->lang) {
            $blog = Blogs::where('group', $blog->group)->where('lang', $locale)->first();

            return redirect()->route('blog.detail', ['slug' => $blog->slug, 'locale' => $lang]);
        } else if (!$blog) {
            abort(404);
        }

        // read ip address
        $ip_address = request()->ip();

        // if ip address already registered then skip else register new ip address
        $ip_isregistered = BlogReads::where('blog_id', $blog->id)->where('ip_address',  $ip_address)->exists();

        if (!$ip_isregistered) {
            BlogReads::create([
                'blog_id' => $blog->id,
                'ip_address' => $ip_address,
            ]);
        }

        // Related Blogs
        $related_blogs = Blogs::whereNot('slug', $slug)->whereHas('category', function ($query) use ($blog) {
            $query->where('category_name', $blog->category->category_name);
        })->where('lang', $lang)->take(3)->get();


        return view('page.detail-blog')->with([
            'locale' => $locale,
            'blog' => $blog,
            'related_blogs' => $related_blogs
        ]);
    }
}
