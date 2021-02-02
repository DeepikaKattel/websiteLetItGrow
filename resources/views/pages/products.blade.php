@extends('layouts.common')
@section('content')

    <div class="imgContainer col-lg-12 col-md-12 col-sm-12 pt-5 pb-5">
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
    </div>

    <div class='space1'></div>

    @if ($products)
        <section class="header-product">
            <div class="container headings text-center">
                <h1 class="font-weight-bold text-center wow fadeIn" data-wow-duration="2.5s" data-wow-delay="1s">Our
                    Products</h1>
                <p class="text-center pb-3 wow fadeIn" data-wow-duration="2.5s" data-wow-delay="1s">Explore our products
                    ...
                </p>
                <div class="row">
                    @foreach ($products as $product)
                        <div class="product-cards pb-4 col-lg-4 col-md-4 col-12 wow slideInLeft" data-wow-duration="3s"
                            data-wow-delay="1.5s">
                            <a href="{{ url('product_features/' . $product->id) }}">
                                <div class="card" style="height:320px" >
                                    <img class="mx-auto mt-5 d-block inventory"
                                        src="/storage/Images/Products/{{ $product->image }}" />
                                    <h2>{{ $product->name }}</h2>
                                    <div class="overlay">
                                        <p>{{ $product->description }}</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
                <div class="row text-center mt-4">
                    <div class="col-lg-12 col-10 more">
                        <p><a href="{{ route('products') }}" class="wow fadeInUp" data-wow-duration="2s"
                                data-wow-delay="3s">More Products <i class="fa fa-angle-right"></i></a></p>
                    </div>
                </div>

            </div>
        </section>
    @endif
    <div class='space1'></div>
@endsection
