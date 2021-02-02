@extends('layouts.common')
@section('content')
    <div class="imgContainer col-lg-12 col-md-12 col-sm-12 pt-5 pb-5">
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

    <div class='space1'></div>

    <section class="inner-content-wrap">
        <div class="container">
            <div class="row">
                <div class="col-md-12 about-contentWrap">
                    <div class="commonTitle">
                        <h2>Inventory Management System</h2>
                    </div>
                </div>
                <div class='space2'></div>
                <div class="features col-md-4 col-lg-4 col-12">
                    <div class="feature_card">
                        <div class="feature_front">
                            <div class="column">
                                <div class="feature_logo">

                                </div>
                                <br>
                                <p style="text-align: center">Vendor Management</p>
                            </div>
                        </div>
                        <div class="feature_back">
                            <p>Management of Suppliers made easier with infinite level of categories addition possible in
                                Vendor Management</p>
                        </div>
                    </div>
                </div>
                <div class="features col-md-4 col-lg-4 col-12">
                    <div class="feature_card">
                        <div class="feature_front">
                            <div class="column">
                                <div class="feature_logo">

                                </div>
                                <br>
                                <p style="text-align: center">Stock Demand Requisition</p>
                            </div>
                        </div>
                        <div class="feature_back">
                            <p>Any item that is required in a particular branch can be requested via Requisition module
                                within the same branch or to another branch</p>
                        </div>
                    </div>
                </div>
                <div class="features col-md-4 col-lg-4 col-12">
                    <div class="feature_card">
                        <div class="feature_front">
                            <div class="column">
                                <div class="feature_logo">

                                </div>
                                <br>
                                <p style="text-align: center">Stock Handover</p>
                            </div>
                        </div>
                        <div class="feature_back">
                            <p>Any item that is required in a particular branch can be handed over to the other branch or
                                within the same branch; sender and receiver will be notified.</p>
                        </div>
                    </div>
                </div>

                <div class="features col-md-4 col-lg-4 col-12">
                    <div class="feature_card">
                        <div class="feature_front">
                            <div class="column">
                                <div class="feature_logo">

                                </div>
                                <br>
                                <p style="text-align: center">Stock Management</p>
                            </div>
                        </div>
                        <div class="feature_back">
                            <p>Items can be added via Purchase Module/ Add Stock Module to arrange inventory items with
                                Multiple level of Suppliers/Brand/Category Filters Available.</p>
                        </div>
                    </div>
                </div>


                <div class="features col-md-4 col-lg-4 col-12">
                    <div class="feature_card">
                        <div class="feature_front">
                            <div class="column">
                                <div class="feature_logo">

                                </div>
                                <br>
                                <p style="text-align: center">Branch to Branch Stock Transfer Management</p>
                            </div>
                        </div>
                        <div style="height: 10px"></div>
                        <div class="feature_back">
                            <p>Items can be transferred from one branch to the other; both receiver and sender branches will
                                be notified.</p>
                        </div>
                    </div>
                </div>

                <div class="features col-md-4 col-lg-4 col-12">
                    <div class="feature_card">
                        <div class="feature_front">
                            <div class="column">
                                <div class="feature_logo">

                                </div>
                                <br>
                                <p style="text-align: center">Central to Branch Stock Transfer Management</p>
                            </div>
                        </div>
                        <div class="feature_back">
                            <p>Items can be transferred from central office to the other branches; both receiver and sender
                                branches will be notified.</p>
                        </div>
                    </div>
                </div>

                <div class="features col-md-4 col-lg-4 col-12">
                    <div class="feature_card">
                        <div class="feature_front">
                            <div class="column">
                                <div class="feature_logo">

                                </div>
                                <br>
                                <p style="text-align: center">Tree Level Management of Items</p>
                            </div>
                        </div>
                        <div class="feature_back">
                            <p>Items can be managed and viewed in a tree hierarchy level of suppliers, brands, categories,
                                country of origin, etc. in a dynamic way.</p>
                        </div>
                    </div>
                </div>

                <div class="features col-md-4 col-lg-4 col-12">
                    <div class="feature_card">
                        <div class="feature_front">
                            <div class="column">
                                <div class="feature_logo">

                                </div>
                                <br>
                                <p style="text-align: center">Notification for Expiration of Items</p>
                            </div>
                        </div>
                        <div class="feature_back">
                            <p>Users will be notified 3 months prior to the expiry date of a particular item. </p>
                        </div>
                    </div>
                </div>

                <div class="features col-md-4 col-lg-4 col-12">
                    <div class="feature_card">
                        <div class="feature_front">
                            <div class="column">
                                <div class="feature_logo">

                                </div>
                                <br>
                                <p style="text-align: center">Notification for Stock</p>
                            </div>
                        </div>
                        <div class="feature_back">
                            <p>User/s shall be notified if any item goes below 10 in stock. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class='space1'></div>
    <div class='space1'></div>
@endsection
