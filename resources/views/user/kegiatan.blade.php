@extends('layouts.layout')
@section('child')

<!-- Banner -->
<section id="banner">
    <div class="container-fluid banner-image w-100 vh-60 d-flex justify-content-center align-items-center">
        <div class="row">
            <div class="text-center">
                <h1 class="text-banner">Kegiatan</h1>
            </div>
        </div>
    </div>
</section>
<!-- End of Banner -->

<!-- Kegiatan -->
<section id="kegiatan">
  <div class="container-fluid transition-container py-5 mt-5 mb-5">
      <div class="row">
          <h2 class="subjudul text-center mb-5">Galeri Kegiatan Desa Perapakan</h2>
          @forelse ($kelolakegiatans as $item)
              <div class="col-lg-4 g-0">
                  <div class="card-kegiatan position-relative">
                      <img class="img-fluid p-3" src="{{ asset('storage/' . $item->gambar_kegiatan) }}" alt="{{ $item->nama_kegiatan }}">
                      <div class="overlay position-absolute top-0 bottom-0 start-0 end-0 w-100 h-100 d-flex justify-content-center align-items-center p-3">
                          <h5 class="text-center">{{ $item->nama_kegiatan }}</h5>
                      </div>
                  </div>
              </div>
          @empty
              <p class="text-center">Belum ada kegiatan yang tersedia.</p>
          @endforelse
      </div>
  </div>
</section>


<!-- End of Kegiatan -->

@endsection
