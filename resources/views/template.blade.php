<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>CODE5 | Official Website</title>
    <!-- Bootstrap core CSS -->
    <link href="{{ url("src/vendor/bootstrap/css/bootstrap.min.css") }}" rel="stylesheet">
    <!-- Custom fonts for this template -->
    <link href="{{ url("src/vendor/fontawesome-free/css/all.min.css") }}" rel="stylesheet" type="text/css">
    <link href="{{ url("https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800") }}" rel='stylesheet' type='text/css'>
    <link href="{{ url("https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic") }}" rel='stylesheet' type='text/css'>
    <!-- Plugin CSS -->
    <link href="{{ url("src/vendor/magnific-popup/magnific-popup.css") }}" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="{{ url("src/css/creative.min.css") }}" rel="stylesheet">
  </head>

  <body>

    <!-- Navigation Bar  -->
    @include('navbar')

    <!-- Header -->
    @include('header')

    <!-- Content Section -->
    @section('contentWebsite')
    @show

    <!-- Bootstrap core JavaScript -->
    <script src="{{ url("src/vendor/jquery/jquery.min.js") }}"></script>
    <script src="{{ url("src/vendor/bootstrap/js/bootstrap.bundle.min.js") }}"></script>

    <!-- Plugin JavaScript -->
    <script src="{{ url("src/vendor/jquery-easing/jquery.easing.min.js") }}"></script>
    <script src="{{ url("src/vendor/scrollreveal/scrollreveal.min.js") }}"></script>
    <script src="{{ url("src/vendor/magnific-popup/jquery.magnific-popup.min.js") }}"></script>

    <!-- Custom scripts for this template -->
    <script src="{{ url("src/js/creative.min.js") }}"></script>

  </body>

</html>