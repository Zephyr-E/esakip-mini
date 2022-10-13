{{-- button tambah --}}
<button type="button" class="btn btn-sm col-12" data-toggle="modal"
    data-target="#kegiatanIndikatorCreateModal{{ $kegiatan->id }}"><i class="fas fa-plus fa-sm"></i>
    Tambah Kegiatan Indikator</button>

{{-- modal tambah kegiatan indikator --}}
<div class="modal fade" id="kegiatanIndikatorCreateModal{{ $kegiatan->id }}" tabindex="-1" role="dialog"
    aria-labelledby="kegiatanIndikatorCreateModalLabel{{ $kegiatan->id }}" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="card">

                {{-- header --}}
                <div class="card-header">
                    <h5>Tambah Kegiatan Indikator</h5>
                </div>

                {{-- body --}}
                <div class="modal-body">
                    <h6 style="white-space: normal; text-align: center" class="mb-5">{{ $kegiatan->name }}</h6>
                    <form id="form-create-kegiatan-indikator-{{ $kegiatan->id }}" class="form-material"
                        action="{{ route('kegiatan-indikator.store') }}" method="POST">
                        @csrf
                        <input type="text" name="kegiatan_id" value="{{ $kegiatan->id }}" hidden>
                        <div class="form-group form-primary form-static-label pb-4">
                            <textarea name="indikator" class="form-control" required></textarea>
                            <span class="form-bar"></span>
                            <label class="float-label">Masukkan Indikator</label>
                        </div>
                    </form>
                </div>

                {{-- footer --}}
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <button type="submit" form="form-create-kegiatan-indikator-{{ $kegiatan->id }}"
                        class="btn btn-primary">Simpan</button>
                </div>

            </div>
        </div>
    </div>
</div>