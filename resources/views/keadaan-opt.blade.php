<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ URL::asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ URL::asset('assets/css/homepage-style.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ URL::asset('assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet" />

    <link href="{{ URL::asset('assets/css/style.css')}}" rel="stylesheet" type="text/css">
    <link rel="shortcut icon" href="{{ URL::asset('assets/images/favicon.ico')}}">
    <link href="{{ URL::asset('assets/css/icons.css')}}" rel="stylesheet" type="text/css">

    <!-- C3 charts css -->
    <link href="{{ URL::asset('assets/plugins/c3/c3.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('assets/plugins/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')}}"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <title>UPTD BPTP DIY</title>
</head>

<style>
    .container {
        max-width: 1320px !important;
    }

</style>

<body class="d-flex">
    <div class="mysidebar" style="font-size: 16px;">
        <div id="overlay"></div>
        <div class="sidebar-custom" id="sidebar">
            <div class="list-group pt-5">
                <a href="{{route('landing')}}" class="list-group-item list-group-item-action list-group-custom">Beranda</a>
                <a href="{{route('about')}}" class="list-group-item list-group-item-action list-group-custom">Tentang Kami</a>
                <a href="{{route('keadaan-opt')}}" class="list-group-item list-group-item-action list-group-custom active">Keadaan OPT</a>
                <a href="{{route('data-petugas')}}" class="list-group-item list-group-item-action list-group-custom">Data Petugas</a>
            </div>
        </div>
    </div>
    <div class="cover-container d-flex w-100 h-100 mx-auto flex-column">
        <header class="home-aboutus mb-auto" style="border-bottom: 4px solid #1dc293; font-size: 16px;">
            <div class="d-flex justify-content-center">
                <div class="navigasi container d-flex align-items-center justify-content-between">
                    <div class="float-md-start mb-0" style="color: black;">
                        <div class="d-flex align-items-center logo">
                            <img src="{{ URL::asset('assets/images/logobrand.png')}}">
                            <div class="brand">
                                <p>UPTD BPTP</p>
                                <p>Dinas Pertanian D.I.Y</p>
                            </div>
                        </div>
                    </div>
                    <a href="#" id="menu-button-sidebar"><img src="{{ URL::asset('assets/images/menu.png')}}"
                            height="20px" alt="" srcset=""></a>
                    <nav class="nav nav-masthead justify-content-center float-md-end">
                        <a class="nav-link" aria-current="page" href="{{route('landing')}}">Beranda</a>
                        <a class="nav-link" href="{{route('about')}}">Tentang Kami</a>
                        <a class="nav-link active" href="{{route('keadaan-opt')}}">Keadaan OPT</a>
                        <a class="nav-link" href="{{route('data-petugas')}}">Data Petugas</a>
                    </nav>
                </div>
            </div>
            <div class="about-us-title font-bold text-white">
                <p>Keadaan OPT</p>
            </div>
        </header>

        <section class="container">
            <div class="row">
                <div class="col-lg-6 my-3">
                    <div class="card m-b-20">
                        <div class="card-body">
                            <h5 class="mt-0 font-bold text-uppercase text-center text-green">Data OPT A</h5>
                            <div id="chart-opt-1" class="text-secondary"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 my-3">
                    <div class="card m-b-20">
                        <div class="card-body">
                            <h5 class="mt-0 font-bold text-uppercase text-center text-green">Data OPT B</h5>
                            <div id="chart-opt-2" class="text-secondary"></div>
                        </div>
                    </div>
                </div>
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
                                                        <span class="input-group-text"><i
                                                                class="mdi mdi-calendar"></i></span>
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
                                        <div class="col-lg-2 my-2 text-secondary">
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
                                        <div class="col-lg-4 my-2">
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <input type="text" class="form-control" placeholder="Cari">
                                                </div><!-- input-group -->
                                            </div>
                                        </div>
                                        <div class="col-lg-2 my-2">
                                            <div class="form-group">
                                                <button class="btn btn-outline-primary btn-md-block btn-block"
                                                    style="height: 38px;"><i class="mx-2 mdi mdi-magnify"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 my-3">
                                    <div class="form-group">
                                        <div class="table-rep-plugin">
                                            <div class="table-responsive b-0" data-pattern="priority-columns">
                                                <table id="tech-companies-1" class="table table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th class="align-middle" rowspan="2">Tahun</th>
                                                            <th class="align-middle" rowspan="2">Bulan</th>
                                                            <th class="align-middle" rowspan="2">Provinsi</th>
                                                            <th class="align-middle" rowspan="2">Kabupaten</th>
                                                            <th class="align-middle" rowspan="2">Kecamatan</th>
                                                            <th class="align-middle" rowspan="2">Tanaman</th>
                                                            <th class="align-middle" rowspan="2">OPT</th>
                                                            <th class="align-middle" rowspan="2"
                                                                style="min-width: 170px;">Luas
                                                                Pertanaman (ha)</th>
                                                            <th class="align-middle text-center"
                                                                style="min-width: 170px;" colspan="2">Intensitas
                                                                Serangan</th>
                                                            <th class="align-middle" rowspan="2">Jumlah</th>
                                                            <th class="align-middle text-center" colspan="4">Intensitas
                                                                Serangan
                                                            </th>
                                                            <th class="align-middle" rowspan="2">Jumlah</th>
                                                            <th class="align-middle" rowspan="2">Cara Pengendalian</th>
                                                            <th class="align-middle" rowspan="2"
                                                                style="min-width: 200px;">Harga
                                                                rata - rata/Ton (Rp)</th>
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
                                                        <?php for($i=1;$i<=5;$i++):?>
                                                        <tr>
                                                            <td>20<?=($i+20)-9?></td>
                                                            <td><?=$i?></td>
                                                            <td>DIY</td>
                                                            <td>Yogyakarta</td>
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
                                                        <?php endfor;?>
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
        </section>
        <footer class="mt-auto text-center" style="background: none; color: black;">
            <p>© {{date('Y')}} All rights reserved. BPTP DIY</p>
        </footer>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js"
        integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js"
        integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous">
    </script>
    <script src="{{ URL::asset('assets/js/jquery.min.js')}}"></script>
    <script src="{{ URL::asset('assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js')}}"></script>
    <script src="{{ URL::asset('assets/plugins/select2/js/select2.min.js')}}"></script>
    <!--C3 Chart-->
    <script src="{{ URL::asset('assets/plugins/d3/d3.min.js')}}"></script>
    <script src="{{ URL::asset('assets/plugins/c3/c3.min.js')}}"></script>

    <script>
        var sidebar = document.getElementById("sidebar");
        var overlay = document.getElementById("overlay");
        document.getElementById("menu-button-sidebar").addEventListener("click", function () {
            sidebar.classList.toggle("active");
            overlay.classList.toggle("active");
        });

        overlay.addEventListener("click", function () {
            sidebar.classList.toggle("active");
            overlay.classList.toggle("active");
        });

    </script>

    <script>
        jQuery(".select2").select2();
        jQuery('.datepicker-autoclose').datepicker({
            format: 'yyyy',
            minViewMode: 2,
            autoclose: true,
            todayHighlight: true
        });

        ! function ($) {
            "use strict";

            var ChartC3 = function () {};
            ChartC3.prototype.init = function () {
                    //generating chart 
                    c3.generate({
                        bindto: '#chart-opt-1',
                        data: {
                            x: 'x_data_opt',
                            columns: [
                                ['x_data_opt', 'Data 1', 'Data 2', 'Data 3', 'Data 4', 'Data 5', 'Data 6'],
                                ['OPTA', 10, 30, 24, 56, 23, 28],
                            ],
                            type: 'bar',
                            colors: {
                                OPTA: '#0b2e2f',
                            }
                        },
                        axis: {
                            x: {
                                type: 'category' // this needed to load string x value
                            }
                        },
                        legend: {
                            show: false
                        }
                    });

                    c3.generate({
                        bindto: '#chart-opt-2',
                        data: {
                            x: 'x_data_komoditas',
                            columns: [
                                ['x_data_komoditas', 'Data 1', 'Data 2', 'Data 3', 'Data 4', 'Data 5',
                                    'Data 6'
                                ],
                                ['OPTB', 150, 80, 70, 152, 250, 95],
                            ],
                            type: 'bar',
                            colors: {
                                OPTB: '#1a7749',
                            }
                        },
                        axis: {
                            x: {
                                type: 'category' // this needed to load string x value
                            }
                        },
                        legend: {
                            show: false
                        }
                    });
                },
                $.ChartC3 = new ChartC3, $.ChartC3.Constructor = ChartC3
        }(window.jQuery),

        //initializing 
        function ($) {
            "use strict";
            $.ChartC3.init()
        }(window.jQuery);

    </script>
</body>

</html>
