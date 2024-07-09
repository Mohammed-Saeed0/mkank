@extends('layouts.front.site')

@section('content')
<div class="properties-area recent-property" id="searchResults" style="background-color: #FFF;">
    <div class="container">
        <div class="row">
            <div class="col-md-9 pr0 padding-top-40 properties-page">
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
                        </ul>

                        <div class="items-per-page">
                            <label for="items_per_page"><b>Property per page :</b></label>
                            <div class="sel">
                                <select id="items_per_page" name="per_page" onchange="window.location.href=this.value;">
                                    <option value="{{ route('properties.search', ['per_page' => 3, 'query' => request('query')]) }}" {{ request('per_page') == 3 ? 'selected' : '' }}>3</option>
                                    <option value="{{ route('properties.search', ['per_page' => 6, 'query' => request('query')]) }}" {{ request('per_page') == 6 ? 'selected' : '' }}>6</option>
                                    <option value="{{ route('properties.search', ['per_page' => 9, 'query' => request('query')]) }}" {{ request('per_page') == 9 ? 'selected' : '' }}>9</option>
                                    <option value="{{ route('properties.search', ['per_page' => 12, 'query' => request('query')]) }}" {{ request('per_page') == 12 ? 'selected' : '' }}>12</option>
                                    <option value="{{ route('properties.search', ['per_page' => 15, 'query' => request('query')]) }}" {{ request('per_page') == 15 ? 'selected' : '' }}>15</option>
                                    <option value="{{ route('properties.search', ['per_page' => 30, 'query' => request('query')]) }}" {{ request('per_page') == 30 ? 'selected' : '' }}>30</option>
                                    <option value="{{ route('properties.search', ['per_page' => 45, 'query' => request('query')]) }}" {{ request('per_page') == 45 ? 'selected' : '' }}>45</option>
                                    <option value="{{ route('properties.search', ['per_page' => 60, 'query' => request('query')]) }}" {{ request('per_page') == 60 ? 'selected' : '' }}>60</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-2 layout-switcher">
                        <a class="layout-list" href="javascript:void(0);"> <i class="fa fa-th-list"></i> </a>
                        <a class="layout-grid active" href="javascript:void(0);"> <i class="fa fa-th"></i> </a>
                    </div>
                </div>
                <div class="col-md-12 clear">
                    <div id="list-type" class="proerty-th">

                        @if (!empty($properties))
                        @forelse ($properties as $property)
                            <div class="col-sm-6 col-md-4 p0">
                                <div class="box-two proerty-item">
                                    <div class="item-thumb">
                                        <a href="{{ route('properties.show', $property['id']) }}">
                                            <img src="{{ asset('images/properties/' . $property['primary_image']) }}" alt="{{ $property['title'] }}">
                                        </a>
                                    </div>
                                    <div class="item-entry overflow">
                                        <h5><a href="{{ route('properties.show', $property['id']) }}">{{ $property['title'] }}</a></h5>
                                        <div class="dot-hr"></div>
                                        <span class="pull-left"><b> Area :</b> {{ $property['geo'] }}m² </span>
                                        <span class="proerty-price pull-right"> $ {{ number_format($property['price'], 2) }}</span>
                                        <p style="display: none;">{{ $property['description'] }}</p>
                                        <div class="property-icon">
                                            <img src="{{ asset('build/assets/front/assets/img/icon/bed.png') }}" alt="bed"> ({{ $property['beds'] }}) |
                                            <img src="{{ asset('build/assets/front/assets/img/icon/shawer.png') }}" alt="bath"> ({{ $property['baths'] }}) |
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <p>query.</p>
                        @endforelse
                    @else
                        <p>No properties found matching your query.</p>
                    @endif

                    </div>
                </div>

                <div class="col-md-12">
                    <div class="pull-right">
                        <div class="pagination">
                            {{-- {{ $properties->appends(request()->input())->links() }} --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
