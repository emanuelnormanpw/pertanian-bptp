            <!-- Top Bar Start -->
            <div class="topbar">

                <!-- LOGO -->
                <div class="topbar-left">
                    <a href="{{route('landing')}}" class="logo">
                        <span>
                            <img src="{{ URL::asset('assets/images/logo_long.png')}}" alt="" height="45">
                        </span>
                        <i>
                            <img src="{{ URL::asset('assets/images/logobrand.png')}}" alt="" height="50">
                        </i>
                    </a>
                </div>

                <nav class="navbar-custom">
                    <ul class="navbar-right d-flex list-inline float-right mb-0">
                        <li class="dropdown notification-list">
                            <div class="dropdown notification-list nav-pro-img">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <span class="text-white">Halo,
                                            <?=isset($_GET['nip']) ? $_GET['nip'] : 'User' ?></span>
                                    </div>
                                    <span class="dropdown-toggle nav-link arrow-none nav-user">
                                        <img src="assets/images/users/user-4.jpg" alt="user" class="rounded-circle">
                                    </span>
                                </div>
                            </div>
                        </li>
                    </ul>

                    <ul class="list-inline menu-left mb-0">
                        <li class="float-left">
                            <button class="button-menu-mobile open-left waves-effect">
                                <i class="mdi mdi-menu"></i>
                            </button>
                        </li>
                        <li class="d-none d-sm-block">
                            <div class="dropdown pt-3 d-inline-block">
                                <div class="pt-2 text-white">UPTD BPTD Dinas Pertanian DIY</div>
                            </div>
                        </li>
                    </ul>
                </nav>

            </div>
            <!-- Top Bar End -->
