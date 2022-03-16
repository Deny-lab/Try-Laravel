
@extends('layouts.main')

@section('container')
<h1 class="text-center mb-3">{{ $title }}</h1>

<div class="row justify-content-center mb-3">
  <div class="col-md-6">
    <form action="/post">
      <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Search.." name="search" value="{{ request('search') }}">
        <button class="btn btn-outline-primary" type="submit" >Search</button>
      </div>
    </form>
  </div>
</div>

@if ($posts->count())
<div class="card my-3">
  @if ($posts[0]->image)
  <div style="max-height: 350px; overflow:hidden;">
      <img src={{ asset('storage/' . $posts[0]->image) }} alt="{{ $posts[0]->category->name }}" class="img-fluid mt-3">
  </div>
  @else
  <img src="https://source.unsplash.com/1200x400?{{ $posts[0]->category->name }}" alt="{{ $posts[0]->category->name }}" class="img-fluid mt-3">  
  @endif
    <div class="card-body text-center">
      <h2 class="card-title "><a href="/post/{{ $posts[0]->slug }}" class="text-decoration-none text-dark">{{ $posts[0]->title }}</a></h2>
      <p>
        <small>
          By <a href="/authors/{{ $posts[0]->user->username }}">{{ $posts[0]->user->name }}</a> in <a href="/categories/{{ $posts[0]->category->slug }}">{{ $posts[0]->category->name }}</a>
          {{ $posts[0]->created_at->diffForHumans() }}
        </small>
      </p>
      <p class="card-text">{{ $posts[0]->excerpt }}</p>
      <a href="/post/{{ $posts[0]->slug }}" class="text-decoration-none btn btn-primary">Read more</a>
    </div>
  </div>



<div class="container">
  <div class="row mb-5">
    @foreach ($posts->skip(1) as $post)
    <div class="col-md-4">
      <div class="card mb-3">
        @if ($post->image)
        <div style="max-height: 350px; overflow:hidden;">
            <img src={{ asset('storage/' . $post->image) }} alt="{{ $post->category->name }}" class="img-fluid mt-3">
        </div>
        @else
        <img src="https://source.unsplash.com/500x400?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid mt-3">  
        @endif
        <div class="position-absolute px-3 py-2" style="background-color: rgba(0,0,0,0.6)"><a href="/categories/{{ $post->category->slug }}" class="text-decoration-none text-white">{{ $post->category->name }}</a></div>
        <div class="card-body">
          <h5 class="card-title"><a href="/post/{{ $post->slug }}">{{ $post->title }}</a></h5>
          <p class="card-text">By <a href="/authors/{{ $post->user->username }}">{{ $post->user->name }} </a>{{ $posts[0]->created_at->diffForHumans() }}</p>
          <p>{{ $post->excerpt }}</p>
          <a href="/post/{{ $post->slug }}" class="btn btn-primary">Read more</a>
        </div>
      </div>
    </div>
    @endforeach
  </div>
</div>

@else
<p class="text-center fs-4">No post found.</p>
@endif

<div class="container">
  <div class="row justify-content-center">
    
      {{ $posts->links() }}
    
  </div>
</div>





@endsection

