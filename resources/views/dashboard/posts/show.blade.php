@extends('dashboard.layouts.main')

@section('container')
<div class="container">
    <div class="row my-4">
        <div class="col-lg-8">
            <h2>{{ $posts->title }}</h2>

            <a href="/dashboard/posts" class="btn btn-success"><span data-feather="arrow-left"></span> Back to my posts</a>
            <a href="" class="btn btn-warning"><span data-feather="edit"></span> Edit</a>

            <form action="/dashboard/posts/{{ $posts->slug }}" method="post" class="d-inline">
                @method('delete')
                @csrf
                <button class="btn btn-danger" onclick="return confirm('Are you sure?')">
                  <span data-feather="x-circle"></span> Delete</button>
              </form>

            

                <h5>{{ $posts->author }}</h5>
                <img src="https://source.unsplash.com/1200x400?{{ $posts->category->name }}" alt="{{ $posts->category->name }}" class="img-fluid mt-3">
                
                <article class="my-3 fs-5">

                    {!! $posts->body !!}
                </article>
                
        </div>
    </div>
</div>
@endsection