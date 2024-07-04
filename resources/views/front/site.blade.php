@extends('layouts.front.site')
@section('content')
<div class="slider-area">
            <div class="slider">
                <div id="bg-slider" class="owl-carousel owl-theme">

                    <div class="item"><img src="{{asset('build/assets/front/assets/img/slide1/slider-image-5.jpg')}}" alt="Mirror Edge"></div>
                    <div class="item"><img src="{{asset('build/assets/front/assets/img/slide1/slider-image-4.jpg')}}" alt="GTA V"></div>
                    <!-- <div class="item"><img src="assets/img/slide1/slider-image-3.jpg" alt="The Last of us"></div>  -->

                </div>
            </div>
            <div class="container slider-content">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-sm-12">
                        <!-- <h2>property Searching Just Got So Easy</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi deserunt deleniti, ullam commodi sit ipsam laboriosam velit adipisci quibusdam aliquam teneturo!</p> -->
                        <div class="search-form wow pulse" data-wow-delay="0.8s">

                            <form action="" class=" form-inline">
                                <button class="btn  toggle-btn" type="button"><i class="fa fa-bars"></i></button>

                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Key word">
                                </div>
                                <div class="form-group">
                                    <select id="lunchBegins" class="selectpicker" data-live-search="true" data-live-search-style="begins" title="Select your city">

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
                                <div class="form-group">
                                    <select id="basic" class="selectpicker show-tick form-control">
                                        <option> Purpose </option>
                                        <option>Rent </option>
                                        <option>Buy</option>

                                    </select>
                                </div>
                                <button class="btn search-btn" type="submit"><i class="fa fa-search"></i></button>

                                <div style="display: none;" class="search-toggle">

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

                                    <div class="search-row">

                                        <div class="form-group mar-r-20">
                                            <label for="price-range"> Baths :</label>
                                            <input type="text" class="span2" value="" data-slider-min="1"
                                                   data-slider-max="6" data-slider-step="1"
                                                   data-slider-value="[2,4]" id="min-baths" ><br />
                                            <b class="pull-left color">1</b>
                                            <b class="pull-right color">6</b>
                                        </div>
                                        <!-- End of  -->

                                        <div class="form-group mar-l-20">
                                            <label for="property-geo">Beds :</label>
                                            <input type="text" class="span2" value="" data-slider-min="1"
                                                   data-slider-max="8" data-slider-step="1"
                                                   data-slider-value="[2,6]" id="min-bed" ><br />
                                            <b class="pull-left color">1</b>
                                            <b class="pull-right color">8</b>
                                        </div>
                                        <!-- End of  -->

                                    </div>
                                    <br>
                                    <div class="search-row">

                                        <div class="form-group">
                                            <div class="checkbox">
                                                <label>       <input type="checkbox"> Apartment
                                                </label>
                                            </div>
                                        </div>
                                        <!-- End of  -->

                                        <div class="form-group">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox"> Villa
                                                </label>
                                            </div>
                                        </div>
                                        <!-- End of  -->

                                        <div class="form-group">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox"> Duplex
                                                </label>
                                            </div>
                                        </div>
                                        <!-- End of  -->
                                    </div>

                                    <div class="search-row">

                                        <div class="form-group">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox"> chalet
                                                </label>
                                            </div>
                                        </div>
                                        <!-- End of  -->

                                        <div class="form-group">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox"> clinic
                                                </label>
                                            </div>
                                        </div>
                                        <!-- End of  -->

                                        <div class="form-group">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox"> Garage
                                                </label>
                                            </div>
                                        </div>
                                        <!-- End of  -->
                                    </div>

                                    <div class="search-row">

                                        <div class="form-group">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox"> Residential Land
                                                </label>
                                            </div>
                                        </div>
                                        <!-- End of  -->

                                        <div class="form-group">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox"> Office
                                                </label>
                                            </div>
                                        </div>
                                        <!-- End of  -->

                                        <div class="form-group">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox"> Commerce Bulding
                                                </label>
                                            </div>
                                        </div>

                                        <!-- End of  -->
                                    </div>
                                    <div class="search-row">

                                        <div class="form-group">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox"> Ware House
                                                </label>
                                            </div>
                                        </div>
                                        <!-- End of  -->

                                        <div class="form-group">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox"> Factory
                                                </label>
                                            </div>
                                        </div>
                                        <!-- End of  -->

                                        <div class="form-group">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox"> Commerce Landing
                                                </label>
                                            </div>
                                        </div>

                                        <!-- End of  -->
                                    </div>
                                    <div class="search-row">

                                        <div class="form-group">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox"> Swiming Pool
                                                </label>
                                            </div>
                                        </div>
                                        <!-- End of  -->

                                        <div class="form-group">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox"> Joy Path
                                                </label>
                                            </div>
                                        </div>
                                        <!-- End of  -->

                                        <div class="form-group">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox"> Agricultural
                                                </label>
                                            </div>
                                        </div>

                                        <!-- End of  -->
                                    </div>

                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="testimonial-area recent-property" style="background-color: #FCFCFC; padding-bottom: 15px;">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1 col-sm-12 text-center page-title">
                        <!-- /.feature title -->
                        <!-- <h2>Our  Services  </h2>  -->
                    </div>
                </div>
                </div>
                </div>

        <!-- <div class="Welcome-area"> -->

            <div class="container">
                <!-- services section starts  -->



