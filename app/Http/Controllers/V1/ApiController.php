<?php

namespace App\Http\Controllers\V1;

use App\Http\Controllers\Controller;
use App\Models\BlogCategories;
use App\Models\Blogs;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function getReferenceBlog($lang, $categoryId)
    {
        $categories = BlogCategories::find($categoryId);
        $blogs = Blogs::whereNot('lang', $lang)->whereHas('category', function ($query) use ($categories) {
            return $query->where('group', $categories->group);
        })->select('group', 'blog_title')->get();
        return response()->json($blogs);
    }
}
