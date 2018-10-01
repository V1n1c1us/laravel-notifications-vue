<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = ['post_id','user_id','title','conteudo'];
    //usuario e o post que fez o comentário
    public function post()
    {
        // 1 -> N
        return $this->belongsTo(Post::class);
    }

    public function user()
    {
        // 1 -> N
        return $this->belongsTo(User::class);
    }
}
