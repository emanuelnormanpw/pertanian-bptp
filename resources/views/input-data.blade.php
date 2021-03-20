@extends('layouts.master')

@section('css')
<link href="{{ URL::asset('assets/plugins/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')}}" rel="stylesheet">
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
                        Input Data
                    </li>
                </ol>
                <h4>Input Data</h4>
            </div>
        </div>
    </div>
    <!-- end row -->

    <div class="row">
        <div class="col-lg-12">
            <div class="card m-b-20">
                <div class="card-body">
                    <div class="form-group">
                        <table class="table table-bordered table-striped mb-0">
                            <tbody>
                                <tr>
                                    <td>Nama</td>
                                    <td>Eko Rismanto</td>
                                </tr>
                                <tr>
                                    <td>Provinsi</td>
                                    <td>Yogyakarta</td>
                                </tr>
                                <tr>
                                    <td>Kecamatan</td>
                                    <td>Bantul</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <form action="">
                        <div class="row">
                            <div class="col-lg-4 form-group">
                                <label class="control-label font-bold label-green">Periode</label>
                                <div>
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Periode"
                                            id="datepicker-autoclose">
                                        <div class="input-group-append">
                                            <span class="input-group-text"><i class="mdi mdi-calendar"></i></span>
                                        </div>
                                    </div><!-- input-group -->
                                </div>
                            </div>
                            <div class="col-lg-4 form-group">
                                <div class="form-group">
                                    <label class="control-label font-bold label-green">Tipe Data</label>
                                    <select class="form-control select2" data-placeholder="Pilih Data">
                                        <option value=""></option>
                                        <option value="1">Data 1</option>
                                        <option value="2">Data 2</option>
                                        <option value="3">Data 3</option>
                                        <option value="4">Data 4</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-4 form-group">
                                <div class="form-group">
                                    <label class="control-label font-bold label-green">Komoditas</label>
                                    <select class="form-control select2" data-placeholder="Pilih Komoditas">
                                        <option value=""></option>
                                        <option value="1">Data 1</option>
                                        <option value="2">Data 2</option>
                                        <option value="3">Data 3</option>
                                        <option value="4">Data 4</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 form-group">
                                <div class="form-group">
                                    <label class="control-label font-bold label-green">OPT</label>
                                    <select class="form-control select2" multiple data-placeholder="Pilih OPT">
                                        <option value=""></option>
                                        <option value="1">Data 1</option>
                                        <option value="2">Data 2</option>
                                        <option value="3">Data 3</option>
                                        <option value="4">Data 4</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-12 form-group">
                                <label
                                    class="control-label text-uppercase font-14 mb-3 font-bold label-green">Intensitas
                                    Serangan</label>
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Ringan</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" min="0" type="number"
                                            placeholder="Masukkan Intensitas Serangan Ringan">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Berat</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" min="0" type="number"
                                            placeholder="Masukkan Intensitas Serangan Berat">
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 form-group">
                                <label class="control-label text-uppercase font-14 mb-3 font-bold label-green">Luas
                                    Pengendalian</label>
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">APBN</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" min="0" type="number" placeholder="Masukkan APBN">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">APBD I</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" min="0" type="number" placeholder="Masukkan APBD I">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">APBD II</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" min="0" type="number" placeholder="Masukkan APBD II">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Masyarakat</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" min="0" type="number" placeholder="Masukkan Masyarakat">
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 form-group">
                                <div class="form-group">
                                    <label class="control-label text-uppercase font-bold label-green">Cara
                                        Pengendalian</label>
                                    <select class="form-control select2" data-placeholder="Pilih Cara Pengendalian">
                                        <option value=""></option>
                                        <option value="1">Data 1</option>
                                        <option value="2">Data 2</option>
                                        <option value="3">Data 3</option>
                                        <option value="4">Data 4</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-6 form-group">
                                <div class="form-group">
                                    <label class="control-label text-uppercase font-bold label-green">Harga rata-rata /
                                        ton</label>
                                    <input type="number" class="form-control"
                                        placeholder="Masukkan harga rata-rata / ton">
                                </div>
                            </div>

                            <div class="col-12 text-right">
                                <a href="#" class="btn btn-danger">Batal</a>
                                <a href="{{route('preview-data')}}" class="btn btn-primary">Simpan dan Lanjutkan</a>
                            </div>

                        </div>
                    </form>
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
    jQuery('#datepicker-autoclose').datepicker({
        format: 'dd/mm/yyyy',
        autoclose: true,
        todayHighlight: true
    });

</script>
@endsection
