@extends('layouts.adminlayout')
@section('child')
    <main class="content px-3 py-2">
        <div class="container-fluid" id="admin-lembaga-desa">
            <div class="mt-3 mb-3">
                <h4>Kelola Lembaga Desa</h4>
            </div>
            <div class="row">
                <div class="container">
                    <!-- Card Form untuk Tambah Lembaga -->
                    <div class="row">
                        <div class="col-12">
                            <div class="card" id="tambahLembagaCard">
                                <div class="card-body">
                                    <h5>Tambah Lembaga Desa
                                        <hr>
                                    </h5>
                                    <form id="tambahLembagaForm">
                                        <div class="form-group row mb-3">
                                            <label for="namaLembaga" class="col-lg-2 col-md-3 col-sm-4 form-label">Nama
                                                Lembaga:</label>
                                            <div class="col-lg-10 col-md-9 col-sm-8">
                                                <input type="text" class="form-control" id="namaLembaga" required>
                                            </div>
                                        </div>
                                        <div class="form-group row mb-3">
                                            <label for="alamatLembaga" class="col-lg-2 col-md-3 col-sm-4 form-label">Alamat
                                                Lembaga:</label>
                                            <div class="col-lg-10 col-md-9 col-sm-8">
                                                <input type="text" class="form-control" id="alamatLembaga" required>
                                            </div>
                                        </div>
                                        <div class="form-group row mb-3">
                                            <label for="namaKetua" class="col-lg-2 col-md-3 col-sm-4 form-label">Nama
                                                Ketua:</label>
                                            <div class="col-lg-10 col-md-9 col-sm-8">
                                                <input type="text" class="form-control" id="namaKetua" required>
                                            </div>
                                        </div>
                                        <div class="form-group row mb-3">
                                            <label for="foto"
                                                class="col-lg-2 col-md-3 col-sm-4 form-label">Foto:</label>
                                            <div class="col-lg-10 col-md-9 col-sm-8">
                                                <input type="file" class="form-control" id="foto" accept="image/*"
                                                    required>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-end mt-4">
                                            <button type="submit" class="btn btn-simpan">Simpan</button>
                                            <button type="button" onclick="toggleTambahLembagaCard()"
                                                class="btn btn-batal ms-2">Batal</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <table class="table table-bordered mt-4">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Lembaga</th>
                                <th>Alamat Lembaga</th>
                                <th>Nama Ketua</th>
                                <th>Foto</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody id="lembagaTableBody">
                            <!-- Isi Tabel Lembaga -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
@endsection
@section('kodejs')
    <script>
        // tambah lembaga
        let lembaga = [];

        // Fungsi untuk menampilkan form card tambah lembaga
        function toggleTambahLembagaCard() {
            const card = document.getElementById('tambahLembagaCard');
            card.style.display = card.style.display === 'none' || card.style.display === '' ? 'block' : 'none';
        }

        // Fungsi untuk menampilkan lembaga
        function displayLembaga() {
            const tableBody = document.getElementById('lembagaTableBody');
            tableBody.innerHTML = '';

            lembaga.forEach((item, index) => {
                const row = `
      <tr>
        <td>${index + 1}</td>
        <td>${item.namaLembaga}</td>
        <td>${item.alamatLembaga}</td>
        <td>${item.namaKetua}</td>
        <td><img src="${item.foto}" alt="Foto ${item.namaLembaga}" class="img-thumbnail" style="width: 50px; height: 50px;"></td>
        <td>
          <button class="btn btn-edit btn-sm" onclick="openEditModal(${index})">Edit</button>
          <button class="btn btn-hapus btn-sm" onclick="deleteLembaga(${index})">Hapus</button>
        </td>
      </tr>
    `;
                tableBody.innerHTML += row;
            });
        }

        // Menambahkan lembaga
        document.getElementById('tambahLembagaForm').onsubmit = function(event) {
            event.preventDefault();
            const namaLembaga = document.getElementById('namaLembaga').value;
            const alamatLembaga = document.getElementById('alamatLembaga').value;
            const namaKetua = document.getElementById('namaKetua').value;
            const foto = document.getElementById('foto').files[0];

            const reader = new FileReader();
            reader.onloadend = function() {
                lembaga.push({
                    namaLembaga,
                    alamatLembaga,
                    namaKetua,
                    foto: reader.result
                });
                displayLembaga();
                alert('Data telah disimpan'); // Alert untuk aksi simpan
                document.getElementById('tambahLembagaForm').reset();
                toggleTambahLembagaCard();
            };
            reader.readAsDataURL(foto);
        };

        // Membuka modal edit
        function openEditModal(index) {
            document.getElementById('editIndex').value = index;
            document.getElementById('editNamaLembaga').value = lembaga[index].namaLembaga;
            document.getElementById('editAlamatLembaga').value = lembaga[index].alamatLembaga;
            document.getElementById('editNamaKetua').value = lembaga[index].namaKetua;
            const myModal = new bootstrap.Modal(document.getElementById('editLembagaModal'));
            myModal.show();
        }

        // Mengupdate lembaga
        document.getElementById('editLembagaForm').onsubmit = function(event) {
            event.preventDefault();
            const index = document.getElementById('editIndex').value;
            const namaLembaga = document.getElementById('editNamaLembaga').value;
            const alamatLembaga = document.getElementById('editAlamatLembaga').value;
            const namaKetua = document.getElementById('editNamaKetua').value;
            const foto = document.getElementById('editFoto').files[0];

            if (foto) {
                const reader = new FileReader();
                reader.onloadend = function() {
                    lembaga[index] = {
                        namaLembaga,
                        alamatLembaga,
                        namaKetua,
                        foto: reader.result
                    };
                    displayLembaga();
                    alert('Data telah di-update'); // Alert untuk aksi edit
                    var myModal = bootstrap.Modal.getInstance(document.getElementById('editLembagaModal'));
                    myModal.hide();
                };
                reader.readAsDataURL(foto);
            } else {
                lembaga[index] = {
                    namaLembaga,
                    alamatLembaga,
                    namaKetua,
                    foto: lembaga[index].foto
                };
                displayLembaga();
                alert('Data telah di-update'); // Alert untuk aksi edit (tanpa perubahan foto)
                var myModal = bootstrap.Modal.getInstance(document.getElementById('editLembagaModal'));
                myModal.hide();
            }
        };

        // Menghapus lembaga
        function deleteLembaga(index) {
            if (confirm('Apakah Anda yakin ingin menghapus data ini?')) { // Konfirmasi hapus
                lembaga.splice(index, 1);
                displayLembaga();
                alert('Data telah dihapus'); // Alert untuk aksi hapus
            }
        }
    </script>
@endsection
