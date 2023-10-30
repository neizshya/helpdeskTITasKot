<nav class="navbar navbar-main navbar-expand-lg px-0 mx-4  border-radius-xl sticky-top bg-white mt-3 shadow" id="navbarBlur" navbar-scroll="true">
    <div class="container-fluid py-1 px-3 d-flex justify-content-between align-items-center">
        <h6 class="font-weight-bolder mb-0 fs-3"><?= $title ?></h6>
        <ul class="navbar-nav">
            <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
                <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                    <div class="sidenav-toggler-inner">
                        <i class="sidenav-toggler-line"></i>
                        <i class="sidenav-toggler-line"></i>
                        <i class="sidenav-toggler-line"></i>
                    </div>
                </a>
            </li>
            <li class="nav-item dropdown px-3 pe-2 d-flex align-items-center">
                <a href="javascript;" class="nav-link text-body p-2" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="https://avatars.akamai.steamstatic.com/fab9f6e14530bb7ab8f259edfab656b97d6111e2_full.jpg" alt="" class="rounded-circle img-responsive user-icon"> </a>
                <ul class="dropdown-menu  dropdown-menu-end  px-2 py-3 me-sm-n4" aria-labelledby="dropdownMenuButton">
                    <li class="mb-3">
                        <a class="dropdown-item border-radius-md" href="/dashboard/akun">
                            <div class="d-flex ">
                                <div class="d-flex flex-column justify-content-center">
                                    <p>Akun Saya</p>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <div class="d-flex flex-column justify-content-center align-items-center">
                            <a class="btn bg-gradient-info w-100" href="/">Kembali ke Halaman Utama</a>
                        </div>

                    </li>
                    <li>
                        <div class="d-flex flex-column justify-content-center align-items-center">
                            <a class="btn bg-gradient-primary w-100" href="/">Logout</a>
                        </div>

                    </li>

                </ul>
            </li>
        </ul>
    </div>
    </div>
</nav>