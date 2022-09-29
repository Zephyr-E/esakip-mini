<div class="card-block table-responsive">
    <table class="table table-bordered datatables">
        <thead>
            <tr>
                <th scope="col" class="text-center" style="width: 10%">No</th>
                <th scope="col" class="text-center" colspan="4">PROGRAM/KEGIATAN</th>
                <th scope="col" class="text-center">UNIT KERJA PENANGGUNG JAWAB</th>
            </tr>
        </thead>
        <tbody>
            @php $nomor = 1 @endphp
            @forelse ($sasaran_renstras as $sasaran_renstra)
            <tr>
                <td>{{ $nomor++ }}</td>
                <td colspan="5">
                    {{ 'Sasaran Strategis : '.$sasaran_renstra->name }}
                </td>
            </tr>
            @foreach ($sasaran_renstra->program as $program)
            <tr>
                <td></td>
                <td>{{ $loop->iteration }}</td>
                <td colspan="3">
                    <div class="form-inline">
                        {{ 'Program : '.$program->name }}
                        &nbsp;
                        @include('backend.v1.pages.renja.edit-program')
                        &nbsp;
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
            <tr>
                <td></td>
                <td></td>
                <td colspan="4">
                    @include('backend.v1.pages.renja.create-kegiatan')
                </td>
            </tr>
            @foreach ($program->kegiatan as $kegiatan)
            <tr>
                <td></td>
                <td>
                    <a href="{{ route('kegiatan.show', $kegiatan->id) }}" class="btn btn-sm btn-outline-primary">
                        Ke Halaman Sub Kegiatan
                        <i class="fas fa-arrow-right fa-fw"></i>
                    </a>
                </td>
                <td>{{ $loop->iteration }}</td>
                <td colspan="2">
                    <div class="form-inline">
                        {{ $kegiatan->name }}
                        &nbsp;
                        @include('backend.v1.pages.renja.edit-kegiatan')
                        &nbsp;
                        <form action="{{ route('kegiatan.destroy', $kegiatan->id) }}" method="POST">
                            @csrf
                            @method('delete')
                            <button class="btn btn-light btn-sm text-danger"
                                onclick="return confirm('Ingin menghapus Kegiatan ini?')">
                                <i class="fas fa-trash text-danger"></i>
                                Hapus
                            </button>
                        </form>
                    </div>
                </td>
                <td>{{ $kegiatan->otorisasi }}</td>
            </tr>
            @endforeach
            @endforeach
            @empty
            <tr>
                <td></td>
                <td colspan="5" class="text-center">Kosong</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>