@extends('layouts.layout')

@section('child')
<div class="container-fluid px-4 pt-4" style="max-width: 1300px; margin-bottom: 25px;">
    <div class="row">
        <!-- Konten Utama -->
        <div class="col-md-8 mx-auto">
            <div class="card shadow-lg mb-4" style="border-radius: 10px;">
                <div class="card-header bg-transparent" style="border-bottom: none; padding: 25px;">
                    <h1 class="card-title mb-3" style="font-size: 2.5rem; font-weight: bold; line-height: 1.2;">
                        {{ $pengumuman->judul }}
                    </h1>
                    <div class="d-flex justify-content-between text-muted mb-2" style="font-size: 1rem;">
                        <!-- Ikon Tanggal -->
                        <span>
                            <i class="fas fa-calendar-alt" style="margin-right: 8px;"></i>
                            {{ \Carbon\Carbon::parse($pengumuman->created_at)->format('j F Y') }}
                        </span>
                        <!-- Ikon Penulis -->
                        <span>
                            <i class="fas fa-user" style="margin-right: 8px;"></i>
                            {{ $pengumuman->penulis ?? 'Penulis Tidak Diketahui' }}
                        </span>
                    </div>
                </div>
                @if(!empty($pengumuman->gambar_pengumuman))
                <img 
                    src="{{ asset('storage/' . $pengumuman->gambar_pengumuman) }}" 
                    alt="Gambar Pengumuman" 
                    class="card-img-top" 
                    style="object-fit: cover; height: 400px; border-radius: 10px 10px 0 0; padding:15px;">
                @endif
                <div class="card-body" style="padding: 25px;">
                    <p class="card-text" style="font-size: 1.1rem; line-height: 1.8; color: #555;">
                        {!! $pengumuman->deskripsi_singkat !!}
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
