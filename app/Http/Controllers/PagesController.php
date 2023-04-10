<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index_page(){
        return view('pages.frontend.index');
    }

    public function blog_page(){
        return view('pages.frontend.blog');
    }

    public function blog_detail_page(){
        return view('pages.frontend.blog-detail');
    }
}
