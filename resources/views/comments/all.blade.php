<div class="container bootstrap snippet">
    <div class="row">
        <div class="col-md-12">
            <div class="blog-comment">
                <h3 class="text-success">Comments</h3>
                <hr/>
                <ul class="comments">
                    @foreach($comments as $comment)
                    <li class="clearfix">
                        <img src="https://bootdey.com/img/Content/user_1.jpg" class="avatar" alt="">
                        <div class="post-comments">
                            <p class="meta">{{ $comment->date }}<a href="#"> {{ $comment->name }}</a> says : <i class="pull-right"><a href="#"><small>Reply</small></a></i></p>
                            <p>
                                {{ $comment->content }}
                            </p>
                        </div>
                    </li>
                    @endforeach

                </ul>
            </div>
        </div>
    </div>
</div>
<div class="row" style="background-color: white; padding: 10px">
{{ $comments->links() }}
</div>