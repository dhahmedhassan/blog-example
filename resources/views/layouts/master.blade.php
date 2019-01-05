<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <link rel="stylesheet" href="/css/custom.css">

    <title>The Bootstrap Blog</title>
  </head>
  <body>

    @include('layouts.nav')
  
    @include('layouts.hdr')
  
      <div class="container">
  
        <div class="row">
  
          @yield('content')
  
          @include('layouts.sidebar')
  
        </div><!-- /.row -->
  
      </div><!-- /.container -->
  
    @include('layouts.footer')
  
    @include('layouts.scripts')

  </body>
</html>