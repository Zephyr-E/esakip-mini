{{-- button edit --}}
<button type="button" class="btn btn-light btn-sm text-primary" data-toggle="modal"
    data-target="#sasaranProgramEditModal{{ $sasaran_program->id }}">
    <i class="fa fa-pencil-square-o"></i>
    Edit
</button>

{{-- modal edit sasaran program --}}
<div class="modal fade" id="sasaranProgramEditModal{{ $sasaran_program->id }}" tabindex="-1" role="dialog"
    aria-labelledby="sasaranProgramEditModalLabel{{ $sasaran_program->id }}" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="card">

                {{-- header --}}
                <div class="card-header">
                    <h5>Perbaharui Sasaran Program</h5>
                </div>

                {{-- body --}}
                <div class="modal-body">
                    <div class="mb-4">
                        <h6 class="text-center mb-5">{{ $sasaran_renstra->name }}</h6>
                    </div>
                    <form id="form-edit-sasaran-program-{{ $sasaran_program->id }}" class="form-material"
                        action="{{ route('renja.update', $sasaran_program->id) }}" method="POST">
                        @csrf
                        @method('patch')
                        <div class="form-group form-primary form-static-label pb-4">
                            <input type="text" name="nomor" class="form-control" value="{{ $sasaran_program->nomor }}"
                                required>
                            <span class="form-bar"></span>
                            <label class="float-label">Masukkan Nomor</label>
                        </div>
                        <div class="form-group form-primary form-static-label pb-4">
                            <input type="text" name="name" class="form-control" value="{{ $sasaran_program->name }}"
                                required>
                            <span class="form-bar"></span>
                            <label class="float-label">Masukkan Sasaran Program</label>
                        </div>
                    </form>
                </div>

                {{-- footer --}}
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <button type="submit" form="form-edit-sasaran-program-{{ $sasaran_program->id }}"
                        class="btn btn-primary">Perbaharui</button>
                </div>

            </div>
        </div>
    </div>
</div>