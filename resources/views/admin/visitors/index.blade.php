@extends('admin.layouts.app')

@section('title', 'Visitors')

@section('visitors-active', 'active')

@section('content')
  <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <h1 class="h2 my-2">@yield('title')</h1>
    <hr>
    <div class="d-flex justify-content-end">
      <form action="/visitors" method="get">
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
              <th scope="col">Name</th>
              <th scope="col">Email</th>
              <th scope="col">Phone</th>
              <th scope="col">Message</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($visitors as $visitor)
              <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $visitor->name }}</td>
                <td>{{ $visitor->email }}</td>
                <td>{{ $visitor->phone }}</td>
                <td>{{ $visitor->message }}</td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
      {{ $visitors->links() }}
    @else
      <div class="alert alert-danger" role="alert">
        No Visitors!
      </div>
    @endif
  </main>
@endsection
