@extends('layouts.master')

@section('css')
<link rel="stylesheet" href="{{ URL::asset('assets/plugins/morris/morris.css')}}">
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
                        Laporan
                    </li>
                </ol>
                <h4>Selamat Datang</h4>
                <h6>Silahkan Melakukan inputan data pada form dibawah</h6>
            </div>
        </div>
    </div>
    <!-- end row -->

    <div class="row">
        <div class="col-lg-12">
            <div class="card m-b-20">
                <div class="card-body">
                    <h4 class="mt-0 mb-4 header-title">LAPORAN SERANGAN ORGANISME PENGANGGU TUMBUHAN (OPT)</h4>
                    <form action="/overview">
                        <textarea name="isi_laporan" id="laporan_editor" rows="10" cols="100" required></textarea>
                        <div class="mt-4 text-right">
                            <button class="btn btn-primary">Simpan & Lanjutkan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


</div> <!-- container-fluid -->
@endsection

@section('script')
<!--Morris Chart-->
<script src="{{ URL::asset('assets/plugins/morris/morris.min.js')}}"></script>
<script src="{{ URL::asset('assets/plugins/raphael/raphael-min.js')}}"></script>

<script src="{{ URL::asset('assets/pages/dashboard.js')}}"></script>

<script>
    // Replace the <textarea id="editor1"> with a CKEditor 4
    // instance, using default configuration.
    CKEDITOR.replace('laporan_editor');

    CKEDITOR.instances.editor1.on('change', function () {
        var data = CKEDITOR.instances.laporan_editor.getData();
    })

    document.querySelector('.custom-file-input').addEventListener('change', function (e) {
        var fileName = document.getElementById("myInput").files[0].name;
        $('.custom-file-label').text(fileName);
    })

</script>
@endsection
