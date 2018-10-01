<?php

namespace App\Http\Controllers\Posts;

use App\Models\Comment;
use App\Notifications\PostCommented;
use App\Http\Requests\StoreCommentFormRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CommentController extends Controller
{
    public function store(StoreCommentFormRequest $request)
    {
        //retorna o usuário logado
        $comment = $request->user()->comments()->create($request->all());

        $authorUser = $comment->post->user; //pegando o autor do post
        //recuperando os dados do autor, usuário dono do post e disparando a notificação
        $authorUser->notify(new PostCommented($comment));

        return redirect()->route('posts.show', $comment->post->id)
                         ->withSuccess('Comentário realizado com sucesso!');

    }
}
