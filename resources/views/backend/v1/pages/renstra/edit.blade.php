{{-- button tambah --}}
<button type="button" class="btn btn-light btn-sm text-primary" data-toggle="modal"
    data-target="#renstraTujuanEditModal{{ $tujuan_renstra->id }}">
    <i class="fa fa-pencil-square-o"></i>
    Edit
</button>

{{-- modal edit tujuan skpd --}}
<div class="modal fade" id="renstraTujuanEditModal{{ $tujuan_renstra->id }}" tabindex="-1" role="dialog"
    aria-labelledby="renstraTujuanEditModalLabel{{ $tujuan_renstra->id }}" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="card">

                {{-- header --}}
                <div class="card-header">
                    <h5>Perbaharui Tujuan SKPD</h5>
                </div>

                {{-- body --}}
                <div class="modal-body">
                    <h6 style="white-space: normal; text-align: center" class="mb-5">{{ $sasaran_rpjmd->name }}</h6>
                    <form id="form-edit-renstra-tujuan-{{ $tujuan_renstra->id }}" class="form-material"
                        action="{{ route('renstra.update', $tujuan_renstra->id) }}" method="POST">
                        @csrf
                        @method('patch')

                        <div class="form-group form-primary form-static-label pb-4">
                            <input type="number" name="nomor" class="form-control" value="{{ $tujuan_renstra->nomor }}"
                                required>
                            <span class="form-bar"></span>
                            <label class="float-label">Masukkan Nomor <small>(contoh: 1)</small></label>
                        </div>
                        <div class="form-group form-primary form-static-label pb-4">
                            <textarea name="name" class="form-control" required>{{ $tujuan_renstra->name }}</textarea>
                            <span class="form-bar"></span>
                            <label class="float-label">Masukkan Tujuan <small>(contoh: Datang tepat
                                    waktu)</small></label>
                        </div>
                    </form>
                </div>

                {{-- footer --}}
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <button type="submit" form="form-edit-renstra-tujuan-{{ $tujuan_renstra->id }}"
                        class="btn btn-primary">Perbaharui</button>
                </div>

            </div>
        </div>
    </div>
</div>