@extends('layouts.common')
@section('content')
    {{-- <div class="imgContainer col-lg-12 col-md-12 col-sm-12 pt-5 pb-5">
        <div class="breadCrumbCenter column">
            <p class="commontxt">Features</p>
            <p class="commontxtsmall">Explore the products...</p>
            <button class="breadCrumbBtn radius">
                <a href="/"><i class="fas fa-home"></i> Home</a>
            </button>
            <button class="breadCrumbBtn radius">
                <a href=""><i class="far fa-list-alt"></i> Features</a>
            </button>
        </div>
    </div>

    <div class='space1'></div> --}}

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
            <div class="row">
                <div class="col-md-12 about-contentWrap">
                    <div class="container headings text-center">
                        <h1 class="font-weight-bold text-center wow fadeIn" data-wow-duration="4s" data-wow-delay="1.5s">
                            {{ $products->name }}</h1>
                        <p class="text-center wow fadeIn" data-wow-duration="3s" data-wow-delay="2.2s">
                            {{ $products->description }}
                        </p>
                    </div>
                </div>
                <div class='space2'></div>
                @if ($features)
                    @foreach ($features as $feature)
                        <div class="product-info-cards col-lg-4 col-md-4 col-12">
                            <div class="card">
                                <img class="mx-auto d-block" src="{{ asset('images/features.png') }}" />
                                <h2 style="text-align: center">{{ $feature->name }}</h2>
                                <p>{{ $feature->description }}</p>
                            </div>
                        </div>

                    @endforeach
                @endif
            </div>
        </div>
    </section>

    <div class='space1'></div>
@endsection
