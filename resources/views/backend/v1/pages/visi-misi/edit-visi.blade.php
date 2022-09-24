<button type="button" class="btn btn-light btn-sm text-primary" data-toggle="modal"
    data-target="#visiEditModal{{ $visi_misi->id }}">
    <i class="fa fa-pencil-square-o"></i>
    Edit
</button>

{{-- modal membuat misi- --}}
<div class="modal fade" id="visiEditModal{{ $visi_misi->id }}" tabindex="-1" role="dialog"
    aria-labelledby="visiEditModalLabel{{ $visi_misi->id }}" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="card">
                <div class="card-header">
                    <h5>Perbaharui Visi</h5>
                </div>
                <div class="card-block">
                    <form id="edit-visi{{ $visi_misi->id }}" class="form-material"
                        action="{{ route('visi-misi.update', $visi_misi->id) }}" method="POST">
                        @csrf
                        @method('patch')
                        <div class="form-group form-primary form-static-label">
                            <input type="text" name="name" class="form-control" value="{{ $visi_misi->name }}" required>
                            <span class="form-bar"></span>
                            <label class="float-label">Masukkan Visi <small>(contoh: Bekerja Keras)</small></label>
                        </div>
                        <div class="form-group form-primary form-static-label">
                            <input type="text" name="tahun_awal" class="form-control"
                                value="{{ $visi_misi->tahun_awal }}" required>
                            <span class="form-bar"></span>
                            <label class="float-label">Masukkan Tahun Awal <small>(contoh: 2018)</small></label>
                        </div>
                        <div class="form-group form-primary form-static-label">
                            <input type="text" name="tahun_akhir" class="form-control"
                                value="{{ $visi_misi->tahun_akhir }}" required>
                            <span class="form-bar"></span>
                            <label class="float-label">Masukkan Tahun Akhir <small>(contoh: 2023)</small></label>
                        </div>
                        <div class="form-group form-primary form-static-label">
                            <select name="aktif" class="form-control" required>
                                <option value="0" {{ ($visi_misi->aktif == 0) ? 'selected' : '' }}>Tidak Aktif</option>
                                <option value="1" {{ ($visi_misi->aktif == 1) ? 'selected' : '' }}>Aktif</option>
                            </select>
                            <span class="form-bar"></span>
                            <label class="float-label">Status Aktif</small></label>
                        </div>
                    </form>
                </div>
                {{-- @dd(($visi_misi->aktif == 1) ? 'selected' : '') --}}
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" form="edit-visi{{ $visi_misi->id }}" class="btn btn-primary">Perbaharui</button>
            </div>
        </div>
    </div>
</div>