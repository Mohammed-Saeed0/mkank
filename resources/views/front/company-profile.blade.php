@extends('layouts.front.site')
@section('content')
<div class="container">
    <h1>Company Profile</h1>
    <div>
        <strong>Name:</strong> {{ $company->name }}
    </div>
    <div>
        <strong>Email:</strong> {{ $company->email }}
    </div>
    <!-- Add more company details as needed -->
</div>
@endsection
