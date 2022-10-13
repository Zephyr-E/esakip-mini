{{-- button tambah --}}
<button type="button" class="btn btn-sm col-12" data-toggle="modal"
    data-target="#sasaranRenstraCreateModal{{ $tujuan_renstra->id }}"><i class="fas fa-plus fa-sm"></i>
    Tambah Sasaran</button>

{{-- modal tambah sasaran skpd --}}
<div class="modal fade" id="sasaranRenstraCreateModal{{ $tujuan_renstra->id }}" tabindex="-1" role="dialog"
    aria-labelledby="sasaranRenstraCreateModalLabel{{ $tujuan_renstra->id }}" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="card">

                {{-- header --}}
                <div class="card-header">
                    <h5>Buat Sasaran SKPD Baru</h5>
                </div>

                {{-- body --}}
                <div class="modal-body">
                    <h6 style="white-space: normal; text-align: center" class="mb-5">{{ $tujuan_renstra->name }}</h6>
                    <form id="form-create-renstra-sasaran-{{ $tujuan_renstra->id }}" class="form-material"
                        action="{{ route('renstra-sasaran.store') }}" method="POST">
                        @csrf
                        <input type="text" name="tujuan_renstra_id" value="{{ $tujuan_renstra->id }}" hidden>
                        <div class="form-group form-primary form-static-label pb-4">
                            <input type="number" name="nomor" class="form-control" required>
                            <span class="form-bar"></span>
                            <label class="float-label">Masukkan Nomor</label>
                        </div>
                        <div class="form-group form-primary form-static-label pb-4">
                            <textarea name="name" class="form-control" required></textarea>
                            <span class="form-bar"></span>
                            <label class="float-label">Masukkan Sasaran</label>
                        </div>
                        <div class="form-group form-primary form-static-label pb-4">
                            <input type="text" name="tahun" class="form-control" required>
                            <span class="form-bar"></span>
                            <label class="float-label">Masukkan Tahun</label>
                        </div>
                        <div class="form-group form-primary form-static-label pb-4">
                            <div class="col-3 form-control">
                                <select name="status" class="form-control" required>
                                    <option value=" ">Pilih</option>
                                    <option value="murni">Murni</option>
                                    <option value="perubahan">Perubahan</option>
                                </select>
                            </div>
                            <span class="form-bar"></span>
                            <label class="float-label">Status <small> (pilih status)</small></label>
                        </div>
                    </form>
                </div>

                {{-- footer --}}
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <button type="submit" form="form-create-renstra-sasaran-{{ $tujuan_renstra->id }}"
                        class="btn btn-primary">Simpan</button>
                    </div>

                </div>
        </div>
    </div>
</div>