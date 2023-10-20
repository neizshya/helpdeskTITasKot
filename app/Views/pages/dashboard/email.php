<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Email / Domain | Helpdesk Kominfo Kota Tasikmalaya</title>
    <meta name="description" content="The small framework with powerful features">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="/assets/logo_tasik.svg">
    <!-- STYLES -->
    <link rel="stylesheet" href="<?= base_url('bs/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('bs/css/style.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/main.css') ?>">
    <link rel="stylesheet" href="<?= base_url('bs/css/nav.css') ?>">
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Nucleo Icons -->
    <link href="<?= base_url('soft/assets/css/nucleo-icons.css') ?>" rel="stylesheet" />
    <link href="<?= base_url('soft/assets/css/nucleo-svg.css') ?>" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="<?= base_url('soft/assets/css/nucleo-svg.css') ?>" rel="stylesheet" />
    <!-- CSS Files -->
    <link href="<?= base_url('soft/assets/css/soft-ui-dashboard.css?v=1.0.7') ?>" rel="stylesheet" />
    <!-- Nepcha Analytics (nepcha.com) -->
    <!-- Nepcha is a easy-to-use web analytics. No cookies and fully compliant with GDPR, CCPA and PECR. -->
    <script defer data-site="YOUR_DOMAIN_HERE" src="https://api.nepcha.com/js/nepcha-analytics.js"></script>

</head>

<body class="g-sidenav-show  bg-gray-100">

    <?php echo $this->include("layout/sidebar_dashboard.php") ?>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <?php echo $this->include("layout/navbar_dashboard.php") ?>
        <?= view('components/dashboard/modal_email_tolak_aplikasi') ?>
        <?= view('components/dashboard/modal_email_validasi_aplikasi') ?>
        <?= view('components/dashboard/modal_email_detail_admin') ?>
        <!-- End Navbar -->
        <div class="container-fluid py-4">
            <div style=" min-height:80vh;max-width: 100%;overflow-x: auto;">
                <p>admin only</p>

                <div class="card mb-4">
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-3">
                            <table class="table table  align-items-center mb-0">
                                <thead>
                                    <tr class="text-center">
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nomor Pengajuan</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Tipe</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Organisasi/OPD/Desa</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Email Lain Pendaftar</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Email Ajuan</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama Lengkap</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nomor HP</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Foto KTP</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Foto Surat Tugas</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status Pengajuan</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="text-center align-content-center">
                                        <td class="align-middle text-center text-sm">567413654</td>
                                        <td class="align-middle text-center text-sm">pegawai/opd</td>
                                        <td class="align-middle text-center text-sm">OPD A</td>
                                        <td class="align-middle text-center text-sm">something@gmail.com</td>
                                        <td class="align-middle text-center text-sm">something@tasikmalaya.go.id</td>
                                        <td class="align-middle text-center text-sm">nama lengkap A</td>
                                        <td class="align-middle text-center text-sm">Nomor hp A</td>
                                        <td class="align-middle text-center text-sm"><img src="https://avatars.akamai.steamstatic.com/fab9f6e14530bb7ab8f259edfab656b97d6111e2_full.jpg" alt="" style="max-width:10vw;max-height:25vh"></td>
                                        <td class="align-middle text-center text-sm"><img src="https://avatars.akamai.steamstatic.com/fab9f6e14530bb7ab8f259edfab656b97d6111e2_full.jpg" alt="" style="max-width:10vw;max-height:25vh"></td>
                                        <td class="align-middle text-center text-sm"><span class="badge badge-sm bg-gradient-success">Divalidasi</span></td>
                                        <!-- <td><img src="https://cdn.pixabay.com/photo/2016/03/23/04/01/woman-1274056_1280.jpg" alt="" style="max-width:10vw;max-height:25vh"></td> -->
                                        <td>
                                            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal_email_validasi">Validasi</button>
                                            <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modal_email_tolak">Tolak</button>
                                            <button class="btn btn-info" data-bs-toggle="modal" data-bs-target="#modal_email_detail_admin">Details</button>
                                        </td>
                                    </tr>
                                    <!-- Add more rows as needed -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!--   Core JS Files   -->
    <script src="<?= base_url('soft/assets/js/core/popper.min.js') ?>"></script>
    <script src="<?= base_url('soft/assets/js/core/bootstrap.min.js') ?>"></script>
    <script src="<?= base_url('soft/assets/js/plugins/perfect-scrollbar.min.js') ?>"></script>
    <script src="<?= base_url('soft/assets/js/plugins/smooth-scrollbar.min.js') ?>"></script>
    <script>
        $(document).ready(function() {
            $('.timeline-event[data-status="true"]').addClass('event-green');
            $('.timeline-event[data-status="false"]').addClass('event-gray');
        });
    </script>
    <script>
        const statusButtons = document.querySelectorAll('.status-button');
        const statusTexts = document.querySelectorAll('.status-text');

        statusButtons.forEach((button, index) => {
            const processName = button.getAttribute('data-process-name');
            const relatedStatusText = document.querySelector(`.status-text[data-process-name="${processName}"]`);
            const previousButton = statusButtons[index - 1];

            if (index === 0) {
                button.classList.remove('btn-secondary');
                button.classList.add('btn-success');
            }

            button.addEventListener('click', function() {
                if (index === 0 || previousButton.getAttribute('data-process') === "true") {
                    if (this.getAttribute('data-process') === "false") {
                        this.setAttribute('data-process', "true");
                        this.classList.remove('btn-secondary');
                        this.classList.add('btn-success');
                        this.classList.add('d-none');
                        relatedStatusText.classList.remove('d-none');
                        relatedStatusText.classList.add('d-block');

                        // Change the color of the next button
                        const nextButton = statusButtons[index + 1];
                        if (nextButton) {
                            nextButton.classList.remove('btn-secondary');
                            nextButton.classList.add('btn-success');
                        }
                    } else {
                        this.setAttribute('data-process', "false");
                        this.classList.remove('btn-success');
                        this.classList.add('btn-secondary');
                        this.classList.remove('d-none');
                        relatedStatusText.classList.add('d-none');
                        relatedStatusText.classList.remove('d-block');
                    }
                }
            });
        });
    </script>
    <script>
        const radioButtons = document.querySelectorAll('input[type="radio"]');
        const hostingLuarTextArea = document.getElementById('hosting_luar_text_area');

        radioButtons.forEach(radioButton => {
            radioButton.addEventListener('change', () => {
                radioButtons.forEach(rb => {
                    rb !== radioButton ? (rb.checked = false) : null;
                });

                if (radioButton.id === 'hosting_luar' && radioButton.checked) {
                    hostingLuarTextArea.classList.remove('d-none');
                    hostingLuarTextArea.classList.add('d-block');
                } else {
                    hostingLuarTextArea.classList.add('d-none');
                    hostingLuarTextArea.classList.remove('d-block');
                }
            });
        });
    </script>

    <script>
        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
            var options = {
                damping: '0.5'
            }
            Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }
    </script>
    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="<?= base_url('soft/assets/js/soft-ui-dashboard.min.js?v=1.0.7') ?>"></script>

</body>

</html>