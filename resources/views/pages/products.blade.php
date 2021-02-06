@extends('layouts.common')
@section('content')

    {{-- <div class="imgContainer col-lg-12 col-md-12 col-sm-12 pt-5 pb-5">
        <div class="breadCrumbCenter column">
            <p class="commontxt">Products</p>
            <p class="commontxtsmall">Explore the products...</p>
            <button class="breadCrumbBtn radius">
                <a href="/"><i class="fas fa-home"></i> Home</a>
            </button>
            <button class="breadCrumbBtn radius">
                <a href=""><i class="fas fa-address-book"></i> Products</a>
            </button>
        </div>
    </div> --}}

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

    @if ($products)
        <section class="header-product">
            <div class="container">
                <div class="container headings text-center">
                    <h1 class="font-weight-bold text-center wow fadeIn" data-wow-duration="2.5s" data-wow-delay="1s">Our
                        Products</h1>
                    <p class="text-center wow fadeIn" data-wow-duration="2.5s" data-wow-delay="1s">Explore our products.
                    </p>
                </div>
                <div class="row">
                    @foreach ($products as $product)
                        <div class="iproduct-cards col-lg-4 col-md-4 col-12 wow slideInLeft" data-wow-duration="3s"
                            data-wow-delay="1.5s">
                            <a href="{{ url('product_features/' . $product->id) }}">
                                <div class="card">
                                    <div class="overlay">
                                        <img src="/storage/Images/Products/{{ $product->image }}" />
                                        <h2>{{ $product->name }}</h2>
                                        <p>{{ $product->description }}</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif
    <div class='space1'></div>
@endsection
