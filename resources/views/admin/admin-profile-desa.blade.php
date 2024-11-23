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
                            <form action="/profiledesa" method="POST">
                                @method('put')
                                @csrf
                            <!-- Sejarah Desa -->
                            <div class="form-group row mb-3">
                                <label for="sejarahDesa" class="col-lg-2 col-md-3 col-sm-4 form-label">Sejarah Desa:</label>
                                <div class="col-lg-10 col-md-9 col-sm-8">
                                    <textarea name="deskripsi_singkat" id="summernote-sejarah" required></textarea>
                                </div>
                            </div>

                            <!-- Foto Desa -->
                            {{-- <div class="form-group row mb-3">
                                <label for="fotoDesa" class="col-lg-2 col-md-3 col-sm-4 form-label">Foto Desa:</label>
                                <div class="col-lg-10 col-md-9 col-sm-8">
                                    <input type="file" class="form-control" id="fotoDesa" accept="image/*" required
                                        multiple onchange="previewImages()">
                                </div>
                                <div id="imagePreview" class="mt-3"></div>
                            </div> --}}



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
                                    <textarea name="deskripsi_singkat" id="summernote-misidesa" required></textarea>
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
                                            <input type="number" class="form-control" value="{{ $profiledesa->total_melayu }}" placeholder=""
                                                min="0">
                                        </div>
                                        <div class="col-lg-2 col-md-3">
                                            <label  class="form-label">Madura</label>
                                            <input type="number" class="form-control" value="{{ $profiledesa->total_madura }}" placeholder=""
                                                min="0">
                                        </div>
                                        <div class="col-lg-2 col-md-3">
                                            <label  class="form-label">Tionghoa</label>
                                            <input type="number" class="form-control" value="{{ $profiledesa->total_tionghoa }}" placeholder=""
                                                min="0">
                                        </div>
                                        <div class="col-lg-2 col-md-3">
                                            <label  class="form-label">Dayak</label>
                                            <input type="number" class="form-control" value="{{ $profiledesa->total_dayak }}" placeholder=""
                                                min="0">
                                        </div>
                                        <div class="col-lg-2 col-md-3">
                                            <label  class="form-label">Jawa</label>
                                            <input type="number" class="form-control" value="{{ $profiledesa->total_jawa }}" placeholder=""
                                                min="0">
                                        </div>
                                        <div class="col-lg-2 col-md-3">
                                            <label  class="form-label">Bugis</label>
                                            <input type="number" class="form-control" value="{{ $profiledesa->total_bugis }}" placeholder=""
                                                min="0">
                                        </div>
                                        <div class="col-lg-2 col-md-3">
                                            <label  class="form-label">Lainnya</label>
                                            <input type="number" class="form-control" value="{{ $profiledesa->total_suku_lainnya }}" placeholder=""
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
                                            <input type="number" class="form-control" value="{{ $profiledesa->total_islam }}" placeholder=""
                                                min="0">
                                        </div>
                                        <div class="col-lg-2 col-md-3">
                                            <label for="agamaKatolik" class="form-label">Katolik</label>
                                            <input type="number" class="form-control" value="{{ $profiledesa->total_katolik }}" placeholder=""
                                                min="0">
                                        </div>
                                        <div class="col-lg-2 col-md-3">
                                            <label for="agamaProtestan" class="form-label">Protestan</label>
                                            <input type="number" class="form-control" value="{{ $profiledesa->total_protestan }}"
                                                placeholder="" min="0">
                                        </div>
                                        <div class="col-lg-2 col-md-3">
                                            <label for="agamaBuddha" class="form-label">Buddha</label>
                                            <input type="number" class="form-control" id="agamaBuddha" placeholder=""
                                                min="0">
                                        </div>
                                        <div class="col-lg-2 col-md-3">
                                            <label for="agamaHindu" class="form-label">Hindu</label>
                                            <input type="number" class="form-control" id="agamaHindu" placeholder=""
                                                min="0">
                                        </div>
                                        <div class="col-lg-2 col-md-3">
                                            <label for="agamaKonghuchu" class="form-label">Konghuchu</label>
                                            <input type="number" class="form-control" id="agamaKonghuchu"
                                                placeholder="" min="0">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Peta Desa -->
                            <div class="form-group row mt-3 mb-3">
                                <label for="petaDesa" class="col-lg-2 col-md-3 col-sm-4 form-label">Peta Desa:</label>
                                <div class="col-lg-10 col-md-9 col-sm-8">
                                    <input type="url" class="form-control" id="petaDesa"
                                        placeholder="Masukkan tautan alamat peta Desa" required>
                                </div>
                            </div>

                            <!-- Kantor Desa -->
                            <div class="form-group row mt-3 mb-3">
                                <label for="kantorDesa" class="col-lg-2 col-md-3 col-sm-4 form-label">Kantor Desa:</label>
                                <div class="col-lg-10 col-md-9 col-sm-8">
                                    <textarea type="text" class="form-control" id="kantorDesa" placeholder="Masukkan alamat Kantor Desa" required></textarea>
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
        
        $('#summernote-sejarah').summernote('code', `{{ $profiledesa->sejarah_desa }}`);
        $('#summernote-misidesa').summernote('code', `{{ $profiledesa->misi_desa }}`);
    </script>
@endsection