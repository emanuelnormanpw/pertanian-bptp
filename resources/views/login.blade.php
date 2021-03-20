<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ URL::asset('assets/css/bootstrap-homepage.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ URL::asset('assets/css/homepage-style.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ URL::asset('assets/css/icons.css')}}" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <title>UPTD BPTP DIY</title>
</head>

<body class="d-flex h-100 text-white home">
    <div class="cover-container d-flex w-100 h-100 mx-auto flex-column">
        <!-- <main class="container">
			<h1 class="animate__animated animate__fadeInUp" >Plant <br> Protection</h1>
            <a href="#"><button type="button" class="btn-scss animate__animated animate__fadeInUp">Login</button></a>
		</main> -->
        <div class="container h-100 d-flex justify-content-center align-items-center">
            <div class="card">
                <div class="card-body text-black-50">
                    <h4 class="text-center"><span class="font-bold">UPTP BPTP</span> DIY</h4>
                    <p class="font-light text-center">Silahkan Login</p>
                    <div class="form-group has-feedback">
                        <input type="text" class="form-control" name="nip" placeholder="NIP" required style="padding-right: 30px;">
                        <span class="fa fa-user form-control-feedback"></span>
                        @error('nip')
                        <div style="color: red">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group has-feedback">
                        <input type="password" class="form-control" name="password" placeholder="Password" required style="padding-right: 30px;">
                        <span class="fa fa-lock form-control-feedback"></span>
                        @error('password')
                        <div style="color: red">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>
        </div>
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
            $('.nav .nav-link').on('click', function () {
                $(".nav").find(".active").removeClass("active");
                $(this).addClass("active");
            });
        });
        var sidebar = document.getElementById("sidebar");
        var overlay = document.getElementById("sidebar");
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
