<hr>
@if (auth()->check())

@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@if ($errors->any())
    <div class="alert alert-danger">
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </div>
@endif
<form action="{{ route('comment.store') }}" method="post" class="fomr">
     @csrf
    <input type="hidden" name="post_id" value="{{ $post->id }}">
    <div class="form-group">
        <input type="text" name="title" placeholder="Título" class="form-control">
    </div>
    <div class="form-group">
        <textarea type="text" cols="30" rows="5" name="conteudo" placeholder="Comentário" class="form-control"></textarea>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</form>
@else
    <p>Precisa estar logado para fazer os comentários. <a href="{{ route('login') }}">Logar</a></p>
@endif
<hr>
<h3>Comentários <span class="badge badge-primary">{{ $post->comments->count() }}</span></h3>
@foreach ($post->comments as $comment )
    <p>
        <b>{{ $comment->user->name }} comentou:</b>
        {{ $comment->title }} - {{ $comment->conteudo }}
    </p>
@endforeach
