@extends('layouts.main')

@section('container')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h2>{{ $post->title }}</h2>
                <p>By <a href="/authors/{{ $post->user->username }}">{{ $post->user->name }}</a> in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
                <h5>{{ $post->author }}</h5>
                @if ($post->image)
                <div style="max-height: 350px; overflow:hidden;">
                    <img src={{ asset('storage/' . $post->image) }} alt="{{ $post->category->name }}" class="img-fluid">
                </div>
                @else
                <img src="https://source.unsplash.com/500x400?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid">  
                @endif
                <article class="my-3 fs-5">

                    {!! $post->body !!}
                </article>
                <a href="/post">Back to posts</a>
        </div>
    </div>
</div>



@endsection 