<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    Public $timestamps = false;
    Protected $comment_in_to_db =['name','date','comment','post_id'];
}
