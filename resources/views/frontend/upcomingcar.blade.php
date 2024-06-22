@extends('frontend.layouts.website')
@section('content')
@section('title', 'Upcoming Car ')


<!-- =-=-=-=-=-=-= Breadcrumb =-=-=-=-=-=-= -->
<div class="page-header-area-2 gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="small-breadcrumb">
                    {{-- <div class=" breadcrumb-link">
                   <ul>
                      <li><a href="index-2.html">Home Page</a></li>
                      <li><a class="active" href="#">Listing</a></li>
                   </ul>
                </div> --}}
                    <div class="header-page">
                        <h1>Upcoming Cars</h1>
                        <p>More than 75 upcoming cars that will launch in India are covered here. All these new upcoming
                            cars are listed with their expected launch date and estimated launch price. The popular
                            upcoming car is Kia Carnival whereas the most recent upcoming electric car is Tata Harrier
                            EV.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- =-=-=-=-=-=-= Breadcrumb End =-=-=-=-=-=-= -->

<!-- =-=-=-=-=-=-= Latest Ads =-=-=-=-=-=-= -->
<section class="section-padding no-top gray">
    <!-- Main Container -->
    <div class="container">
        <!-- Row -->
        <div class="row">
            <!-- Middle Content Area -->
            <div class="col-md-8 col-md-push-4 col-lg-8 col-sx-12">
                <!-- Row -->
                <div class="row">
                    <!-- Sorting Filters -->
                    <div class="clearfix"></div>
                    <div class="col-md-12 col-xs-12 col-sm-12 col-lg-12">
                        <div class="clearfix"></div>
                        <div class="listingTopFilterBar">
                            <div class="col-md-7 col-xs-12 col-sm-7 no-padding">
                                <ul class="filterAdType">
                                    <li class="active"><a href="#">All ads <small>(1)</small></a> </li>
                                    <li class=""><a href="#">Featured <small>(35)</small></a> </li>
                                </ul>
                            </div>
                            <div class="col-md-5 col-xs-12 col-sm-5 no-padding">
                                <div class="header-listing">
                                    <h6>Sort by :</h6>
                                    <div class="custom-select-box">
                                        <select name="order" class="custom-select">
                                            <option value="0">Most popular</option>
                                            <option value="1">The latest</option>
                                            <option value="2">The best rating</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Sorting Filters End-->
                    <div class="clearfix"></div>
                    <!-- Ads Archive -->
                    <div class="col-md-12 col-xs-12 col-xs-12">
                        <div class="posts-masonry">
                            <div class="ads-list-archive">
                                <!-- Image Block -->
                                <div class="col-lg-5 col-md-5 col-sm-5 no-padding">
                                    <!-- Img Block -->
                                    <div class="ad-archive-img">
                                        <a href="#">
                                            <img class="img-responsive" src="images/posting/10.jpg" alt="">
                                        </a>
                                    </div>
                                    <!-- Img Block -->
                                </div>
                                <!-- Ads Listing -->
                                <div class="clearfix visible-xs-block"></div>
                                <!-- Content Block -->
                                <div class="col-lg-7 col-md-7 col-sm-7 no-padding">
                                    <!-- Ad Desc -->
                                    <div class="ad-archive-desc">
                                        <!-- Price -->
                                        <img alt="" class="pull-right" src="images/certified.png">
                                        <!-- Title -->
                                        <h3>2014 Honda Accord VTi-S Auto </h3>
                                        <!-- Category -->
                                        <div class="category-title"> <span><a href="#">Car &amp; Bikes</a></span>
                                        </div>
                                        <!-- Short Description -->
                                        <div class="clearfix visible-xs-block"></div>
                                        <p class="hidden-sm">Lorem ipsum dolor sit amet, quem convenire interesset ut
                                            vix, maiestatis inciderint no, eos in elit dicat.....</p>
                                        <!-- Ad Features -->
                                        <ul class="short-meta list-inline">
                                            <li><a href="#">Petrol</a></li>
                                            <li><a href="#">32,190 KMs</a></li>
                                            <li><a href="#">Manual </a></li>
                                            <li><a href="#">Uk London</a></li>
                                        </ul>
                                        <!-- Ad History -->
                                        <div class="ad-price-simple">$38,000</div>
                                        <div class="clearfix archive-history">
                                            <div class="last-updated">Last Updated: 1 day ago</div>
                                            <div class="ad-meta"> <a class="btn save-ad"><i class="fa fa-heart-o"></i>
                                                    Save Ad.</a> <a class="btn btn-success"><i class="fa fa-phone"></i>
                                                    View Details.</a> </div>
                                        </div>
                                    </div>
                                    <!-- Ad Desc End -->
                                </div>
                                <!-- Content Block End -->
                            </div>
                            <div class="ads-list-archive">
                                <!-- Image Block -->
                                <div class="col-lg-5 col-md-5 col-sm-5 no-padding">
                                    <!-- Img Block -->
                                    <div class="ad-archive-img">
                                        <a href="#">
                                            <img class="img-responsive" src="images/posting/2.jpg" alt="">
                                        </a>
                                    </div>
                                    <!-- Img Block -->
                                </div>
                                <!-- Ads Listing -->
                                <div class="clearfix visible-xs-block"></div>
                                <!-- Content Block -->
                                <div class="col-lg-7 col-md-7 col-sm-7 no-padding">
                                    <!-- Ad Desc -->
                                    <div class="ad-archive-desc">
                                        <!-- Price -->
                                        <img alt="" class="pull-right" src="images/certified.png">
                                        <!-- Title -->
                                        <h3>Porsche 911 Carrera 2017 </h3>
                                        <!-- Category -->
                                        <div class="category-title"> <span><a href="#">Car &amp; Bikes</a></span>
                                        </div>
                                        <!-- Short Description -->
                                        <div class="clearfix visible-xs-block"></div>
                                        <p class="hidden-sm">Lorem ipsum dolor sit amet, quem convenire interesset ut
                                            vix, maiestatis inciderint no, eos in elit dicat.....</p>
                                        <!-- Ad Features -->
                                        <ul class="short-meta list-inline">
                                            <li><a href="#">Petrol</a></li>
                                            <li><a href="#">32,190 KMs</a></li>
                                            <li><a href="#">Manual </a></li>
                                            <li><a href="#">Uk London</a></li>
                                        </ul>
                                        <!-- Ad History -->
                                        <div class="ad-price-simple">$77,000</div>
                                        <div class="clearfix archive-history">
                                            <div class="last-updated">Last Updated: 1 day ago</div>
                                            <div class="ad-meta"> <a class="btn save-ad"><i class="fa fa-heart-o"></i>
                                                    Save Ad.</a> <a class="btn btn-success"><i class="fa fa-phone"></i>
                                                    View Details.</a> </div>
                                        </div>
                                    </div>
                                    <!-- Ad Desc End -->
                                </div>
                                <!-- Content Block End -->
                            </div>
                            <div class="ads-list-archive">
                                <!-- Image Block -->
                                <div class="col-lg-5 col-md-5 col-sm-5 no-padding">
                                    <!-- Img Block -->
                                    <div class="ad-archive-img">
                                        <a href="#">
                                            <img class="img-responsive" src="images/posting/3.jpg" alt="">
                                        </a>
                                    </div>
                                    <!-- Img Block -->
                                </div>
                                <!-- Ads Listing -->
                                <div class="clearfix visible-xs-block"></div>
                                <!-- Content Block -->
                                <div class="col-lg-7 col-md-7 col-sm-7 no-padding">
                                    <!-- Ad Desc -->
                                    <div class="ad-archive-desc">
                                        <!-- Title -->
                                        <h3>2014 Ford Shelby GT500 Coupe </h3>
                                        <!-- Category -->
                                        <div class="category-title"> <span><a href="#">Car &amp;
                                                    Bikes</a></span> </div>
                                        <!-- Short Description -->
                                        <div class="clearfix visible-xs-block"></div>
                                        <p class="hidden-sm">Lorem ipsum dolor sit amet, quem convenire interesset ut
                                            vix, maiestatis inciderint no, eos in elit dicat.....</p>
                                        <!-- Ad Features -->
                                        <ul class="short-meta list-inline">
                                            <li><a href="#">Petrol</a></li>
                                            <li><a href="#">32,190 KMs</a></li>
                                            <li><a href="#">Manual </a></li>
                                            <li><a href="#">Uk London</a></li>
                                        </ul>
                                        <!-- Ad History -->
                                        <div class="ad-price-simple">$66,000</div>
                                        <div class="clearfix archive-history">
                                            <div class="last-updated">Last Updated: 1 day ago</div>
                                            <div class="ad-meta"> <a class="btn save-ad"><i
                                                        class="fa fa-heart-o"></i> Save Ad.</a> <a
                                                    class="btn btn-success"><i class="fa fa-phone"></i> View
                                                    Details.</a> </div>
                                        </div>
                                    </div>
                                    <!-- Ad Desc End -->
                                </div>
                                <!-- Content Block End -->
                            </div>
                            <div class="ads-list-archive">
                                <!-- Image Block -->
                                <div class="col-lg-5 col-md-5 col-sm-5 no-padding">
                                    <!-- Img Block -->
                                    <div class="ad-archive-img">
                                        <a href="#">
                                            <img class="img-responsive" src="images/posting/4.jpg" alt="">
                                        </a>
                                    </div>
                                    <!-- Img Block -->
                                </div>
                                <!-- Ads Listing -->
                                <div class="clearfix visible-xs-block"></div>
                                <!-- Content Block -->
                                <div class="col-lg-7 col-md-7 col-sm-7 no-padding">
                                    <!-- Ad Desc -->
                                    <div class="ad-archive-desc">
                                        <!-- Price -->
                                        <img alt="" class="pull-right" src="images/certified.png">
                                        <!-- Title -->
                                        <h3>2016 BMW 3 Series 328i </h3>
                                        <!-- Category -->
                                        <div class="category-title"> <span><a href="#">Car &amp;
                                                    Bikes</a></span> </div>
                                        <!-- Short Description -->
                                        <div class="clearfix visible-xs-block"></div>
                                        <p class="hidden-sm">Lorem ipsum dolor sit amet, quem convenire interesset ut
                                            vix, maiestatis inciderint no, eos in elit dicat.....</p>
                                        <!-- Ad Features -->
                                        <ul class="short-meta list-inline">
                                            <li><a href="#">Petrol</a></li>
                                            <li><a href="#">32,190 KMs</a></li>
                                            <li><a href="#">Manual </a></li>
                                            <li><a href="#">Uk London</a></li>
                                        </ul>
                                        <!-- Ad History -->
                                        <div class="ad-price-simple">$110,000</div>
                                        <div class="clearfix archive-history">
                                            <div class="last-updated">Last Updated: 1 day ago</div>
                                            <div class="ad-meta"> <a class="btn save-ad"><i
                                                        class="fa fa-heart-o"></i> Save Ad.</a> <a
                                                    class="btn btn-success"><i class="fa fa-phone"></i> View
                                                    Details.</a> </div>
                                        </div>
                                    </div>
                                    <!-- Ad Desc End -->
                                </div>
                                <!-- Content Block End -->
                            </div>
                            <div class="ads-list-archive">
                                <!-- Image Block -->
                                <div class="col-lg-5 col-md-5 col-sm-5 no-padding">
                                    <!-- Img Block -->
                                    <div class="ad-archive-img">
                                        <a href="#">
                                            <img class="img-responsive" src="images/posting/5.jpg" alt="">
                                        </a>
                                    </div>
                                    <!-- Img Block -->
                                </div>
                                <!-- Ads Listing -->
                                <div class="clearfix visible-xs-block"></div>
                                <!-- Content Block -->
                                <div class="col-lg-7 col-md-7 col-sm-7 no-padding">
                                    <!-- Ad Desc -->
                                    <div class="ad-archive-desc">
                                        <!-- Price -->
                                        <img alt="" class="pull-right" src="images/certified.png">
                                        <!-- Title -->
                                        <h3>Honda Civic 2017 Sports Edition </h3>
                                        <!-- Category -->
                                        <div class="category-title"> <span><a href="#">Car &amp;
                                                    Bikes</a></span> </div>
                                        <!-- Short Description -->
                                        <div class="clearfix visible-xs-block"></div>
                                        <p class="hidden-sm">Lorem ipsum dolor sit amet, quem convenire interesset ut
                                            vix, maiestatis inciderint no, eos in elit dicat.....</p>
                                        <!-- Ad Features -->
                                        <ul class="short-meta list-inline">
                                            <li><a href="#">Petrol</a></li>
                                            <li><a href="#">32,190 KMs</a></li>
                                            <li><a href="#">Manual </a></li>
                                            <li><a href="#">Uk London</a></li>
                                        </ul>
                                        <!-- Ad History -->
                                        <div class="ad-price-simple">$11,000</div>
                                        <div class="clearfix archive-history">
                                            <div class="last-updated">Last Updated: 1 day ago</div>
                                            <div class="ad-meta"> <a class="btn save-ad"><i
                                                        class="fa fa-heart-o"></i> Save Ad.</a> <a
                                                    class="btn btn-success"><i class="fa fa-phone"></i> View
                                                    Details.</a> </div>
                                        </div>
                                    </div>
                                    <!-- Ad Desc End -->
                                </div>
                                <!-- Content Block End -->
                            </div>
                            <div class="ads-list-archive">
                                <!-- Image Block -->
                                <div class="col-lg-5 col-md-5 col-sm-5 no-padding">
                                    <!-- Img Block -->
                                    <div class="ad-archive-img">
                                        <a href="#">
                                            <img class="img-responsive" src="images/posting/6.jpg" alt="">
                                        </a>
                                    </div>
                                    <!-- Img Block -->
                                </div>
                                <!-- Ads Listing -->
                                <div class="clearfix visible-xs-block"></div>
                                <!-- Content Block -->
                                <div class="col-lg-7 col-md-7 col-sm-7 no-padding">
                                    <!-- Ad Desc -->
                                    <div class="ad-archive-desc">
                                        <!-- Price -->
                                        <img alt="" class="pull-right" src="images/certified.png">
                                        <!-- Title -->
                                        <h3>2013 BMW M3 GTR </h3>
                                        <!-- Category -->
                                        <div class="category-title"> <span><a href="#">Car &amp;
                                                    Bikes</a></span> </div>
                                        <!-- Short Description -->
                                        <div class="clearfix visible-xs-block"></div>
                                        <p class="hidden-sm">Lorem ipsum dolor sit amet, quem convenire interesset ut
                                            vix, maiestatis inciderint no, eos in elit dicat.....</p>
                                        <!-- Ad Features -->
                                        <ul class="short-meta list-inline">
                                            <li><a href="#">Petrol</a></li>
                                            <li><a href="#">32,190 KMs</a></li>
                                            <li><a href="#">Manual </a></li>
                                            <li><a href="#">Uk London</a></li>
                                        </ul>
                                        <!-- Ad History -->
                                        <div class="ad-price-simple">$38,000</div>
                                        <div class="clearfix archive-history">
                                            <div class="last-updated">Last Updated: 1 day ago</div>
                                            <div class="ad-meta"> <a class="btn save-ad"><i
                                                        class="fa fa-heart-o"></i> Save Ad.</a> <a
                                                    class="btn btn-success"><i class="fa fa-phone"></i> View
                                                    Details.</a> </div>
                                        </div>
                                    </div>
                                    <!-- Ad Desc End -->
                                </div>
                                <!-- Content Block End -->
                            </div>
                        </div>
                        <!-- Ads Archive End -->
                    </div>
                    <div class="clearfix"></div>
                    <!-- Pagination -->
                    <div class="text-center margin-top-30">
                        <ul class="pagination ">
                            <li><a href="#"><i class="fa fa-chevron-left"></i></a></li>
                            <li><a href="#">1</a></li>
                            <li class="active"><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#"><i class="fa fa-chevron-right"></i></a></li>
                        </ul>
                    </div>
                    <!-- Pagination End -->
                </div>
                <!-- Row End -->
            </div>
            <!-- Middle Content Area  End -->
            <!-- Left Sidebar -->
            <div class="col-md-4 col-md-pull-8 col-sx-12">
                <!-- Sidebar Widgets -->
                <div class="sidebar">
                    <!-- Panel group -->
                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                        <!-- Brands Panel -->
                        <div class="panel panel-default">
                            <!-- Heading -->
                            <div class="panel-heading" role="tab" id="headingTwo">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse"
                                        data-parent="#accordion" href="#collapseTwo" aria-expanded="false"
                                        aria-controls="collapseTwo">
                                        <i class="more-less glyphicon glyphicon-plus"></i>
                                        Brands
                                    </a>
                                </h4>
                            </div>
                            <!-- Content -->
                            <div id="collapseTwo" class="panel-collapse collapse in" role="tabpanel"
                                aria-labelledby="headingTwo">
                                <div class="panel-body">
                                    <!-- Search -->
                                    <div class="search-widget">
                                        <input placeholder="Search by Car Name" type="text">
                                        <button type="submit"><i class="fa fa-search"></i></button>
                                    </div>
                                    <!-- Brands List -->
                                    <div class="skin-minimal">
                                        <ul class="list">
                                            <li>
                                                <input type="checkbox" id="minimal-checkbox-1">
                                                <label for="minimal-checkbox-1">All Brands</label>
                                            </li>
                                            <li>
                                                <input type="checkbox" id="minimal-checkbox-2">
                                                <label for="minimal-checkbox-2">Audi </label>
                                            </li>
                                            <li>
                                                <input type="checkbox" id="minimal-checkbox-3">
                                                <label for="minimal-checkbox-3">BMW </label>
                                            </li>
                                            <li>
                                                <input type="checkbox" id="minimal-checkbox-4">
                                                <label for="minimal-checkbox-4">Mercedes </label>
                                            </li>
                                            <li>
                                                <input type="checkbox" id="minimal-checkbox-5">
                                                <label for="minimal-checkbox-5">Lamborghini </label>
                                            </li>
                                            <li>
                                                <input type="checkbox" id="minimal-checkbox-6">
                                                <label for="minimal-checkbox-6">Honda</label>
                                            </li>
                                            <li>
                                                <input type="checkbox" id="minimal-checkbox-7">
                                                <label for="minimal-checkbox-7">Bugatti </label>
                                            </li>
                                            <li>
                                                <input type="checkbox" id="minimal-checkbox-8">
                                                <label for="minimal-checkbox-8">Acura </label>
                                            </li>
                                        </ul>
                                        <a href=".html" data-toggle="modal" class="pull-right"><strong>View
                                                All</strong></a>
                                    </div>
                                    <!-- Brands List End -->
                                </div>
                            </div>
                        </div>
                        <!-- Brands Panel End -->
                        <!-- Condition Panel -->
                        <div class="panel panel-default">
                            <!-- Heading -->
                            <div class="panel-heading" role="tab" id="heading9">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse"
                                        data-parent="#accordion" href="#collapse9" aria-expanded="false"
                                        aria-controls="collapse9">
                                        <i class="more-less glyphicon glyphicon-plus"></i>
                                        Transmission
                                    </a>
                                </h4>
                            </div>
                            <!-- Content -->
                            <div id="collapse9" class="panel-collapse collapse" role="tabpanel"
                                aria-labelledby="heading9">
                                <div class="panel-body">
                                    <div class="skin-minimal">
                                        <ul class="list">
                                            <li>
                                                <input tabindex="7" type="radio" id="automatic"
                                                    name="minimal-radio">
                                                <label for="automatic">Automatic</label>
                                            </li>
                                            <li>
                                                <input tabindex="8" type="radio" id="manual"
                                                    name="minimal-radio" checked>
                                                <label for="manual">Manual</label>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Condition Panel End -->
                        <!-- Condition Panel -->
                        <div class="panel panel-default">
                            <!-- Heading -->
                            <div class="panel-heading" role="tab" id="headingThree">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse"
                                        data-parent="#accordion" href="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">
                                        <i class="more-less glyphicon glyphicon-plus"></i>
                                        Condition
                                    </a>
                                </h4>
                            </div>
                            <!-- Content -->
                            <div id="collapseThree" class="panel-collapse collapse" role="tabpanel"
                                aria-labelledby="headingThree">
                                <div class="panel-body">
                                    <div class="skin-minimal">
                                        <ul class="list">
                                            <li>
                                                <input tabindex="7" type="radio" id="minimal-radio-1"
                                                    name="minimal-radio">
                                                <label for="minimal-radio-1">New</label>
                                            </li>
                                            <li>
                                                <input tabindex="8" type="radio" id="minimal-radio-2"
                                                    name="minimal-radio" checked>
                                                <label for="minimal-radio-2">Used</label>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Condition Panel End -->
                        <!-- Body Type Panel -->
                        <div class="panel panel-default">
                            <!-- Heading -->
                            <div class="panel-heading" role="tab" id="heading7">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse"
                                        data-parent="#accordion" href="#collapse7" aria-expanded="false"
                                        aria-controls="collapse7">
                                        <i class="more-less glyphicon glyphicon-plus"></i>
                                        Body Type
                                    </a>
                                </h4>
                            </div>
                            <!-- Content -->
                            <div id="collapse7" class="panel-collapse collapse" role="tabpanel"
                                aria-labelledby="heading7">
                                <div class="panel-body">
                                    <div class="skin-minimal">
                                        <ul class="list">
                                            <li>
                                                <input type="radio" id="c1" name="minimal-radio">
                                                <label for="c1">Sedan </label>
                                            </li>
                                            <li>
                                                <input type="radio" id="c2" name="minimal-radio">
                                                <label for="c2">SUV</label>
                                            </li>
                                            <li>
                                                <input type="radio" id="c3" name="minimal-radio">
                                                <label for="c3">Crossover</label>
                                            </li>
                                            <li>
                                                <input type="radio" id="c4" name="minimal-radio">
                                                <label for="c4">Luxury</label>
                                            </li>
                                            <li>
                                                <input type="radio" id="c5" name="minimal-radio">
                                                <label for="c5">Truck</label>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Condition Panel End -->
                        <!-- Pricing Panel -->
                        <div class="panel panel-default">
                            <!-- Heading -->
                            <div class="panel-heading" role="tab" id="headingfour">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse"
                                        data-parent="#accordion" href="#collapsefour" aria-expanded="false"
                                        aria-controls="collapsefour">
                                        <i class="more-less glyphicon glyphicon-plus"></i>
                                        Price
                                    </a>
                                </h4>
                            </div>
                            <!-- Content -->
                            <div id="collapsefour" class="panel-collapse collapse" role="tabpanel"
                                aria-labelledby="headingfour">
                                <div class="panel-body">
                                    <span class="price-slider-value">Price ($) <span id="price-min"></span> - <span
                                            id="price-max"></span></span>
                                    <div id="price-slider"></div>
                                    <a class="btn btn-theme btn-sm margin-top-20">Search</a>
                                </div>
                            </div>
                        </div>
                        <!-- Pricing Panel End -->
                        <!-- Year Panel -->
                        <div class="panel panel-default">
                            <!-- Heading -->
                            <div class="panel-heading" role="tab" id="heading8">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse"
                                        data-parent="#accordion" href="#collapse8" aria-expanded="false"
                                        aria-controls="collapse8">
                                        <i class="more-less glyphicon glyphicon-plus"></i>
                                        Select Year
                                    </a>
                                </h4>
                            </div>
                            <!-- Content -->
                            <div id="collapse8" class="panel-collapse collapse" role="tabpanel"
                                aria-labelledby="heading8">
                                <div class="panel-body">
                                    <!-- Year List -->
                                    <div class="skin-minimal">
                                        <ul class="list">
                                            <li>
                                                <input type="checkbox" id="y1">
                                                <label for="y1">2017 </label>
                                            </li>
                                            <li>
                                                <input type="checkbox" id="y2">
                                                <label for="y2">2016 </label>
                                            </li>
                                            <li>
                                                <input type="checkbox" id="y3">
                                                <label for="y3">2015 </label>
                                            </li>
                                            <li>
                                                <input type="checkbox" id="y4">
                                                <label for="y4">2014 </label>
                                            </li>
                                            <li>
                                                <input type="checkbox" id="y5">
                                                <label for="y5">2013</label>
                                            </li>
                                            <li>
                                                <input type="checkbox" id="y6">
                                                <label for="y6">2012 </label>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- Year List End -->
                                </div>
                            </div>
                        </div>
                        <!-- Year Panel End -->
                        <!-- Latest Ads Panel -->
                        <div class="panel panel-default">
                            <!-- Heading -->
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a>
                                        Recent Ads
                                    </a>
                                </h4>
                            </div>
                            <!-- Content -->
                            <div class="panel-collapse">
                                <div class="panel-body recent-ads">
                                    <!-- Ads -->
                                    <div class="recent-ads-list">
                                        <div class="recent-ads-container">
                                            <div class="recent-ads-list-image">
                                                <a href="#" class="recent-ads-list-image-inner">
                                                    <img src="images/posting/thumb-1.jpg" alt="">
                                                </a><!-- /.recent-ads-list-image-inner -->
                                            </div>
                                            <!-- /.recent-ads-list-image -->
                                            <div class="recent-ads-list-content">
                                                <h3 class="recent-ads-list-title">
                                                    <a href="#">Audi Q5 2.0T quattro Premium </a>
                                                </h3>
                                                <ul class="recent-ads-list-location">
                                                    <li><a href="#">New York</a>,</li>
                                                    <li><a href="#">Brooklyn</a></li>
                                                </ul>
                                                <div class="recent-ads-list-price">
                                                    $ 17,000
                                                </div>
                                                <!-- /.recent-ads-list-price -->
                                            </div>
                                            <!-- /.recent-ads-list-content -->
                                        </div>
                                        <!-- /.recent-ads-container -->
                                    </div>
                                    <!-- Ads -->
                                    <div class="recent-ads-list">
                                        <div class="recent-ads-container">
                                            <div class="recent-ads-list-image">
                                                <a href="#" class="recent-ads-list-image-inner">
                                                    <img src="images/posting/thumb-2.jpg" alt="">
                                                </a><!-- /.recent-ads-list-image-inner -->
                                            </div>
                                            <!-- /.recent-ads-list-image -->
                                            <div class="recent-ads-list-content">
                                                <h3 class="recent-ads-list-title">
                                                    <a href="#">Honda Civic 2017 Sports Edition</a>
                                                </h3>
                                                <ul class="recent-ads-list-location">
                                                    <li><a href="#">New York</a>,</li>
                                                    <li><a href="#">Brooklyn</a></li>
                                                </ul>
                                                <div class="recent-ads-list-price">
                                                    $ 66,000
                                                </div>
                                                <!-- /.recent-ads-list-price -->
                                            </div>
                                            <!-- /.recent-ads-list-content -->
                                        </div>
                                        <!-- /.recent-ads-container -->
                                    </div>
                                    <!-- Ads -->
                                    <div class="recent-ads-list">
                                        <div class="recent-ads-container">
                                            <div class="recent-ads-list-image">
                                                <a href="#" class="recent-ads-list-image-inner">
                                                    <img src="images/posting/thumb-3.jpg" alt="">
                                                </a><!-- /.recent-ads-list-image-inner -->
                                            </div>
                                            <!-- /.recent-ads-list-image -->
                                            <div class="recent-ads-list-content">
                                                <h3 class="recent-ads-list-title">
                                                    <a href="#">2014 Ford Shelby GT500 Coupe</a>
                                                </h3>
                                                <ul class="recent-ads-list-location">
                                                    <li><a href="#">New York</a>,</li>
                                                    <li><a href="#">Brooklyn</a></li>
                                                </ul>
                                                <div class="recent-ads-list-price">
                                                    $ 37,000
                                                </div>
                                                <!-- /.recent-ads-list-price -->
                                            </div>
                                            <!-- /.recent-ads-list-content -->
                                        </div>
                                        <!-- /.recent-ads-container -->
                                    </div>
                                    <!-- Ads -->
                                    <div class="recent-ads-list">
                                        <div class="recent-ads-container">
                                            <div class="recent-ads-list-image">
                                                <a href="#" class="recent-ads-list-image-inner">
                                                    <img src="images/posting/thumb-4.jpg" alt="">
                                                </a><!-- /.recent-ads-list-image-inner -->
                                            </div>
                                            <!-- /.recent-ads-list-image -->
                                            <div class="recent-ads-list-content">
                                                <h3 class="recent-ads-list-title">
                                                    <a href="#">Lamborghini Gallardo 5.0 V10 2dr</a>
                                                </h3>
                                                <ul class="recent-ads-list-location">
                                                    <li><a href="#">New York</a>,</li>
                                                    <li><a href="#">Brooklyn</a></li>
                                                </ul>
                                                <div class="recent-ads-list-price">
                                                    $ 11,000
                                                </div>
                                                <!-- /.recent-ads-list-price -->
                                            </div>
                                            <!-- /.recent-ads-list-content -->
                                        </div>
                                        <!-- /.recent-ads-container -->
                                    </div>
                                    <!-- Ads -->
                                    <div class="recent-ads-list">
                                        <div class="recent-ads-container">
                                            <div class="recent-ads-list-image">
                                                <a href="#" class="recent-ads-list-image-inner">
                                                    <img src="images/posting/thumb-5.jpg" alt="">
                                                </a><!-- /.recent-ads-list-image-inner -->
                                            </div>
                                            <!-- /.recent-ads-list-image -->
                                            <div class="recent-ads-list-content">
                                                <h3 class="recent-ads-list-title">
                                                    <a href="#">Porsche 911 Carrera 2017 </a>
                                                </h3>
                                                <ul class="recent-ads-list-location">
                                                    <li><a href="#">New York</a>,</li>
                                                    <li><a href="#">Brooklyn</a></li>
                                                </ul>
                                                <div class="recent-ads-list-price">
                                                    $ 20,000
                                                </div>
                                                <!-- /.recent-ads-list-price -->
                                            </div>
                                            <!-- /.recent-ads-list-content -->
                                        </div>
                                        <!-- /.recent-ads-container -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Latest Ads Panel End -->
                    </div>
                    <!-- panel-group end -->
                </div>
                <!-- Sidebar Widgets End -->
            </div>
            <!-- Left Sidebar End -->
        </div>
        <!-- Row End -->
    </div>
    <!-- Main Container End -->
</section>
<!-- =-=-=-=-=-=-= Ads Archives End =-=-=-=-=-=-= -->

@endsection
