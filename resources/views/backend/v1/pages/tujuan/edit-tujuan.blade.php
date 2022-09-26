<button type="button" class="btn btn-light btn-sm text-primary" data-toggle="modal"
    data-target="#tujuanEditModal{{ $tujuan->id }}">
    <i class="fa fa-pencil-square-o"></i>
    Edit
</button>

{{-- modal membuat tujuan- --}}
<div class="modal fade" id="tujuanEditModal{{ $tujuan->id }}" tabindex="-1" role="dialog"
    aria-labelledby="tujuanEditModalLabel{{ $tujuan->id }}" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="card">
                <div class="card-header">
                    <h5>Perbaharui Tujuan</h5>
                </div>
                <div class="card-block">
                    <div class="mb-4">
                        <h6 class="text-center mb-5">{{ $misi->name }}</h6>
                    </div>
                    <form id="form-edit-tujuan-{{ $tujuan->id }}" class="form-material"
                        action="{{ route('tujuan.update', $tujuan->id) }}" method="POST">
                        @csrf
                        @method('patch')
                        <div class="form-group form-primary form-static-label pb-4">
                            <input type="number" name="nomor" class="form-control" value="{{ $tujuan->nomor }}"
                                required>
                            <span class="form-bar"></span>
                            <label class="float-label">Masukkan Nomor <small>(contoh: 1)</small></label>
                        </div>
                        <div class="form-group form-primary form-static-label pb-4">
                            <textarea name="name" class="form-control" required>{{ $tujuan->name }}</textarea>
                            <span class="form-bar"></span>
                            <label class="float-label">Masukkan Tujuan <small>(contoh: Datang tepat
                                    waktu)</small></label>
                        </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" form="form-edit-tujuan-{{ $tujuan->id }}"
                    class="btn btn-primary">Perbaharui</button>
            </div>
        </div>
    </div>
</div>