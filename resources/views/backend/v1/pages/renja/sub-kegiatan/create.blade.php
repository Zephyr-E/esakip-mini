{{-- button tambah --}}
<button type="button" class="btn btn-sm col-12" data-toggle="modal"
    data-target="#subKegiatanCreateModal{{ $kegiatan->id }}"><i class="fas fa-plus fa-sm"></i>
    Tambah Sub Kegiatan</button>

{{-- modal tambah sub kegiatan --}}
<div class="modal fade" id="subKegiatanCreateModal{{ $kegiatan->id }}" tabindex="-1" role="dialog"
    aria-labelledby="subKegiatanCreateModalLabel{{ $kegiatan->id }}" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="card">

                {{-- header --}}
                <div class="card-header">
                    <h5>Buat Sub Kegiatan Indikator</h5>
                </div>

                {{-- body --}}
                <div class="modal-body">
                    <div class="mb-4">
                        <h6 class="text-center mb-5">{{ $kegiatan->name }}</h6>
                    </div>
                    <form id="form-create-sub-kegiatan-{{ $kegiatan->id }}" class="form-material"
                        action="{{ route('sub-kegiatan.store') }}" method="POST">
                        @csrf
                        <input type="text" name="kegiatan_id" value="{{ $kegiatan->id }}" hidden>
                        <div class="form-group form-primary form-static-label pb-4">
                            <input type="text" name="name" class="form-control" required>
                            <span class="form-bar"></span>
                            <label class="float-label">Masukkan Sub Kegiatan</label>
                        </div>
                        <div class="form-group form-primary form-static-label pb-4">
                            <textarea name="kendala" class="form-control" required></textarea>
                            <span class="form-bar"></span>
                            <label class="float-label">Masukkan Kendala</label>
                        </div>
                        <div class="form-group form-primary form-static-label pb-4">
                            <textarea name="solusi" class="form-control" required></textarea>
                            <span class="form-bar"></span>
                            <label class="float-label">Masukkan Solusi</label>
                        </div>
                        <div class="form-group form-primary form-static-label pb-4">
                            <textarea name="tindak_lanjut" class="form-control" required></textarea>
                            <span class="form-bar"></span>
                            <label class="float-label">Masukkan Tindak Lanjut</label>
                        </div>
                        <div class="form-group form-primary form-static-label pb-4">
                            <input type="text" name="otorisasi" class="form-control" required>
                            <span class="form-bar"></span>
                            <label class="float-label">Masukkan Otorisasi</label>
                        </div>
                        <div class="form-group form-primary form-static-label pb-4">
                            <input type="number" name="pagu" class="form-control" required>
                            <span class="form-bar"></span>
                            <label class="float-label">Masukkan Pagu</label>
                        </div>
                    </form>
                </div>

                {{-- footer --}}
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" form="form-create-sub-kegiatan-{{ $kegiatan->id }}"
                        class="btn btn-primary">Simpan</button>
                </div>

            </div>
        </div>
    </div>
</div>