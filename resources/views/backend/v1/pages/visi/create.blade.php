<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#visiCreateModal"><i
        class="fas fa-plus fa-sm"></i> Buat Visi</button>

{{-- modal membuat visi- --}}
<div class="modal fade" id="visiCreateModal" tabindex="-1" role="dialog" aria-labelledby="visiCreateModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="card">
                <div class="card-header">
                    <h5>Buat Visi</h5>
                </div>
                <div class="modal-body">
                    <form id="create-visi" class="form-material" action="{{ route('visi.store') }}" method="POST">
                        @csrf
                        <div class="form-group form-primary form-static-label pb-4">
                            <input type="text" name="name" class="form-control" required>
                            <span class="form-bar"></span>
                            <label class="float-label">Masukkan Visi</label>
                        </div>
                        <div class="form-group form-primary form-static-label pb-4">
                            <input type="text" name="tahun_awal" class="form-control" required>
                            <span class="form-bar"></span>
                            <label class="float-label">Masukkan Tahun Awal</label>
                        </div>
                        <div class="form-group form-primary form-static-label pb-4">
                            <input type="text" name="tahun_akhir" class="form-control" required>
                            <span class="form-bar"></span>
                            <label class="float-label">Masukkan Tahun Akhir</label>
                        </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                <button type="submit" form="create-visi" class="btn btn-primary">Simpan</button>
            </div>
        </div>
    </div>
</div>