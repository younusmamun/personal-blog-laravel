
<x-layout>
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
</x-layout>  
