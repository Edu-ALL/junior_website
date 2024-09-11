<?php

namespace App\Http\Controllers\V1\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blogs;
use App\Models\WebsiteSetting;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $blogs = Blogs::with(['category' => function ($query) { $query->select('group', 'category_name', 'slug', 'lang'); }])->get();
        $website_data = WebsiteSetting::first();
        $top_blogs = Blogs::where('blog_status', 'publish')->orderby('click_count', 'desc')->take(5)->get();

        return view('admin.dashboard')->with([
            'blogs' => $blogs,
            'website_data' => $website_data,
            'top_blogs' => $top_blogs,
        ]);
    }
}
