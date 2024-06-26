@extends('frontend.layouts.website')
@section('content')
@section('title', 'New Car ')


<div>

    <!-- =-=-=-=-=-=-= Featured Ads =-=-=-=-=-=-= -->
    <section class="custom-padding gray p-0 pt-4">
        <!-- Main Container -->
        <div class="container ">
            <!-- Row -->
            <div class="row">
                <!-- Heading Area -->
                <div class="heading-panel">
                    <div class="col-xs-12 col-md-12 col-sm-12 left-side">
                        <!-- Main Title -->
                        <h1> <span class="heading-color"> New</span> Cars</h1>
                        <p>Are you planning on buying a new car? Well, we know that with so many car options available
                            out there, it gets really difficult to find a good car which suits your need. Hence, we have
                            put together a complete list of new cars. Maruti Suzuki, Tata and Toyota are the 3 most
                            popular car brands. These popular car brands cater to a wide spectrum of budgets and needs,
                            offering a variety of cars from fuel-efficient hatchbacks to spacious SUVs. The 5 most
                            popular cars are Mahindra XUV 3XO, Toyota Urban Cruiser Taisor, Maruti Suzuki Fronx, Maruti
                            Suzuki Swift and Hyundai Creta. Explore the complete list of cars by exploring different
                            brands or by applying multiple filters such as budget, fuel type, body type etc. You can
                            find the car that suits you best from the list of cars below.</p>
                    </div>
                </div>
            </div>
            <!-- Main Container End -->
        </div>
    </section>
    <!-- =-=-=-=-=-=-= Featured Ads End =-=-=-=-=-=-= -->


    <!-- =-=-=-=-=-=-= All Brands =-=-=-=-=-=-= -->
    <section class="client-section pt-0 pb-5 gray">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="">
                        <h3> <span class="heading-color"> All </span> Brands</h3>
                    </div>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="brand-logo-area clients-bg">
                        <div class="client-brand-list">
                            <div class="sigle-clients-brand">
                                <a href="#"><img src="{{ asset('assets/frontend-assets/images/brands/1.png') }}"
                                        alt=""></a>
                            </div>
                            <div class="sigle-clients-brand">
                                <a href="#"><img src="{{ asset('assets/frontend-assets/images/brands/2.png') }}"
                                        alt=""></a>
                            </div>
                            <div class="sigle-clients-brand">
                                <a href="#"><img src="{{ asset('assets/frontend-assets/images/brands/3.png') }}"
                                        alt=""></a>
                            </div>
                            <div class="sigle-clients-brand">
                                <a href="#"><img src="{{ asset('assets/frontend-assets/images/brands/4.png') }}"
                                        alt=""></a>
                            </div>
                            <div class="sigle-clients-brand">
                                <a href="#"><img src="{{ asset('assets/frontend-assets/images/brands/5.png') }}"
                                        alt=""></a>
                            </div>
                            <div class="sigle-clients-brand">
                                <a href="#"><img src="{{ asset('assets/frontend-assets/images/brands/6.png') }}"
                                        alt=""></a>
                            </div>
                            <div class="sigle-clients-brand">
                                <a href="#"><img src="{{ asset('assets/frontend-assets/images/brands/7.png') }}"
                                        alt=""></a>
                            </div>
                            <div class="sigle-clients-brand">
                                <a href="#"><img src="{{ asset('assets/frontend-assets/images/brands/8.png') }}"
                                        alt=""></a>
                            </div>
                            <div class="sigle-clients-brand">
                                <a href="#"><img src="{{ asset('assets/frontend-assets/images/brands/9.png') }}"
                                        alt=""></a>
                            </div>
                            <div class="sigle-clients-brand">
                                <a href="#"><img src="{{ asset('assets/frontend-assets/images/brands/11.png') }}"
                                        alt=""></a>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =-=-=-=-=-=-= All Brands End =-=-=-=-=-=-= -->


    <!-- =-=-=-=-=-=-= Cars Of Your Choice =-=-=-=-=-=-= -->
    <section class="custom-padding gray featured-cars rounded-3">
        <!-- Main Container -->
        <div class="container ">
            <!-- Row -->
            <div class="row">
                <!-- Heading Area -->
                <div class="heading-panel">
                    <div class="col-xs-12 col-md-12 col-sm-12 left-side">
                        <!-- Main Title -->
                        <h1>Find The Cars Of <span class="heading-color"> Your Choice</span> </h1>
                    </div>
                </div>

                <div class="card ">

                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="nav-item active">
                            <a class="nav-link" aria-controls="budget" role="tab" data-toggle="tab"
                                href="#budget">Budget </a>
                        </li>
                        <li role="presentation" class="nav-item">
                            <a class="nav-link" aria-controls="bodytype" role="tab" data-toggle="tab"
                                href="#bodytype">Body Type</a>
                        </li>
                        <li role="presentation" class="nav-item">
                            <a class="nav-link" aria-controls="upcoming" role="tab" data-toggle="tab"
                                href="#fueltype">Fuel Type</a>
                        </li>
                        <li role="presentation" class="nav-item">
                            <a class="nav-link" aria-controls="transmission" role="tab" data-toggle="tab"
                                href="#transmission">Transmission</a>
                        </li>
                        <li role="presentation" class="nav-item">
                            <a class="nav-link" aria-controls="seatingcapacity" role="tab" data-toggle="tab"
                                href="#seatingcapacity">Seating Capacity</a>
                        </li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content clearfix py-5 ">
                        <div class="tab-pane fade in active" id="budget">
                            <!-- Middle Content Box -->
                            <div class="col-md-12 col-xs-12 col-sm-12">
                                <div class="row ">
                                    <div class="d-flex flex-row flex-wrap">
                                        <a class="me-3 mb-3" href="#" role="button">
                                            <button type="button" class="btn btn-default btn-sm rounded-pill">Under 5
                                                Lakh</button>
                                        </a>
                                        <a class="me-3 mb-3" href="#" role="button">
                                            <button type="button" class="btn btn-default btn-sm rounded-pill">Under 6
                                                Lakh</button>
                                        </a>
                                        <a class="me-3 mb-3" href="#" role="button">
                                            <button type="button" class="btn btn-default btn-sm rounded-pill">Under 7
                                                Lakh</button>
                                        </a>
                                        <a class="me-3 mb-3" href="#" role="button">
                                            <button type="button" class="btn btn-default btn-sm rounded-pill">Under 8
                                                Lakh</button>
                                        </a>
                                        <a class="me-3 mb-3" href="#" role="button">
                                            <button type="button" class="btn btn-default btn-sm rounded-pill">Under
                                                10
                                                Lakh</button>
                                        </a>
                                        <a class="me-3 mb-3" href="#" role="button">
                                            <button type="button" class="btn btn-default btn-sm rounded-pill">Under
                                                15
                                                Lakh</button>
                                        </a>
                                        <a class="me-3 mb-3" href="#" role="button">
                                            <button type="button" class="btn btn-default btn-sm rounded-pill">Under
                                                20
                                                Lakh</button>
                                        </a>
                                        <a class="me-3 mb-3" href="#" role="button">
                                            <button type="button" class="btn btn-default btn-sm rounded-pill">Under
                                                25
                                                Lakh</button>
                                        </a>
                                        <a class="me-3 mb-3" href="#" role="button">
                                            <button type="button" class="btn btn-default btn-sm rounded-pill">Under
                                                30
                                                Lakh</button>
                                        </a>
                                        <a class="me-3 mb-3" href="#" role="button">
                                            <button type="button" class="btn btn-default btn-sm rounded-pill">Luxury
                                                Cars</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- Middle Content Box End -->
                        </div>

                        <div class="tab-pane fade" id="bodytype">
                            <!-- Middle Content Box -->
                            <div class="col-md-12 col-xs-12 col-sm-12">
                                <div class="row">
                                    <!-- Body Type -->
                                    <div class="col-md-2 col-sm-3 col-xs-4">
                                        <div class="box">
                                            <a href="#">
                                                <img alt="Convertible"
                                                    src="{{ asset('assets/frontend-assets/images/bodytype/1.png') }}">
                                                <h4>Convertible</h4>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- Body Type -->
                                    <div class="col-md-2 col-sm-3 col-xs-4">
                                        <div class="box">
                                            <a href="#">
                                                <img alt="Coupe"
                                                    src="{{ asset('assets/frontend-assets/images/bodytype/2.png') }}">
                                                <h4>Coupe</h4>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- Body Type -->
                                    <div class="col-md-2 col-sm-3 col-xs-4">
                                        <div class="box">
                                            <a href="#">
                                                <img alt="Sedan"
                                                    src="{{ asset('assets/frontend-assets/images/bodytype/3.png') }}">
                                                <h4>Sedan</h4>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- Body Type -->
                                    <div class="col-md-2 col-sm-3 col-xs-4">
                                        <div class="box">
                                            <a href="#">
                                                <img alt="Van/Minivan"
                                                    src="{{ asset('assets/frontend-assets/images/bodytype/4.png') }}">
                                                <h4>Van/Minivan</h4>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- Body Type -->
                                    <div class="col-md-2 col-sm-3 col-xs-4">
                                        <div class="box">
                                            <a href="#">
                                                <img alt="Truck"
                                                    src="{{ asset('assets/frontend-assets/images/bodytype/5.png') }}">
                                                <h4>Truck</h4>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- Body Type -->
                                    <div class="col-md-2 col-sm-3 col-xs-4">
                                        <div class="box">
                                            <a href="#">
                                                <img alt="SUV"
                                                    src="{{ asset('assets/frontend-assets/images/bodytype/6.png') }}">
                                                <h4>SUV</h4>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- Body Type -->
                                    <div class="col-md-2 col-sm-3 col-xs-4">
                                        <div class="box">
                                            <a href="#">
                                                <img alt="Hatchback"
                                                    src="{{ asset('assets/frontend-assets/images/bodytype/6.png') }}">
                                                <h4>Hatchback</h4>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- Body Type -->
                                    <div class="col-md-2 col-sm-3 col-xs-4">
                                        <div class="box">
                                            <a href="#">
                                                <img alt="Compact SUV"
                                                    src="{{ asset('assets/frontend-assets/images/bodytype/6.png') }}">
                                                <h4>Compact SUV</h4>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- Body Type -->
                                    <div class="col-md-2 col-sm-3 col-xs-4">
                                        <div class="box">
                                            <a href="#">
                                                <img alt="Convertible"
                                                    src="{{ asset('assets/frontend-assets/images/bodytype/6.png') }}">
                                                <h4>Convertible</h4>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- Body Type -->
                                    <div class="col-md-2 col-sm-3 col-xs-4">
                                        <div class="box">
                                            <a href="#">
                                                <img alt="Compact Sedan"
                                                    src="{{ asset('assets/frontend-assets/images/bodytype/6.png') }}">
                                                <h4>Compact Sedan</h4>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- Body Type -->
                                    <div class="col-md-2 col-sm-3 col-xs-4">
                                        <div class="box">
                                            <a href="#">
                                                <img alt="Station Wagon"
                                                    src="{{ asset('assets/frontend-assets/images/bodytype/6.png') }}">
                                                <h4>Station Wagon</h4>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- Body Type -->
                                    <div class="col-md-2 col-sm-3 col-xs-4">
                                        <div class="box">
                                            <a href="#">
                                                <img alt="MUV"
                                                    src="{{ asset('assets/frontend-assets/images/bodytype/6.png') }}">
                                                <h4>MUV</h4>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Middle Content Box End -->
                        </div>

                        <div class="tab-pane fade" id="fueltype">
                            <!-- Middle Content Box -->
                            <div class="col-md-12 col-xs-12 col-sm-12">
                                <div class="row">
                                    <div class="row">
                                        <!-- Body Type -->
                                        <div class="col-md-2 col-sm-3 col-xs-4">
                                            <div class="box">
                                                <a href="#">
                                                    <img alt="Petrol" width="75"
                                                        src="{{ asset('assets/frontend-assets/images/fueltype/petrol.svg') }}">
                                                    <h4>Petrol</h4>
                                                </a>
                                            </div>
                                        </div>
                                        <!-- Body Type -->
                                        <div class="col-md-2 col-sm-3 col-xs-4">
                                            <div class="box">
                                                <a href="#">
                                                    <img alt="Diesel" width="75"
                                                        src="{{ asset('assets/frontend-assets/images/fueltype/diesel.svg') }}">
                                                    <h4>Diesel</h4>
                                                </a>
                                            </div>
                                        </div>
                                        <!-- Body Type -->
                                        <div class="col-md-2 col-sm-3 col-xs-4">
                                            <div class="box">
                                                <a href="#">
                                                    <img alt="CNG" width="75"
                                                        src="{{ asset('assets/frontend-assets/images/fueltype/cng.svg') }}">
                                                    <h4>CNG</h4>
                                                </a>
                                            </div>
                                        </div>
                                        <!-- Body Type -->
                                        <div class="col-md-2 col-sm-3 col-xs-4">
                                            <div class="box">
                                                <a href="#">
                                                    <img alt="Electric" width="75"
                                                        src="{{ asset('assets/frontend-assets/images/fueltype/electric.svg') }}">
                                                    <h4>Electric</h4>
                                                </a>
                                            </div>
                                        </div>
                                        <!-- Body Type -->
                                        <div class="col-md-2 col-sm-3 col-xs-4">
                                            <div class="box">
                                                <a href="#">
                                                    <img alt="Hybrid" width="75"
                                                        src="{{ asset('assets/frontend-assets/images/fueltype/h-filter-without-background.svg') }}">
                                                    <h4>Hybrid</h4>
                                                </a>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!-- Middle Content Box End -->
                        </div>
                        <div class="tab-pane fade" id="transmission">
                            <!-- Middle Content Box -->
                            <div class="col-md-12 col-xs-12 col-sm-12">
                                <div class="row">
                                    <!-- Body Type -->
                                    <div class="col-md-2 col-sm-3 col-xs-4">
                                        <div class="box">
                                            <a href="#">
                                                <img alt="Automatic" width="50"
                                                    src="{{ asset('assets/frontend-assets/images/fueltype/automatic_clr.svg') }}">
                                                <h4>Automatic</h4>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- Body Type -->
                                    <div class="col-md-2 col-sm-3 col-xs-4">
                                        <div class="box">
                                            <a href="#">
                                                <img alt="Manual" width="50"
                                                    src="{{ asset('assets/frontend-assets/images/fueltype/manual_clr.svg') }}">
                                                <h4>Manual</h4>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Middle Content Box End -->
                        </div>
                        <div class="tab-pane fade" id="seatingcapacity">
                            <!-- Middle Content Box -->
                            <div class="col-md-12 col-xs-12 col-sm-12">
                                <div class="row">
                                    <div class="d-flex flex-row flex-wrap">
                                        <a class="me-3 mb-3" href="#" role="button">
                                            <button type="button" class="btn btn-default btn-sm rounded-pill">5
                                                Seater</button>
                                        </a>
                                        <a class="me-3 mb-3" href="#" role="button">
                                            <button type="button" class="btn btn-default btn-sm rounded-pill"> 6
                                                Seater</button>
                                        </a>
                                        <a class="me-3 mb-3" href="#" role="button">
                                            <button type="button" class="btn btn-default btn-sm rounded-pill"> 7
                                                Seater</button>
                                        </a>
                                        <a class="me-3 mb-3" href="#" role="button">
                                            <button type="button" class="btn btn-default btn-sm rounded-pill"> 8
                                                Seater</button>
                                        </a>

                                    </div>
                                </div>
                            </div>
                            <!-- Middle Content Box End -->
                        </div>
                    </div>
                    <!-- Row End -->
                </div>
            </div>
            <!-- Main Container End -->
        </div>
    </section>
    <!-- =-=-=-=-=-=-= Cars Of Your Choice End =-=-=-=-=-=-= -->


    <!-- =-=-=-=-=-=-= Featured Ads =-=-=-=-=-=-= -->
    <section class="custom-padding gray">
        <!-- Main Container -->
        <div class="container featured-cars">
            <!-- Row -->
            <div class="row">
                <!-- Heading Area -->
                <div class="heading-panel">
                    <div class="col-xs-12 col-md-12 col-sm-12 left-side">
                        <!-- Main Title -->
                        <h1> <span class="heading-color"> Featured</span> Cars</h1>
                    </div>
                </div>

                <div class="card">

                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="nav-item active">
                            <a class="nav-link" aria-controls="trending" role="tab" data-toggle="tab"
                                href="#trending">Trending </a>
                        </li>
                        <li role="presentation" class="nav-item">
                            <a class="nav-link" aria-controls="popular" role="tab" data-toggle="tab"
                                href="#popular">Popular</a>
                        </li>
                        <li role="presentation" class="nav-item">
                            <a class="nav-link" aria-controls="upcoming" role="tab" data-toggle="tab"
                                href="#upcoming">Upcoming</a>
                        </li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content clearfix">
                        <div class="tab-pane fade in active" style="margin-top: 20px;" id="trending">
                            <!-- Middle Content Box -->
                            <div class="col-md-12 col-xs-12 col-sm-12">
                                <div class="row">
                                    <div class=" featured-slider owl-carousel owl-theme">
                                        <div class="item">
                                            <div class="grid-style-2">
                                                <!-- Listing Ad Grid -->
                                                <div class="col-md-12 col-xs-12 col-sm-12 pe-2">
                                                    <div class="category-grid-box-1">
                                                        <div class="featured-ribbon">
                                                            <span>Featured</span>
                                                        </div>
                                                        <div class="image">
                                                            <img alt="Carz Choice"
                                                                src="{{ asset('assets/frontend-assets/images/posting/15.jpg') }}"
                                                                class="img-responsive">
                                                            <div class="ribbon popular"></div>
                                                            {{-- <div class="price-tag">
                                                            <div class="price"><span>$205,000</span></div>
                                                        </div> --}}
                                                        </div>
                                                        <div class="short-description-1 clearfix">
                                                            {{-- <div class="category-title"> 
                                                            <span><a href="#">Sports &
                                                                    Equipment</a></span> </div> --}}

                                                            <h3>
                                                                <a title="" href="#">
                                                                    Mahindra XUV 3XO
                                                                </a>
                                                            </h3>
                                                            <div class="ad-price">Rs. 110,000
                                                                <span class="text-muted ps-2">onwards</span>
                                                            </div>

                                                            <p class="location">
                                                                <i class="fa fa-map-marker"></i>
                                                                On-Road Price, Delhi
                                                            </p>

                                                            <a class="" href="#">
                                                                <button class="btn btn-outline btn-danger btn-sm  ">
                                                                    <i class="fa fa-phone"></i>
                                                                    View Details.
                                                                </button>
                                                            </a>

                                                        </div>
                                                    </div>
                                                    <!-- Listing Ad Grid -->
                                                </div>
                                            </div>
                                        </div>

                                        <div class="item">
                                            <div class="grid-style-2">
                                                <!-- Listing Ad Grid -->
                                                <div class="col-md-12 col-xs-12 col-sm-12 pe-2">
                                                    <div class="category-grid-box-1">
                                                        <div class="featured-ribbon">
                                                            <span>Featured</span>
                                                        </div>
                                                        <div class="image">
                                                            <img alt="Carz Choice"
                                                                src="{{ asset('assets/frontend-assets/images/posting/15.jpg') }}"
                                                                class="img-responsive">
                                                            <div class="ribbon popular"></div>
                                                            {{-- <div class="price-tag">
                                                            <div class="price"><span>$205,000</span></div>
                                                        </div> --}}
                                                        </div>
                                                        <div class="short-description-1 clearfix">
                                                            {{-- <div class="category-title"> 
                                                            <span><a href="#">Sports &
                                                                    Equipment</a></span> </div> --}}

                                                            <h3>
                                                                <a title="" href="#">
                                                                    Mahindra XUV 3XO
                                                                </a>
                                                            </h3>
                                                            <div class="ad-price">Rs. 110,000
                                                                <span class="text-muted ps-2">onwards</span>
                                                            </div>

                                                            <p class="location">
                                                                <i class="fa fa-map-marker"></i>
                                                                On-Road Price, Delhi
                                                            </p>

                                                            <a class="" href="#">
                                                                <button class="btn btn-outline btn-danger btn-sm  ">
                                                                    <i class="fa fa-phone"></i>
                                                                    View Details.
                                                                </button>
                                                            </a>

                                                        </div>
                                                    </div>
                                                    <!-- Listing Ad Grid -->
                                                </div>
                                            </div>
                                        </div>

                                        <div class="item">
                                            <div class="grid-style-2">
                                                <!-- Listing Ad Grid -->
                                                <div class="col-md-12 col-xs-12 col-sm-12 pe-2">
                                                    <div class="category-grid-box-1">
                                                        <div class="featured-ribbon">
                                                            <span>Featured</span>
                                                        </div>
                                                        <div class="image">
                                                            <img alt="Carz Choice"
                                                                src="{{ asset('assets/frontend-assets/images/posting/15.jpg') }}"
                                                                class="img-responsive">
                                                            <div class="ribbon popular"></div>
                                                            {{-- <div class="price-tag">
                                                            <div class="price"><span>$205,000</span></div>
                                                        </div> --}}
                                                        </div>
                                                        <div class="short-description-1 clearfix">
                                                            {{-- <div class="category-title"> 
                                                            <span><a href="#">Sports &
                                                                    Equipment</a></span> </div> --}}

                                                            <h3>
                                                                <a title="" href="#">
                                                                    Mahindra XUV 3XO
                                                                </a>
                                                            </h3>
                                                            <div class="ad-price">Rs. 110,000
                                                                <span class="text-muted ps-2">onwards</span>
                                                            </div>

                                                            <p class="location">
                                                                <i class="fa fa-map-marker"></i>
                                                                On-Road Price, Delhi
                                                            </p>

                                                            <a class="" href="#">
                                                                <button class="btn btn-outline btn-danger btn-sm  ">
                                                                    <i class="fa fa-phone"></i>
                                                                    View Details.
                                                                </button>
                                                            </a>

                                                        </div>
                                                    </div>
                                                    <!-- Listing Ad Grid -->
                                                </div>
                                            </div>
                                        </div>

                                        <div class="item">
                                            <div class="grid-style-2">
                                                <!-- Listing Ad Grid -->
                                                <div class="col-md-12 col-xs-12 col-sm-12 pe-2">
                                                    <div class="category-grid-box-1">
                                                        <div class="featured-ribbon">
                                                            <span>Featured</span>
                                                        </div>
                                                        <div class="image">
                                                            <img alt="Carz Choice"
                                                                src="{{ asset('assets/frontend-assets/images/posting/15.jpg') }}"
                                                                class="img-responsive">
                                                            <div class="ribbon popular"></div>
                                                            {{-- <div class="price-tag">
                                                            <div class="price"><span>$205,000</span></div>
                                                        </div> --}}
                                                        </div>
                                                        <div class="short-description-1 clearfix">
                                                            {{-- <div class="category-title"> 
                                                            <span><a href="#">Sports &
                                                                    Equipment</a></span> </div> --}}

                                                            <h3>
                                                                <a title="" href="#">
                                                                    Mahindra XUV 3XO
                                                                </a>
                                                            </h3>
                                                            <div class="ad-price">Rs. 110,000
                                                                <span class="text-muted ps-2">onwards</span>
                                                            </div>

                                                            <p class="location">
                                                                <i class="fa fa-map-marker"></i>
                                                                On-Road Price, Delhi
                                                            </p>

                                                            <a class="" href="#">
                                                                <button class="btn btn-outline btn-danger btn-sm  ">
                                                                    <i class="fa fa-phone"></i>
                                                                    View Details.
                                                                </button>
                                                            </a>

                                                        </div>
                                                    </div>
                                                    <!-- Listing Ad Grid -->
                                                </div>
                                            </div>
                                        </div>

                                        <div class="item">
                                            <div class="grid-style-2">
                                                <!-- Listing Ad Grid -->
                                                <div class="col-md-12 col-xs-12 col-sm-12 pe-2">
                                                    <div class="category-grid-box-1">
                                                        <div class="featured-ribbon">
                                                            <span>Featured</span>
                                                        </div>
                                                        <div class="image">
                                                            <img alt="Carz Choice"
                                                                src="{{ asset('assets/frontend-assets/images/posting/15.jpg') }}"
                                                                class="img-responsive">
                                                            <div class="ribbon popular"></div>
                                                            {{-- <div class="price-tag">
                                                            <div class="price"><span>$205,000</span></div>
                                                        </div> --}}
                                                        </div>
                                                        <div class="short-description-1 clearfix">
                                                            {{-- <div class="category-title"> 
                                                            <span><a href="#">Sports &
                                                                    Equipment</a></span> </div> --}}

                                                            <h3>
                                                                <a title="" href="#">
                                                                    Mahindra XUV 3XO
                                                                </a>
                                                            </h3>
                                                            <div class="ad-price">Rs. 110,000
                                                                <span class="text-muted ps-2">onwards</span>
                                                            </div>

                                                            <p class="location">
                                                                <i class="fa fa-map-marker"></i>
                                                                On-Road Price, Delhi
                                                            </p>

                                                            <a class="" href="#">
                                                                <button class="btn btn-outline btn-danger btn-sm  ">
                                                                    <i class="fa fa-phone"></i>
                                                                    View Details.
                                                                </button>
                                                            </a>

                                                        </div>
                                                    </div>
                                                    <!-- Listing Ad Grid -->
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!-- Middle Content Box End -->
                        </div>

                        <div class="tab-pane fade" style="margin-top: 20px;" id="popular">
                            <!-- Middle Content Box -->
                            <div class="col-md-12 col-xs-12 col-sm-12">
                                <div class="row">
                                    <div class=" featured-slider owl-carousel owl-theme">
                                        <div class="item">
                                            <div class="grid-style-2">
                                                <!-- Listing Ad Grid -->
                                                <div class="col-md-12 col-xs-12 col-sm-12 pe-2">
                                                    <div class="category-grid-box-1">
                                                        <div class="featured-ribbon">
                                                            <span>Featured</span>
                                                        </div>
                                                        <div class="image">
                                                            <img alt="Carz Choice"
                                                                src="{{ asset('assets/frontend-assets/images/posting/15.jpg') }}"
                                                                class="img-responsive">
                                                            <div class="ribbon popular"></div>
                                                            {{-- <div class="price-tag">
                                                            <div class="price"><span>$205,000</span></div>
                                                        </div> --}}
                                                        </div>
                                                        <div class="short-description-1 clearfix">
                                                            {{-- <div class="category-title"> 
                                                            <span><a href="#">Sports &
                                                                    Equipment</a></span> </div> --}}

                                                            <h3>
                                                                <a title="" href="#">
                                                                    Mahindra XUV 3XO
                                                                </a>
                                                            </h3>
                                                            <div class="ad-price">Rs. 110,000
                                                                <span class="text-muted ps-2">onwards</span>
                                                            </div>

                                                            <p class="location">
                                                                <i class="fa fa-map-marker"></i>
                                                                On-Road Price, Delhi
                                                            </p>

                                                            <a class="" href="#">
                                                                <button class="btn btn-outline btn-danger btn-sm  ">
                                                                    <i class="fa fa-phone"></i>
                                                                    View Details.
                                                                </button>
                                                            </a>

                                                        </div>
                                                    </div>
                                                    <!-- Listing Ad Grid -->
                                                </div>
                                            </div>
                                        </div>

                                        <div class="item">
                                            <div class="grid-style-2">
                                                <!-- Listing Ad Grid -->
                                                <div class="col-md-12 col-xs-12 col-sm-12 pe-2">
                                                    <div class="category-grid-box-1">
                                                        <div class="featured-ribbon">
                                                            <span>Featured</span>
                                                        </div>
                                                        <div class="image">
                                                            <img alt="Carz Choice"
                                                                src="{{ asset('assets/frontend-assets/images/posting/15.jpg') }}"
                                                                class="img-responsive">
                                                            <div class="ribbon popular"></div>
                                                            {{-- <div class="price-tag">
                                                            <div class="price"><span>$205,000</span></div>
                                                        </div> --}}
                                                        </div>
                                                        <div class="short-description-1 clearfix">
                                                            {{-- <div class="category-title"> 
                                                            <span><a href="#">Sports &
                                                                    Equipment</a></span> </div> --}}

                                                            <h3>
                                                                <a title="" href="#">
                                                                    Mahindra XUV 3XO
                                                                </a>
                                                            </h3>
                                                            <div class="ad-price">Rs. 110,000
                                                                <span class="text-muted ps-2">onwards</span>
                                                            </div>

                                                            <p class="location">
                                                                <i class="fa fa-map-marker"></i>
                                                                On-Road Price, Delhi
                                                            </p>

                                                            <a class="" href="#">
                                                                <button class="btn btn-outline btn-danger btn-sm  ">
                                                                    <i class="fa fa-phone"></i>
                                                                    View Details.
                                                                </button>
                                                            </a>

                                                        </div>
                                                    </div>
                                                    <!-- Listing Ad Grid -->
                                                </div>
                                            </div>
                                        </div>

                                        <div class="item">
                                            <div class="grid-style-2">
                                                <!-- Listing Ad Grid -->
                                                <div class="col-md-12 col-xs-12 col-sm-12 pe-2">
                                                    <div class="category-grid-box-1">
                                                        <div class="featured-ribbon">
                                                            <span>Featured</span>
                                                        </div>
                                                        <div class="image">
                                                            <img alt="Carz Choice"
                                                                src="{{ asset('assets/frontend-assets/images/posting/15.jpg') }}"
                                                                class="img-responsive">
                                                            <div class="ribbon popular"></div>
                                                            {{-- <div class="price-tag">
                                                            <div class="price"><span>$205,000</span></div>
                                                        </div> --}}
                                                        </div>
                                                        <div class="short-description-1 clearfix">
                                                            {{-- <div class="category-title"> 
                                                            <span><a href="#">Sports &
                                                                    Equipment</a></span> </div> --}}

                                                            <h3>
                                                                <a title="" href="#">
                                                                    Mahindra XUV 3XO
                                                                </a>
                                                            </h3>
                                                            <div class="ad-price">Rs. 110,000
                                                                <span class="text-muted ps-2">onwards</span>
                                                            </div>

                                                            <p class="location">
                                                                <i class="fa fa-map-marker"></i>
                                                                On-Road Price, Delhi
                                                            </p>

                                                            <a class="" href="#">
                                                                <button class="btn btn-outline btn-danger btn-sm  ">
                                                                    <i class="fa fa-phone"></i>
                                                                    View Details.
                                                                </button>
                                                            </a>

                                                        </div>
                                                    </div>
                                                    <!-- Listing Ad Grid -->
                                                </div>
                                            </div>
                                        </div>

                                        <div class="item">
                                            <div class="grid-style-2">
                                                <!-- Listing Ad Grid -->
                                                <div class="col-md-12 col-xs-12 col-sm-12 pe-2">
                                                    <div class="category-grid-box-1">
                                                        <div class="featured-ribbon">
                                                            <span>Featured</span>
                                                        </div>
                                                        <div class="image">
                                                            <img alt="Carz Choice"
                                                                src="{{ asset('assets/frontend-assets/images/posting/15.jpg') }}"
                                                                class="img-responsive">
                                                            <div class="ribbon popular"></div>
                                                            {{-- <div class="price-tag">
                                                            <div class="price"><span>$205,000</span></div>
                                                        </div> --}}
                                                        </div>
                                                        <div class="short-description-1 clearfix">
                                                            {{-- <div class="category-title"> 
                                                            <span><a href="#">Sports &
                                                                    Equipment</a></span> </div> --}}

                                                            <h3>
                                                                <a title="" href="#">
                                                                    Mahindra XUV 3XO
                                                                </a>
                                                            </h3>
                                                            <div class="ad-price">Rs. 110,000
                                                                <span class="text-muted ps-2">onwards</span>
                                                            </div>

                                                            <p class="location">
                                                                <i class="fa fa-map-marker"></i>
                                                                On-Road Price, Delhi
                                                            </p>

                                                            <a class="" href="#">
                                                                <button class="btn btn-outline btn-danger btn-sm  ">
                                                                    <i class="fa fa-phone"></i>
                                                                    View Details.
                                                                </button>
                                                            </a>

                                                        </div>
                                                    </div>
                                                    <!-- Listing Ad Grid -->
                                                </div>
                                            </div>
                                        </div>

                                        <div class="item">
                                            <div class="grid-style-2">
                                                <!-- Listing Ad Grid -->
                                                <div class="col-md-12 col-xs-12 col-sm-12 pe-2">
                                                    <div class="category-grid-box-1">
                                                        <div class="featured-ribbon">
                                                            <span>Featured</span>
                                                        </div>
                                                        <div class="image">
                                                            <img alt="Carz Choice"
                                                                src="{{ asset('assets/frontend-assets/images/posting/15.jpg') }}"
                                                                class="img-responsive">
                                                            <div class="ribbon popular"></div>
                                                            {{-- <div class="price-tag">
                                                            <div class="price"><span>$205,000</span></div>
                                                        </div> --}}
                                                        </div>
                                                        <div class="short-description-1 clearfix">
                                                            {{-- <div class="category-title"> 
                                                            <span><a href="#">Sports &
                                                                    Equipment</a></span> </div> --}}

                                                            <h3>
                                                                <a title="" href="#">
                                                                    Mahindra XUV 3XO
                                                                </a>
                                                            </h3>
                                                            <div class="ad-price">Rs. 110,000
                                                                <span class="text-muted ps-2">onwards</span>
                                                            </div>

                                                            <p class="location">
                                                                <i class="fa fa-map-marker"></i>
                                                                On-Road Price, Delhi
                                                            </p>

                                                            <a class="" href="#">
                                                                <button class="btn btn-outline btn-danger btn-sm  ">
                                                                    <i class="fa fa-phone"></i>
                                                                    View Details.
                                                                </button>
                                                            </a>

                                                        </div>
                                                    </div>
                                                    <!-- Listing Ad Grid -->
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!-- Middle Content Box End -->
                        </div>

                        <div class="tab-pane fade" style="margin-top: 20px;" id="upcoming">
                            <!-- Middle Content Box -->
                            <div class="col-md-12 col-xs-12 col-sm-12">
                                <div class="row">
                                    <div class=" featured-slider owl-carousel owl-theme">
                                        <div class="item">
                                            <div class="grid-style-2">
                                                <!-- Listing Ad Grid -->
                                                <div class="col-md-12 col-xs-12 col-sm-12 pe-2">
                                                    <div class="category-grid-box-1">
                                                        <div class="featured-ribbon">
                                                            <span>Featured</span>
                                                        </div>
                                                        <div class="image">
                                                            <img alt="Carz Choice"
                                                                src="{{ asset('assets/frontend-assets/images/posting/15.jpg') }}"
                                                                class="img-responsive">
                                                            <div class="ribbon popular"></div>
                                                            {{-- <div class="price-tag">
                                                            <div class="price"><span>$205,000</span></div>
                                                        </div> --}}
                                                        </div>
                                                        <div class="short-description-1 clearfix">
                                                            {{-- <div class="category-title"> 
                                                            <span><a href="#">Sports &
                                                                    Equipment</a></span> </div> --}}

                                                            <h3>
                                                                <a title="" href="#">
                                                                    Mahindra XUV 3XO
                                                                </a>
                                                            </h3>
                                                            <div class="ad-price">Rs. 110,000
                                                                <span class="text-muted ps-2">onwards</span>
                                                            </div>

                                                            <p class="location">
                                                                <i class="fa fa-map-marker"></i>
                                                                On-Road Price, Delhi
                                                            </p>

                                                            <a class="" href="#">
                                                                <button class="btn btn-outline btn-danger btn-sm  ">
                                                                    <i class="fa fa-phone"></i>
                                                                    View Details.
                                                                </button>
                                                            </a>

                                                        </div>
                                                    </div>
                                                    <!-- Listing Ad Grid -->
                                                </div>
                                            </div>
                                        </div>

                                        <div class="item">
                                            <div class="grid-style-2">
                                                <!-- Listing Ad Grid -->
                                                <div class="col-md-12 col-xs-12 col-sm-12 pe-2">
                                                    <div class="category-grid-box-1">
                                                        <div class="featured-ribbon">
                                                            <span>Featured</span>
                                                        </div>
                                                        <div class="image">
                                                            <img alt="Carz Choice"
                                                                src="{{ asset('assets/frontend-assets/images/posting/15.jpg') }}"
                                                                class="img-responsive">
                                                            <div class="ribbon popular"></div>
                                                            {{-- <div class="price-tag">
                                                            <div class="price"><span>$205,000</span></div>
                                                        </div> --}}
                                                        </div>
                                                        <div class="short-description-1 clearfix">
                                                            {{-- <div class="category-title"> 
                                                            <span><a href="#">Sports &
                                                                    Equipment</a></span> </div> --}}

                                                            <h3>
                                                                <a title="" href="#">
                                                                    Mahindra XUV 3XO
                                                                </a>
                                                            </h3>
                                                            <div class="ad-price">Rs. 110,000
                                                                <span class="text-muted ps-2">onwards</span>
                                                            </div>

                                                            <p class="location">
                                                                <i class="fa fa-map-marker"></i>
                                                                On-Road Price, Delhi
                                                            </p>

                                                            <a class="" href="#">
                                                                <button class="btn btn-outline btn-danger btn-sm  ">
                                                                    <i class="fa fa-phone"></i>
                                                                    View Details.
                                                                </button>
                                                            </a>

                                                        </div>
                                                    </div>
                                                    <!-- Listing Ad Grid -->
                                                </div>
                                            </div>
                                        </div>

                                        <div class="item">
                                            <div class="grid-style-2">
                                                <!-- Listing Ad Grid -->
                                                <div class="col-md-12 col-xs-12 col-sm-12 pe-2">
                                                    <div class="category-grid-box-1">
                                                        <div class="featured-ribbon">
                                                            <span>Featured</span>
                                                        </div>
                                                        <div class="image">
                                                            <img alt="Carz Choice"
                                                                src="{{ asset('assets/frontend-assets/images/posting/15.jpg') }}"
                                                                class="img-responsive">
                                                            <div class="ribbon popular"></div>
                                                            {{-- <div class="price-tag">
                                                            <div class="price"><span>$205,000</span></div>
                                                        </div> --}}
                                                        </div>
                                                        <div class="short-description-1 clearfix">
                                                            {{-- <div class="category-title"> 
                                                            <span><a href="#">Sports &
                                                                    Equipment</a></span> </div> --}}

                                                            <h3>
                                                                <a title="" href="#">
                                                                    Mahindra XUV 3XO
                                                                </a>
                                                            </h3>
                                                            <div class="ad-price">Rs. 110,000
                                                                <span class="text-muted ps-2">onwards</span>
                                                            </div>

                                                            <p class="location">
                                                                <i class="fa fa-map-marker"></i>
                                                                On-Road Price, Delhi
                                                            </p>

                                                            <a class="" href="#">
                                                                <button class="btn btn-outline btn-danger btn-sm  ">
                                                                    <i class="fa fa-phone"></i>
                                                                    View Details.
                                                                </button>
                                                            </a>

                                                        </div>
                                                    </div>
                                                    <!-- Listing Ad Grid -->
                                                </div>
                                            </div>
                                        </div>

                                        <div class="item">
                                            <div class="grid-style-2">
                                                <!-- Listing Ad Grid -->
                                                <div class="col-md-12 col-xs-12 col-sm-12 pe-2">
                                                    <div class="category-grid-box-1">
                                                        <div class="featured-ribbon">
                                                            <span>Featured</span>
                                                        </div>
                                                        <div class="image">
                                                            <img alt="Carz Choice"
                                                                src="{{ asset('assets/frontend-assets/images/posting/15.jpg') }}"
                                                                class="img-responsive">
                                                            <div class="ribbon popular"></div>
                                                            {{-- <div class="price-tag">
                                                            <div class="price"><span>$205,000</span></div>
                                                        </div> --}}
                                                        </div>
                                                        <div class="short-description-1 clearfix">
                                                            {{-- <div class="category-title"> 
                                                            <span><a href="#">Sports &
                                                                    Equipment</a></span> </div> --}}

                                                            <h3>
                                                                <a title="" href="#">
                                                                    Mahindra XUV 3XO
                                                                </a>
                                                            </h3>
                                                            <div class="ad-price">Rs. 110,000
                                                                <span class="text-muted ps-2">onwards</span>
                                                            </div>

                                                            <p class="location">
                                                                <i class="fa fa-map-marker"></i>
                                                                On-Road Price, Delhi
                                                            </p>

                                                            <a class="" href="#">
                                                                <button class="btn btn-outline btn-danger btn-sm  ">
                                                                    <i class="fa fa-phone"></i>
                                                                    View Details.
                                                                </button>
                                                            </a>

                                                        </div>
                                                    </div>
                                                    <!-- Listing Ad Grid -->
                                                </div>
                                            </div>
                                        </div>

                                        <div class="item">
                                            <div class="grid-style-2">
                                                <!-- Listing Ad Grid -->
                                                <div class="col-md-12 col-xs-12 col-sm-12 pe-2">
                                                    <div class="category-grid-box-1">
                                                        <div class="featured-ribbon">
                                                            <span>Featured</span>
                                                        </div>
                                                        <div class="image">
                                                            <img alt="Carz Choice"
                                                                src="{{ asset('assets/frontend-assets/images/posting/15.jpg') }}"
                                                                class="img-responsive">
                                                            <div class="ribbon popular"></div>
                                                            {{-- <div class="price-tag">
                                                            <div class="price"><span>$205,000</span></div>
                                                        </div> --}}
                                                        </div>
                                                        <div class="short-description-1 clearfix">
                                                            {{-- <div class="category-title"> 
                                                            <span><a href="#">Sports &
                                                                    Equipment</a></span> </div> --}}

                                                            <h3>
                                                                <a title="" href="#">
                                                                    Mahindra XUV 3XO
                                                                </a>
                                                            </h3>
                                                            <div class="ad-price">Rs. 110,000
                                                                <span class="text-muted ps-2">onwards</span>
                                                            </div>

                                                            <p class="location">
                                                                <i class="fa fa-map-marker"></i>
                                                                On-Road Price, Delhi
                                                            </p>

                                                            <a class="" href="#">
                                                                <button class="btn btn-outline btn-danger btn-sm  ">
                                                                    <i class="fa fa-phone"></i>
                                                                    View Details.
                                                                </button>
                                                            </a>

                                                        </div>
                                                    </div>
                                                    <!-- Listing Ad Grid -->
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!-- Middle Content Box End -->
                        </div>
                    </div>
                    <!-- Row End -->
                </div>
            </div>
            <!-- Main Container End -->
        </div>
    </section>
    <!-- =-=-=-=-=-=-= Featured Ads End =-=-=-=-=-=-= -->


    <!-- =-=-=-=-=-=-= Popular Cars Ads =-=-=-=-=-=-= -->
    <section class="custom-padding ">
        <!-- Main Container -->
        <div class="container popular-cars">
            <!-- Row -->
            <div class="row">
                <!-- Heading Area -->
                <div class="heading-panel">
                    <div class="col-xs-12 col-md-12 col-sm-12 left-side">
                        <!-- Main Title -->
                        <h1>Get <span class="heading-color"> Offers</span> on Popular Cars</h1>
                    </div>
                </div>



                <!-- Middle Content Box -->
                <div class="col-md-12 col-xs-12 col-sm-12">
                    <div class="row">
                        <div class=" popular-slider container owl-carousel owl-theme">
                            <div class="item">
                                <div class="grid-style-2">
                                    <!-- Listing Ad Grid -->
                                    <div class="col-md-12 col-xs-12 col-sm-12 px-2">
                                        <div class="category-grid-box-1">
                                            {{-- <div class="featured-ribbon">
                                                <span>Featured</span>
                                            </div> --}}
                                            <div class="image">
                                                <img alt="Carz Choice"
                                                    src="{{ asset('assets/frontend-assets/images/posting/15.jpg') }}"
                                                    class="img-responsive">
                                                <div class="ribbon popular"></div>
                                                {{-- <div class="price-tag">
                                                        <div class="price"><span>$205,000</span></div>
                                                    </div> --}}
                                            </div>
                                            <div class="short-description-1 clearfix">
                                                {{-- <div class="category-title"> 
                                                        <span><a href="#">Sports &
                                                                Equipment</a></span> </div> --}}

                                                <h3>
                                                    <a title="" href="#">
                                                        Mahindra XUV 3XO
                                                    </a>
                                                </h3>

                                                <div class="ad-price">Rs. 110,000
                                                    <span class="text-muted ps-2">onwards</span>
                                                </div>
                                                <a class="  ">
                                                    <button class="btn btn-outline btn-danger btn-sm ">
                                                        Get Offer
                                                    </button>
                                                </a>
                                            </div>
                                        </div>
                                        <!-- Listing Ad Grid -->
                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <div class="grid-style-2">
                                    <!-- Listing Ad Grid -->
                                    <div class="col-md-12 col-xs-12 col-sm-12 px-2">
                                        <div class="category-grid-box-1">
                                            {{-- <div class="featured-ribbon">
                                                <span>Featured</span>
                                            </div> --}}
                                            <div class="image">
                                                <img alt="Carz Choice"
                                                    src="{{ asset('assets/frontend-assets/images/posting/15.jpg') }}"
                                                    class="img-responsive">
                                                <div class="ribbon popular"></div>
                                                {{-- <div class="price-tag">
                                                        <div class="price"><span>$205,000</span></div>
                                                    </div> --}}
                                            </div>
                                            <div class="short-description-1 clearfix">
                                                {{-- <div class="category-title"> 
                                                        <span><a href="#">Sports &
                                                                Equipment</a></span> </div> --}}

                                                <h3>
                                                    <a title="" href="#">
                                                        Mahindra XUV 3XO
                                                    </a>
                                                </h3>

                                                <div class="ad-price">Rs. 110,000 <span
                                                        class="text-muted ps-2">onwards</span></div>
                                                <a class="  ">
                                                    <button class="btn btn-outline btn-danger btn-sm ">
                                                        Get Offer
                                                    </button>
                                                </a>
                                            </div>
                                        </div>
                                        <!-- Listing Ad Grid -->
                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <div class="grid-style-2">
                                    <!-- Listing Ad Grid -->
                                    <div class="col-md-12 col-xs-12 col-sm-12 px-2">
                                        <div class="category-grid-box-1">
                                            {{-- <div class="featured-ribbon">
                                                <span>Featured</span>
                                            </div> --}}
                                            <div class="image">
                                                <img alt="Carz Choice"
                                                    src="{{ asset('assets/frontend-assets/images/posting/15.jpg') }}"
                                                    class="img-responsive">
                                                <div class="ribbon popular"></div>
                                                {{-- <div class="price-tag">
                                                        <div class="price"><span>$205,000</span></div>
                                                    </div> --}}
                                            </div>
                                            <div class="short-description-1 clearfix">
                                                {{-- <div class="category-title"> 
                                                        <span><a href="#">Sports &
                                                                Equipment</a></span> </div> --}}

                                                <h3>
                                                    <a title="" href="#">
                                                        Mahindra XUV 3XO
                                                    </a>
                                                </h3>

                                                <div class="ad-price">Rs. 110,000 <span
                                                        class="text-muted ps-2">onwards</span></div>
                                                <a class="  ">
                                                    <button class="btn btn-outline btn-danger btn-sm ">
                                                        Get Offer
                                                    </button>
                                                </a>
                                            </div>
                                        </div>
                                        <!-- Listing Ad Grid -->
                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <div class="grid-style-2">
                                    <!-- Listing Ad Grid -->
                                    <div class="col-md-12 col-xs-12 col-sm-12 px-2">
                                        <div class="category-grid-box-1">
                                            {{-- <div class="featured-ribbon">
                                                <span>Featured</span>
                                            </div> --}}
                                            <div class="image">
                                                <img alt="Carz Choice"
                                                    src="{{ asset('assets/frontend-assets/images/posting/15.jpg') }}"
                                                    class="img-responsive">
                                                <div class="ribbon popular"></div>
                                                {{-- <div class="price-tag">
                                                        <div class="price"><span>$205,000</span></div>
                                                    </div> --}}
                                            </div>
                                            <div class="short-description-1 clearfix">
                                                {{-- <div class="category-title"> 
                                                        <span><a href="#">Sports &
                                                                Equipment</a></span> </div> --}}

                                                <h3>
                                                    <a title="" href="#">
                                                        Mahindra XUV 3XO
                                                    </a>
                                                </h3>

                                                <div class="ad-price">Rs. 110,000 <span
                                                        class="text-muted ps-2">onwards</span></div>
                                                <a class="  ">
                                                    <button class="btn btn-outline btn-danger btn-sm ">
                                                        Get Offer
                                                    </button>
                                                </a>
                                            </div>
                                        </div>
                                        <!-- Listing Ad Grid -->
                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <div class="grid-style-2">
                                    <!-- Listing Ad Grid -->
                                    <div class="col-md-12 col-xs-12 col-sm-12 px-2">
                                        <div class="category-grid-box-1">
                                            {{-- <div class="featured-ribbon">
                                                <span>Featured</span>
                                            </div> --}}
                                            <div class="image">
                                                <img alt="Carz Choice"
                                                    src="{{ asset('assets/frontend-assets/images/posting/15.jpg') }}"
                                                    class="img-responsive">
                                                <div class="ribbon popular"></div>
                                                {{-- <div class="price-tag">
                                                        <div class="price"><span>$205,000</span></div>
                                                    </div> --}}
                                            </div>
                                            <div class="short-description-1 clearfix">
                                                {{-- <div class="category-title"> 
                                                        <span><a href="#">Sports &
                                                                Equipment</a></span> </div> --}}

                                                <h3>
                                                    <a title="" href="#">
                                                        Mahindra XUV 3XO
                                                    </a>
                                                </h3>

                                                <div class="ad-price">Rs. 110,000 <span
                                                        class="text-muted ps-2">onwards</span></div>
                                                <a class="  ">
                                                    <button class="btn btn-outline btn-danger btn-sm ">
                                                        Get Offer
                                                    </button>
                                                </a>
                                            </div>
                                        </div>
                                        <!-- Listing Ad Grid -->
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
                <!-- Middle Content Box End -->

                <!-- Row End -->
            </div>
            <!-- Main Container End -->
        </div>
    </section>
    <!-- =-=-=-=-=-=-= Popular Cars Ads End =-=-=-=-=-=-= -->


    <!-- =-=-=-=-=-=-= Top Cars In India  =-=-=-=-=-=-= -->
    <section class="custom-padding ">
        <!-- Main Container -->
        <div class="container popular-cars">
            <!-- Row -->
            <div class="row">
                <!-- Heading Area -->
                <div class="heading-panel">
                    <div class="col-xs-12 col-md-12 col-sm-12 left-side">
                        <!-- Main Title -->
                        <h1>Top Cars <span class="heading-color"> In India</span> </h1>
                    </div>
                </div>



                <!-- Middle Content Box -->
                <div class="col-md-12 col-xs-12 col-sm-12">
                    <div class="row">
                        <div class=" popular-slider container owl-carousel owl-theme">
                            <div class="item">
                                <div class="grid-style-2">
                                    <!-- Listing Ad Grid -->
                                    <div class="col-md-12 col-xs-12 col-sm-12 px-2">
                                        <div class="category-grid-box-1">
                                            {{-- <div class="featured-ribbon">
                                                <span>Featured</span>
                                            </div> --}}
                                            <div class="image">
                                                {{-- <img alt="Carz Choice" src="{{ asset('assets/frontend-assets/images/posting/15.jpg') }}" class="img-responsive"> --}}
                                                <img alt="Carz Choice"
                                                    src="https://imgd.aeplcdn.com/272x153/cw/body/suv.jpg?v=1&q=80"
                                                    class="img-responsive">
                                                <div class="ribbon popular"></div>
                                                {{-- <div class="price-tag">
                                                        <div class="price"><span>$205,000</span></div>
                                                    </div> --}}
                                            </div>
                                            <div class="short-description-1 clearfix">
                                                {{-- <div class="category-title"> 
                                                        <span><a href="#">Sports &
                                                                Equipment</a></span> </div> --}}

                                                <h3>
                                                    <a title="" href="#">
                                                        Top SUVs in India
                                                    </a>
                                                </h3>

                                                <p class="text-muted ps-2">
                                                    Hyundai Creta, Mahindra Scorpio
                                                </p>

                                            </div>
                                        </div>
                                        <!-- Listing Ad Grid -->
                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <div class="grid-style-2">
                                    <!-- Listing Ad Grid -->
                                    <div class="col-md-12 col-xs-12 col-sm-12 px-2">
                                        <div class="category-grid-box-1">
                                            {{-- <div class="featured-ribbon">
                                                <span>Featured</span>
                                            </div> --}}
                                            <div class="image">
                                                {{-- <img alt="Carz Choice" src="{{ asset('assets/frontend-assets/images/posting/15.jpg') }}" class="img-responsive"> --}}
                                                <img alt="Carz Choice"
                                                    src="https://imgd.aeplcdn.com/272x153/cw/body/suv.jpg?v=1&q=80"
                                                    class="img-responsive">
                                                <div class="ribbon popular"></div>
                                                {{-- <div class="price-tag">
                                                        <div class="price"><span>$205,000</span></div>
                                                    </div> --}}
                                            </div>
                                            <div class="short-description-1 clearfix">
                                                {{-- <div class="category-title"> 
                                                        <span><a href="#">Sports &
                                                                Equipment</a></span> </div> --}}

                                                <h3>
                                                    <a title="" href="#">
                                                        Top SUVs in India
                                                    </a>
                                                </h3>

                                                <p class="text-muted ps-2">
                                                    Hyundai Creta, Mahindra Scorpio
                                                </p>

                                            </div>
                                        </div>
                                        <!-- Listing Ad Grid -->
                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <div class="grid-style-2">
                                    <!-- Listing Ad Grid -->
                                    <div class="col-md-12 col-xs-12 col-sm-12 px-2">
                                        <div class="category-grid-box-1">
                                            {{-- <div class="featured-ribbon">
                                                <span>Featured</span>
                                            </div> --}}
                                            <div class="image">
                                                {{-- <img alt="Carz Choice" src="{{ asset('assets/frontend-assets/images/posting/15.jpg') }}" class="img-responsive"> --}}
                                                <img alt="Carz Choice"
                                                    src="https://imgd.aeplcdn.com/272x153/cw/body/suv.jpg?v=1&q=80"
                                                    class="img-responsive">
                                                <div class="ribbon popular"></div>
                                                {{-- <div class="price-tag">
                                                        <div class="price"><span>$205,000</span></div>
                                                    </div> --}}
                                            </div>
                                            <div class="short-description-1 clearfix">
                                                {{-- <div class="category-title"> 
                                                        <span><a href="#">Sports &
                                                                Equipment</a></span> </div> --}}

                                                <h3>
                                                    <a title="" href="#">
                                                        Top SUVs in India
                                                    </a>
                                                </h3>

                                                <p class="text-muted ps-2">
                                                    Hyundai Creta, Mahindra Scorpio
                                                </p>

                                            </div>
                                        </div>
                                        <!-- Listing Ad Grid -->
                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <div class="grid-style-2">
                                    <!-- Listing Ad Grid -->
                                    <div class="col-md-12 col-xs-12 col-sm-12 px-2">
                                        <div class="category-grid-box-1">
                                            {{-- <div class="featured-ribbon">
                                                <span>Featured</span>
                                            </div> --}}
                                            <div class="image">
                                                {{-- <img alt="Carz Choice" src="{{ asset('assets/frontend-assets/images/posting/15.jpg') }}" class="img-responsive"> --}}
                                                <img alt="Carz Choice"
                                                    src="https://imgd.aeplcdn.com/272x153/cw/body/suv.jpg?v=1&q=80"
                                                    class="img-responsive">
                                                <div class="ribbon popular"></div>
                                                {{-- <div class="price-tag">
                                                        <div class="price"><span>$205,000</span></div>
                                                    </div> --}}
                                            </div>
                                            <div class="short-description-1 clearfix">
                                                {{-- <div class="category-title"> 
                                                        <span><a href="#">Sports &
                                                                Equipment</a></span> </div> --}}

                                                <h3>
                                                    <a title="" href="#">
                                                        Top SUVs in India
                                                    </a>
                                                </h3>

                                                <p class="text-muted ps-2">
                                                    Hyundai Creta, Mahindra Scorpio
                                                </p>

                                            </div>
                                        </div>
                                        <!-- Listing Ad Grid -->
                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <div class="grid-style-2">
                                    <!-- Listing Ad Grid -->
                                    <div class="col-md-12 col-xs-12 col-sm-12 px-2">
                                        <div class="category-grid-box-1">
                                            {{-- <div class="featured-ribbon">
                                                <span>Featured</span>
                                            </div> --}}
                                            <div class="image">
                                                {{-- <img alt="Carz Choice" src="{{ asset('assets/frontend-assets/images/posting/15.jpg') }}" class="img-responsive"> --}}
                                                <img alt="Carz Choice"
                                                    src="https://imgd.aeplcdn.com/272x153/cw/body/suv.jpg?v=1&q=80"
                                                    class="img-responsive">
                                                <div class="ribbon popular"></div>
                                                {{-- <div class="price-tag">
                                                        <div class="price"><span>$205,000</span></div>
                                                    </div> --}}
                                            </div>
                                            <div class="short-description-1 clearfix">
                                                {{-- <div class="category-title"> 
                                                        <span><a href="#">Sports &
                                                                Equipment</a></span> </div> --}}

                                                <h3>
                                                    <a title="" href="#">
                                                        Top SUVs in India
                                                    </a>
                                                </h3>

                                                <p class="text-muted ps-2">
                                                    Hyundai Creta, Mahindra Scorpio
                                                </p>

                                            </div>
                                        </div>
                                        <!-- Listing Ad Grid -->
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- Middle Content Box End -->

                <!-- Row End -->
            </div>
            <!-- Main Container End -->
        </div>
    </section>
    <!-- =-=-=-=-=-=-= Top Cars In India End =-=-=-=-=-=-= -->

    <!-- =-=-=-=-=-=-= Compare Cars =-=-=-=-=-=-= -->
    <section class="custom-padding ">
        <!-- Main Container -->
        <div class="container">
            <!-- Row -->
            <div class="row">
                <!-- Heading Area -->
                <div class="heading-panel">
                    <div class="col-xs-12 col-md-12 col-sm-12 left-side">
                        <!-- Main Title -->
                        <h1>Compare <span class="heading-color"> Cars</span> </h1>
                    </div>
                </div>



                <!-- Middle Content Box -->
                <div class="col-md-12 col-xs-12 col-sm-12">
                    <div class="row">
                        <div class=" comapare-slider container owl-carousel owl-theme">
                            <div class="item">
                                <div class="grid-style-2">

                                    <div class="col-md-12 col-xs-12 col-sm-12">
                                        <div class="comparison-box">
                                            <div class="col-md-6 col-sm-6 col-xs-6">
                                                <div class="compare-grid">
                                                    <a href="#" class="">
                                                        <img src="https://imgd.aeplcdn.com/227x128/n/cw/ec/156405/xuv-3xo-exterior-right-front-three-quarter-33.jpeg?isig=0&q=80"
                                                            alt="" class="img-responsive">
                                                    </a>
                                                    <div>
                                                        <div class="text-muted">Mahindra </div>
                                                        <div class=""><a href="#">XUV 3XO</a></div>
                                                        <span class="ad-price">Rs. 110,000
                                                            <span class="text-muted ps-2">onwards</span>
                                                        </span>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="vsbox">vs</div>
                                            <div class="col-md-6 col-sm-6 col-xs-6">
                                                <div class="compare-grid">
                                                    <a href="#" class="">
                                                        <img src="https://imgd.aeplcdn.com/227x128/n/cw/ec/141867/nexon-exterior-right-front-three-quarter-71.jpeg?isig=0&q=80"
                                                            alt="" class="img-responsive">
                                                    </a>
                                                    <div>
                                                        <div class="text-muted">Tata </div>
                                                        <div class=""><a href="#">Nexon</a></div>
                                                        <span class="ad-price">Rs. 110,000
                                                            <span class="text-muted ps-2">onwards</span>
                                                        </span>
                                                    </div>

                                                </div>
                                            </div>
                                            <a href="#">
                                                <button
                                                    class="btn btn-outline btn-danger btn-lg btn-block margin-bottom-10">Compare
                                                    Now</button>
                                            </a>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <div class="grid-style-2">

                                    <div class="col-md-12 col-xs-12 col-sm-12">
                                        <div class="comparison-box">
                                            <div class="col-md-6 col-sm-6 col-xs-6">
                                                <div class="compare-grid">
                                                    <a href="#" class="">
                                                        <img src="https://imgd.aeplcdn.com/227x128/n/cw/ec/156405/xuv-3xo-exterior-right-front-three-quarter-33.jpeg?isig=0&q=80"
                                                            alt="" class="img-responsive">
                                                    </a>
                                                    <div>
                                                        <div class="text-muted">Mahindra </div>
                                                        <div class=""><a href="#">XUV 3XO</a></div>
                                                        <span class="ad-price">Rs. 110,000
                                                            <span class="text-muted ps-2">onwards</span>
                                                        </span>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="vsbox">vs</div>
                                            <div class="col-md-6 col-sm-6 col-xs-6">
                                                <div class="compare-grid">
                                                    <a href="#" class="">
                                                        <img src="https://imgd.aeplcdn.com/227x128/n/cw/ec/141867/nexon-exterior-right-front-three-quarter-71.jpeg?isig=0&q=80"
                                                            alt="" class="img-responsive">
                                                    </a>
                                                    <div>
                                                        <div class="text-muted">Tata </div>
                                                        <div class=""><a href="#">Nexon</a></div>
                                                        <span class="ad-price">Rs. 110,000
                                                            <span class="text-muted ps-2">onwards</span>
                                                        </span>
                                                    </div>

                                                </div>
                                            </div>
                                            <a href="#">
                                                <button
                                                    class="btn btn-outline btn-danger btn-lg btn-block margin-bottom-10">Compare
                                                    Now</button>
                                            </a>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <div class="grid-style-2">

                                    <div class="col-md-12 col-xs-12 col-sm-12">
                                        <div class="comparison-box">
                                            <div class="col-md-6 col-sm-6 col-xs-6">
                                                <div class="compare-grid">
                                                    <a href="#" class="">
                                                        <img src="https://imgd.aeplcdn.com/227x128/n/cw/ec/156405/xuv-3xo-exterior-right-front-three-quarter-33.jpeg?isig=0&q=80"
                                                            alt="" class="img-responsive">
                                                    </a>
                                                    <div>
                                                        <div class="text-muted">Mahindra </div>
                                                        <div class=""><a href="#">XUV 3XO</a></div>
                                                        <span class="ad-price">Rs. 110,000
                                                            <span class="text-muted ps-2">onwards</span>
                                                        </span>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="vsbox">vs</div>
                                            <div class="col-md-6 col-sm-6 col-xs-6">
                                                <div class="compare-grid">
                                                    <a href="#" class="">
                                                        <img src="https://imgd.aeplcdn.com/227x128/n/cw/ec/141867/nexon-exterior-right-front-three-quarter-71.jpeg?isig=0&q=80"
                                                            alt="" class="img-responsive">
                                                    </a>
                                                    <div>
                                                        <div class="text-muted">Tata </div>
                                                        <div class=""><a href="#">Nexon</a></div>
                                                        <span class="ad-price">Rs. 110,000
                                                            <span class="text-muted ps-2">onwards</span>
                                                        </span>
                                                    </div>

                                                </div>
                                            </div>
                                            <a href="#">
                                                <button
                                                    class="btn btn-outline btn-danger btn-lg btn-block margin-bottom-10">Compare
                                                    Now</button>
                                            </a>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="/compareresult" class=" margin-bottom-10">
                            Compare Cars of Your Choice >
                        </a>
                    </div>
                </div>
                <!-- Middle Content Box End -->

                <!-- Row End -->
            </div>
            <!-- Main Container End -->
        </div>
    </section>
    <!-- =-=-=-=-=-=-= Compare Cars End =-=-=-=-=-=-= -->


    <!-- =-=-=-=-=-=-= New Car FAQs  =-=-=-=-=-=-= -->
    <section class="custom-padding used-cars">
        <!-- Main Container -->
        <div class="container popular-cars">
            <!-- Row -->
            <div class="row">
                <!-- Heading Area -->
                <div class="heading-panel">
                    <div class="col-xs-12 col-md-12 col-sm-12 left-side">
                        <!-- Main Title -->
                        <h1>New Car  <span class="heading-color">FAQs</span> </h1>
                    </div>
                </div>



                <!-- Middle Content Box -->
                <div class="col-md-12 col-xs-12 col-sm-12">
                    <div class="row">

                        <ul class="accordion">
                            <li>
                               <h3 class="accordion-title"><a href="#">Q: Which are the popular new cars available in India in 2024?</a></h3>
                               <div class="accordion-content">
                                  <p>Top 3 popular new cars available in India in 2024 are Mahindra XUV 3XO, Toyota Urban Cruiser Taisor and Maruti Suzuki Fronx. Check out all popular models.</p>
                               </div>
                            </li>
                            <li>
                               <h3 class="accordion-title"><a href="#">Q: Which are popular cars brands in India?</a></h3>
                               <div class="accordion-content">
                                  <p>Top 3 popular car brands in India are Mahindra, Toyota and Maruti Suzuki.</p>
                               </div>
                            </li>
                            <li>
                               <h3 class="accordion-title"><a href="#">Q: Are there any upcoming cars in India?</a></h3>
                               <div class="accordion-content">
                                  <p>Yes. There are upcoming cars in India. Top 3 upcoming cars which are going to launch soon in India are: Maruti Suzuki New Dzire, Mahindra Five-door Thar and MG Cloud EV. Check out all upcoming cars.</p>
                               </div>
                            </li>
                            
                        </ul>
                        
                    </div>
                </div>
                <!-- Middle Content Box End -->

                <!-- Row End -->
            </div>
            <!-- Main Container End -->
        </div>
    </section>
    <!-- =-=-=-=-=-=-= New Car FAQs End =-=-=-=-=-=-= -->

    <!-- Main Content Area End -->
</div>


@endsection
