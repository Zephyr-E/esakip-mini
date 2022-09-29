<button type="button" class="btn btn-light btn-sm text-primary" data-toggle="modal"
    data-target="#renstraSasaranEditModal{{ $sasaran_renstra->id }}">
    <i class="fa fa-pencil-square-o"></i>
    Edit
</button>

{{-- modal membuat sasaran- --}}
<div class="modal fade" id="renstraSasaranEditModal{{ $sasaran_renstra->id }}" tabindex="-1" role="dialog"
    aria-labelledby="renstraSasaranEditModalLabel{{ $sasaran_renstra->id }}" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="card">
                <div class="card-header">
                    <h5>Perbaharui Sasaran</h5>
                </div>
                <div class="modal-body">
                    <div class="mb-4">
                        <h6 class="text-center mb-5">{{ $tujuan_renstra->name }}</h6>
                    </div>
                    <form id="form-edit-renstra-sasaran-{{ $sasaran_renstra->id }}" class="form-material"
                        action="{{ route('renstra-sasaran.update', $sasaran_renstra->id) }}" method="POST">
                        @csrf
                        @method('patch')
                        <div class="form-group form-primary form-static-label pb-4">
                            <input type="number" name="nomor" class="form-control" value="{{ $sasaran_renstra->nomor }}"
                                required>
                            <span class="form-bar"></span>
                            <label class="float-label">Masukkan Nomor</label>
                        </div>
                        <div class="form-group form-primary form-static-label pb-4">
                            <textarea name="name" class="form-control" required>{{ $sasaran_renstra->name }}</textarea>
                            <span class="form-bar"></span>
                            <label class="float-label">Masukkan Sasaran</label>
                        </div>
                        <div class="form-group form-primary form-static-label pb-4">
                            <input type="text" name="tahun" class="form-control" value="{{ $sasaran_renstra->tahun }}"
                                required>
                            <span class="form-bar"></span>
                            <label class="float-label">Masukkan Tahun</label>
                        </div>
                        <div class="form-group form-primary form-static-label pb-4">
                            <div class="col-3 form-control">
                                <select name="status" class="form-control" required>
                                    <option value="">Pilih</option>
                                    <option value="murni" {{ ($sasaran_renstra->status == 'murni') ? 'selected' : ''
                                        }}>Murni</option>
                                    <option value="perubahan" {{ ($sasaran_renstra->status == 'perubahan') ? 'selected'
                                        : '' }}>Perubahan</option>
                                </select>
                            </div>
                            <span class="form-bar"></span>
                            <label class="float-label">Status <small> (pilih status)</small></label>
                        </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                <button type="submit" form="form-edit-renstra-sasaran-{{ $sasaran_renstra->id }}"
                    class="btn btn-primary">Perbaharui</button>
            </div>
        </div>
    </div>
</div>