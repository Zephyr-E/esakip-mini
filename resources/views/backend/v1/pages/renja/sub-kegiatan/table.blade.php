<div class="card-block table-responsive">
    <table class="table table-bordered datatables">
        <thead>
            <tr>
                <th scope="col" class="text-center" style="width: 10%">No</th>
                <th scope="col" class="text-center" colspan="4">KEGIATAN/SUB KEGIATAN/SUB KEGIATAN INDIKATOR</th>
                <th scope="col" class="text-center">UNIT KERJA PENANGGUNG JAWAB</th>
            </tr>
        </thead>
        <tbody>

            {{-- nama sub kegiatan --}}
            <tr>
                <td></td>
                <td colspan="5">
                    {{ 'Kegiatan : '.$kegiatan->name }}
                </td>
            </tr>

            {{--tambah sub kegiatan --}}
            <tr>
                <td></td>
                <td></td>
                <td colspan="4">
                    @include('backend.v1.pages.renja.sub-kegiatan.create')
                </td>
            </tr>

            {{-- sub kegiatan --}}
            @foreach ($kegiatan->sub_kegiatan as $sub_kegiatan)
            <tr>
                <td></td>
                <td>{{ $loop->iteration }}</td>
                <td colspan="3">
                    <div class="form-inline">
                        {{ $sub_kegiatan->name }}
                        &nbsp;
                        {{-- edit sub kegiatan --}}
                        @include('backend.v1.pages.renja.sub-kegiatan.edit')
                        &nbsp;
                        {{-- hapus sub kegiatan --}}
                        <form action="{{ route('sub-kegiatan.destroy', $sub_kegiatan->id) }}" method="POST">
                            @csrf
                            @method('delete')
                            <button class="btn btn-light btn-sm text-danger"
                                onclick="return confirm('Ingin menghapus Sub Program ini?')">
                                <i class="fas fa-trash text-danger"></i>Hapus
                            </button>
                        </form>
                    </div>
                </td>
                <td>{{ $sub_kegiatan->otorisasi }}</td>
            </tr>

            {{-- tambah kegiatan indikator --}}
            <tr>
                <td></td>
                <td></td>
                <td colspan="4">
                    @include('backend.v1.pages.renja.sub-kegiatan-indikator.create')
                </td>
            </tr>

            {{-- sub kegiatan indikator --}}
            @foreach ($sub_kegiatan->sub_kegiatan_indikator as $sub_kegiatan_indikator)
            <tr>
                <td></td>
                <td></td>
                <td>{{ $loop->iteration }}</td>
                <td colspan="2">
                    <div class="form-inline">
                        {{ $sub_kegiatan_indikator->name }}
                        &nbsp;
                        @include('backend.v1.pages.renja.sub-kegiatan-indikator.edit')
                        &nbsp;
                        <form action="{{ route('sub-kegiatan-indikator.destroy', $sub_kegiatan_indikator->id) }}"
                            method="POST">
                            @csrf
                            @method('delete')
                            <button class="btn btn-light btn-sm text-danger"
                                onclick="return confirm('Ingin menghapus Sub Kegiatan Indikator ini?')">
                                <i class="fas fa-trash text-danger"></i>
                                Hapus
                            </button>
                        </form>
                    </div>
                </td>
                <td>{{ $sub_kegiatan_indikator->otorisasi }}</td>
            </tr>
            @endforeach
            {{-- sub kegiatan indikator berakhir --}}

            @endforeach
            {{-- sub kegiatan berakhir --}}

        </tbody>
    </table>
</div>