<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];



    //usuarios com os posts
    // retorna os posts do usuário
    public function posts()
    {
        // 1 -> N
        return $this->hasMany(Post::class);
    }

    //relacionamento entre usuários e comentários
    // retorna todos comentários
    public function comments()
    {
        // 1 -> N
        return $this->hasMany(Comment::class);
    }
}
