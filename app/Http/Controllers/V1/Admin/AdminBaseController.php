<?php

namespace App\Http\Controllers\V1\Admin;

use App\Http\Controllers\Controller;
use App\Models\WebsiteSetting;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AdminBaseController extends Controller
{
    public function index(): View
    {
        $data = [
            'website_data' => WebsiteSetting::first()
        ];
        return view('auth.login', $data);
    }
}
