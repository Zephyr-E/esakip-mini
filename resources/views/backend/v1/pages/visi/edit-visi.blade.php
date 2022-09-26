<button type="button" class="btn btn-light btn-sm text-primary" data-toggle="modal"
    data-target="#visiEditModal{{ $visi->id }}">
    <i class="fa fa-pencil-square-o"></i>
    Edit
</button>

{{-- modal membuat misi- --}}
<div class="modal fade" id="visiEditModal{{ $visi->id }}" tabindex="-1" role="dialog"
    aria-labelledby="visiEditModalLabel{{ $visi->id }}" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="card">
                <div class="card-header">
                    <h5>Buat Visi Baru</h5>
                </div>
                <div class="card-block">
                    <form id="form-edit-visi-{{ $visi->id }}" class="form-material"
                        action="{{ route('visi.update', $visi->id) }}" method="POST">
                        @csrf
                        @method('patch')
                        <div class="form-group form-primary form-static-label pb-4">
                            <input type="text" name="name" class="form-control" value="{{ $visi->name }}" required>
                            <span class="form-bar"></span>
                            <label class="float-label">Masukkan Visi <small>(contoh: Bekerja Keras)</small></label>
                        </div>
                        <div class="form-group form-primary form-static-label pb-4">
                            <input type="text" name="tahun_awal" class="form-control" value="{{ $visi->tahun_awal }}"
                                required>
                            <span class="form-bar"></span>
                            <label class="float-label">Masukkan Tahun Awal <small>(contoh: 2018)</small></label>
                        </div>
                        <div class="form-group form-primary form-static-label pb-4">
                            <input type="text" name="tahun_akhir" class="form-control" value="{{ $visi->tahun_akhir }}"
                                required>
                            <span class="form-bar"></span>
                            <label class="float-label">Masukkan Tahun Akhir <small>(contoh: 2023)</small></label>
                        </div>
                        <div class="form-group form-primary form-static-label pb-4">
                            <div class="col-3 form-control">
                                <select name="aktif" class="form-control" required>
                                    <option value="1" {{ ($visi->aktif == 1) ? 'selected' : '' }}>Aktif</option>
                                    <option value="0" {{ ($visi->aktif == 0) ? 'selected' : '' }}>Tidak Aktif</option>
                                </select>
                            </div>
                            <span class="form-bar"></span>
                            <label class="float-label">Status Visi <small> (pilih status)</small></label>
                        </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" form="form-edit-visi-{{ $visi->id }}" class="btn btn-primary">Perbaharui</button>
            </div>
        </div>
    </div>
</div>