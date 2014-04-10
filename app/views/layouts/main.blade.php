<!DOCTYPE html>
<html lang="en">

// Basic intro page with keyframe.

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="/img/eatsafe-logo.jpg">

    <title>EAT SAFE SA </title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    @yield('topscript')

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">


    <!-- Custom styles for this template -->
    <link href="/css/intro.css" rel="stylesheet">

    <p class="neon">EAT SAFE</div>













    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>

@if (Session::has('successMessage'))
    <div class="alert alert-success">{{{ Session::get('successMessage') }}}</div>
@endif
@if (Session::has('errorMessage'))
    <div class="alert alert-danger">{{{ Session::get('errorMessage') }}}</div>
@endif

    @yield('content')

<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>

    @yield('bottomscript')
</body>
</html>