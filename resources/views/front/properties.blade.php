@extends('layouts.front.site')
@section('content')
 <!-- property area -->
 <div class="properties-area recent-property" style="background-color: #FFF;">
    <div class="container">
        <div class="row">

        <div class="col-md-3 p0 padding-top-40">
            <div class="blog-asside-right pr0">
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


                        </form>
                    </div>
                </div>

                <div class="panel panel-default sidebar-menu wow fadeInRight animated">
                    <div class="panel-heading">
                        <h3 class="panel-title">Recommended</h3>
                    </div>
                    <div class="panel-body recent-property-widget">
                                <ul>
                                <li>
                                    <div class="col-md-3 col-sm-3 col-xs-3 blg-thumb p0">
                                        <a href="single.html"><img src="{{asset('build/assets/front/assets/img/demo/small-property-2.jpg')}}"></a>
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
                                        <a href="single.html"><img src="{{asset('build/assets/front/assets/img/demo/small-property-1.jpg')}}"></a>
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
                                        <a href="single.html"><img src="{{asset('build/assets/front/assets/img/demo/small-property-3.jpg')}}"></a>
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
                                        <a href="single.html"><img src="{{asset('build/assets/front/assets/img/demo/small-property-2.jpg')}}"></a>
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
            </div>
        </div>

        <div class="col-md-9  pr0 padding-top-40 properties-page">
            <div class="col-md-12 clear">
                <div class="col-xs-10 page-subheader sorting pl0">
                    <ul class="sort-by-list">
                        <li class="active">
                            <a href="javascript:void(0);" class="order_by_date" data-orderby="property_date" data-order="ASC">
                                Property Date <i class="fa fa-sort-amount-asc"></i>
                            </a>
                        </li>
                        <li class="">
                            <a href="javascript:void(0);" class="order_by_price" data-orderby="property_price" data-order="DESC">
                                Property Price <i class="fa fa-sort-numeric-desc"></i>
                            </a>
                        </li>
                    </ul><!--/ .sort-by-list-->

                    <div class="items-per-page">
                        <label for="items_per_page"><b>Property per page :</b></label>
                        <div class="sel">
                            <select id="items_per_page" name="per_page">
                                <option value="3">3</option>
                                <option value="6">6</option>
                                <option value="9">9</option>
                                <option selected="selected" value="12">12</option>
                                <option value="15">15</option>
                                <option value="30">30</option>
                                <option value="45">45</option>
                                <option value="60">60</option>
                            </select>
                        </div><!--/ .sel-->
                    </div><!--/ .items-per-page-->
                </div>

                <div class="col-xs-2 layout-switcher">
                    <a class="layout-list" href="javascript:void(0);"> <i class="fa fa-th-list"></i>  </a>
                    <a class="layout-grid active" href="javascript:void(0);"> <i class="fa fa-th"></i> </a>
                </div><!--/ .layout-switcher-->
            </div>

            <div class="col-md-12 clear">
                <div id="list-type" class="proerty-th">
                    <div class="col-sm-6 col-md-4 p0">
                            <div class="box-two proerty-item">
                                <div class="item-thumb">
                                    <a href="property-1.html" ><img src="{{asset('build/assets/front/assets/img/demo/property-3.jpg')}}"></a>
                                </div>

                                <div class="item-entry overflow">
                                    <h5><a href="property-1.html"> Super nice villa </a></h5>
                                    <div class="dot-hr"></div>
                                    <span class="pull-left"><b> Area :</b> 120m </span>
                                    <span class="proerty-price pull-right"> $ 300,000</span>
                                    <p style="display: none;">Suspendisse ultricies Suspendisse ultricies Nulla quis dapibus nisl. Suspendisse ultricies commodo arcu nec pretium ...</p>
                                    <div class="property-icon">
                                        <img src="{{asset('build/assets/front/assets/img/icon/bed.png')}}">(5)|
                                        <img src="{{asset('build/assets/front/assets/img/icon/shawer.png')}}">(2)|
                                        <img src="{{asset('build/assets/front/assets/img/icon/cars.png')}}">(1)
                                    </div>
                                </div>


                            </div>
                        </div>

                        <div class="col-sm-6 col-md-4 p0">
                            <div class="box-two proerty-item">
                                <div class="item-thumb">
                                    <a href="property-1.html" ><img src="{{asset('build/assets/front/assets/img/demo/property-2.jpg')}}"></a>
                                </div>

                                <div class="item-entry overflow">
                                    <h5><a href="property-1.html"> Super nice villa </a></h5>
                                    <div class="dot-hr"></div>
                                    <span class="pull-left"><b> Area :</b> 120m </span>
                                    <span class="proerty-price pull-right"> $ 300,000</span>
                                    <p style="display: none;">Suspendisse ultricies Suspendisse ultricies Nulla quis dapibus nisl. Suspendisse ultricies commodo arcu nec pretium ...</p>
                                    <div class="property-icon">
                                        <img src="{{asset('build/assets/front/assets/img/icon/bed.png')}}">(5)|
                                        <img src="{{asset('build/assets/front/assets/img/icon/shawer.png')}}">(2)|
                                        <img src="{{asset('build/assets/front/assets/img/icon/cars.png')}}">(1)
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-4 p0">
                            <div class="box-two proerty-item">
                                <div class="item-thumb">
                                    <a href="property-1.html" ><img src="{{asset('build/assets/front/assets/img/demo/property-1.jpg')}}"></a>
                                </div>

                                <div class="item-entry overflow">
                                    <h5><a href="property-1.html"> Super nice villa </a></h5>
                                    <div class="dot-hr"></div>
                                    <span class="pull-left"><b> Area :</b> 120m </span>
                                    <span class="proerty-price pull-right"> $ 300,000</span>
                                    <p style="display: none;">Suspendisse ultricies Suspendisse ultricies Nulla quis dapibus nisl. Suspendisse ultricies commodo arcu nec pretium ...</p>
                                    <div class="property-icon">
                                        <img src="{{asset('build/assets/front/assets/img/icon/bed.png')}}">(5)|
                                        <img src="{{asset('build/assets/front/assets/img/icon/shawer.png')}}">(2)|
                                        <img src="{{asset('build/assets/front/assets/img/icon/cars.png')}}">(1)
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-4 p0">
                            <div class="box-two proerty-item">
                                <div class="item-thumb">
                                    <a href="property-1.html" ><img src="{{asset('build/assets/front/assets/img/demo/property-3.jpg')}}"></a>
                                </div>

                                <div class="item-entry overflow">
                                    <h5><a href="property-1.html"> Super nice villa </a></h5>
                                    <div class="dot-hr"></div>
                                    <span class="pull-left"><b> Area :</b> 120m </span>
                                    <span class="proerty-price pull-right"> $ 300,000</span>
                                    <p style="display: none;">Suspendisse ultricies Suspendisse ultricies Nulla quis dapibus nisl. Suspendisse ultricies commodo arcu nec pretium ...</p>
                                    <div class="property-icon">
                                        <img src="{{asset('build/assets/front/assets/img/icon/bed.png')}}">(5)|
                                        <img src="{{asset('build/assets/front/assets/img/icon/shawer.png')}}">(2)|
                                        <img src="{{asset('build/assets/front/assets/img/icon/cars.png')}}">(1)
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-4 p0">
                            <div class="box-two proerty-item">
                                <div class="item-thumb">
                                    <a href="property-1.html" ><img src="{{asset('build/assets/front/assets/img/demo/property-1.jpg')}}"></a>
                                </div>

                                <div class="item-entry overflow">
                                    <h5><a href="property-1.html"> Super nice villa </a></h5>
                                    <div class="dot-hr"></div>
                                    <span class="pull-left"><b> Area :</b> 120m </span>
                                    <span class="proerty-price pull-right"> $ 300,000</span>
                                    <p style="display: none;">Suspendisse ultricies Suspendisse ultricies Nulla quis dapibus nisl. Suspendisse ultricies commodo arcu nec pretium ...</p>
                                    <div class="property-icon">
                                        <img src="{{asset('build/assets/front/assets/img/icon/bed.png')}}">(5)|
                                        <img src="{{asset('build/assets/front/assets/img/icon/shawer.png')}}">(2)|
                                        <img src="{{asset('build/assets/front/assets/img/icon/cars.png')}}">(1)
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="col-sm-6 col-md-4 p0">
                            <div class="box-two proerty-item">
                                <div class="item-thumb">
                                    <a href="property-1.html" ><img src="{{asset('build/assets/front/assets/img/demo/property-2.jpg')}}"></a>
                                </div>

                                <div class="item-entry overflow">
                                    <h5><a href="property-1.html"> Super nice villa </a></h5>
                                    <div class="dot-hr"></div>
                                    <span class="pull-left"><b> Area :</b> 120m </span>
                                    <span class="proerty-price pull-right"> $ 300,000</span>
                                    <p style="display: none;">Suspendisse ultricies Suspendisse ultricies Nulla quis dapibus nisl. Suspendisse ultricies commodo arcu nec pretium ...</p>
                                    <div class="property-icon">
                                        <img src="{{asset('build/assets/front/assets/img/icon/bed.png')}}">(5)|
                                        <img src="{{asset('build/assets/front/assets/img/icon/shawer.png')}}">(2)|
                                        <img src="{{asset('build/assets/front/assets/img/icon/cars.png')}}">(1)
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-4 p0">
                            <div class="box-two proerty-item">
                                <div class="item-thumb">
                                    <a href="property-1.html" ><img src="{{asset('build/assets/front/assets/img/demo/property-3.jpg')}}"></a>
                                </div>

                                <div class="item-entry overflow">
                                    <h5><a href="property-1.html"> Super nice villa </a></h5>
                                    <div class="dot-hr"></div>
                                    <span class="pull-left"><b> Area :</b> 120m </span>
                                    <span class="proerty-price pull-right"> $ 300,000</span>
                                    <p style="display: none;">Suspendisse ultricies Suspendisse ultricies Nulla quis dapibus nisl. Suspendisse ultricies commodo arcu nec pretium ...</p>
                                    <div class="property-icon">
                                        <img src="{{asset('build/assets/front/assets/img/icon/bed.png')}}">(5)|
                                        <img src="{{asset('build/assets/front/assets/img/icon/shawer.png')}}">(2)|
                                        <img src="{{asset('build/assets/front/assets/img/icon/cars.png')}}">(1)
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-4 p0">
                            <div class="box-two proerty-item">
                                <div class="item-thumb">
                                    <a href="property-1.html" ><img src="{{asset('build/assets/front/assets/img/demo/property-2.jpg')}}"></a>
                                </div>

                                <div class="item-entry overflow">
                                    <h5><a href="property-1.html"> Super nice villa </a></h5>
                                    <div class="dot-hr"></div>
                                    <span class="pull-left"><b> Area :</b> 120m </span>
                                    <span class="proerty-price pull-right"> $ 300,000</span>
                                    <p style="display: none;">Suspendisse ultricies Suspendisse ultricies Nulla quis dapibus nisl. Suspendisse ultricies commodo arcu nec pretium ...</p>
                                    <div class="property-icon">
                                        <img src="{{asset('build/assets/front/assets/img/icon/bed.png')}}">(5)|
                                        <img src="{{asset('build/assets/front/assets/img/icon/shawer.png')}}">(2)|
                                        <img src="{{asset('build/assets/front/assets/img/icon/cars.png')}}">(1)
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-4 p0">
                            <div class="box-two proerty-item">
                                <div class="item-thumb">
                                    <a href="property-1.html" ><img src="{{asset('build/assets/front/assets/img/demo/property-1.jpg')}}"></a>
                                </div>

                                <div class="item-entry overflow">
                                    <h5><a href="property-1.html"> Super nice villa </a></h5>
                                    <div class="dot-hr"></div>
                                    <span class="pull-left"><b> Area :</b> 120m </span>
                                    <span class="proerty-price pull-right"> $ 300,000</span>
                                    <p style="display: none;">Suspendisse ultricies Suspendisse ultricies Nulla quis dapibus nisl. Suspendisse ultricies commodo arcu nec pretium ...</p>
                                    <div class="property-icon">
                                        <img src="{{asset('build/assets/front/assets/img/icon/bed.png')}}">(5)|
                                        <img src="{{asset('build/assets/front/assets/img/icon/shawer.png')}}">(2)|
                                        <img src="{{asset('build/assets/front/assets/img/icon/cars.png')}}">(1)
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="pull-right">
                    <div class="pagination">
                        <ul>
                            <li><a href="#">Prev</a></li>
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">Next</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
</div>
@endsection
