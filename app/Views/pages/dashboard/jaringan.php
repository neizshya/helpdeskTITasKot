<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Jaringan | Helpdesk Kominfo Kota Tasikmalaya</title>
    <meta name="description" content="The small framework with powerful features">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="/assets/logo_tasik.svg">
    <!-- STYLES -->
    <link rel="stylesheet" href="<?= base_url('bs/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('bs/css/style.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/main.css') ?>">
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
    <script src="https://maps.googleapis.com/maps/api/js?key=<?= $api_key ?>&libraries=places&callback=initMap&solution_channel=GMP_QB_addressselection_v1_cAB" async defer></script>

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
                <div id="map" style="height: 85vh;"></div>
            </div>
        </div>
    </main>

    <!--   Core JS Files   -->

    <script src="<?= base_url('soft/assets/js/core/popper.min.js') ?>"></script>
    <script src="<?= base_url('soft/assets/js/core/bootstrap.min.js') ?>"></script>
    <script src="<?= base_url('soft/assets/js/plugins/perfect-scrollbar.min.js') ?>"></script>
    <script src="<?= base_url('soft/assets/js/plugins/smooth-scrollbar.min.js') ?>"></script>
    <script>
        var map;
        var markersData = [{
                lat: -7.312671311249823,
                lng: 108.19847860331556,
                tanggalPelaporan: "12 oktober 2023",
                NIP: "NIP 1",
                namaOPD: "OPD 1",
                alamatOPD: "Address 1",
                fotoBerkas: "https://avatars.akamai.steamstatic.com/fab9f6e14530bb7ab8f259edfab656b97d6111e2_full.jpg",
                keterangan: "Description 1"
            },
            {


                lat: -7.308665319889126,
                lng: 108.20233861138355,
                tanggalPelaporan: "15 september 2023",
                NIP: "NIP 2",
                namaOPD: "OPD 2",
                alamatOPD: "Address 2",
                fotoBerkas: "https://avatars.akamai.steamstatic.com/fab9f6e14530bb7ab8f259edfab656b97d6111e2_full.jpg",
                keterangan: "Description 2"
            },
            {


                lat: -7.317246335339217,
                lng: 108.19949169189348,
                tanggalPelaporan: "9 januari 2024",
                NIP: "NIP 3",
                namaOPD: "OPD 3",
                alamatOPD: "Address 3",
                fotoBerkas: "https://avatars.akamai.steamstatic.com/fab9f6e14530bb7ab8f259edfab656b97d6111e2_full.jpg",
                keterangan: "Description 3"
            },
            // Add more data for other markers here
        ];

        function initMap() {
            map = new google.maps.Map(document.getElementById('map'), {
                center: {
                    lat: -7.312671311249823,
                    lng: 108.19847860331556
                },
                zoom: 13
            });

            // Create markers and add click event listeners
            markersData.forEach(function(data) {
                var marker = new google.maps.Marker({
                    position: {
                        lat: data.lat,
                        lng: data.lng
                    },
                    map: map
                });

                var infoWindow = new google.maps.InfoWindow({
                    content: `
                        <strong>Tanggal Pelaporan:</strong> ${data.tanggalPelaporan}<br><br>
                        <strong>NIP:</strong> ${data.NIP}<br><br>
                        <strong>Nama OPD:</strong> ${data.namaOPD}<br><br>
                        <strong>Alamat OPD:</strong> ${data.alamatOPD}<br><br>
                        <strong>Keterangan:</strong> ${data.keterangan}<br><br>
                        <img src="${data.fotoBerkas}"  style="max-width:15vw">
                        <strong> lat : 
                    `
                });

                marker.addListener('click', function() {
                    infoWindow.open(map, marker);
                });
            });
        }
    </script>
    <!-- Ensure the Google Maps library is fully loaded before initializing the map -->
    <script>
        function waitForGoogleMaps() {
            if (typeof google !== 'undefined' && typeof google.maps !== 'undefined') {
                initMap();
            } else {
                // If Google Maps is not yet defined, wait and check again.
                setTimeout(waitForGoogleMaps, 100);
            }
        }
        waitForGoogleMaps();
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