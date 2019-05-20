@extends('base')

@section('title', 'Создание записи в блоге')

@section('content')


{{ Form::model($entry, [
		'route' => 'entries.store',
]) }}
	@include('entries.partials.fields')
	
	{{ Form::submit() }}
{{ Form::close() }}
@endsection