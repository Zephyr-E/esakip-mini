{{-- button tambah --}}
<button type="button" class="btn btn-outline-primary col-2 text-left" data-toggle="modal" data-target="#renstraModal">1.
    PRINT RENSTRA</button>
{{-- modal tambah iku --}}
<div class="modal fade" id="renstraModal" tabindex="-1" role="dialog" aria-labelledby="renstraModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="card">

                {{-- header --}}
                <div class="card-header">
                    <h5>PRINT RENSTRA</h5>
                </div>

                {{-- body --}}
                <div class="modal-body">
                    <form id="renstra" class="form-material" action="{{ route('laporan.renstra') }}" method="POST">
                        @csrf
                        <div class="form-group form-primary form-static-label pb-4">
                            <select class="form-control selectpicker" name="tahun" data-live-search="true">
                                <option value="">PILIH</option>
                                @for ($i = 2017; $i < date('Y',strtotime('+1 year')); $i++) <option value="">{{$i}}
                                    </option>
                                    @endfor
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
                    <button type="submit" form="renstra" class="btn btn-primary">Print</button>
                </div>

            </div>
        </div>
    </div>
</div>