@extends('layouts.app')

@section('content')

<h1>{{ $post->title }}</h1>
<div>
    {{ $post->conteudo }}
</div>

@include('posts.comments.comment')
@endsection
