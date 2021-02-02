@extends('layouts.common')
@section('content')

    <div class="imgContainer col-lg-12 col-md-12 col-sm-12 pt-5 pb-5">
        <div class="breadCrumbCenter column">
            <p class="commontxt">Products</p>
            <p  class="commontxtsmall">Explore the products...</p>
            <button class="breadCrumbBtn radius">
                <a href="/"><i class="fas fa-home"></i>Home</a>
            </button>
            <button class="breadCrumbBtn radius">
                <a href=""><i class="fas fa-address-book"></i>Products</a>
            </button>
        </div>
    </div>

    <div class='space1'></div>

    <section class="header-product">
        <div class="container headings text-center">
            <h1 class="font-weight-bold text-center commonTitle">Web APP Specific Products</h1>
            <!--<p class="text-center pb-3">Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print,</p>-->
            <div class="row">
                <div class="product-info-cards col-lg-4 col-md-4 col-12">
                    <div class="card">
                        <img class="mx-auto mt-5 d-block" src="{{asset('images/settings.png')}}"/>
                        <h2>Inventory Management System</h2>
                        <p>Inventory management includes aspects such as controlling and overseeing purchases — from suppliers as well as customers — maintaining the storage of stock, controlling the amount of product for sale, and order fulfilment.</p>
                    </div>
                </div>
                <div class="product-info-cards col-lg-4 col-md-4 col-12">
                    <div class="card">
                        <img class="mx-auto mt-5 d-block" src="{{asset('images/settings.png')}}"/>
                        <h2>Account Management</h2>
                        <p>Accounting Management assists bookkeepers and accountants in recording and reporting a firm's financial transactions. The functionality of accounting software differs from product to product</p>
                    </div>
                </div>
                <div class="product-info-cards col-lg-4 col-md-4 col-12">
                    <div class="card">
                        <img class="mx-auto mt-5 d-block" src="{{asset('images/settings.png')}}"/>
                        <h2>Human Resources Management System</h2>
                        <p>Human Resources Management System (HRMS) is a form of human resources software that combines a number of systems and processes to ensure the easy management of human resources, business processes and data.</p>
                    </div>
                </div>
                <div class="product-info-cards col-lg-4 col-md-4 col-12">
                    <div class="card">
                        <img class="mx-auto mt-5 d-block" src="{{asset('images/settings.png')}}"/>
                        <h2>Customer Relationship Management</h2>
                        <p>Customer relationship management is a tool, strategy, or process that helps businesses better organize and access customer data; handwritten notes/registers stored digitally in a database</p>
                    </div>
                </div>
                <div class="product-info-cards col-lg-4 col-md-4 col-12">
                    <div class="card">
                        <img class="mx-auto mt-5 d-block" src="{{asset('images/settings.png')}}"/>
                        <h2>Point of Sale (POS)</h2>
                        <p>Point of Sale (POS) is a system in a retail store from which you conduct the sale of physical goods. In a store, a POS is where the checkout happens, orders are processed and bills are paid.</p>
                    </div>
                </div>
                <div class="product-info-cards col-lg-4 col-md-4 col-12">
                    <div class="card">
                        <img class="mx-auto mt-5 d-block" src="{{asset('images/settings.png')}}"/>
                        <h2>eCommerce</h2>
                        <p>eCommerce is a business model that lets firms and individuals buy and sell things over the internet; includes B2B, B2C, C2B, C2B. Sites can be modified based on client's requirements and suggestion.</p>
                    </div>
                </div>

            </div>

        </div>
    </section>
        <section class="header-product">
        <div class="container headings text-center">
            <h1 class="font-weight-bold text-center commonTitle"> Mobile APP Specific Products</h1>
            <!--<p class="text-center pb-3">Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print,</p>-->
            <div class="row">
                <div class="product-info-cards col-lg-4 col-md-4 col-12">
                    <div class="card">
                        <img class="mx-auto mt-5 d-block" src="{{asset('images/settings.png')}}"/>
                        <h2>Ride Sharing Application</h2>
                        <p>Ride Sharing Application consists of a User app and a driver app. User shall request route and seat for the particular vehicle from a location and the driver shall act accordingly. Rider and Passenger both get notified on status change of the request .</p>
                    </div>
                </div>
                <div class="product-info-cards col-lg-4 col-md-4 col-12">
                    <div class="card">
                        <img class="mx-auto mt-5 d-block" src="{{asset('images/settings.png')}}"/>
                        <h2>Ecommerce Application</h2>
                        <p>Ecommerce Mobile Application provides more ease in shopping with less time comsumption on buying as well as selecting various items as favourites. Admin and Users both get notified on status change of the ordered item; includes B2B, B2C, C2B, C2B.</p>
                    </div>
                </div>
                <div class="product-info-cards col-lg-4 col-md-4 col-12">
                    <div class="card">
                        <img class="mx-auto mt-5 d-block" src="{{asset('images/settings.png')}}"/>
                        <h2>Restaurant Managemnet & Order</h2>
                        <p>Users can order online via the Restaurant Order App. Users can also order while sitting in the specific restaurant and can get discounts/vouchers for it. Admin and Users both get notified on status change of the ordered item. </p>
                    </div>
                </div>

            </div>

        </div>
    </section>


    <div class='space1'></div>
    <div class='space1'></div>
@endsection


