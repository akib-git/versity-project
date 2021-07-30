<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\FrontController;

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

Route::get('/',[FrontController::class, 'home_view']);
Route::get('/about',[FrontController::class, 'about_view']);
Route::get('/courses',[FrontController::class, 'course_view']);
Route::get('/course-details',[FrontController::class, 'course_details_view']);
Route::get('/departments',[FrontController::class, 'department_view']);
Route::get('/department-details',[FrontController::class, 'department_details_view']);
Route::get('/contact',[FrontController::class, 'contact_view']);
Route::get('/blog',[FrontController::class, 'blog_view']);
Route::get('/login',[FrontController::class, 'front_login']);
Route::get('/register',[FrontController::class, 'front_register']);

