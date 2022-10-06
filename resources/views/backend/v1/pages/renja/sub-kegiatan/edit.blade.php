{{-- edit button --}}
<button type="button" class="btn btn-light btn-sm text-primary" data-toggle="modal"
    data-target="#subSegiatanEditModal{{ $sub_kegiatan->id }}">
    <i class="fa fa-pencil-square-o"></i>
    Edit
</button>

{{-- modal edit sub kegiatan --}}
<div class="modal fade" id="subSegiatanEditModal{{ $sub_kegiatan->id }}" tabindex="-1" role="dialog"
    aria-labelledby="subSegiatanEditModalLabel{{ $sub_kegiatan->id }}" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="card">

                {{-- header --}}
                <div class="card-header">
                    <h5>Perbaharui Sub Kegiatan</h5>
                </div>

                {{-- body --}}
                <div class="modal-body">
                    <div class="mb-4">
                        <h6 class="text-center mb-5">{{ $kegiatan->name }}</h6>
                    </div>
                    <form id="form-edit-sub-kegiatan-{{ $sub_kegiatan->id }}" class="form-material"
                        action="{{ route('sub-kegiatan.update', $sub_kegiatan->id) }}" method="POST">
                        @csrf
                        @method('patch')
                        <div class="form-group form-primary form-static-label pb-4">
                            <input type="text" name="name" class="form-control" value="{{ $sub_kegiatan->name }}"
                                required>
                            <span class="form-bar"></span>
                            <label class="float-label">Masukkan Sub Kegiatan</label>
                        </div>
                        <div class="form-group form-primary form-static-label pb-4">
                            <textarea name="kendala" class="form-control">{{ $sub_kegiatan->kendala }}</textarea>
                            <span class="form-bar"></span>
                            <label class="float-label">Masukkan Kendala</label>
                        </div>
                        <div class="form-group form-primary form-static-label pb-4">
                            <textarea name="solusi" class="form-control">{{ $sub_kegiatan->solusi }}</textarea>
                            <span class="form-bar"></span>
                            <label class="float-label">Masukkan Solusi</label>
                        </div>
                        <div class="form-group form-primary form-static-label pb-4">
                            <textarea name="tindak_lanjut"
                                class="form-control">{{ $sub_kegiatan->tindak_lanjut }}</textarea>
                            <span class="form-bar"></span>
                            <label class="float-label">Masukkan Tindak Lanjut</label>
                        </div>
                        <div class="form-group form-primary form-static-label pb-4">
                            <input type="text" name="otorisasi" class="form-control"
                                value="{{ $sub_kegiatan->otorisasi }}" required>
                            <span class="form-bar"></span>
                            <label class="float-label">Masukkan Otorisasi</label>
                        </div>
                        <div class="form-group form-primary form-static-label pb-4">
                            <input type="number" name="pagu" class="form-control" value="{{ $sub_kegiatan->pagu }}"
                                required>
                            <span class="form-bar"></span>
                            <label class="float-label">Masukkan Pagu</label>
                        </div>
                    </form>
                </div>

                {{-- footer --}}
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" form="form-edit-sub-kegiatan-{{ $sub_kegiatan->id }}"
                        class="btn btn-primary">Perbaharui</button>
                </div>

            </div>
        </div>
    </div>
</div>