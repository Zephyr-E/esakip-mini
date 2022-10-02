{{-- button tambah --}}
<button type="button" class="btn btn-sm col-12" data-toggle="modal"
    data-target="#kegiatanCreateModal{{ $kegiatan->id }}"><i class="fas fa-plus fa-sm"></i>
    Tambah Kegiatan Indikator</button>

{{-- modal tambah kegiatan indikator --}}
<div class="modal fade" id="kegiatanCreateModal{{ $kegiatan->id }}" tabindex="-1" role="dialog"
    aria-labelledby="kegiatanCreateModalLabel{{ $kegiatan->id }}" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="card">

                {{-- header --}}
                <div class="card-header">
                    <h5>Tambah Kegiatan Indikator</h5>
                </div>

                {{-- body --}}
                <div class="modal-body">
                    <div class="mb-4">
                        <h6 class="text-center mb-5">{{ $kegiatan->name }}</h6>
                    </div>
                    <form id="form-create-kegiatan-{{ $kegiatan->id }}" class="form-material"
                        action="{{ route('kegiatan-indikator.store') }}" method="POST">
                        @csrf
                        <input type="text" name="kegiatan_id" value="{{ $kegiatan->id }}" hidden>
                        <div class="form-group form-primary form-static-label pb-4">
                            <textarea name="indikator" class="form-control" required></textarea>
                            <span class="form-bar"></span>
                            <label class="float-label">Masukkan Indikator</label>
                        </div>
                        <div class="form-group form-primary form-static-label pb-4">
                            <input name="satuan" class="form-control" required>
                            <span class="form-bar"></span>
                            <label class="float-label">Masukkan Satuan (contoh: persentasi)</label>
                        </div>
                        <div class="form-group form-primary form-static-label pb-4">
                            <input name="tahun" class="form-control" required>
                            <span class="form-bar"></span>
                            <label class="float-label">Masukkan Tahun</label>
                        </div>

                        {{-- boleh kosong --}}
                        <h6 class="text-center mb-5">isian dibawah ini boleh kosong</h6>

                        <div class="form-group form-primary form-static-label pb-4">
                            <input type="number" name="target" class="form-control">
                            <span class="form-bar"></span>
                            <label class="float-label">Masukkan Target</label>
                        </div>
                        <div class="form-group form-primary form-static-label pb-4">
                            <input type="number" name="realisasi" class="form-control">
                            <span class="form-bar"></span>
                            <label class="float-label">Masukkan Realisasi</label>
                        </div>
                        <div class="form-group form-primary form-static-label pb-4">
                            <input type="number" name="tw_i" class="form-control">
                            <span class="form-bar"></span>
                            <label class="float-label">Masukkan Triwulan I</label>
                        </div>
                        <div class="form-group form-primary form-static-label pb-4">
                            <input type="number" name="tw_ii" class="form-control">
                            <span class="form-bar"></span>
                            <label class="float-label">Masukkan Triwulan II</label>
                        </div>
                        <div class="form-group form-primary form-static-label pb-4">
                            <input type="number" name="tw_iii" class="form-control">
                            <span class="form-bar"></span>
                            <label class="float-label">Masukkan Triwulan III</label>
                        </div>
                        <div class="form-group form-primary form-static-label pb-4">
                            <input type="number" name="tw_iv" class="form-control">
                            <span class="form-bar"></span>
                            <label class="float-label">Masukkan Triwulan IV</label>
                        </div>
                        <div class="form-group form-primary form-static-label pb-4">
                            <input type="number" name="capaian" class="form-control">
                            <span class="form-bar"></span>
                            <label class="float-label">Masukkan Capaian</label>
                        </div>
                    </form>
                </div>

                {{-- footer --}}
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <button type="submit" form="form-create-kegiatan-{{ $kegiatan->id }}"
                        class="btn btn-primary">Simpan</button>
                </div>

            </div>
        </div>
    </div>
</div>