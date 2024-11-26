@extends('layouts.layout')

@section('child')
    <!-- Banner -->
    <section id="banner-beranda" class="bg-light">
        <div class="container-fluid banner-image w-100 vh-100 d-flex justify-content-center align-items-center">
            <div class="row">
                <div class="text-center">
                    <h2 class="text-banner-h2">Selamat Datang</h2>
                    <h2 class="text-banner-h1">Website Desa Perapakan</h2>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Banner -->

    <!-- Content Section -->
    <section id="content" class="py-5">
        <div class="container-fluid transition-container col-lg-10 shadow-sm p-4 rounded">
            <h2 class="subjudul mb-4 text-center fw-bold">Tentang Desa Perapakan</h2>
            <div class="row align-items-center">
                <!-- Image Content -->
                <div class="col-lg-6">
                    <div class="image-container position-relative overflow-hidden rounded shadow">
                        <img src="{{ asset('storage/' . $profiledesa->gambar_profiledesa) }}" class="img-fluid rounded"
                            alt="Desa Perapakan"
                            style="object-fit: cover; width: 100%; max-height: 400px; transition: transform 0.3s;">
                    </div>
                </div>

                <!-- Text Content -->
                <div class="col-lg-6">
                    <p class="text-muted" style="font-size: 1.1rem; line-height: 1.8; text-align: justify;">
                        {!! \Illuminate\Support\Str::limit($profiledesa->sejarah_desa, 400) !!}
                    </p>
                    <a href="/profile-desa"
                        class="btn btn-primary mt-4 px-4 py-2 d-inline-flex align-items-center shadow-sm">
                        <i class="fas fa-info-circle me-2"></i> Selengkapnya
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Content Section -->

    <!-- Video Profile Section -->
    <section id="video-profile" class="py-5">
        <div class="container-fluid transition-container col-lg-10 shadow-sm p-4 rounded">
            <h2 class="subjudul text-center mb-4 fw-bold">Video Profile Desa</h2>
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="ratio ratio-16x9 shadow-sm rounded">
                        <iframe class="rounded" src="https://www.youtube.com/embed/qIAq6TzBxdk?si=M2q1hTPSUpVh2Ske"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen>
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Video Profile Section -->

    <!-- Perangkat Desa Section -->
    <section id="perangkat-desa" class="py-5">
        <div class="container-fluid transition-container col-lg-10 shadow-sm p-4 rounded">
            <!-- Section Title -->
            <div class="row mb-4 justify-content-center text-center">
                <div class="col-12">
                    <h2 class="subjudul fw-bold">Perangkat Desa</h2>
                    <p class="text-muted">Berkenalan dengan perangkat desa yang mendukung kemajuan Desa Perapakan.</p>
                </div>
            </div>

            <!-- Carousel -->
            <div id="carouselPerangkatDesa" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
                <!-- Carousel Indicators -->
                <div class="carousel-indicators">
                    @foreach ($perangkatdesas->chunk(3) as $index => $chunk)
                        <button type="button" data-bs-target="#carouselPerangkatDesa"
                            data-bs-slide-to="{{ $index }}" class="{{ $index === 0 ? 'active' : '' }}"
                            aria-current="{{ $index === 0 ? 'true' : '' }}" aria-label="Slide {{ $index + 1 }}"></button>
                    @endforeach
                </div>

                <!-- Carousel Content -->
                <div class="carousel-inner">
                    @foreach ($perangkatdesas->chunk(3) as $index => $chunk)
                        <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                            <div class="row justify-content-center g-4">
                                @foreach ($chunk as $perangkatdesa)
                                    <div class="col-lg-3 col-md-4 col-sm-6">
                                        <div class="card shadow-sm border-0 rounded h-100">
                                            <img src="{{ asset('storage/' . $perangkatdesa->gambar_perangkatdesa) }}"
                                                alt="{{ $perangkatdesa->jabatan }}" class="card-img-top rounded-top"
                                                style="height: 250px; object-fit: cover; object-position: center;">
                                            <div class="card-body text-center">
                                                <h5 class="card-title fw-bold text-primary">{{ $perangkatdesa->nama }}</h5>
                                                <p class="card-text text-muted">{{ $perangkatdesa->jabatan }}</p>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endforeach
                </div>

                <!-- Carousel Controls -->
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselPerangkatDesa"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon bg-dark rounded-circle p-2" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselPerangkatDesa"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon bg-dark rounded-circle p-2" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>
    <!-- End of Perangkat Desa Section -->

    <!-- Pengumuman -->
    <section id="pengumuman" class="py-5 bg-white">
        <div class="container transition-container mb-3">
            <h2 class="subjudul text-center mb-5 fw-bold">Pengumuman</h2>
            <div class="row g-4 justify-content-center">
                @foreach ($pengumumen as $pengumuman)
                    <div class="col-lg-4 col-md-6">
                        <div class="card shadow-sm h-100">
                            <img src="{{ asset('storage/' . $pengumuman->gambar_pengumuman) }}"
                                style="height: 250px; object-fit: cover; object-position: center;"
                                class="card-img-top rounded-top">
                            <div class="card-body d-flex flex-column justify-content-between">
                                <h5 class="card-title text-center fw-bold text-primary mb-3">
                                    {{ $pengumuman->judul }}
                                </h5>
                                <p class="card-text text-muted small mb-2">
                                    <i class="fas fa-clock me-2"></i>
                                    {{ \Carbon\Carbon::parse($pengumuman->created_at)->format('j M Y') }}
                                </p>
                                <p class="card-text text-muted">
                                    {!! \Illuminate\Support\Str::limit($pengumuman->deskripsi_singkat, 100) !!}
                                </p>
                                <a href="/detail-pengumuman/{{ $pengumuman->id }}" class="btn btn-primary btn-sm mt-auto">
                                    Selengkapnya <i class="fas fa-arrow-right ms-1"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- End of Pengumuman -->
@endsection
