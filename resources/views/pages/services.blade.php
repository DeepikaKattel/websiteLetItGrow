@extends('layouts.common')
@section('content')

    <div class="imgContainer col-lg-12 col-md-12 col-sm-12 pt-5 pb-5">
        <div class="breadCrumbCenter column">
            <p class="commontxt">Services</p>
            <p  class="commontxtsmall">We provide one of the best services...</p>
            <button class="breadCrumbBtn radius">
                <a href="/"><i class="fas fa-home"></i>Home</a>
            </button>
            <button class="breadCrumbBtn radius">
                <a href=""><i class="fas fa-address-book"></i>Our Services</a>
            </button>
        </div>
    </div>

    <div class='space1'></div>

    <section class="header-product">
        <div class="container headings text-center">
            <h1 class="font-weight-bold text-center commonTitle">Our Services</h1>
            <p class="text-center pb-3">Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print,</p>
            <div class="row">
                <div class="product-cards col-lg-4 col-md-4 col-12">
                    <div class="card">
                        <img class="mx-auto mt-5 d-block" src="{{asset('images/development.PNG')}}"/>
                        <h2>Web Development</h2>
                        <p>Your business can now use the digitalized platform in the form of Web Application, decreasing the resources required in an efficient manner.</p>
                    </div>
                </div>
                <div class="product-cards col-lg-4 col-md-4 col-12">
                    <div class="card">
                        <img class="mx-auto mt-5 d-block" src="{{asset('images/design.PNG')}}"/>
                        <h2>Web Design</h2>
                        <p>Your business can now use the digitalized platform in the form of Web Application, decreasing the resources required in an efficient manner.</p>
                    </div>
                </div>
                <div class="product-cards col-lg-4 col-md-4 col-12">
                    <div class="card">
                        <img class="mx-auto mt-5 d-block" src="{{asset('images/mobile-app.PNG')}}"/>
                        <h2>Mobile Application Development</h2>
                        <p>Your business can now use the digitalized platform in the form of Web Application, decreasing the resources required in an efficient manner.</p>
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
                <div class="product-cards col-lg-4 col-md-4 col-12">
                    <div class="card">
                        <img class="mx-auto mt-5 d-block" src="{{asset('images/settings.PNG')}}"/>
                        <h2>Product 3</h2>
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

        </div>
    </section>

    <div class='space1'></div>
    <div class='space1'></div>
@endsection


