<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\SessionController;
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

Route::get('/' , [PageController::class , 'index']);
Route::get('course' , [PageController::class , 'course']);
Route::get('course/javascript' , [PageController::class , 'javascript']);
Route::get('course/react' ,[PageController::class , 'react']);
Route::get('course/html-css', [PageController::class , 'html']);
Route::get('course/python', [PageController::class , 'python']);
Route::get('course/figma', [PageController::class , 'figma']);
Route::get('course/golang', [PageController::class , 'golang']);
Route::get('course/ccna', [PageController::class , 'ccna']);
Route::get('course/vue', [PageController::class , 'vue']);
Route::get('course/linux', [PageController::class , 'linux']);
Route::get('course/payment', [PageController::class , 'pay']);

