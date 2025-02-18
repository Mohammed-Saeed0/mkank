@extends('layouts.front.site')
@section('content')

<div class="page-head">
    <div class="container">
        <div class="row">
            <div class="page-head-content">
                <h1 class="page-title">Super nice villa </h1>
            </div>
        </div>
    </div>
</div>
<!-- End page header -->

<!-- property area -->
<div class="content-area single-property" style="background-color: #FCFCFC;">&nbsp;
    <div class="container">

        <div class="clearfix padding-top-40" >

            <div class="col-md-8 single-property-content prp-style-1 ">
                <div class="row">
                    <div class="light-slide-item">
                        <div class="clearfix">
                            <div class="favorite-and-print">
                                <a class="add-to-fav" href="#login-modal" data-toggle="modal">
                                    <i class="fa fa-star-o"></i>
                                </a>
                                <a class="printer-icon " href="javascript:window.print()">
                                    <i class="fa fa-print"></i>
                                </a>
                            </div>

                            <ul id="image-gallery" class="gallery list-unstyled cS-hidden">
                                <li data-thumb="assets/img/property-1/property1.jpg">
                                    <img src="assets/img/property-1/property1.jpg" />
                                </li>
                                <li data-thumb="assets/img/property-1/property2.jpg">
                                    <img src="assets/img/property-1/property3.jpg" />
                                </li>
                                <li data-thumb="assets/img/property-1/property3.jpg">
                                    <img src="assets/img/property-1/property3.jpg" />
                                </li>
                                <li data-thumb="assets/img/property-1/property4.jpg">
                                    <img src="assets/img/property-1/property4.jpg" />
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="single-property-wrapper">
                    <div class="single-property-header">
                        <h1 class="property-title pull-left">Villa in Coral Gables</h1>
                        <span class="property-price pull-right">$825,000</span>
                    </div>

                    <div class="property-meta entry-meta clearfix ">

                        <div class="col-xs-6 col-sm-3 col-md-3 p-b-15">
                            <span class="property-info-icon icon-tag">
                                <img src="assets/img/icon/sale-orange.png">
                            </span>
                            <span class="property-info-entry">
                                <span class="property-info-label">Status</span>
                                <span class="property-info-value">For Sale</span>
                            </span>
                        </div>

                        <div class="col-xs-6 col-sm-3 col-md-3 p-b-15">
                            <span class="property-info icon-area">
                                <img src="assets/img/icon/room-orange.png">
                            </span>
                            <span class="property-info-entry">
                                <span class="property-info-label">Area</span>
                                <span class="property-info-value">3500<b class="property-info-unit">Sq Ft</b></span>
                            </span>
                        </div>

                        <div class="col-xs-6 col-sm-3 col-md-3 p-b-15">
                            <span class="property-info-icon icon-bed">
                                <img src="assets/img/icon/bed-orange.png">
                            </span>
                            <span class="property-info-entry">
                                <span class="property-info-label">Bedrooms</span>
                                <span class="property-info-value">3</span>
                            </span>
                        </div>

                        <div class="col-xs-6 col-sm-3 col-md-3 p-b-15">
                            <span class="property-info-icon icon-bed">
                                <img src="assets/img/icon/cars-orange.png">
                            </span>
                            <span class="property-info-entry">
                                <span class="property-info-label">Car garages</span>
                                <span class="property-info-value">1</span>
                            </span>
                        </div>

                        <div class="col-xs-6 col-sm-3 col-md-3 p-b-15">
                            <span class="property-info-icon icon-bath">
                                <img src="assets/img/icon/os-orange.png">
                            </span>
                            <span class="property-info-entry">
                                <span class="property-info-label">Bathrooms</span>
                                <span class="property-info-value">3.5</span>
                            </span>
                        </div>

                        <div class="col-xs-6 col-sm-3 col-md-3 p-b-15">
                            <span class="property-info-icon icon-garage">
                                <img src="assets/img/icon/room-orange.png">
                            </span>
                            <span class="property-info-entry">
                                <span class="property-info-label">Garages</span>
                                <span class="property-info-value">2</span>
                            </span>
                        </div>

                        <div class="col-xs-6 col-sm-3 col-md-3 p-b-15">
                            <span class="property-info-icon icon-garage">
                                <img src="assets/img/icon/shawer-orange.png">
                            </span>
                            <span class="property-info-entry">
                                <span class="property-info-label">Garages</span>
                                <span class="property-info-value">2</span>
                            </span>
                        </div>


                    </div>
                    <!-- .property-meta -->

                    <div class="section">
                        <h4 class="s-property-title">Description</h4>
                        <div class="s-property-content">
                            <p>Nulla quis dapibus nisl. Suspendisse ultricies Nulla quis dapibus nisl. Suspendisse ultricies commodo arcu nec pretium. Nullam sed arcu ultricies commodo arcu nec pretium. Nullam sed arcu ultricies Nulla quis dapibus nisl. Suspendisse ultricies commodo arcu nec pretium. Nullam sed arcu ultricies Nulla quis dapibus nisl. Suspendisse ultricies commodo arcu nec pretium. Nullam sed arcu ultricies                                </p>
                        </div>
                    </div>
                    <!-- End description area  -->

                    <div class="section additional-details">

                        <h4 class="s-property-title">Additional Details</h4>

                        <ul class="additional-details-list clearfix">
                            <li>
                                <span class="col-xs-6 col-sm-4 col-md-4 add-d-title">Waterfront</span>
                                <span class="col-xs-6 col-sm-8 col-md-8 add-d-entry">Yes</span>
                            </li>

                            <li>
                                <span class="col-xs-6 col-sm-4 col-md-4 add-d-title">Built In</span>
                                <span class="col-xs-6 col-sm-8 col-md-8 add-d-entry">2003</span>
                            </li>
                            <li>
                                <span class="col-xs-6 col-sm-4 col-md-4 add-d-title">Parking</span>
                                <span class="col-xs-6 col-sm-8 col-md-8 add-d-entry">2 Or More Spaces,Covered Parking,Valet Parking</span>
                            </li>

                            <li>
                                <span class="col-xs-6 col-sm-4 col-md-4 add-d-title">Waterfront</span>
                                <span class="col-xs-6 col-sm-8 col-md-8 add-d-entry">Yes</span>
                            </li>

                            <li>
                                <span class="col-xs-6 col-sm-4 col-md-4 add-d-title">View</span>
                                <span class="col-xs-6 col-sm-8 col-md-8 add-d-entry">Intracoastal View,Direct ew</span>
                            </li>

                            <li>
                                <span class="col-xs-6 col-sm-4 col-md-4 add-d-title">Waterfront Description:</span>
                                <span class="col-xs-6 col-sm-8 col-md-8 add-d-entry">Intracoastal Front,Ocean Access</span>
                            </li>

                        </ul>
                    </div>
                    <!-- End additional-details area  -->

                    <div class="section property-features">

                        <h4 class="s-property-title">Features</h4>
                        <ul>
                            <li><a href="properties.html">Swimming Pool</a></li>
                            <li><a href="properties.html">3 Stories</a></li>
                            <li><a href="properties.html">Central Cooling</a></li>
                            <li><a href="properties.html">Jog Path 2</a></li>
                            <li><a href="properties.html">2 Lawn</a></li>
                            <li><a href="properties.html">Bike Path</a></li>
                        </ul>

                    </div>
                    <!-- End features area  -->

                    <div class="section property-video">
                        <h4 class="s-property-title">Property Video</h4>
                        <div class="video-thumb">
                            <a class="video-popup" href="yout" title="Virtual Tour">
                                <img src="assets/img/property-video.jpg" class="img-responsive wp-post-image" alt="Exterior">
                            </a>
                        </div>
                    </div>
                    <!-- End video area  -->



                    <div class="section property-share">
                        <h4 class="s-property-title">Share width your friends </h4>
                        <div class="roperty-social">
                            <ul>
                                <li><a title="Share this on dribbble " href="#"><img src="assets/img/social_big/dribbble_grey.png"></a></li>
                                <li><a title="Share this on facebok " href="#"><img src="assets/img/social_big/facebook_grey.png"></a></li>
                                <li><a title="Share this on delicious " href="#"><img src="assets/img/social_big/delicious_grey.png"></a></li>
                                <li><a title="Share this on tumblr " href="#"><img src="assets/img/social_big/tumblr_grey.png"></a></li>
                                <li><a title="Share this on digg " href="#"><img src="assets/img/social_big/digg_grey.png"></a></li>
                                <li><a title="Share this on twitter " href="#"><img src="assets/img/social_big/twitter_grey.png"></a></li>
                                <li><a title="Share this on linkedin " href="#"><img src="assets/img/social_big/linkedin_grey.png"></a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- End video area  -->

                </div>
            </div>


            <div class="col-md-4 p0">
                <aside class="sidebar sidebar-property blog-asside-right">
                    <div class="dealer-widget">
                        <div class="dealer-content">
                            <div class="inner-wrapper">

                                <div class="clear">
                                    <div class="col-xs-4 col-sm-4 dealer-face">
                                        <a href="">
                                            <img src="assets/img/client-face1.png" class="img-circle">
                                        </a>
                                    </div>
                                    <div class="col-xs-8 col-sm-8 ">
                                        <h3 class="dealer-name">
                                            <a href="">Nathan James</a>
                                            <span>Real Estate Agent</span>
                                        </h3>
                                        <div class="dealer-social-media">
                                            <a class="twitter" target="_blank" href="">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                            <a class="facebook" target="_blank" href="">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                            <a class="gplus" target="_blank" href="">
                                                <i class="fa fa-google-plus"></i>
                                            </a>
                                            <a class="linkedin" target="_blank" href="">
                                                <i class="fa fa-linkedin"></i>
                                            </a>
                                            <a class="instagram" target="_blank" href="">
                                                <i class="fa fa-instagram"></i>
                                            </a>
                                        </div>

                                    </div>
                                </div>

                                <div class="clear">
                                    <ul class="dealer-contacts">
                                        <li><i class="pe-7s-map-marker strong"> </i> 9089 your adress her</li>
                                        <li><i class="pe-7s-mail strong"> </i> email@yourcompany.com</li>
                                        <li><i class="pe-7s-call strong"> </i> +1 908 967 5906</li>
                                    </ul>
                                    <p>Duis mollis  blandit tempus porttitor curabiturDuis mollis  blandit tempus porttitor curabitur , est non…</p>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="panel panel-default sidebar-menu similar-property-wdg wow fadeInRight animated">
                        <div class="panel-heading">
                            <h3 class="panel-title">Similar Properties</h3>
                        </div>
                        <div class="panel-body recent-property-widget">
                                <ul>
                                <li>
                                    <div class="col-md-3 col-sm-3 col-xs-3 blg-thumb p0">
                                        <a href="single.html"><img src="assets/img/demo/small-property-2.jpg"></a>
                                        <span class="property-seeker">
                                            <b class="b-1">A</b>
                                            <b class="b-2">S</b>
                                        </span>
                                    </div>
                                    <div class="col-md-8 col-sm-8 col-xs-8 blg-entry">
                                        <h6> <a href="single.html">Super nice villa </a></h6>
                                        <span class="property-price">3000000$</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="col-md-3 col-sm-3  col-xs-3 blg-thumb p0">
                                        <a href="single.html"><img src="assets/img/demo/small-property-1.jpg"></a>
                                        <span class="property-seeker">
                                            <b class="b-1">A</b>
                                            <b class="b-2">S</b>
                                        </span>
                                    </div>
                                    <div class="col-md-8 col-sm-8 col-xs-8 blg-entry">
                                        <h6> <a href="single.html">Super nice villa </a></h6>
                                        <span class="property-price">3000000$</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="col-md-3 col-sm-3 col-xs-3 blg-thumb p0">
                                        <a href="single.html"><img src="assets/img/demo/small-property-3.jpg"></a>
                                        <span class="property-seeker">
                                            <b class="b-1">A</b>
                                            <b class="b-2">S</b>
                                        </span>
                                    </div>
                                    <div class="col-md-8 col-sm-8 col-xs-8 blg-entry">
                                        <h6> <a href="single.html">Super nice villa </a></h6>
                                        <span class="property-price">3000000$</span>
                                    </div>
                                </li>

                                <li>
                                    <div class="col-md-3 col-sm-3 col-xs-3 blg-thumb p0">
                                        <a href="single.html"><img src="assets/img/demo/small-property-2.jpg"></a>
                                        <span class="property-seeker">
                                            <b class="b-1">A</b>
                                            <b class="b-2">S</b>
                                        </span>
                                    </div>
                                    <div class="col-md-8 col-sm-8 col-xs-8 blg-entry">
                                        <h6> <a href="single.html">Super nice villa </a></h6>
                                        <span class="property-price">3000000$</span>
                                    </div>
                                </li>

                            </ul>
                        </div>
                    </div>

                    <div class="panel panel-default sidebar-menu wow fadeInRight animated">
                        <div class="panel-heading">
                            <h3 class="panel-title">Ads her  </h3>
                        </div>
                        <div class="panel-body recent-property-widget">
                            <img src="assets/img/ads.jpg">
                        </div>
                    </div>

                    <div class="panel panel-default sidebar-menu wow fadeInRight animated" >
                        <div class="panel-heading">
                            <h3 class="panel-title">Smart search</h3>
                        </div>
                        <div class="panel-body search-widget">
                            <form action="" class=" form-inline">
                                <fieldset>
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <input type="text" class="form-control" placeholder="Key word">
                                        </div>
                                    </div>
                                </fieldset>

                                <fieldset>
                                    <div class="row">
                                        <div class="col-xs-6">

                                            <select id="lunchBegins" class="selectpicker" data-live-search="true" data-live-search-style="begins" title="Select Your City">


                                    <option>Cairo</option>
                                    <option>Alexandria</option>
                                    <option>Mansoura</option>
                                    <option>Giza</option>
                                    <option>Sheikh Zayed</option>
                                    <option>Obour</option>
                                    <option>Madinaty </option>
                                    <option>The New Administrative Capital</option>
                                            </select>
                                        </div>
                                        <div class="col-xs-6">

                                            <select id="basic" class="selectpicker show-tick form-control">
                                                <option> Purpose </option>
                                                <option>Rent </option>
                                                <option>Buy</option>

                                            </select>
                                        </div>
                                    </div>
                                </fieldset>

                                <fieldset class="padding-5">
                                    <div class="search-row">

                                        <div class="form-group mar-r-20">
                                            <label for="price-range">Price range (EGP):</label>
                                            <input type="text" class="span2" value="" data-slider-min="400000"
                                                   data-slider-max="3500000" data-slider-step="10000"
                                                   data-slider-value="[932000,2820000]" id="price-range" ><br />
                                            <b class="pull-left color">400000</b>
                                            <b class="pull-right color">3500000</b>
                                        </div>
                                        <!-- End of  -->

                                        <div class="form-group mar-l-20">
                                            <label for="property-geo">Property geo (m2) :</label>
                                            <input type="text" class="span2" value="" data-slider-min="100"
                                                   data-slider-max="2800" data-slider-step="5"
                                                   data-slider-value="[400,2000]" id="property-geo" ><br />
                                            <b class="pull-left color">400m</b>
                                            <b class="pull-right color">2800m</b>
                                        </div>
                                        <!-- End of  -->
                                    </div>
                                </fieldset>

                                <fieldset class="padding-5">
                                    <div class="row">
                                        <div class="col-xs-6">
                                            <label for="price-range"> Baths :</label>
                                        <input type="text" class="span2" value="" data-slider-min="1"
                                               data-slider-max="6" data-slider-step="1"
                                               data-slider-value="[2,4]" id="min-baths" ><br />
                                        <b class="pull-left color">1</b>
                                        <b class="pull-right color">6</b>
                                        </div>

                                        <div class="col-xs-6">
                                            <label for="property-geo">Beds :</label>
                                            <input type="text" class="span2" value="" data-slider-min="1"
                                                   data-slider-max="8" data-slider-step="1"
                                                   data-slider-value="[2,6]" id="min-bed" ><br />
                                            <b class="pull-left color">1</b>
                                            <b class="pull-right color">8</b>

                                        </div>
                                    </div>
                                </fieldset>


                                <fieldset class="padding-5">
                                    <div class="row">
                                        <div class="col-xs-6">
                                            <div class="checkbox">
                                                <label>       <input type="checkbox"> Apartment
                                                </label>                                                </div>
                                        </div>

                                        <div class="col-xs-6">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox"> Villa
                                                </label>                                                </div>
                                        </div>
                                    </div>
                                </fieldset>

                                <fieldset class="padding-5">
                                    <div class="row">
                                        <div class="col-xs-6">
                                            <div class="checkbox">
                                                <label> <input type="checkbox" checked> Swimming Pool</label>
                                            </div>
                                        </div>
                                        <div class="col-xs-6">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox"> Duplex
                                                </label>                                                </div>
                                        </div>
                                    </div>
                                </fieldset>

                                <fieldset class="padding-5">
                                    <div class="row">
                                        <div class="col-xs-6">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox"> chalet
                                                </label>                                                </div>
                                        </div>
                                        <div class="col-xs-6">
                                            <div class="checkbox">
                                                <label> <input type="checkbox"> Emergency Exit</label>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>

                                <fieldset class="padding-5">
                                    <div class="row">
                                        <div class="col-xs-6">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox">  Bulding
                                                </label>                                                </div>
                                        </div>
                                        <div class="col-xs-6">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox"> Ware House
                                                </label>                                                </div>
                                        </div>
                                    </div>
                                </fieldset>
                                <fieldset class="padding-5">
                                    <div class="row">
                                        <div class="col-xs-6">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox"> Factory
                                                </label>                                                </div>
                                        </div>
                                        <div class="col-xs-6">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox">  Landing
                                                </label>                                                </div>
                                        </div>
                                    </div>
                                </fieldset>
                                <fieldset class="padding-5">
                                    <div class="row">
                                        <div class="col-xs-6">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox"> Swiming Pool
                                                </label>                                                </div>
                                        </div>
                                        <div class="col-xs-6">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox">  Joy Path
                                                </label>                                                </div>
                                        </div>
                                    </div>
                                </fieldset>
                                <fieldset class="padding-5">
                                    <div class="row">
                                        <div class="col-xs-6">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox"> clinic
                                                </label>                                                </div>
                                        </div>
                                        <div class="col-xs-6">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox"> Garage
                                                </label>                                                </div>
                                        </div>
                                    </div>
                                </fieldset>

                                <fieldset >
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <input class="button btn largesearch-btn" value="Search" type="submit">
                                        </div>
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                    </div>

                </aside>
            </div>
        </div>

    </div>
</div>

@endsection
