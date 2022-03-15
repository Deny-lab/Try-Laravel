@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Create New Post</h1>
</div>
<div class="col-lg-8">

    <form>
        <div class="mb-3">
          <label for="title" class="form-label">Title</label>
          <input type="email" class="form-control" id="title">
        </div>
        <div class="mb-3">
          <label for="slug" class="form-label">Slug</label>
          <input type="password" class="form-control" id="slug">
        </div>
        <button type="submit" class="btn btn-primary">Create Post</button>
      </form>
</div>
@endsection