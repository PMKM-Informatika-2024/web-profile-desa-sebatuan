@extends('layouts.layout')
@section('child')
<div class="container-fluid px-4 pt-4" style="max-width: 800px;">
    <div class="card">
        
        <img src="{{ asset('storage/'.$pengumuman->gambar_pengumuman) }}" alt="no-image" >
        <div class="card-body">
            <h5 class="card-title">{{ $pengumuman->judul }}</h5>
            <h6 class="">{{ \Carbon\Carbon::parse($pengumuman->created_at)->format('j M Y') }}</h6>
            <p>{!! $pengumuman->deskripsi_singkat !!}</p>
        </div>
    </div>
</div>
@endsection