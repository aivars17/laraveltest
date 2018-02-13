<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCommentRequest;
use Illuminate\Http\Request;
use App\Comments;
use Mail;
use Carbon\Carbon;

class CommentsController extends Controller
{
    /**
     * @return string
     */
    public function post_comment($id,StoreCommentRequest $request)
    {

        Comments::create($request->except('_token') + [
                'date' => Carbon::now(),
                'post_id' => $id
            ]);

       return redirect()->route('single', $id);

    }
    public function index()
    {
        return view('single');
    }

    public function post_comments($id)
    {


        $comments = Comments::where('post_id', $id)->paginate(10);

        return view('comments.edit',['comments' => $comments]);
    }
    public function delete_comment($id)
    {
        Comments::findOrFail($id)->delete();
        return redirect()->back();
    }
}
