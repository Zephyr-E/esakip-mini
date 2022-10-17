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
                    <h6 style="white-space: normal; text-align: center" class="mb-5">{{ $iku->indikator }}</h6>
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
                        <div class="form-group form-primary form-static-label pb-4">
                            <input type="text" name="capaian" class="form-control" value="{{ $iku->capaian }}">
                            <span class="form-bar"></span>
                            <label class="float-label">Masukkan Capaian</label>
                        </div>

                        @include('backend.v1.pages.monev.triwulan.iku')

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