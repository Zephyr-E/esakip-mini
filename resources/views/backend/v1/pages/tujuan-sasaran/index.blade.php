@extends('backend.v1.templates.index')

@section('title')
<!-- Page-header start -->
<div class="page-header">
    <div class="page-block">
        <div class="row align-items-center">
            <div class="col-md-8">
                <div class="page-header-title">
                </div>
            </div>
            <div class="col-md-4">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="{{ route('home') }}"> <i class="fa fa-home"></i> </a>
                    </li>
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Tujuan & Sasaran</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection

@section('content')
<div class="row">
    <!-- Color Open Accordion start -->
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-header-text">Tujuan & Sasaran</h5>
            </div>
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
                            <th scope="col">NIP</th>
                            <th scope="col">NIK</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Jabatan</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($tujuan_sasarans as $tujuan_sasaran)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            @if (Auth::user()->rule !== 'User')
                            <td>
                                <div class="btn-group">
                                    <a href="{{ route('employee.edit', $tujuan_sasaran->id) }}"
                                        class="btn btn-light btn-sm">
                                        <i class="fas fa-pen text-primary"></i>
                                        Edit
                                    </a>
                                    <form action="{{ route('tujuan-sasaran.destroy', $tujuan_sasaran->id) }}"
                                        method="POST">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-light btn-sm text-danger"
                                            onclick="return confirm('Pegawai yang dihapus akan Mempengaruhi Data-Data lainnya \nYakin Ingin Hapus Pegawai?')">
                                            <i class="fas fa-trash text-danger"></i>
                                            Hapus
                                        </button>
                                    </form>
                                </div>
                            </td>
                            @endif
                            <td>{{ $tujuan_sasaran->nip }}</td>
                            <td>{{ $tujuan_sasaran->nik }}</td>
                            <td>{{ $tujuan_sasaran->name }}</td>
                            <td>{{ $tujuan_sasaran->position }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- Color Open Accordion ends -->
</div>
@endsection