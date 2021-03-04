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

Route::get('check' , 'UserController@check');


Route::get('/', function () {
    $posts = \App\Post::latest()->paginate(5);
    return view('index',compact('posts'));
});


Route::get('/post/{id}/show', function ($id) {
    $post = \App\Post::find($id);
    return view('postShow',compact('post'));
});

Route::get('/post', function () {
    $posts = \App\Post::all();
    return view('allpost',compact('posts'));
});

Route::get('/contact','UserController@showContact');
Route::post('/contacts','UserController@addMessage');
Route::get('/login','UserController@showLogin');
Route::post('/login','UserController@Login')->name('user.login');
Route::get('/logout','UserController@logout');
//Route::get('/log','UserController@addMessage')->name('user.message');

Route::get('/register','UserController@showRegister');
Route::post('/register','UserController@register')->name('user.register');
Route::get('/verify/{token}','UserController@addMessage');


//Route::get('/index', function () {
//    return view('index');
//});

Route::get('/about', function () {
    return view('about');
});


Route::group(['prefix'=>'admin'],function(){

    Route::get('/login','AdminController@showlogin')->name('admin.login.show');
    Route::post('/login','AdminController@login')->name('admin.login');
    Route::get('/logout','AdminController@logout')->name('admin.logut');

    Route::group(['middleware'=>'modAuth'],function() {
        Route::get('/dashboard', 'AdminController@index')->name('admin.dashboard');
        Route::get('/user', 'AdminDashboard@showUser')->middleware('adminAuth');
        Route::get('/post/manage', 'AdminDashboard@managePost')->middleware('adminAuth');
        Route::get('/post/manage/delete/{id}', 'AdminDashboardController@managePostDelete')->middleware('adminAuth');
        Route::get('/post/manage/update/{id}', 'AdminDashboardController@managePostUpdate')->middleware('adminAuth');
        Route::post('/post/manage/update/confirm/{id}', 'AdminDashboardController@managePostUpdateConfirm')->middleware('adminAuth');
        Route::post('/roleChange', 'AdminDashboardController@roleChange')->middleware('adminAuth');
        Route::get('/{id}/disable', 'AdminDashboardController@disable')->middleware('adminAuth');
        Route::get('/{id}/enable', 'AdminDashboardController@enable')->middleware('adminAuth');
        Route::get('/post/create', 'AdminDashboardController@createPostShow');
        Route::post('/post/create', 'AdminDashboardController@createPost');

    });

});






