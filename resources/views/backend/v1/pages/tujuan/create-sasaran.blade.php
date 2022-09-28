<button type="button" class="btn btn-sm col-12" data-toggle="modal"
    data-target="#sasaranCreateModal{{ $tujuan_rpjmd->id }}"><i class="fas fa-plus fa-sm"></i>
    Tambah Sasaran</button>

{{-- modal membuat sasaran- --}}
<div class="modal fade" id="sasaranCreateModal{{ $tujuan_rpjmd->id }}" tabindex="-1" role="dialog"
    aria-labelledby="sasaranCreateModalLabel{{ $tujuan_rpjmd->id }}" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="card">
                <div class="card-header">
                    <h5>Buat Tujuan Baru</h5>
                </div>
                <div class="card-block">
                    <div class="mb-4">
                        <h6 class="text-center mb-5">{{ $tujuan_rpjmd->name }}</h6>
                    </div>
                    <form id="form-create-sasaran-{{ $tujuan_rpjmd->id }}" class="form-material" action="{{ route('sasaran.store') }}"
                        method="POST">
                        @csrf
                        <input type="text" name="tujuan_rpjmd_id" value="{{ $tujuan_rpjmd->id }}" hidden>
                        <div class="form-group form-primary form-static-label pb-4">
                            <input type="number" name="nomor" class="form-control" required>
                            <span class="form-bar"></span>
                            <label class="float-label">Masukkan Nomor <small>(contoh: 1)</small></label>
                        </div>
                        <div class="form-group form-primary form-static-label pb-4">
                            <textarea name="name" class="form-control" required></textarea>
                            <span class="form-bar"></span>
                            <label class="float-label">Masukkan Sasaran <small>(contoh: Datang tepat
                                    waktu)</small></label>
                        </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" form="form-create-sasaran-{{ $tujuan_rpjmd->id }}" class="btn btn-primary">Simpan</button>
            </div>
        </div>
    </div>
</div>