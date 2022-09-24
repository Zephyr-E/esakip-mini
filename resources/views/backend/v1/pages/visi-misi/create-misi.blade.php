@extends('backend.v1.pages.visi-misi.index')

@push('tambah_misi')
<button type="button" class="btn col-12" data-toggle="modal" data-target="#misiCreateModal"><i
        class="fas fa-plus fa-sm"></i>
    Tambah Misi</button>

{{-- modal membuat misi- --}}
<div class="modal fade" id="misiCreateModal" tabindex="-1" role="dialog" aria-labelledby="misiCreateModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="card">
                <div class="card-header">
                    <h5>Buat Misi Baru</h5>
                </div>
                <div class="card-block">
                    <form id="form-misi" class="form-material"
                        action="{{ route('visi-misi.store', ['tipe_tambah' => 'misi']) }}" method="POST">
                        @csrf
                        <div class="form-group form-primary">
                            <span class="form-bar"></span>
                            <label class="form-control">Nama Visi: {{ $visi_misi->name }}</label>
                        </div>
                        <div class="form-group form-primary">
                            <input type="number" name="nomor" class="form-control" required>
                            <span class="form-bar"></span>
                            <label class="float-label">Masukkan Nomor <small>(contoh: 1)</small></label>
                        </div>
                        <div class="form-group form-primary">
                            <input type="text" name="name" class="form-control" required>
                            <span class="form-bar"></span>
                            <label class="float-label">Masukkan Misi <small>(contoh: Bekerja Keras)</small></label>
                        </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" form="form-misi" class="btn btn-primary">Simpan</button>
            </div>
        </div>
    </div>
</div>
@endpush