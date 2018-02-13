@extends('layouts.app', ['title' => 'update'])
@section('content')
    <div class="wrapper row3">
        <main class="hoc container clear">
            <div class="content">
                <div id="comments">
                    <h2>Edit your post</h2>


                    {!! Form::open(['route' => ['updateStore', $post->id],'files' => true]) !!}
                    <div class="one_third first">
                        {{ Form::label('title', 'Title') }}
                        {{ Form::text('title', $post->title) }}
                    </div>
                    <br>
                    <div>
                        {{ Form::label('upload', 'Upload photo') }}
                        {{ Form::file('image') }}
                    </div>
                    <div class="block clear">
                        {{ Form::label('Your story') }}
                        {{ Form::textarea('content', $post->content) }}
                    </div>
                    {{ Form::submit('Send') }}
                    @if(Session::has('status'))
                        <div class="labels-success">
                            {{ Session::get('status') }}
                        </div>
                    @endif
                    {!! Form::close() !!}
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li style="color:red;">{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </div>
            </div>
        </main>
    </div>
    @endsection