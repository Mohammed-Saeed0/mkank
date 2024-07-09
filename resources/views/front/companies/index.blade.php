@extends('layouts.front.site')
@section('content')

<div class="page-head">
    <div class="container">
        <div class="row">
            <div class="page-head-content">
                <h1 class="page-title">Companies Page</h1>
            </div>
        </div>
    </div>
</div>
<!-- End page header -->

<section class="listings">
    <h1 style="text-align: center; margin-bottom: 36px;" class="heading">Real Estate Companies</h1>
    <div class="box-container">
        @foreach($companies as $company)
        <div class="box">
            <div class="thumb">
                <!-- Assuming you have 'logo' field in your Company model -->
                <img src="{{  $company->logo }}" alt="{{ $company->name }}">
            </div>
            <div style="margin-bottom: 8px; border-bottom: 1px solid;">
                <h3 class="name">{{ $company->name }}</h3>
            </div>
            <div style="margin-bottom: 8px; border-bottom: 1px solid;">
                <h3 class="name">{{ $company->properties_count }}<span style="margin-left: 6px;"><i class='bx bxs-home'></i></span></h3>
            </div>
            <p class="location"><i class="fas fa-map-marker-alt"></i><span>{{ $company->company_location }}</span></p>
            <!-- Link to view company details -->
            <a href="{{ route('companies.show', $company->id) }}" class="btn">View</a>
        </div>
        @endforeach
    </div>
</section>

@endsection
