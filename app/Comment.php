<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
	//Перечень атрибутов, которые разрешено заполнять в таблице БД с использование этого класса
    protected $fillable = ['content'];
}

/*$comment = new Comment();
$comment->title = 'Привет, MIRV!';
$comment->content = 'Текст комментария';
$comment->save();

$comment->delete();