<!doctype html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Amiruddin, Solihin, Haziq, Sulaiman">
    <meta name="generator" content="Hugo 0.87.0">
    <title>Online Food Smiley</title>

    <!-- Bootstrap core CSS -->
    <link href=	"{{ URL::asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet"




    <!-- Custom styles for this template -->
    <link href="{{ URL::asset('assets/css/app.css') }}" rel="stylesheet"

</head>
<body>

    @include('layouts.partials.navbar')

    <main class="container">
        @yield('content')
    </main>

    <script src=	"{{ URL::asset('assets/bootstrap/js/bootstrap.bundle.min.js') }}"</script>


  </body>
</html>

