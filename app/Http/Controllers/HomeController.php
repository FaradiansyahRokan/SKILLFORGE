<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('index');
    }

    public function sesion(){
        return view('sesion');
    }
    public function course(){
        return view('coursemain');
    }
    public function javascript(){
        return view('course-inner');
    }
    public function ccna(){
        return view('course-ccna');
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
    public function vue(){
        return view('course-vue');
    }
    public function react(){
        return view('course-react');
    }
    public function linux(){
        return view('course-linux');
    }
    public function pay(){
        return view('payment');
    }
}
