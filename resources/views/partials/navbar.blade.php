<html>

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.css">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="js/innernavbar.js"></script>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-mainbg">
        <a class="navbar-brand navbar-logo ml-3 wow rollIn" data-wow-duration="2s" data-wow-delay="0.2s" href="#"><img
                src="{{ asset('images/logo2.png') }}" alt="Logo"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars text-black"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto" id="activeClass">
                <li class="nav-item">
                    <a class="nav-link" href="/welcome"><i class="fas fa-home"></i> Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/vision"><i class="far fa-eye"></i> Vision</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" href="/services"><i class="fas fa-hands-helping"></i> Services</a>

                    {{-- <a class="nav-link " data-toggle="dropdown" href="/services"><i class="fas fa-hands-helping"></i> Services</a> --}}
                    {{-- <ul class="dropdown-menu"> --}}
                    {{-- <li><a href="/services">Web Development</a></li> --}}
                    {{-- <li><a href="/services">Web Design</a></li> --}}
                    {{-- <li><a href="/services">Mobile App Development</a></li> --}}

                    {{-- </ul> --}}
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/products"><i class="fas fa-desktop"></i> Products</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/career"><i class="fas fa-user"></i> Career</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/contact_us"><i class="fas fa-address-book"></i> Contact</a>
                </li>
            </ul>
        </div>
    </nav>

    <script>
        $(document).ready(function() {
            var location = window.location.href;
            $('#activeClass li a').each(function() {
                if (location.indexOf(this.href) > -1) {
                    $(this).parent().addClass('active');
                }
            });
        });

    </script>
</body>

</html>
