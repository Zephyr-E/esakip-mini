<button type="button" class="btn btn-light btn-sm text-primary" data-toggle="modal"
    data-target="#programEditModal{{ $program->id }}">
    <i class="fa fa-pencil-square-o"></i>
    Edit
</button>

{{-- modal membuat tujuan- --}}
<div class="modal fade" id="programEditModal{{ $program->id }}" tabindex="-1" role="dialog"
    aria-labelledby="programEditModalLabel{{ $program->id }}" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="card">
                <div class="card-header">
                    <h5>Perbaharui Program</h5>
                </div>
                <div class="card-block">
                    <div class="mb-4">
                        <h6 class="text-center mb-5">{{ $sasaran_renstra->name }}</h6>
                    </div>
                    <form id="form-edit-program-{{ $program->id }}" class="form-material"
                        action="{{ route('renja.update', $program->id) }}" method="POST">
                        @csrf
                        @method('patch')
                        <input type="text" name="sasaran_renstra_id" value="{{ $sasaran_renstra->id }}" hidden>
                        <div class="form-group form-primary form-static-label pb-4">
                            <input type="text" name="name" class="form-control" value="{{ $program->name }}" required>
                            <span class="form-bar"></span>
                            <label class="float-label">Masukkan Program</label>
                        </div>
                        <div class="form-group form-primary form-static-label pb-4">
                            <textarea type="text" name="kendala" class="form-control row-cols-sm-3"
                                required>{{ $program->kendala }}</textarea>
                            <span class="form-bar"></span>
                            <label class="float-label">Masukkan Kendala</label>
                        </div>
                        <div class="form-group form-primary form-static-label pb-4">
                            <textarea type="text" name="solusi" class="form-control row-cols-sm-3"
                                required>{{ $program->solusi }}</textarea>
                            <span class="form-bar"></span>
                            <label class="float-label">Masukkan Solusi</label>
                        </div>
                        <div class="form-group form-primary form-static-label pb-4">
                            <textarea type="text" name="tindak_lanjut" class="form-control row-cols-sm-3"
                                required>{{ $program->tindak_lanjut }}</textarea>
                            <span class="form-bar"></span>
                            <label class="float-label">Masukkan Tindak Lanjut</label>
                        </div>
                        <div class="form-group form-primary form-static-label pb-4">
                            <input type="text" name="otorisasi" class="form-control row-cols-sm-3"
                                value="{{ $program->otorisasi }}" required>
                            <span class="form-bar"></span>
                            <label class="float-label">Masukkan Unit Kerja Penanggung Jawab</label>
                        </div>
                        <div class="form-group form-primary form-static-label pb-4">
                            <div class="col-3 form-control">
                                <select name="apbd" class="form-control" required>
                                    <option value="">Pilih</option>
                                    <option value="murni" {{ ($program->apbd == 'murni') ? 'selected' : ''
                                        }}>Murni</option>
                                    <option value="perubahan" {{ ($program->apbd == 'perubahan') ? 'selected'
                                        : '' }}>Perubahan</option>
                                </select>
                            </div>
                            <span class="form-bar"></span>
                            <label class="float-label">APBD <small> (pilih APBD)</small></label>
                        </div>
                        <div class="form-group form-primary form-static-label pb-4">
                            <input type="text" name="tahun" class="form-control row-cols-sm-3"
                                value="{{ $program->tahun }}" required>
                            <span class="form-bar"></span>
                            <label class="float-label">Masukkan Tahun</label>
                        </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" form="form-edit-program-{{ $program->id }}"
                    class="btn btn-primary">Perbaharui</button>
            </div>
        </div>
    </div>
</div>