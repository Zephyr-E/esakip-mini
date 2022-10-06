{{-- button tambah --}}
<button type="button" class="btn btn-light btn-sm text-primary" data-toggle="modal"
    data-target="#sasaranKegiatanEditModal{{ $sasaran_kegiatan->id }}">
    <i class="fa fa-pencil-square-o"></i>
    Edit
</button>

{{-- modal edit sasaran kegiatan --}}
<div class="modal fade" id="sasaranKegiatanEditModal{{ $sasaran_kegiatan->id }}" tabindex="-1" role="dialog"
    aria-labelledby="sasaranKegiatanEditModalLabel{{ $sasaran_kegiatan->id }}" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="card">

                {{-- header --}}
                <div class="card-header">
                    <h5>Perbaharui Kegiatan</h5>
                </div>

                {{-- body --}}
                <div class="modal-body">
                    <div class="mb-4">
                        <h6 class="text-center mb-5">{{ $program->name }}</h6>
                    </div>
                    <form id="form-edit-sasaran-kegiatan-{{ $sasaran_kegiatan->id }}" class="form-material"
                        action="{{ route('sasaran-kegiatan.update', $sasaran_kegiatan->id) }}" method="POST">
                        @csrf
                        @method('patch')
                        <div class="form-group form-primary form-static-label pb-4">
                            <input type="text" name="nomor" class="form-control" value="{{ $sasaran_kegiatan->nomor }}"
                                required>
                            <span class="form-bar"></span>
                            <label class="float-label">Masukkan Nomor</label>
                        </div>
                        <div class="form-group form-primary form-static-label pb-4">
                            <input type="text" name="name" class="form-control" value="{{ $sasaran_kegiatan->name }}"
                                required>
                            <span class="form-bar"></span>
                            <label class="float-label">Masukkan Sasaran</label>
                        </div>
                    </form>
                </div>

                {{-- footer --}}
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <button type="submit" form="form-edit-sasaran-kegiatan-{{ $sasaran_kegiatan->id }}"
                        class="btn btn-primary">Perbaharui</button>
                </div>

            </div>
        </div>
    </div>
</div>