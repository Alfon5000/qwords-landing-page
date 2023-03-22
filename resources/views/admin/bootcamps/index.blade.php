@extends('admin.layouts.app')

@section('title', 'Bootcamps')

@section('bootcamps-active', 'active')

@section('content')
  <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <h1 class="h2 my-2">@yield('title')</h1>
    <hr>
    <div class="d-flex justify-content-between">
      <div>
        <a href="/bootcamps/create" class="btn btn-primary mb-2">Create</a>
      </div>
      <form action="/bootcamps" method="get">
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Search..." name="search" value="{{ request('search') }}">
          <button class="btn btn-outline-primary" type="button">Search</button>
        </div>
      </form>
    </div>
    @if ($count > 0)
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Image</th>
              <th scope="col">Title</th>
              <th scope="col">Description</th>
              <th scope="col">Actions</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($bootcamps as $bootcamp)
              <tr>
                <td>{{ $loop->iteration }}</td>
                <td>
                  <img src="{{ asset('storage/' . $bootcamp->image) }}" alt="" class="img-thumbnail"
                    width="200px">
                </td>
                <td>{{ $bootcamp->title }}</td>
                <td>{{ $bootcamp->description }}</td>
                <td>
                  <a href="/bootcamps/{{ $bootcamp->id }}/edit" class="btn btn-warning">Edit</a>
                  <form action="/bootcamps/{{ $bootcamp->id }}" method="post" class="d-inline">
                    @method('delete')
                    @csrf
                    <button class="btn btn-danger">Delete</button>
                  </form>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
      {{ $bootcamps->links() }}
    @else
      <div class="alert alert-danger" role="alert">
        No Bootcamps!
      </div>
    @endif
  </main>
@endsection
