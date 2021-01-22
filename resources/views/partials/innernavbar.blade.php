<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Styles -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.css">
  <link rel="stylesheet" href="{{asset('css/innernav.css')}}">
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script src="js/innernavbar.js"></script>
</head>

<html>
  <nav class="navbar navbar-expand-lg navbar-mainbg">
    <a class="navbar-brand navbar-logo animated flip" href="#"><img src="{{asset('images/logo2.png')}}" alt="Logo"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <i class="fas fa-bars text-black"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            <div class="hori-selector"><div class="left"></div><div class="right"></div></div>
            <li class="nav-item">
                <a class="nav-link" href="javascript:void(0);"><i class="fas fa-info"></i>ABOUT US</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('vision') }}"><i class="far fa-eye"></i>VISION</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="javascript:void(0);"><i class="fas fa-hands-helping"></i>SERVICES</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('career')}}"><i class="fas fa-user"></i>CAREER</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('contact') }}"><i class="fas fa-address-book"></i>CONTACT US</a>
            </li>
        </ul>
    </div>
  </nav>
</html>

{{-- 
  <script>
    $(document).ready(function() {
        $( ".ml-auto .nav-item" ).bind( "click", function(event) {
            event.preventDefault();
            var clickedItem = $( this );
            $( ".ml-auto .nav-item" ).each( function() {
                $( this ).removeClass( "active" );
            });
            clickedItem.addClass( "active" );
        });
    });
    </script> --}}