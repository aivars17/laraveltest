@extends('layouts.app',['title' => 'Edit comment'])
@section('content')
    <div class="container">
    <table class="table table-condensed">

        <thead class="thead-dark">
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Post_id</th>
            <th scope="col">Author</th>
            <th scope="col">Comments</th>
            <th scope="col">Date</th>
            {{--<th scope="col">Email</th>--}}
            <th scope="col">Delete</th>
        </tr>
        </thead>
        <tbody style="color: dimgrey;">
        @foreach($comments as $comment)

            @if($loop->iteration % 2 == 0)
                <tr>
                    <th scope="row">{{ $comment->id }}</th>
                    <th scope="row">{{ $comment->post_id }}</th>
                    <td>{{ $comment->name }}</td>
                    <td>{{ $comment->content }}</td>
                    <td>{{ $comment->date }}</td>
                    {{--<td><a type="button" href="{{ route('update',$post->id) }}" class="btn btn-warning">Edit</a></td>--}}
                    <td><a type="button" href="{{ route('delete',$comment->id) }}" class="btn btn-danger">Delete</a></td>
                </tr>
            @else
                <tr>
                    <th scope="row">{{ $comment->id }}</th>
                    <th scope="row">{{ $comment->post_id }}</th>
                    <td>{{ $comment->name }}</td>
                    <td>{{ $comment->content }}</td>
                    <td>{{ $comment->date }}</td>
                    {{--<td><a type="button" href="{{ route('update',$post->id) }}" class="btn btn-warning">Edit</a></td>--}}
                    <td><a type="button" href="{{ route('delete_comment',$comment->id) }}" class="btn btn-danger">Delete</a></td>
                </tr>
            @endif
        @endforeach
        </tbody>
    </table>
    {{ $comments->links() }}
    </div>
@endsection
