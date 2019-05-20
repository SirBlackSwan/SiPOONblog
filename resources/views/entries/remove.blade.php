@extends('base')

@section('title', 'Создание записи в блоге')

@section('content')

<h1>Создание записи в блоге</h1>

{{ Form::model($entry, [
		'method' => 'DELETE',
		'route' => 'entries.destroy',
]) }}
	@include('entries.partials.fields')
	
	{{ Form::submit() }}
{{ Form::close() }}
@endsection