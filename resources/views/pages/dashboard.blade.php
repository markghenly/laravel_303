@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row">
        <!-- Bell with Run Title Card -->
        <div class="col-md-4">
            <div class="card text-center bg-success">
                <div class="card-body">
                    <i class="bi bi-bell" style="font-size: 2rem;"></i>
                    <h2 class="card-title mt-3">Laravel Murao2</h2>
                    <p class="card-text">Notification</p>
                </div>
            </div>
        </div>
        <!-- Likes with 520 Title Card -->
        <div class="col-md-4">
            <div class="card text-center bg-primary">
                <div class="card-body">
                    <i class="bi bi-hand-thumbs-up" style="font-size: 2rem;"></i>
                    <h2 class="card-title mt-3">520</h2>
                    <p class="card-text">Likes</p>
                </div>
            </div>
        </div>
        <!-- Warning with Warning Title Card -->
        <div class="col-md-4">
            <div class="text-center bg-danger">
            
                <div class="card-body">
                    <i class="bi bi-exclamation-triangle" style="font-size: 2rem;"></i>
                    <h2 class="card-title mt-3">Warning</h2>
                    <p class="card-text fw-bold">Do</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container mt-5">
    <div class="card">
        <div class="card-header">
            <h2 class="fw-bold">Repost for 2024</h2>
        </div>
        <div class="card-body">
            <p class="fw-bold">Report for 2024</p>
            <p class="fw-bold">Company financial status</p> 
        </div>
        <div class="card-footer">
            <button class="btn btn-primary fw-bold">Save</button>
        </div>
    </div>
</div>
@endsection

@push('styles')
<!-- Bootstrap CSS -->
<link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.9.1/font/bootstrap-icons.min.css" rel="stylesheet">
@endpush

@push('scripts')
<!-- Bootstrap JS and Popper.js -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
@endpush
