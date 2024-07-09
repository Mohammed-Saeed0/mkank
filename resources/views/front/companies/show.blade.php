@extends('layouts.front.site')
@section('content')

<div class="page-head">
    <div class="container">
        <div class="row">
            <div class="page-head-content">
                <h1 class="page-title">{{ $company->name }}</h1>
                <img style="margin-left: 43px;" src="{{ asset($company->logo) }}" alt="{{ $company->name }} Logo">
            </div>
        </div>
    </div>
</div>

<!-- End page header -->

<!-- Property area -->
<div class="properties-area recent-property" style="background-color: #FFF;">
    <div class="container">
        <div class="row">
            <div class="col-md-3 p0 padding-top-40">
                <div class="blog-asside-right pr0">
                    <div class="panel panel-default sidebar-menu wow fadeInRight animated">
                        <div class="panel-heading">
                            <h3 class="panel-title">Overview</h3>
                        </div>
                        <div class="panel-body search-widget">
                            <p><i class='bx bxs-phone-call'></i><a href="tel:{{ $company->phone }}">{{ $company->phone }}</a></p>
                            <p><i class='bx bxl-gmail'></i><a href="mailto:{{ $company->email }}">{{ $company->email }}</a></p>
                            <p class="location"><i class='bx bxs-location-plus'></i>{{ $company->company_location }}</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-9 pr0 padding-top-40 properties-page">
                <div class="col-md-12 clear">
                    <div class="col-xs-10 page-subheader sorting pl0">
                        <ul class="sort-by-list">
                            <li class="active">
                                <a href="javascript:void(0);" class="order_by_date" data-orderby="property_date" data-order="ASC">
                                    Property Date <i class="fa fa-sort-amount-asc"></i>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);" class="order_by_price" data-orderby="property_price" data-order="DESC">
                                    Property Price <i class="fa fa-sort-numeric-desc"></i>
                                </a>
                            </li>
                        </ul>
                        <!--/ .sort-by-list-->

                        <div class="items-per-page">
                            <label for="items_per_page"><b>Properties per page :</b></label>
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
                            </div>
                            <!--/ .sel-->
                        </div>
                        <!--/ .items-per-page-->
                    </div>

                    <div class="col-xs-2 layout-switcher">
                        <a class="layout-list" href="javascript:void(0);"> <i class="fa fa-th-list"></i> </a>
                        <a class="layout-grid active" href="javascript:void(0);"> <i class="fa fa-th"></i> </a>
                    </div>
                    <!--/ .layout-switcher-->
                </div>

                <div class="col-md-12 clear">
                    <div id="list-type" class="proerty-th">
                        @foreach($properties as $property)
                        <div class="col-sm-6 col-md-4 p0">
                            <div class="box-two proerty-item">
                                <div class="item-thumb">
                                    <a href="{{ route('properties.show', ['property' => $property->id]) }}"><img src="{{ asset('images/properties/' . $property->primary_image) }}"></a>
                                </div>

                                <div class="item-entry overflow">
                                    <h5><a href="{{ route('properties.show', ['property' => $property->id]) }}">{{ $property->title }}</a></h5>
                                    <div class="dot-hr"></div>
                                    <span class="pull-left"><b> Area :</b> {{ $property->geo }}m </span>
                                    <span class="proerty-price pull-right"> $ {{ number_format($property->price) }}</span>
                                    <p style="display: none;">{{ $property->description }}</p>
                                    <div class="property-icon">
                                        <img src="{{ asset('build/assets/front/assets/img/icon/bed.png') }}" alt="bed"> ({{ $property->beds }}) |
                                        <img src="{{ asset('build/assets/front/assets/img/icon/shawer.png') }}" alt="bath"> ({{ $property->baths }}) |
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="pull-right">
                        <div class="pagination">
                            {{ $properties->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