<section class="services">


    <h1 class="heading">our services</h1>

    <div class="box-container">

       <div class="box">
          <img src="{{asset('build/assets/front/assets/img/icon-1.png')}}" alt="">
          <h3>buy house</h3>
          <p>Mkank provides the first service through which you can buy the ideal home based on your desires.</p>
       </div>

       <div class="box">
          <img src="{{asset('build/assets/front/assets/img/icon-2.png')}}" alt="">
          <h3>rent house</h3>
          <p>Mkank provides the second service through which you can rent the ideal house according to your desires.</p>
       </div>

       <div class="box">
          <img src="{{asset('build/assets/front/assets/img/icon-3.png')}}" alt="">
          <h3>sell house</h3>
          <p>It is the third service through which you can sell a house and determine the best price you can get.</p>
       </div>

       <div class="box">
          <img src="{{asset('build/assets/front/assets/img/icon-4.png')}}" alt="">
          <h3>flats and buildings</h3>
          <p>Mkank provides information about extension residential units in buildings and also residential flats.</p>
       </div>

       <div class="box">
          <img src="{{asset('build/assets/front/assets/img/icon-5.png')}}" alt="">
          <h3>shops and malls</h3>
          <p>Mkank provides information about the stores located inside small and large malls.As well as information about shops.</p>
       </div>

       <div class="box">
          <img src="{{asset('build/assets/front/assets/img/icon-6.png')}}" alt="">
          <h3>Service</h3>
          <p>Mkank provides full service and you can contact us through messages if you encounter any problem and we will solve it.</p>
       </div>

    </div>

 </section>

 <!-- services section ends -->

 <!-- steps section starts  -->

 <section class="steps">

    <h1 class="heading">What are the three steps of Mkank?</h1>

    <div class="box-container">


       <div class="box">

          <img src="{{asset('build/assets/front/assets/img/step-1.png')}}" alt="">
          <h3>search property</h3>
          <p>The first step is to search for the property that suits your desires.</p>
       </div>

       <div class="box">
          <img src="{{asset('build/assets/front/assets/img/step-2.png')}}" alt="">
          <h3>contact agents</h3>
          <p>The second step is to Contact with the company's agents.</p>
       </div>

       <div class="box">
          <img src="{{asset('build/assets/front/assets/img/step-3.png')}}" alt="">
          <h3>enjoy property</h3>
          <p>Now you can enjoy your chosen property.</p>
       </div>

    </div>
 </section>
        </div>

        <!-- <div class="count-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1 col-sm-12 text-center page-title">
                         /.feature title -->
                        <!-- <h2>You can trust Us </h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-xs-12 percent-blocks m-main" data-waypoint-scroll="true">
                        <div class="row">
                            <div class="col-sm-3 col-xs-6">
                                <div class="count-item">
                                    <div class="count-item-circle">
                                        <span class="pe-7s-users"></span>
                                    </div>
                                    <div class="chart" data-percent="5000">
                                        <h2 class="percent" id="counter">0</h2>
                                        <h5>HAPPY CUSTOMER </h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3 col-xs-6">
                                <div class="count-item">
                                    <div class="count-item-circle">
                                        <span class="pe-7s-home"></span>
                                    </div>
                                    <div class="chart" data-percent="12000">
                                        <h2 class="percent" id="counter1">0</h2>
                                        <h5>Properties in stock</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3 col-xs-6">
                                <div class="count-item">
                                    <div class="count-item-circle">
                                        <span class="pe-7s-flag"></span>
                                    </div>
                                    <div class="chart" data-percent="120">
                                        <h2 class="percent" id="counter2">0</h2>
                                        <h5>City registered </h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3 col-xs-6">
                                <div class="count-item">
                                    <div class="count-item-circle">
                                        <span class="pe-7s-graph2"></span>
                                    </div>
                                    <div class="chart" data-percent="5000">
                                        <h2 class="percent"  id="counter3">5000</h2>
                                        <h5>DEALER BRANCHES</h5>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>  -->




 <main class="main">
    <section class="section">
       <div id="like_and_subscribe">
          <div class="hdcarousel_item">
             <a href="/company/1">      <img src="{{asset('build/assets/front/assets/img/companies logo/متواضع.png')}}" alt=""></a>
           </div>
          <div class="hdcarousel_item"><img src="{{asset('build/assets/front/assets/img/companies logo/images123.png')}}" alt=""></div>
          <div class="hdcarousel_item"><img src="{{asset('build/assets/front/assets/img/companies logo/245.jpg')}}" alt=""></div>
          <div class="hdcarousel_item"><img src="{{asset('build/assets/front/assets/img/companies logo/16483966-240x180.webp')}}" alt=""></div>
          <div class="hdcarousel_item"><img src="{{asset('build/assets/front/assets/img/companies logo/14800376-240x180.webp')}}" alt=""></div>
       </div>
    </section>
 </main>

 @endsection
