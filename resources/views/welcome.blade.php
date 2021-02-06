<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Software Company Nepal, App Development Nepal , Website, Mobile Application</title>
    <link rel="shortcut icon" href="{{ asset('images/logo2.png') }}" />


    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/footer.css') }}">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
        integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w=="
        crossorigin="anonymous" />

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="{{ asset('css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('css/swing.css') }}" rel="stylesheet" media="all" type="text/css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/products.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" rel="stylesheet">
    <script>
        $(document).ready(function() {
            var scroll_start = 0;
            var startchange = $('#startchange');
            var offset = startchange.offset();
            $(document).scroll(function() {
                scroll_start = $(this).scrollTop();
                if (scroll_start > offset.top) {
                    $('#navbar').css('background-color', '#f0f0f0');
                } else {
                    $('#navbar').css('background-color', 'transparent');
                }
            });
        });

    </script>
</head>

<div id="preloader">
    <div class="loading">
    </div>
</div>

<body id="startchange">
    @include('partials.navbar')

    <section class="header">
        <!-- The video -->
        <video autoplay muted loop id="myVideo">
            <source src="../images/testvideo.mp4" type="video/mp4">
        </video>
    </section>

    {{-- <section class="header-section wow fadeInDownBig" data-wow-duration="4s" data-wow-delay="0.1s">
        <div class="center-div justify-content-center">
            <h1 class="font-weight-bold wow fadeInDown" data-wow-duration="5s" data-wow-delay="3.3s">
                <div class="wrapper">
                    <div class="typing-demo">
                        You Dictate We Create.
                    </div>
                </div>
            </h1>
            <p class="wow lightSpeedIn letITGrow" data-wow-duration="5s" data-wow-delay="0.7s">Let IT Grow Your
                Enterprise</p>
            <div class="header-buttons">
                <div class="row justify-content-center">
                    <h1 class="wow rotateInUpLeft" data-wow-duration="3s" data-wow-delay="3s"><a
                            href="{{ route('services') }}" class="header-buttons1">Services</a></h1>
                    <div style="width: 10px"></div>
                    <h1 class="wow rotateInUpRight " data-wow-duration="3s" data-wow-delay="3s"><a
                            href="{{ route('products') }}" class="header-buttons1">Products</a></h1>
                </div>
            </div>
        </div>
    </section> --}}
    <!---*****************************     Header Section Ends ************************************-->


    <!---*****************************     About Us Section Start ************************************-->
    <section class="header-about">
        <div class="container">
            <div class="container headings text-center">
                <h1 class="font-weight-bold text-center wow fadeIn" data-wow-duration="3s" data-wow-delay="1.0s">
                    About Us</h1>
                <p class="text-center wow fadeIn" data-wow-duration="3s" data-wow-delay="1.5s">Creating value
                    through
                    true convergence.
                </p>
            </div>
            <div class="row">
                <div class="col-lg-1 col-md-1 col-12">
                    <div class="row justify-content-center">
                        <h1 class="aboutHeading wow fadeIn" data-wow-duration="1.5s" data-wow-delay="2s">
                            Why Us?</h1>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="about-description wow flipInY" data-wow-duration="3s" data-wow-delay="1.5s">
                        <p>Let IT Grow is a team of driven young and experienced minds that are passionate to provide
                            utmost customer satisfaction in terms of product and service delivery.
                            <br><br>
                            Initially, we design a <span style="font-weight: bold;">PROTOTYPE</span> with the right mix
                            of skills from our team to deliver
                            <span style="font-weight: bold;">HIGH QUALITY</span> products. We eliminate unnecessary
                            expenses to <span style="font-weight: bold;">REDUCE COST</span> of the product. We work
                            in an <span style="font-weight: bold;">AGILE ENVIRONMENT</span> to ensure that we deliver on
                            what we commit to, and <span style="font-weight: bold;">MEET DEADLINES</span> .
                            <br><br>
                            We thrive on the valuable feedback provided by our customers and work on it to make the
                            product/s even better. We treat your product as one of our own and that helps in bringing
                            the best out of the team to deliver high quality product on time at an affordable cost. We
                            assure to take your vision to the digital world.
                        </p>
                    </div>
                </div>
                <div class="col-lg-5 col-md-5 col-12 wow slideInRight" data-wow-duration="3s" data-wow-delay="0.5s">
                    <img src="/images/aboutus.jpg" class="img-fluid" />
                </div>

            </div>
            <div class="row text-center">
                <div class="col-lg-12 col-md-12 col-12 more">
                    <p><a href="{{ route('vision') }}" class="wow fadeInUp" data-wow-duration="1.5s"
                            data-wow-delay="1.5s">More About Us<i class="fa fa-angle-right"></i></a></p>
                </div>
            </div>
        </div>
    </section>

    <!---*****************************     Service Section Start ************************************-->
    <section class="services" id="services">
        <div class="container headings text-center">
            <h1 class="font-weight-bold text-center wow fadeIn" data-wow-duration="3s" data-wow-delay="1s">
                What Do We Offer</h1>
            <p class="text-center wow fadeIn" data-wow-duration="3s" data-wow-delay="1.5s">Offering the best.
            </p>
        </div>
        <div class="container">
            <div class="row justify-content-center serviceDiv">
                <div class="col-lg-4 col-md-4 col-12 web wow fadeIn" data-wow-duration="3s" data-wow-delay="2.2s">
                    <img class="mx-auto d-block" src="{{ asset('images/development.png') }}" />
                    <h2 class="text-center">Web and Mobile App Development</h2>
                    <p>{!! substr(
                        'Web and Mobile development is the process of application development and maintenance. It is
                        basically the work that happens behind the scenes to make a application look great, workfast and
                        perform well with a seamless user experience. Web application is intended to run on desktops and
                        mobile application is intended to run on mobile devices.

                        Application development is rapidly growing. From retail, telecommunications and e-commerce to
                        insurance, healthcare and government, organizations across industries must meet user
                        expectations for real-time, convenient ways to conduct transactions and access information.

                        Being a tech company, we are aspired to give the best service to our clients. For that, we
                        perform research and observe the emerging needs and requirements of the modern clients that
                        completely suits the modern businesses.',
                        0,
                        200,
                        ) !!}...</p>


                </div>
                <div class="col-lg-4 col-md-4 col-12 mobile wow fadeIn" data-wow-duration="3s" data-wow-delay="2.2s">
                    <img class="mx-auto d-block" src="{{ asset('images/mobile-app.png') }}" />
                    <h2 class="text-center">UI and UX Graphic Design</h2>
                    <p>{!! substr(
                        'UI and UX Graphic Design is what creates the overall look and feel when we’re using a website.
                        It’s the process of planning and building the elements of your website, from structure and
                        layout to images, colors, fonts and graphics.

                        Being a tech company, we are aspired to give the best service to our clients. For that, we Web
                        design has numerous components that work together to create the finished experience of a
                        website, including graphic design, user experience design, interface design, search engine
                        optimization (SEO) and content creation. These elements determine how a website looks, feels and
                        works on various devices. Check out this in-depth guide on building a website, if you want to
                        learn more about the whole process.',
                        0,
                        200,
                        ) !!}...</p>
                </div>
                <div class="col-lg-4 col-md-4 col-12 design wow fadeIn" data-wow-duration="3s" data-wow-delay="2.2s">

                    <img class="mx-auto d-block" src="{{ asset('images/design.png') }}" />

                    <h2 class="text-center">Data Analysis and Reporting</h2>
                    <p>{!! substr(
                        'Data Analysis and Reporting: We figure out the data you need and transpire it into the reports
                        that are easy to understand. We estimate the averages of the data, evaluate the exceptions from
                        the average, and look at the data from the perspective of what the scope is. We provide
                        analytical statistics, foresee insights and provide suggestions of actions to meet your
                        objectives. We also build a narrative that help analytical efforts to become more accessible,
                        digestible and universal

                        We provide Modern data dashboards to consolidate data from various sources, providing access to
                        a wealth of insights in one centralized location.',
                        0,
                        200,
                        ) !!}...</p>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-lg-12 col-md-12 col-12 more">
                    <p><a href="{{ route('services') }}" class="wow fadeInUp" data-wow-duration="1.5s"
                            data-wow-delay="1.5s">Read More<i class="fa fa-angle-right"></i></a></p>
                </div>
            </div>
        </div>
    </section>

    <!---*****************************     Service Section End ************************************-->

    <!---*****************************     Product Section Start ************************************-->
    @if ($products)
        <section class="header-product">
            <div class="container headings text-center">
                <h1 class="font-weight-bold text-center wow fadeIn" data-wow-duration="2.5s" data-wow-delay="1s">Our
                    Products</h1>
                <p class="text-center wow fadeIn" data-wow-duration="2.5s" data-wow-delay="1s">Explore our products
                    ...
                </p>
                <div class="row">
                    @foreach ($products as $product)
                        <div class="product-cards col-lg-4 col-md-4 col-12 wow slideInLeft" data-wow-duration="3s"
                            data-wow-delay="1.5s">
                            <a href="{{ url('product_features/' . $product->id) }}">
                                <div class="card">
                                    <div class="overlay">
                                        <img src="/storage/Images/Products/{{ $product->image }}" />
                                        <h2>{{ $product->name }}</h2>
                                        <p>{{ $product->description }}</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
                <div class="row text-center">
                    <div class="col-lg-12 col-12 more">
                        <p><a href="{{ route('products') }}" class="wow fadeInUp" data-wow-duration="1.5s"
                                data-wow-delay="1.5s">More Products <i class="fa fa-angle-right"></i></a></p>
                    </div>
                </div>
            </div>
        </section>
    @endif
    <!---*****************************     Product Section End ************************************-->


    <!---*****************************     Projects Done Start ************************************-->
    <section class="projects">
        <div class="container headings text-center">
            <p class="font-weight-bold text-center text-uppercase wow fadeIn" data-wow-duration="3s"
                data-wow-delay="1s">More than 50 satisfied clients</p>
        </div>
        <div class="container align-items-center text-center">
            <div class="row">
                <div class="col-md-3 col-12">
                    <i class="fa fa-2x fa-trophy wow rollIn"></i>
                    <h1 class="wow fadeIn">10</h1>
                    <p class="wow fadeIn">Years of Experience</p>
                </div>
                <div class="col-md-3 col-12">
                    <i class="fa fa-2x fa-pencil-ruler wow rollIn"></i>
                    <h1 class="wow fadeIn">97</h1>
                    <p class="wow fadeIn"> Projects Completed</p>
                </div>

                <div class="col-md-3 col-12">
                    <i class="fa fa-2x fa-globe wow rollIn"></i>
                    <h1 class="wow fadeIn">58</h1>
                    <p class="wow fadeIn">Websites</p>
                </div>
                <div class="col-md-3 col-12">
                    <i class="fa fa-2x fa-user-tie wow rollIn"></i>
                    <h1 class="wow fadeIn">81</h1>
                    <p class="wow fadeIn">Clients</p>
                </div>
            </div>
        </div>
    </section>

    <!---*****************************     Projects Done End ************************************-->

    <section class="platforms">
        <div class="container headings text-center">
            <h1 class="font-weight-bold text-center wow fadeIn" data-wow-duration="3s" data-wow-delay="1s">
                Our Development Platforms</h1>
            <p class="text-center pb-3 wow fadeIn" data-wow-duration="3s" data-wow-delay="1.5s">All abour your needs.
            </p>
        </div>
        <div class="row">
            <div class="container">
                <div class="logo-slider wow flipInX" data-wow-duration="3s" data-wow-delay="1.8s">
                    <div class="item" style="padding: 14px 0px;">
                        <div class="row justify-content-center">
                            <div class="col-lg-8 col-md-8 col-8 card">
                                <img src="{{ asset('images/laravel.png') }}" />
                            </div>
                        </div>
                    </div>
                    <div class="item" style="padding: 14px 0px;">
                        <div class="row justify-content-center">
                            <div class="col-lg-8 col-md-8 col-8 card">
                                <img src="{{ asset('images/node.png') }}" />
                            </div>
                        </div>
                    </div>
                    <div class="item" style="padding: 14px 0px;">
                        <div class="row justify-content-center">
                            <div class="col-lg-8 col-md-8 col-8 card">
                                <img src="{{ asset('images/react.png') }}" />
                            </div>
                        </div>
                    </div>
                    <div class="item" style="padding: 14px 0px;">
                        <div class="row justify-content-center">
                            <div class="col-lg-8 col-md-8 col-8 card">
                                <img src="{{ asset('images/flutter.png') }}" />

                            </div>
                        </div>
                    </div>
                    <div class="item" style="padding: 14px 0px;">
                        <div class="row justify-content-center">
                            <div class="col-lg-8 col-md-8 col-8 card">
                                <img src="{{ asset('images/python.png') }}" />

                            </div>
                        </div>
                    </div>
                    <div class="item" style="padding: 14px 0px;">
                        <div class="row justify-content-center">
                            <div class="col-lg-8 col-md-8 col-8 card">
                                <img src="{{ asset('images/oracle.png') }}" />
                            </div>
                        </div>
                    </div>
                    <div class="item" style="padding: 14px 0px;">
                        <div class="row justify-content-center">
                            <div class="col-lg-8 col-md-8 col-8 card">
                                <img src="{{ asset('images/java.png') }}" />
                            </div>
                        </div>
                    </div>
                    <div class="item" style="padding: 14px 0px;">
                        <div class="row justify-content-center">
                            <div class="col-lg-8 col-md-8 col-8 card">
                                <img src="{{ asset('images/asp.png') }}" />
                            </div>
                        </div>
                    </div>
                    <div class="item" style="padding: 14px 0px;">
                        <div class="row justify-content-center">
                            <div class="col-lg-8 col-md-8 col-8 card">
                                <img src="{{ asset('images/mysql.png') }}" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!---*****************************     Find carerr start ************************************-->
    <section class="career" id="career">
        <div class="container headings text-center">
            <h1 class="font-weight-bold text-center wow fadeIn" data-wow-duration="3s" data-wow-delay="1s">
                Join Our Team</h1>
            <p class="text-center wow fadeIn" data-wow-duration="3s" data-wow-delay="1.5s">Out of yourself and into
                the team.
            </p>
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="career-buttons wow tada" data-wow-duration="2s" data-wow-delay="2s">
                    <a href="{{ route('career') }}">Find Jobs <i class="fa fa-search"></i></a>
                </div>
            </div>
        </div>
    </section>



    <!---*****************************     Find carerr end ************************************-->
    <!---*****************************     Footer start  ************************************-->
    @include('partials.footer')
    <!---*****************************     Footer end  ************************************-->


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"
        integrity="sha512-d8F1J2kyiRowBB/8/pAWsqUl0wSEOkG5KATkVV4slfblq9VRQ6MyDZVxWl2tWd+mPhuCbpTB4M7uU/x9FlgQ9Q=="
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script>
        $('.logo-slider').slick({
            slidesToShow: 4,
            slidesToScroll: 1,
            dots: false,
            arrows: false,
            autoplay: true,
            autoplaySpeed: 3000,
            infinite: true,
            responsive: [{
                breakpoint: 768,
                settings: {
                    slidesToShow: 3,
                    centerMode: false,
                    /* set centerMode to false to show complete slide instead of 3 */
                    slidesToScroll: 1
                }
            }]
        });

    </script>
    {{-- Wow js --}}
    <script src="{{ asset('js/wow.min.js') }}"></script>
    <script>
        new WOW().init();

    </script>
    <script>
        $('.count').counterUp({
            delay: 10,
            time: 2000
        })

        mybutton = document.getElementById("myBtn");

        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function() {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                mybutton.style.display = "block";
            } else {
                mybutton.style.display = "none";
            }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            document.body.scrollTop = 0; // For Safari
            document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
        }

    </script>
    <script>
        $(window).on('load', function() { // makes sure the whole site is loaded
            $('.navbar').hide();
            $('#preloader').delay(900).fadeOut('slow'); // will fade out the white DIV that covers the website.
            $('.navbar').delay(800).fadeIn('slow');
            $('body').delay(500).css({
                'overflow-y': 'visible'
            });
        })

    </script>
</body>

</html>
