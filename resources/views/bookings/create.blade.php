@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mt-5" style="margin: 0 auto;">
                <div class="card">
                    <div class="card-header bg-dark">
                        <h3 class="text-danger">
                            Booking Form
                            <a href="{{ route('home') }}" class="btn btn-primary btn-sm float-end">Back</a>
                        </h3>
                    </div>

                    <div class="card-body">
                        <form method="POST" action={{ route('bookings.store', $resort->id) }} enctype="multipart/form-data">

                            @csrf

                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif


                            <div class="mb-3">
                                <label for="name" class="form-label">User Name</label>
                                <input type="text" value="{{ old('name') }}"
                                    class="form-control @error('name') is-invalid @enderror" name="name" id="name"
                                    aria-describedby="name" placeholder="Enter Your Name">
                                @error('name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email address</label>
                                <input type="email" value="{{ old('email') }}"
                                    class="form-control @error('email') is-invalid @enderror" name="email" id="email"
                                    placeholder="Enter your valid email">
                                @error('email')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="phone" class="form-label">Phone No.</label>
                                <input type="number" value="{{ old('phone') }}"
                                    class="form-control @error('phone') is-invalid @enderror" name="phone" id="phone"
                                    placeholder="Enter Phone Number">
                                @error('phone')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="address" class="form-label">Address</label>
                                <input type="text" value="{{ old('address') }}"
                                    class="form-control @error('address') is-invalid @enderror" name="address" id="address"
                                    placeholder="Enter Address">
                                @error('address')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="nid" class="form-label">NID/Passport</label>
                                <input type="number" value="{{ old('nid') }}"
                                    class="form-control @error('nid') is-invalid @enderror" name="nid" id="nid"
                                    placeholder="Enter NID/Passport">
                                @error('nid')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="checkin" class="form-label">Check In</label>
                                <input type="date" value="{{ old('checkin') }}"
                                    class="form-control @error('checkin') is-invalid @enderror" name="checkin"
                                    id="checkin">
                                @error('checkin')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="checkout" class="form-label">Check Out</label>
                                <input type="date" value="{{ old('checkout') }}"
                                    class="form-control @error('checkout') is-invalid @enderror" id="checkout"
                                    name="checkout">
                                @error('checkout')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
