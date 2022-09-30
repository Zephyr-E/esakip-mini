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
                    <div class="mb-4">
                        <h6 class="text-center mb-5">{{ $sub_kegiatan->name }}</h6>
                    </div>
                    <form id="form-edit-sub-kegiatan-indikator-{{ $sub_kegiatan_indikator->id }}" class="form-material"
                        action="{{ route('sub-kegiatan-indikator.update', $sub_kegiatan_indikator->id) }}" method="POST">
                        @csrf
                        @method('patch')
                        <div class="form-group form-primary form-static-label pb-4">
                            <textarea name="indikator" class="form-control"
                                required>{{ $sub_kegiatan_indikator->indikator }}</textarea>
                            <span class="form-bar"></span>
                            <label class="float-label">Masukkan Indikator</label>
                        </div>
                        <div class="form-group form-primary form-static-label pb-4">
                            <input name="satuan" class="form-control" value="{{ $sub_kegiatan_indikator->satuan }}" required>
                            <span class="form-bar"></span>
                            <label class="float-label">Masukkan Satuan (contoh: persentasi)</label>
                        </div>
                        <div class="form-group form-primary form-static-label pb-4">
                            <input type="number" name="target" class="form-control"
                                value="{{ $sub_kegiatan_indikator->target }}" required>
                            <span class="form-bar"></span>
                            <label class="float-label">Masukkan Target</label>
                        </div>
                        <div class="form-group form-primary form-static-label pb-4">
                            <input name="realisasi" class="form-control" value="{{ $sub_kegiatan_indikator->realisasi }}"
                                required>
                            <span class="form-bar"></span>
                            <label class="float-label">Masukkan Realisasi</label>
                        </div>
                        <div class="form-group form-primary form-static-label pb-4">
                            <input name="tahun" class="form-control" value="{{ $sub_kegiatan_indikator->tahun }}" required>
                            <span class="form-bar"></span>
                            <label class="float-label">Masukkan Tahun</label>
                        </div>

                        {{-- triwulan --}}
                        <div class="form-group form-primary form-static-label pb-4">
                            <input type="number" name="tw_i" class="form-control" value="{{ $sub_kegiatan_indikator->tw_i }}"
                                required>
                            <span class="form-bar"></span>
                            <label class="float-label">Masukkan Triwulan I</label>
                        </div>
                        <div class="form-group form-primary form-static-label pb-4">
                            <input type="number" name="tw_ii" class="form-control"
                                value="{{ $sub_kegiatan_indikator->tw_ii }}" required>
                            <span class="form-bar"></span>
                            <label class="float-label">Masukkan Triwulan II</label>
                        </div>
                        <div class="form-group form-primary form-static-label pb-4">
                            <input type="number" name="tw_iii" class="form-control"
                                value="{{ $sub_kegiatan_indikator->tw_iii }}" required>
                            <span class="form-bar"></span>
                            <label class="float-label">Masukkan Triwulan III</label>
                        </div>
                        <div class="form-group form-primary form-static-label pb-4">
                            <input type="number" name="tw_iv" class="form-control"
                                value="{{ $sub_kegiatan_indikator->tw_iv }}" required>
                            <span class="form-bar"></span>
                            <label class="float-label">Masukkan Triwulan IV</label>
                        </div>
                        <div class="form-group form-primary form-static-label pb-4">
                            <input type="number" name="capaian" class="form-control"
                                value="{{ $sub_kegiatan_indikator->capaian }}" required>
                            <span class="form-bar"></span>
                            <label class="float-label">Masukkan Capaian</label>
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