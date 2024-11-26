@extends('layouts.adminlayout')
@section('child')
    <main class="content px-3 py-2">
        <div class="container-fluid" id="admin-profile-desa">
            <div class="mt-3 mb-3">
                <h4>Kelola Profile Desa</h4>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body" id="showDataProfil">
                            {{-- foto --}}
                            <div class="row mb-3">
                                <label class="col-lg-2 col-md-3 col-sm-4 ">Foto Desa:</label>
                                <div class="col-lg-10 col-md-9 col-sm-8">
                                    <img src="{{ asset('storage/' . $profiledesa->gambar_profiledesa) }}"
                                        alt="no image yet">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-lg-2 col-md-3 col-sm-4">Sejarah Desa:</label>
                                <div class="col-lg-10 col-md-9 col-sm-8">
                                    {!! $profiledesa->sejarah_desa !!}
                                </div>
                            </div>
                            <!-- Visi Desa -->
                            <div class="row mb-3">
                                <label class="col-lg-2 col-md-3 col-sm-4">Visi Desa:</label>
                                <div class="col-lg-10 col-md-9 col-sm-8">
                                    {{ $profiledesa->visi_desa }}
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-lg-2 col-md-3 col-sm-4">Misi Desa:</label>
                                <div class="col-lg-10 col-md-9 col-sm-8">
                                    {!! $profiledesa->misi_desa !!}
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-lg-2 col-md-3 col-sm-4">Total jiwa:</label>
                                <div class="col-lg-10 col-md-9 col-sm-8">{{ $profiledesa->total_jiwa }}</div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-lg-2 col-md-3 col-sm-4">Total Jiwa:</label>
                                <div class="col-lg-10 col-md-9 col-sm-8">{{ $profiledesa->total_jiwa }}</div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-lg-2 col-md-3 col-sm-4">Total KK:</label>
                                <div class="col-lg-10 col-md-9 col-sm-8">{{ $profiledesa->total_kk }}</div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-lg-2 col-md-3 col-sm-4">Total Dusun:</label>
                                <div class="col-lg-10 col-md-9 col-sm-8">{{ $profiledesa->total_laki_laki }}</div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-lg-2 col-md-3 col-sm-4">Total RT:</label>
                                <div class="col-lg-10 col-md-9 col-sm-8">{{ $profiledesa->total_perempuan }}</div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-lg-2 col-md-3 col-sm-4">Melayu</label>
                                <div class="col-lg-10 col-md-9 col-sm-8">{{ $profiledesa->total_melayu }}</div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-lg-2 col-md-3 col-sm-4">Madura</label>
                                <div class="col-lg-10 col-md-9 col-sm-8">{{ $profiledesa->total_madura }}</div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-lg-2 col-md-3 col-sm-4">Tionghoa</label>
                                <div class="col-lg-10 col-md-9 col-sm-8">{{ $profiledesa->total_tionghoa }}</div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-lg-2 col-md-3 col-sm-4">Dayak</label>
                                <div class="col-lg-10 col-md-9 col-sm-8">{{ $profiledesa->total_dayak }}</div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-lg-2 col-md-3 col-sm-4">Jawa</label>
                                <div class="col-lg-10 col-md-9 col-sm-8">{{ $profiledesa->total_jawa }}</div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-lg-2 col-md-3 col-sm-4">Bugis</label>
                                <div class="col-lg-10 col-md-9 col-sm-8">{{ $profiledesa->total_bugis }}</div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-lg-2 col-md-3 col-sm-4">Suku lainnya</label>
                                <div class="col-lg-10 col-md-9 col-sm-8">{{ $profiledesa->total_suku_lainnya }}</div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-lg-2 col-md-3 col-sm-4">Islam</label>
                                <div class="col-lg-10 col-md-9 col-sm-8">{{ $profiledesa->total_islam }}</div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-lg-2 col-md-3 col-sm-4">Katolik</label>
                                <div class="col-lg-10 col-md-9 col-sm-8">{{ $profiledesa->total_katolik }}</div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-lg-2 col-md-3 col-sm-4">Protestan</label>
                                <div class="col-lg-10 col-md-9 col-sm-8">{{ $profiledesa->total_protestan }}</div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-lg-2 col-md-3 col-sm-4">Buddha</label>
                                <div class="col-lg-10 col-md-9 col-sm-8">{{ $profiledesa->total_buddha }}</div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-lg-2 col-md-3 col-sm-4">Hindu</label>
                                <div class="col-lg-10 col-md-9 col-sm-8">{{ $profiledesa->total_hindu }}</div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-lg-2 col-md-3 col-sm-4">Konghuchu</label>
                                <div class="col-lg-10 col-md-9 col-sm-8">{{ $profiledesa->total_konghuchu }}</div>
                            </div>
                            <button type="submit" class="btn btn-simpan" data-bs-toggle="modal"
                                data-bs-target="#editProfilDesaModal" onclick="loadEditData({{ $profiledesa }})">Edit</button>
                        </div>

                        <!-- Nama Desa -->

                        <div class="modal fade" id="editProfilDesaModal" tableindex="-1"
                            aria-labelledby="editProfilDesaModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="editProfilDesaModalLabel">Edit Profil Desa</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        {{-- here the form --}}

                                        <form method="POST" enctype="multipart/form-data" id="editLayaAdminForm">
                                            @method('put')
                                            @csrf
                                            <input type="text" name="id" required hidden value="{{ $profiledesa->id }}">
                                            <input type="hidden" name="oldImage" id="editGambar">
                                            <!-- Foto Desa -->
                                            <div class="form-group row mb-3">
                                                <img src="{{ asset('storage/' . $profiledesa->gambar_profiledesa) }}"
                                                    alt="no image yet" id="previewImage">
                                                <label for="fotoDesa" class="col-lg-2 col-md-3 col-sm-4 form-label">Foto
                                                    Desa:</label>
                                                <div class="col-lg-10 col-md-9 col-sm-8">
                                                    <input type="file" class="form-control" name="gambar_profiledesa"
                                                        accept="image/*" multiple onchange="changeImage(event)">
                                                </div>
                                            </div>
                                            <!-- Sejarah Desa -->
                                            <div class="form-group row mb-3">
                                                <label for="sejarahDesa"
                                                    class="col-lg-2 col-md-3 col-sm-4 form-label">Sejarah
                                                    Desa:</label>
                                                <div class="col-lg-10 col-md-9 col-sm-8">
                                                    <textarea name="sejarah_desa" id="summernote-sejarah" required></textarea>
                                                </div>
                                            </div>
                                            <!-- Visi Desa -->
                                            <div class="form-group row mb-3">
                                                <label class="col-lg-2 col-md-3 col-sm-4 form-label">Visi Desa:</label>
                                                <div class="col-lg-10 col-md-9 col-sm-8">
                                                    <textarea class="form-control" name="visi_desa" placeholder="Masukkan Visi Desa" required>{{ $profiledesa->visi_desa }}</textarea>
                                                </div>
                                            </div>

                                            <!-- Misi Desa -->
                                            <div class="form-group row mb-3">
                                                <label for="misiDesa" class="col-lg-2 col-md-3 col-sm-4 form-label">Misi
                                                    Desa:</label>
                                                <div class="col-lg-10 col-md-9 col-sm-8">
                                                    <textarea name="misi_desa" id="summernote-misidesa" required></textarea>
                                                </div>
                                            </div>

                                            <!-- Additional Details (Total Jiwa, Total KK, Total Dusun, Total RT) -->
                                            <div class="form-group row gx-3 gy-3">
                                                <div class="col-lg-3 col-md-6">
                                                    <label class="form-label">Total Jiwa:</label>
                                                    <input type="number" class="form-control" name="total_jiwa" required
                                                        value="{{ $profiledesa->total_jiwa }}">
                                                </div>
                                                <div class="col-lg-3 col-md-6">
                                                    <label class="form-label">Total KK:</label>
                                                    <input type="number" class="form-control" name="total_kk" required
                                                        value="{{ $profiledesa->total_kk }}">
                                                </div>
                                                <div class="col-lg-3 col-md-6">
                                                    <label class="form-label">Total Laki-Laki:</label>
                                                    <input type="number" class="form-control" name="total_laki_laki"
                                                        required value="{{ $profiledesa->total_laki_laki }}">
                                                </div>
                                                <div class="col-lg-3 col-md-6">
                                                    <label class="form-label">Total Perempuan:</label>
                                                    <input type="number" class="form-control" name="total_perempuan" required
                                                        value="{{ $profiledesa->total_perempuan }}">
                                                </div>
                                            </div>

                                            <!-- Suku -->
                                            <div class="form-group row mt-3 mb-3">
                                                <label class="col-lg-2 col-md-3 col-sm-4 form-label"> Suku:</label>
                                                <div class="col-lg-10 col-md-9 col-sm-8">
                                                    <div class="row gx-3 gy-2">
                                                        <div class="col-lg-2 col-md-3">
                                                            <label class="form-label">Melayu</label>
                                                            <input type="number" class="form-control"
                                                                name="total_melayu"
                                                                value="{{ $profiledesa->total_melayu }}" placeholder=""
                                                                min="0">
                                                        </div>
                                                        <div class="col-lg-2 col-md-3">
                                                            <label class="form-label">Madura</label>
                                                            <input type="number" class="form-control"
                                                                name="total_madura"
                                                                value="{{ $profiledesa->total_madura }}" placeholder=""
                                                                min="0">
                                                        </div>
                                                        <div class="col-lg-2 col-md-3">
                                                            <label class="form-label">Tionghoa</label>
                                                            <input type="number" class="form-control"
                                                                name="total_tionghoa"
                                                                value="{{ $profiledesa->total_tionghoa }}" placeholder=""
                                                                min="0">
                                                        </div>
                                                        <div class="col-lg-2 col-md-3">
                                                            <label class="form-label">Dayak</label>
                                                            <input type="number" class="form-control" name="total_dayak"
                                                                value="{{ $profiledesa->total_dayak }}" placeholder=""
                                                                min="0">
                                                        </div>
                                                        <div class="col-lg-2 col-md-3">
                                                            <label class="form-label">Jawa</label>
                                                            <input type="number" class="form-control" name="total_jawa"
                                                                value="{{ $profiledesa->total_jawa }}" placeholder=""
                                                                min="0">
                                                        </div>
                                                        <div class="col-lg-2 col-md-3">
                                                            <label class="form-label">Bugis</label>
                                                            <input type="number" class="form-control" name="total_bugis"
                                                                value="{{ $profiledesa->total_bugis }}" placeholder=""
                                                                min="0">
                                                        </div>
                                                        <div class="col-lg-2 col-md-3">
                                                            <label class="form-label">Lainnya</label>
                                                            <input type="number" class="form-control"
                                                                name="total_suku_lainnya"
                                                                value="{{ $profiledesa->total_suku_lainnya }}"
                                                                placeholder="" min="0">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Agama -->
                                            <div class="form-group row mt-3 mb-3">
                                                <label class="col-lg-2 col-md-3 col-sm-4 form-label"> Agama:</label>
                                                <div class="col-lg-10 col-md-9 col-sm-8">
                                                    <div class="row gx-3 gy-2">
                                                        <div class="col-lg-2 col-md-3">
                                                            <label for="agamaIslam" class="form-label">Islam</label>
                                                            <input type="number" class="form-control" name="total_islam"
                                                                value="{{ $profiledesa->total_islam }}" placeholder=""
                                                                min="0">
                                                        </div>
                                                        <div class="col-lg-2 col-md-3">
                                                            <label for="agamaKatolik" class="form-label">Katolik</label>
                                                            <input type="number" class="form-control"
                                                                name="total_katolik"
                                                                value="{{ $profiledesa->total_katolik }}" placeholder=""
                                                                min="0">
                                                        </div>
                                                        <div class="col-lg-2 col-md-3">
                                                            <label for="agamaProtestan"
                                                                class="form-label">Protestan</label>
                                                            <input type="number" class="form-control"
                                                                name="total_protestan"
                                                                value="{{ $profiledesa->total_protestan }}"
                                                                placeholder="" min="0">
                                                        </div>
                                                        <div class="col-lg-2 col-md-3">
                                                            <label for="agamaBuddha" class="form-label">Buddha</label>
                                                            <input type="number" class="form-control"
                                                                name="total_buddha" id="agamaBuddha"
                                                                value="{{ $profiledesa->total_buddha }}" placeholder=""
                                                                min="0">
                                                        </div>
                                                        <div class="col-lg-2 col-md-3">
                                                            <label for="agamaHindu" class="form-label">Hindu</label>
                                                            <input type="number" class="form-control" name="total_hindu"
                                                                value="{{ $profiledesa->total_hindu }}" placeholder=""
                                                                min="0">
                                                        </div>
                                                        <div class="col-lg-2 col-md-3">
                                                            <label for="agamaKonghuchu"
                                                                class="form-label">Konghuchu</label>
                                                            <input type="number" class="form-control"
                                                                name="total_konghuchu"
                                                                value="{{ $profiledesa->total_konghuchu }}"
                                                                placeholder="" min="0">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Peta Desa -->
                                            <div class="form-group row mt-3 mb-3">
                                                <label for="petaDesa" class="col-lg-2 col-md-3 col-sm-4 form-label">Peta
                                                    Desa:</label>
                                                <div class="col-lg-10 col-md-9 col-sm-8">
                                                    <input type="text" class="form-control" id="petaDesa"
                                                        placeholder="Masukkan tautan alamat peta Desa" name="peta_desa"
                                                        required value="{{ $profiledesa->peta_desa }}">
                                                </div>
                                            </div>

                                            <!-- Submit Button -->
                                            <div class="d-flex justify-content-end mt-4">
                                                <button type="submit" class="btn btn-simpan">Update</button>
                                            </div>
                                        </form>
                                        {{-- to here --}}
                                    </div>
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
        function loadEditData(layananadministrasi) {
            // Isi nilai input dengan data dari parameter
            $('#summernote-sejarah').summernote('code', layananadministrasi.sejarah_desa);
            $('#summernote-misidesa').summernote('code', layananadministrasi.misi_desa);
            document.getElementById('editGambar').value = layananadministrasi.gambar_profiledesa;
            const editForm = document.getElementById('editLayaAdminForm');
            editForm.action = `/profildesa/${layananadministrasi.id}`;
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
