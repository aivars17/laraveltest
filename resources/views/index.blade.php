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
<!-- End Top Background Image Wrapper -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class=" post_box_back ">
    <main class=" clear">
        <!-- main body -->
        <!-- ################################################################################################ -->

        <ul class="nospace group services ">
            @foreach($posts as $post)

                    <li class="post_box">
                        <article class="bgded overlay" style="background-image:url('{{ URL::asset('/img/grand.jpg') }}');">
                            <div class="txtwrap"><i class="block fa fa-4x fa-child"></i>
                                <h6 class="heading">{{ $post->title }}</h6>
                                <p>{!! $post->date !!}</p>
                                <p>{{ $post->content }}</p>
                            </div>
                            <footer><a href="{{ route('single',$post->id) }}"> More &raquo;</a></footer>
                        </article>
                    </li>

            @endforeach

            {{--<li class="one_third">--}}
                {{--<article class="bgded overlay" style="background-image:url('images/demo/320x340.png');">--}}
                    {{--<div class="txtwrap"><i class="block fa fa-4x fa-child"></i>--}}
                        {{--<h6 class="heading">Malesuada</h6>--}}
                        {{--<p>Lacus donec molestie sodales ut nunc felis malesuada quis semper fringilla&hellip;</p>--}}
                    {{--</div>--}}
                    {{--<footer><a href="#">More &raquo;</a></footer>--}}
                {{--</article>--}}
            {{--</li>--}}
            {{--<li class="one_third active">--}}
                {{--<article class="bgded overlay" style="background-image:url('images/demo/320x340.png');">--}}
                    {{--<div class="txtwrap"><i class="block fa fa-4x fa-chrome"></i>--}}
                        {{--<h6 class="heading">Facilisis</h6>--}}
                        {{--<p>Nec velit mauris molestie dui et dignissim vestibulum diam tortor cursus&hellip;</p>--}}
                    {{--</div>--}}
                    {{--<footer><a href="#">More &raquo;</a></footer>--}}
                {{--</article>--}}
            {{--</li>--}}
            {{--<li class="one_third first">--}}
                {{--<article class="bgded overlay" style="background-image:url('images/demo/320x340.png');">--}}
                    {{--<div class="txtwrap"><i class="block fa fa-4x fa-lock"></i>--}}
                        {{--<h6 class="heading">Venenatis</h6>--}}
                        {{--<p>Phasellus ut tortor vel mattis lorem dui tortor amet odio quis metus varius&hellip;</p>--}}
                    {{--</div>--}}
                    {{--<footer><a href="#">More &raquo;</a></footer>--}}
                {{--</article>--}}
            {{--</li>--}}
            {{--<li class="one_third active">--}}
                {{--<article class="bgded overlay" style="background-image:url('images/demo/320x340.png');">--}}
                    {{--<div class="txtwrap"><i class="block fa fa-4x fa-rocket"></i>--}}
                        {{--<h6 class="heading">Malesuada</h6>--}}
                        {{--<p>Vitae est sed rhoncus rutrum ligula quis placerat quisque nec lacinia nisi&hellip;</p>--}}
                    {{--</div>--}}
                    {{--<footer><a href="#">More &raquo;</a></footer>--}}
                {{--</article>--}}
            {{--</li>--}}
            {{--<li class="one_third">--}}
                {{--<article class="bgded overlay" style="background-image:url('images/demo/320x340.png');">--}}
                    {{--<div class="txtwrap"><i class="block fa fa-4x fa-train"></i>--}}
                        {{--<h6 class="heading">Ultricies</h6>--}}
                        {{--<p>Venenatis in eget cursus lorem integer vulputate enim vel facilisis sapien&hellip;</p>--}}
                    {{--</div>--}}
                    {{--<footer><a href="#">More &raquo;</a></footer>--}}
                {{--</article>--}}
            {{--</li>--}}
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