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

Route::get('/admin/login','App\Http\Controllers\admin\AdminLogin@index')->name('admin/login');
Route::get('/admin','App\Http\Controllers\admin\AdminLogin@index');

//Ajax Routes



Route::post('/contact/submitReq','App\Http\Controllers\Contact@processRequest')->name('ajax.request.process');
//forgot Password

Route::get('/admin/newpass','App\Http\Controllers\admin\AdminLogin@newpass');
Route::get('/admin/forgotPassword','App\Http\Controllers\admin\AdminLogin@forgotPassword')->name('forgotPassword');
Route::post('/admin/resetPass','App\Http\Controllers\admin\AdminLogin@resetPasswordUser')->name('resetPass');
Route::post('/admin/createPasswordUser','App\Http\Controllers\admin\AdminLogin@createPasswordUser')->name('createPasswordUser');
Route::post('/admin/resetPasswordConfirmUser/{activation_id}/{uemail}','App\Http\Controllers\admin\AdminLogin@resetPasswordConfirmUser')->name('resetPasswordConfirmUser');

//Admin Login Routes
Route::post('/admin/LoginMe','App\Http\Controllers\admin\AdminLogin@LoginMe')->name('LoginMe');


Route::group(['middleware'=>['adminMiddleware']], function(){



    //Admin Login Routes

    Route::post('/admin/logout','App\Http\Controllers\admin\AdminLogin@logout')->name('logout');
    Route::get('/admin/dashboard','App\Http\Controllers\admin\Users@dashboard')->name('admin/dashboard');
    Route::get('/admin/profile','App\Http\Controllers\admin\AdminLogin@profile')->name('admProfile');
    Route::post('/admin/editProfile','App\Http\Controllers\admin\AdminLogin@editProfile')->name('editProfile');
    Route::post('/admin/checkemail','App\Http\Controllers\admin\AdminLogin@checkEmailExists')->name('checkemail');
    Route::post('/admin/newPassword','App\Http\Controllers\admin\AdminLogin@newPassword')->name('newPassword');
   


    

    
    
    
    //Conatct and Slider

    Route::post('/admin/editContact', 'App\Http\Controllers\admin\ContactController@editContact')->name('editContact');
    Route::get('/admin/addSlider', 'App\Http\Controllers\admin\SliderController@addSlider')->name('addSlider');
    Route::post('/admin/addNewSlider', 'App\Http\Controllers\admin\SliderController@addNewSlider')->name('addNewSlider');
    Route::get('/admin/viewSliders', 'App\Http\Controllers\admin\SliderController@viewSliders')->name('viewSliders');
    Route::get('/admin/slider-list', 'App\Http\Controllers\admin\SliderController@slidersList');
    Route::get('/admin/editSlider/{id}', 'App\Http\Controllers\admin\SliderController@editOld');
    Route::post('/admin/editSlider', 'App\Http\Controllers\admin\SliderController@editSlider')->name('editSlider');
    Route::get('/admin/editContactData/', 'App\Http\Controllers\admin\ContactController@editcontactdata')->name('editContactus');



    //Blogs

    Route::get('/admin/blog-list','App\Http\Controllers\admin\Blogs@blogList');
    Route::get('/admin/addBlog','App\Http\Controllers\admin\Blogs@addBlog')->name('addBlog');
    Route::post('/admin/addNewBlog','App\Http\Controllers\admin\Blogs@addNewBlog')->name('addNewBlog');
    Route::post('/admin/editBlog','App\Http\Controllers\admin\Blogs@editBlog')->name('editBlog');
    Route::get('/admin/editOld/{id}','App\Http\Controllers\admin\Blogs@editOld');
    Route::get('/admin/editBlog/{id}','App\Http\Controllers\admin\Blogs@editBlog');
    Route::get('/admin/viewBlogs','App\Http\Controllers\admin\Blogs@viewBlogs')->name('viewBlogs');
});