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
                    <li class="breadcrumb-item">
                        Input Data
                    </li>
                    <li class="breadcrumb-item active">
                        Preview Data
                    </li>
                </ol>
                <h4>Preview Data</h4>
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
                                    <td width="50%">Nama</td>
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
                                <tr>
                                    <td>Periode</td>
                                    <td>12/02/2021</td>
                                </tr>
                                <tr>
                                    <td>Tipe Data</td>
                                    <td>Tanaman Pangan</td>
                                </tr>
                                <tr>
                                    <td>Komoditas</td>
                                    <td>Kelapa</td>
                                </tr>
                                <tr>
                                    <td>OPT</td>
                                    <td>Wereng, Hama 1, Hama 2</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <label class="control-label text-uppercase font-14 mb-3 font-bold label-green">Intensitas Serangan</label>
                            <div class="form-group">
                                <table class="table table-bordered table-striped mb-0">
                                    <tbody>
                                        <tr>
                                            <td width="50%">Ringan</td>
                                            <td>23</td>
                                        </tr>
                                        <tr>
                                            <td>Berat</td>
                                            <td>15</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="col-12">
                            <label class="control-label text-uppercase font-14 mb-3 font-bold label-green">Luas Pengendalian</label>
                            <div class="form-group">
                                <table class="table table-bordered table-striped mb-0">
                                    <tbody>
                                        <tr>
                                            <td width="50%">ABPN</td>
                                            <td>20</td>
                                        </tr>
                                        <tr>
                                            <td width="50%">APBD I</td>
                                            <td>23</td>
                                        </tr>
                                        <tr>
                                            <td width="50%">APBD II</td>
                                            <td>2</td>
                                        </tr>
                                        <tr>
                                            <td width="50%">Masyarakat</td>
                                            <td>1</td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="col-12">
                            <label class="control-label text-uppercase font-14 mb-3 font-bold label-green">Cara Pengendalian</label>
                            <div class="form-group">
                                <table class="table table-bordered table-striped mb-0">
                                    <tbody>
                                        <tr>
                                            <td width="50%">K T M B K</td>
                                            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit.</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="col-12">
                            <label class="control-label text-uppercase font-14 mb-3 font-bold label-green">Harga rata-rata / ton</label>
                            <div class="form-group">
                                <table class="table table-bordered table-striped mb-0">
                                    <tbody>
                                        <tr>
                                            <td>Rp. 50.000</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="alert alert-danger l-h-23">
                                * mohon isi data dengan sebenar - benarnya dan cek kembali inputan data anda. Karena <span class="font-bold">data tidak bisa diedit</span> kembali. Terima Kasih.
                            </div>
                        </div>

                        <div class="col-12 text-right">
                        <form action="/overview">
                            <a href="{{route('laporan')}}" class="btn btn-md-block btn-danger my-2">Kembali</a>
                            <button type="submit" class="btn btn-md-block btn-primary my-2">Simpan Data</button>
                         </form>
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
    jQuery('#datepicker-autoclose').datepicker({
        format: 'dd/mm/yyyy',
        autoclose: true,
        todayHighlight: true
    });

</script>
@endsection
