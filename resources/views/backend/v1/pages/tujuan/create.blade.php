{{-- button tambah --}}
<button type="button" class="btn btn-sm col-12" data-toggle="modal" data-target="#tujuanCreateModal{{ $misi->id }}"><i
        class="fas fa-plus fa-sm"></i>
    Tambah Tujuan</button>

{{-- modal tambah tujuan rpjmd --}}
<div class="modal fade" id="tujuanCreateModal{{ $misi->id }}" tabindex="-1" role="dialog"
    aria-labelledby="tujuanCreateModalLabel{{ $misi->id }}" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="card">

                {{-- header --}}
                <div class="card-header">
                    <h5>Tambah Tujuan RPJMD</h5>
                </div>

                {{-- body --}}
                <div class="modal-body">
                    <h6 style="white-space: normal; text-align: center" class="mb-5">{{ $misi->name }}</h6>
                    <form id="form-create-tujuan-{{ $misi->id }}" class="form-material"
                        action="{{ route('tujuan.store') }}" method="POST">
                        @csrf
                        <input type="text" name="misi_id" value="{{ $misi->id }}" hidden>
                        <div class="form-group form-primary form-static-label pb-4">
                            <input type="number" name="nomor" class="form-control" required>
                            <span class="form-bar"></span>
                            <label class="float-label">Masukkan Nomor</label>
                        </div>
                        <div class="form-group form-primary form-static-label pb-4">
                            <textarea name="name" class="form-control" required></textarea>
                            <span class="form-bar"></span>
                            <label class="float-label">Masukkan Tujuan</label>
                        </div>
                    </form>
                </div>

                {{-- footer --}}
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <button type="submit" form="form-create-tujuan-{{ $misi->id }}"
                        class="btn btn-primary">Simpan</button>
                </div>

            </div>
        </div>
    </div>
</div>