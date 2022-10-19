@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-center bg-dark text-danger"><H2>Resort List</H2></div>

                <div class="card-body">

                    <table class="table table-striped table-dark">
                        <thead>
                            <tr>
                                <th scope="col">S.I</th>
                                <th scope="col">Resort Name</th>
                                <th scope="col">Location</th>
                                <th scope="col">Description</th>
                                <th scope="col">Image</th>
                                <th scope="col">Amount</th>
                                <th scope="col">Help</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($resorts as $resort)

                            <tr>
                                <td>{{ $loop->iteration}}</td>
                                <td>{{ $resort->name }}</td>
                                <td>{{ $resort->location }}</td>
                                <td>{{ $resort->description }}</td>
                                <td>
                                    <img src={{"$resort->image"}} class="img-fluid" height="80px" width="80px" alt="">
                                </td>
                                <td>{{ $resort->amount }}</td>
                                <td>{{ $resort->help }}</td>
                                <td>
                                    <a href="{{ route('resorts.edit', $resort->id) }}">Edit</a>

                                    <form action="{{ route('resorts.destroy', $resort->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button title="Delete" class="btn btn-danger">
                                            <i class="fa fa-trash">Delete</i>
                                        </button>
                                    </form>
                                </td>
                            </tr>

                            @endforeach
                        </tbody>
                    </table>
                    <a class="btn btn-success" href="{{ route('resorts.create') }}">Create Resort</a>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
