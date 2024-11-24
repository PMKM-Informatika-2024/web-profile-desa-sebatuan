@extends('layouts.layout')

@section('child')
    <!-- Banner -->
    <section id="banner">
        <div class="container-fluid banner-image w-100 vh-60 d-flex justify-content-center align-items-center">
            <div class="row">
                <div class="text-center">
                    <h1 class="text-banner">Layanan Publik</h1>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Banner -->

    <!-- Fasilitas Pendidikan -->
    <section id="fasilitas-pendidikan">
        <div class="container transition-container mt-5">
            <div class="text-center py-5">
                <h2 class="subjudul">Fasilitas Pendidikan</h2>
            </div>
            <div id="fasilitasPendidikanCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    @foreach ($fasilitasPendidikan as $index => $fasilitas)
                        <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                            <div class="row justify-content-center">
                                <div class="col-md-8">
                                    <div class="fasilitas-card position-relative overflow-hidden">
                                        <img src="{{ asset('storage/' . $fasilitas->gambar_fasilitas) }}" 
                                             alt="Foto {{ $fasilitas->nama_fasilitas }}" 
                                             class="fasilitas-img img-fluid w-100">
                                        <div class="fasilitas-overlay position-absolute top-0 start-0 w-100 h-100 d-flex flex-column justify-content-center align-items-center">
                                            <h3 class="fasilitas-name text-white mb-3">{{ $fasilitas->nama_fasilitas }}</h3>
                                            <a href="{{ $fasilitas->url_alamat }}" target="_blank">
                                                <button class="btn btn-primary btn-sm">Lihat Lokasi</button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#fasilitasPendidikanCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#fasilitasPendidikanCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>
    <!-- End of Fasilitas Pendidikan -->

    <!-- Fasilitas Publik -->
    <section id="fasilitas-publik">
        <div class="container transition-container mt-5">
            <div class="text-center py-5">
                <h2 class="subjudul">Fasilitas Publik</h2>
            </div>
            <div id="fasilitasPublikCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    @foreach ($fasilitasPublik as $index => $fasilitas)
                        <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                            <div class="row justify-content-center">
                                <div class="col-md-8">
                                    <div class="fasilitas-card position-relative overflow-hidden">
                                        <img src="{{ asset('storage/' . $fasilitas->gambar_fasilitas) }}" 
                                             alt="Foto {{ $fasilitas->nama_fasilitas }}" 
                                             class="fasilitas-img img-fluid w-100">
                                        <div class="fasilitas-overlay position-absolute top-0 start-0 w-100 h-100 d-flex flex-column justify-content-center align-items-center">
                                            <h3 class="fasilitas-name text-white mb-3">{{ $fasilitas->nama_fasilitas }}</h3>
                                            <a href="{{ $fasilitas->url_alamat }}" target="_blank">
                                                <button class="btn btn-primary btn-sm">Lihat Lokasi</button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#fasilitasPublikCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#fasilitasPublikCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>
    <!-- End of Fasilitas Publik -->
@endsection
