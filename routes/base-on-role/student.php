<?php


use Symfony\Component\HttpFoundation\Request;

Route::group(['prefix'=>'student'],function (){

    Route::get('home',function (Request $request){

        return "you are student";

    });

});






