<button type="button" class="btn btn-light btn-sm text-primary" data-toggle="modal"
    data-target="#misiEditModal{{ $misi->id }}">
    <i class="fa fa-pencil-square-o"></i>
</button>

{{-- modal membuat misi- --}}
<div class="modal fade" id="misiEditModal{{ $misi->id }}" tabindex="-1" role="dialog"
    aria-labelledby="misiEditModalLabel{{ $misi->id }}" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="card">
                <div class="card-header">
                    <h5>Perbaharui Misi</h5>
                </div>
                <div class="card-block">
                    <div class="mb-4">
                        <h6 class="text-center mb-5">{{ $visi->name }}</h6>
                    </div>
                    <form id="form-edit-misi-{{ $misi->id }}" class="form-material"
                        action="{{ route('misi.update', $misi->id) }}" method="POST">
                        @csrf
                        @method('patch')
                        <input type="text" name="visi_id" value="{{ $visi->id }}" hidden>
                        <div class="form-group form-primary form-static-label pb-4">
                            <input type="number" name="nomor" class="form-control" value="{{ $misi->nomor }}" required>
                            <span class="form-bar"></span>
                            <label class="float-label">Masukkan Nomor <small>(contoh: 1)</small></label>
                        </div>
                        <div class="form-group form-primary form-static-label pb-4">
                            <textarea type="text" name="name" class="form-control" required>{{ $misi->name }}</textarea>
                            <span class="form-bar"></span>
                            <label class="float-label">Masukkan Misi <small>(contoh: Bangun pagi dan Istirahat yang
                                    cukup)</small></label>
                        </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" form="form-edit-misi-{{ $misi->id }}" class="btn btn-primary">Perbaharui</button>
            </div>
        </div>
    </div>
</div>