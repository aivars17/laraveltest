<div class="wrapper row3">
    <main class="hoc container clear">
        <div class="content">
            <div id="comments">
                <h2>Write A Comment</h2>

                {!! Form::open(['route' => 'store_post','files' => true]) !!}
                <div class="one_third first">
                    {{ Form::label('title', 'Title') }}
                    {{ Form::text('title') }}
                </div>
                <br>
                <div>
                    {{ Form::label('upload', 'Upload photo') }}
                    {{ Form::file('image') }}
                </div>
                <div class="block clear">
                    {{ Form::label('Your story') }}
                    {{ Form::textarea('content') }}
                </div>
                {{ Form::submit('Send') }}
                @if(isset($saved))
                <div class="labels-success">
                    {{ $saved }}
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