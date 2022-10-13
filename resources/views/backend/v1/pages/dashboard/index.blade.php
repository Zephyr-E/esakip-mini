@extends('backend.v1.templates.index')

@section('title')
<!-- Page-header start -->
<div class="page-header">
    <div class="page-block">
        <div class="row align-items-center">
            <div class="col-md-8">
                <div class="page-header-title">
                    Selamat Datang di SIMANJA
                </div>
            </div>
            <div class="col-md-4">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="{{ route('home') }}"> <i class="fa fa-home"></i> </a>
                    </li>
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection

@section('content')

<div class="row">
    <!-- Material statustic card start -->
    <div class="col-xl-3 col-md-12">
        <div class="card mat-clr-stat-card text-white green ">
            <div class="card-block">
                <div class="row">
                    <div class="col-3 text-center bg-c-green">
                        <i class="fas fa-users mat-icon f-24"></i>
                    </div>
                    <div class="col-9 cst-cont">
                        <h5>{{ count($sasaran_renstras) }}</h5>
                        <p class="m-b-0">Sasaran SKPD</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-12">
        <div class="card mat-clr-stat-card text-white blue ">
            <div class="card-block">
                <div class="row">
                    <div class="col-3 text-center bg-c-blue">
                        <i class="fas fa-th-list mat-icon f-24"></i>
                    </div>
                    <div class="col-9 cst-cont">
                        <h5>{{ $program_indikators }}</h5>
                        <p class="m-b-0">Program Indikator</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-12">
        <div class="card mat-clr-stat-card text-white blue ">
            <div class="card-block">
                <div class="row">
                    <div class="col-3 text-center bg-c-blue">
                        <i class="fas fa-th-list mat-icon f-24"></i>
                    </div>
                    <div class="col-9 cst-cont">
                        <h5>{{ $kegiatan_indikators }}</h5>
                        <p class="m-b-0">Kegiatan Indikator</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-12">
        <div class="card mat-clr-stat-card text-white blue ">
            <div class="card-block">
                <div class="row">
                    <div class="col-3 text-center bg-c-blue">
                        <i class="fas fa-th-list mat-icon f-24"></i>
                    </div>
                    <div class="col-9 cst-cont">
                        <h5>{{ $sub_kegiatan_indikators }}</h5>
                        <p class="m-b-0">Sub Kegiatan Indikator</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Row end -->

<!-- Material statustic card end -->
<!-- order-visitor start -->
<div class="col-md-12">
    <div class="card">
        @include('backend.v1.pages.dashboard.publikasi.program-indikator')
    </div>
    <div class="card">
        @include('backend.v1.pages.dashboard.publikasi.kegiatan-indikator')
    </div>
    <div class="card">
        @include('backend.v1.pages.dashboard.publikasi.sub-kegiatan-indikator')
    </div>
    <div class="card">
        @include('backend.v1.pages.dashboard.publikasi.iku')
    </div>
</div>



@endsection