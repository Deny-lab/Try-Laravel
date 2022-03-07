
@extends('layouts.main')

@section('container')
<h1>Post</h1>

@foreach ($posts as $post)

<article class="mb-5 border-bottom pb-4">
    <h2>
        <a href="/post/{{ $post->slug }}">{{ $post->title }}</a>
    </h2>
    <p>By <a href="/authors/{{ $post->user->username }}">{{ $post->user->name }}</a> in <a href="/categories/{{ $post->category->name }}">{{ $post->category->name }}</a></p>
    <h5>{{ $post->author }}</h5>
    <p>{{ $post->excerpt }}</p>
    <a href="/post/{{ $post->slug }}">Read more</a>
</article>

    
@endforeach

@endsection

