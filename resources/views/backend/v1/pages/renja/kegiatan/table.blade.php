<div class="breadcrumb">
    <h5>Program: {{ $program->name }}</h5>
</div>

<div class="card-block table-responsive">
    <table class="table table-bordered datatables">
        <thead>
            <tr>
                <th scope="col" class="text-center" style="width: 10%"></th>
                <th scope="col" class="text-center" colspan="3">KEGIATAN/KEGIATAN INDIKATOR</th>
                <th scope="col" class="text-center">SATUAN</th>
                <th scope="col" class="text-center">TARGET</th>
                <th scope="col" class="text-center">UNIT KERJA PENANGGUNG JAWAB</th>
            </tr>
        </thead>
        <tbody>

            {{-- kegiatan --}}
            @forelse ($program->kegiatan as $kegiatan)
            <tr>
                <td>
                    <a href="{{ route('kegiatan.show', $kegiatan->id) }}" class="btn btn-sm btn-outline-primary">
                        Ke Halaman Sub Kegiatan
                        <i class="fas fa-arrow-right fa-fw"></i>
                    </a>
                </td>
                <td colspan="5">
                    <div class="form-inline">
                        {{ $kegiatan->name }}
                        &nbsp;

                        {{-- edit kegiatan --}}
                        @include('backend.v1.pages.renja.kegiatan.edit')
                        &nbsp;

                        {{-- hapus kegiatan --}}
                        <form action="{{ route('kegiatan.destroy', $kegiatan->id) }}" method="POST">
                            @csrf
                            @method('delete')
                            <button class="btn btn-light btn-sm text-danger"
                                onclick="return confirm('Ingin menghapus Kegiatan ini?')">
                                <i class="fas fa-trash text-danger"></i>Hapus
                            </button>
                        </form>
                    </div>
                </td>
                <td>{{ $kegiatan->otorisasi }}</td>
            </tr>

            {{-- kegiatan indikator --}}
            @foreach ($kegiatan->kegiatan_indikator as $kegiatan_indikator)
            <tr>
                <td></td>
                <td></td>
                <td>{{ $loop->iteration }}</td>
                <td colspan="1">
                    <div class="form-inline">
                        {{ $kegiatan_indikator->indikator }}
                        &nbsp;

                        {{-- edit --}}
                        @include('backend.v1.pages.renja.kegiatan.kegiatan-indikator.edit')
                        &nbsp;

                        {{-- hapus --}}
                        <form action="{{ route('kegiatan-indikator.destroy', $kegiatan_indikator->id) }}" method="POST">
                            @csrf
                            @method('delete')
                            <button class="btn btn-light btn-sm text-danger"
                                onclick="return confirm('Ingin menghapus Kegiatan Indikator ini?')">
                                <i class="fas fa-trash text-danger"></i>
                                Hapus
                            </button>
                        </form>
                    </div>
                </td>
                <td>{{ $kegiatan_indikator->satuan }}</td>
                <td>{{ $kegiatan_indikator->target }}</td>
                <td></td>
            </tr>
            @endforeach

            {{-- tambah kegiatan indikator --}}
            <tr>
                <td></td>
                <td colspan="6">
                    @include('backend.v1.pages.renja.kegiatan.kegiatan-indikator.create')
                </td>
            </tr>

            {{-- kegiatan indikator berakhir --}}

            @empty
            <td colspan="7" class="text-center">Kegiatan Kosong</td>
            @endforelse
            {{-- kegiatan berakhir --}}

        </tbody>
    </table>
</div>