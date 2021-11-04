<?php

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
Route::get('/services', function () {
    return view('services');
});
Route::get('/team', function () {
    return view('team');
});
Route::get('/testimonials', function () {
    return view('testimonials');
});
Route::get('/about-us', function () {
    return view('about_us');
});
Route::get('/contact-us', function () {
    return view('contact_us');
});
Route::get('/blog', [App\Http\Controllers\PostController::class, 'index']);
Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index']);
///admin/post/create
Route::post('admin/post/{action}', [App\Http\Controllers\AdminController::class, 'create']);