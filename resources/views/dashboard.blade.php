@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <!-- Card untuk Dashboard -->
            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white text-center">
                    <h4>Dashboard</h4>
                </div>
                <div class="card-body">
                    <h5 class="card-title">Selamat datang, {{ $username }}!</h5>
                    <p></p>
                    <hr>
                    <div class="d-flex justify-content-between">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
