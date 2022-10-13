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
                    <li class="breadcrumb-item"><a href="{{ route('laporan.index') }}">Laporan</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection

@section('content')

<div class="card">
    <div class="card-header">
        <h5>Laporan</h5>
    </div>
    <div class="card-block">
        <form id="print" class="form-material" action="{{ route('laporan.print') }}" method="GET" target="_blank">
            <div class="form-group form-primary form-static-label col-3 pb-4">
                <select class="form-control selectpicker" name="tahun" data-live-search="true" required>
                    <option value="">-- Pilih --</option>
                    @for ($i = 2017; $i < date('Y',strtotime('+1 year')); $i++) <option value="{{$i }}">{{$i}}</option>
                        @endfor
                </select>
                <span class="form-bar"></span>
                <label class="float-label">Tahun</label>
            </div>
            <div class="form-group form-primary form-static-label col-3 pb-4">
                <select class="form-control" name="status" required>
                    <option value="">-- Pilih --</option>
                    <option value="murni">Murni</option>
                    <option value="perubahan">Perubahan</option>
                </select>
                <span class="form-bar"></span>
                <label class="float-label">Status</label>
            </div>
        </form>
    </div>

    {{-- footer --}}
    <div class="card-footer">
        <button type="submit" form="print" class="btn btn-primary">Print</button>
    </div>

</div>

@endsection