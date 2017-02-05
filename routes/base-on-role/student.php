<?php


use Symfony\Component\HttpFoundation\Request;

Route::group(['prefix'=>'student','middleware'=>'is_student'],function (){

    Route::get('/home',function (Request $request){

        return view('all-section.student.home');

    });

    Route::resource('result','ResultController');

    Route::resource('submit','SubmissionController');

});






