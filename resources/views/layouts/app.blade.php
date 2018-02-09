<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $title }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('/css/layout.css') }}" rel="stylesheet" type="text/css" media="all">
    <link href="{{ URL::asset('/css/comments.css') }}" rel="stylesheet" type="text/css">
</head>
<body style="background-image:url('{{ URL::asset('/img/grand.jpg') }}'); background-attachment: fixed; background-size:auto width: 100%; background-repeat: round;
        ">
    <div id="app">

        <div class="bgded overlay" style="background-image:url('images/demo/backgrounds/01.png');">
            <!-- ################################################################################################ -->
            <div class="wrapper row1">
                <header id="header" class="hoc clear">
                    <!-- ################################################################################################ -->
                    <div id="logo" class="fl_left">
                        <h1><a href="{{ route('index') }}">Blogas</a></h1>
                    </div>
                    <nav id="mainav" class="fl_right">
                        <ul class="clear">
                            <li class="active"><a href="{{ route('index') }}">Home</a></li>
                            <li><a class="drop" href="#">Pages</a>
                                <ul>
                                    <li><a href="{{ route('create') }}">Write post</a></li>
                                    <li><a href="{{ route('edit') }}">Edit</a></li>

                                </ul>
                            </li>
                            <li><a class="drop" href="#">Dropdown</a>
                                <ul>
                                    <li><a href="#">Level 2</a></li>
                                    <li><a class="drop" href="#">Level 2 + Drop</a>
                                        <ul>
                                            <li><a href="#">Level 3</a></li>
                                            <li><a href="#">Level 3</a></li>
                                            <li><a href="#">Level 3</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Level 2</a></li>
                                </ul>
                            </li>
                            @guest
                                <li><a href="{{ route('login') }}">Login</a></li>
                                <li><a href="{{ route('register') }}">Register</a></li>
                            @else
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                        {{ Auth::user()->name }} <span class="caret"></span>
                                    </a>

                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="{{ route('logout') }}"
                                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                Logout
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                {{ csrf_field() }}
                                            </form>
                                        </li>
                                    </ul>
                                </li>
                            @endguest
                        </ul>
                    </nav>
                    <!-- ################################################################################################ -->
                </header>
            </div>

        @yield('content')
    </div>
        <div class="wrapper row4 bgded overlay" ">
        <footer id="footer" class="hoc clear">
            <!-- ################################################################################################ -->
            <div class="one_third first">
                <h3 class="heading">Geodarn</h3>
                <ul class="faico clear">
                    <li><a class="faicon-facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a class="faicon-twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a class="faicon-dribble" href="#"><i class="fa fa-dribbble"></i></a></li>
                    <li><a class="faicon-linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
                    <li><a class="faicon-google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
                    <li><a class="faicon-vk" href="#"><i class="fa fa-vk"></i></a></li>
                </ul>
            </div>
            <div class="one_third">
                <ul class="nospace meta">
                    <li class="btmspace-15"><i class="fa fa-phone"></i> +00 (123) 456 7890</li>
                    <li><i class="fa fa-envelope-o"></i> info@domain.com</li>
                </ul>
            </div>
            <div class="one_third">
                <form method="post" action="#">
                    <fieldset>
                        <legend>Newsletter:</legend>
                        <div class="clear">
                            <input type="text" value="" placeholder="Type Email Here&hellip;">
                            <button class="fa fa-share" type="submit" title="Submit"><em>Submit</em></button>
                        </div>
                    </fieldset>
                </form>
            </div>
            <!-- ################################################################################################ -->
        </footer>
    </div>
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <div class="wrapper row5">
        <div id="copyright" class="hoc clear">
            <!-- ################################################################################################ -->
            <p class="fl_left">Copyright &copy; 2016 - All Rights Reserved - <a href="#">Sevskis</a></p>
            <p class="fl_right">Template by <a target="_blank" href="http://www.os-templates.com/" title="Free Website Templates">OS Templates</a></p>
            <!-- ################################################################################################ -->
        </div>
    </div>
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
    <!-- JAVASCRIPTS -->
    <script src="layout/scripts/jquery.min.js"></script>
    <script src="layout/scripts/jquery.backtotop.js"></script>
    <script src="layout/scripts/jquery.mobilemenu.js"></script>
    <script src="layout/scripts/jquery.flexslider-min.js"></script>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
