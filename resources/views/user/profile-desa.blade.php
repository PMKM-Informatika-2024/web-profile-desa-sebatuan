@extends('layouts.layout')
@section('child')


<!-- Banner -->
  <section id="banner">
    <div class="container-fluid banner-image w-100 vh-60 d-flex justify-content-center align-items-center">
      <div class="row">
        <div class="text-center">
          <h1 class="text-banner">Profile Desa</h1>
        </div>
      </div>
    </div>
  </section>
  <!-- End of Banner -->

  <!-- Content -->
  <section id="sejarah-desa" class="container transition-container py-5">
    <h2 class="subjudul text-center mb-4">Sejarah Desa</h2>
    <div class="row">
      <div class="container">
        <img src="{{ asset('storage/'.$profiledesa->gambar_profiledesa) }}" alt="no image yet" id="previewImage" >
        {!! $profiledesa->sejarah_desa !!}
      </div>
      {{-- <div class="container transition-container">
        <div class="row">
          <div class="col-lg-4 col-md-6">
            <img src="{{ asset('storage/'.$profiledesa->gambar_desa) }}" id="image-desa" alt="Gambar Desa" class="img-fluid">
          </div>
        </div>
      </div> --}}
    </div>
    </div>
  </section>
  <!-- End of Content -->

  <!-- Visi Misi -->
  <section id="visi-misi" class="py-5">
    <div class="container transition-container">
      <div class="row justify-content-center">
        <div class="col-lg-10">
          <div class="card-visimisi mb-3">
            <div class="card-header">
              <h5 class="mb-2">Visi</h5>
            </div>
            <div class="card-body">
              <p class="card-text">
                {{ $profiledesa->visi_desa }}
              </p>
            </div>
          </div>
          <div class="card-visimisi mt-3 mb-5">
            <div class="card-header">
              <h5 class="mb-2">Misi</h5>
            </div>
            <div class="card-body">
              <div class="card-text" style="list-style-type: disc;">
                {!! $profiledesa->misi_desa !!}
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End of Visi -->

  <!-- Kependudukan -->
  <section id="kependudukan" class="py-5">
    <div class="container-fluid transition-container">
      <h2 class="subjudul mb-5 text-center">Kependudukan</h2>
      <div class="row text-center justify-content-center">
        <div class="col-lg-6 mb-3">
          <div class="card p-3">
            <div class="card-body">
              <h5 class="card-title">Total Jiwa</h5>
              <span class="counter display-4" data-target="{{ $profiledesa->total_jiwa }}">0</span>
            </div>
          </div>
        </div>
        <div class="col-lg-6 mb-3">
          <div class="card p-3">
            <div class="card-body">
              <h5 class="card-title">Total KK</h5>
              <span class="counter display-4" data-target="{{ $profiledesa->total_kk }}">0</span>
            </div>
          </div>
        </div>
        <div class="col-lg-6 mb-3">
          <div class="card p-3">
            <div class="card-body">
              <h5 class="card-title">Dusun</h5>
              <span class="counter display-4" data-target="{{ $profiledesa->total_dusun }}">0</span>
            </div>
          </div>
        </div>
        <div class="col-lg-6 mb-3">
          <div class="card p-3">
            <div class="card-body">
              <h5 class="card-title">Jumlah RT</h5>
              <span class="counter display-4" data-target='{{ $profiledesa->total_rt }}'>0</span>
            </div>
          </div>
        </div>
      </div>
      <div class="container-fluid my-5 mt-1">
        <div class="row text-center justify-content-center">
          <!-- Diagram Lingkaran Suku -->
          <div class="col-lg-6 mb-4 d-flex flex-column align-items-center">
            <h5 class="mb-4 text-center w-100">Suku</h5>
            <div class="card chart-card w-75 p-3">
              <canvas id="sukuChart"></canvas>
            </div>
          </div>

          <!-- Diagram Lingkaran Agama -->
          <div class="col-lg-6 mb-4 d-flex flex-column align-items-center">
            <h5 class="mb-4 text-center w-100">Agama</h5>
            <div class="card chart-card w-75 p-3">
              <canvas id="agamaChart"></canvas>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End of Kependudukan -->

  <!-- Kantor Desa -->
  <section id="kantor-desa" class="py-5">
    <div class="container transition-container">
      <h2 class="subjudul text-center mb-4">Kantor Desa Sungai Keran</h2>
      <div class="row">
        <div class="col-lg-12">
          {!! $profiledesa->peta_desa !!}
        </div>
      </div>
    </div>
  </section>
  <!-- End of Kantor Desa -->

  @endsection
  @section('kodejsenduser')
  <script>
    const dataSuku = [
    {{ $profiledesa->total_melayu }},
    {{ $profiledesa->total_madura }},
    {{ $profiledesa->total_tionghoa }},
    {{ $profiledesa->total_dayak }},
    {{ $profiledesa->total_jawa }},
    {{ $profiledesa->total_bugis }},
    {{ $profiledesa->total_suku_lainnya }}
  ];

  const dataAgama = [
    {{ $profiledesa->total_islam }},
    {{ $profiledesa->total_katolik }},
    {{ $profiledesa->total_protestan }},
    {{ $profiledesa->total_buddha }},
    {{ $profiledesa->total_hindu }},
    {{ $profiledesa->total_konghuchu }}
  ];
    // Diagram Lingkaran Suku
    const sukuCtx = document.getElementById('sukuChart').getContext('2d');
    const sukuChart = new Chart(sukuCtx, {
      type: 'pie',
      data: {
        labels: ['Melayu', 'Madura', 'Tionghoa', 'Dayak', 'Jawa', 'Bugis', 'Lainnya'],
        datasets: [{
          label: 'Jumlah Suku',
          data: dataSuku,
          backgroundColor: ['red', 'orange', 'yellow', 'green', 'blue', 'indigo', 'magenta'],
          hoverOffset: 0
        }]
      },
      options: {
        responsive: true,
        plugins: {
          legend: {
            position: 'bottom',
            labels: {
              usePointStyle: true,
              pointStyle: 'circle'
            }
          },
          datalabels: {
            color: '#000',
            anchor: 'end',
            align: 'end',
            offset: -50,
            formatter: (value, context) => {
              const total = context.chart.data.datasets[0].data.reduce((a, b) => a + b, 0);
              const percentage = (value / total * 100).toFixed(1) + '%';
              return percentage;
            },
            font: {
              weight: 'medium'
            }
          }
        },
        layout: {
          padding: 0
        }
      },
      plugins: [ChartDataLabels]
    });
  
    // Diagram Lingkaran Agama
    const agamaCtx = document.getElementById('agamaChart').getContext('2d');
    const agamaChart = new Chart(agamaCtx, {
      type: 'pie',
      data: {
        labels: ['Islam', 'Katolik', 'Protestan', 'Buddha', 'Hindu', 'Kong Hu Chu'],
        datasets: [{
          label: 'Jumlah Agama',
          data: dataAgama,
          backgroundColor: ['red', 'orange', 'yellow', 'green', 'blue', 'magenta'],
          hoverOffset: 0
        }]
      },
      options: {
        responsive: true,
        plugins: {
          legend: {
            position: 'bottom',
            labels: {
              usePointStyle: true,
              pointStyle: 'circle'
            }
          },
          datalabels: {
            color: '#000',
            anchor: 'end',
            align: 'end',
            offset: -50,
            formatter: (value, context) => {
              const total = context.chart.data.datasets[0].data.reduce((a, b) => a + b, 0);
              const percentage = (value / total * 100).toFixed(1) + '%';
              return percentage;
            },
            font: {
              weight: 'medium'
            }
          }
        },
        layout: {
          padding: 0
        }
      },
      plugins: [ChartDataLabels]
    });
  </script>
  @endsection