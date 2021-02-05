@extends('layouts.common')
@section('content')

    <div class="imgContainer col-lg-12 col-md-12 col-sm-12 pt-5 pb-5">
        <div class="breadCrumbCenter column">
            <p class="commontxt">CONTACT US</p>
            <p class="commontxtsmall">Contact us - Get best tech solution</p>
            <button class="breadCrumbBtn radius">
                <a href="/"><i class="fas fa-home"></i> Home</a>
            </button>
            <button class="breadCrumbBtn radius">
                <a href=""><i class="fas fa-address-book"></i> Contact Us</a>
            </button>
        </div>
    </div>

    <div class='space1'></div>

    <section class="inner-content-wrap">
        <div class="container">
            <div class="row">
                <div class="col-md-7">

                    <div class="container headings text-center">
                        <h1 class="font-weight-bold text-center wow fadeIn" data-wow-duration="3s" data-wow-delay="1s"
                            style="text-align: start">
                            Have any questions ? Let's get in touch !</h1>
                        <p class="text-center wow fadeIn" data-wow-duration="3s" data-wow-delay="1.5s">Contact us
                            if you are interested.
                        </p>
                    </div>

                    <div class="contact-form wow slideInLeft" data-wow-duration="3s" data-wow-delay="0.3s">
                        <form action="{{ route('contact.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <input type="text" name="name" class="form-control" placeholder="Your Name *"
                                            value="" required />
                                    </div>
                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control" placeholder="Your Email *"
                                            value="" required />
                                    </div>
                                    <div class="form-group">
                                        <input type="number" name="phone_number" class="form-control"
                                            placeholder="Your Phone Number *" value="" required />
                                    </div>
                                    <div class="form-group onlyForDesktop">
                                        <button class="btnContactSubmit">Send Message</button>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <textarea name="message" class="form-control" placeholder="Your Message *"
                                            style="width: 100%; height: 150px;" required></textarea>
                                    </div>
                                    <div class="form-group onlyForMobile">
                                        <button class="btnContactSubmit">Send Message</button>
                                    </div>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-md-5">
                    <div class="moreContainer wow slideInRight" data-wow-duration="3s" data-wow-delay="0.3s">
                        <h3 class="commonTitle">How Can We Help You Today?</h3><br>
                        <p>For more informtion feel free to call or visit us at our office. <i class="fas fa-briefcase"></i>
                        </p>

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
                <div class="col-md-12">
                    <div class="container headings text-center">
                        <h1 class="font-weight-bold text-center wow fadeIn" data-wow-duration="3s" data-wow-delay="1s"
                            style="text-align: start">
                            Find Us On Map</h1>
                        <p class="text-center wow fadeIn" data-wow-duration="3s" data-wow-delay="1.5s">Let's meet and greet.
                        </p>
                    </div>
                    <div class='space2'></div>
                    <div class="mapContainer wow bounceInUp" data-wow-duration="0.5s" data-wow-delay="1s">
                        <iframe class="map"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3533.0969091604857!2d85.31605341423501!3d27.68339953315262!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb19f1a12ed15f%3A0xd2addf7cee6a8e0b!2sLet%20IT%20Grow!5e0!3m2!1sen!2snp!4v1611126563601!5m2!1sen!2snp"
                            frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class='space1'></div>
    <div class='space1'></div>

    <section class="inner-content-wrap">
        <div class="container">
            <div class="col-md-12">
                <div class="container headings text-center">
                    <h1 class="font-weight-bold text-center wow fadeIn" data-wow-duration="3s" data-wow-delay="1s"
                        style="text-align: start">
                        Contact information</h1>
                    <p class="text-center wow fadeIn" data-wow-duration="3s" data-wow-delay="1.5s">Ways to reach us.
                    </p>
                </div>
            </div>
            <div class='space2'></div>

            <div class="col-md-12 ">
                <div class="row justify-content-center">
                    <div class="col-md-3">
                        <div class="row justify-content-center">
                            <div class="col-md-5 col-5 d-flex justify-content-end mb-2">
                                <div class="infoBox wow bounceInUp" data-wow-duration="1.2s" data-wow-delay="1s"><i
                                        class="fas fa-map"></i></div>
                            </div>
                            <div class="col-md-7 col-7">
                                <div class="contactTitle">Visit Us</div>
                                <div class="contactDetail">Pulchowk, Lalitpur</div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="row justify-content-center">
                            <div class="col-md-5 col-5 d-flex justify-content-end mb-2">
                                <div class="infoBox wow bounceInUp" data-wow-duration="1.2s" data-wow-delay="1s"><i
                                        class="fas fa-phone"></i></div>
                            </div>
                            <div class="col-md-7 col-7">
                                <div class="contactTitle">Call Us</div>
                                <div class="contactDetail">01-5901614</div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="row justify-content-center">
                            <div class="col-md-5 col-5 d-flex justify-content-end  mb-2">
                                <div class="infoBox wow bounceInUp" data-wow-duration="1.2s" data-wow-delay="1s"><i
                                        class="fas fa-envelope"></i></div>
                            </div>
                            <div class="col-md-7 col-7">
                                <div class="contactTitle">Email Us</div>
                                <div class="contactDetail">info@letitgrownepal.com</div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="row justify-content-center">
                            <div class="col-md-5 col-5 d-flex justify-content-end  mb-2">
                                <div class="infoBox wow bounceInUp" data-wow-duration="1.2s" data-wow-delay="1s"><i
                                        class="fas fa-clock"></i></div>
                            </div>
                            <div class="col-md-7 col-7">
                                <div class="contactTitle">Office Hours</div>
                                <div class="contactDetail">Sunday - Friday</div>
                                <div class="contactDetail">9:00 - 18:00</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <div class='space1'></div>
@endsection
