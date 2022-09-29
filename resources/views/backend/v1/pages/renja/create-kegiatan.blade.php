<button type="button" class="btn btn-sm col-12" data-toggle="modal"
    data-target="#kegiatanCreateModal{{ $program->id }}"><i class="fas fa-plus fa-sm"></i>
    Tambah Kegiatan</button>

{{-- modal membuat tujuan- --}}
<div class="modal fade" id="kegiatanCreateModal{{ $program->id }}" tabindex="-1" role="dialog"
    aria-labelledby="kegiatanCreateModalLabel{{ $program->id }}" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="card">
                <div class="card-header">
                    <h5>Tambah Kegiatan</h5>
                </div>
                <div class="card-block">
                    <div class="mb-4">
                        <h6 class="text-center mb-5">{{ $program->name }}</h6>
                    </div>
                    <form id="form-create-kegiatan-{{ $program->id }}" class="form-material"
                        action="{{ route('kegiatan.store') }}" method="POST">
                        @csrf
                        <input type="text" name="program_id" value="{{ $program->id }}" hidden>
                        <div class="form-group form-primary form-static-label pb-4">
                            <textarea name="name" class="form-control" required></textarea>
                            <span class="form-bar"></span>
                            <label class="float-label">Masukkan Kegiatan <small>(contoh: Datang tepat
                                    waktu)</small></label>
                        </div>
                        <div class="form-group form-primary form-static-label pb-4">
                            <textarea name="otorisasi" class="form-control" required></textarea>
                            <span class="form-bar"></span>
                            <label class="float-label">Masukkan Unit Kerja Penanggung Jawab</label>
                        </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" form="form-create-kegiatan-{{ $program->id }}"
                    class="btn btn-primary">Simpan</button>
            </div>
        </div>
    </div>
</div>