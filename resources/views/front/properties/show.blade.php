@extends('layouts.front.site')

@section('content')
    <div class="page-head">
        <div class="container">
            <div class="row">
                <div class="page-head-content">
                    <h1 class="page-title">{{ $property->title }}</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- End page header -->

    <!-- Property area -->
    <div class="content-area single-property" style="background-color: #FCFCFC;">
        <div class="container">
            <div class="clearfix padding-top-40">

                <div class="col-md-8 single-property-content prp-style-1">
                    <div class="row">
                        <div class="light-slide-item">
                            <div class="clearfix">
                                <div class="favorite-and-print">
                                    <a class="add-to-fav" href="#login-modal" data-toggle="modal">
                                        <i class="fa fa-star-o"></i>
                                    </a>
                                    <a class="printer-icon" href="javascript:window.print()">
                                        <i class="fa fa-print"></i>
                                    </a>
                                </div>

                                <ul id="image-gallery" class="gallery list-unstyled cS-hidden">
                                    @foreach($property->images as $image)
                                        <li data-thumb="{{ asset($image->thumbnail_path) }}">
                                            <img src="{{ asset($image->image_path) }}" />
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="single-property-wrapper">
                        <div class="single-property-header">
                            <h1 class="property-title pull-left">{{ $property->title }}</h1>
                            <span class="property-price pull-right">${{ number_format($property->price, 2) }}</span>
                        </div>

                        <div class="property-meta entry-meta clearfix">
                            <div class="col-xs-6 col-sm-3 col-md-3 p-b-15">
                                <span class="property-info-icon icon-tag">
                                    <img src="{{ asset('build/assets/front/assets/img/icon/sale-orange.png') }}">
                                </span>
                                <span class="property-info-entry">
                                    <span class="property-info-label">Status</span>
                                    <span class="property-info-value">{{ $property->status }}</span>
                                </span>
                            </div>

                            <div class="col-xs-6 col-sm-3 col-md-3 p-b-15">
                                <span class="property-info icon-area">
                                    <img src="{{ asset('build/assets/front/assets/img/icon/room-orange.png') }}">
                                </span>
                                <span class="property-info-entry">
                                    <span class="property-info-label">Area</span>
                                    <span class="property-info-value">{{ $property->geo }}<b class="property-info-unit">Sq Ft</b></span>
                                </span>
                            </div>

                            <div class="col-xs-6 col-sm-3 col-md-3 p-b-15">
                                <span class="property-info-icon icon-bed">
                                    <img src="{{ asset('build/assets/front/assets/img/icon/bed-orange.png') }}">
                                </span>
                                <span class="property-info-entry">
                                    <span class="property-info-label">Bedrooms</span>
                                    <span class="property-info-value">{{ $property->beds }}</span>
                                </span>
                            </div>

                            <!-- Add more property info here -->

                        </div>
                        <!-- .property-meta -->

                        <div class="section">
                            <h4 class="s-property-title">Description</h4>
                            <div class="s-property-content">
                                <p>{{ $property->description }}</p>
                            </div>
                        </div>
                        <!-- End description area -->

                        <!-- Additional details area -->
                        <div class="section additional-details">
                            <h4 class="s-property-title">Additional Details</h4>
                            <ul class="additional-details-list clearfix">
                                <li>
                                    <span class="col-xs-6 col-sm-4 col-md-4 add-d-title">Waterfront</span>
                                    <span class="col-xs-6 col-sm-8 col-md-8 add-d-entry">{{ $property->waterfront ? 'Yes' : 'No' }}</span>
                                </li>
                                <li>
                                    <span class="col-xs-6 col-sm-4 col-md-4 add-d-title">Built In</span>
                                    <span class="col-xs-6 col-sm-8 col-md-8 add-d-entry">{{ $property->built_in }}</span>
                                </li>
                                <!-- Add more additional details here -->
                            </ul>
                        </div>
                        <!-- End additional details area -->

                        <!-- Features area -->
                        <div class="section property-features">
                            <h4 class="s-property-title">Features</h4>
                            <ul>
                                {{-- @foreach($property->features as $feature)
                                    <li><a href="#">{{ $feature->name }}</a></li>
                                @endforeach --}}
                            </ul>
                        </div>
                        <!-- End features area -->

                        <!-- Property video area -->
                        <div class="section property-video">
                            <h4 class="s-property-title">Property Video</h4>
                            <div class="video-thumb">
                                <a class="video-popup" href="{{ $property->video_url }}" title="Virtual Tour">
                                    <img src="{{ asset('build/assets/front/assets/img/property-video.jpg') }}" class="img-responsive wp-post-image" alt="Property Video">
                                </a>
                            </div>
                        </div>
                        <!-- End property video area -->

                        <!-- Property share area -->
                        <div class="section property-share">
                            <h4 class="s-property-title">Share with your friends</h4>
                            <div class="roperty-social">
                                <ul>
                                    <li><a title="Share this on dribbble" href="#"><img src="{{ asset('build/assets/front/assets/img/social_big/dribbble_grey.png') }}"></a></li>
                                    <li><a title="Share this on facebook" href="#"><img src="{{ asset('build/assets/front/assets/img/social_big/facebook_grey.png') }}"></a></li>
                                    <!-- Add more social media icons here -->
                                </ul>
                            </div>
                        </div>
                        <!-- End property share area -->

                    </div>
                </div>

                <!-- Sidebar area -->
                <div class="col-md-4 p0">
                    <aside class="sidebar sidebar-property blog-asside-right">
                        <!-- Similar properties widget -->
                        <div class="panel panel-default sidebar-menu similar-property-wdg wow fadeInRight animated">
                            <div class="panel-heading">
                                <h3 class="panel-title">Similar Properties</h3>
                            </div>
                            <div class="panel-body recent-property-widget">
                                <ul>
                                    {{-- @foreach($similar_properties as $similar)
                                        <li>
                                            <div class="col-md-3 col-sm-3 col-xs-3 blg-thumb p0">
                                                <a href="{{ route('properties.show', $similar->id) }}"><img src="{{ asset($similar->thumbnail) }}"></a>
                                                <span class="property-seeker">
                                                    <b class="b-1">A</b>
                                                    <b class="b-2">S</b>
                                                </span>
                                            </div>
                                            <div class="col-md-8 col-sm-8 col-xs-8 blg-entry">
                                                <h6><a href="{{ route('properties.show', $similar->id) }}">{{ $similar->title }}</a></h6>
                                                <span class="property-price">${{ number_format($similar->price, 2) }}</span>
                                            </div>
                                        </li>
                                    @endforeach --}}
                                </ul>
                            </div>
                        </div>
                        <!-- End similar properties widget -->

                        <!-- Dealer widget -->
                        <div class="dealer-widget">
                            <div class="dealer-content">
                                <div class="inner-wrapper">
                                    <!-- Replace with actual dealer information -->
                                    {{-- <h3 class="dealer-name"><a href="#">{{ $property->agent->name }}</a></h3> --}}
                                    {{-- <span>{{ $property->agent->role }}</span>
                                    <!-- Add social media links here if available -->
                                    <ul class="dealer-contacts">
                                        <li><i class="pe-7s-map-marker strong"></i> {{ $property->agent->address }}</li>
                                        <li><i class="pe-7s-mail strong"></i> {{ $property->agent->email }}</li>
                                        <li><i class="pe-7s-call strong"></i> {{ $property->agent->phone }}</li>
                                    </ul>
                                    <p>{{ $property->agent->bio }}</p> --}}
                                </div>
                            </div>
                        </div>
                        <!-- End dealer widget -->
                    </aside>
                </div>
                <!-- End sidebar area -->

            </div>
        </div>
    </div>
    <!-- End property area -->
@endsection
