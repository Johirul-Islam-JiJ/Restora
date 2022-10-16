@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Update Resort
                    <a class="btn btn-success btn-sm " href="{{ route('resorts.index') }}">Back</a>
                </div>


                <div class="card-body">


                    <form method="POST" action="{{ route('resorts.update', $resort->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')


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
                            <label for="name">Name</label>
                            <input type="text" class="form-control mb-3" id="name" name="name" value="{{ $resort->name }}"
                                placeholder="Enter Resort Name">
                        </div>

                        <div class="form-group">
                            <label for="location">Location</label>
                            <input type="text" class="form-control mb-3" id="location" name="location" value="{{ $resort->location }}"
                                placeholder="Enter Location">
                        </div>

                        <div class="form-group">
                            <label for="description">Description</label>
                            <input type="text" class="form-control mb-3" id="description" name="description" value="{{ $resort->description }}"
                                placeholder="Enter Description">
                        </div>

                        <div class="form-group">
                            <label for="image">Image</label>
                            <input type="file" class="form-control mb-3" id="image" name="image" value="{{ $resort->image }}" >
                        </div>

                        <div class="form-group">
                            <label for="amount">Amount</label>
                            <input type="text" class="form-control mb-3" id="amount" name="amount" value="{{ $resort->amount }}"
                                placeholder="Amount">
                        </div>
                        <div class="form-group">
                            <label for="help">Help</label>
                            <input type="text" class="form-control mb-3" id="help" name="help" value="{{ $resort->help }}"
                                placeholder="help">
                        </div>

                        <button type="submit" class="btn btn-primary">Update</button>

                    </form>



                </div>
            </div>
        </div>
    </div>
</div>
@endsection
