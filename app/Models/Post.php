<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['user_id','title','conteudo'];
    //comentrários de um determinado post
    public function comments()
    {
        // 1 -> N
        return $this->hasMany(Comment::class);
    }

    //autor do post
    public function user()
    {
        // N -> 1
        return $this->belongsTo(User::class);
    }
}
