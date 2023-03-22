@extends('layouts.app')

@section('title', 'Login')

@section('content')
  <div class="container w-25 mt-5">
    <div class="mb-3 text-center">
      <h1 class="text-primary mb-3">{{ env('app_name') }}</h1>
      <h6>Please login for Admin</h6>
    </div>
    <form action="/login" method="post">
      @csrf
      <div class="mb-3">
        <label for="email" class="form-label">Email Address</label>
        <input type="email" class="form-control" id="email" name="email">
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" id="password" name="password">
      </div>
      <div class="mb-3 d-grid">
        <button type="submit" class="btn btn-primary">Login</button>
      </div>
    </form>
  </div>
@endsection
