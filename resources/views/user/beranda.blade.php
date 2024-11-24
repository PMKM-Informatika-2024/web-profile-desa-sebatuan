@extends('layouts.layout')

@section('child')

  <!-- Banner -->
  <section id="banner-beranda">
    <div class="container-fluid banner-image w-100 vh-100 d-flex justify-content-center align-items-center">
      <div class="row">
        <div class="text-center">
          <h2 class="text-banner-h2">Selamat Datang</h2>
          <h2 class="text-banner-h1">Website Resmi Desa Perapakan</h2>
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
          <h2 class="subjudul">Mengenal Tentang Desa Perapakan</h2>
          <p style="text-align: justify;">{!! implode(' ', array_slice(explode(' ', strip_tags($profiledesa->sejarah_desa)), 0, 40)) !!} ...</p>
          <a href="/profile-desa" class="btn-more mt-5 ">Selengkapnya..</a>
        </div>
        <div class="col-lg-7 mt-3">
          <img src="{{ asset('storage/'.$profiledesa->gambar_profiledesa) }}" class="image shadow-lg" alt="Desa Perapakan">
        </div>
      </div>
    </div>
  </section>
  <!-- End of Content -->
  <section id="video-profile" class="py-5">
    <div class="container transition-container mb-3 justify-content-center">
      <div class="row">
        <h2 class="subjudul text-center mb-5">Video Profile Desa ...</h2>
        <iframe class="rounded" width="560" height="315" src="https://www.youtube.com/embed/qIAq6TzBxdk?si=M2q1hTPSUpVh2Ske" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
      </div>
    </div>
  </section>
  
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
                                        <img src="{{ asset('storage/' . $perangkatdesa->gambar_perangkatdesa) }}" style="height:300px; object-fit:cover; object-position:center;" class="card-img-top rounded" alt="{{ $perangkatdesa->jabatan }}">
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
                <span class="carousel-control-next-icon" style=" " aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
          </div>
          <div class="row">
            <div class="col-lg-12 text-end pe-5 pb-3">
              <a href="/perangkat-desa" class="btn-more">Selengkapnya...</a>
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
        @foreach ($pengumumen as $pengumuman)    
        <div class="col-lg-3 col-md-4 mb-4">
          <div class="card shadow">
            <div class="card-body d-flex flex-column justify-content-between" style="height: 100%;">
              <img src="{{ asset('storage/' . $pengumuman->gambar_pengumuman) }}" style="height:300px; object-fit:cover; object-position:center;" class="card-img-top rounded">
              <h5 class="card-title text-center border-bottom pb-2 mb-3">{{ $pengumuman->judul }}</h5>
              <p class="card-text text-muted">
                <i class="fas fa-clock"></i> {{ \Carbon\Carbon::parse($pengumuman->created_at)->format('j M Y') }}
              </p>
              <p class="card-text">{!! \Illuminate\Support\Str::limit($pengumuman->deskripsi_singkat, 40) !!}</p>
              <a href="/detail-pengumuman/{{ $pengumuman->id }}" class="btn btn-link ms-auto">Read more...</a>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </section>
  <!-- End of Pengumuman -->

@endsection