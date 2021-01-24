@extends('layouts.common')
@section('content')

    <div class="imgContainer col-lg-12 col-md-12 col-sm-12 pt-5 pb-5">
        <div class="breadCrumbCenter column">
            <p class="commontxt">Our Team</p>
            <p  class="commontxtsmall">...</p>
            <button class="breadCrumbBtn radius">
                <a href="/"><i class="fas fa-home"></i>Home</a>
            </button>
            <button class="breadCrumbBtn radius">
                <a href=""><i class="fas fa-address-book"></i>Team</a>
            </button>
        </div>
    </div>

    <div class='space1'></div>

    <section class="header-product">
        <div class="container headings text-center">
            <h1 class="font-weight-bold text-center commonTitle">Our Products</h1>
            <p class="text-center pb-3">Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print,</p>
            <section>
                <div class="wrap-container zerogrid">
                    <div class="crumbs">
                        <ul>
                            <li><a href="{{url('/')}}">Home</a></li>
                            <li><a href="#">Our team</a></li>
                        </ul>
                    </div>
                    <div id="about-us">
                        <article class="post-entry single-post">
                            <div class="wrap-post" >
                                <div class="entry-header">
                                    <h1 class="entry-title">Our Team</h1>
                                </div>

                                <div class="content" data-wow-delay=".1s" data-wow-duration="1s">
                                    <div class="container app">
                                        <div class="row">
                                            <div class="col-md-4 col-sm-6">
                                                <div class="our-team">
                                                    <div class="node">
                                                        <div class="pic wow slideInRight">
                                                            <h3 class="title" >Tribhuwan Kushwaha</h3>
                                                            <span class="post">Software Consultant</span>
                                                            <img src="{{asset('images/tribhuwan.jpg')}}">


                                                            <ul class="social">
                                                                <!-- <li><a href="#" class="fa fa-facebook"></a></li>
                                                                <li><a href="#" class="fa fa-twitter"></a></li>
                                                                <li><a href="#" class="fa fa-google-plus"></a></li> -->
                                                                <li><a href="#" class="fa fa-linkedin"></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="col-md-4 col-sm-6">
                                                <div class="our-team">
                                                    <div class="node">
                                                        <div class="pic wow slideInRight">
                                                            <h3 class="title">Shalabh Adhikari</h3>
                                                            <span class="post">Full Stack Developer</span>
                                                            <img src="{{asset('images/shalabh.jpg')}}">


                                                            <ul class="social">
                                                                <!-- <li><a href="#" class="fa fa-facebook"></a></li>
                                                                <li><a href="#" class="fa fa-twitter"></a></li>
                                                                <li><a href="#" class="fa fa-google-plus"></a></li> -->
                                                                <li><a href="https://np.linkedin.com/in/shalabh-adhikari" class="fa fa-linkedin"></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-4 col-sm-6">
                                                <div class="our-team">
                                                    <div class="node">
                                                        <div class="pic wow slideInRight">
                                                            <h3 class="title">Bharat Phuyal</h3>
                                                            <span class="post">Administrative Executive</span>
                                                            <img src="{{asset('images/bharat.jpg')}}">


                                                            <ul class="social">
                                                                <!-- <li><a href="#" class="fa fa-facebook"></a></li>
                                                                <li><a href="#" class="fa fa-twitter"></a></li>
                                                                <li><a href="#" class="fa fa-google-plus"></a></li> -->
                                                                <li><a href="#" class="fa fa-linkedin"></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-6">
                                                <div class="our-team">
                                                    <div class="node">
                                                        <div class="pic wow slideInRight">
                                                            <h3 class="title">Sujit Maharjan</h3>
                                                            <span class="post">Full Stack Developer</span>
                                                            <img src="{{asset('images/sujit.jpg')}}">


                                                            <ul class="social">
                                                                <!-- <li><a href="#" class="fa fa-facebook"></a></li>
                                                                <li><a href="#" class="fa fa-twitter"></a></li>
                                                                <li><a href="#" class="fa fa-google-plus"></a></li> -->
                                                                <li><a href="#" class="fa fa-linkedin"></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-4 col-sm-6">
                                                <div class="our-team">
                                                    <div class="node">
                                                        <div class="pic wow slideInRight">
                                                            <h3 class="title">Nikita Niraula</h3>
                                                            <span class="post">Graphics Designer</span>
                                                            <img src="{{asset('images/nikita.jpg')}}">


                                                            <ul class="social">
                                                                <!-- <li><a href="#" class="fa fa-facebook"></a></li>
                                                                <li><a href="#" class="fa fa-twitter"></a></li>
                                                                <li><a href="#" class="fa fa-google-plus"></a></li> -->
                                                                <li><a href="#" class="fa fa-linkedin"></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="col-md-4 col-sm-6">
                                                <div class="our-team">
                                                    <div class="node">
                                                        <div class="pic wow slideInRight">
                                                            <h3 class="title">Deepika Kattel</h3>
                                                            <span class="post">Web Application Developer</span>
                                                            <img src="{{asset('images/deepika.jpg')}}">


                                                            <ul class="social">
                                                                <!-- <li><a href="#" class="fa fa-facebook"></a></li>
                                                                <li><a href="#" class="fa fa-twitter"></a></li>
                                                                <li><a href="#" class="fa fa-google-plus"></a></li> -->
                                                                <li><a href="https://www.linkedin.com/in/deepika-kattel-3236011b0/" class="fa fa-linkedin"></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-4 col-sm-6">
                                                <div class="our-team">
                                                    <div class="node">
                                                        <div class="pic wow slideInRight">
                                                            <h3 class="title">Sandeep Bajracharya</h3>
                                                            <span class="post">React JS Developer</span>
                                                            <img src="{{asset('images/sandeep.jpg')}}">

                                                            <ul class="social">
                                                                <!-- <li><a href="#" class="fa fa-facebook"></a></li>
                                                                <li><a href="#" class="fa fa-twitter"></a></li>
                                                                <li><a href="#" class="fa fa-google-plus"></a></li> -->
                                                                <li><a href="https://www.linkedin.com/in/sandeep-bajracharya-242352194/" class="fa fa-linkedin"></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-6">
                                                <div class="our-team">
                                                    <div class="node">
                                                        <div class="pic wow slideInRight">
                                                            <h3 class="title">Bivisha Karki</h3>
                                                            <span class="post">Mobile Application Developer</span>
                                                            <img src="{{asset('images/bivisha.jpg')}}">


                                                            <ul class="social">
                                                                <!-- <li><a href="#" class="fa fa-facebook"></a></li>
                                                                <li><a href="#" class="fa fa-twitter"></a></li>
                                                                <li><a href="#" class="fa fa-google-plus"></a></li> -->
                                                                <li><a href="https://www.linkedin.com/in/bivisha-karki-9a31ab175" class="fa fa-linkedin"></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-6">
                                                <div class="our-team">
                                                    <div class="node">
                                                        <div class="pic wow slideInRight">
                                                            <h3 class="title">Nitesh Manandhar</h3>
                                                            <span class="post">Node JS Developer</span>
                                                            <img src="{{asset('images/nitesh.jpg')}}">


                                                            <ul class="social">
                                                                <!-- <li><a href="#" class="fa fa-facebook"></a></li>
                                                                <li><a href="#" class="fa fa-twitter"></a></li>
                                                                <li><a href="#" class="fa fa-google-plus"></a></li> -->
                                                                <li><a href="https://www.linkedin.com/in/nitesh-manandhar-895947178/" class="fa fa-linkedin"></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </section>

        </div>
    </section>

    <div class='space1'></div>
    <div class='space1'></div>
@endsection



