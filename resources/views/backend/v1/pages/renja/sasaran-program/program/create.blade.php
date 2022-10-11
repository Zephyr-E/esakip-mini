{{-- button tambah --}}
<button type="button" class="btn btn-sm col-12" data-toggle="modal"
    data-target="#programCreateModal{{ $sasaran_program->id }}"><i class="fas fa-plus fa-sm"></i>
    Tambah Program</button>

{{-- modal tambah program indikator --}}
<div class="modal fade" id="programCreateModal{{ $sasaran_program->id }}" tabindex="-1" role="dialog"
    aria-labelledby="programCreateModalLabel{{ $sasaran_program->id }}" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="card">

                {{-- header --}}
                <div class="card-header">
                    <h5>Buat Sasaran Program</h5>
                </div>

                {{-- body --}}
                <div class="modal-body">
                    <form id="create-program-{{ $sasaran_program->id }}" class="form-material"
                        action="{{ route('program.store') }}" method="POST">
                        @csrf
                        <input type="text" name="sasaran_program_id" value="{{ $sasaran_program->id }}" hidden>
                        <div class="form-group form-primary form-static-label pb-4">
                            <input type="text" name="name" class="form-control" required>
                            <span class="form-bar"></span>
                            <label class="float-label">Masukkan Program</label>
                        </div>
                        <div class="form-group form-primary form-static-label pb-4">
                            <textarea type="text" name="kendala" class="form-control row-cols-sm-3"></textarea>
                            <span class="form-bar"></span>
                            <label class="float-label">Masukkan Kendala</label>
                        </div>
                        <div class="form-group form-primary form-static-label pb-4">
                            <textarea type="text" name="solusi" class="form-control row-cols-sm-3"></textarea>
                            <span class="form-bar"></span>
                            <label class="float-label">Masukkan Solusi</label>
                        </div>
                        <div class="form-group form-primary form-static-label pb-4">
                            <textarea type="text" name="tindak_lanjut" class="form-control row-cols-sm-3"></textarea>
                            <span class="form-bar"></span>
                            <label class="float-label">Masukkan Tindak Lanjut</label>
                        </div>
                        <div class="form-group form-primary form-static-label pb-4">
                            <input type="text" name="otorisasi" class="form-control row-cols-sm-3" required>
                            <span class="form-bar"></span>
                            <label class="float-label">Masukkan Otorisasi</label>
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
                    </form>
                </div>

                {{-- footer --}}
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <button type="submit" form="create-program-{{ $sasaran_program->id }}"
                        class="btn btn-primary">Simpan</button>
                </div>

            </div>
        </div>
    </div>
</div>