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
                    <li class="breadcrumb-item"><a href="{{ route('renstra.index') }}">RENSTRA</a>
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
        <h5>RENSTRA</h5>
    </div>

    {{-- buat tujuan skpd --}}
    <div class="card-title">
        @if (Auth::user()->rule !== 'User')
        @include('backend.v1.pages.renstra.create')
        @endif
    </div>

    <div class="card-block">
        @include('backend.v1.pages.renstra.table')
    </div>
    <!-- Row end -->
</div>
</div>

@endsection