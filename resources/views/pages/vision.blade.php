@extends('layouts.common')
@section('content')

    <div class="imgContainer col-lg-12 col-md-12 col-sm-12 pt-5 pb-5">
        <div class="breadCrumbCenter column">
            <p class="commontxt">VISION</p>
            <p class="commontxtsmall">You imagine - We build</p>
            <button class="breadCrumbBtn radius">
                <a href="/"><i class="fas fa-home"></i> Home</a>
            </button>
            <button class="breadCrumbBtn radius">
                <a href=""><i class="fas fa-eye"></i> Vision</a>
            </button>
        </div>
    </div>

    <div class='space1'></div>

    <section class="inner-content-wrap">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="headings text-center">
                        <h1 class="font-weight-bold text-center wow fadeIn" data-wow-duration="3s" data-wow-delay="1s">
                            About Us</h1>
                    </div>
                    <div class="card wow slideInLeft" data-wow-duration="3s" data-wow-delay="0.3s">
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
            </div>
        </div>
    </section>

    <div class='space1'></div>

    <section class="inner-content-wrap">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="headings text-center">
                        <h1 class="font-weight-bold text-center wow fadeIn" data-wow-duration="3s" data-wow-delay="1s">
                            Vision</h1>
                    </div>
                    <div class="card wow slideInRight" data-wow-duration="3s" data-wow-delay="0.3s">
                        <p>We believe, Technology is made by everybody for everybody. Today, Modern world offers
                            technologies that are affordable to people from all backgrounds and we want to serve people with
                            its benefits. Let IT grow is your solution to the technological advancement you and your
                            business should be experiencing along with the advantage you deserve.<br><br>
                            We offer our services for all kinds of business as well as individuals who want to make a
                            difference on the work they do. Our IT services are sure to benefit people from all backgrounds
                            that want to use IT to grow their business. On times, where time and tides wait for none, we aim
                            to bridge the gap between fast changing technology and Nepali Society. With an extremely
                            creative team, we constantly see ourselves generating and implementing revolutionary ideas that
                            aim to benefit the society as well as the organization.We hope to be the ultimate gateway for
                            connecting the Nepali society with the emerging technologies at reasonable and affordable
                            prices.<br><br>
                            Let IT Grow is a team of enthusiastic young minds that want to make a difference by providing
                            quality IT services to people all over Nepal regardless of where they come from.
                            You dictate, we Create.</p>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <div class='space1'></div>
    <div class='space1'></div>

    <section class="inner-content-wrap">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="vision-box wow bounceInLeft" data-wow-duration="1.5s" data-wow-delay="0.1s">
                        <div class="vision-box-image">
                            <img src="{{ asset('images/mission.png') }}" alt="mission" />
                        </div>
                        <div class="container">
                            <div class="vision-inner-box-image">
                                <h4>Our Mission</h4>
                                <p>At Let IT Grow, we will always strive to deliver an innovative, technically sharp and
                                    affordable products and services that deliver maximum return.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="vision-box wow bounceInLeft" data-wow-duration="1.2s" data-wow-delay="0.6s">
                        <div class="vision-box-image">
                            <img src="{{ asset('images/objective.png') }}" alt="objective" />
                        </div>
                        <div class="container">
                            <div class="vision-inner-box-image">
                                <h4>Our Objective</h4>
                                <p>To deliver high quality products and services within required timeframe with best
                                    practices for customer satisfaction in very reasonable price without comprimising in
                                    quality.</p>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="vision-box wow bounceInLeft" data-wow-duration="1.2s" data-wow-delay="0.1s">
                        <div class="vision-box-image mt-2">
                            <img src="{{ asset('images/motivation.png') }}" alt="motivation" />
                        </div>
                        <div class="container">
                            <div class="vision-inner-box-image">
                                <h4>Our Motivation</h4>
                                <p>To provide innovative solutions to solve the biggest problems in software and web
                                    technology. We are dedicated to working with our trusted partners to leverage our strong
                                    skills and knowledge.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class='space1'></div>
@endsection
