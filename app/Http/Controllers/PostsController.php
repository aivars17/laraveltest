<?php
/**
 * Created by PhpStorm.
 * User: sevskis
 * Date: 2/5/18
 * Time: 13:27
 */

namespace App\Http\Controllers;
use App\Post;
use App\Comments;

class PostsController extends Controller
{
    public function create()
    {
        return view('create');
    }

    public function show()
    {
        return view('show');
    }
    public function edit()
    {

        $post1 = new \stdClass();
        $post1->id = '1';
        $post1->title = 'Ullamcorper';
        $post1->author = 'Petras';
        $post1->date = '2018/01/17';
        $post1->text =  'Lacus eget nullam in ornare magna nam vitae volutpat justo tincidunt&hellip;';
        $post1->logo = 'fa fa-4x fa-apple';
        $post1->class = 'one_third active';
        $post2 = new \stdClass();
        $post2->id = '2';
        $post2->title = 'Malesuada';
        $post2->author = 'Jonas';
        $post2->date = '2018/01/17';
        $post2->text =  'Lacus donec molestie sodales ut nunc felis malesuada quis semper fringilla&hellip;';
        $post2->logo = 'fa fa-4x fa-child';
        $post2->class = 'one_third';
        $post3 = new \stdClass();
        $post3->id = '3';
        $post3->title = 'Facilisis';
        $post3->author = 'Petras';
        $post3->date = '2018/01/17';
        $post3->text =  'Phasellus ut tortor vel mattis lorem dui tortor amet odio quis metus varius&hellip;';
        $post3->logo =  'fa fa-4x fa-chrome';
        $post3->class = 'one_third active';
        $post4 = new \stdClass();
        $post4->id = '4';
        $post4->title = 'Venenatis';
        $post4->author = 'Jonas';
        $post4->date = '2018/01/17';
        $post4->text =  'Vitae est sed rhoncus rutrum ligula quis placerat quisque nec lacinia nisi&hellip;';
        $post4->logo =  'fa fa-4x fa-lock';
        $post4->class = 'one_third first';
        $post5 = new \stdClass();
        $post5->id = '5';
        $post5->title = 'Malesuada';
        $post5->author = 'Petras';
        $post5->date = '2018/01/17';
        $post5->text =  'Vitae est sed rhoncus rutrum ligula quis placerat quisque nec lacinia nisi&hellip;';
        $post5->logo =  'fa fa-4x fa-rocket';
        $post5->class = 'one_third active';
        $post6 = new \stdClass();
        $post6->id = '6';
        $post6->title = 'Ultricies';
        $post6->author = 'Jonas';
        $post6->date = '2018/01/17';
        $post6->text =  'Vitae est sed rhoncus rutrum ligula quis placerat quisque nec lacinia nisi&hellip;';
        $post6->logo =  'fa fa-4x fa-train';
        $post6->class = 'one_third';

        $posts = [$post1,$post2,$post3,$post4,$post5,$post6];

        return view('edit', [
            'posts' => $posts
        ]);

    }
    public function index()
    {



    }
    public function single($id)
    {


        $post = Post::where('id', $id)->get();
        $comments = Comments::where('post_id', $id)->paginate(2);
        dump($post);
        return view('single', [
            'posts' => $post,
            'comments' => $comments
        ]);

    }


}