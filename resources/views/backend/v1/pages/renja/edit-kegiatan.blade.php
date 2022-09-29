<button type="button" class="btn btn-light btn-sm text-primary" data-toggle="modal"
    data-target="#kegiatanEditModal{{ $kegiatan->id }}">
    <i class="fa fa-pencil-square-o"></i>
    Edit
</button>

{{-- modal membuat tujuan- --}}
<div class="modal fade" id="kegiatanEditModal{{ $kegiatan->id }}" tabindex="-1" role="dialog"
    aria-labelledby="kegiatanEditModalLabel{{ $kegiatan->id }}" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="card">
                <div class="card-header">
                    <h5>Perbaharui Kegiatan</h5>
                </div>
                <div class="card-block">
                    <div class="mb-4">
                        <h6 class="text-center mb-5">{{ $program->name }}</h6>
                    </div>
                    <form id="form-edit-kegiatan-{{ $kegiatan->id }}" class="form-material"
                        action="{{ route('kegiatan.update', $kegiatan->id) }}" method="POST">
                        @csrf
                        @method('patch')
                        <input type="text" name="program_id" value="{{ $program->id }}" hidden>
                        <div class="form-group form-primary form-static-label pb-4">
                            <input type="text" name="name" class="form-control" value="{{ $kegiatan->name }}" required>
                            <span class="form-bar"></span>
                            <label class="float-label">Masukkan Kegiatan</label>
                        </div>
                        <div class="form-group form-primary form-static-label pb-4">
                            <input type="text" name="otorisasi" class="form-control row-cols-sm-3"
                                value="{{ $kegiatan->otorisasi }}" required>
                            <span class="form-bar"></span>
                            <label class="float-label">Masukkan Unit Kerja Penanggung Jawab</label>
                        </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" form="form-edit-kegiatan-{{ $kegiatan->id }}"
                    class="btn btn-primary">Perbaharui</button>
            </div>
        </div>
    </div>
</div>