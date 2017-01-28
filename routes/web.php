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

Route::get('/', function () {
    return view('layout.welcome');
});


Route::get('getlogin',['uses'=> 'loginController@getlogin']);

Route::get('getregistration',['uses' =>'RegisterController@getRegister']);


Route::get('register/student',['uses'=>'RegisterController@getStudentRegister']);
Route::post('register/student',['as'=>'student.login','uses'=>'RegisterController@studentRegister']);


Route::get('register/faculty',['uses'=>'RegisterController@getFacultyRegister']);