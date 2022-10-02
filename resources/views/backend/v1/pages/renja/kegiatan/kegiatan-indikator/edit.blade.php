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
                    <div class="mb-4">
                        <h6 class="text-center mb-5">{{ $program->name }}</h6>
                    </div>
                    <form id="form-edit-kegiatan-indikator-{{ $kegiatan_indikator->id }}" class="form-material"
                        action="{{ route('kegiatan-indikator.update', $kegiatan_indikator->id) }}" method="POST">
                        @csrf
                        @method('patch')
                        <div class="form-group form-primary form-static-label pb-4">
                            <textarea name="indikator" class="form-control"
                                required>{{ $kegiatan_indikator->indikator }}</textarea>
                            <span class="form-bar"></span>
                            <label class="float-label">Masukkan Indikator</label>
                        </div>
                        <div class="form-group form-primary form-static-label pb-4">
                            <input name="satuan" class="form-control" value="{{ $kegiatan_indikator->satuan }}"
                                required>
                            <span class="form-bar"></span>
                            <label class="float-label">Masukkan Satuan (contoh: persentasi)</label>
                        </div>
                        <div class="form-group form-primary form-static-label pb-4">
                            <input name="tahun" class="form-control" value="{{ $kegiatan_indikator->tahun }}" required>
                            <span class="form-bar"></span>
                            <label class="float-label">Masukkan Tahun</label>
                        </div>

                        {{-- boleh kosong --}}
                        <h6 class="text-center mb-5">isian dibawah ini boleh kosong</h6>

                        <div class="form-group form-primary form-static-label pb-4">
                            <input type="number" name="target" class="form-control"
                                value="{{ $kegiatan_indikator->target }}">
                            <span class="form-bar"></span>
                            <label class="float-label">Masukkan Target</label>
                        </div>
                        <div class="form-group form-primary form-static-label pb-4">
                            <input type="number" name="realisasi" class="form-control"
                                value="{{ $kegiatan_indikator->realisasi }}">
                            <span class="form-bar"></span>
                            <label class="float-label">Masukkan Realisasi</label>
                        </div>
                        <div class="form-group form-primary form-static-label pb-4">
                            <input type="number" name="tw_i" class="form-control"
                                value="{{ $kegiatan_indikator->tw_i }}">
                            <span class="form-bar"></span>
                            <label class="float-label">Masukkan Triwulan I</label>
                        </div>
                        <div class="form-group form-primary form-static-label pb-4">
                            <input type="number" name="tw_ii" class="form-control"
                                value="{{ $kegiatan_indikator->tw_ii }}">
                            <span class="form-bar"></span>
                            <label class="float-label">Masukkan Triwulan II</label>
                        </div>
                        <div class="form-group form-primary form-static-label pb-4">
                            <input type="number" name="tw_iii" class="form-control"
                                value="{{ $kegiatan_indikator->tw_iii }}">
                            <span class="form-bar"></span>
                            <label class="float-label">Masukkan Triwulan III</label>
                        </div>
                        <div class="form-group form-primary form-static-label pb-4">
                            <input type="number" name="tw_iv" class="form-control"
                                value="{{ $kegiatan_indikator->tw_iv }}">
                            <span class="form-bar"></span>
                            <label class="float-label">Masukkan Triwulan IV</label>
                        </div>
                        <div class="form-group form-primary form-static-label pb-4">
                            <input type="number" name="capaian" class="form-control"
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