@extends('layouts.layout')
@section('child')
    <!-- Banner -->
    <section id="banner">
        <div class="container-fluid banner-image w-100 vh-60 d-flex justify-content-center align-items-center">
            <div class="row">
                <div class="text-center">
                    <h1 class="text-banner">Lembaga Desa</h1>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Banner -->

    <!-- Lembaga Desa -->
    <section id="lembaga-desa">
        <div class="container transition-container mt-5">
            <div class="row">
                <div class="container">
                    <div class="container">
                        <div class="row">
                            @foreach ($lembagadesas as $lembaga)
                                <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                                    <div class="lembaga-card shadow-sm rounded">
                                        <div class="lembaga-img-container position-relative overflow-hidden rounded-top">
                                            <!-- Menampilkan gambar lembaga jika ada -->
                                            <img src="{{ asset('storage/' . $lembaga->gambar_lembaga) }}" alt="Foto {{ $lembaga->nama_lembaga }}" class="lembaga-img img-fluid w-100"
                                                 onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                                            <i class="fas fa-building lembaga-icon position-absolute top-50 start-50 translate-middle text-white" style="display:none; font-size: 3rem;"></i>
                                        </div>
                                        <div class="lembaga-info p-3 bg-light rounded-bottom">
                                            <h3 class="lembaga-name text-dark mb-2">{{ $lembaga->nama_lembaga }}</h3>
                                            <p class="lembaga-alamat text-muted mb-2">{{ $lembaga->alamat_lembaga }}</p>
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
    <!-- End of Lembaga Desa -->
@endsection
