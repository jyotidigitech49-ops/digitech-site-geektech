<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index($url)
    {
        return view('blog.blogdetails');
    }
}
