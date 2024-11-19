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
        <!-- Layanan 1: Surat Keterangan Domisili -->
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="card shadow-sm border-0 rounded-lg">
            <div class="card-body text-center">
              <div class="icon-circle mb-3">
                <i class="bi bi-house-door-fill" style="font-size: 3rem; color: #007bff;"></i>
              </div>
              <h5 class="card-title">Surat Keterangan Domisili</h5>
              <p class="card-text">Dapatkan surat keterangan domisili secara online dengan mudah.</p>
            </div>
            <div class="card-footer bg-white border-0 text-center">
              <button class="btn btn-toggle" data-bs-toggle="collapse" data-bs-target="#collapseDomisili"
                aria-expanded="false" aria-controls="collapseDomisili">
                <i class="bi bi-chevron-down toggle-icon"></i>
              </button>
            </div>
          </div>
          <div id="collapseDomisili" class="accordion-collapse collapse mt-2">
            <div class="accordion-body border rounded shadow-sm p-3">
              <h6 class="fw-bold">Persyaratan:</h6>
              <ul>
                <li>Fotokopi KTP</li>
                <li>Fotokopi Kartu Keluarga</li>
                <li>Surat Pengantar RT/RW</li>
                <li>Formulir pengajuan surat keterangan domisili</li>
              </ul>
            </div>
          </div>
        </div>

        <!-- Layanan 2: Surat Keterangan Usaha -->
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="card shadow-sm border-0 rounded-lg">
            <div class="card-body text-center">
              <div class="icon-circle mb-3">
                <i class="bi bi-briefcase-fill" style="font-size: 3rem; color: #007bff;"></i>
              </div>
              <h5 class="card-title">Surat Keterangan Usaha</h5>
              <p class="card-text">Ajukan surat keterangan usaha dengan mudah dan cepat.</p>
            </div>
            <div class="card-footer bg-white border-0 text-center">
              <button class="btn btn-toggle" data-bs-toggle="collapse" data-bs-target="#collapseUsaha"
                aria-expanded="false" aria-controls="collapseUsaha">
                <i class="bi bi-chevron-down toggle-icon"></i>
              </button>
            </div>
          </div>
          <div id="collapseUsaha" class="accordion-collapse collapse mt-2">
            <div class="accordion-body border rounded shadow-sm p-3">
              <h6 class="fw-bold">Persyaratan:</h6>
              <ul>
                <li>Fotokopi KTP</li>
                <li>Surat Pengantar RT/RW</li>
                <li>Formulir pengajuan surat keterangan usaha</li>
              </ul>
            </div>
          </div>
        </div>

        <!-- Layanan 3: Surat Keterangan Tidak Mampu -->
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="card shadow-sm border-0 rounded-lg">
            <div class="card-body text-center">
              <div class="icon-circle mb-3">
                <i class="bi bi-file-earmark-text-fill" style="font-size: 3rem; color: #007bff;"></i>
              </div>
              <h5 class="card-title">Surat Keterangan Tidak Mampu</h5>
              <p class="card-text">Ajukan SKTM untuk keperluan administrasi.</p>
            </div>
            <div class="card-footer bg-white border-0 text-center">
              <button class="btn btn-toggle" data-bs-toggle="collapse" data-bs-target="#collapseSKTM"
                aria-expanded="false" aria-controls="collapseSKTM">
                <i class="bi bi-chevron-down toggle-icon"></i>
              </button>
            </div>
          </div>
          <div id="collapseSKTM" class="accordion-collapse collapse mt-2">
            <div class="accordion-body border rounded shadow-sm p-3">
              <h6 class="fw-bold">Persyaratan:</h6>
              <ul>
                <li>Fotokopi KTP</li>
                <li>Fotokopi Kartu Keluarga</li>
                <li>Surat Pengantar RT/RW</li>
                <li>Formulir pengajuan SKTM</li>
              </ul>
            </div>
          </div>
        </div>

        <!-- Layanan 4: Surat Izin Keramaian -->
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="card shadow-sm border-0 rounded-lg">
            <div class="card-body text-center">
              <div class="icon-circle mb-3">
                <i class="bi bi-calendar2-event-fill" style="font-size: 3rem; color: #007bff;"></i>
              </div>
              <h5 class="card-title">Surat Izin Keramaian</h5>
              <p class="card-text">Dapatkan izin keramaian dengan prosedur yang cepat.</p>
            </div>
            <div class="card-footer bg-white border-0 text-center">
              <button class="btn btn-toggle" data-bs-toggle="collapse" data-bs-target="#collapseKeramaian"
                aria-expanded="false" aria-controls="collapseKeramaian">
                <i class="bi bi-chevron-down toggle-icon"></i>
              </button>
            </div>
          </div>
          <div id="collapseKeramaian" class="accordion-collapse collapse mt-2">
            <div class="accordion-body border rounded shadow-sm p-3">
              <h6 class="fw-bold">Persyaratan:</h6>
              <ul>
                <li>Fotokopi KTP</li>
                <li>Surat Pengantar RT/RW</li>
                <li>Rincian acara yang akan diselenggarakan</li>
              </ul>
            </div>
          </div>
        </div>

        <!-- Layanan 5: Surat Keterangan Kehilangan -->
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="card shadow-sm border-0 rounded-lg">
            <div class="card-body text-center">
              <div class="icon-circle mb-3">
                <i class="bi bi-exclamation-triangle-fill" style="font-size: 3rem; color: #007bff;"></i>
              </div>
              <h5 class="card-title">Surat Keterangan Kehilangan</h5>
              <p class="card-text">Laporkan kehilangan dokumen atau barang secara resmi.</p>
            </div>
            <div class="card-footer bg-white border-0 text-center">
              <button class="btn btn-toggle" data-bs-toggle="collapse" data-bs-target="#collapseKehilangan"
                aria-expanded="false" aria-controls="collapseKehilangan">
                <i class="bi bi-chevron-down toggle-icon"></i>
              </button>
            </div>
          </div>
          <div id="collapseKehilangan" class="accordion-collapse collapse mt-2">
            <div class="accordion-body border rounded shadow-sm p-3">
              <h6 class="fw-bold">Persyaratan:</h6>
              <ul>
                <li>Fotokopi KTP</li>
                <li>Surat Pengantar RT/RW</li>
                <li>Detail barang atau dokumen yang hilang</li>
              </ul>
            </div>
          </div>
        </div>

        <!-- Layanan 6: Surat Izin Usaha Mikro Kecil (IUMK) -->
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="card shadow-sm border-0 rounded-lg">
            <div class="card-body text-center">
              <div class="icon-circle mb-3">
                <i class="bi bi-shop-window" style="font-size: 3rem; color: #007bff;"></i>
              </div>
              <h5 class="card-title">Surat Izin Usaha Mikro Kecil (IUMK)</h5>
              <p class="card-text">Ajukan izin usaha mikro kecil secara online.</p>
            </div>
            <div class="card-footer bg-white border-0 text-center">
              <button class="btn btn-toggle" data-bs-toggle="collapse" data-bs-target="#collapseIUMK"
                aria-expanded="false" aria-controls="collapseIUMK">
                <i class="bi bi-chevron-down toggle-icon"></i>
              </button>
            </div>
          </div>
          <div id="collapseIUMK" class="accordion-collapse collapse mt-2">
            <div class="accordion-body border rounded shadow-sm p-3">
              <h6 class="fw-bold">Persyaratan:</h6>
              <ul>
                <li>Fotokopi KTP</li>
                <li>Fotokopi NPWP (jika ada)</li>
                <li>Surat Pengantar RT/RW</li>
                <li>Formulir pengajuan IUMK</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>

  </section>
  <!-- End of Informasi Layanan -->
@endsection