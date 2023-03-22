@extends('layouts.app')

@section('title', 'Home')

@section('content')
  {{-- navbar start --}}
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">{{ env('app_name') }}</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#bootcamps">Bootcamps</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#memberships">Memberships</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contact">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  {{-- navbar end --}}

  {{-- carousel start --}}
  <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
        aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="{{ asset('img/carousels/carousel-1.jpg') }}" class="d-block w-100" alt="..."
          style="max-height: 550px">
        <div class="carousel-caption d-none d-md-block">
          <h5>First slide label</h5>
          <p>Some representative placeholder content for the first slide.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="{{ asset('img/carousels/carousel-2.jpg') }}" class="d-block w-100" alt="..."
          style="max-height: 550px">
        <div class="carousel-caption d-none d-md-block">
          <h5>Second slide label</h5>
          <p>Some representative placeholder content for the second slide.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="{{ asset('img/carousels/carousel-3.jpg') }}" class="d-block w-100" alt="..."
          style="max-height: 550px">
        <div class="carousel-caption d-none d-md-block">
          <h5>Third slide label</h5>
          <p>Some representative placeholder content for the third slide.</p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  {{-- carousel end --}}

  {{-- section bootcamps start --}}
  <section id="bootcamps" class="container my-5">
    <h1 class="text-center text-primary display-6 mb-5">Bootcamps</h1>
    <div class="row">
      @foreach ($bootcamps as $bootcamp)
        <div class="col-12 col-sm-4 g-3">
          <div class="card border border-primary" style="height: 350px;">
            <img src="{{ asset('storage/' . $bootcamp->image) }}" class="card-img-top" alt="..."
              style="max-height: 200px;">
            <div class="card-body">
              <h5 class="card-title text-primary">{{ $bootcamp->title }}</h5>
              <p class="card-text">{{ $bootcamp->description }}</p>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </section>
  {{-- section bootcamps end --}}

  <hr class="border border-primary border-1 opacity-75 mx-auto" width="85%">

  {{-- section memberships start --}}
  <section id="memberships" class="container my-5">
    <h1 class="text-center text-primary display-6 mb-5">Memberships</h1>
    <div class="row justify-content-center">
      @foreach ($memberships as $membership)
        <div class="col-12 col-sm-4">
          <div class="card border border-primary">
            <div class="card-header text-center">
              <h5>
                <strong class="text-primary">{{ $membership->name }}</strong>
              </h5>
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">Portfolio: {{ $membership->portfolio }} Projects</li>
              <li class="list-group-item">Live Session: {{ $membership->live_session }} Times</li>
              <li class="list-group-item">Mentoring 1-on-1: {{ $membership->mentoring }}</li>
              <li class="list-group-item">Job Guarantee: {{ $membership->job_guarantee }}</li>
              <li class="list-group-item">Price: Rp. {{ $membership->price }}</li>
            </ul>
          </div>
        </div>
      @endforeach
    </div>
  </section>
  {{-- section memberships end --}}

  <hr class="border border-primary border-1 opacity-75 mx-auto" width="85%">

  {{-- section about start --}}
  <section id="about" class="container my-5">
    <h1 class="text-center text-primary display-6 mb-5">About Us</h1>
    <div class="row">
      <div class="col-12 col-sm-6">DigiCamp is a company that was founded in 2010. Our company is engaged in digital
        skills training for people who want to start or move into the technology industry. Our company provides several
        bootcamps with a training duration of 6 months from basic to work ready.</div>
      <div class="col-12 col-sm-6"><img src="{{ asset('img/about.jpg') }}" alt="" class="img-fluid"></div>
    </div>
  </section>
  {{-- section about end --}}

  <hr class="border border-primary border-1 opacity-75 mx-auto" width="85%">

  {{-- section contact start --}}
  <section id="contact" class="container my-5">
    <h1 class="text-center text-primary display-6 mb-5">Contact Us</h1>
    <div class="row">
      <div class="col-12 col-sm-6">
        <h2 class="text-primary">Any Question?</h2>
        <p>If you have any questions regarding the bootcamp program, don't hesitate to ask us via the following form. We
          will be very happy to answer any of your questions.</p>
        <img src="{{ asset('img/contact.jpg') }}" alt="" class="img-fluid">
      </div>
      <div class="col-12 col-sm-6">
        <form action="" method="post">
          <div class="mb-3">
            <label for="name" class="form-label">Full Name</label>
            <input type="text" class="form-control" id="name" placeholder="John Doe" name="name">
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Email Address</label>
            <input type="email" class="form-control" id="email" placeholder="name@example.com" name="email">
          </div>
          <div class="mb-3">
            <label for="phone" class="form-label">Phone Number</label>
            <input type="text" class="form-control" id="phone" placeholder="+6281234567890" name="phone">
          </div>
          <div class="mb-3">
            <label for="message" class="form-label">Message</label>
            <textarea class="form-control" id="message" rows="5" placeholder="I want to register on this bootcamp"
              name="message"></textarea>
          </div>
          <div class="mb-3 d-grid">
            <button class="btn btn-primary">Send</button>
          </div>
        </form>
      </div>
    </div>
  </section>
  {{-- section contact end --}}

  {{-- footer start --}}
  <footer class="bg-primary text-white text-center" style="height: 50px;">
    <p style="line-height: 50px;">Copyright &copy 2023 {{ env('app_name') }}</p>
  </footer>
  {{-- footer end --}}
@endsection
