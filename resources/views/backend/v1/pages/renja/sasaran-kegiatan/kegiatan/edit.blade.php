{{-- button tambah --}}
<button type="button" class="btn btn-light btn-sm text-primary" data-toggle="modal"
    data-target="#kegiatanEditModal{{ $kegiatan->id }}">
    <i class="fa fa-pencil-square-o"></i>
    Edit
</button>

{{-- modal edit kegiatan --}}
<div class="modal fade" id="kegiatanEditModal{{ $kegiatan->id }}" tabindex="-1" role="dialog"
    aria-labelledby="kegiatanEditModalLabel{{ $kegiatan->id }}" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="card">

                {{-- header --}}
                <div class="card-header">
                    <h5>Perbaharui Kegiatan</h5>
                </div>

                {{-- body --}}
                <div class="modal-body">
                    <h6 style="white-space: normal; text-align: center" class="mb-5">{{ $sasaran_kegiatan->name }}</h6>
                    <form id="form-edit-kegiatan-{{ $kegiatan->id }}" class="form-material"
                        action="{{ route('kegiatan.update', $kegiatan->id) }}" method="POST">
                        @csrf
                        @method('patch')
                        <div class="form-group form-primary form-static-label pb-4">
                            <input type="text" name="name" class="form-control" value="{{ $kegiatan->name }}" required>
                            <span class="form-bar"></span>
                            <label class="float-label">Masukkan Kegiatan</label>
                        </div>
                        <div class="form-group form-primary form-static-label pb-4">
                            <input type="text" name="otorisasi" class="form-control row-cols-sm-3"
                                value="{{ $kegiatan->otorisasi }}" required>
                            <span class="form-bar"></span>
                            <label class="float-label">Masukkan Otorisasi</label>
                        </div>
                    </form>
                </div>

                {{-- footer --}}
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <button type="submit" form="form-edit-kegiatan-{{ $kegiatan->id }}"
                        class="btn btn-primary">Perbaharui</button>
                </div>

            </div>
        </div>
    </div>
</div>