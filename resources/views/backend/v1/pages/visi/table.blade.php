<div class="card-block table-responsive">
    <table class="table table-bordered datatables">
        <thead>
            <tr>
                <th scope="col" class="text-center">No</th>
                @if (Auth::user()->rule !== 'User')
                <th scope="col" class="col-2" class="text-center">
                    <div class="d-flex justify-content-center">
                        <i class="fas fa-cog"></i>
                    </div>
                </th>
                @endif
                <th scope="col" class="text-center">Visi</th>
                <th scope="col" class="text-center" colspan="2">Tahun</th>
                <th scope="col" class="text-center">Status</th>
                <th scope="col" class="text-center">Misi</th>
            </tr>
        </thead>
        <tbody>

            {{-- visi --}}
            @foreach ($visis as $visi)
            <tr>
                <td>{{ $loop->iteration }}</td>
                @if (Auth::user()->rule !== 'User')
                <td>
                    <div class="form-inline">

                        {{-- edit visi --}}
                        @include('backend.v1.pages.visi.edit')
                        &nbsp;

                        {{-- hapus visi --}}
                        <form action="{{ route('visi.destroy', $visi->id) }}" method="POST">
                            @csrf
                            @method('delete')
                            <button class="btn btn-light btn-sm text-danger"
                                onclick="return confirm('Menghapus visi juga akan menghapus misi yang ada didalamnya\nYakin Ingin menghapus Visi & Misi ini?')">
                                <i class="fas fa-trash text-danger"></i>
                                Hapus
                            </button>
                        </form>

                    </div>
                </td>
                @endif
                <td>{{ $visi->name }}</td>
                <td>{{ $visi->tahun_awal }}</td>
                <td>{{ $visi->tahun_akhir }}</td>
                <td>{{ ($visi->aktif > 0) ? 'Aktif' : 'Tidak Aktif' }}</td>
                <td>

                    {{-- tambah misi --}}
                    @include('backend.v1.pages.visi.misi.create')

                    {{-- Misi --}}
                    @forelse ($visi->misi->sortBy('nomor') as $misi)
                    <div class="form-inline">
                        {{ $misi->nomor . ". " . $misi->name }}
                        &nbsp;

                        {{-- edit misi --}}
                        @include('backend.v1.pages.visi.misi.edit')
                        &nbsp;

                        {{-- hapus misi --}}
                        <form action="{{ route('misi.destroy', $misi->id) }}" method="POST">
                            @csrf
                            @method('delete')
                            <button class="btn btn-light btn-sm text-danger"
                                onclick="return confirm('Ingin menghapus Misi ini?')">
                                <i class="fas fa-trash text-danger"></i>
                            </button>
                        </form>
                    </div>
                    @empty
                    Misi Kosong
                    @endforelse
                    {{-- penutup misi --}}

                </td>
            </tr>
            @endforeach
            {{-- penutup visi --}}

        </tbody>
    </table>
</div>