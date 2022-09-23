<div class="card-block table-responsive">
    <table class="table table-bordered datatables">
        <thead>
            <tr>
                <th scope="col">No</th>
                @if (Auth::user()->rule !== 'User')
                <th scope="col">
                    <div class="d-flex justify-content-center">
                        <i class="fas fa-cog"></i>
                    </div>
                </th>
                @endif
                <th scope="col">Visi</th>
                <th scope="col">Tahun Awal</th>
                <th scope="col">Tahun Akhir</th>
                <th scope="col">Misi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($visi_misis as $visi_misi)
            <tr>
                <td>{{ $loop->iteration }}</td>
                @if (Auth::user()->rule !== 'User')
                <td>
                    <div class="btn-group">
                        <a href="{{ route('visi-misi.edit', $visi_misi->id) }}"
                            class="btn btn-light btn-sm text-primary">
                            <i class="fa fa-pencil-square-o"></i>
                            Edit
                        </a>
                        <form action="{{ route('visi-misi.destroy', $visi_misi->id) }}" method="POST">
                            @csrf
                            @method('delete')
                            <button class="btn btn-light btn-sm text-danger"
                                onclick="return confirm('Yakin Ingin Hapus Visi & Misi?')">
                                <i class="fas fa-trash text-danger"></i>
                                Hapus
                            </button>
                        </form>
                    </div>
                </td>
                @endif
                <td>{{ $visi_misi->name }}</td>
                <td>{{ $visi_misi->tahun_awal }}</td>
                <td>{{ $visi_misi->tahun_akhir }}</td>
                <td>
                    @forelse ($visi_misi->misi->sortBy('nomor') as $misi)
                    <p>{{ $misi->nomor . ". " . $misi->name }}</p>
                    @empty
                    <p>Misi Kosong</p>
                    @endforelse
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>