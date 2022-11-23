
@extends('layout')

@section('content')
    <article>
        <h1> <?= $post->title ?> </h1>
        <div>
            <?= $post->body ?>
            {{$post->body}}
            {{!! $post->body !!}}
        </div>
        <a href="/">Go Back</a>

        <?//= $post ?>
        
    </article>
@endsection    
