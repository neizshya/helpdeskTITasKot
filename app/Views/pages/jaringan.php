<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jaringan | Helpdesk Kominfo Kota Tasikmalaya</title>
    <link rel="shortcut icon" type="image/png" href="/assets/logo_tasik.svg">
    <link rel="stylesheet" href="<?= base_url('bs/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('bs/css/style.css') ?>">
    <style>
        .map {
            width: 300px;
        }
    </style>

</head>
<!-- 

my own key : AIzaSyAWgRbJ2zirzZu-LQeM72OWuVpzdeNYiIU
 -->

<body class="min-vh-100" style="background-color: #eef5f9;">

    <?php echo $this->include("layout/header.php") ?>

    <?= view('components/modal_validation') ?>

    <?= view('components/modal_faq') ?>
    <?= view('components/modal_sop') ?>

    <div class="container mt-3 " style="min-height: 82vh;">
        <div class="row">
            <div class="col-0 col-lg-2"></div>
            <div class="col-12 col-lg-8 bg-white rounded-5 p-5">
                <div class="row ">
                    <div class="col-12 d-flex justify-content-center">
                        <p class="fs-4 fw-semibold">Form Isian Pelaporan Jaringan</p>
                    </div>
                    <div class="col-12 mt-3">
                        <form class="d-flex justify-content-center" action="POST" enctype="multipart/form-data">
                            <div class=" row">
                                <div class="col-12 mb-3">
                                    <div class="input-group">
                                        <span class="input-group-text" id="addon-wrapping"> <img src="<?= base_url('/assets/icon/check-square.svg') ?>" alt=""></span>
                                        <input type="date" class="form-control" placeholder="Tanggal Pengajuan" aria-label="tanggal_pengajuan_input" aria-describedby="addon-wrapping" id="tanggal_pengajuan_input" value="<?php echo date('Y-m-d'); ?>" required>
                                    </div>
                                </div>
                                <div class="col-12 mb-3">
                                    <div class="input-group">
                                        <span class="input-group-text" id="addon-wrapping"> <img src="<?= base_url('/assets/icon/check-square.svg') ?>" alt=""></span>
                                        <input type="text" class="form-control" placeholder="NIP" aria-label="nip" aria-describedby="addon-wrapping" id="nip_input" required readonly disabled>
                                    </div>
                                </div>
                                <div class="col-12 mb-3">
                                    <div class="input-group ">
                                        <span class="input-group-text" id="addon-wrapping"> <img src="<?= base_url('/assets/icon/check-square.svg') ?>" alt=""></span>
                                        <input type="text" class="form-control" placeholder="Nama OPD / Unit Kerja" aria-label="nama_opd" aria-describedby="addon-wrapping" id="nama_opd_input" required readonly disabled>

                                    </div>
                                </div>
                                <div class="col-12 mb-3">
                                    <div class="input-group ">
                                        <span class="input-group-text" id="addon-wrapping"> <img src="<?= base_url('/assets/icon/check-square.svg') ?>" alt=""></span>
                                        <input type="email" class="form-control" placeholder="Email" aria-label="email" aria-describedby="addon-wrapping" id="email_input" required readonly disabled>
                                    </div>
                                </div>
                                <div class="col-12 mb-3">
                                    <div class="input-group">
                                        <span class="input-group-text" id="addon-wrapping"> <img src="<?= base_url('/assets/icon/check-square.svg') ?>" alt=""></span>
                                        <textarea class="form-control" aria-label="alamat_opd" id="alamat_opd" placeholder="Alamat OPD"></textarea>
                                    </div>
                                </div>

                                <div class="col-12 mb-3">
                                    <div class="row">
                                        <div class="col-12">
                                            <div id="map" style="min-height:40vh"></div>
                                        </div>
                                        <div class="col-12 mt-3">
                                            <div class="row">
                                                <div class="col-6">
                                                    <input id="lat" class="form-control" placeholder="Latitude" readonly disabled>

                                                </div>
                                                <div class="col-6">
                                                    <input id="lng" class="form-control" placeholder="Longitude" readonly disabled>

                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                                <div class="col-12 mb-3">
                                    <div class="col-12 ">
                                        <label for="berkas" class="form-label fw-bold">Upload Berkas</label>
                                        <input class="form-control" type="file" id="berkas" accept=".png, .jpg, .jpeg" required>
                                        <small><b> Upload Foto Tempat (format .png, .jpg, dan .jpeg) </b> serta max 800kb </small>

                                    </div>
                                </div>
                                <div class="col-12 mb-3">
                                    <div class="form-floating ">
                                        <textarea class="form-control" placeholder="Masukan Keterangan" id="keterangan"></textarea>
                                        <label for="floatingTextarea2">Keterangan</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-success w-100" type="submit">Kirim</button>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-0 col-lg-2 "></div>
        </div>
    </div>
    </div>

    <?php echo $this->include("layout/footer.php") ?>
    <!-- SCRIPTS -->

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=<?= $api_key ?>&libraries=places&callback=initMap&solution_channel=GMP_QB_addressselection_v1_cAB" async defer></script>

    <script src="<?= base_url('bs/js/jquery.min.js') ?>"></script>
    <script src="<?= base_url('bs/js/bootstrap.min.js') ?>"></script>
    <script src="<?= base_url('bs/js/modal_validation.js') ?>"></script>
    <script>
        const input = document.getElementById('berkas')

        input.addEventListener('change', (event) => {
            const target = event.target
            if (target.files && target.files[0]) {

                const maxAllowedSize = 800 * 1024; // 800KB
                if (target.files[0].size > maxAllowedSize) {
                    alert("Foto melebihi batas maksimal yang dapat diterima")
                    target.value = ''
                }
            }
        })
    </script>
    <script>
        const passwordInput = document.getElementById("password");
        const button = document.getElementById("button-addon1");
        const iconPass = document.getElementById("icon_pass");
        let isPasswordVisible = false;

        button.addEventListener("click", () => {
            if (isPasswordVisible) {
                // If the password is currently visible, hide it
                passwordInput.type = "password";
                iconPass.src = "<?= base_url('/assets/icon/eye.svg') ?>";
            } else {
                // If the password is currently hidden, show it
                passwordInput.type = "text";
                iconPass.src = "<?= base_url('/assets/icon/eye-slash.svg') ?>"; // Change to your "eye-off" image source
            }
            isPasswordVisible = !isPasswordVisible;
        });
    </script>

    <script>
        var map;
        var marker;

        function initMap() {
            map = new google.maps.Map(document.getElementById('map'), {
                center: {
                    lat: -7.312671311249823,
                    lng: 108.19847860331556
                },
                zoom: 11
            });

            marker = new google.maps.Marker({
                map: map,
                draggable: true
            });

            google.maps.event.addListener(marker, 'dragend', function(event) {
                document.getElementById('lat').value = event.latLng.lat();
                document.getElementById('lng').value = event.latLng.lng();
                reverseGeocode(event.latLng.lat(), event.latLng.lng());
            });

            // Autocomplete for the address input
            var input = document.getElementById('alamat_opd');
            var autocomplete = new google.maps.places.Autocomplete(input);

            autocomplete.addListener('place_changed', function() {
                var place = autocomplete.getPlace();
                if (!place.geometry) {
                    return;
                }

                if (place.geometry.location) {
                    map.setCenter(place.geometry.location);
                    map.setZoom(15);
                    marker.setPosition(place.geometry.location);
                    document.getElementById('lat').value = place.geometry.location.lat();
                    document.getElementById('lng').value = place.geometry.location.lng();
                }
            });

            // Add a click event listener to the map
            map.addListener('click', function(event) {
                marker.setPosition(event.latLng);
                document.getElementById('lat').value = event.latLng.lat();
                document.getElementById('lng').value = event.latLng.lng();
                reverseGeocode(event.latLng.lat(), event.latLng.lng());
            });
        }

        function reverseGeocode(lat, lng) {
            var geocoder = new google.maps.Geocoder();
            var latlng = new google.maps.LatLng(lat, lng);

            geocoder.geocode({
                'latLng': latlng
            }, function(results, status) {
                if (status === google.maps.GeocoderStatus.OK) {
                    if (results[0]) {
                        document.getElementById('alamat_opd').value = results[0].formatted_address;
                    }
                }
            });
        }
    </script>
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
</body>

</html>