<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#renstraTujuanCreateModal"><i
        class="fas fa-plus fa-sm"></i> Buat Tujuan</button>

{{-- modal membuat misi- --}}
<div class="modal fade" id="renstraTujuanCreateModal" tabindex="-1" role="dialog"
    aria-labelledby="renstraTujuanCreateModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="card">
                <div class="card-header">
                    <h5>Buat Tujuan SKPD</h5>
                </div>
                <div class="modal-body">
                    <form id="create-renstra-tujuan" class="form-material" action="{{ route('renstra.store') }}"
                        method="POST">
                        @csrf
                        <div class="form-group form-primary form-static-label pb-4">
                            <select class="form-control selectpicker" name="sasaran_rpjmd_id" id="sasaran_rpjmd_id"
                                data-live-search="true">
                                @forelse ($tujuan_rpjmds as $tujuan_rpjmd)
                                <optgroup label="{{ 'Tujuan RPJMD : '. $tujuan_rpjmd->name }}">
                                    @foreach ($tujuan_rpjmd->sasaran_rpjmd as $sasaran_rpjmd)
                                    <option value="{{ $sasaran_rpjmd->id }}" class="option-custom">{{
                                        $sasaran_rpjmd->name
                                        }}</option>
                                    @endforeach
                                </optgroup>
                                @empty
                                <optgroup label="Kosong">
                                </optgroup>
                                @endforelse
                            </select>
                            <span class="form-bar"></span>
                            <label class="float-label">Sasaran RPJMD <small> (pilih Sasaran)</small></label>
                        </div>
                        <div class="form-group form-primary form-static-label pb-4">
                            <input type="number" name="nomor" class="form-control" required>
                            <span class="form-bar"></span>
                            <label class="float-label">Masukkan Nomor</label>
                        </div>
                        <div class="form-group form-primary form-static-label pb-4">
                            <textarea type="text" name="name" class="form-control row-cols-sm-3" required></textarea>
                            <span class="form-bar"></span>
                            <label class="float-label">Masukkan Tujuan SKPD</label>
                        </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                <button type="submit" form="create-renstra-tujuan" class="btn btn-primary">Simpan</button>
            </div>
        </div>
    </div>
</div>