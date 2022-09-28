<button type="button" class="btn btn-light btn-sm text-primary" data-toggle="modal"
    data-target="#sasaranEditModal{{ $sasaran_rpjmd->id }}">
    <i class="fa fa-pencil-square-o"></i>
    Edit
</button>

{{-- modal membuat sasaran- --}}
<div class="modal fade" id="sasaranEditModal{{ $sasaran_rpjmd->id }}" tabindex="-1" role="dialog"
    aria-labelledby="sasaranEditModalLabel{{ $sasaran_rpjmd->id }}" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="card">
                <div class="card-header">
                    <h5>Perbaharui Sasaran</h5>
                </div>
                <div class="card-block">
                    <div class="mb-4">
                        <h6 class="text-center mb-5">{{ $tujuan_rpjmd->name }}</h6>
                    </div>
                    <form id="form-edit-sasaran-{{ $sasaran_rpjmd->id }}" class="form-material"
                        action="{{ route('sasaran.update', $sasaran_rpjmd->id) }}" method="POST">
                        @csrf
                        @method('patch')
                        <div class="form-group form-primary form-static-label pb-4">
                            <input type="number" name="nomor" class="form-control" value="{{ $sasaran_rpjmd->nomor }}"
                                required>
                            <span class="form-bar"></span>
                            <label class="float-label">Masukkan Nomor <small>(contoh: 1)</small></label>
                        </div>
                        <div class="form-group form-primary form-static-label pb-4">
                            <textarea name="name" class="form-control" required>{{ $sasaran_rpjmd->name }}</textarea>
                            <span class="form-bar"></span>
                            <label class="float-label">Masukkan Sasaran <small>(contoh: Datang tepat
                                    waktu)</small></label>
                        </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" form="form-edit-sasaran-{{ $sasaran_rpjmd->id }}"
                    class="btn btn-primary">Perbaharui</button>
            </div>
        </div>
    </div>
</div>