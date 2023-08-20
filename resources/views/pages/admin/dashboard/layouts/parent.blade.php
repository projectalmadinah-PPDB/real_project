<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>PPDB | @yield('title')</title>
    @include('pages.admin.dashboard.layouts.include')
  </head>
  <body>
    <div class="container-scroller">
      @include('pages.admin.dashboard.layouts.sidebar')
      <div class="container-fluid page-body-wrapper">
      @yield('content')
      </div>
      @include('pages.admin.dashboard.layouts.navbar')
    </div>
    @include('pages.admin.dashboard.layouts.script')
  </body>
</html>