@extends('layouts.layout')
@section('child')
    <!-- Banner -->
    <section id="banner">
        <div class="container-fluid banner-image w-100 vh-60 d-flex justify-content-center align-items-center">
            <div class="row">
                <div class="text-center">
                    <h1 class="text-banner">Layanan Administrasi</h1>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Banner -->

    <!-- Informasi Layanan -->
    <section>
      <div class="container transition-container py-5 mt-5 mb-5">
        <div class="row">
            @foreach ($layananadministrasis as $item)
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card shadow-sm border-0 rounded-lg">
                        <div class="card-body text-center">
                            <div class="icon-circle mb-3">
                                <i class="bi bi-house-door-fill" style="font-size: 3rem; color: #007bff;"></i>
                            </div>
                            <h5 class="card-title">{{ $item->nama_layanan }}</h5>
                            <p class="card-text">{{ $item->deskripsi }}</p>
                            <p class="card-text">{!! $item->persyaratan !!}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    

    </section>
    <!-- End of Informasi Layanan -->
@endsection
