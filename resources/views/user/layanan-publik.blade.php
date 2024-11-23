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
    <section id="fasilitas-pendidikan">
        <div class="container transition-container mt-5">
            <div class="row">
                <div class="text-center py-5">
                    <h2 class="subjudul">Fasilitas Pendidikan</h2>
                </div>
                <div class="container">
                    <div class="container">
                        <div class="row">
                            @foreach ($fasilitasPendidikan as $fasilitas)
                                <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                                    <div class="lembaga-card shadow-sm rounded">
                                        <div class="lembaga-img-container position-relative overflow-hidden rounded-top">
                                            <!-- Menampilkan gambar lembaga jika ada -->
                                            <img src="{{ asset('storage/' . $fasilitas->gambar_fasilitas) }}" alt="Foto {{ $fasilitas->gambar_fasilitas }}" class="lembaga-img img-fluid w-100"
                                                 onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                                            <i class="fas fa-building lembaga-icon position-absolute top-50 start-50 translate-middle text-white" style="display:none; font-size: 3rem;"></i>
                                        </div>
                                        <div class="lembaga-info p-3 bg-light rounded-bottom">
                                            <h3 class="lembaga-name text-dark mb-2">{{ $fasilitas->nama_fasilitas }}</h3>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>                    
                </div>
            </div>
        </div>
    </section>
    <!-- Fasilitas Pendidikan -->
    {{-- <section id="fasilitas-pendidikan">
        <div class="container-fluid transition-container p-0 overflow-hidden">
            <div class="row">
                <div class="text-center py-5">
                    <h2 class="subjudul">Fasilitas Pendidikan</h2>
                </div>
                <div class="container-fluid">
                    <div class="row">
                        @foreach ($fasilitasPendidikan as $fasilitas)
                            <div class="col-lg-4 col-md-6 g-0">
                                <div class="card-sekolah position-relative">
                                    <img src="{{ asset('storage/' . $fasilitas->gambar_fasilitas) }}" alt="{{ $fasilitas->nama_fasilitas }}">
                                    <div class="overlay position-absolute top-0 bottom-0 start-0 end-0 w-100 h-100">
                                        <div class="position-absolute top-50 start-50 translate-middle text-center w-90">
                                            <h5>{{ $fasilitas->nama_fasilitas }}</h5>
                                            <button class="button">Lokasi</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- End of Fasilitas Pendidikan -->

    <!-- Fasilitas Publik -->
    <section id="fasilitas-publik">
        <div class="container-fluid transition-container p-0 overflow-hidden">
            <div class="row">
                <div class="text-center py-5">
                    <h2 class="subjudul">Fasilitas Publik</h2>
                </div>
                <div class="container-fluid mb-5">
                    <div class="row">
                        @foreach ($fasilitasPublik as $fasilitas)
                            <div class="col-lg-4 col-md-6 g-0">
                                <div class="card-fasilitas-publik position-relative">
                                    <img src="{{ asset('storage/' . $fasilitas->gambar_fasilitas) }}" alt="{{ $fasilitas->nama_fasilitas }}">
                                    <div class="overlay position-absolute top-0 bottom-0 start-0 end-0 w-100 h-100">
                                        <div class="position-absolute top-50 start-50 translate-middle text-center w-90">
                                            <h5>{{ $fasilitas->nama_fasilitas }}</h5>
                                            <a href="{{ $fasilitas->url_alamat }}" target="_blank">
                                                <button class="btn btn-primary btn-sm mt-2">Lihat Lokasi</button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Fasilitas Publik -->
@endsection

