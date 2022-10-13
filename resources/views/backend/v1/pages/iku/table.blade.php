<div class="card-block table-responsive">
    <table class="table table-bordered" style="white-space: nowrap">
        <thead>
            <tr>
                <th scope="col" class="text-center" style="width: 10%">No</th>
                <th scope="col" class="text-center" colspan="3">SASARAN SKPD/INDIKATOR KINERJA UTAMA</th>
                <th scope="col" class="text-center">OTORISASI</th>
            </tr>
        </thead>
        <tbody>

            {{-- sasaran renstra --}}
            @forelse ($sasaran_renstras as $sasaran_renstra)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td colspan="4">
                    {{ $sasaran_renstra->name }}
                </td>
            </tr>

            {{-- iku --}}
            @foreach ($sasaran_renstra->iku as $iku)
            <tr>
                <td></td>
                <td>{{ $loop->iteration }}</td>
                <td colspan="2">
                    <div class="form-inline">
                        {{ $iku->indikator }}
                        &nbsp;

                        {{-- edit --}}
                        @include('backend.v1.pages.iku.edit')
                        &nbsp;

                        {{-- hapus --}}
                        <form action="{{ route('iku.destroy', $iku->id) }}" method="POST">
                            @csrf
                            @method('delete')
                            <button class="btn btn-light btn-sm text-danger"
                                onclick="return confirm('Ingin menghapus IKU ini?')">
                                <i class="fas fa-trash text-danger"></i>Hapus
                            </button>
                        </form>
                    </div>
                </td>
                <td>{{ $iku->otorisasi }}</td>
            </tr>


            @endforeach
            {{-- iku berakhir --}}

            @empty
            <tr>
                <td></td>
                <td colspan="4" class="text-center">Kosong</td>
            </tr>
            @endforelse
            {{-- sasaran renstra berakhir --}}

        </tbody>
    </table>
</div>