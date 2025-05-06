@extends('layouts.app')

@section('content')
<div class="alert alert-success">
    Hello Borrowies Friends, {{ $username }}!
</div>
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-10 position-relative">
            <div class="rounded-3 overflow-hidden shadow">
                <img src="{{ asset('gambar/library.jpg') }}"
                     class="object-fit-cover w-100 h-50"
                     alt="Library Image">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex flex-column justify-content-center align-items-center text-white p-4" style="background-color: rgba(255, 255, 255, 0.411)">
                    <h1 class="display-5 fw-bold mb-4" style="color: #cf7cba; text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);">Borrowies Book</h1>
                    <p class="text-center lead" style="max-width: 800px; color: #fd8de1; font-weight: 600 !important; text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5)">
                        Peminjaman buku. Website ini membantu borrowies friends untuk mendata buku yang dipinjam,
                        belum dikembalikan, dan telah dikembalikan. Borrowies book juga mencatat buku apa saja yang borrowies friends pinjam.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row mt-4 px-4">
    <div class="col-md-4">
        <div class="card bg-pink text-dark mb-3">
            <div class="card-header">Total Buku Dipinjam</div>
            <div class="card-body">
                <h5 class="card-title">5</h5>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card bg-green text-dark mb-3">
            <div class="card-header">Buku Dikembalikan</div>
            <div class="card-body">
                <h5 class="card-title">18</h5>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card bg-purple text-dark mb-3">
            <div class="card-header">Buku Belum Dikembalikan</div>
            <div class="card-body">
                <h5 class="card-title">5</h5>
            </div>
        </div>
    </div>
</div>

<style>
    .bg-pink {
        background-color: #ffcce6 !important;
    }
    .bg-green {
        background-color: #ccffcc !important;
    }
    .bg-purple {
        background-color: #e6ccff !important;
    }
</style>
@endsection
