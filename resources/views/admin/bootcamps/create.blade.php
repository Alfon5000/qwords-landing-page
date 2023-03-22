@extends('admin.layouts.app')

@section('title', 'Create Bootcamps')

@section('bootcamps-active', 'active')

@section('content')
  <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <h1 class="h2 my-2">@yield('title')</h1>
    <hr>
    <form action="/bootcamps" method="post" enctype="multipart/form-data">
      @csrf
      <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input type="text" class="form-control" id="title" name="title">
      </div>
      <div class="mb-3">
        <label for="image" class="form-label">Image</label>
        <input class="form-control" type="file" id="image" name="image">
      </div>
      <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <textarea class="form-control" id="description" rows="5" name="description"></textarea>
      </div>
      <div class="mb-3">
        <button class="btn btn-primary">Save</button>
      </div>
    </form>
  </main>
@endsection
