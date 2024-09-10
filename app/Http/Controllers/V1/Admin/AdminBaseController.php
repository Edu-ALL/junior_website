<?php

namespace App\Http\Controllers\V1\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AdminBaseController extends Controller
{
    public function index(): View
    {
        return view('auth.login');
    }
}
