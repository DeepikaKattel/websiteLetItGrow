<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Let It Grow</title>
        <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">

        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;400&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link href="{{asset('css/animate.css')}}" rel="stylesheet">
        <link href="{{asset('css/swing.css')}}" rel="stylesheet" media="all" type="text/css">
        <link href="{{asset('css/app.css')}}" rel="stylesheet">

    </head>
    <body>
    @include('partials.innernavbar')
        <div class="header" id="top">

            <section class="header-section">
                <div class="center-div justify-content-center">
                    <h1 class="font-weight-bold wow slideInLeft" data-wow-duration="3s" data-wow-delay="0.1s">You dictate we create</h1>
                    <p class="wow bounceInUp" data-wow-duration="3s" data-wow-delay="1.5s">Let IT Grow Your Enterprise</p>
                    <div class="header-buttons wow rotateInRight" data-wow-duration="2s" data-wow-delay="1.5s">
                        <a href="{{route('services')}}">Services</a>
                        <a href="{{route('products')}}">Products</a>
                    </div>
                </div>
            </section>
        </div>
        <!---*****************************     Header Section Ends ************************************-->
        <!---*****************************     About Section Start ************************************-->
        <section class="header-about">
            <div class="container headings text-center">
                <h1 class="font-weight-bold text-center wow fadeInLeft">About Us</h1>
                <div class="row justify-content-center">
                    <div class="about-card col-lg-12 col-md-12 col-12">
                        <div class="card wow slideInLeft" data-wow-duration="2s" data-wow-delay="0.5s">
                            <p>Let IT Grow Pvt. Ltd. is a company growing in the field of information technology. The organization is a team of driven young and experienced minds that are passionate to provide utmost customer satisfaction in terms of product and service delivery.<br><br>
                                The company mostly undertakes project-based business and primarily focuses on providing software-based services to its customers. However, it serves clients with system related services as well as other related needs.Apart from serving for commercial needs, Let IT grow also provides professional training to freshers/individuals and prepare them for the outer world exposure on the related field.
                                As the name suggests, we aim to maximize the market potential in IT by providing excellent products and services in the related field along with generating skillful manpower.</p>
                        </div>
                    </div>

                </div>
                <div class="row text-center mt-4">
                    <div class="col-lg-12 col-10 more">
                        <p><a href="{{route('vision')}}" class="wow fadeInUp">More About Us <i class="fa fa-angle-right"></i></a></p>
                    </div>
                </div>
            </div>
        </section>
        <!---*****************************     Service Section Start ************************************-->
        <section class="services" id="services">
            <div class="container headings text-center">
                <h1 class="font-weight-bold text-center wow bounceInUp" data-wow-duration="2s" data-wow-delay="0.5s">What Do We Offer</h1>
                <p class="text-center wow bounceInUp" data-wow-duration="2s" data-wow-delay="1s">Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print,</p>
            </div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-12 col-10 offset-1 offset-lg-0">
                        <div class="names my-3">
                            <h1 class="wow bounceInUp" data-wow-duration="2s" data-wow-delay="0.5s">CSS</h1>
                            <div class="progress w-75 wow slideInLeft" data-wow-duration="2s" data-wow-delay="0.5s">
                                <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" style="width:100%">100%</div>
                            </div>
                        </div>
                        <div class="names my-3">
                            <h1 class="wow bounceInUp" data-wow-duration="2s" data-wow-delay="1s">Laravel</h1>
                            <div class="progress w-75 wow slideInLeft" data-wow-duration="2s" data-wow-delay="1s">
                                <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" style="width:90%">80%</div>
                            </div>
                        </div>
                        <div class="names my-3">
                            <h1 class="wow bounceInUp" data-wow-duration="2s" data-wow-delay="1.5s">Node Js</h1>
                            <div class="progress w-75 wow slideInLeft" data-wow-duration="2s" data-wow-delay="1.5s">
                                <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" style="width:75%">75%</div>
                            </div>
                        </div>

                        <div class="names my-3">
                            <h1 class="wow bounceInUp" data-wow-duration="2s" data-wow-delay="2s">Flutter</h1>
                            <div class="progress w-75 wow slideInLeft" data-wow-duration="2s" data-wow-delay="2s">
                                <div class="progress-bar progress-bar-striped progress-bar-animated bg-info" style="width:70%">70%</div>
                            </div>
                        </div>
                        <div class="names my-3">
                            <h1 class="wow bounceInUp" data-wow-duration="2s" data-wow-delay="2.5s">React Js</h1>
                            <div class="progress w-75 wow slideInLeft" data-wow-duration="2s" data-wow-delay="2.5s">
                                <div class="progress-bar progress-bar-striped progress-bar-animated bg-primary" style="width:70%">70%</div>
                            </div>
                        </div>
                        <div class="names my-3">
                            <h1 class="wow bounceInUp" data-wow-duration="2s" data-wow-delay="3s">ASP.Net</h1>
                            <div class="progress w-75 wow slideInLeft" data-wow-duration="2s" data-wow-delay="3s">
                                <div class="progress-bar progress-bar-striped progress-bar-animated bg-dark" style="width:60%">60%</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-10 offset-1 offset-lg-0 serviceDiv">
                        <div class="row justify-content-center web">
                            <div class="col-lg-2 col-12 service-icons wow fadeInUp" data-wow-duration="2s" data-wow-delay="3.5s">
                                <img class="mx-auto mt-5 d-block" src="{{asset('images/development.PNG')}}"/>
                            </div>
                            <div class="col-lg-10 col-10 wow fadeInUp" data-wow-duration="2s" data-wow-delay="4s">
                                <h2>Web Development</h2>
                                <p>Your business can now use the digitalized platform in the form of Web Application, decreasing the resources required in an efficient manner.</p>
                            </div>
                        </div>
                        <div class="row justify-content-center design">
                            <div class="col-lg-2 col-12 service-icons wow fadeInUp" data-wow-duration="2s" data-wow-delay="4s">
                                <img class="mx-auto mt-5 d-block" src="{{asset('images/design.PNG')}}"/>
                            </div>
                            <div class="col-lg-10 col-10 wow fadeInUp" data-wow-duration="2s" data-wow-delay="4.5s">
                                <h2>Web Design</h2>
                                <p>Your business can now use the digitalized platform in the form of Web Application, decreasing the resources required in an efficient manner.</p>
                            </div>
                        </div>
                        <div class="row justify-content-center mobile">
                            <div class="col-lg-2 col-12 service-icons wow fadeInUp" data-wow-duration="2s" data-wow-delay="5s">
                                <img class="mx-auto mt-5 d-block" src="{{asset('images/mobile-app.PNG')}}"/>
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
                <h1 class="font-weight-bold text-center">Our Products</h1>
                <p class="text-center pb-3">Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print,</p>
                <div class="row">
                    <div class="product-cards col-lg-4 col-md-4 col-12">
                        <div class="card">
                             <img class="mx-auto mt-5 d-block" src="{{asset('images/settings.PNG')}}"/>
                            <h2>Product 1</h2>
                            <p>Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print,
                                inibus Bonorum et Malorum for use in a type specimen book.</p>
                        </div>
                    </div>
                    <div class="product-cards col-lg-4 col-md-4 col-12">
                        <div class="card">
                            <img class="mx-auto mt-5 d-block" src="{{asset('images/settings.PNG')}}"/>
                            <h2>Product 2</h2>
                            <p>Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print,
                                inibus Bonorum et Malorum for use in a type specimen book.</p>
                        </div>
                    </div>
                    <div class="product-cards col-lg-4 col-md-4 col-12">
                        <div class="card">
                            <img class="mx-auto mt-5 d-block" src="{{asset('images/settings.PNG')}}"/>
                            <h2>Product 3</h2>
                            <p>Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print,
                                inibus Bonorum et Malorum for use in a type specimen book.</p>
                        </div>
                    </div>

                </div>
                <div class="row text-center mt-4">
                    <div class="col-lg-12 col-10 more">
                        <p><a href="{{route('products')}}">More Products <i class="fa fa-angle-right"></i></a></p>
                    </div>
                </div>
            </div>
        </section>
        <!---*****************************     Product Section End ************************************-->


        <!---*****************************     Projects Done Start ************************************-->
        <section class="projects">
            <div class="container headings text-center">
                <p class="font-weight-bold text-center text-uppercase">More than 50 satisfied clients</p>
            </div>
            <div class="container d-flex justify-content-around align-items-center text-center">
                <div>
                    <h1 class="count">50</h1>
                    <p>CMS Installations</p>
                </div>
                <div>
                    <h1 class="count">15</h1>
                    <p>Awards</p>
                </div>
                <div>
                    <h1 class="count">15</h1>
                    <p>Websites</p>
                </div>
                <div>
                    <h1 class="count">15</h1>
                    <p>Clients</p>
                </div>
            </div>
        </section>
        <!---*****************************     Projects Done End ************************************-->
        <!---*****************************     Find carerr start ************************************-->
        <section class="career" id="career">
            <div class="container headings text-center">
                <h1 class="font-weight-bold text-center wow bounceInUp" data-wow-duration="2s" data-wow-delay="0.5s">Join Our Team</h1>

            </div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="career-buttons wow fadeIn" data-wow-duration="2s" data-wow-delay="1.5s">
                        <a href="{{route('career')}}" >Find Jobs <i class="fa fa-search"></i></a>
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
    </body>
</html>
