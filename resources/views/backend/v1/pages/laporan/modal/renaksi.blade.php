{{-- button tambah --}}
<button type="button" class="btn btn-outline-primary col-2 text-left" data-toggle="modal" data-target="#monevModal">3. PRINT
    MONEV</button>
{{-- modal tambah iku --}}
<div class="modal fade" id="monevModal" tabindex="-1" role="dialog" aria-labelledby="monevModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="card">

                {{-- header --}}
                <div class="card-header">
                    <h5>MONEV</h5>
                </div>

                {{-- body --}}
                <div class="modal-body">
                    <form id="monev" class="form-material" action="{{ route('laporan.monev') }}" method="POST">
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
                    <button type="submit" form="monev" class="btn btn-primary">Print</button>
                </div>

            </div>
        </div>
    </div>
</div>