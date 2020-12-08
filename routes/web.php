<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\AdminLogin;

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

Route::get('/','App\Http\Controllers\Home@index');

Route::get('/who-we-are','App\Http\Controllers\About@index');
Route::get('/services','App\Http\Controllers\Services@index');
Route::get('/contact','App\Http\Controllers\Contact@index');
Route::get('/why-cazaldo','App\Http\Controllers\WhyCazaldo@index');
Route::get('/how-we-work','App\Http\Controllers\HowWeWork@index');
Route::get('/faq','App\Http\Controllers\Faq@index');
Route::get('noaccess', function () {
    return view('error/noaccess');
});


//Admin Routes

Route::get('/admin/login','App\Http\Controllers\admin\AdminLogin@index');
Route::get('/admin/dashboard','App\Http\Controllers\admin\Users@dashboard')->name('admin/dashboard');

Route::post('/admin/LoginMe','App\Http\Controllers\admin\AdminLogin@LoginMe')->name('LoginMe');

Route::post('/admin/logout','App\Http\Controllers\admin\AdminLogin@logout')->name('logout');

Route::get('/admin/viewBlogs','App\Http\Controllers\admin\Blogs@viewBlogs')->name('viewBlogs');
Route::get('/admin/blog-list','App\Http\Controllers\admin\Blogs@blogList');
Route::get('/admin/addBlog','App\Http\Controllers\admin\Blogs@addBlog')->name('addBlog');
Route::post('/admin/addNewBlog','App\Http\Controllers\admin\Blogs@addNewBlog')->name('addNewBlog');
Route::post('/admin/editBlog','App\Http\Controllers\admin\Blogs@editBlog')->name('editBlog');
Route::get('/admin/editOld/{id}','App\Http\Controllers\admin\Blogs@editOld');
Route::get('/admin/editBlog/{id}','App\Http\Controllers\admin\Blogs@editBlog');

//Ajax Routes



Route::post('/contact/submitReq','App\Http\Controllers\Contact@processRequest')->name('ajax.request.process');



