{{-- button tambah --}}
<button type="button" class="btn btn-info btn-sm col-12 mb-4" data-toggle="modal"
    data-target="#misiCreateModal{{ $visi->id }}"><i class="fas fa-plus fa-sm"></i>
    Tambah Misi</button>

{{-- modal tambah misi- --}}
<div class="modal fade" id="misiCreateModal{{ $visi->id }}" tabindex="-1" role="dialog"
    aria-labelledby="misiCreateModalLabel{{ $visi->id }}" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="card">

                {{-- header --}}
                <div class="card-header">
                    <h5>Tambah Misi</h5>
                </div>

                {{-- body --}}
                <div class="modal-body">
                    <div class="mb-4">
                        <h6 class="text-center mb-5">{{ $visi->name }}</h6>
                    </div>
                    <form id="form-create-misi-{{ $visi->id }}" class="form-material" action="{{ route('misi.store') }}"
                        method="POST">
                        @csrf
                        <input type="text" name="visi_id" value="{{ $visi->id }}" hidden>
                        <div class="form-group form-primary form-static-label pb-4">
                            <input type="number" name="nomor" class="form-control" required>
                            <span class="form-bar"></span>
                            <label class="float-label">Masukkan Nomor</label>
                        </div>
                        <div class="form-group form-primary form-static-label pb-4">
                            <textarea name="name" class="form-control" required></textarea>
                            <span class="form-bar"></span>
                            <label class="float-label">Masukkan Misi</label>
                        </div>
                    </form>
                </div>

                {{-- footer --}}
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <button type="submit" form="form-create-misi-{{ $visi->id }}"
                        class="btn btn-primary">Simpan</button>
                </div>

            </div>
        </div>
    </div>
</div>