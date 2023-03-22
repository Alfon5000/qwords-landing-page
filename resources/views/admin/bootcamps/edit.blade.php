@extends('admin.layouts.app')

@section('title', 'Edit Bootcamps')

@section('bootcamps-active', 'active')

@section('content')
  <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <h1 class="h2 my-2">@yield('title')</h1>
    <hr>
    <form action="/bootcamps/{{ $bootcamp->id }}" method="post" enctype="multipart/form-data">
      @method('put')
      @csrf
      <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input type="text" class="form-control" id="title" name="title" value="{{ $bootcamp->title }}">
      </div>
      <div class="mb-3">
        <label for="image" class="form-label">Image</label>
        <input class="form-control" type="file" id="image" name="image" value="{{ $bootcamp->image }}">
      </div>
      <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <textarea class="form-control" id="description" rows="5" name="description">{{ $bootcamp->description }}</textarea>
      </div>
      <input type="hidden" name="old_image" value="{{ $bootcamp->image }}">
      <div class="mb-3">
        <button class="btn btn-primary">Update</button>
      </div>
    </form>
  </main>
@endsection
