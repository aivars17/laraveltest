<?php
/**
 * Created by PhpStorm.
 * User: sevskis
 * Date: 2/5/18
 * Time: 13:27
 */

namespace App\Http\Controllers;
use App\Http\Requests\StorePostRequest;
use App\Post;
use App\Comments;
use Session;
use Carbon\Carbon;
class PostsController extends Controller
{
    public function create()
    {
        return view('create');
    }
    public function store(StorePostRequest $request)
    {
        $file = $request->file('image');
        $destinationPath = 'uploads';
        Post::create($request->except('_token') + [
               'date' => Carbon::now(),
               'upload' => "/" . $destinationPath . "/" . $file->getClientOriginalName()
            ]);
        $file->move($destinationPath,$file->getClientOriginalName());


        return view('create', [
            'saved' => 'Your story posted'
        ]);
    }
    public function show()
    {
        return view('show');
    }

    public function delete($id)
    {
        Comments::where('post_id',$id)->delete();
        Post::findOrFail($id)->delete();

        return redirect()->back();
    }
    public function edit()
    {

        $posts = Post::orderBy('date','DESC')->paginate(15);

        return view('edit', [
            'posts' => $posts
        ]);

    }
    public function index()
    {

    }

    public function update($id)
    {
        $post = Post::findOrFail($id);
        return view('posts.update', [
            'post' => $post
        ]);

    }
    public function updateStore($id, StorePostRequest $request)
    {

        $file = $request->file('image');
        $destinationPath = 'uploads';
        if(isset($file)){
            Post::findOrFail($id)
                ->update($request->except('_token') + [
                        'upload' => "/" . $destinationPath . "/" . $file->getClientOriginalName()
                    ]);

            $file->move($destinationPath,$file->getClientOriginalName());
            Session::flash('status', 'Task was successfuly!!!');
        } else{
            Session::flash('status', 'Ops! update fail');
        }

        return redirect()->route('update',$id);
    }
    public function single($id)
    {
        $post = Post::findOrFail($id);
        $comments = Comments::where('post_id', $id)->paginate(2);

        return view('single', [
            'posts' => $post,
            'comments' => $comments
        ]);
    }
}