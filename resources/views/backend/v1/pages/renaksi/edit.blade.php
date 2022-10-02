{{-- button edit --}}
<button type="button" class="btn btn-light btn-sm text-primary" data-toggle="modal"
    data-target="#renaksiEditModal{{ $iku->id }}">
    <i class="fa fa-pencil-square-o"></i>
    Edit
</button>

{{-- modal edit program indikator --}}
<div class="modal fade" id="renaksiEditModal{{ $iku->id }}" tabindex="-1" role="dialog"
    aria-labelledby="renaksiEditModalLabel{{ $iku->id }}" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="card">

                {{-- header --}}
                <div class="card-header">
                    <h5>Perbaharui RENAKSI</h5>
                </div>

                {{-- body --}}
                <div class="modal-body">
                    <div class="mb-4">
                        <h6 class="text-center mb-5">{{ $iku->indikator }}</h6>
                    </div>
                    <form id="form-edit-renaksi-{{ $iku->id }}" class="form-material"
                        action="{{ route('renaksi.update', $iku->id) }}" method="POST">
                        @csrf
                        @method('patch')
                        <div class="form-group form-primary form-static-label pb-4">
                            <input type="number" name="target" class="form-control" value="{{ is_null($iku->target) ? 0 : $iku->target }}">
                            <span class="form-bar"></span>
                            <label class="float-label">Masukkan Target</label>
                        </div>
                        <div class="form-group form-primary form-static-label pb-4">
                            <input type="number" name="tw_i" class="form-control" value="{{ is_null($iku->tw_i) ? 0 : $iku->tw_i }}">
                            <span class="form-bar"></span>
                            <label class="float-label">Masukkan Triwulan I</label>
                        </div>
                        <div class="form-group form-primary form-static-label pb-4">
                            <input type="number" name="tw_ii" class="form-control" value="{{ is_null($iku->tw_ii) ? 0 : $iku->tw_ii }}">
                            <span class="form-bar"></span>
                            <label class="float-label">Masukkan Triwulan II</label>
                        </div>
                        <div class="form-group form-primary form-static-label pb-4">
                            <input type="number" name="tw_iii" class="form-control" value="{{ is_null($iku->tw_iii) ? 0 : $iku->tw_iii }}">
                            <span class="form-bar"></span>
                            <label class="float-label">Masukkan Triwulan III</label>
                        </div>
                        <div class="form-group form-primary form-static-label pb-4">
                            <input type="number" name="tw_iv" class="form-control" value="{{ is_null($iku->tw_iv) ? 0 : $iku->tw_iv }}">
                            <span class="form-bar"></span>
                            <label class="float-label">Masukkan Triwulan IV</label>
                        </div>
                        <div class="form-group form-primary form-static-label pb-4">
                            <input type="number" name="realisasi" class="form-control" value="{{ is_null($iku->realisasi) ? 0 : $iku->realisasi }}"
                            >
                            <span class="form-bar"></span>
                            <label class="float-label">Masukkan Realisasi</label>
                        </div>
                        <div class="form-group form-primary form-static-label pb-4">
                            <input type="number" name="capaian" class="form-control" value="{{ is_null($iku->capaian) ? 0 : $iku->capaian }}"
                            >
                            <span class="form-bar"></span>
                            <label class="float-label">Masukkan Capaian</label>
                        </div>
                    </form>
                </div>

                {{-- footer --}}
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <button type="submit" form="form-edit-renaksi-{{ $iku->id }}"
                        class="btn btn-primary">Perbaharui</button>
                </div>

            </div>
        </div>
    </div>
</div>