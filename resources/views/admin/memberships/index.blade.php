@extends('admin.layouts.app')

@section('title', 'Memberships')

@section('memberships-active', 'active')

@section('content')
  <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <h1 class="h2 my-2">@yield('title')</h1>
    <hr>
    <div class="d-flex justify-content-between">
      <div>
        <a href="/memberships/create" class="btn btn-primary mb-2">Create</a>
      </div>
      <form action="/memberships" method="get">
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
              <th scope="col">Portfolio</th>
              <th scope="col">Live Session</th>
              <th scope="col">Mentoring</th>
              <th scope="col">Job Guarantee</th>
              <th scope="col">Price</th>
              <th scope="col">Actions</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($memberships as $membership)
              <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $membership->name }}</td>
                <td>{{ $membership->portfolio }} Projects</td>
                <td>{{ $membership->live_session }} Times</td>
                <td>{{ $membership->mentoring }}</td>
                <td>{{ $membership->job_guarantee }}</td>
                <td>{{ $membership->price }}</td>
                <td>
                  <a href="/memberships/{{ $membership->id }}/edit" class="btn btn-warning">Edit</a>
                  <form action="/memberships/{{ $membership->id }}" method="post" class="d-inline">
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
      {{ $memberships->links() }}
    @else
      <div class="alert alert-danger" role="alert">
        No Memberships!
      </div>
    @endif
  </main>
@endsection
