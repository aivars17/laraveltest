<table class="table table-condensed">

        <thead class="thead-dark">
        <tr>
            <th scope="col">id</th>
            <th scope="col">Author</th>
            <th scope="col">Post</th>
            <th scope="col">Date</th>
            <th scope="col">Edit</th>
            <th scope="col">Delete</th>
        </tr>
        </thead>
        <tbody style="color: dimgrey;">
        @foreach($posts as $post)
            @if($loop->iteration % 2 == 0)
        <tr>
            <th scope="row">{{ $post->id }}</th>
            <td>{{ $post->author }}</td>
            <td>{{ $post->text }}</td>
            <td>{{ $post->date }}</td>
            <td><button type="button" class="btn btn-warning">Warning</button></td>
            <td><button type="button" class="btn btn-danger">Link</button></td>
        </tr>
            @else
        <tr>
            <th scope="row">{!! $post->id !!}</th>
            <td><b>{!! $post->author !!}</b></td>
            <td><b>{!! $post->text !!}</b></td>
            <td><b>{!! $post->date !!}</b></td>
            <td><button type="button" class="btn btn-warning">Warning</button></td>
            <td><button type="button" class="btn btn-danger">Link</button></td>
        </tr>
        @endif
            @endforeach
        </tbody>
    </table>


