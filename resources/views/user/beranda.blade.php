@extends('layouts.layout')

@section('child')

  <!-- Banner -->
  <section id="banner-beranda">
    <div class="container-fluid banner-image w-100 vh-100 d-flex justify-content-center align-items-center">
      <div class="row">
        <div class="text-center">
          <h2 class="text-banner-h2"> Selamat di Datang </h2>
          <h1 class="text-banner-h1">Desa Parapakan</h1>
        </div>
        <div class="text-center mt-3">
          <a href="/profile-desa" class="btn-more">Lihat..</a>
        </div>
      </div>
    </div>
  </section>
  <!-- End of Banner -->


  <!-- Content -->
  <section id="content" class="py-5">
    <div class="container transition-container col-lg-9 mt-5">
      <div class="row align-items-center">
        <div class="col-lg-5 mt-3 d-flex flex-column justify-content-between">
          <h2 class="subjudul">Mengenal Tentang Desa Sungai Keran...</h2>
          <p style="text-align: justify;">Lorem, ipsum dolor sit amet consectetur adipisicing elit.
            Nobis, dolorem. Odio
            impedit consequatur ipsam
            assumenda est quidem molestias deserunt eaque ad quis molestiae reiciendis optio
            blanditiis neque atque
            architecto laborum quibusdam voluptas nam, maiores cum eius voluptatem. Ab,
            blanditiis iusto sapiente nam
            iure provident culpa? Pariatur possimus modi consectetur nihil!.......</p>
          <a href="profil-desa.html" class="btn-more mt-5 ">Selengkapnya..</a>
        </div>
        <div class="col-lg-7 mt-3">
          <img src="img/1.jpg" class="image shadow-lg" alt="Desa Sungai Keran">
        </div>
      </div>
    </div>
  </section>
  <!-- End of Content -->

  <!-- Perangkat Desa -->
<section id="perangkat-desa" class="py-5 mb-5">
    <div class="container-fluid transition-container perangkat-desa-container shadow">
        <div class="row mb-4 justify-content-center text-center">
            <div class="col-12">
                <h2 class="subjudul text-center">Perangkat Desa</h2>
            </div>
        </div>
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
            <div class="carousel-indicators">
                @foreach($perangkatdesas->chunk(3) as $index => $chunk)
                    <button type="button" data-bs-target="#carouselExampleIndicators" 
                        data-bs-slide-to="{{ $index }}" class="{{ $index === 0 ? 'active' : '' }}" 
                        aria-current="{{ $index === 0 ? 'true' : '' }}" 
                        aria-label="Slide {{ $index + 1 }}"></button>
                @endforeach
            </div>
            <div class="carousel-inner">
                @foreach($perangkatdesas->chunk(3) as $index => $chunk)
                    <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                        <div class="row justify-content-center">
                            @foreach($chunk as $perangkatdesa)
                                <div class="col-lg-2 col-md-4 col-sm-6 mb-4">
                                    <div class="card shadow-sm border-0 rounded">
                                        <img src="{{ asset('storage/' . $perangkatdesa->gambar_perangkatdesa) }}" style="max-height:300px" class="card-img-top rounded" alt="{{ $perangkatdesa->jabatan }}">
                                        <div class="card-body text-center">
                                          <h4 class="card-title">{{ $perangkatdesa->nama }}</h4>
                                            <h5 class="card-title">{{ $perangkatdesa->jabatan }}</h5>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        <div class="row">
          <div class="col-lg-12 text-end pe-5 pb-3">
            <a href="perangkat-desa.html" class="btn-more">Selengkapnya...</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- End of Perangkat Desa -->

  <!-- Pengumuman -->
  <section id="pengumuman" class="py-5">
    <div class="container transition-container mb-3 justify-content-center">
      <div class="row">
        <h2 class="subjudul text-center mb-5">Pengumuman</h2>
        <div class="col-lg-3 col-md-4 mb-4">
          <div class="card shadow">
            <div class="card-body d-flex flex-column justify-content-between" style="height: 100%;">
              <h5 class="card-title text-center border-bottom pb-2 mb-3">Pengumuman 1</h5>
              <p class="card-text text-muted">
                <i class="fas fa-clock"></i> 12 Oktober 2024
              </p>
              <p class="card-text">Ini adalah isi pengumuman 1. Deskripsi singkat
                mengenai pengumuman ini.</p>

              <a href="halaman_pengumuman_1.html" class="btn btn-link ms-auto">Read more...</a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mb-4">
          <div class="card shadow">
            <div class="card-body d-flex flex-column justify-content-between" style="height: 100%;">
              <h5 class="card-title text-center border-bottom pb-2 mb-3">Pengumuman 1</h5>
              <p class="card-text text-muted">
                <i class="fas fa-clock"></i> 12 Oktober 2024
              </p>
              <p class="card-text">Ini adalah isi pengumuman 1. Deskripsi singkat
                mengenai pengumuman ini.</p>

              <a href="halaman_pengumuman_1.html" class="btn btn-link ms-auto">Read more...</a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mb-4">
          <div class="card shadow">
            <div class="card-body d-flex flex-column justify-content-between" style="height: 100%;">
              <h5 class="card-title text-center border-bottom pb-2 mb-3">Pengumuman 1</h5>
              <p class="card-text text-muted">
                <i class="fas fa-clock"></i> 12 Oktober 2024
              </p>
              <p class="card-text">Ini adalah isi pengumuman 1. Deskripsi singkat
                mengenai pengumuman ini.</p>

              <a href="halaman_pengumuman_1.html" class="btn btn-link ms-auto">Read more...</a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mb-4">
          <div class="card shadow">
            <div class="card-body d-flex flex-column justify-content-between" style="height: 100%;">
              <h5 class="card-title text-center border-bottom pb-2 mb-3">Pengumuman 1</h5>
              <p class="card-text">
                <i class="fas fa-clock"></i> 12 Oktober 2024
              </p>
              <p class="card-text">Ini adalah isi pengumuman 1. Deskripsi singkat
                mengenai pengumuman ini.</p>

              <a href="halaman_pengumuman_1.html" class="btn btn-link ms-auto">Read more...</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End of Pengumuman -->

@endsection