@extends('layouts.front.site')

@section('content')

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header text-center">
                    <h3>Profile</h3>
                </div>
                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <p id="name">{{ $customer->name }}</p>
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <p id="email">{{ $customer->email }}</p>
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone Number:</label>
                        <p id="phone">{{ $customer->phone }}</p>
                    </div>
                    <div class="text-center">
                        <a href="{{ route('customer.edit') }}" class="btn btn-primary">Edit Profile</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
