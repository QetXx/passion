<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class indexcontroller extends Controller
{
    public function store(){
        return view('welcome');
    }
    public function isoka(){
        return view('pages/about');
    }
    public function gon(){
        return view('pages/blog_list');
    }
    public function aomine(){
        return view('pages/contact');
    }
    public function giraya(){
        return view('pages/product');
    }
    public function boubou(){
        return view('pages/testimonial');
    }
}
