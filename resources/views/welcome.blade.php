<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Let It Grow</title>
        <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">

        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;400&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link href="{{asset('css/animate.css')}}" rel="stylesheet">
        <link href="{{asset('css/swing.css')}}" rel="stylesheet" media="all" type="text/css">
        <link href="{{asset('css/app.css')}}" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">

    </head>
    <div id="preloader">
        <div class="loading">
        </div>
    </div>
    <body>


    @include('partials.navbar')
    <div class="header" id="top">
        <section class="header-section wow fadeInDownBig" data-wow-duration="4s" data-wow-delay="0.1s">
            <div class="center-div justify-content-center">
                <h1 class="font-weight-bold wow fadeInDown" data-wow-duration="5s" data-wow-delay="3.3s">
                    <div class="wrapper">
                        <div class="typing-demo">
                            You Dictate We Create.
                        </div>
                    </div>
                </h1>
                <p class="wow lightSpeedIn" data-wow-duration="5s" data-wow-delay="0.7s">Let IT Grow Your Enterprise</p>
                <div class="header-buttons">
                    <div class="row justify-content-center">
                        <h1 class="wow rotateInUpLeft" data-wow-duration="4s" data-wow-delay="4s"><a
                                href="{{ route('services') }}" class="header-buttons1">Services</a></h1>
                        <div style="height: 10px"></div>
                        <h1 class="wow rotateInUpRight" data-wow-duration="5s" data-wow-delay="6s"><a
                                href="{{ route('products') }}">Products</a></h1>
                    </div>
                </div>
            </div>
        </section>
    </div>
        <!---*****************************     Header Section Ends ************************************-->
        <!---*****************************     About Section Start ************************************-->
        <section class="header-about">
            <div class="container">
                <div class="container headings text-center">
                    <h1 class="font-weight-bold text-center wow fadeInLeft">About Us</h1>
                    <p class="text-center wow fadeIn">Something ABOUT US</p>
                </div>
                <div class="row">
                    <div class="col-lg-1 col-md-1">
                        <div class="row justify-content-center">
                            <h1 class="aboutHeading mt-5 wow fadeIn" data-wow-duration="1.5s" data-wow-delay="1s">
                                Why Us?</h1>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="about-description wow flipInY" data-wow-duration="2.5s" data-wow-delay="0.5s">
                            <p>Let IT Grow Pvt. Ltd. is a company growing in the field of information technology.
                                The organization is a team of driven young and experienced minds that are passionate
                                to provide utmost customer satisfaction in terms of product and service
                                delivery.<br><br>
                                The company mostly undertakes project-based business and primarily focuses on
                                providing software-based services to its customers. However, it serves clients with
                                system related services as well as other related needs.Apart from serving for
                                commercial needs, Let IT grow also provides professional training to
                                freshers/individuals and prepare them for the outer world exposure on the related
                                field.
                                As the name suggests, we aim to maximize the market potential in IT by providing
                                excellent products and services in the related field along with generating skillful
                                manpower.</p>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-5 col-sm-12 aboutImgContainer wow slideInRight" data-wow-duration="3s"
                         data-wow-delay="0.8s"></div>

                </div>
                <div class="row text-center mt-4">
                    <div class="col-lg-12 col-10 more">
                        <p><a href="{{ route('vision') }}" class="wow fadeInUp" data-wow-duration="2s"
                              data-wow-delay="5.5s">More About Us <i class="fa fa-angle-right"></i></a></p>
                    </div>
                </div>
            </div>
        </section>
        <!---*****************************     Service Section Start ************************************-->
        <section class="services" id="services">
            <div class="container headings text-center">
                <h1 class="font-weight-bold text-center wow bounceInUp" data-wow-duration="2s" data-wow-delay="0.5s">What Do We Offer</h1>
                <p class="text-center wow fadeIn" data-wow-duration="2s" data-wow-delay="1s">We provide the best services ...</p>
            </div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-3 col-md-3 col-5 offset-1 offset-lg-0">
                        <div class="names my-3 bg-danger wow bounceInLeft" data-wow-duration="2s" data-wow-delay="1.5s">
                            <h1><i class="fab fa-3x fa-laravel"></i>Laravel</h1>
{{--                            <div class="progress w-75 wow slideInLeft" data-wow-duration="2s" data-wow-delay="1s">--}}
{{--                                <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" style="width:100%"></div>--}}
{{--                            </div>--}}
                        </div>
                        <div class="names my-3 bg-success wow bounceInLeft" data-wow-duration="2s" data-wow-delay="1.5s">
                            <h1><i class="fab fa-3x fa-node"></i>Node Js</h1>
{{--                            <div class="progress w-75 wow slideInLeft" data-wow-duration="2s" data-wow-delay="1.5s">--}}
{{--                                <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" style="width:100%"></div>--}}
{{--                            </div>--}}
                        </div>
                        <div class="names my-3 bg-purple wow bounceInLeft" data-wow-duration="2s" data-wow-delay="1.5s">
                            <h1><i class="fab fa-3x fa-react"></i>React Native</h1>
                            {{--                            <div class="progress w-75 wow slideInLeft" data-wow-duration="2s" data-wow-delay="2.5s">--}}
                            {{--                                <div class="progress-bar progress-bar-striped progress-bar-animated bg-primary" style="width:100%"></div>--}}
                            {{--                            </div>--}}
                        </div>

{{--                        <div class="names my-3 bg-primary wow bounceInLeft" data-wow-duration="2s" data-wow-delay="1.5s">--}}
{{--                            <img class="mx-auto mt-5 d-block" src="{{asset('images/flutter.png')}}"/>--}}
{{--                            <h1>Flutter</h1>--}}
{{--                            <div class="progress w-75 wow slideInLeft" data-wow-duration="2s" data-wow-delay="2s">--}}
{{--                                <div class="progress-bar progress-bar-striped progress-bar-animated bg-info" style="width:100%"></div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="names my-3 bg-secondary wow bounceInLeft" data-wow-duration="2s" data-wow-delay="1.5s">--}}
{{--                            <h1><i class="fab fa-3x fa-asp"></i>ASP.Net</h1>--}}
{{--                            <div class="progress w-75 wow slideInLeft" data-wow-duration="2s" data-wow-delay="3s">--}}
{{--                                <div class="progress-bar progress-bar-striped progress-bar-animated bg-dark" style="width:100%"></div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                    </div>

                    <div class="col-lg-3 col-md-3 col-5 offset-1 offset-lg-0">
                        <div class="names my-3 bg-primary wow bounceInLeft" data-wow-duration="2s" data-wow-delay="1.5s">
                            <h1><i class="fab fa-3x fa-react"></i>React Js</h1>
                            {{--                            <div class="progress w-75 wow slideInLeft" data-wow-duration="2s" data-wow-delay="2.5s">--}}
                            {{--                                <div class="progress-bar progress-bar-striped progress-bar-animated bg-primary" style="width:100%"></div>--}}
                            {{--                            </div>--}}
                        </div>
                        <div class="names my-3 bg-warning wow bounceInLeft" data-wow-duration="2s" data-wow-delay="1.5s">
                            <h1><i class="fab fa-3x fa-python"></i>Python</h1>
                            {{--                            <div class="progress w-75 wow slideInLeft" data-wow-duration="2s" data-wow-delay="2s">--}}
                            {{--                                <div class="progress-bar progress-bar-striped progress-bar-animated bg-info" style="width:100%"></div>--}}
                            {{--                            </div>--}}
                        </div>
                        <div class="names my-3 bg-danger wow bounceInLeft" data-wow-duration="2s" data-wow-delay="1.5s">
                            <h1><i class="fab fa-3x fa-java"></i>Java</h1>
{{--                            <div class="progress w-75 wow slideInLeft" data-wow-duration="2s" data-wow-delay="1.5s">--}}
{{--                                <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" style="width:100%"></div>--}}
{{--                            </div>--}}
                        </div>




                    </div>
                    <div class="col-lg-6 col-md-12 col-10 offset-1 offset-lg-0 serviceDiv">
                        <div class="row justify-content-center web">
                            <div class="col-lg-2 col-12 service-icons wow fadeInUp" data-wow-duration="2s" data-wow-delay="3.5s">
                                <img class="mx-auto mt-5 d-block" src="{{asset('images/development.png')}}"/>
                            </div>
                            <div class="col-lg-10 col-10 wow fadeInUp" data-wow-duration="2s" data-wow-delay="4s">
                                <h2>Web Development</h2>
                                <p>Your business can now use the digitalized platform in the form of Web Application, decreasing the resources required in an efficient manner.</p>
                            </div>
                        </div>
                        <div class="row justify-content-center design">
                            <div class="col-lg-2 col-12 service-icons wow fadeInUp" data-wow-duration="2s" data-wow-delay="4s">
                                <img class="mx-auto mt-5 d-block" src="{{asset('images/design.png')}}"/>
                            </div>
                            <div class="col-lg-10 col-10 wow fadeInUp" data-wow-duration="2s" data-wow-delay="4.5s">
                                <h2>Web Design</h2>
                                <p>Your business can now use the digitalized platform in the form of Web Application, decreasing the resources required in an efficient manner.</p>
                            </div>
                        </div>
                        <div class="row justify-content-center mobile">
                            <div class="col-lg-2 col-12 service-icons wow fadeInUp" data-wow-duration="2s" data-wow-delay="5s">
                                <img class="mx-auto mt-5 d-block" src="{{asset('images/mobile-app.png')}}"/>
                            </div>
                            <div class="col-lg-10 col-10 wow fadeInUp" data-wow-duration="2s" data-wow-delay="5.5s">
                                <h2>Mobile Application Development</h2>
                                <p>Your business can now use the digitalized platform in the form of Web Application, decreasing the resources required in an efficient manner.</p>
                            </div>
                        </div>
                        <div class="row text-center">
                            <div class="col-lg-12 col-10 more">
                                <p><a href="{{route('services')}}"  class="wow fadeInUp" data-wow-duration="2s" data-wow-delay="5.5s">More Services <i class="fa fa-angle-right"></i></a></p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!---*****************************     Service Section End ************************************-->
        <!---*****************************     Product Section Start ************************************-->
        <section class="header-product">
            <div class="container headings text-center">
                <h1 class="font-weight-bold text-center wow fadeIn" data-wow-duration="2.5s" data-wow-delay="1s">Our
                    Products</h1>
                <p class="text-center pb-3 wow fadeIn" data-wow-duration="2.5s" data-wow-delay="1s">Explore our products ...
                </p>
                <div class="row">
                    <div class="product-cards col-lg-4 col-md-4 col-12 wow slideInLeft" data-wow-duration="3s"
                         data-wow-delay="1.5s">
                        <div class="card">
                            <img class="mx-auto mt-5 d-block" src="{{ asset('images/settings.png') }}" />
                            <h2>Inventory Management System</h2>
                            <p>Inventory management includes aspects such as controlling and overseeing purchases — from
                                suppliers as well as customers — maintaining the storage of stock, controlling the amount of
                                product for sale, and order fulfilment.</p>
                        </div>
                    </div>
                    <div class="product-cards col-lg-4 col-md-4 col-12 wow slideInLeft" data-wow-duration="3.8s"
                         data-wow-delay="1s">
                        <div class="card">
                            <img class="mx-auto mt-5 d-block" src="{{ asset('images/settings.png') }}" />
                            <h2>Account Management</h2>
                            <p>Accounting Management assists bookkeepers and accountants in recording and reporting a firm's
                                financial transactions. The functionality of accounting software differs from product to
                                product</p>
                        </div>
                    </div>
                    <div class="product-cards col-lg-4 col-md-4 col-12 wow slideInLeft" data-wow-duration="4.6s"
                         data-wow-delay="0.5s">
                        <div class="card">
                            <img class="mx-auto mt-5 d-block" src="{{ asset('images/settings.png') }}" />
                            <h2>Human Resources Management System</h2>
                            <p>Human Resources Management System (HRMS) is a form of human resources software that combines
                                a number of systems and processes to ensure the easy management of human resources, business
                                processes and data.</p>
                        </div>
                    </div>

                </div>
                <div class="row text-center mt-4">
                    <div class="col-lg-12 col-10 more">
                        <p><a href="{{ route('products') }}" class="wow fadeInUp" data-wow-duration="2s"
                              data-wow-delay="3s">More Products <i class="fa fa-angle-right"></i></a></p>
                    </div>
                </div>

            </div>
        </section>
        <!---*****************************     Product Section End ************************************-->


        <!---*****************************     Projects Done Start ************************************-->
        <section class="projects">
            <div class="container headings text-center">
                <p class="font-weight-bold text-center text-uppercase wow fadeIn" data-wow-duration="2s"
                   data-wow-delay="1s">More than 50 satisfied clients</p>
            </div>
            <div class="container align-items-center text-center">
                <div class="row">
                    <div class="col-md-3 col-12">
                        <i class="fa fa-2x fa-trophy wow rollIn"></i>
                        <h1 class="count wow fadeIn">10</h1>
                        <p class="wow fadeIn">Years of Experience</p>
                    </div>
                    <div class="col-md-3 col-12">
                        <i class="fa fa-2x fa-pencil-ruler wow rollIn"></i>
                        <h1 class="count wow fadeIn">97</h1>
                        <p class="wow fadeIn"> Projects Completed</p>
                    </div>

                    <div class="col-md-3 col-12">
                        <i class="fa fa-2x fa-globe wow rollIn"></i>
                        <h1 class="count wow fadeIn">58</h1>
                        <p class="wow fadeIn">Websites</p>
                    </div>
                    <div class="col-md-3 col-12">
                        <i class="fa fa-2x fa-user-tie wow rollIn"></i>
                        <h1 class="count wow fadeIn">81</h1>
                        <p class="wow fadeIn">Clients</p>
                    </div>
                </div>
            </div>
        </section>
        <!---*****************************     Projects Done End ************************************-->
        <!---*****************************     Find carerr start ************************************-->
        <section class="career" id="career">
            <div class="container headings text-center">
                <h1 class="font-weight-bold text-center wow slideInRight" data-wow-duration="2s" data-wow-delay="0.5s">Join
                    Our Team</h1>

            </div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="career-buttons wow fadeIn" data-wow-duration="2s" data-wow-delay="1.5s">
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
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js" integrity="sha512-d8F1J2kyiRowBB/8/pAWsqUl0wSEOkG5KATkVV4slfblq9VRQ6MyDZVxWl2tWd+mPhuCbpTB4M7uU/x9FlgQ9Q==" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        {{-- Wow js --}}
        <script src="{{asset('js/wow.min.js')}}"></script>
        <script>
            new WOW().init();
        </script>
        <script>
            $('.count').counterUp({
                    delay:10,
                    time:2000
            })

            mybutton = document.getElementById("myBtn");

            // When the user scrolls down 20px from the top of the document, show the button
            window.onscroll = function() {scrollFunction()};

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
            $('body').delay(500).css({'overflow-y':'visible'});
        })
    </script>
    </body>
</html>
