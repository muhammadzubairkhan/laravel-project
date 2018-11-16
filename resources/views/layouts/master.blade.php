<!DOCTYPE html>
<html lang="en">
  <head>

      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="">
      <meta name="author" content="">
      <link rel="icon" href="{{ asset('favicon.ico') }}">

      <title>@yield('title')</title>

      @include('layouts.header_files')

  </head>

  <body>

  @include('layouts.nav')

  @yield('content')

    @include('layouts.footer')

  @include('layouts.footer_files')

  </body>
</html>
