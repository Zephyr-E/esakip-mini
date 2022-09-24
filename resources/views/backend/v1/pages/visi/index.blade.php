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
                    <li class="breadcrumb-item"><a href="{{ route('visi.index') }}">Visi & Misi</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection

@section('content')
@if (Auth::user()->rule !== 'User')
@include('backend.v1.pages.visi.create-visi')
@endif

<div class="card">
    <div class="card-header">
        <h5>Visi & Misi</h5>
    </div>
    <div class="card-block">
        <!-- Row start -->
        <div class="row">
            <div class="col-lg-12 col-xl-12">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs  tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#tabel1" role="tab">Tabel</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#tampilan1" role="tab">Tampilan</a>
                    </li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content tabs card-block">
                    {{-- tabel visi misi --}}
                    <div class="tab-pane active" id="tabel1" role="tabpanel">
                        @include('backend.v1.pages.visi.table')
                    </div>

                    {{-- tampilan visi misi --}}
                    <div class="tab-pane" id="tampilan1" role="tabpanel">
                        @include('backend.v1.pages.visi.tampilan')
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Row end -->
</div>
</div>

@endsection