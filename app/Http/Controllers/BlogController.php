<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class BlogController extends Controller
{
    //

    public function blog(){
        return view('blog.myblog');
    }
    public function about(){
        return view('aboutus.about');
    }
    public function contact(){
        return view('contact.contactus');
    }
    public function portfolio(){
        return view('portfolio.ourportfolio');
    }
    public function service(){

        return view('service.ourservice');
    }
    public function pages(){
        return view('service.mypage');
    }


    public function bloghome(){
        return view('blog.bloghome');
    }

    public function blogabout(){
        return view('blog.blogabout');
    }

    public function bloglogin(){
        return view('blog.bloglogin');
    }

    public function blogregister(){
        return view('blog.blogregister');
    }


}
