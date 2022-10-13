<div class="breadcrumb">
    <h5>Program: {{ $program->name }}</h5>
</div>

<div class="card-block table-responsive">
    <table class="table table-bordered" style="white-space: nowrap">
        <thead>
            <tr>
                <th scope="col" class="text-center" style="width: 10%">
                    {{-- halaman program --}}
                    <a href="{{ route('renja.index') }}" class="btn btn-sm btn-info">
                        <i class="fas fa-arrow-left fa-fw"></i>
                        Ke Halaman Program
                    </a>
                </th>
                <th scope="col" class="text-center" colspan="3">SASARAN KEGIATAN/KEGIATAN/KEGIATAN INDIKATOR</th>
                <th scope="col" class="text-center">TARGET</th>
                <th scope="col" class="text-center">PAGU</th>
                <th scope="col" class="text-center">OTORISASI</th>
            </tr>
        </thead>
        <tbody>

            {{-- sasaran kegiatan --}}
            @forelse ($program->sasaran_kegiatan as $sasaran_kegiatan)

            <tr>
                <td colspan="7">
                    <div class="form-inline">
                        {{ 'Sasaran Kegiatan : ' . $sasaran_kegiatan->name }}
                        &nbsp;

                        {{-- edit sasaran kegiatan --}}
                        @include('backend.v1.pages.renja.sasaran-kegiatan.edit')
                        &nbsp;

                        {{-- hapus sasaran kegiatan --}}
                        <form action="{{ route('sasaran-kegiatan.destroy', $sasaran_kegiatan->id) }}" method="POST">
                            @csrf
                            @method('delete')
                            <button class="btn btn-light btn-sm text-danger"
                                onclick="return confirm('Ingin menghapus Sasaran Kegiatan ini?')">
                                <i class="fas fa-trash text-danger"></i>Hapus
                            </button>
                        </form>
                    </div>
                </td>
            </tr>

            {{-- kegiatan --}}
            @foreach ($sasaran_kegiatan->kegiatan as $kegiatan)
            <tr>
                <td>

                    {{-- halaman sub kegiatan --}}
                    <a href="{{ route('kegiatan.show', $kegiatan->id) }}" class="btn btn-sm btn-primary">
                        Ke Halaman Sub Kegiatan
                        <i class="fas fa-arrow-right fa-fw"></i>
                    </a>
                </td>
                <td colspan="4">
                    <div class="form-inline">
                        {{ $kegiatan->name }}
                        &nbsp;

                        {{-- edit kegiatan --}}
                        @include('backend.v1.pages.renja.sasaran-kegiatan.kegiatan.edit')
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
                @php
                $pagu = 0;
                foreach ($kegiatan->sub_kegiatan as $sub_kegiatan) {
                $pagu = $sub_kegiatan->pagu + $pagu;
                }
                @endphp
                <td>@currency($pagu)</td>
                <td>{{ $kegiatan->otorisasi }}</td>
            </tr>

            {{-- kegiatan indikator --}}
            @foreach ($kegiatan->kegiatan_indikator as $kegiatan_indikator)
            <tr>
                <td colspan="2"></td>
                <td>{{ $loop->iteration }}</td>
                <td colspan="1">
                    <div class="form-inline">
                        {{ $kegiatan_indikator->indikator }}
                        &nbsp;

                        {{-- edit kegiatan indikator --}}
                        @include('backend.v1.pages.renja.sasaran-kegiatan.kegiatan.kegiatan-indikator.edit')
                        &nbsp;

                        {{-- hapus kegiatan indikator --}}
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
                <td>{{ $kegiatan_indikator->target .' '. $kegiatan_indikator->satuan }}</td>
                <td colspan="2"></td>
            </tr>
            @endforeach

            {{-- tambah kegiatan indikator --}}
            <tr>
                <td></td>
                <td colspan="6">
                    @include('backend.v1.pages.renja.sasaran-kegiatan.kegiatan.kegiatan-indikator.create')
                </td>
            </tr>

            {{-- kegiatan indikator berakhir --}}

            @endforeach

            {{-- tambah kegiatan --}}
            <tr>
                <td></td>
                <td colspan="6">
                    @include('backend.v1.pages.renja.sasaran-kegiatan.kegiatan.create')
                </td>
            </tr>

            {{-- kegiatan berakhir --}}

            @empty
            <td colspan="7" class="text-center">Sasaran Kegiatan Kosong</td>
            @endforelse
            {{-- sasaran kegiatan berakhir --}}

        </tbody>
    </table>
</div>