<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
//    public function users()
//    {
//        return $this->belongsToMany('App\User');
//    }

    public function user(){

     return $this->belongsTo('App\User')->where('id','name');
    }
}
