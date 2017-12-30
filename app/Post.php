<?php

namespace App;

class Post extends Model
{
	public function comments()
	{
		return $this->hasMany(Comment::class); 

		// misc info: Comment::class = 'App\Class'
	}
}
