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
                        <div class="card-body">
                            <!-- Nama Desa -->
                            
                            <form action="/profildesa/{{ $profiledesa->id }}" method="POST" enctype="multipart/form-data">
                                @method('put')
                                @csrf
                                <input type="text" name="id" required hidden value="{{ $profiledesa->id }}">
                                <!-- Foto Desa -->
                            <div class="form-group row mb-3">
                                <img src="{{ asset('storage/'.$profiledesa->gambar_profiledesa) }}" alt="no image yet" id="previewImage" >
                                <label for="fotoDesa" class="col-lg-2 col-md-3 col-sm-4 form-label">Foto Desa:</label>
                                <div class="col-lg-10 col-md-9 col-sm-8">
                                    <input type="file" class="form-control" name="gambar_profiledesa" accept="image/*" required
                                        multiple onchange="changeImage(event)">
                                </div>
                            </div>
                            <!-- Sejarah Desa -->
                            <div class="form-group row mb-3">
                                <label for="sejarahDesa" class="col-lg-2 col-md-3 col-sm-4 form-label">Sejarah Desa:</label>
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
                                <label for="misiDesa" class="col-lg-2 col-md-3 col-sm-4 form-label">Misi Desa:</label>
                                <div class="col-lg-10 col-md-9 col-sm-8">
                                    <textarea name="misi_desa"  id="summernote-misidesa" required></textarea>
                                </div>
                            </div>

                            <!-- Additional Details (Total Jiwa, Total KK, Total Dusun, Total RT) -->
                            <div class="form-group row gx-3 gy-3">
                                <div class="col-lg-3 col-md-6">
                                    <label  class="form-label">Total Jiwa:</label>
                                    <input type="number" class="form-control" name="total_jiwa" required value="{{ $profiledesa->total_jiwa }}">
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <label  class="form-label">Total KK:</label>
                                    <input type="number" class="form-control" name="total_kk" required value="{{ $profiledesa->total_kk }}">
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <label  class="form-label">Total Dusun:</label>
                                    <input type="number" class="form-control" name="total_dusun" required value="{{ $profiledesa->total_dusun }}">
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <label  class="form-label">Total RT:</label>
                                    <input type="number" class="form-control" name="total_rt" required value="{{ $profiledesa->total_rt }}">
                                </div>
                            </div>

                            <!-- Suku -->
                            <div class="form-group row mt-3 mb-3">
                                <label class="col-lg-2 col-md-3 col-sm-4 form-label"> Suku:</label>
                                <div class="col-lg-10 col-md-9 col-sm-8">
                                    <div class="row gx-3 gy-2">
                                        <div class="col-lg-2 col-md-3">
                                            <label  class="form-label">Melayu</label>
                                            <input type="number" class="form-control" name="total_melayu" value="{{ $profiledesa->total_melayu }}" placeholder=""
                                                min="0">
                                        </div>
                                        <div class="col-lg-2 col-md-3">
                                            <label  class="form-label">Madura</label>
                                            <input type="number" class="form-control" name="total_madura" value="{{ $profiledesa->total_madura }}" placeholder=""
                                                min="0">
                                        </div>
                                        <div class="col-lg-2 col-md-3">
                                            <label  class="form-label">Tionghoa</label>
                                            <input type="number" class="form-control" name="total_tionghoa" value="{{ $profiledesa->total_tionghoa }}" placeholder=""
                                                min="0">
                                        </div>
                                        <div class="col-lg-2 col-md-3">
                                            <label  class="form-label">Dayak</label>
                                            <input type="number" class="form-control" name="total_dayak" value="{{ $profiledesa->total_dayak }}" placeholder=""
                                                min="0">
                                        </div>
                                        <div class="col-lg-2 col-md-3">
                                            <label  class="form-label">Jawa</label>
                                            <input type="number" class="form-control" name="total_jawa" value="{{ $profiledesa->total_jawa }}" placeholder=""
                                                min="0">
                                        </div>
                                        <div class="col-lg-2 col-md-3">
                                            <label  class="form-label">Bugis</label>
                                            <input type="number" class="form-control" name="total_bugis" value="{{ $profiledesa->total_bugis }}" placeholder=""
                                                min="0">
                                        </div>
                                        <div class="col-lg-2 col-md-3">
                                            <label  class="form-label">Lainnya</label>
                                            <input type="number" class="form-control" name="total_suku_lainnya" value="{{ $profiledesa->total_suku_lainnya }}" placeholder=""
                                                min="0">
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
                                            <input type="number" class="form-control" name="total_islam" value="{{ $profiledesa->total_islam }}" placeholder=""
                                                min="0">
                                        </div>
                                        <div class="col-lg-2 col-md-3">
                                            <label for="agamaKatolik" class="form-label">Katolik</label>
                                            <input type="number" class="form-control" name="total_katolik" value="{{ $profiledesa->total_katolik }}" placeholder=""
                                                min="0">
                                        </div>
                                        <div class="col-lg-2 col-md-3">
                                            <label for="agamaProtestan" class="form-label">Protestan</label>
                                            <input type="number" class="form-control" name="total_protestan" value="{{ $profiledesa->total_protestan }}"
                                                placeholder="" min="0">
                                        </div>
                                        <div class="col-lg-2 col-md-3">
                                            <label for="agamaBuddha" class="form-label">Buddha</label>
                                            <input type="number" class="form-control" name="total_buddha" id="agamaBuddha" value="{{ $profiledesa->total_buddha }}" placeholder=""
                                                min="0">
                                        </div>
                                        <div class="col-lg-2 col-md-3">
                                            <label for="agamaHindu" class="form-label">Hindu</label>
                                            <input type="number" class="form-control" name="total_hindu" value="{{ $profiledesa->total_hindu }}" placeholder=""
                                                min="0">
                                        </div>
                                        <div class="col-lg-2 col-md-3">
                                            <label for="agamaKonghuchu" class="form-label">Konghuchu</label>
                                            <input type="number" class="form-control" name="total_konghuchu" value="{{ $profiledesa->total_konghuchu }}"
                                                placeholder="" min="0">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Peta Desa -->
                            <div class="form-group row mt-3 mb-3">
                                <label for="petaDesa" class="col-lg-2 col-md-3 col-sm-4 form-label">Peta Desa:</label>
                                <div class="col-lg-10 col-md-9 col-sm-8">
                                    <input type="text" class="form-control" id="petaDesa"
                                        placeholder="Masukkan tautan alamat peta Desa" name="peta_desa" required value="{{ $profiledesa->peta_desa }}">
                                </div>
                            </div>

                            <!-- Submit Button -->
                            <div class="d-flex justify-content-end mt-4">
                                <button type="submit" class="btn btn-simpan" >Simpan</button>
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
        window.addEventListener("load", () => {
            $('#summernote-sejarah').summernote('code', '{{ $profiledesa->sejarah_desa }}');
            $('#summernote-misidesa').summernote('code', '{{ $profiledesa->misi_desa }}');
        })

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