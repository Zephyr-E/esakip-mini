{{-- button tambah --}}
<button type="button" class="btn btn-primary btn-add" data-toggle="modal" data-target="#sasaranKegiatanCreateModal"><i
        class="fas fa-plus fa-sm"></i> Buat Sasaran Kegiatan</button>

{{-- modal tambah sasaran kegiatan --}}
<div class="modal fade" id="sasaranKegiatanCreateModal" tabindex="-1" role="dialog"
    aria-labelledby="sasaranKegiatanCreateModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="card">

                {{-- header --}}
                <div class="card-header">
                    <h5>Buat Sasaran Kegiatan</h5>
                </div>

                {{-- body --}}
                <div class="modal-body">
                    <form id="create-sasaran-kegiatan" class="form-material"
                        action="{{ route('sasaran-kegiatan.store') }}" method="POST">
                        @csrf
                        <input type="text" name="program_id" value="{{ $program->id }}" hidden>
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
                    <button type="submit" form="create-sasaran-kegiatan" class="btn btn-primary">Simpan</button>
                </div>

            </div>
        </div>
    </div>
</div>