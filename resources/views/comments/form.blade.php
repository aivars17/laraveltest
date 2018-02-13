<div class="wrapper row3">
    <main class="hoc container clear">
        <div class="content">
        <div id="comments">
            <h2>Write A Comment</h2>

            {!! Form::open(['route' => ['store_comment', $posts->id]]) !!}
                <div class="one_third first">
                    {{ Form::label('name', 'Name *') }}
                    {{ Form::text('name') }}
                </div>
                <div class="one_third">
                    {{ Form::label('Mail *') }}
                    {{ Form::email('email') }}
                </div>
                <div class="block clear">
                    {{ Form::label('Your Comment') }}
                    {{ Form::textarea('content') }}
                </div>
                {{ Form::submit('Send') }}
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