<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comments;

class CommentsController extends Controller
{
    /**
     * @return string
     */
    public function post_comment()
    {
        echo 'labas';
    }
    public function index()
    {
        return view('single');
    }
}
