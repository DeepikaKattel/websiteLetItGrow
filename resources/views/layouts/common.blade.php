<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/common.css')}}">
    <link rel="stylesheet" href="{{asset('css/contact.css')}}">
    <link rel="stylesheet" href="{{asset('css/vision.css')}}">
    <link rel="stylesheet" href="{{asset('css/career.css')}}">
    <link rel="stylesheet" href="{{asset('css/animate.css')}}">




    <title>Let IT Grow</title>
</head>
<body>
    @include('partials.innernavbar')
    @yield('content')

    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script>
        function openForm() {
            document.getElementById("careerForm").style.display = "block";
        }

        function closeForm() {
            document.getElementById("careerForm").style.display = "none";
        }

    </script>

    <script src="{{asset('js/wow.min.js')}}"></script>
    <script>
        new WOW().init();
    </script>
</body>
</html>
