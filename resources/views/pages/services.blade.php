@extends('layouts.common')
@section('content')
{{-- 
    <div class="imgContainer col-lg-12 col-md-12 col-sm-12 pt-5 pb-5">
        <div class="breadCrumbCenter column">
            <p class="commontxt">Services</p>
            <p class="commontxtsmall">We provide one of the best services...</p>
            <button class="breadCrumbBtn radius">
                <a href="/"><i class="fas fa-home"></i> Home</a>
            </button>
            <button class="breadCrumbBtn radius">
                <a href=""><i class="fas fa-address-book"></i> Services</a>
            </button>
        </div>
    </div> --}}

    {{-- <div class='space1'></div> --}}
    <div class="visionImg">
        <div class="col-xs-offset-6 col-xl-offset-6 col-xs-6 col-xl-6">
            <h4>You imagine - We build</h4>
            <p>Initially, we design a <span style="font-weight: bold;">PROTOTYPE</span> with the right mix of skills from
                our team to deliver
                <span style="font-weight: bold;">HIGH QUALITY</span> products. We eliminate unnecessary expenses to <span
                    style="font-weight: bold;">REDUCE COST</span> of the product. We work in an <span
                    style="font-weight: bold;">AGILE ENVIRONMENT</span>
                to ensure that we deliver on what we commit to, and <span style="font-weight: bold;">MEET DEADLINES</span> .
            </p>
        </div>
    </div>

    <div class='space1'></div>

    <section class="inner-content-wrap">
        <div class="container">
            <div class="container headings text-center">
                <h1 class="font-weight-bold text-center wow fadeIn" data-wow-duration="2.5s" data-wow-delay="1s">Our
                    Services</h1>
                <p class="text-center wow fadeIn" data-wow-duration="2.5s" data-wow-delay="1s">We provide one of the best services.
                </p>
            </div>
            <div class="row" id="webmobdev">
                <div class="column col-md-6">
                    <div class="webmobdev_img" data-wow-duration="1.5s" data-wow-delay="0.1s"></div>
                </div>
                <div class="column col-md-6">
                    <div class="faded-container">
                        <h4>Web and Mobile App Development</h4>
                    </div><br>
                    <div class="paragraph wow flipInY" data-wow-duration="4s" data-wow-delay="0.2s">
                        <p>
                            Web and Mobile development is the process of application development and maintenance. It is
                            basically the work that happens behind the scenes to make a application look great,
                            workfast and perform well with a seamless user experience.
                            Web application is intended to run on desktops and mobile application is intended to run on
                            mobile devices.</p>

                        <p>
                            Application development is rapidly growing. From retail, telecommunications and e-commerce to
                            insurance, healthcare and government, organizations across industries must meet user
                            expectations for real-time, convenient ways to conduct transactions and access information.
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

            <div class="onlyForDesktop">
                <div class="row">
                    <div class="column col-md-6">
                        <div class="faded-container">
                            <h4>UI and UX Graphic Design</h4>
                        </div><br>
                        <div class="paragraph wow flipInY" data-wow-duration="4s" data-wow-delay="0.2s">
                            <p>
                                UI and UX Graphic Design is what creates the overall look and feel when we’re using a website.
                                It’s the
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
                        <div class="uiux_img" data-wow-duration="1.5s" data-wow-delay="0.1s"></div>
                    </div>
                </div>
            </div>

            {{-- show only for mobile device --}}
            <div class="onlyForMobile">
                <div class="row show-for-small-only">
                    <div class="column col-md-6">
                        <div class="uiux_img" data-wow-duration="1.5s" data-wow-delay="0.1s"></div>
                    </div>
                    <div class="column col-md-6">
                        <div class="faded-container">
                            <h4>UI and UX Graphic Design</h4>
                        </div><br>
                        <div class="paragraph wow flipInY" data-wow-duration="4s" data-wow-delay="0.2s">
                            <p>
                                UI and UX Graphic Design is what creates the overall look and feel when we’re using a website.
                                It’s the
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
                </div>
            </div>

            <div class='space1'></div>

            <div class="row">
                <div class="column col-md-6">
                    <div class="data_analysis_img" data-wow-duration="1.5s" data-wow-delay="0.1s"></div>
                </div>
                <div class="column col-md-6">
                    <div class="faded-container">
                        <h4>Data Analysis and Reporting</h4>
                    </div><br>
                    <div class="paragraph wow flipInY" data-wow-duration="4s" data-wow-delay="0.2s">
                        <p>
                            Data Analysis and Reporting: We figure out the data you need and transpire it into the reports
                            that are easy to understand. We estimate the averages of the data, evaluate the exceptions from
                            the average, and look at the data from the perspective of what the scope is. We provide
                            analytical statistics, foresee insights and provide suggestions of actions to meet your
                            objectives. We also build a narrative that help analytical efforts to become more accessible,
                            digestible and universal
                        </p>
                        <p>We provide Modern data dashboards to consolidate data from various sources, providing access to a
                            wealth of insights in one centralized location.</p>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <div class='space1'></div>
@endsection
