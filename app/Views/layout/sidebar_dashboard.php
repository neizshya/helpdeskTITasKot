 <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 bg-white" id="sidenav-main">
     <div class="sidenav-header">
         <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
         <a class="navbar-brand m-0" href="/dashboard/main_dashboard " target="_blank">
             <img src="<?= base_url('assets/kominfo.png') ?>" class="navbar-brand-img h-100" alt="main_logo">
             <span class="ms-1 font-weight-bold">Helpdesk Dashboard</span>
         </a>
     </div>
     <hr class="horizontal dark mt-0 ">
     <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
         <ul class="navbar-nav">
             <!-- <li class="nav-item mt-3">
                 <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Home</h6>
             </li> -->
             <li class="nav-item">
                 <a class="nav-link <?= ($activePage === 'dashboard') ? 'active' : '' ?>" href="/dashboard/main_dashboard">
                     <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                         <img src="<?= base_url('assets/icon/chart-line-solid.svg') ?>" alt="">
                     </div>
                     <span class="nav-link-text ms-1">Dashboard</span>
                 </a>
             </li>
             <li class="nav-item">
                 <a class="nav-link <?= ($activePage === 'layanan_pengembangan') ? 'active' : '' ?>" href="/dashboard/layanan_pengembangan">
                     <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                         <img src="<?= base_url('assets/icon/phone.svg') ?>" alt="">
                     </div>
                     <span class="nav-link-text ms-1">Layanan Pengembangan</span>
                 </a>
             </li>
             <!-- <li class="nav-item mt-3">
                 <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Form Persetujuan</h6>
             </li>
             <li class="nav-item">
                 <a class="nav-link  " href="../pages/tables.html">
                     <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                         <svg width="12px" height="12px" viewBox="0 0 42 42" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                             <title>office</title>
                             <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                 <g transform="translate(-1869.000000, -293.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                     <g transform="translate(1716.000000, 291.000000)">
                                         <g id="office" transform="translate(153.000000, 2.000000)">
                                             <path class="color-background opacity-6" d="M12.25,17.5 L8.75,17.5 L8.75,1.75 C8.75,0.78225 9.53225,0 10.5,0 L31.5,0 C32.46775,0 33.25,0.78225 33.25,1.75 L33.25,12.25 L29.75,12.25 L29.75,3.5 L12.25,3.5 L12.25,17.5 Z"></path>
                                             <path class="color-background" d="M40.25,14 L24.5,14 C23.53225,14 22.75,14.78225 22.75,15.75 L22.75,38.5 L19.25,38.5 L19.25,22.75 C19.25,21.78225 18.46775,21 17.5,21 L1.75,21 C0.78225,21 0,21.78225 0,22.75 L0,40.25 C0,41.21775 0.78225,42 1.75,42 L40.25,42 C41.21775,42 42,41.21775 42,40.25 L42,15.75 C42,14.78225 41.21775,14 40.25,14 Z M12.25,36.75 L7,36.75 L7,33.25 L12.25,33.25 L12.25,36.75 Z M12.25,29.75 L7,29.75 L7,26.25 L12.25,26.25 L12.25,29.75 Z M35,36.75 L29.75,36.75 L29.75,33.25 L35,33.25 L35,36.75 Z M35,29.75 L29.75,29.75 L29.75,26.25 L35,26.25 L35,29.75 Z M35,22.75 L29.75,22.75 L29.75,19.25 L35,19.25 L35,22.75 Z"></path>
                                         </g>
                                     </g>
                                 </g>
                             </g>
                         </svg>
                     </div>
                     <span class="nav-link-text ms-1">Tables</span>
                 </a>
             </li> -->

             <!-- <li class="nav-item mt-3">
                 <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Form Pengajuan</h6>
             </li> -->

             <li class="nav-item ">
                 <a class="nav-link  <?= ($activePage === 'email') ? 'active' : '' ?>" href="/dashboard/email_registration">
                     <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">

                         <img src="<?= base_url('assets/icon/envelope.svg') ?>" alt="">
                     </div>
                     <span class="nav-link-text ms-1">Email / Domain</span>
                 </a>
             </li>
             <li class="nav-item ">
                 <a class="nav-link <?= ($activePage === 'subdomain') ? 'active' : '' ?> " href="/dashboard/subdomain">
                     <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">

                         <img src="<?= base_url('assets/icon/domains.svg') ?>" alt="">
                     </div>
                     <span class="nav-link-text ms-1">Subdomain</span>
                 </a>
             </li>
             <!-- <li class="nav-item ">
                 <a class="nav-link  " href="#">
                     <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">

                         <img src="<?= base_url('assets/icon/envelope.svg') ?>" alt="">
                     </div>
                     <span class="nav-link-text ms-1">Hak Akses</span>
                 </a>
             </li> -->
             <li class="nav-item ">
                 <a class="nav-link  <?= ($activePage === 'backup') ? 'active' : '' ?>" href="/dashboard/backup">
                     <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">

                         <img src="<?= base_url('assets/icon/db.svg') ?>" alt="">
                     </div>
                     <span class="nav-link-text ms-1">Backup / Restore DB</span>
                 </a>
             </li>
             <li class="nav-item ">
                 <a class="nav-link  <?= ($activePage === 'jaringan') ? 'active' : '' ?>" href="/dashboard/jaringan">
                     <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">

                         <img src="<?= base_url('assets/icon/celltower.svg') ?>" alt="">
                     </div>
                     <span class="nav-link-text ms-1">Jaringan</span>
                 </a>
             </li>
             <li class="nav-item ">
                 <a class="nav-link  <?= ($activePage === 'tamu_data_center') ? 'active' : '' ?>" href="/dashboard/tamu_data_center">
                     <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">

                         <img src="<?= base_url('assets/icon/groups.svg') ?>" alt="">
                     </div>
                     <span class="nav-link-text ms-1">Tamu Data Center</span>
                 </a>
             </li>

             <li class="nav-item ">
                 <a class="nav-link  <?= ($activePage === 'e_sertifikat') ? 'active' : '' ?>" href="/dashboard/e_sertifikat">
                     <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">

                         <img src="<?= base_url('assets/icon/contract.svg') ?>" alt="">
                     </div>
                     <span class="nav-link-text ms-1">Tanda Tangan Elektronik</span>
                 </a>
             </li>

         </ul>
     </div>

 </aside>