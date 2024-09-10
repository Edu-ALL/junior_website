<?php

namespace App\Http\Controllers\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Trait\WebsiteSettingTrait;
use App\Models\Blogs;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    use WebsiteSettingTrait;

    public function index()
    {
        $blogs = Blogs::with(['category' => function ($query) { $query->select('group', 'category_name', 'slug', 'lang'); }])->get();
        $website_data = $this->website_data();

        return view('admin.dashboard')->with([
            'blogs' => $blogs,
            'website_data' => $website_data
        ]);
    }
}
