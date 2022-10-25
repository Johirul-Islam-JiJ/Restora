@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card bg-secondary">
                    <div class="card-header text-danger text-center bg-dark"><h2>All Resort</h2></div>

                    <div class="row">
                        @foreach ($resorts as $resort)
                            <div class="col-md-4 mt-5">
                                <div class="card" style="width: 18rem;">
                                    <img src={{ "$resort->image" }} class="img-fluid" alt="">
                                    <div class="card-body">
                                        <h5 class="card-title"><span
                                                style="color: blue; font-weight=700;">{{ $resort->name }}</span></h5>
                                        <p class="card-text">Location <span
                                                style="color: red">{{ $resort->location }}</span></p>
                                        <p class="card-tex">{{ $resort->amount }}</p>
                                        <a href="{{ route('bookings.create',$resort) }}" class="btn btn-primary">Learn More</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
