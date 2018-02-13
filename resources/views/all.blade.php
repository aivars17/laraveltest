<table class="table table-condensed">

        <thead class="thead-dark">
        <tr>
            <th scope="col">id</th>
            <th scope="col">Title</th>
            <th scope="col">Content</th>
            <th scope="col">Date</th>
            <th scope="col">Comments</th>
            <th scope="col">Edit</th>
            <th scope="col">Delete</th>
        </tr>
        </thead>
        <tbody style="color: dimgrey;">
        @foreach($posts as $post)
            @if($loop->iteration % 2 == 0)
        <tr>
            <th scope="row">{{ $post->id }}</th>
            <th scope="row">{!! str_limit($post->title,20) !!}</th>
            <td>{{ str_limit($post->content, 20) }}</td>
            <td>{{ $post->date }}</td>
            <td><a type="button" href="{{ route('post_comments',$post->id) }}" class="btn btn-warning">Open</a></td>
            <td><a type="button" href="{{ route('update',$post->id) }}" class="btn btn-warning">Edit</a></td>
            <td><a type="button" href="{{ route('delete',$post->id) }}" class="btn btn-danger">Delete</a></td>
        </tr>
            @else
        <tr>
            <th scope="row">{{ $post->id }}</th>
            <th scope="row">{!! str_limit($post->title,20) !!}</th>
            <td>{{ str_limit($post->content, 20) }}</td>
            <td><b>{!! $post->date !!}</b></td>
            <td><a type="button" href="{{ route('post_comments',$post->id) }}" class="btn btn-warning">Open</a></td>
            <td><a type="button" href="{{ route('update',$post->id) }}" class="btn btn-warning">Edit</a></td>
            <td><a type="button" href="{{ route('delete',$post->id) }}" class="btn btn-danger">Delete</a></td>
        </tr>
        @endif
            @endforeach
        </tbody>
    </table>


