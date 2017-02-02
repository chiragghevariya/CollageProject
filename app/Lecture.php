<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Lecture extends Model
{

    public static function scopeauth($query)
    {
        return $query->where('user_id',Auth::user()->id);
    }

//    public function scopeAuth($query)
//    {
//        return $query->where('user_id',\Auth::user()->id);
//    }
}
