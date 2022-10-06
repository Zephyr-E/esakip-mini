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

{{-- <div class="row">
    <!-- Material statustic card start -->
    <div class="col-xl-4 col-md-12">
        <div class="card mat-stat-card">
            <div class="card-block">
                <div class="row align-items-center b-b-default">
                    <div class="col-sm-6 b-r-default p-b-20 p-t-20">
                        <div class="row align-items-center text-center">
                            <div class="col-4 p-r-0">
                                <i class="far fa-user text-c-purple f-24"></i>
                            </div>
                            <div class="col-8 p-l-0">
                                <h5>10K</h5>
                                <p class="text-muted m-b-0">Visitors</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 p-b-20 p-t-20">
                        <div class="row align-items-center text-center">
                            <div class="col-4 p-r-0">
                                <i class="fas fa-volume-down text-c-green f-24"></i>
                            </div>
                            <div class="col-8 p-l-0">
                                <h5>100%</h5>
                                <p class="text-muted m-b-0">Volume</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-sm-6 p-b-20 p-t-20 b-r-default">
                        <div class="row align-items-center text-center">
                            <div class="col-4 p-r-0">
                                <i class="far fa-file-alt text-c-red f-24"></i>
                            </div>
                            <div class="col-8 p-l-0">
                                <h5>2000+</h5>
                                <p class="text-muted m-b-0">Files</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 p-b-20 p-t-20">
                        <div class="row align-items-center text-center">
                            <div class="col-4 p-r-0">
                                <i class="far fa-envelope-open text-c-blue f-24"></i>
                            </div>
                            <div class="col-8 p-l-0">
                                <h5>120</h5>
                                <p class="text-muted m-b-0">Mails</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-md-12">
        <div class="card mat-stat-card">
            <div class="card-block">
                <div class="row align-items-center b-b-default">
                    <div class="col-sm-6 b-r-default p-b-20 p-t-20">
                        <div class="row align-items-center text-center">
                            <div class="col-4 p-r-0">
                                <i class="fas fa-share-alt text-c-purple f-24"></i>
                            </div>
                            <div class="col-8 p-l-0">
                                <h5>1000</h5>
                                <p class="text-muted m-b-0">Share</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 p-b-20 p-t-20">
                        <div class="row align-items-center text-center">
                            <div class="col-4 p-r-0">
                                <i class="fas fa-sitemap text-c-green f-24"></i>
                            </div>
                            <div class="col-8 p-l-0">
                                <h5>600</h5>
                                <p class="text-muted m-b-0">Network</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-sm-6 p-b-20 p-t-20 b-r-default">
                        <div class="row align-items-center text-center">
                            <div class="col-4 p-r-0">
                                <i class="fas fa-signal text-c-red f-24"></i>
                            </div>
                            <div class="col-8 p-l-0">
                                <h5>350</h5>
                                <p class="text-muted m-b-0">Returns</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 p-b-20 p-t-20">
                        <div class="row align-items-center text-center">
                            <div class="col-4 p-r-0">
                                <i class="fas fa-wifi text-c-blue f-24"></i>
                            </div>
                            <div class="col-8 p-l-0">
                                <h5>100%</h5>
                                <p class="text-muted m-b-0">Connections</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-md-12">
        <div class="card mat-clr-stat-card text-white green ">
            <div class="card-block">
                <div class="row">
                    <div class="col-3 text-center bg-c-green">
                        <i class="fas fa-star mat-icon f-24"></i>
                    </div>
                    <div class="col-9 cst-cont">
                        <h5>4000+</h5>
                        <p class="m-b-0">Ratings Received</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="card mat-clr-stat-card text-white blue">
            <div class="card-block">
                <div class="row">
                    <div class="col-3 text-center bg-c-blue">
                        <i class="fas fa-trophy mat-icon f-24"></i>
                    </div>
                    <div class="col-9 cst-cont">
                        <h5>17</h5>
                        <p class="m-b-0">Achievements</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Material statustic card end -->
    <!-- order-visitor start -->

</div> --}}

@endsection