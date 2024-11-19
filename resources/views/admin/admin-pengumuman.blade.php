@extends('layouts.adminlayout')
@section('child')
    <main class="content px-3 py-2">
        <div class="container-fluid" id="admin-pengumuman">
            <div class="mt-3 mb-3">
                <h4>Kelola Pengumuman</h4>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h5>Tambah Pengumuman Baru
                                <hr>
                            </h5>
                            <form id="tambahPengumumanForm">
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
                                        <input type="file" class="form-control" id="gambarPengumuman" accept="image/*">
                                    </div>
                                </div>
                                <div class="d-flex justify-content-end mt-4">
                                    <button type="submit" class="btn btn-simpan">Simpan</button>
                                    <a href="admin-pengumuman.html" class="btn btn-batal ms-2">Batal</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="container mt-4">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Tanggal Dibuat</th>
                                <th>Judul</th>
                                <th>Deskripsi Singkat</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody id="pengumumanTableBody">
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
@endsection
@section('kodejs')
    <!-- Scripts -->


    <script>
        function showAlert() {
            alert("Data telah disimpan!");
        }


        // tambah pengumuman
        let pengumuman = JSON.parse(localStorage.getItem('pengumuman')) || [];

        // Fungsi untuk menampilkan pengumuman yang ada di localStorage
        function displayPengumuman() {
            const tableBody = document.getElementById('pengumumanTableBody');
            const pengumuman = JSON.parse(localStorage.getItem('pengumuman')) || [];
            tableBody.innerHTML = "";

            pengumuman.forEach((pengumumanItem, index) => {
                const row = `
      <tr>
        <td>${index + 1}</td>
        <td>${pengumumanItem.tanggal}</td>
        <td>${pengumumanItem.judul}</td>
        <td>${pengumumanItem.deskripsi}</td>
        <td><img src="${pengumumanItem.gambar}" alt="Gambar Pengumuman" style="width: 50px; height: 50px;" class="img-thumbnail"></td>
        <td>
          <a href="admin-edit-pengumuman.html?index=${index}" class="btn btn-info btn-sm"> <i class="fas fa-eye"></i></a>
          <button class="btn btn-danger btn-sm" onclick="hapusPengumuman(${index})"> <i class="fas fa-trash"></i> Hapus</button>
        </td>
      </tr>
    `;
                tableBody.innerHTML += row;
            });
        }

        window.onload = displayPengumuman;

        // Fungsi untuk menambah pengumuman baru
        document.getElementById('tambahPengumumanForm').onsubmit = function(event) {
            event.preventDefault();
            const tanggal = document.getElementById('tanggalPengumuman').value;
            const judul = document.getElementById('judulPengumuman').value;
            const deskripsi = document.getElementById('deskripsiSingkat').value;
            const gambar = document.getElementById('gambarPengumuman').files[0];

            const newPengumuman = {
                tanggal,
                judul,
                deskripsi,
                gambar: URL.createObjectURL(gambar)
            };
            let pengumuman = JSON.parse(localStorage.getItem('pengumuman')) || [];
            pengumuman.push(newPengumuman);
            localStorage.setItem('pengumuman', JSON.stringify(pengumuman));

            alert('Pengumuman berhasil disimpan');
            window.location.href = "admin-pengumuman.html";
        };

        // Fungsi untuk menghapus pengumuman berdasarkan index
        function hapusPengumuman(index) {
            if (confirm("Apakah Anda yakin ingin menghapus pengumuman ini?")) {
                let pengumuman = JSON.parse(localStorage.getItem('pengumuman')) || [];
                pengumuman.splice(index, 1);
                localStorage.setItem('pengumuman', JSON.stringify(pengumuman));

                alert('Pengumuman berhasil dihapus');
                displayPengumuman();
            }
        }
    </script>
@endsection
