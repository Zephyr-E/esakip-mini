{{-- button tambah --}}
<button type="button" class="btn btn-sm col-12" data-toggle="modal"
    data-target="#subKegiatanIndikatorCreateModal{{ $sub_kegiatan->id }}"><i class="fas fa-plus fa-sm"></i>
    Tambah Sub Kegiatan Indikator</button>

{{-- modal tambah sub kegiatan indikator --}}
<div class="modal fade" id="subKegiatanIndikatorCreateModal{{ $sub_kegiatan->id }}" tabindex="-1" role="dialog"
    aria-labelledby="subKegiatanIndikatorCreateModalLabel{{ $sub_kegiatan->id }}" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="card">

                {{-- header --}}
                <div class="card-header">
                    <h5>Buat Sub Kegiatan Indikator</h5>
                </div>

                {{-- body --}}
                <div class="modal-body">
                    <h6 style="white-space: normal; text-align: center" class="mb-5">{{ $sub_kegiatan->name }}</h6>
                    <form id="form-create-sub-kegiatan-indikator-{{ $sub_kegiatan->id }}" class="form-material"
                        action="{{ route('sub-kegiatan-indikator.store') }}" method="POST">
                        @csrf
                        <input type="text" name="sub_kegiatan_id" value="{{ $sub_kegiatan->id }}" hidden>
                        <div class="form-group form-primary form-static-label pb-4">
                            <textarea name="indikator" class="form-control" required></textarea>
                            <span class="form-bar"></span>
                            <label class="float-label">Masukkan Indikator</label>
                        </div>
                    </form>
                </div>

                {{-- footer --}}
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" form="form-create-sub-kegiatan-indikator-{{ $sub_kegiatan->id }}"
                        class="btn btn-primary">Simpan</button>
                </div>

            </div>
        </div>
    </div>
</div>