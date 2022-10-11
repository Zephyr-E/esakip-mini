{{-- button edit --}}
<button type="button" class="btn btn-light btn-sm text-primary" data-toggle="modal"
    data-target="#ikuEditModal{{ $iku->id }}">
    <i class="fa fa-pencil-square-o"></i>
    Edit
</button>

{{-- modal edit program indikator --}}
<div class="modal fade" id="ikuEditModal{{ $iku->id }}" tabindex="-1" role="dialog"
    aria-labelledby="ikuEditModalLabel{{ $iku->id }}" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="card">

                {{-- header --}}
                <div class="card-header">
                    <h5>Perbaharui IKU</h5>
                </div>

                {{-- body --}}
                <div class="modal-body">
                    <div class="mb-4">
                        <h6 class="text-center mb-5">{{ $iku->indikator }}</h6>
                    </div>
                    <form id="form-edit-iku-{{ $iku->id }}" class="form-material"
                        action="{{ route('monev.iku', $iku->id) }}" method="POST">
                        @csrf
                        @method('patch')
                        <div class="form-group form-primary form-static-label pb-4">
                            <input type="text" name="satuan" class="form-control" value="{{ $iku->satuan }}">
                            <span class="form-bar"></span>
                            <label class="float-label">Masukkan Satuan</label>
                        </div>
                        <div class="form-inline">
                            <div class="form-group form-primary form-static-label pb-4 col-6">
                                <input type="text" name="target" class="form-control" value="{{ $iku->target }}">
                                <span class="form-bar"></span>
                                <label class="float-label">Masukkan Target</label>
                            </div>
                            <div class="form-group form-primary form-static-label pb-4 col-6">
                                <input type="text" name="pagu_target" class="form-control"
                                    value="{{ $iku->pagu_target }}">
                                <span class="form-bar"></span>
                                <label class="float-label">Masukkan Pagu Target</label>
                            </div>
                        </div>
                        <div class="form-inline">
                            <div class="form-group form-primary form-static-label pb-4 col-6">
                                <input type="text" name="tw_i" class="form-control" value="{{ $iku->tw_i }}">
                                <span class="form-bar"></span>
                                <label class="float-label">Masukkan Triwulan I</label>
                            </div>
                            <div class="form-group form-primary form-static-label pb-4 col-6">
                                <input type="number" name="pagu_i" class="form-control" value="{{ $iku->pagu_i }}">
                                <span class="form-bar"></span>
                                <label class="float-label">Masukkan Pagu I</label>
                            </div>
                        </div>
                        <div class="form-inline">
                            <div class="form-group form-primary form-static-label pb-4 col-6">
                                <input type="text" name="tw_ii" class="form-control" value="{{ $iku->tw_ii }}">
                                <span class="form-bar"></span>
                                <label class="float-label">Masukkan Triwulan II</label>
                            </div>
                            <div class="form-group form-primary form-static-label pb-4 col-6">
                                <input type="number" name="pagu_ii" class="form-control" value="{{ $iku->pagu_ii }}">
                                <span class="form-bar"></span>
                                <label class="float-label">Masukkan Pagu II</label>
                            </div>
                        </div>
                        <div class="form-inline">
                            <div class="form-group form-primary form-static-label pb-4 col-6">
                                <input type="text" name="tw_iii" class="form-control" value="{{ $iku->tw_iii }}">
                                <span class="form-bar"></span>
                                <label class="float-label">Masukkan Triwulan III</label>
                            </div>
                            <div class="form-group form-primary form-static-label pb-4 col-6">
                                <input type="number" name="pagu_iii" class="form-control" value="{{ $iku->pagu_iii }}">
                                <span class="form-bar"></span>
                                <label class="float-label">Masukkan Pagu III</label>
                            </div>
                        </div>
                        <div class="form-inline">
                            <div class="form-group form-primary form-static-label pb-4 col-6">
                                <input type="text" name="tw_iv" class="form-control" value="{{ $iku->tw_iv }}">
                                <span class="form-bar"></span>
                                <label class="float-label">Masukkan Triwulan IV</label>
                            </div>
                            <div class="form-group form-primary form-static-label pb-4 col-6">
                                <input type="number" name="pagu_iv" class="form-control" value="{{ $iku->pagu_iv }}">
                                <span class="form-bar"></span>
                                <label class="float-label">Masukkan Pagu IV</label>
                            </div>
                        </div>
                        <div class="form-group form-primary form-static-label pb-4">
                            <input type="text" name="capaian" class="form-control" value="{{ $iku->capaian }}">
                            <span class="form-bar"></span>
                            <label class="float-label">Masukkan Capaian</label>
                        </div>
                    </form>
                </div>

                {{-- footer --}}
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <button type="submit" form="form-edit-iku-{{ $iku->id }}"
                        class="btn btn-primary">Perbaharui</button>
                </div>

            </div>
        </div>
    </div>
</div>