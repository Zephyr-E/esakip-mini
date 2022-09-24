<div class="card-block table-responsive">
    <table class="table table-bordered datatables">
        <thead>
            <tr>
                <th scope="col">No</th>
                @if (Auth::user()->rule !== 'User')
                <th scope="col" class="col-2">
                    <div class="d-flex justify-content-center">
                        <i class="fas fa-cog"></i>
                    </div>
                </th>
                @endif
                <th scope="col" class="col-2">Visi</th>
                <th scope="col" colspan="2">Tahun</th>
                <th scope="col" class="col-1">Status</th>
                <th scope="col" class="col-4">Misi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($visis as $visi)
            <tr>
                <td>{{ $loop->iteration }}</td>
                @if (Auth::user()->rule !== 'User')
                <td>
                    <div class="form-inline">

                        @include('backend.v1.pages.visi.edit-visi')

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

                    @include('backend.v1.pages.visi.create-misi')

                    @forelse ($visi->misi->sortBy('nomor') as $misi)
                    <div class="form-inline">
                        {{ $misi->nomor . ". " . $misi->name }}

                        @include('backend.v1.pages.visi.edit-misi')

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
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>