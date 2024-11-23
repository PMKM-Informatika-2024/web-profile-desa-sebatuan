@extends('layouts.adminlayout')
@section('child')
    <main class="content px-3 py-2">
        <div class="container-fluid" id="admin-edit-pengumuman">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h5>Edit Pengumuman
                                <hr>
                            </h5>
                            <form id="editPengumumanForm">
                                <div class="form-group row mb-3">
                                    <label for="tanggalPengumuman" class="col-lg-2 col-md-3 col-sm-4 form-label">Tanggal
                                        Dibuat:</label>
                                    <div class="col-lg-10 col-md-9 col-sm-8">
                                        <input type="date" class="form-control" id="tanggalPengumuman" required>
                                    </div>
                                </div>
                                <div class="form-group row mb-3">
                                    <label for="judulPengumuman"
                                        class="col-lg-2 col-md-3 col-sm-4 form-label">Judul:</label>
                                    <div class="col-lg-10 col-md-9 col-sm-8">
                                        <input type="text" class="form-control" id="judulPengumuman" required>
                                    </div>
                                </div>
                                <div class="form-group row mb-3">
                                    <label for="deskripsiSingkat" class="col-lg-2 col-md-3 col-sm-4 form-label">Deskripsi
                                        Singkat:</label>
                                    <div class="col-lg-10 col-md-9 col-sm-8">
                                        <textarea class="form-control" id="deskripsiSingkat" required></textarea>
                                    </div>
                                </div>
                                <div class="form-group row mb-3">
                                    <label for="gambarPengumuman" class="col-lg-2 col-md-3 col-sm-4 form-label">Unggah
                                        Gambar:</label>
                                    <div class="col-lg-10 col-md-9 col-sm-8">
                                        <input type="file" class="form-control-file" id="gambarPengumuman"
                                            accept="image/*">
                                        <img id="currentImage" src="" alt="Gambar Saat Ini" class="mt-2"
                                            style="width: 100px;">
                                    </div>
                                </div>
                                <div class="d-flex justify-content-end mt-4">
                                    <button type="submit" class="btn btn-simpan">Simpan Perubahan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
@section('kodejs')
    <script>
        
    </script>
@endsection
