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

                                <div class="property-images">
                                    <div id="primary-image" class="main-image primary">
                                        <img src="{{ asset('images/properties/' . $property->primary_image) }}" />
                                    </div>
                                </div>
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

                        <!-- Additional images area -->
                        <div class="section additional-images">
                            <h4 class="s-property-title">Additional Images</h4>
                            <div class="additional-images-list">
                                @foreach($property->images as $index => $image)
                                    @if ($index < 2) <!-- Display only 2 additional images -->
                                        <img src="{{ asset('images/properties/' . $image->image_path) }}" class="additional-image" />
                                    @endif
                                @endforeach
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#imageModal">
                                    More Images
                                </button>
                            </div>
                        </div>
                        <!-- End additional images area -->



                        <!-- Property share area -->
                        <div class="section property-share">
                            <h4 class="s-property-title">Share with your friends</h4>
                            <div class="property-social">
                                <ul>
                                    <li><a title="Share this on dribbble" href="#"><img src="{{ asset('build/assets/front/assets/img/social_big/dribbble_grey.png') }}"></a></li>
                                    <li><a title="Share this on facebook" href="#"><img src="{{ asset('build/assets/front/assets/img/social_big/facebook_grey.png') }}"></a></li>
                                    <!-- Add more social media icons here -->
                                </ul>
                            </div>
                        </div>
                        <!-- End property share area -->

        <!-- Similar properties widget -->
    <div class="panel panel-default sidebar-menu similar-property-wdg wow fadeInRight animated">
        <div class="panel-heading">
            <h3 class="panel-title">Similar Properties</h3>
        </div>
        <div class="panel-body recent-property-widget">
            <ul>
            @if (!empty($similarProperties))
                @foreach ($similarProperties as $similar)
                    <li>
                        <div class="col-md-3 col-sm-3 col-xs-3 blg-thumb p0">
                            <a href="{{ route('properties.show', $similar['id']) }}">
                                <img src="{{ asset('images/properties/' . $similar['primary_image']) }}">
                            </a>
                            <span class="property-seeker">
                                <b class="b-1">A</b>
                                <b class="b-2">S</b>
                            </span>
                        </div>
                        <div class="col-md-8 col-sm-8 col-xs-8 blg-entry">
                            <h6><a href="{{ route('properties.show', $similar['id']) }}">{{ $similar['title'] }}</a></h6>
                            <span class="property-price">${{ number_format($similar['price'], 2) }}</span>
                        </div>
                    </li>
                @endforeach
            @else
                <p>No similar properties found.</p>
            @endif
            </ul>
        </div>
    </div>
    <!-- End similar properties widget -->

                    </div>
                </div>

                <!-- Sidebar area -->
                <div class="col-md-4 p0">
                    <aside class="sidebar sidebar-property blog-asside-right">
                                            <!-- Company widget -->
                                            <div class="company-widget">
                                                <div class="company-content">
                                                    <div class="inner-wrapper">
                                                        <h3 class="company-name"><a href="#">{{ $property->company->name }}</a></h3>
                                                        <ul class="company-contacts">
                                                            <li><i class="pe-7s-map-marker strong"></i> {{ $property->company->address }}</li>
                                                            <li><i class="pe-7s-mail strong"></i> {{ $property->company->email }}</li>
                                                            <li><i class="pe-7s-call strong"></i> {{ $property->company->phone }}</li>
                                                        </ul>
                                                        <p>{{ $property->company->description }}</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End company widget -->
                        {{-- <!-- Similar properties widget -->
                        <div class="panel panel-default sidebar-menu similar-property-wdg wow fadeInRight animated">
                            <div class="panel-heading">
                                <h3 class="panel-title">Similar Properties</h3>
                            </div>
                            <div class="panel-body recent-property-widget">
                                <ul>
                                    {{-- @foreach($similar_properties as $similar)
                                        <li>
                                            <div class="col-md-3 col-sm-3 col-xs-3 blg-thumb p0">
                                                <a href="{{ route('properties.show', $similar->id) }}"><img src="{{ asset('images/properties/' . $similar->thumbnail) }}"></a>
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
                        {{-- </div> --}}
                        <!-- End similar properties widget -->
                    </aside>
                </div>
                <!-- End sidebar area -->

            </div>
        </div>
    </div>
    <!-- End property area -->

    <!-- Modal for displaying all images -->
    <div id="imageModal" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Property Images</h4>
                </div>
                <div class="modal-body">
                    <div id="imageCarousel" class="carousel slide" data-ride="carousel">
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">
                            <div class="item active primary">
                                <img src="{{ asset('images/properties/' . $property->primary_image) }}" />
                            </div>
                            @foreach($property->images as $image)
                                <div class="item">
                                    <img src="{{ asset('images/properties/' . $image->image_path) }}" />
                                </div>
                            @endforeach
                        </div>
                        <!-- Left and right controls -->
                        <a class="left carousel-control" href="#imageCarousel" role="button" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#imageCarousel" role="button" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End modal for displaying all images -->
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            // Initialize variables
            var primaryImage = $('#primary-image img');
            var additionalImages = $('.additional-image');

            // Show all images in modal when clicking on any image
            primaryImage.on('click', function() {
                $('#imageModal').modal('show');
            });

            additionalImages.on('click', function() {
                $('#imageModal').modal('show');
            });
        });
    </script>
@endpush
