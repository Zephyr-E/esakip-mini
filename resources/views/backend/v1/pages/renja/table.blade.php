<div class="card-block table-responsive">
    <table class="table table-bordered datatables">
        <thead>
            <tr>
                <th scope="col" class="text-center" style="width: 10%">No</th>
                <th scope="col" class="text-center" colspan="3">SASARAN SKPD/PROGRAM/PROGRAM INDIKATOR</th>
                <th scope="col" class="text-center">SATUAN</th>
                <th scope="col" class="text-center">TARGET</th>
                <th scope="col" class="text-center">UNIT KERJA PENANGGUNG JAWAB</th>
            </tr>
        </thead>
        <tbody>

            {{-- sasaran skpd --}}
            @php $nomor = 1 @endphp
            @forelse ($sasaran_renstras as $sasaran_renstra)
            <tr>
                <td>{{ $nomor++ }}</td>
                <td colspan="6">
                    {{ 'Sasaran Strategis : '.$sasaran_renstra->name }}
                </td>
            </tr>

            {{-- program --}}
            @foreach ($sasaran_renstra->program as $program)
            <tr>
                <td></td>
                <td>
                    <a href="{{ route('renja.show', $program->id) }}" class="btn btn-sm btn-outline-primary">
                        Ke Halaman Kegiatan
                        <i class="fas fa-arrow-right fa-fw"></i>
                    </a>
                </td>
                <td colspan="4">
                    <div class="form-inline">
                        {{ 'Program : '.$program->name }}
                        &nbsp;

                        {{-- edit --}}
                        @include('backend.v1.pages.renja.edit')
                        &nbsp;

                        {{-- hapus --}}
                        <form action="{{ route('renja.destroy', $program->id) }}" method="POST">
                            @csrf
                            @method('delete')
                            <button class="btn btn-light btn-sm text-danger"
                                onclick="return confirm('Ingin menghapus Program ini?')">
                                <i class="fas fa-trash text-danger"></i>Hapus
                            </button>
                        </form>
                    </div>
                </td>
                <td>{{ $program->otorisasi }}</td>
            </tr>

            {{-- program indikator --}}
            @foreach ($program->program_indikator as $program_indikator)
            <tr>
                <td></td>
                <td></td>
                <td>{{ $loop->iteration }}</td>
                <td colspan="1">
                    <div class="form-inline">
                        {{ $program_indikator->indikator }}
                        &nbsp;

                        {{-- edit --}}
                        @include('backend.v1.pages.renja.program-indikator.edit')
                        &nbsp;

                        {{-- hapus --}}
                        <form action="{{ route('program-indikator.destroy', $program_indikator->id) }}" method="POST">
                            @csrf
                            @method('delete')
                            <button class="btn btn-light btn-sm text-danger"
                                onclick="return confirm('Ingin menghapus Indikator ini?')">
                                <i class="fas fa-trash text-danger"></i>
                                Hapus
                            </button>
                        </form>
                    </div>
                </td>
                <td>{{ $program_indikator->satuan }}</td>
                <td>{{ $program_indikator->target }}</td>
                <td></td>
            </tr>
            @endforeach

            {{-- tambah program indikator --}}
            <tr>
                <td></td>
                <td></td>
                <td colspan="5">
                    @include('backend.v1.pages.renja.program-indikator.create')
                </td>
            </tr>

            {{-- program indikator berakhir --}}

            @endforeach
            {{-- program berakhir --}}

            @empty
            <tr>
                <td></td>
                <td colspan="6" class="text-center">Kosong</td>
            </tr>
            @endforelse
            {{-- sasaran skpd berakhir --}}

        </tbody>
    </table>
</div>