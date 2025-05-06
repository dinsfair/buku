@extends('layouts.app')

@section('content')
<div class="container py-4">
    <h1 class="mb-4">Borrowies Friends</h1>

    <div class="card shadow-sm">
        <div class="card-header" style="background-color: #f0e6ff; color: #333;">
            <h5 class="mb-0">Informasi Pengguna</h5>
        </div>
        <div class="card-body">
            <div class="row mb-3">
                <div class="col-md-4 fw-bold">Username:</div>
                <div class="col-md-8">{{ $username ?? 'N/A' }}</div>
            </div>
            <div class="row mb-3">
                <div class="col-md-4 fw-bold">Password:</div>
                <div class="col-md-8">••••••••</div>
            </div>
        </div>
    </div>
</div>
@endsection
