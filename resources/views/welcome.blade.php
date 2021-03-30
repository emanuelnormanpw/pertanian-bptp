<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ URL::asset('assets/css/bootstrap-homepage.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ URL::asset('assets/css/icons.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ URL::asset('assets/css/homepage-style.css')}}" rel="stylesheet" type="text/css">
    <link rel="shortcut icon" href="{{ URL::asset('assets/images/favicon.ico')}}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <title>UPTD BPTP DIY</title>
</head>

<body class="d-flex h-100 text-white home">
    <div class="mysidebar">
        <div id="overlay"></div>
        <div class="sidebar-custom" id="sidebar">
            <div class="list-group pt-5">
                <a href="{{route('landing')}}" class="list-group-item list-group-item-action list-group-custom active">Beranda</a>
                <a href="{{route('about')}}" class="list-group-item list-group-item-action list-group-custom">Tentang Kami</a>
                <a href="{{route('keadaan-opt')}}" class="list-group-item list-group-item-action list-group-custom active">Keadaan OPT</a>
                <a href="{{route('data-petugas')}}" class="list-group-item list-group-item-action list-group-custom">Data Petugas</a>
            </div>
        </div>
    </div>
    <div class="cover-container d-flex w-100 h-100 mx-auto flex-column">
        <header class="mb-auto">
            <div class="d-flex justify-content-center">
                <div class="navigasi container d-flex align-items-center justify-content-between">
                    <div class="float-md-start mb-0" style="color: black;">
                        <div class="d-flex align-items-center logo">
                            <img src="{{ URL::asset('assets/images/logobrand.png')}}">
                            <div class="brand">
                                <p>UPTD BPTP</p>
                                <p>Dinas Pertanian D.I.Y</p>
                                <p>D.I Yogyakarta</p>
                            </div>
                        </div>
                    </div>
                    <a href="#" id="menu-button-sidebar"><img src="{{ URL::asset('assets/images/menu.png')}}"
                            height="20px" alt="" srcset=""></a>
                    <nav class="nav nav-masthead justify-content-center float-md-end">
                        <a class="nav-link active" aria-current="page" href="{{route('landing')}}">Beranda</a>
                        <a class="nav-link" href="{{route('about')}}">Tentang Kami</a>
                        <a class="nav-link" href="{{route('keadaan-opt')}}">Keadaan OPT</a>
                        <a class="nav-link" href="{{route('data-petugas')}}">Data Petugas</a>
                    </nav>
                </div>
            </div>
        </header>

        <main class="container title_content">
            <h1 class="animate__animated animate__fadeInUp title-text font-bold">Plant <br> Protection</h1>
            <a href="#" class="btn_login"><button type="button" class="btn-scss animate__animated animate__fadeInUp">Login</button></a>
        </main>

        <main class="container login_content animate__animated animate__fadeInUp">
            <form action="/laporan">
                <div class="row">
                    <div class="col-md-6 col-xl-5">
                        <div class="card" style="background: linear-gradient(90deg, rgba(52, 180, 109, 0.5), rgba(29,194,147,0.5) 70%);">
                            <div class="card-body text-black-50">
                                <h4 class="text-center text-white"><span class="font-bold">UPTP BPTP</span> DIY</h4>
                                <p class="font-light text-center text-white">Silahkan Login</p>
                                <div class="form-group has-feedback">
                                    <input type="text" class="form-control" name="nip" placeholder="NIP" required
                                        style="padding-right: 30px;">
                                    <span class="fa fa-user form-control-feedback"></span>
                                    @error('nip')
                                    <div style="color: red">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group has-feedback">
                                    <input type="password" class="form-control" name="password" placeholder="Password"
                                        required style="padding-right: 30px;">
                                    <span class="fa fa-lock form-control-feedback"></span>
                                    @error('password')
                                    <div style="color: red">{{ $message }}</div>
                                    @enderror
                                </div>
								<div class="form-group text-center">
								<button class="w-100 btn-scss my-2" style="text-decoration: none; color: #ffffff;">Masuk</button>
								<a href="#" class="text-white">Lupa Password</a>
								</div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </main>

        <footer class="mt-auto text-center text-white-50">
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

    <script>
        $(document).ready(function () {
            $('.login_content').hide();

            $('.nav .nav-link').on('click', function () {
                $(".nav").find(".active").removeClass("active");
                $(this).addClass("active");
            });

            $('.btn_login').on('click', () => {
                $('.title_content').hide();
                $('.login_content').show();
            })
        });
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
