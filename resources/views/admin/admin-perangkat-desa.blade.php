@extends('layouts.adminlayout')
@section('child')
    

      <main class="content px-3 py-2">
        <div class="container-fluid" id="admin-perangkat-desa">
          <div class="mt-3 mb-3">
            <h4>Kelola Perangkat Desa</h4>
          </div>
          <div class="row">
            <div class="container">

              <!-- Card Form untuk Tambah Perangkat -->
              <div class="row">
                <div class="col-12">
                  <div class="card" id="tambahPerangkatCard">
                    <div class="card-body">
                      <h5>Tambah Perangkat Desa
                        <hr>
                      </h5>
                      <form id="tambahPerangkatForm">
                        <div class="form-group row mb-3">
                          <label for="nama" class="col-lg-2 col-md-3 col-sm-4 form-label">Nama:</label>
                          <div class="col-lg-10 col-md-9 col-sm-8">
                            <input type="text" class="form-control" id="nama" required>
                          </div>
                        </div>
                        <div class="form-group row mb-3">
                          <label for="jabatan" class="col-lg-2 col-md-3 col-sm-4 form-label">Jabatan:</label>
                          <div class="col-lg-10 col-md-9 col-sm-8">
                            <input type="text" class="form-control" id="jabatan" required>
                          </div>
                        </div>
                        <div class="form-group row mb-3">
                          <label for="foto" class="col-lg-2 col-md-3 col-sm-4 form-label">Foto:</label>
                          <div class="col-lg-10 col-md-9 col-sm-8">
                            <input type="file" class="form-control" id="foto" accept="image/*" required>
                          </div>
                        </div>
                        <div class="d-flex justify-content-end mt-4">
                          <button type="submit" class="btn btn-simpan">Simpan</button>
                          <button type="button" onclick="toggleTambahPerangkatCard()"
                            class="btn btn-batal ms-2">Batal</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>

              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Jabatan</th>
                    <th>Foto</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody id="perangkatTableBody">
                  <!-- Isi Tabel Perangkat -->
                </tbody>
              </table>



              <!-- Modal untuk Edit Perangkat -->
              <div class="modal fade" id="editPerangkatModal" tabindex="-1" aria-labelledby="editPerangkatModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="editPerangkatModalLabel">Edit Perangkat Desa</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <form id="editPerangkatForm">
                        <input type="hidden" id="editIndex">
                        <div class="mb-3">
                          <label for="editNama" class="form-label">Nama</label>
                          <input type="text" class="form-control" id="editNama" required>
                        </div>
                        <div class="mb-3">
                          <label for="editJabatan" class="form-label">Jabatan</label>
                          <input type="text" class="form-control" id="editJabatan" required>
                        </div>
                        <div class="mb-3">
                          <label for="editFoto" class="form-label">Foto</label>
                          <input type="file" class="form-control" id="editFoto" accept="image/*">
                        </div>
                        <button type="submit" class="btn btn-edit">Update</button>
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
    

    // tambah perangkat
    let perangkat = [];

    function displayPerangkat() {
      const tableBody = document.getElementById('perangkatTableBody');
      tableBody.innerHTML = '';

      perangkat.forEach((item, index) => {
        const row = `
      <tr>
        <td>${index + 1}</td>
        <td>${item.nama}</td>
        <td>${item.jabatan}</td>
        <td><img src="${item.foto}" alt="Foto ${item.nama}" class="img-thumbnail" style="width: 50px; height: 50px;"></td>
        <td>
          <button class="btn btn-edit btn-sm" onclick="openEditModal(${index})">Edit</button>
          <button class="btn btn-hapus btn-sm" onclick="deletePerangkat(${index})">Hapus</button>
        </td>
      </tr>
    `;
        tableBody.innerHTML += row;
      });
    }

    // menambahkan perangkat
    document.getElementById('tambahPerangkatForm').onsubmit = function (event) {
      event.preventDefault();
      const nama = document.getElementById('nama').value;
      const jabatan = document.getElementById('jabatan').value;
      const foto = document.getElementById('foto').files[0];

      const reader = new FileReader();
      reader.onloadend = function () {
        perangkat.push({ nama, jabatan, foto: reader.result });
        displayPerangkat();
        alert('Data telah disimpan');
        document.getElementById('tambahPerangkatForm').reset();
      };
      reader.readAsDataURL(foto);
    };

    // membuka modal edit
    function openEditModal(index) {
      document.getElementById('editIndex').value = index;
      document.getElementById('editNama').value = perangkat[index].nama;
      document.getElementById('editJabatan').value = perangkat[index].jabatan;
      const myModal = new bootstrap.Modal(document.getElementById('editPerangkatModal'));
      myModal.show();
    }

    // mengupdate perangkat
    document.getElementById('editPerangkatForm').onsubmit = function (event) {
      event.preventDefault();
      const index = document.getElementById('editIndex').value;
      const nama = document.getElementById('editNama').value;
      const jabatan = document.getElementById('editJabatan').value;
      const foto = document.getElementById('editFoto').files[0];

      if (foto) {
        const reader = new FileReader();
        reader.onloadend = function () {
          perangkat[index] = { nama, jabatan, foto: reader.result };
          displayPerangkat();
          alert('Data telah diperbarui'); 
          var myModal = bootstrap.Modal.getInstance(document.getElementById('editPerangkatModal'));
          myModal.hide();
        };
        reader.readAsDataURL(foto);
      } else {
        perangkat[index] = { nama, jabatan, foto: perangkat[index].foto };
        displayPerangkat();
        alert('Data telah di-update');
        var myModal = bootstrap.Modal.getInstance(document.getElementById('editPerangkatModal'));
        myModal.hide();
      }
    };

    // menghapus perangkat
    function deletePerangkat(index) {
      if (confirm('Apakah Anda yakin ingin menghapus data ini?')) { 
        perangkat.splice(index, 1);
        displayPerangkat();
        alert('Data telah dihapus');
      }
    }
  </script>
@endsection