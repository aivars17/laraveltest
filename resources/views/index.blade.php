@extends('layouts.app', [
    'title' => 'Blogas'
    ])

@section('content')

    <div id="pageintro"  class="hoc clear">
        <!-- ################################################################################################ -->

        <!-- ################################################################################################ -->
    </div>
    <!-- ################################################################################################ -->
</div>

<div class=" post_box_back ">
    <main class=" clear">
        <!-- main body -->
        <!-- ################################################################################################ -->

        <ul class="nospace group services ">
            @foreach($posts as $post)

                    <li class="post_box">
                        <article class="bgded overlay" style="background-image:url('{{ URL::asset($post->upload) }}');">
                            <div class="txtwrap"><i class="block fa fa-4x fa-child"></i>
                                <h6 class="heading">{{ $post->title }}</h6>
                                <p>{!! $post->date !!}</p>
                                <p>{{ str_limit($post->content,400) }}</p>
                            </div>
                            <footer><a href="{{ route('single',$post->id) }}"> More &raquo;</a></footer>
                        </article>
                    </li>

            @endforeach
        </ul>
        <!-- ################################################################################################ -->
        <!-- / main body -->
        <div class="clear"></div>
        {{ $posts->links() }}
    </main>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper">
    <article id="shout" class="hoc container clear">
        <!-- ################################################################################################ -->
        <div class="three_quarter first">
            <h2 class="heading btmspace-10">Magna lacus mattis in ipsum tincidunt</h2>
            <p class="nospace">Porta erat cras vitae maximus purus suspendisse blandit nec justo mollis etiam vitae.</p>
        </div>
        <footer class="one_quarter"><a class="btn" href="#">Accumsan metus</a></footer>
        <!-- ################################################################################################ -->
    </article>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row3">
    <section class="hoc container clear">
        <!-- ################################################################################################ -->
        <div class="btmspace-80 center">
            <h3 class="nospace">Gravida nulla aliquam</h3>
            <p class="nospace">Erat volutpat integer vestibulum purus et sagittis rhoncus.</p>
        </div>
        <div class="group">
            <div class="one_third first">
                <h6 class="nospace font-x1">Elit vel porttitor</h6>
                <p>Ex suspendisse vestibulum turpis luctus pretium posuere vestibulum feugiat non metus quis vitae&hellip;</p>
                <footer><a class="btn" href="#">Read More</a></footer>
            </div>
            <article class="one_third"><a href="#"><img class="btmspace-30" src="images/demo/320x210.png" alt=""></a>
                <h6 class="nospace font-x1">Sapien porttitor ut</h6>
                <p>Dignissim praesent consectetur nec tellus ut rutrum nam laoreet finibus mattis integer ullamcorper arcu&hellip;</p>
            </article>
            <article class="one_third"><a href="#"><img class="btmspace-30" src="images/demo/320x210.png" alt=""></a>
                <h6 class="nospace font-x1">Praesent sed blandit</h6>
                <p>Pellentesque vehicula dictum ligula tellus convallis nisl vel scelerisque quam ligula a mauris quisque&hellip;</p>
            </article>
        </div>
        <!-- ################################################################################################ -->
    </section>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->

    @endsection()