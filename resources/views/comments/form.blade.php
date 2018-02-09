<div class="wrapper row3">
    <main class="hoc container clear">
        <div class="content">
        <div id="comments">
            <h2>Write A Comment</h2>

            {!! Form::open(['route' => 'succes']) !!}
            <div class="one_third first">
            {!! Form::label('name', 'Namen *') !!}
            {{ Form::text('text') }}
            </div>

            {!! Form::close() !!}



                    <label for="name">Name <span>*</span></label>
                    <input type="text" name="name" id="name" value="" size="22" required>

                <div class="one_third">
                    <label for="email">Mail <span>*</span></label>
                    <input type="email" name="email" id="email" value="" size="22" required>
                </div>
                <div class="one_third">
                    <label for="url">Website</label>
                    <input type="url" name="url" id="url" value="" size="22">
                </div>
                <div class="block clear">
                    <label for="comment">Your Comment</label>
                    <textarea name="comment" id="comment" cols="25" rows="10"></textarea>
                </div>
                <div>
                    <input type="submit" name="submit" value="Submit Form">
                    &nbsp;
                    <input type="reset" name="reset" value="Reset Form">
                </div>

            </div>
        </div>
    </main>
</div>