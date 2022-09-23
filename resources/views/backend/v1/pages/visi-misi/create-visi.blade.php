<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#visiModal"><i
        class="fas fa-plus fa-sm"></i> Buat Visi Baru</button>

{{-- modal membuat misi- --}}
<div class="modal fade" id="visiModal" tabindex="-1" role="dialog" aria-labelledby="visiModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="card">
                <div class="card-header">
                    <h5>Buat Visi Baru</h5>
                </div>
                <div class="card-block">
                    <form id="form-visi" class="form-material"
                        action="{{ route('visi-misi.store') }}" method="POST">
                        @csrf
                        <div class="form-group form-primary">
                            <input type="text" name="name" class="form-control" required>
                            <span class="form-bar"></span>
                            <label class="float-label">Masukkan Visi <small>(contoh: Bekerja Keras)</small></label>
                        </div>
                        <div class="form-group form-primary">
                            <input type="text" name="tahun_awal" class="form-control" required>
                            <span class="form-bar"></span>
                            <label class="float-label">Masukkan Tahun Awal <small>(contoh: 2018)</small></label>
                        </div>
                        <div class="form-group form-primary">
                            <input type="text" name="tahun_akhir" class="form-control" required>
                            <span class="form-bar"></span>
                            <label class="float-label">Masukkan Tahun Akhir <small>(contoh: 2023)</small></label>
                        </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" form="form-visi" class="btn btn-primary">Simpan</button>
            </div>
        </div>
    </div>
</div>