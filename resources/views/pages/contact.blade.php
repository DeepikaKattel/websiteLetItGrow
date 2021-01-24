@extends('layouts.common')
@section('content')

    <div class="imgContainer col-lg-12 col-md-12 col-sm-12 pt-5 pb-5">
        <div class="breadCrumbCenter column">
            <p class="commontxt">CONTACT US</p>
            <p  class="commontxtsmall">Contact us - Get best tech solution</p>
            <button class="breadCrumbBtn radius">
                <a href="/"><i class="fas fa-home"></i>  Home</a>
            </button>
            <button class="breadCrumbBtn radius">
                <a href=""><i class="fas fa-address-book"></i>  Contact Us</a>
            </button>
        </div>
    </div>

    <div class='space1'></div>

    <section class="inner-content-wrap">
        <div class="container">
            <div class="row">
                <div class="col-md-7" >
                    <div class="contactContainer wow slideInLeft" data-wow-duration="3s" data-wow-delay="0.1s">
                        <div class="commonTitle" style="text-align: start"><h2>Have any questions ? Let's get in touch !</h2></div>
                        <p class="inTouchTxt">Contact us if you are interested.</p>

                            <div class="contact-form">
                                <div class="contact-image">
                                    <img src="{{asset('images/rocket.png')}}" alt="rocket_contact"/>
                                </div>
                                <form action="{{route('contact.store')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                   <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" name="name" class="form-control" placeholder="Your Name *" value="" />
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="email" class="form-control" placeholder="Your Email *" value="" />
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="phone_number" class="form-control" placeholder="Your Phone Number *" value="" />
                                            </div>
                                            <div class="form-group">
                                                <button class="btnContactSubmit">Send Message</button>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <textarea name="message" class="form-control" placeholder="Your Message *" style="width: 100%; height: 150px;"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="moreContainer wow fadeIn">
                            <h3 class="commonTitle">How Can We Help You Today?</h3><br>
                            <p>For more informtion feel free to call or visit us at our office. <i class="fas fa-briefcase"></i></p>

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
                    <div class="commonTitle"><h2>Find Us On Map</h2></div>
                    <div class='space2'></div>
                    <div class="mapContainer container-fluid wow bounceInUp" data-wow-duration="1.5s" data-wow-delay="0.1s">
                        <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3533.0969091604857!2d85.31605341423501!3d27.68339953315262!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb19f1a12ed15f%3A0xd2addf7cee6a8e0b!2sLet%20IT%20Grow!5e0!3m2!1sen!2snp!4v1611126563601!5m2!1sen!2snp"  frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
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
                    <div class="commonTitle"><h2>Contact Info</h2></div>
                </div>
                <div class='space2'></div>

                <div class="col-md-12 ">
                    <div class="row justify-content-center">
                        <div class="col-md-3" >
                            <div class="row justify-content-center" >
                             <div class="col-md-5 col-5 d-flex justify-content-end mb-2">
                                 <div class="infoBox wow bounceInUp" data-wow-duration="1.5s" data-wow-delay="0.1s"><i class="fas fa-map"></i></div>
                             </div>
                             <div class="col-md-7 col-7">
                                 <div class="contactTitle">Visit Us</div>
                                 <div class="contactDetai">Pulchowk, Lalitpur</div>
                             </div>
                            </div>
                         </div>

                         <div class="col-md-3">
                            <div class="row justify-content-center" >
                             <div class="col-md-5 col-5 d-flex justify-content-end mb-2">
                                 <div class="infoBox wow bounceInUp" data-wow-duration="1.5s" data-wow-delay="0.1s"><i class="fas fa-phone"></i></div>
                             </div>
                             <div class="col-md-7 col-7" >
                                 <div class="contactTitle">Call Us</div>
                                 <div class="contactDetai">01-5901614</div>
                             </div>
                            </div>
                         </div>

                         <div class="col-md-3" >
                            <div class="row justify-content-center" >
                             <div class="col-md-5 col-5 d-flex justify-content-end  mb-2">
                                 <div class="infoBox wow bounceInUp" data-wow-duration="1.5s" data-wow-delay="0.1s"><i class="fas fa-envelope"></i></div>
                             </div>
                             <div class="col-md-7 col-7" >
                                 <div class="contactTitle">Email Us</div>
                                 <div class="contactDetai">info@letitgrownepal.com</div>
                             </div>
                            </div>
                         </div>

                         <div class="col-md-3" >
                            <div class="row justify-content-center" >
                             <div class="col-md-5 col-5 d-flex justify-content-end  mb-2">
                                 <div class="infoBox wow bounceInUp" data-wow-duration="1.5s" data-wow-delay="0.1s"><i class="fas fa-clock"></i></div>
                             </div>
                             <div class="col-md-7 col-7" >
                                 <div class="contactTitle">Office Hours</div>
                                 <div class="contactDetai">Sunday - Friday</div>
                                <div class="contactDetai">10 am - 5 pm</div>
                             </div>
                            </div>
                         </div>
                    </div>
                </div>



        </div>
    </section>


    <div class='space1'></div>
    <div class='space1'></div>
@endsection

