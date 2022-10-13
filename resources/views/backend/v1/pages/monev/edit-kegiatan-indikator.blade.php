{{-- button edit --}}
<button type="button" class="btn btn-light btn-sm text-primary" data-toggle="modal"
    data-target="#kegiatanIndikatorEditModal{{ $kegiatan_indikator->id }}">
    <i class="fa fa-pencil-square-o"></i>
    Edit
</button>

{{-- modal edit kegiatan indikator --}}
<div class="modal fade" id="kegiatanIndikatorEditModal{{ $kegiatan_indikator->id }}" tabindex="-1" role="dialog"
    aria-labelledby="kegiatanIndikatorEditModalLabel{{ $kegiatan_indikator->id }}" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="card">

                {{-- header --}}
                <div class="card-header">
                    <h5>Perbaharui Kegiatan Indikator</h5>
                </div>

                {{-- body --}}
                <div class="modal-body">
                    <h6 style="white-space: normal; text-align: center" class="mb-5">{{ $kegiatan_indikator->indikator }}</h6>
                    <form id="form-edit-kegiatan-indikator-{{ $kegiatan_indikator->id }}" class="form-material"
                        action="{{ route('monev.kegiatan-indikator-update', $kegiatan_indikator->id) }}" method="POST">
                        @csrf
                        @method('patch')
                        <div class="form-group form-primary form-static-label pb-4">
                            <input type="text" name="satuan" class="form-control"
                                value="{{ $kegiatan_indikator->satuan }}">
                            <span class="form-bar"></span>
                            <label class="float-label">Masukkan Satuan</label>
                        </div>
                        <div class="form-group form-primary form-static-label pb-4">
                            <input type="text" name="target" class="form-control"
                                value="{{ $kegiatan_indikator->target }}">
                            <span class="form-bar"></span>
                            <label class="float-label">Masukkan Target</label>
                        </div>

                        @include('backend.v1.pages.monev.triwulan.kegiatan-indikator')

                        <div class="form-group form-primary form-static-label pb-4">
                            <input type="text" name="capaian" class="form-control"
                                value="{{ $kegiatan_indikator->capaian }}">
                            <span class="form-bar"></span>
                            <label class="float-label">Masukkan Capaian</label>
                        </div>
                    </form>
                </div>

                {{-- footer --}}
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <button type="submit" form="form-edit-kegiatan-indikator-{{ $kegiatan_indikator->id }}"
                        class="btn btn-primary">Perbaharui</button>
                </div>

            </div>
        </div>
    </div>
</div>