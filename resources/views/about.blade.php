<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ URL::asset('assets/css/bootstrap-homepage.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ URL::asset('assets/css/homepage-style.css')}}" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <title>UPTD BPTP DIY</title>
</head>

<body class="d-flex text-white">
    <div class="mysidebar">
        <div id="overlay"></div>
        <div class="sidebar-custom" id="sidebar">
            <div class="list-group pt-5">
                <a href="{{route('landing')}}" class="list-group-item list-group-item-action list-group-custom">Beranda</a>
                <a href="{{route('about')}}" class="list-group-item list-group-item-action list-group-custom active">Tentang Kami</a>
                <a href="#" class="list-group-item list-group-item-action list-group-custom">Keadaan OPT</a>
                <a href="#" class="list-group-item list-group-item-action list-group-custom">Data Petugas</a>
            </div>
        </div>
    </div>
    <div class="cover-container d-flex w-100 h-100 mx-auto flex-column">
        <header class="home-aboutus mb-auto" style="border-bottom: 4px solid #1dc293;">
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
                        <a class="nav-link active" href="#">Tentang Kami</a>
                        <a class="nav-link" href="#">Keadaan OPT</a>
                        <a class="nav-link" href="#">Data Petugas</a>
                    </nav>
                </div>
            </div>
            <div class="about-us-title">
                <p>Tentang Kami</p>
            </div>
        </header>

        <section class="bg-light">
            <div class="container">
                <div class="row my-3">
                    <div class="col-12 my-3">
                        <h3 class="text-green font-bold">UPTD BPTP DIY</h3>
                        <p class="font-light" style="color: #67818f; line-height: 1.8em;">UPT Balai Proteksi Tanaman
                            Pertanian (BPTP)
                            merupakan salah saw Unit Pelaksana Teknis Dinas
                            UPTD (UPTD) di lingkup Dinas Pertanian dan Ketahanan Pangan Daerah Istimewa Yogyakarta.
                            Berdasarkan
                            Pergub DIY No.96 Tahun 2018, UPT BPTP mempunyai tugas melaksanakan proteksi tanaman BPTP
                            DIY
                            pangan, hortikultura dan perkebunan untuk meningkatkan persentase pertanaman aman dari
                            serangan Organisme Pengganggu Tumbuhan (OPT) dan dampak perubahan iklim (DPI)</p>
                    </div>
                    <div class="col-12 my-3">
                        <h3 class="text-green font-bold">Sejarah BPTP DIY</h3>
                        <p class="text-green font-light" style="color: #67818f; line-height: 1.8em;">Sejarah Pada awal
                            berdirinya kelembagaan perlindungan tanaman tahun 1987, UPT BPTP DIY
                            merupakan
                            UPT Ditjen Pertanian Tanaman Pangan yang berada di wilayah kerja Balai Proteksi Tanaman
                            Pangan
                            BPTP DIY
                            (BPTP) V Jawa Tengah dengan nama Satuan Tugas (Satgas) BPTP V Propinsi DIY. Kemudian
                            berdasarkan SK Dirjen Tanaman Pangan dan Hortikultura Nomor 1.11.050.96.14 Tahun 1996
                            terjadi
                            perubahan nama dan i Satgas BPTP V Propinsi DIY menjadi Satgas Balai Proteksi Tanaman Pangan
                            dan Hortikultura (BPTPH) V Propinsi DIY yang masih tetap merupakan wilayah kerja BPTPH V
                            Jawa
                            tengah.
                            <br>
                            <br>
                            Sejalan dengan perkembangan kebijakan otonomi daerah sesuai dengan UU Nomor 22 Tahun 1999
                            dan PP Nomor 25 Tahun 2000, maka dibuat perda DIY no. 5 th 2001 yang mengatur tentang
                            Pembentukan Organisasi Dinas Daerah yang menjelaskan Organisasi Dinas Pertanian. Mengingat
                            BPTPH merupakan Satgas pusat dengan lingkup propinsi, maka BPTPH menjadi wewenang propinsi.
                            Melalui Perda DIY no. 7 th 2002 dijelaskan bahwa BPTPH dibawah Dinas Pertanian. Selanjutnya
                            pada
                            tahun 2008 berdasrkan Perda DIY no. 6 Tahun 2008 yang ditindaklanjuti dengan Pergub DIY no
                            44
                            Tahun 2008 nama BPTPH berubah menjadi Balai Proteksi Tanaman Pertanin (BPTP). Pada tahun
                            2018
                            terjadi perubahan Organisasi Perangkat Daerah DIY, dengan Pergub DIY no. 60 dan ditindak
                            lanjuti
                            dengan Pergub 96 tahun 2018 memasukkan perlindungan tanaman perkebunan masuk kedalam
                            tugas fungsi BPTP Dinas Pertanian dan Ketahanan Pangan DIY.</p>
                    </div>
                </div>
            </div>
        </section>

        <section style="background-image: url('{{ URL::asset('assets/images/plant_lab_black.jpg')}}'); background-size: cover; background-position: 50%; background-repeat: no-repeat; position: relative;">
            <div class="position-relative" style="background-color: black;"></div>
            <div class="container">
                <div class="row p-5 my-5 d-flex align-items-stratch ">
                    <div class="col-lg-4 text-center my-3">
                        <h3 class="animate__animated animate__fadeInUp">Lab Pengendalian</h3>
                    </div>
                    <div class="col-lg-4 text-center my-3">
                        <h3 class="animate__animated animate__fadeInUp">Hama Penyakit</h3>
                    </div>
                    <div class="col-lg-4 text-center my-3">
                        <h3 class="animate__animated animate__fadeInUp">Tanaman (LPHPT)</h3>
                    </div>

                </div>
            </div>
        </section>

        <!-- <main class="container">
                <div class="box-green shadow rounded">
                    <div class="row p-5 d-flex align-items-center ">
                        <div class="col-md-4 mb-3">
                            <h3 class="animate__animated animate__fadeInUp">UPTD</h3>
                            <h3 class="animate__animated animate__fadeInUp">BPTD DIY</h3>
                        </div>
                        <div class="col-md-8 ">
                            <p class="animate__animated animate__fadeIn">UPT Balai Proteksi Tanaman Pertanian (BPTP)
                                merupakan salah saw Unit Pelaksana Teknis Dinas
                                UPTD (UPTD) di lingkup Dinas Pertanian dan Ketahanan Pangan Daerah Istimewa Yogyakarta.
                                Berdasarkan
                                Pergub DIY No.96 Tahun 2018, UPT BPTP mempunyai tugas melaksanakan proteksi tanaman BPTP
                                DIY
                                pangan, hortikultura dan perkebunan untuk meningkatkan persentase pertanaman aman dari
                                serangan Organisme Pengganggu Tumbuhan (OPT) dan dampak perubahan iklim (DPI)</p>
                        </div>
                    </div>
                </div>
                <div class="sejarah row">
                    <div class="col-md-4 justify-content-center mb-3">
                        <h3 class="animate__animated animate__fadeInUp">Sejarah</h3>
                        <h3 class="animate__animated animate__fadeInUp">BPTD DIY</h3>
                    </div>
                    <div class="col-md-8">
                        <p class="animate__animated animate__fadeIn">
                            Sejarah Pada awal berdirinya kelembagaan perlindungan tanaman tahun 1987, UPT BPTP DIY
                            merupakan
                            UPT Ditjen Pertanian Tanaman Pangan yang berada di wilayah kerja Balai Proteksi Tanaman
                            Pangan
                            BPTP DIY
                            (BPTP) V Jawa Tengah dengan nama Satuan Tugas (Satgas) BPTP V Propinsi DIY. Kemudian
                            berdasarkan SK Dirjen Tanaman Pangan dan Hortikultura Nomor 1.11.050.96.14 Tahun 1996
                            terjadi
                            perubahan nama dan i Satgas BPTP V Propinsi DIY menjadi Satgas Balai Proteksi Tanaman Pangan
                            dan Hortikultura (BPTPH) V Propinsi DIY yang masih tetap merupakan wilayah kerja BPTPH V
                            Jawa
                            tengah.
                            <br>
                            <br>
                            Sejalan dengan perkembangan kebijakan otonomi daerah sesuai dengan UU Nomor 22 Tahun 1999
                            dan PP Nomor 25 Tahun 2000, maka dibuat perda DIY no. 5 th 2001 yang mengatur tentang
                            Pembentukan Organisasi Dinas Daerah yang menjelaskan Organisasi Dinas Pertanian. Mengingat
                            BPTPH merupakan Satgas pusat dengan lingkup propinsi, maka BPTPH menjadi wewenang propinsi.
                            Melalui Perda DIY no. 7 th 2002 dijelaskan bahwa BPTPH dibawah Dinas Pertanian. Selanjutnya
                            pada
                            tahun 2008 berdasrkan Perda DIY no. 6 Tahun 2008 yang ditindaklanjuti dengan Pergub DIY no
                            44
                            Tahun 2008 nama BPTPH berubah menjadi Balai Proteksi Tanaman Pertanin (BPTP). Pada tahun
                            2018
                            terjadi perubahan Organisasi Perangkat Daerah DIY, dengan Pergub DIY no. 60 dan ditindak
                            lanjuti
                            dengan Pergub 96 tahun 2018 memasukkan perlindungan tanaman perkebunan masuk kedalam
                            tugas fungsi BPTP Dinas Pertanian dan Ketahanan Pangan DIY.</p>
                    </div>
                </div>
                <div class="box-green rounded mb-5 shadow">
                    <div class="row p-5 d-flex align-items-stratch ">
                        <div class="col-md-6 col-lg-4">
                            <h3 class="animate__animated animate__fadeInUp">Lab Pengendalian</h3>
                            <h3 class="animate__animated animate__fadeInUp">Hama Penyakit</h3>
                            <h3 class="animate__animated animate__fadeInUp">Tanaman (LPHPT)</h3>
                        </div>
                        <div class="col-md-6 col-lg-8 logo_m">
                            <img class="animate__animated animate__fadeInUp" id="mikroskop"
                                src="{{ URL::asset('assets/images/mikroskop.png')}}">
                        </div>
                    </div>
                </div>
            </main> -->
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
</body>

</html>
