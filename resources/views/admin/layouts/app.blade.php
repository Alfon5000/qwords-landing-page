<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{ env('app_name') }} | @yield('title')</title>
  @include('admin.layouts.style')
</head>

<body>
  @include('admin.layouts.header')
  <div class="container-fluid">
    <div class="row">
      @include('admin.layouts.navbar')
      @yield('content')
    </div>
  </div>
  @include('admin.layouts.script')
</body>

</html>
