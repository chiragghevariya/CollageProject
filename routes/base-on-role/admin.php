<?php


use Symfony\Component\HttpFoundation\Request;

Route::group(['prefix'=>'admin'],function (){

    Route::get('home',['as'=>'adminhome',function (Request $request){

        if(\Auth::check())

            return view('all-section.admin.home');

        else
            return redirect('/');
    }]);

    Route::resource('admin/department','DepartmentController');


});