@extends('layouts.app', [
    'title' => 'Post'
])

@section('content')


<div class="container">
<div class="row">

    <div class="col-md-8" style="width: 60%; float: left;">
        <div class="row"><h2 style="text-align: center">{{ $posts->title }}</h2></div>

        <div class="row"><h4 style="text-align: center">{{ $posts->date }}</h4></div>

            <div class="row">
            <p style="text-align: center">{{ $posts->content }}</p>
        </div>
    </div>
    <div style="width: 40%;float: left;">
    <div class="col-md-4" style="width:500px;height:600px; ">
        <img style="border-radius: 10px;" src="{{ URL::asset($posts->upload) }}">
    </div>
    </div>


</div>
</div>

    @include('comments.all')
    @include('comments.form')
    @endsection
