<?php


Route::get('/', function () {
    return view('layout.welcome');
});




Route::get('getregistration',['uses' =>'RegisterController@getRegister']);


Route::get('register/student',['uses'=>'RegisterController@getStudentRegister']);
Route::post('register/student',['as'=>'student.login','uses'=>'RegisterController@studentRegister']);


Route::get('register/faculty',['uses'=>'RegisterController@getFacultyRegister']);
Route::post('register/faculty',['as'=>'faculty.login','uses'=>'RegisterController@facultyRegister']);


Route::get('getlogin',['uses'=> 'loginController@getlogin']);

Route::post('getlogin',['uses' =>'loginController@authenticate']);


Route::get('/logout',['as'=>'logout','uses'=>'loginController@logout']);

