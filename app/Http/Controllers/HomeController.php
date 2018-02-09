<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;


use Illuminate\Http\Request;
use stdClass;
use App\Post;

class HomeController extends Controller
{

    public function index()
    {

        $posts = DB::table('posts')->paginate(12);

    return view('index', [
        'posts' => $posts
    ]);
    }


}
