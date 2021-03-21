@extends('layouts.master')

@section('css')
<link href="{{ URL::asset('assets/plugins/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')}}"
    rel="stylesheet">
<link href="{{ URL::asset('assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet" />
<!-- C3 charts css -->
<link href="{{ URL::asset('assets/plugins/c3/c3.min.css')}}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="page-title-box">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        Home
                    </li>
                    <li class="breadcrumb-item active">
                        Dashboard
                    </li>
                </ol>
                <h4 class="text-uppercase font-bold">Dashboard</span></h4>
                <h6 class="text-primary font-bold text-uppercase"></h6>
            </div>
        </div>
    </div>
    <!-- end row -->
    <div class="row">
        <div class="col-lg-4">
            <a href="/dashboard/detail/Sleman">
                <div class="card mini-stat bg-primary">
                    <div class="card-body mini-stat-img">
                        <div class="mini-stat-icon">
                            <i class="ion ion-ios7-location float-right"></i>
                        </div>
                        <div class="text-white">
                            <h6 class="text-uppercase mb-3 font-light">Kabupaten/Kota</h6>
                            <h4 class="mb-4 font-bold font-18 text-uppercase">Sleman</h4>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-4">
            <a href="/dashboard/detail/Gunung Kidul">
                <div class="card mini-stat bg-primary">
                    <div class="card-body mini-stat-img">
                        <div class="mini-stat-icon">
                            <i class="ion ion-ios7-location float-right"></i>
                        </div>
                        <div class="text-white">
                        <h6 class="text-uppercase mb-3 font-light">Kabupaten/Kota</h6>
                        <h4 class="mb-4 font-bold font-18 text-uppercase">Gunung Kidul</h4>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-4">
        <a href="/dashboard/detail/Bantul">
            <div class="card mini-stat bg-primary">
                <div class="card-body mini-stat-img">
                    <div class="mini-stat-icon">
                        <i class="ion ion-ios7-location float-right"></i>
                    </div>
                    <div class="text-white">
                        <h6 class="text-uppercase mb-3 font-light">Kabupaten/Kota</h6>
                        <h4 class="mb-4 font-bold font-18 text-uppercase">Bantul</h4>
                    </div>
                </div>
            </div>
        </a>
        </div>
        <div class="col-lg-4">
        <a href="/dashboard/detail/Kulon Progo">
            <div class="card mini-stat bg-primary">
                <div class="card-body mini-stat-img">
                    <div class="mini-stat-icon">
                        <i class="ion ion-ios7-location float-right"></i>
                    </div>
                    <div class="text-white">
                        <h6 class="text-uppercase mb-3 font-light">Kabupaten/Kota</h6>
                        <h4 class="mb-4 font-bold font-18 text-uppercase">Kulon Progo</h4>
                    </div>
                </div>
            </div>
        </a>
        </div>
        <div class="col-lg-4">
        <a href="/dashboard/detail/Yogyakarta">
            <div class="card mini-stat bg-primary">
                <div class="card-body mini-stat-img">
                    <div class="mini-stat-icon">
                        <i class="ion ion-ios7-location float-right"></i>
                    </div>
                    <div class="text-white">
                        <h6 class="text-uppercase mb-3 font-light">Kabupaten/Kota</h6>
                        <h4 class="mb-4 font-bold font-18 text-uppercase">Yogyakarta</h4>
                    </div>
                </div>
            </div>
        </a>
        </div>
    </div>
</div> <!-- container-fluid -->
@endsection

@section('script')

@endsection
