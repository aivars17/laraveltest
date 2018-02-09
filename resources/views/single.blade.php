@extends('layouts.app', [
    'title' => 'Post'
])

@section('content')


<div class="container">
<div class="row">

    <div class="col">
        <div class="row"><h2 style="text-align: center">{{ $posts[0]->title }}</h2></div>

        <div class="row"><h4 style="text-align: center">{{ $posts[0]->date }}</h4></div>

            <div class="row">
            <p style="text-align: center">{{ $posts[0]->content }}</p>
        </div>
    </div>


</div>
</div>

    @include('comments.all')
    @include('comments.form')
    @endsection
