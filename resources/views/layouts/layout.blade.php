<!DOCTYPE html>
<html>
<head>
  <title>Sign-Up/Login Form</title>
  <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel="stylesheet" href="{{ asset('css/formStyle.css') }}" />
</head>

<body>
   <h1><a href="{{url('/')}}">Let IT Grow</a></h1>
    @yield('content')
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script  src="{{asset('js/form.js')}}"></script>
</body>
</html>
