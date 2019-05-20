@extends('base')

@section('title', 'Создание записи в блоге')

@section('content')

<h1>Редактирование записи в блоге</h1>

{{ Form::model($entry, [
		'method' => 'PUT',
		'route' => 'entries.update',
]) }}
	@include('entries.partials.fields')
	
	{{ Form::submit() }}
{{ Form::close() }}	
@endsection