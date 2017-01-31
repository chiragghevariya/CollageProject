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

require 'base-on-role/for-login.php';


Route::group(['prefix' =>'all-section','middleware'=>'auth'],function (){


    require 'base-on-role/admin.php';
    require 'base-on-role/faculty.php';
    require 'base-on-role/student.php';


});






