@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-dark text-danger text-center"><h3>Admin Panel</h3></div>
                <div class="card-body text-center">
                    <h1>Hello  {{ Auth::user()->name }},<br> Welcome to Admin Pannel!!</h1>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
