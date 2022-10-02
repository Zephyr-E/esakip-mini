<div class="breadcrumb">
    {{-- <h5>Program: {{ $program->name }}</h5> --}}
    <h5>Kegiatan: {{ $kegiatan->name }}</h5>
</div>

<div class="card-block table-responsive">
    <table class="table table-bordered datatables">
        <thead>
            <tr>
                <th scope="col" class="text-center" style="width: 10%"></th>
                <th scope="col" class="text-center" colspan="3">SUB KEGIATAN/SUB KEGIATAN INDIKATOR</th>
                <th scope="col" class="text-center">SATUAN</th>
                <th scope="col" class="text-center">TARGET</th>
                <th scope="col" class="text-center">UNIT KERJA PENANGGUNG JAWAB</th>
            </tr>
        </thead>
        <tbody>

            {{-- sub kegiatan --}}
            @forelse ($kegiatan->sub_kegiatan as $sub_kegiatan)
            <tr>
                <td></td>
                <td colspan="5">
                    <div class="form-inline">
                        {{ $sub_kegiatan->name }}
                        &nbsp;

                        {{-- edit sub kegiatan --}}
                        @include('backend.v1.pages.renja.sub-kegiatan.edit')
                        &nbsp;

                        {{-- hapus kegiatan --}}
                        <form action="{{ route('sub-kegiatan.destroy', $sub_kegiatan->id) }}" method="POST">
                            @csrf
                            @method('delete')
                            <button class="btn btn-light btn-sm text-danger"
                                onclick="return confirm('Ingin menghapus Sub Kegiatan ini?')">
                                <i class="fas fa-trash text-danger"></i>Hapus
                            </button>
                        </form>
                    </div>
                </td>
                <td>{{ $sub_kegiatan->otorisasi }}</td>
            </tr>

            {{-- sub kegiatan indikator --}}
            @foreach ($sub_kegiatan->sub_kegiatan_indikator as $sub_kegiatan_indikator)
            <tr>
                <td></td>
                <td></td>
                <td>{{ $loop->iteration }}</td>
                <td colspan="1">
                    <div class="form-inline">
                        {{ $sub_kegiatan_indikator->indikator }}
                        &nbsp;

                        {{-- edit --}}
                        @include('backend.v1.pages.renja.sub-kegiatan.sub-kegiatan-indikator.edit')
                        &nbsp;

                        {{-- hapus --}}
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
                <td>{{ $sub_kegiatan_indikator->satuan }}</td>
                <td>{{ $sub_kegiatan_indikator->target }}</td>
                <td></td>
            </tr>
            @endforeach

            {{-- tambah sub kegiatan indikator --}}
            <tr>
                <td></td>
                <td colspan="6">
                    @include('backend.v1.pages.renja.sub-kegiatan.sub-kegiatan-indikator.create')
                </td>
            </tr>

            {{-- kegiatan indikator berakhir --}}

            @empty
            <td colspan="7" class="text-center">Sub Kegiatan Kosong</td>
            @endforelse
            {{-- kegiatan berakhir --}}

        </tbody>
    </table>
</div>