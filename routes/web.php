<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

    Route::get('/course' ,function(){
        return view('coursemain');
    });
    Route::get('/course/javascript', function(){
        return view('course-inner');
    });
    Route::get('/course/ccna',function(){
        return view('course-ccna');
    });
    Route::get('/course/html-css' , function(){
        return view('course-html');
    });
    Route::get('/course/python' , function(){
        return view('course-python');
    });
    Route::get('/course/figma' , function(){
        return view('course-figma');
    });
    Route::get('/course/golang', function(){
        return view('course-golang');
    });
    Route::get('/course/vue', function(){
        return view('course-vue');
    });
    Route::get('/course/react', function(){
        return view('course-react');
    });
    Route::get('/course/linux', function(){
        return view('course-linux');
    });
    Route::get('/course/payment' , [HomeController::class , 'pay']);
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Auth::routes();
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
