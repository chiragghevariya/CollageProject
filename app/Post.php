<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Post extends Model
{
    //
    public static function scopeAuth($query)
    {
        return $query->where('user_id',Auth::user()->id);
    }
}
