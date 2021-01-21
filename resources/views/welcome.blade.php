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
        <link href="{{asset('css/swing.css')}}" rel="stylesheet" media="all" type="text/css">
    </head>
    <body>
        <div class="header" id="top">
            <nav class="navbar navbar-expand-lg fixed-top">
                <div class="container text-uppercase p-2">
                    <a class="navbar-brand font-weight-bold text-white" href="#">
                        <figure class="swing float-right">
                            <img src="{{asset('images/logoFull.png')}}"/>
                        </figure>
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    {{--                    mr-auto brings list in left side where as ml-auto makes the list stay in the right side--}}
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Service</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Products</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <section class="header-section">
                <div class="center-div justify-content-center">
                    <h1 class="font-weight-bold">You dictate we create</h1>
                    <p>Let IT Grow Your Enterprise</p>
                    <div class="header-buttons">
                        <a href="#">About Us</a>
                        <a href="#">Contact</a>
                    </div>
                </div>
            </section>
        </div>
        <!---*****************************     Header Section Ends ************************************-->
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
                        <p><a href="#">More Products <i class="fa fa-angle-right"></i></a></p>
                    </div>
                </div>
            </div>
        </section>
        <!---*****************************     Product Section Start ************************************-->

        <!---*****************************     Service Section Start ************************************-->
        <section class="services" id="services">
            <div class="container headings text-center">
                <h1 class="font-weight-bold text-center">What Do We Offer</h1>
                <p class="text-center">Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print,</p>
            </div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-12 col-10 offset-1 offset-lg-0">
                        <div class="names my-3">
                            <h1>CSS</h1>
                            <div class="progress w-75">
                                <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" style="width:100%">100%</div>
                            </div>
                        </div>
                        <div class="names my-3">
                            <h1>Laravel</h1>
                            <div class="progress w-75">
                                <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" style="width:90%">80%</div>
                            </div>
                        </div>
                        <div class="names my-3">
                            <h1>Node Js</h1>
                            <div class="progress w-75">
                                <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" style="width:75%">75%</div>
                            </div>
                        </div>

                        <div class="names my-3">
                            <h1>Flutter</h1>
                            <div class="progress w-75">
                                <div class="progress-bar progress-bar-striped progress-bar-animated bg-info" style="width:70%">70%</div>
                            </div>
                        </div>
                        <div class="names my-3">
                            <h1>React Js</h1>
                            <div class="progress w-75">
                                <div class="progress-bar progress-bar-striped progress-bar-animated bg-primary" style="width:70%">70%</div>
                            </div>
                        </div>
                        <div class="names my-3">
                            <h1>ASP.Net</h1>
                            <div class="progress w-75">
                                 <div class="progress-bar progress-bar-striped progress-bar-animated bg-dark" style="width:60%">60%</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-10 offset-1 offset-lg-0 serviceDiv">
                        <div class="row justify-content-center">
                            <div class="col-lg-2 col-12 service-icons">
                                <img class="mx-auto mt-5 d-block" src="{{asset('images/development.PNG')}}"/>
                            </div>
                            <div class="col-lg-10 col-10">
                                <h2>Web Development</h2>
                                <p>Your business can now use the digitalized platform in the form of Web Application, decreasing the resources required in an efficient manner.</p>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-lg-2 col-12 service-icons">
                                <img class="mx-auto mt-5 d-block" src="{{asset('images/design.PNG')}}"/>
                            </div>
                            <div class="col-lg-10 col-10">
                                <h2>Web Design</h2>
                                <p>Your business can now use the digitalized platform in the form of Web Application, decreasing the resources required in an efficient manner.</p>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-lg-2 col-12 service-icons">
                                <img class="mx-auto mt-5 d-block" src="{{asset('images/mobile-app.PNG')}}"/>
                            </div>
                            <div class="col-lg-10 col-10">
                                <h2>Mobile Application Development</h2>
                                <p>Your business can now use the digitalized platform in the form of Web Application, decreasing the resources required in an efficient manner.</p>
                            </div>
                        </div>
                        <div class="row text-center">
                            <div class="col-lg-12 col-10 more">
                                <p><a href="#">More Services <i class="fa fa-angle-right"></i></a></p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!---*****************************     Service Section End ************************************-->
        <!---*****************************     Projects Done Start ************************************-->
        <section class="projects">
            <div class="container headings text-center">
                <p class="font-weight-bold text-center text-uppercase">More than 50 websites create</p>
            </div>
            <div class="container d-flex justify-content-around align-items-center text-center">
                <div>
                    <h1>50</h1>
                    <p>CMS Installations</p>
                </div>
                <div>
                    <h1>15</h1>
                    <p>Awards</p>
                </div>
                <div>
                    <h1>15</h1>
                    <p>Websites</p>
                </div>
                <div>
                    <h1>15</h1>
                    <p>Clients</p>
                </div>
            </div>
        </section>
        <!---*****************************     Projects Done End ************************************-->

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </body>
</html>
