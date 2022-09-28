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
            @forelse ($misis as $misi)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td colspan="4">
                    {{ 'Misi '. $misi->nomor .': ' . $misi->name }}
                </td>
            </tr>
            <tr>
                <td></td>
                <td colspan="4">
                    @include('backend.v1.pages.tujuan.create-tujuan')
                </td>
            </tr>
            @foreach ($misi->tujuan_rpjmd as $tujuan_rpjmd)
            <tr>
                <td></td>
                <td>{{ $loop->iteration }}</td>
                <td colspan="3">
                    <div class="form-inline">
                        {{ 'Tujuan '. $tujuan_rpjmd->nomor .': ' . $tujuan_rpjmd->name }}
                        &nbsp;
                        @include('backend.v1.pages.tujuan.edit-tujuan')
                        &nbsp;
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
            <tr>
                <td></td>
                <td></td>
                <td colspan="3">
                    @include('backend.v1.pages.tujuan.create-sasaran')
                </td>
            </tr>
            @foreach ($tujuan_rpjmd->sasaran_rpjmd->sortBy('nomor') as $sasaran_rpjmd)
            <tr>
                <td></td>
                <td></td>
                <td>{{ $loop->iteration }}</td>
                <td colspan="2">
                    <div class="form-inline">
                        {{ 'Sasaran '. $sasaran_rpjmd->nomor .': ' . $sasaran_rpjmd->name }}
                        &nbsp;
                        @include('backend.v1.pages.tujuan.edit-sasaran')
                        &nbsp;
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