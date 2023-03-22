@extends('admin.layouts.app')

@section('title', 'Create Memberships')

@section('memberships-active', 'active')

@section('content')
  <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <h1 class="h2 my-2">@yield('title')</h1>
    <hr>
    <form action="/memberships" method="post">
      @csrf
      <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" id="name" name="name">
      </div>
      <div class="mb-3">
        <label for="portfolio" class="form-label">Portfolio</label>
        <input type="number" class="form-control" id="portfolio" name="portfolio">
      </div>
      <div class="mb-3">
        <label for="live-session" class="form-label">Live Session</label>
        <input type="number" class="form-control" id="live-session" name="live_session">
      </div>
      <div class="mb-3">
        <label for="price" class="form-label">Price</label>
        <input type="number" class="form-control" id="price" name="price">
      </div>
      <div class="mb-3">
        <label for="mentoring" class="form-label">Mentoring 1-on-1</label>
        <select class="form-select" id="mentoring" name="mentoring">
          <option selected>Choose Mentoring...</option>
          <option value="No">No</option>
          <option value="Yes">Yes</option>
        </select>
      </div>
      <div class="mb-3">
        <label for="job-guarantee" class="form-label">Job Guarantee</label>
        <select class="form-select" id="job-guarantee" name="job_guarantee">
          <option selected>Choose Job Guarantee...</option>
          <option value="No">No</option>
          <option value="Yes">Yes</option>
        </select>
      </div>
      <div class="mb-3">
        <button class="btn btn-primary">Save</button>
      </div>
    </form>
  </main>
@endsection
