<h1>Изменение комментария</h1>

{{ Form::model($comment, ['route' => 'comments.update', $comment -> id]) }}

{{ Form::label('content') }}

{{ Form::textarea('content') }}

{{ Form::submit() }}

{{ Form::close() }}

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif