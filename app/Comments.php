<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    Public $timestamps = false;
    protected $fillable = ['name','date','content','post_id'];
}
