<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Styles -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.css">
    <link rel="stylesheet" href="{{asset('css/innernav.css')}}">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

    <script src="js/innernavbar.js"></script>

</head>

<html>
<body>
<nav class="navbar navbar-expand-lg navbar-mainbg">
{{--    <a class="navbar-brand font-weight-bold text-white mt-3 ml-3" href="#">--}}
{{--        <figure class="swing float-right">--}}
{{--            <img src="{{asset('images/logoFull.png')}}"/>--}}
{{--        </figure>--}}
{{--    </a>--}}
    <a class="navbar-brand navbar-logo animated flip" href="#"><img src="{{asset('images/logo2.png')}}" alt="Logo"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars text-black"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto mr-3" id="ulCategory">
            <div class="hori-selector"><div class="left"></div><div class="right"></div></div>
            <li class="nav-item">
                <a class="nav-link" href="/welcome" ><i class="fas fa-info"></i>HOME</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/vision"><i class="far fa-eye"></i>VISION</a>
            </li>
{{--            <li class="nav-item">--}}
{{--                <a class="nav-link" href="/team"><i class="fas fa-hands-helping"></i>Our Team</a>--}}
{{--            </li>--}}
            <li class="nav-item">
                <a class="nav-link" href="/career"><i class="fas fa-user"></i>CAREER</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/contact_us"><i class="fas fa-address-book"></i>CONTACT US</a>
            </li>
        </ul>
    </div>
</nav>

<script>
    $(document).ready(function () {
        var location = window.location.href;
        $('#ulCategory li a').each(function(){
            if(location.indexOf(this.href)>-1) {
                $(this).parent().addClass('active');
            }
        });
    });
</script>
</body>

</html>


