<button type="button" class="btn btn-light btn-sm text-primary" data-toggle="modal"
    data-target="#tujuanEditModal{{ $tujuan_rpjmd->id }}">
    <i class="fa fa-pencil-square-o"></i>
    Edit
</button>

{{-- modal membuat tujuan- --}}
<div class="modal fade" id="tujuanEditModal{{ $tujuan_rpjmd->id }}" tabindex="-1" role="dialog"
    aria-labelledby="tujuanEditModalLabel{{ $tujuan_rpjmd->id }}" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="card">
                <div class="card-header">
                    <h5>Perbaharui Tujuan RPJMD</h5>
                </div>
                <div class="modal-body">
                    <div class="mb-4">
                        <h6 class="text-center mb-5">{{ $misi->name }}</h6>
                    </div>
                    <form id="form-edit-tujuan-{{ $tujuan_rpjmd->id }}" class="form-material"
                        action="{{ route('tujuan.update', $tujuan_rpjmd->id) }}" method="POST">
                        @csrf
                        @method('patch')
                        <div class="form-group form-primary form-static-label pb-4">
                            <input type="number" name="nomor" class="form-control" value="{{ $tujuan_rpjmd->nomor }}"
                                required>
                            <span class="form-bar"></span>
                            <label class="float-label">Masukkan Nomor</label>
                        </div>
                        <div class="form-group form-primary form-static-label pb-4">
                            <textarea name="name" class="form-control" required>{{ $tujuan_rpjmd->name }}</textarea>
                            <span class="form-bar"></span>
                            <label class="float-label">Masukkan Tujuan</label>
                        </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                <button type="submit" form="form-edit-tujuan-{{ $tujuan_rpjmd->id }}"
                    class="btn btn-primary">Perbaharui</button>
            </div>
        </div>
    </div>
</div>