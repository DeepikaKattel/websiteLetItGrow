@extends('layouts.common')
@section('content')

    <div class="imgContainer col-lg-12 col-md-12 col-sm-12 pt-5 pb-5">
        <div class="breadCrumbCenter column">
            <p class="commontxt">Services</p>
            <p class="commontxtsmall">We provide one of the best services...</p>
            <button class="breadCrumbBtn radius">
                <a href="/"><i class="fas fa-home"></i>  Home</a>
            </button>
            <button class="breadCrumbBtn radius">
                <a href=""><i class="fas fa-address-book"></i>  Services</a>
            </button>
        </div>
    </div>

    <div class='space1'></div>

    <section class="inner-content-wrap">
        <div class="container">
            <div class="row" id="webdev">
                <div class="column col-md-6">
                    <div class="webdev_img wow rotateInUpRight" data-wow-duration="1.5s" data-wow-delay="0.1s"></div>
                </div>
                <div class="column col-md-6">
                    <div class="faded-container">
                        <h4>Web Development</h4>
                    </div><br>
                    <div class="paragraph wow flipInY" data-wow-duration="4s" data-wow-delay="0.2s">
                        <p>
                            Web development is the process of website and web application development and maintenance. It is
                            basically the work that happens behind the scenes to make a website and application look great,
                            work
                            fast and perform well with a seamless user experience. It comprises various aspects such as web
                            design, web publishing, web programming, and database management.
                        </p>
                        <p>
                            Being a tech company, we are aspired to give the best service to our clients. For that, we
                            perform
                            research and observe the emerging needs and requirements of the modern clients that completely
                            suits
                            the modern businesses.
                        </p>
                    </div>
                </div>
            </div>

            <div class='space1'></div>

            <div class="row">
                <div class="column col-md-6">
                    <div class="faded-container">
                        <h4>Web Design</h4>
                    </div><br>
                    <div class="paragraph wow flipInY" data-wow-duration="4s" data-wow-delay="0.2s">
                        <p>
                            Web design is what creates the overall look and feel when we’re using a website. It’s the
                            process of planning and building the elements of your website, from structure and layout to
                            images, colors, fonts and graphics.
                        </p>
                        <p>
                            Being a tech company, we are aspired to give the best service to our clients. For that, we
                            Web design has numerous components that work together to create the finished experience of a
                            website, including graphic design, user experience design, interface design, search engine
                            optimization (SEO) and content creation. These elements determine how a website looks, feels and
                            works on various devices. Check out this in-depth guide on building a website, if you want to
                            learn more about the whole process.
                        </p>
                    </div>
                </div>
                <div class="column col-md-6">
                    <div class="webdesign_img wow rotateInUpLeft" data-wow-duration="1.5s" data-wow-delay="0.1s"></div>
                </div>
            </div>

            <div class='space1'></div>

            <div class="row">
                <div class="column col-md-6">
                    <div class="mobdev_img wow rotateInUpRight" data-wow-duration="1.5s" data-wow-delay="0.1s"></div>
                </div>
                <div class="column col-md-6">
                    <div class="faded-container">
                        <h4>Mobile Application Development</h4>
                    </div><br>
                    <div class="paragraph wow flipInY" data-wow-duration="4s" data-wow-delay="0.2s">
                        <p>
                            Mobile application development is the creation of software intended to run on mobile devices and
                            optimized to take advantage of those products' unique features and hardware.
                        </p>
                        <p>
                            Mobile app development is rapidly growing. From retail, telecommunications and e-commerce to
                            insurance, healthcare and government, organizations across industries must meet user
                            expectations for real-time, convenient ways to conduct transactions and access information.
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <div class='space1'></div>
    <div class='space1'></div>
@endsection
