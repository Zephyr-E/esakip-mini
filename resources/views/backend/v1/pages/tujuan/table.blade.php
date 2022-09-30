<div class="card-block table-responsive">

    {{-- nama visi --}}
    @if (!is_null($visi))
    <h6 class="mb-3">{{ "Visi : " . $visi->name }}</h6>
    @else
    <h6 class="mb-3">Tidak ada visi yang aktif</h6>
    @endif

    <table class="table table-bordered datatables">
        <thead>
            <tr>
                <th scope="col" class="text-center" style="width: 10%">No</th>
                <th scope="col" class="text-center" colspan="4">MISI/TUJUAN/SASARAN STRATEGIS</th>
            </tr>
        </thead>
        <tbody>
            @if (!is_null($visi))

            {{-- misi --}}
            @foreach ($visi->misi as $misi)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td colspan="4">
                    {{ 'Misi '. $misi->nomor .': ' . $misi->name }}
                </td>
            </tr>

            {{-- tambah tujuan --}}
            <tr>
                <td></td>
                <td colspan="4">
                    {{-- buat tujuan --}}
                    @include('backend.v1.pages.tujuan.create')
                </td>
            </tr>

            {{-- tujuan rpjmd --}}
            @foreach ($misi->tujuan_rpjmd as $tujuan_rpjmd)
            <tr>
                <td></td>
                <td>{{ $loop->iteration }}</td>
                <td colspan="3">
                    <div class="form-inline">
                        {{ 'Tujuan '. $tujuan_rpjmd->nomor .': ' . $tujuan_rpjmd->name }}
                        &nbsp;

                        {{-- edit tujuan --}}
                        @include('backend.v1.pages.tujuan.edit')
                        &nbsp;

                        {{-- hapus tujuan --}}
                        <form action="{{ route('tujuan.destroy', $tujuan_rpjmd->id) }}" method="POST">
                            @csrf
                            @method('delete')
                            <button class="btn btn-light btn-sm text-danger"
                                onclick="return confirm('Ingin menghapus Tujuan ini?')">
                                <i class="fas fa-trash text-danger"></i>Hapus
                            </button>
                        </form>

                    </div>
                </td>
            </tr>
            {{-- tujuan rpjmd berakhir --}}

            {{-- buat sasaran --}}
            <tr>
                <td></td>
                <td></td>
                <td colspan="3">
                    @include('backend.v1.pages.tujuan.sasaran.create')
                </td>
            </tr>

            {{-- sasaran rpjmd --}}
            @foreach ($tujuan_rpjmd->sasaran_rpjmd->sortBy('nomor') as $sasaran_rpjmd)
            <tr>
                <td></td>
                <td></td>
                <td>{{ $loop->iteration }}</td>
                <td colspan="2">
                    <div class="form-inline">
                        {{ 'Sasaran '. $sasaran_rpjmd->nomor .': ' . $sasaran_rpjmd->name }}
                        &nbsp;

                        {{-- edit sasaran --}}
                        @include('backend.v1.pages.tujuan.sasaran.edit')

                        &nbsp;
                        {{-- hapus sasaran --}}
                        <form action="{{ route('sasaran.destroy', $sasaran_rpjmd->id) }}" method="POST">
                            @csrf
                            @method('delete')
                            <button class="btn btn-light btn-sm text-danger"
                                onclick="return confirm('Ingin menghapus Sasaran ini?')">
                                <i class="fas fa-trash text-danger"></i>
                                Hapus
                            </button>
                        </form>

                    </div>
                </td>
            </tr>
            @endforeach
            {{-- sasaran rpjmd berakhir --}}

            @endforeach
            {{-- tujuan rpjmd berakhir --}}

            @endforeach
            {{-- misi berakhir --}}


            @else
            <tr>
                <td></td>
                <td colspan="4" class="text-center">Kosong</td>
            </tr>
            @endif

        </tbody>
    </table>
</div>