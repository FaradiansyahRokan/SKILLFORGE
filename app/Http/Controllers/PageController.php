<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return view('index');
    }

    public function course(){
        return view('course');
    }

    public function javascript(){
        return view('course-inner');
    }
    public function react(){
        return view('course-react');
    }
    public function html(){
        return view('course-html');
    }
    public function python(){
        return view('course-python');
    }
    public function figma(){
        return view('course-figma');
    }
    public function golang(){
        return view('course-golang');
    }
    public function ccna(){
        return view('course-ccna');
    }
    public function vue(){
        return view('course-vue');
    }
    public function linux(){
        return view('course-linux');
    }
    public function pay(){
        return view('payment');
    }
}
