{{-- button tambah --}}
<button type="button" class="btn btn-primary" data-toggle="modal"
    data-target="#kegiatanCreateModal"><i class="fas fa-plus fa-sm"></i> Buat Kegiatan</button>

{{-- modal tambah kegiatan --}}
<div class="modal fade" id="kegiatanCreateModal" tabindex="-1" role="dialog"
    aria-labelledby="kegiatanCreateModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="card">

                {{-- header --}}
                <div class="card-header">
                    <h5>Tambah Kegiatan</h5>
                </div>

                {{-- body --}}
                <div class="modal-body">
                    <div class="mb-4">
                        <h6 class="text-center mb-5">{{ $program->name }}</h6>
                    </div>
                    <form id="form-create-kegiatan" class="form-material"
                        action="{{ route('kegiatan.store') }}" method="POST">
                        @csrf
                        <input type="text" name="program_id" value="{{ $program->id }}" hidden>
                        <div class="form-group form-primary form-static-label pb-4">
                            <textarea name="name" class="form-control" required></textarea>
                            <span class="form-bar"></span>
                            <label class="float-label">Masukkan Kegiatan</label>
                        </div>
                        <div class="form-group form-primary form-static-label pb-4">
                            <input name="otorisasi" class="form-control" required>
                            <span class="form-bar"></span>
                            <label class="float-label">Masukkan Unit Kerja Penanggung Jawab</label>
                        </div>
                    </form>
                </div>

                {{-- footer --}}
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <button type="submit" form="form-create-kegiatan"
                        class="btn btn-primary">Simpan</button>
                </div>

            </div>
        </div>
    </div>
</div>