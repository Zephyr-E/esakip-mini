<button type="button" class="btn btn-sm col-12 mb-4" data-toggle="modal"
    data-target="#misiCreateModal{{ $visi->id }}"><i class="fas fa-plus fa-sm"></i>
    Tambah Misi</button>

{{-- modal membuat misi- --}}
<div class="modal fade" id="misiCreateModal{{ $visi->id }}" tabindex="-1" role="dialog"
    aria-labelledby="misiCreateModalLabel{{ $visi->id }}" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="card">
                <div class="card-header">
                    <h5>Buat Misi Baru</h5>
                </div>
                <div class="card-block">
                    <form id="form{{ $visi->id }}" class="form-material" action="{{ route('misi.store') }}"
                        method="POST">
                        @csrf
                        <h4 class="text-center">{{ $visi->name }}</h4>
                        <input type="text" name="visi_id" value="{{ $visi->id }}" hidden>
                        <div class="form-group form-primary form-static-label pb-4">
                            <input type="number" name="nomor" class="form-control" required>
                            <span class="form-bar"></span>
                            <label class="float-label">Masukkan Nomor <small>(contoh: 1)</small></label>
                        </div>
                        <div class="form-group form-primary form-static-label pb-4">
                            <textarea name="name" class="form-control" required></textarea>
                            <span class="form-bar"></span>
                            <label class="float-label">Masukkan Misi <small>(contoh: Datang tepat waktu)</small></label>
                        </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" form="form{{ $visi->id }}" class="btn btn-primary">Simpan</button>
            </div>
        </div>
    </div>
</div>