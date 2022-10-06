{{-- button tambah --}}
<button type="button" class="btn btn-primary btn-add" data-toggle="modal" data-target="#sasaranProgramCreateModal"><i
        class="fas fa-plus fa-sm"></i> Buat Sasaran Program</button>

{{-- modal tambah sasaran program --}}
<div class="modal fade" id="sasaranProgramCreateModal" tabindex="-1" role="dialog"
    aria-labelledby="sasaranProgramCreateModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="card">

                {{-- header --}}
                <div class="card-header">
                    <h5>Buat Sasaran Program</h5>
                </div>

                {{-- body --}}
                <div class="modal-body">
                    <form id="create-sasaran-program" class="form-material" action="{{ route('renja.store') }}"
                        method="POST">
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
                            <input type="text" name="nomor" class="form-control" required>
                            <span class="form-bar"></span>
                            <label class="float-label">Masukkan Nomor</label>
                        </div>
                        <div class="form-group form-primary form-static-label pb-4">
                            <input type="text" name="name" class="form-control" required>
                            <span class="form-bar"></span>
                            <label class="float-label">Masukkan Sasaran</label>
                        </div>
                    </form>
                </div>

                {{-- footer --}}
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <button type="submit" form="create-sasaran-program" class="btn btn-primary">Simpan</button>
                </div>

            </div>
        </div>
    </div>
</div>