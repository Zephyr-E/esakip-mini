<div class="card-block table-responsive">
    <table class="table table-bordered datatables">
        <thead>
            <tr>
                <th scope="col" class="text-center" style="width: 10%">No</th>
                <th scope="col" class="text-center" colspan="4">SASARAN RPJMD/TUJUAN SKPD</th>
            </tr>
        </thead>
        <tbody>
            @php $nomor = 1 @endphp
            @forelse ($tujuan_rpjmds as $tujuan_rpjmd)
            @foreach ($tujuan_rpjmd->sasaran_rpjmd as $sasaran_rpjmd)
            <tr>
                <td>{{ $nomor++ }}</td>
                <td colspan="4">
                    {{ $sasaran_rpjmd->name }}
                </td>
            </tr>
            @foreach ($sasaran_rpjmd->tujuan_renstra as $tujuan_renstra)
            <tr>
                <td></td>
                <td>{{ $loop->iteration }}</td>
                <td colspan="3">
                    <div class="form-inline">
                        {{ 'Tujuan SKPD '. $tujuan_renstra->nomor .': ' . $tujuan_renstra->name }}
                        &nbsp;
                        @include('backend.v1.pages.renstra-tujuan.edit-renstra-tujuan')
                        &nbsp;
                        <form action="{{ route('renstra-tujuan.destroy', $tujuan_renstra->id) }}" method="POST">
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
            <tr>
                <td></td>
                <td></td>
                <td colspan="3">
                    @include('backend.v1.pages.renstra-tujuan.create-renstra-sasaran')
                </td>
            </tr>
            @foreach ($tujuan_renstra->sasaran_renstra as $sasaran_renstra)
            <tr>
                <td></td>
                <td></td>
                <td>{{ $loop->iteration }}</td>
                <td colspan="2">
                    <div class="form-inline">
                        {{ 'Sasaran SKPD '. $sasaran_renstra->nomor .': ' . $sasaran_renstra->name }}
                        &nbsp;
                        @include('backend.v1.pages.renstra-tujuan.edit-renstra-sasaran')
                        &nbsp;
                        <form action="{{ route('renstra-sasaran.destroy', $sasaran_renstra->id) }}" method="POST">
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
            @empty
            <tr>
                <td></td>
                <td colspan="4" class="text-center">Kosong</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>