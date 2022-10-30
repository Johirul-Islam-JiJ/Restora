@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header bg-dark text-danger">Resort List
                        <a class="btn btn-success btn-sm float-end" href="{{ route('resorts.index') }}">Back</a>
                    </div>



                    <div class="card-body">


                        <form method="POST" action="{{ route('resorts.store') }}" enctype="multipart/form-data">
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

                            <div class="form-group">
                                <label for="name">Resort Name</label>
                                <input type="text" class="form-control mb-3" id="name" name="name"
                                    value="{{ old('name') }}" placeholder="Enter Resort Name">
                            </div>


                            <div class="form-group">
                                <label for="location">Location</label>
                                <input type="text" class="form-control mb-3" id="location" name="location"
                                    value="{{ old('location') }}" placeholder="Enter location Name">
                            </div>

                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea type="text" class="form-control mb-3" id="description" name="description"
                                    value="{{ old('description') }}" placeholder="Enter Description"> </textarea>
                            </div>

                            <div class="form-group">
                                <label for="image">Image</label>
                                <input type="file" class="form-control mb-3" id="image" name="image"
                                    value="{{ old('image') }}">
                            </div>

                            <div class="form-group">
                                <label for="amount">Amount</label>
                                <input type="number" class="form-control mb-3" id="amount" name="amount"
                                    value="{{ old('amount') }}" placeholder="Amount">
                            </div>
                            <div class="form-group">
                                <label for="help">Contact Number</label>
                                <input type="number" class="form-control mb-3" id="help" name="help"
                                    value="{{ old('help') }}" placeholder="Contact Number">
                            </div>

                            <button type="submit" class="btn btn-primary">Submit</button>

                        </form>



                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
