<!Doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
</head>
<body>
    Name:{{$data['name']}}<br>
    Email:{{$data['email']}}<br>
    Message:{{$data['message']}}<br>
</body>
</html>
