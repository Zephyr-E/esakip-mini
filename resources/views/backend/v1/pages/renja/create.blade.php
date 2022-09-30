{{-- button tambah --}}
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#programCreateModal"><i
        class="fas fa-plus fa-sm"></i> Buat Program</button>

{{-- modal tambah program --}}
<div class="modal fade" id="programCreateModal" tabindex="-1" role="dialog" aria-labelledby="programCreateModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="card">

                {{-- header --}}
                <div class="card-header">
                    <h5>Buat Program</h5>
                </div>

                {{-- body --}}
                <div class="modal-body">
                    <form id="create-program" class="form-material" action="{{ route('renja.store') }}" method="POST">
                        @csrf
                        <div class="form-group form-primary form-static-label pb-4">
                            <select class="form-control selectpicker" name="sasaran_renstra_id" id="sasaran_renstra_id"
                                data-live-search="true">
                                @foreach ($sasaran_renstras as $sasaran_renstra)
                                <option value="{{ $sasaran_renstra->id }}" class="option-custom">{{
                                    'Sasaran SKPD : '.$sasaran_renstra->name
                                    }}</option>
                                @endforeach
                            </select>
                            <span class="form-bar"></span>
                            <label class="float-label">Sasaran SKPD <small> (pilih Sasaran)</small></label>
                        </div>
                        <div class="form-group form-primary form-static-label pb-4">
                            <input type="text" name="name" class="form-control" required>
                            <span class="form-bar"></span>
                            <label class="float-label">Masukkan Program</label>
                        </div>
                        <div class="form-group form-primary form-static-label pb-4">
                            <textarea type="text" name="kendala" class="form-control row-cols-sm-3" required></textarea>
                            <span class="form-bar"></span>
                            <label class="float-label">Masukkan Kendala</label>
                        </div>
                        <div class="form-group form-primary form-static-label pb-4">
                            <textarea type="text" name="solusi" class="form-control row-cols-sm-3" required></textarea>
                            <span class="form-bar"></span>
                            <label class="float-label">Masukkan Solusi</label>
                        </div>
                        <div class="form-group form-primary form-static-label pb-4">
                            <textarea type="text" name="tindak_lanjut" class="form-control row-cols-sm-3"
                                required></textarea>
                            <span class="form-bar"></span>
                            <label class="float-label">Masukkan Tindak Lanjut</label>
                        </div>
                        <div class="form-group form-primary form-static-label pb-4">
                            <input type="text" name="otorisasi" class="form-control row-cols-sm-3" required>
                            <span class="form-bar"></span>
                            <label class="float-label">Masukkan Unit Kerja Penanggung Jawab</label>
                        </div>
                        <div class="form-group form-primary form-static-label pb-4">
                            <div class="col-3 form-control">
                                <select name="apbd" class="form-control" required>
                                    <option value=" ">Pilih</option>
                                    <option value="murni">Murni</option>
                                    <option value="perubahan">Perubahan</option>
                                </select>
                            </div>
                            <span class="form-bar"></span>
                            <label class="float-label">APBD <small> (pilih APBD)</small></label>
                        </div>
                        <div class="form-group form-primary form-static-label pb-4">
                            <input type="text" name="tahun" class="form-control row-cols-sm-3" required>
                            <span class="form-bar"></span>
                            <label class="float-label">Masukkan Tahun</label>
                        </div>
                    </form>
                </div>

                {{-- footer --}}
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <button type="submit" form="create-program" class="btn btn-primary">Simpan</button>
                </div>

            </div>
        </div>
    </div>
</div>