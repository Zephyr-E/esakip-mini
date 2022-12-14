{{-- button tambah --}}
<button type="button" class="btn btn-sm col-12" data-toggle="modal"
    data-target="#programIndikatorCreateModal{{ $program->id }}"><i class="fas fa-plus fa-sm"></i>
    Tambah Indikator</button>

{{-- modal tambah program indikator --}}
<div class="modal fade" id="programIndikatorCreateModal{{ $program->id }}" tabindex="-1" role="dialog"
    aria-labelledby="programIndikatorCreateModalLabel{{ $program->id }}" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="card">

                {{-- header --}}
                <div class="card-header">
                    <h5>Tambah Program Indikator</h5>
                </div>

                {{-- body --}}
                <div class="modal-body">
                    <h6 style="white-space: normal; text-align: center" class="mb-5">{{ $program->name }}</h6>
                    <form id="form-create-program-indikator-{{ $program->id }}" class="form-material"
                        action="{{ route('program-indikator.store') }}" method="POST">
                        @csrf
                        <input type="text" name="program_id" value="{{ $program->id }}" hidden>
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
                    <button type="submit" form="form-create-program-indikator-{{ $program->id }}"
                        class="btn btn-primary">Simpan</button>
                </div>

            </div>
        </div>
    </div>
</div>