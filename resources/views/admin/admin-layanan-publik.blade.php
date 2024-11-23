@extends('layouts.adminlayout')
@section('child')
<main class="content px-3 py-2">
    <div class="container-fluid" id="admin-layanan-publik">
        <div class="mt-3 mb-3">
            <h4>Kelola Layanan Publik</h4>
        </div>
        <div class="row">
            <div class="container">
                <!-- Card Form untuk Tambah Fasilitas -->
                <div class="row">
                    <div class="col-12">
                        <div class="card" id="tambahFasilitasCard">
                            <div class="card-body">
                                <h5>Tambah Fasilitas Desa</h5>
                                <hr>
                                <form id="tambahFasilitasForm" method="POST" action="{{ route('layananpublik.store') }}" enctype="multipart/form-data">
                                    @csrf
                                    <!-- Dropdown untuk memilih kategori fasilitas -->
                                    <div class="form-group row mb-3">
                                        <label for="kategoriFasilitas" class="col-lg-2 col-md-3 col-sm-4 form-label">
                                            Kategori Fasilitas:
                                        </label>
                                        <div class="col-lg-10 col-md-9 col-sm-8">
                                            <select class="form-control" id="kategoriFasilitas" name="kategori_fasilitas" required>
                                                <option value="">-- pilih kategori --</option>
                                                <option value="pendidikan">Pendidikan</option>
                                                <option value="publik">Publik</option>
                                            </select>
                                        </div>
                                    </div>

                                    <!-- Input Nama Fasilitas -->
                                    <div class="form-group row mb-3">
                                        <label for="namaFasilitas" class="col-lg-2 col-md-3 col-sm-4 form-label">
                                            Nama Fasilitas:
                                        </label>
                                        <div class="col-lg-10 col-md-9 col-sm-8">
                                            <input type="text" class="form-control" id="namaFasilitas" name="nama_fasilitas" required>
                                        </div>
                                    </div>

                                    <!-- Input URL Alamat -->
                                    <div class="form-group row mb-3">
                                        <label for="urlAlamat" class="col-lg-2 col-md-3 col-sm-4 form-label">
                                            URL Alamat:
                                        </label>
                                        <div class="col-lg-10 col-md-9 col-sm-8">
                                            <input type="url" class="form-control" id="urlAlamat" name="url_alamat" required>
                                        </div>
                                    </div>

                                    <!-- Input Foto -->
                                    <div class="form-group row mb-3">
                                        <label for="fotoFasilitas" class="col-lg-2 col-md-3 col-sm-4 form-label">
                                            Foto Fasilitas:
                                        </label>
                                        <div class="col-lg-10 col-md-9 col-sm-8">
                                            <input type="file" class="form-control" id="fotoFasilitas" name="gambar_fasilitas" accept="image/*" required>
                                        </div>
                                    </div>

                                    <!-- Tombol Submit -->
                                    <div class="d-flex justify-content-end mt-4">
                                        <button type="submit" class="btn btn-simpan">Simpan</button>
                                        {{-- <button type="button" onclick="toggleTambahFasilitasCard()" class="btn btn-batal ms-2">Batal</button> --}}
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Tabel Fasilitas Pendidikan -->
                <h5 class="mt-3">Fasilitas Pendidikan</h5>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>URL Alamat</th>
                            <th>Foto</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody id="fasilitasPendidikanTableBody">
                        @forelse ($fasilitasPendidikan as $fasilitas)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $fasilitas->nama_fasilitas }}</td>
                                <td><a href="{{ $fasilitas->url_alamat }}" target="_blank">Lihat Alamat</a></td>
                                <td><img src="{{ asset('storage/' . $fasilitas->gambar_fasilitas) }}" alt="Foto" width="50"></td>
                                <td>
                                    <a href="{{ route('layananpublik.edit', $fasilitas->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                    <form action="{{ route('layananpublik.destroy', $fasilitas->id) }}" method="POST" style="display: inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="text-center">Tidak ada fasilitas pendidikan</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>

                <!-- Tabel Fasilitas Publik -->
                <h5 class="mt-5">Fasilitas Publik</h5>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>URL Alamat</th>
                            <th>Foto</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody id="fasilitasPublikTableBody">
                        @forelse ($fasilitasPublik as $fasilitas)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $fasilitas->nama_fasilitas }}</td>
                                <td><a href="{{ $fasilitas->url_alamat }}" target="_blank">Lihat Alamat</a></td>
                                <td><img src="{{ asset('storage/' . $fasilitas->gambar_fasilitas) }}" alt="Foto" width="50"></td>
                                <td>
                                    <a href="{{ route('layananpublik.edit', $fasilitas->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                    <form action="{{ route('layananpublik.destroy', $fasilitas->id) }}" method="POST" style="display: inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="text-center">Tidak ada fasilitas publik</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>

                <!-- Modal untuk Edit Perangkat -->
                <div class="modal fade" id="editLembagaModal" tabindex="-1" aria-labelledby="editLembagaModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="editLembagaModalLabel">Edit Layanan Publik</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form id="editLembagaForm" method="POST" enctype="multipart/form-data">
                                @method('put')
                                @csrf
                                <input type="hidden" name="id" id="editId">
                                <input type="hidden" name="oldImage" id="editGambar">
                                <div class="mb-3">
                                    <label for="editNama" class="form-label">Nama Fasilitas</label>
                                    <input type="text" name="nama_fasilitas" class="form-control" id="editNama"
                                        required>
                                </div>
                                <div class="mb-3">
                                    <label for="editAlamat" class="form-label">URL Alamat</label>
                                    <input type="text" name="url_alamat" class="form-control" id="editAlamat"
                                        required>
                                </div>
                                <div class="mb-3">
                                    <label for="editFoto" class="form-label">Foto</label>
                                    <img alt="" id="previewImage" class="img-thumbnail"
                                        style="width: 50px; height: 50px;">
                                    <input type="file" name="gambar_fasilitas" class="form-control"
                                        id="editFoto" accept="image/*" onchange="changeImage(event)">
                                </div>
                                <button type="submit" class="btn btn-edit">Update</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            {{-- modal stops here --}}
            </div>
        </div>
    </div>
</main>
@endsection





@section('kodejs')
    <script>
              function loadEditData(lembagadesa) {
            // Isi nilai input dengan data dari parameter
            document.getElementById('editId').value = lembagadesa.id;
            document.getElementById('editGambar').value = lembagadesa.gambar_fasilitas;
            document.getElementById('editNama').value = lembagadesa.nama_lembaga;
            document.getElementById('editAlamat').value = lembagadesa.alamat_lembaga;
            const previewImage = document.getElementById('previewImage');
            if (lembagadesa.gambar_fasilitas) {
                previewImage.src = `/storage/${lembagadesa.gambar_fasilitas}`;
            } else {
                previewImage.src = ''; // Kosongkan jika tidak ada foto
            }

            // Ubah action form untuk mengarahkan ke route update yang sesuai
            const editForm = document.getElementById('editLembagaForm');
            editForm.action = `/layananpublik/${lembagadesa.id}`;
        }

        function changeImage(event) {
            const previewImage = document.getElementById('previewImage');
            const file = event.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    console.log(e.target.result);

                    previewImage.src = e.target.result;
                };
                reader.readAsDataURL(file);
            }
        }  
    </script>
@endsection
