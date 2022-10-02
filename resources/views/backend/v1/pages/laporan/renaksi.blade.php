{{-- button tambah --}}
<button type="button" class="btn btn-outline-primary col-2 text-left" data-toggle="modal" data-target="#renaksiModal">3. PRINT
    RENAKSI</button>
{{-- modal tambah iku --}}
<div class="modal fade" id="renaksiModal" tabindex="-1" role="dialog" aria-labelledby="renaksiModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="card">

                {{-- header --}}
                <div class="card-header">
                    <h5>RENAKSI</h5>
                </div>

                {{-- body --}}
                <div class="modal-body">
                    <form id="renaksi" class="form-material" action="{{ route('laporan.renaksi') }}" method="POST">
                        @csrf
                        <div class="form-group form-primary form-static-label pb-4">
                            <select class="form-control selectpicker" name="tahun" data-live-search="true">
                                @forelse ($tujuan_renstras as $tujuan_renstra)
                                @foreach ($tujuan_renstra->sasaran_renstra as $sasaran_renstra)
                                <option value="{{ $sasaran_renstra->tahun }}" class="option-custom">
                                    {{$sasaran_renstra->tahun}}
                                </option>
                                @endforeach
                                @empty
                                <option>Kosong</option>
                                @endforelse
                            </select>
                            <span class="form-bar"></span>
                            <label class="float-label">Tahun</label>
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
                    <button type="submit" form="renaksi" class="btn btn-primary">Print</button>
                </div>

            </div>
        </div>
    </div>
</div>