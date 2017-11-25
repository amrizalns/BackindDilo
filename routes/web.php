<?php

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

Route::get('/user', function () {
    return view('user/user_list');
});

Auth::routes();

Route::get('/', 'HomeController@home')->name("index");

Route::get('/home', 'HomeController@home');

//select
Route::get('userList','UserController@showUser');
Route::get('businessDetail/{id}','BusinessController@showBusiness')->name('businessDetail');
Route::get('addBusiness/{id}','BusinessController@addBusiness')->name('addbusiness');

//insert
Route::post('businessInsert/{id}','BusinessController@insertBusiness')->name('insertBusiness');

//getdata
Route::get('userEdit/{id}','UserController@editUser');
Route::get('userEditProfile/{id}','UserController@editProfileUser')->name('editProfileUser');
Route::get('businessEdit/{id}','BusinessController@edit');

//update
Route::put('userEdit/update','UserController@updateUser');
Route::post('userProfileEdit','UserController@updateProfileUser')->name('userProfileEdit');

//delete
Route::post('userDelete','UserController@deleteUser');
Route::post('delete','BusinessController@delete');
