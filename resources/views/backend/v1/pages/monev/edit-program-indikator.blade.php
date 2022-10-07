{{-- button edit --}}
<button type="button" class="btn btn-light btn-sm text-primary" data-toggle="modal"
    data-target="#programIndikatorEditModal{{ $program_indikator->id }}">
    <i class="fa fa-pencil-square-o"></i>
    Edit
</button>

{{-- modal edit program indikator --}}
<div class="modal fade" id="programIndikatorEditModal{{ $program_indikator->id }}" tabindex="-1" role="dialog"
    aria-labelledby="programIndikatorEditModalLabel{{ $program_indikator->id }}" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="card">

                {{-- header --}}
                <div class="card-header">
                    <h5>Perbaharui Program Indikator</h5>
                </div>

                {{-- body --}}
                <div class="modal-body">
                    <div class="mb-4">
                        <h6 class="text-center mb-5">{{ $program_indikator->indikator }}</h6>
                    </div>
                    <form id="form-edit-program-indikator-{{ $program_indikator->id }}" class="form-material"
                        action="{{ route('monev.program-indikator-update', $program_indikator->id) }}" method="POST">
                        @csrf
                        @method('patch')
                        <div class="form-group form-primary form-static-label pb-4">
                            <input type="text" name="target" class="form-control" value="{{ $program_indikator->target }}">
                            <span class="form-bar"></span>
                            <label class="float-label">Masukkan Target</label>
                        </div>
                        <div class="form-group form-primary form-static-label pb-4">
                            <input type="text" name="tw_i" class="form-control" value="{{ $program_indikator->tw_i }}">
                            <span class="form-bar"></span>
                            <label class="float-label">Masukkan Triwulan I</label>
                        </div>
                        <div class="form-group form-primary form-static-label pb-4">
                            <input type="text" name="tw_ii" class="form-control" value="{{ $program_indikator->tw_ii }}">
                            <span class="form-bar"></span>
                            <label class="float-label">Masukkan Triwulan II</label>
                        </div>
                        <div class="form-group form-primary form-static-label pb-4">
                            <input type="text" name="tw_iii" class="form-control" value="{{ $program_indikator->tw_iii }}">
                            <span class="form-bar"></span>
                            <label class="float-label">Masukkan Triwulan III</label>
                        </div>
                        <div class="form-group form-primary form-static-label pb-4">
                            <input type="text" name="tw_iv" class="form-control" value="{{ $program_indikator->tw_iv }}">
                            <span class="form-bar"></span>
                            <label class="float-label">Masukkan Triwulan IV</label>
                        </div>
                        <div class="form-group form-primary form-static-label pb-4">
                            <input type="text" name="capaian" class="form-control" value="{{ $program_indikator->capaian }}">
                            <span class="form-bar"></span>
                            <label class="float-label">Masukkan Capaian</label>
                        </div>
                    </form>
                </div>

                {{-- footer --}}
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <button type="submit" form="form-edit-program-indikator-{{ $program_indikator->id }}"
                        class="btn btn-primary">Perbaharui</button>
                </div>

            </div>
        </div>
    </div>
</div>