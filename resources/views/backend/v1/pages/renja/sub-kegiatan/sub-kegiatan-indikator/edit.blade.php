{{-- button edit --}}
<button type="button" class="btn btn-light btn-sm text-primary" data-toggle="modal"
    data-target="#subKegiatanIndikatorEditModal{{ $sub_kegiatan_indikator->id }}">
    <i class="fa fa-pencil-square-o"></i>
    Edit
</button>

{{-- modal edit sub kegiatan indikator --}}
<div class="modal fade" id="subKegiatanIndikatorEditModal{{ $sub_kegiatan_indikator->id }}" tabindex="-1" role="dialog"
    aria-labelledby="subKegiatanIndikatorEditModalLabel{{ $sub_kegiatan_indikator->id }}" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="card">

                {{-- header --}}
                <div class="card-header">
                    <h5>Perbaharui Sub Kegiatan Indikator</h5>
                </div>

                {{-- body --}}
                <div class="modal-body">
                    <h6 style="white-space: normal; text-align: center" class="mb-5">{{ $sub_kegiatan->name }}</h6>
                    <form id="form-edit-sub-kegiatan-indikator-{{ $sub_kegiatan_indikator->id }}" class="form-material"
                        action="{{ route('sub-kegiatan-indikator.update', $sub_kegiatan_indikator->id) }}"
                        method="POST">
                        @csrf
                        @method('patch')
                        <div class="form-group form-primary form-static-label pb-4">
                            <textarea name="indikator" class="form-control"
                                required>{{ $sub_kegiatan_indikator->indikator }}</textarea>
                            <span class="form-bar"></span>
                            <label class="float-label">Masukkan Indikator</label>
                        </div>
                    </form>
                </div>

                {{-- footer --}}
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <button type="submit" form="form-edit-sub-kegiatan-indikator-{{ $sub_kegiatan_indikator->id }}"
                        class="btn btn-primary">Perbaharui</button>
                </div>

            </div>
        </div>
    </div>
</div>