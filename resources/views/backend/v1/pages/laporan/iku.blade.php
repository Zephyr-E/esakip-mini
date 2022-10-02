{{-- button tambah --}}
<button type="button" class="btn btn-outline-primary col-2 text-left mt-2 mb-2" data-toggle="modal" data-target="#ikuModal">2.
    PRINT IKU</button>
{{-- modal tambah iku --}}
<div class="modal fade" id="ikuModal" tabindex="-1" role="dialog" aria-labelledby="ikuModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="card">

                {{-- header --}}
                <div class="card-header">
                    <h5>PRINT IKU</h5>
                </div>

                {{-- body --}}
                <div class="modal-body">
                    <form id="iku" class="form-material" action="{{ route('laporan.iku') }}" method="POST">
                        @csrf
                        <div class="form-group form-primary form-static-label pb-4">
                            <select class="form-control selectpicker" name="tahun" data-live-search="true">
                                @forelse ($ikus as $iku)
                                <option value="{{ $iku->tahun }}" class="option-custom">
                                    {{$iku->tahun}}
                                </option>
                                @empty
                                <option>Kosong</option>
                                @endforelse
                            </select>
                            <span class="form-bar"></span>
                            <label class="float-label">Tahun</label>
                        </div>
                    </form>
                </div>

                {{-- footer --}}
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <button type="submit" form="iku" class="btn btn-primary">Print</button>
                </div>

            </div>
        </div>
    </div>
</div>