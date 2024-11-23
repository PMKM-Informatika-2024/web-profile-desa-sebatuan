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
                                        <button type="button" onclick="toggleTambahFasilitasCard()" class="btn btn-batal ms-2">Batal</button>
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
            </div>
        </div>
    </div>
</main>
@endsection





{{-- @section('kodejs')
    <script>
        // tambah layanan publik
        let fasilitasPendidikan = [];
        let fasilitasPublik = [];

        // Fungsi untuk menampilkan fasilitas pada tabel berdasarkan kategori
        function tampilkanFasilitas() {
            const bodyTablePendidikan = document.getElementById("fasilitasPendidikanTableBody");
            const bodyTablePublik = document.getElementById("fasilitasPublikTableBody");

            bodyTablePendidikan.innerHTML = "";
            bodyTablePublik.innerHTML = "";

            // Tampilkan fasilitas pendidikan
            fasilitasPendidikan.forEach((fasilitas, index) => {
                const row = document.createElement("tr");
                row.innerHTML = `
      <td>${index + 1}</td>
      <td>${fasilitas.nama}</td>
      <td>${fasilitas.url}</td>
      <td><img src="${fasilitas.foto}" alt="Foto ${fasilitas.nama}" class="img-thumbnail" style="width: 50px; height: 50px;"></td>
      <td>
        <button class="btn btn-edit btn-sm" onclick="editFasilitas(${index}, 'pendidikan')">Edit</button>
        <button class="btn btn-hapus btn-sm" onclick="hapusFasilitas(${index}, 'pendidikan')">Hapus</button>
      </td>
    `;
                bodyTablePendidikan.appendChild(row);
            });

            // Tampilkan fasilitas publik
            fasilitasPublik.forEach((fasilitas, index) => {
                const row = document.createElement("tr");
                row.innerHTML = `
      <td>${index + 1}</td>
      <td>${fasilitas.nama}</td>
      <td>${fasilitas.url}</td>
      <td><img src="${fasilitas.foto}" alt="Foto ${fasilitas.nama}" class="img-thumbnail" style="width: 50px; height: 50px;"></td>
      <td>
        <button class="btn btn-edit btn-sm" onclick="editFasilitas(${index}, 'publik')">Edit</button>
        <button class="btn btn-hapus btn-sm" onclick="hapusFasilitas(${index}, 'publik')">Hapus</button>
      </td>
    `;
                bodyTablePublik.appendChild(row);
            });
        }

        // Fungsi untuk menambah fasilitas
        document.getElementById("tambahFasilitasForm").addEventListener("submit", function(e) {
            e.preventDefault();

            const kategori = document.getElementById("kategoriFasilitas").value;
            const nama = document.getElementById("namaFasilitas").value;
            const url = document.getElementById("urlAlamat").value;
            const fotoInput = document.getElementById("fotoFasilitas");
            const foto = URL.createObjectURL(fotoInput.files[0]);

            const fasilitasBaru = {
                nama,
                url,
                foto
            };

            if (kategori === "pendidikan") {
                fasilitasPendidikan.push(fasilitasBaru);
            } else {
                fasilitasPublik.push(fasilitasBaru);
            }

            tampilkanFasilitas();
            alert("Fasilitas berhasil disimpan."); // Alert untuk simpan
            document.getElementById("tambahFasilitasForm").reset();
        });

        // Fungsi untuk menghapus fasilitas
        function hapusFasilitas(index, kategori) {
            if (kategori === "pendidikan") {
                fasilitasPendidikan.splice(index, 1);
            } else {
                fasilitasPublik.splice(index, 1);
            }

            tampilkanFasilitas();
            alert("Fasilitas berhasil dihapus."); // Alert untuk hapus
        }

        // Fungsi untuk mengedit fasilitas
        function editFasilitas(index, kategori) {
            let fasilitasEdit;

            if (kategori === "pendidikan") {
                fasilitasEdit = fasilitasPendidikan[index];
            } else {
                fasilitasEdit = fasilitasPublik[index];
            }

            document.getElementById("kategoriFasilitas").value = kategori;
            document.getElementById("namaFasilitas").value = fasilitasEdit.nama;
            document.getElementById("urlAlamat").value = fasilitasEdit.url;

            document.getElementById("fotoFasilitas").value = '';

            document.getElementById("tambahFasilitasForm").onsubmit = function(e) {
                e.preventDefault();

                const kategori = document.getElementById("kategoriFasilitas").value;
                const nama = document.getElementById("namaFasilitas").value;
                const url = document.getElementById("urlAlamat").value;
                const fotoInput = document.getElementById("fotoFasilitas");
                const foto = fotoInput.files.length ? URL.createObjectURL(fotoInput.files[0]) : fasilitasEdit.foto;

                const fasilitasUpdate = {
                    nama,
                    url,
                    foto
                };

                if (kategori === "pendidikan") {
                    fasilitasPendidikan[index] = fasilitasUpdate;
                } else {
                    fasilitasPublik[index] = fasilitasUpdate;
                }

                tampilkanFasilitas();
                alert("Fasilitas berhasil diupdate."); // Alert untuk edit/update
            };
        }
    </script>
@endsection --}}
