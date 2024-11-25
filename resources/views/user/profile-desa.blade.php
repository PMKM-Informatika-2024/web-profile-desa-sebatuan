@extends('layouts.layout')
@section('child')
    <!-- Banner -->
    <section id="banner">
        <div
            class="container-fluid banner-image w-100 vh-60 d-flex justify-content-center align-items-center bg-dark text-white">
            <div class="row">
                <div class="text-center">
                    <h1 class="fw-bold display-4">Profil Desa</h1>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Banner -->

    <!-- Content Section -->
    <section id="content" class="py-5 bg-light">
        <div class="container-fluid transition-container col-lg-10 shadow-sm p-4 rounded">
            <h2 class="subjudul mb-4 fw-bold  text-center">Sejarah Desa</h2>
            <!-- Image Section -->
            <div class="card-img-top overflow-hidden rounded mb-4">
                <img src="{{ asset('storage/' . $profiledesa->gambar_profiledesa) }}" alt="Desa Image"
                    class="img-fluid rounded" style="object-fit: cover; width: 100%;">
            </div>
            <!-- Text Section -->
            <div class="card-body">
                <div class="text-muted" style="font-size: 1.125rem; line-height: 1.8; text-align: justify;">
                    {!! $profiledesa->sejarah_desa !!}
                </div>
            </div>
        </div>
        </div>
    </section>
    <!-- End of Content Section -->

    <!-- Visi Misi Section -->
    <section id="visi-misi" class="py-5 bg-light">
        <div class="container col-lg-10 shadow-sm p-4 rounded">
            <h2 class="subjudul text-center mb-5 fw-bold">Visi & Misi</h2>
            <div class="row g-4">
                <!-- Visi Section -->
                <div class="col-12">
                    <div class="card shadow-sm border-0">
                        <div class="card-header bg-primary text-white text-center py-3 rounded-top">
                            <h5 class="mb-0 fw-bold">Visi</h5>
                        </div>
                        <div class="card-body">
                            <p class="mb-0"
                                style="font-size: 1.125rem; line-height: 1.8; text-align: justify; color: #555;">
                                {{ $profiledesa->visi_desa }}
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Misi Section -->
                <div class="col-12">
                    <div class="card shadow-sm border-0">
                        <div class="card-header bg-primary text-white text-center py-3 rounded-top">
                            <h5 class="mb-0 fw-bold">Misi</h5>
                        </div>
                        <div class="card-body">
                            <ul class="mb-0 ps-3"
                                style="font-size: 1.125rem; line-height: 1.8; list-style-type: disc; text-align: justify; color: #555;">
                                {!! $profiledesa->misi_desa !!}
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Visi Misi Section -->

    <!-- Kependudukan Section -->
    <section id="kependudukan" class="py-5 bg-light">
        <div class="container col-lg-10 shadow-sm p-4 rounded">
            <h2 class="subjudul text-center mb-5 fw-bold">Kependudukan</h2>
            <!-- Key Statistics Section -->
            <div class="row g-4 text-center">
                <!-- Total Jiwa -->
                <div class="col-lg-6">
                    <div class="card p-3 shadow-sm border-0">
                        <div class="card-body">
                            <h5 class="card-title fw-bold mb-2">Total Jiwa</h5>
                            <span class="counter display-4"
                                data-target="{{ $profiledesa->total_jiwa }}">0</span>
                        </div>
                    </div>
                </div>
                <!-- Total KK -->
                <div class="col-lg-6">
                    <div class="card p-3 shadow-sm border-0">
                        <div class="card-body">
                            <h5 class="card-title fw-bold mb-2">Total KK</h5>
                            <span class="counter display-4" data-target="{{ $profiledesa->total_kk }}">0</span>
                        </div>
                    </div>
                </div>
                <!-- Total Dusun -->
                <div class="col-lg-6">
                    <div class="card p-3 shadow-sm border-0">
                        <div class="card-body">
                            <h5 class="card-title fw-bold mb-2">Dusun</h5>
                            <span class="counter display-4"
                                data-target="{{ $profiledesa->total_dusun }}">0</span>
                        </div>
                    </div>
                </div>
                <!-- Jumlah RT -->
                <div class="col-lg-6">
                    <div class="card p-3 shadow-sm border-0">
                        <div class="card-body">
                            <h5 class="card-title fw-bold mb-2">Jumlah RT</h5>
                            <span class="counter display-4" data-target="{{ $profiledesa->total_rt }}">0</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Charts Section -->
            <div class="row g-4 text-center mt-5">
                <!-- Diagram Lingkaran Suku -->
                <div class="col-lg-6">
                    <div class="card shadow-sm border-0 p-4">
                        <h5 class="fw-bold mb-4">Suku</h5>
                        <canvas id="sukuChart" class="chart-canvas"></canvas>
                    </div>
                </div>
                <!-- Diagram Lingkaran Agama -->
                <div class="col-lg-6">
                    <div class="card shadow-sm border-0 p-4">
                        <h5 class="fw-bold mb-4">Agama</h5>
                        <canvas id="agamaChart" class="chart-canvas"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Kependudukan Section -->

    <!-- Kantor Desa Section -->
    <section id="kantor-desa" class="py-5 bg-light">
        <div class="container-fluid col-lg-10 shadow-sm p-4 rounded">
            <h2 class="subjudul text-center mb-5 fw-bold">Lokasi Desa</h2>
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <!-- Map Section -->
                    <div class="map-container rounded overflow-hidden shadow-sm">
                        {!! $profiledesa->peta_desa !!}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Kantor Desa Section -->
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
