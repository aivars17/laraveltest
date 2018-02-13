<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    Public $timestamps = false;
    protected  $fillable = ['title', 'content','date','upload'];
}
