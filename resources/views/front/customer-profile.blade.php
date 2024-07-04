@extends('layouts.front.site')

@section('content')
    <div class="container">
        <h1>Customer Profile</h1>
        <div>
            <strong>Name:</strong> {{ $customer->name }}
        </div>
        <div>
            <strong>Email:</strong> {{ $customer->email }}
        </div>
        <!-- Add more customer details as needed -->
    </div>
@endsection
