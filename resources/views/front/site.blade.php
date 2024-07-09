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
                <div class="row2">
                    <div class="col-lg-9 col-lg-offset-2 col-md-10 col-md-offset-1 col-sm-12" >
                        <!-- <h2>property Searching Just Got So Easy</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi deserunt deleniti, ullam commodi sit ipsam laboriosam velit adipisci quibusdam aliquam teneturo!</p> -->
                        <div class="search-form wow pulse" data-wow-delay="0.8s">
                            <form action="{{ route('properties.filter') }}" method="GET" class="form-inline">
                                @csrf
                                <button class="btn toggle-btn" type="button"><i class="fa fa-bars"></i></button>

                                <div class="form-group">
                                    <select name="status" class="form-control">
                                        <option value="">Select Status</option>
                                        <option value="ready">Ready</option>
                                        <option value="under">Under Construction</option>
                                        <option value="future">In the Future</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <select id="city" name="city" class="selectpicker" data-live-search="true" data-live-search-style="begins" title="Select your city">
                                        <option value="">Select City</option>
                                        <option value="oboor">Oboor</option>
                                        <option value="badr">Badr</option>
                                        <option value="capital">Capital Administrative</option>
                                        <option value="zayed">Zayed</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <select id="purpose" name="purpose" class="selectpicker show-tick form-control">
                                        <option value="">Select Purpose</option>
                                        <option value="sale">Sale</option>
                                        <option value="rent">Rent</option>
                                    </select>
                                </div>
                                <button class="btn search-btn" type="submit"><i class="fa fa-search"></i></button>

                                <div style="display: none;" class="search-toggle">
                                    <div class="row1">
                                        <div class="form-group">
                                            <select name="beds" class="sayed">
                                                <option value="">Beds</option>
                                                <option value="1">1 Bed</option>
                                                <option value="2">2 Beds</option>
                                                <option value="3">3 Beds</option>
                                                <option value="4">4 Beds</option>
                                                <option value="5">More Than 4 Beds</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <select name="baths" class="sayed">
                                                <option value="">Baths</option>
                                                <option value="1">1 Bath</option>
                                                <option value="2">2 Baths</option>
                                                <option value="3">3 Baths</option>
                                                <option value="4">More Than 3 Baths</option>
                                            </select>
                                        </div>
                                        <input type="number" class="form-control" name="geo" placeholder="Area (Sq. M.)" min="40" max="2800" step="10">
                                        <input type="number" class="form-control" name="min_price" placeholder="Lower Price" min="400000" step="10000" max="35000000">
                                        <input type="number" class="form-control" name="max_price" placeholder="Higher Price" min="400000" max="35000000" step="10000">
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
                    @foreach($companies as $company)
                    <div class="hdcarousel_item">
                        <a href="{{ route('companies.show', ['company' => $company->id]) }}">
                            <img src="{{ asset('/' . $company->logo) }}" alt="{{ $company->name }}">
                        </a>
                    </div>
                    @endforeach
                </div>
            </section>
        </main>


 @endsection
