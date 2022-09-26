<div class="card-block table-responsive">
    <h6 class="mb-3">{{ "Visi : " . $visi->name }}</h6>
    <table class="table table-bordered datatables">
        <thead>
            <tr>
                <th scope="col" class="text-center" style="width: 10%">No</th>
                <th scope="col" class="text-center" colspan="4">MISI/TUJUAN/SASARAN STRATEGIS</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($misis as $misi)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td colspan="4">
                    {{ 'Misi '. $misi->nomor .': ' . $misi->name }}
                </td>
            </tr>
            @php
            $tujuans = DB::table('tujuan_rpjmds')->where('misi_id', $misi->id)->get()->sortBy('nomor');
            @endphp
            <tr>
                <td></td>
                <td colspan="4">
                    @include('backend.v1.pages.tujuan.create-tujuan')
                </td>
            </tr>
            @foreach ($tujuans as $tujuan)
            <tr>
                <td></td>
                <td>{{ $loop->iteration }}</td>
                <td colspan="3">
                    <div class="form-inline">
                        {{ 'Tujuan '. $tujuan->nomor .': ' . $tujuan->name }}
                        &nbsp;
                        @include('backend.v1.pages.tujuan.edit-tujuan')
                        &nbsp;
                        <form action="{{ route('tujuan.destroy', $tujuan->id) }}" method="POST">
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
            @php
            $sasarans = DB::table('sasaran_rpjmds')->where('tujuan_rpjmd_id', $tujuan->id)->get()->sortBy('nomor');
            @endphp
            <tr>
                <td></td>
                <td></td>
                <td colspan="3">
                    @include('backend.v1.pages.tujuan.create-sasaran')
                </td>
            </tr>
            @foreach ($sasarans as $sasaran)
            <tr>
                <td></td>
                <td></td>
                <td>{{ $loop->iteration }}</td>
                <td colspan="2">
                    <div class="form-inline">
                        {{ 'Sasaran '. $sasaran->nomor .': ' . $sasaran->name }}
                        &nbsp;
                        @include('backend.v1.pages.tujuan.edit-sasaran')
                        &nbsp;
                        <form action="{{ route('sasaran.destroy', $sasaran->id) }}" method="POST">
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
            @endforeach
            @endforeach
        </tbody>
    </table>
</div>