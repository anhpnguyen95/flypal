
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <a href="/airports/{airport}"><title>FlyPal</title></a>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">


    <!-- Custom styles for this template -->
    <link href="/css/establishment.css" rel="stylesheet">
  </head>

  <body>
    
    <!-- Navigation Bar-->

    @include('layouts.nav')

    <!-- Page Content-->

    <div class="container">
   		@yield('content')
    </div>

    <!-- Footer -->

    @include('layouts.footer')

  </body>
</html>
