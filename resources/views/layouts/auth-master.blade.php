<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Online Smiley Sign In Form</title>

    <!-- Bootstrap core CSS -->
      <link href=	"{{ URL::asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet"
       <link href=	"{{ URL::asset('assets/css/signin.css') }}" rel="stylesheet"
  
    
   

    
    <!-- Custom styles for this template -->
    <link href="{{ URL::asset('assets/css/signin.css') }}" rel="stylesheet">
</head>
<body class="text-center">
    
    <main class="form-signin">

        @yield('content')
        
    </main>
    

</body>
</html>
 