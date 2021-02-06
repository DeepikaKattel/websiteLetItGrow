<html>

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.css">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="js/innernavbar.js"></script>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar fixed-top navbar-expand-lg scrolling-navbar">
        <div class="container-fluid">

            <!-- Brand -->
            <a class="navbar-brand navbar-logo wow rollIn" href="/welcome" data-wow-duration="2s" data-wow-delay="0.2s"
                href="#"><img src="{{ asset('images/logo2.png') }}" alt="Logo"></a>

            <!-- Collapse -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Links -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                </ul>

                <!-- Right -->
                <ul class="navbar-nav nav-flex-icons" id="activeClass">
                    {{-- <li class="nav-item">
                        <a class="nav-link" href="/welcome">Home
                            <span class="sr-only">(current)</span>
                        </a>
                    </li> --}}
                    <li class="nav-item">
                        <a class="nav-link" href="/vision">Vision
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/services">Services
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/products">Products
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                </ul>

            </div>

        </div>
    </nav>
    <!-- Navbar -->
    <script>
        $(document).ready(function() {
            var location = window.location.href;
            console.log('nav active');
            $('#activeClass li a').each(function() {
                console.log('nav active 2');
                if (location.indexOf(this.href) > -1) {
                    console.log('nav active 3');
                    $(this).parent().addClass('active');
                }
            });
        });

    </script>

    <script>
        window.onscroll = () => {
            const nav = document.querySelector('#navbar');
            if (this.scrollY <= 10) nav.className = '';
            else nav.className = 'scroll';
        };

    </script>
</body>

</html>
