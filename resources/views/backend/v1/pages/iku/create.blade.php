{{-- button tambah --}}
<button type="button" class="btn btn-primary btn-add" data-toggle="modal" data-target="#ikuCreateModal"><i
        class="fas fa-plus fa-sm"></i> Buat IKU</button>

{{-- modal tambah iku --}}
<div class="modal fade" id="ikuCreateModal" tabindex="-1" role="dialog" aria-labelledby="ikuCreateModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="card">

                {{-- header --}}
                <div class="card-header">
                    <h5>Buat Idikator Kinerja Utama</h5>
                </div>

                {{-- body --}}
                <div class="modal-body">
                    <form id="create-iku" class="form-material" action="{{ route('iku.store') }}" method="POST">
                        @csrf
                        <div class="form-group form-primary form-static-label pb-4">
                            <select class="form-control selectpicker" name="sasaran_renstra_id" id="sasaran_renstra_id"
                                data-live-search="true">
                                @forelse ($sasaran_renstras as $sasaran_renstra)
                                <option value="{{ $sasaran_renstra->id }}" class="option-custom">
                                    {{$sasaran_renstra->name}}
                                </option>
                                @empty
                                <option>Kosong</option>
                                @endforelse
                            </select>
                            <span class="form-bar"></span>
                            <label class="float-label">Sasaran SKPD <small> (pilih Sasaran)</small></label>
                        </div>
                        <div class="form-group form-primary form-static-label pb-4">
                            <input type="text" name="indikator" class="form-control" required>
                            <span class="form-bar"></span>
                            <label class="float-label">Masukkan Indikator</label>
                        </div>
                        <div class="form-group form-primary form-static-label pb-4">
                            <input type="text" name="otorisasi" class="form-control row-cols-sm-3" required>
                            <span class="form-bar"></span>
                            <label class="float-label">Masukkan Otorisasi</label>
                        </div>
                    </form>
                </div>

                {{-- footer --}}
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <button type="submit" form="create-iku" class="btn btn-primary">Simpan</button>
                </div>

            </div>
        </div>
    </div>
</div>