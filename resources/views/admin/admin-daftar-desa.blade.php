@extends('layouts.adminlayout')
@section('child')
    <main class="content px-3 py-2">
        <div class="container-fluid" id="admin-kegiatan">
            <div class="mt-3 mb-3">
                <h4>Kelola Daftar Desa</h4>
            </div>
            <div class="row">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="card" id="daftardesaCard">
                                <div class="card-body">
                                    <h5>Kelola Desa
                                        <hr>
                                    </h5>
                                    <!-- Form Input Kegiatan -->
                                    <form id="tambahKegiatanForm" method="POST" action="{{ route('daftardesa.store') }}" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group row mb-3">
                                            <label for="namaDesa" class="col-lg-2 col-md-3 col-sm-4 form-label">Nama
                                                Desa:</label>
                                            <div class="col-lg-10 col-md-9 col-sm-8">
                                                <input name="nama_desa" type="text" class="form-control"
                                                    id="namaDesa" required>
                                            </div>
                                        </div>

                                        <div class="form-group row mb-3">
                                            <label for="fotoDesa"
                                                class="col-lg-2 col-md-3 col-sm-4 form-label">Foto:</label>
                                            <div class="col-lg-10 col-md-9 col-sm-8">
                                                <input name="gambar_desa" type="file" class="form-control"
                                                    id="fotoDesa" accept="image/*" required>
                                            </div>
                                        </div>

                                        <div class="d-flex justify-content-end mt-4">
                                            <button type="submit" class="btn btn-simpan">Simpan</button>
                                            <button type="button" onclick="resetForm()"
                                                class="btn btn-batal ms-2">Batal</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Tabel Kegiatan -->
                    <table class="table table-bordered" id="kegiatanTable">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Desa</th>
                                <th>Foto</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody id="kegiatanTableBody">
                            @foreach ($daftardesas as $daftardesa)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $daftardesa->nama_desa }}</td>
                                    <td>
                                        @if ($daftardesa->gambar_desa)
                                            <img src="{{ asset('storage/' . $daftardesa->gambar_desa) }}" alt="Gambar Desa" class="img-thumbnail" style="width: 50px; height: 50px;">
                                        @else
                                            Tidak Ada Gambar
                                        @endif
                                    </td>
                                    <td>
                                        <button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editDaftarDesaModal"
                                            onclick="loadEditData({{ $daftardesa }})">Edit</button>
                                        <button class="btn btn-danger btn-sm" onclick="showDeleteModal('{{ $daftardesa->id }}', '{{ $daftardesa->nama_desa }}')">
                                            Hapus
                                        </button>
                                    </td>                                    
                            @endforeach
                        </tbody>                        
                    </table>

                    <!-- Modal untuk Edit Kegiatan -->
                    <div class="modal fade" id="editDaftarDesaModal" tabindex="-1" aria-labelledby="editDaftarDesaModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="editDaftarDesaModalLabel">Edit Desa</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form id="editDesaForm" method="POST" enctype="multipart/form-data">
                                        @method('put')
                                        @csrf
                                        <input type="text" id="editId" hidden name="id">
                                        <input type="hidden" name="oldImage" id="editFotoDesa">
                                        <div class="mb-3">
                                            <label for="editNamaDesa" class="form-label">Nama Desa</label>
                                            <input name="nama_desa" type="text" class="form-control"
                                                id="editNamaDesa" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="editFotoDesa" class="form-label">Foto</label>
                                            <img alt="" id="previewImage" class="img-thumbnail"
                                                style="width: 50px; height: 50px;">
                                            <input name="gambar_desa" type="file" class="form-control"
                                                accept="image/*" onchange="changeImage(event)">
                                        </div>
                                        <button type="submit" class="btn btn-edit">Update</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Modal Konfirmasi Hapus -->
<div class="modal fade" id="deleteDesaModal" tabindex="-1" aria-labelledby="deleteDesaModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteDesaModalLabel">Konfirmasi Hapus</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Apakah Anda yakin ingin menghapus <strong id="deleteKegiatanName"></strong>?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <form id="deleteDesaForm" method="POST" class="d-inline">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger">Hapus</button>
                </form>
            </div>
        </div>
    </div>
</div>

                </div>
            </div>
        </div>
    </main>
@endsection
@section('kodejs')
    <script>
        function loadEditData(daftardesa) {
            console.log(daftardesa);
            
            // Isi nilai input dengan data dari parameter
            document.getElementById('editId').value = daftardesa.id;
            document.getElementById('editFotoDesa').value = daftardesa.gambar_desa;
            document.getElementById('editNamaDesa').value = daftardesa.nama_desa;
            const previewImage = document.getElementById('previewImage');
            if (daftardesa.gambar_desa) {
                previewImage.src = `/storage/${daftardesa.gambar_desa}`;
            } else {
                previewImage.src = ''; // Kosongkan jika tidak ada foto
            }

            // Ubah action form untuk mengarahkan ke route update yang sesuai
            const editForm = document.getElementById('editDesaForm');
            editForm.action = `/daftardesa/${daftardesa.id}`;
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

        function showDeleteModal(id, namaKegiatan) {
    // Tampilkan nama kegiatan di modal
    console.log(id);
    document.getElementById('deleteKegiatanName').textContent = namaKegiatan;

    // Atur action form penghapusan
    const deleteForm = document.getElementById('deleteDesaForm');
    deleteForm.action = `/daftardesa/${id}`;

    // Tampilkan modal konfirmasi
    const deleteModal = new bootstrap.Modal(document.getElementById('deleteDesaModal'));
    deleteModal.show();
}


        function resetForm() {
            document.getElementById("tambahKegiatanForm").reset();
        }
    </script>
@endsection
