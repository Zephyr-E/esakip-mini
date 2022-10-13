<div class="card-block table-responsive">
    <table class="table table-bordered" style="white-space: nowrap;">
        <thead>
            <tr>
                <th scope="col" class="text-center" style="width: 10%">No</th>
                <th scope="col" class="text-center" colspan="3">SASARAN SKPD</th>
                <th scope="col" class="text-center">TARGET</th>
                <th scope="col" class="text-center">PAGU</th>
                <th scope="col" class="text-center">OTORISASI</th>
            </tr>
        </thead>
        <tbody>

            {{-- sasaran skpd --}}
            @php $nomor = 1 @endphp
            @forelse ($sasaran_renstras as $sasaran_renstra)
            <tr>
                <td></td>
                <td colspan="6">
                    {{ 'Sasaran SKPD : ' . $sasaran_renstra->name }}
                </td>
            </tr>
            {{-- @dd($sasaran_renstra->sasaran_program) --}}

            <tr class="bg-warning text-dark">
                <td></td>
                <td colspan="6">
                    SASARAN PROGRAM/PROGRAM/PROGRAM INDIKATOR
                </td>
            </tr>

            {{-- sasaran program --}}
            @foreach ($sasaran_renstra->sasaran_program as $sasaran_program)
            <tr>
                <td>{{ $nomor++ }}</td>
                <td colspan="6">
                    <div class="form-inline">
                        {{ 'Sasaran Program : ' . $sasaran_program->name }}
                        &nbsp;

                        {{-- edit --}}
                        @include('backend.v1.pages.renja.sasaran-program.edit')
                        &nbsp;

                        {{-- hapus --}}
                        <form action="{{ route('renja.destroy', $sasaran_program->id) }}" method="POST">
                            @csrf
                            @method('delete')
                            <button class="btn btn-light btn-sm text-danger"
                                onclick="return confirm('Ingin menghapus Sasaran Program ini?')">
                                <i class="fas fa-trash text-danger"></i>Hapus
                            </button>
                        </form>
                    </div>
                </td>
            </tr>

            {{-- program --}}
            @foreach ($sasaran_program->program as $program)
            <tr>
                <td></td>
                <td>

                    {{-- halaman kegiatan --}}
                    <a href="{{ route('program.show', $program->id) }}" class="btn btn-sm btn-outline-primary">
                        Ke Halaman Kegiatan
                        <i class="fas fa-arrow-right fa-fw"></i>
                    </a>
                </td>
                <td colspan="3">
                    <div class="form-inline">
                        {{ 'Program : '.strtoupper($program->name) }}
                        &nbsp;

                        {{-- edit --}}
                        @include('backend.v1.pages.renja.sasaran-program.program.edit')
                        &nbsp;

                        {{-- hapus --}}
                        <form action="{{ route('program.destroy', $program->id) }}" method="POST">
                            @csrf
                            @method('delete')
                            <button class="btn btn-light btn-sm text-danger"
                                onclick="return confirm('Ingin menghapus Program ini?')">
                                <i class="fas fa-trash text-danger"></i>Hapus
                            </button>
                        </form>
                    </div>
                </td>
                @php
                $pagu = 0;
                foreach ($program->sasaran_kegiatan as $sasaran_kegiatan) {
                foreach ($sasaran_kegiatan->kegiatan as $kegiatan) {
                foreach ($kegiatan->sub_kegiatan as $sub_kegiatan) {
                $pagu = $sub_kegiatan->pagu + $pagu;
                }
                }
                }
                @endphp
                <td>@currency($pagu)</td>
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
                        @include('backend.v1.pages.renja.sasaran-program.program.program-indikator.edit')
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
                <td>{{ $program_indikator->target .' '. $program_indikator->satuan }}</td>
                <td colspan="2"></td>
            </tr>
            @endforeach

            {{-- tambah program indikator --}}
            <tr>
                <td></td>
                <td></td>
                <td colspan="5">
                    @include('backend.v1.pages.renja.sasaran-program.program.program-indikator.create')
                </td>
            </tr>

            {{-- program indikator berakhir --}}


            @endforeach

            {{-- program berakhir --}}

            {{-- tambah program --}}
            <tr>
                <td></td>
                <td colspan="6">
                    @include('backend.v1.pages.renja.sasaran-program.program.create')
                </td>
            </tr>

            @endforeach
            {{-- sasaran program berakhir --}}

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