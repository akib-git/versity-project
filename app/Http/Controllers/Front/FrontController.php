<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\notice;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function home_view(){
        $result['notices'] = notice::all();
        return view('front.home',$result);
    }
    public function about_view(){
        return view('front.about');
    }
    public function course_view(){
        return view('front.course');
    }
    public function contact_view(){
        return view('front.contact');
    }
    public function blog_view(){
        return view('front.blog');
    }
    public function front_login(){
        return view('front.login');
    }
    public function front_register(){
        return view('front.register');
    }
}
