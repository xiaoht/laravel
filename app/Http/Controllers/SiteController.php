<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SiteController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function about()
    {
        return view('site.about');
    }
}
