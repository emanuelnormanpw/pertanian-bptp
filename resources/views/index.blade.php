@extends('layouts.master')

@section('css')
<link href="{{ URL::asset('assets/plugins/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')}}"
    rel="stylesheet">
<link href="{{ URL::asset('assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet" />
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
                        Overview
                    </li>
                </ol>
                <h4>Selamat Datang</h4>
                <h6>Tetap Sehat Selalu</h6>
            </div>
        </div>
    </div>
    <!-- end row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="card m-b-20">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12 my-2">
                            <div class="row justify-content-end align-items-center">
                                <div class="col-lg-2 my-2">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <input type="text" class="form-control datepicker-autoclose"
                                                placeholder="Masukkan Tahun">
                                            <div class="input-group-append">
                                                <span class="input-group-text"><i class="mdi mdi-calendar"></i></span>
                                            </div>
                                        </div><!-- input-group -->
                                    </div>
                                </div>
                                <div class="col-lg-2 my-2">
                                    <div class="form-group">
                                        <select class="form-control select2" data-placeholder="Pilih Tanaman">
                                            <option value=""></option>
                                            <option value="1">Data 1</option>
                                            <option value="2">Data 2</option>
                                            <option value="3">Data 3</option>
                                            <option value="4">Data 4</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-2 my-2">
                                    <div class="form-group">
                                        <select class="form-control select2" data-placeholder="Pilih OPT">
                                            <option value=""></option>
                                            <option value="1">Data 1</option>
                                            <option value="2">Data 2</option>
                                            <option value="3">Data 3</option>
                                            <option value="4">Data 4</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-2 my-2">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Cari">
                                        </div><!-- input-group -->
                                    </div>
                                </div>
                                <div class="col-lg-2 my-2">
                                    <div class="form-group">
                                        <button class="btn btn-outline-primary btn-md-block btn-block" style="height: 38px;"><i  class="mx-2 mdi mdi-magnify"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 my-3">
                            <div class="form-group">
                                <div class="table-rep-plugin">
                                    <div class="table-responsive b-0" data-pattern="priority-columns">
                                        <table id="tech-companies-1" class="table  table-striped">
                                            <thead>
                                                <tr>
                                                    <th class="align-middle" rowspan="2">Tahun</th>
                                                    <th class="align-middle" rowspan="2">Bulan</th>
                                                    <th class="align-middle" rowspan="2">Provinsi</th>
                                                    <th class="align-middle" rowspan="2">Kabupaten</th>
                                                    <th class="align-middle" rowspan="2">Kecamatan</th>
                                                    <th class="align-middle" rowspan="2">Tanaman</th>
                                                    <th class="align-middle" rowspan="2">OPT</th>
                                                    <th class="align-middle" rowspan="2" style="min-width: 170px;">Luas
                                                        Pertanaman (ha)</th>
                                                    <th class="align-middle text-center" style="min-width: 170px;"
                                                        colspan="2">Intensitas Serangan</th>
                                                    <th class="align-middle" rowspan="2">Jumlah</th>
                                                    <th class="align-middle text-center" colspan="4">Intensitas Serangan
                                                    </th>
                                                    <th class="align-middle" rowspan="2">Jumlah</th>
                                                    <th class="align-middle" rowspan="2">Cara Pengendalian</th>
                                                    <th class="align-middle" rowspan="2" style="min-width: 200px;">Harga rata - rata/Ton (Rp)</th>
                                                </tr>
                                                <tr>
                                                    <th>Ringan</th>
                                                    <th>Berat</th>

                                                    <th>Ringan</th>
                                                    <th>Berat</th>
                                                    <th>Ringan</th>
                                                    <th>Berat</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @for($i=1;$i<=10;$i++) <tr>
                                                    <td>20<?=($i+20)-9?></td>
                                                    <td><?=$i?></td>
                                                    <td>DIY</td>
                                                    <td>Sleman</td>
                                                    <td>Gamping</td>
                                                    <td>Kelapa</td>
                                                    <td>Antraknosa Colletotricum gloeosporioidaes)</td>
                                                    <td>1<?=$i-1?></td>
                                                    <td>1</td>
                                                    <td>5</td>
                                                    <td>6</td>

                                                    <td>1</td>
                                                    <td>5</td>
                                                    <td>6</td>
                                                    <td>1</td>
                                                    <td>5</td>

                                                    <td>KT M B</td>
                                                    <td>500000</td>
                                                    </tr>
                                                    @endfor
                                            </tbody>
                                        </table>
                                    </div>
                                    <nav aria-label="Page navigation example">
                                        <ul class="pagination justify-content-center">
                                            <li class="page-item disabled">
                                                <a class="page-link" href="#" tabindex="-1">Previous</a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item">
                                                <a class="page-link" href="#">Next</a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> <!-- container-fluid -->
@endsection

@section('script')
<script src="{{ URL::asset('assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js')}}"></script>
<script src="{{ URL::asset('assets/plugins/select2/js/select2.min.js')}}"></script>
<script>
    // Select2
    $(".select2").select2();
    jQuery('.datepicker-autoclose').datepicker({
        format: 'dd/mm/yyyy',
        autoclose: true,
        todayHighlight: true
    });

</script>
@endsection
