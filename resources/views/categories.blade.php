@extends('layouts.main')

@section('container')

<h1 class="m-3">Categories</h1>

{{-- @php
dd($categories);
@endphp --}}

<div class="container">
    <div class="row">
        @foreach ($categories as $category)
        <div class="col-md-4">
            <div class="card bg-dark text-white">
                <a href="/categories/{{$category->slug }}">
                    <img src="https://source.unsplash.com/500x400?{{ $category->name }}" class="card-img" alt="{{ $category->name }}">
                    <div class="card-img-overlay d-flex align-items-center">
                        <h5 class="card-title text-white text-center flex-fill p-4 fs-3" style="background-color: rgba(0, 0, 0, 0.6)">{{ $category->name }}</h5>
                    </div>
                </a>
              </div>
        </div>
        @endforeach
    </div>
</div>



@endsection 