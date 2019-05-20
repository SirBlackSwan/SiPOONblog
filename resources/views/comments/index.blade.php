<h1>Список комментариев</h1>
<table>
	<caption>Список комментариев</caption>
	<tr>
		<th>Идентификатор</th>
		<th>Комментарий</th>
		<th>Дата добавления</th>
	</tr>
@foreach ($comments as $comment)
<tr><td>{{ $comment -> id }}</td><td>{{ $comment -> content }}</td><td>{{ $comment -> created_at }}</td></tr>
@endforeach
</table>
