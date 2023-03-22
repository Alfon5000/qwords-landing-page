@extends('admin.layouts.app')

@section('title', 'Dashboard')

@section('dashboard-active', 'active')

@section('content')
  <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <h1 class="h2 my-2">@yield('title')</h1>
    <hr>
    <div class="row d-flex justify-content-around">
      <div class="col-12 col-sm-4">
        <div class="card text-center bg-primary text-white py-2">
          <div class="card-body">
            <h5 class="card-title">Bootcamps</h5>
            <p class="card-text">3</p>
            <span data-feather="code" class="align-text-bottom"></span>
          </div>
        </div>
      </div>
      <div class="col-12 col-sm-4">
        <div class="card text-center bg-success text-white py-2">
          <div class="card-body">
            <h5 class="card-title">Memberships</h5>
            <p class="card-text">2</p>
            <span data-feather="credit-card" class="align-text-bottom"></span>
          </div>
        </div>
      </div>
      <div class="col-12 col-sm-4">
        <div class="card text-center bg-danger text-white py-2">
          <div class="card-body">
            <h5 class="card-title">Visitors</h5>
            <p class="card-text">10</p>
            <span data-feather="users" class="align-text-bottom"></span>
          </div>
        </div>
      </div>
    </div>

    <hr>

    <h3 class="my-3">Visitor Trends</h3>
    <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>
  </main>
@endsection
