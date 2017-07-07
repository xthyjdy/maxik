<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Laravel Quickstart - Basic</title>

    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/bootstrap.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/main.css') }}" />
    <!-- JavaScript -->
    <script type="text/javascript" src="{{ URL::asset('js/jquery-3.2.1.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/main.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/classes/MAXIK.class.js') }}"></script>
  </head>

  <body>
    <script>document.querySelector('html').style.backgroundColor = '#ccc';</script>
    <div class="container">
      <nav class="navbar navbar-brand">
        <!-- Содержимое Navbar -->
        <h3>Layout</h3>
      </nav>
    </div>

    @yield('content')
  </body>
</html>