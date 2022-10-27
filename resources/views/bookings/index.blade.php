@extends('layouts.app')

@section('styles')
    <style>
        .w-5 {
            display: none;
        }
    </style>
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header text-center bg-dark">
                        <h3 class="text-danger">
                            Booking List
                            <a href="{{ route('homepage') }}" class="btn btn-primary btn-sm float-end">Back</a>
                        </h3>
                    </div>

                    <table class=" table table-striped table-dark">
                        <thead>
                            <tr>
                                <th scope="col">SI.</th>
                                <th scope="col">Resort name</th>
                                <th scope="col">Customer Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Phone</th>
                                <th scope="col">NID</th>
                                <th scope="col">Address</th>
                                <th scope="col">CheckIn</th>
                                <th scope="col">CheckOut</th>
                                {{-- <th scope="col">Action</th> --}}
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($bookings as $booking)
                                <tr>
                                    <td>{{ $loop->index + 1 }}</td>
                                    <td>{{ $booking->resort->name }}</td>
                                    <td>{{ $booking->name }}</td>
                                    <td>{{ $booking->email }}</td>
                                    <td>{{ $booking->phone }}</td>
                                    <td>{{ $booking->nid }}</td>
                                    <td>{{ $booking->address }}</td>
                                    <td>{{ $booking->checkin }}</td>
                                    <td>{{ $booking->checkout }}</td>
                                    <td>{{ $booking->delete }}</td>
                                    {{-- <td>
                                        <form action="{{ route('bookings.destroy', $booking->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button title="Delete" class="btn btn-danger">
                                                <i class="fa fa-trash">Delete</i>
                                            </button>
                                        </form>
                                    </td> --}}
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
            <span>
                {{ $bookings->links() }}
            </span>
        </div>
    </div>
@endsection
