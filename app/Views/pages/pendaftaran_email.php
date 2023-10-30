<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Registration | Helpdesk Kominfo Kota Tasikmalaya</title>
    <link rel="shortcut icon" type="image/png" href="/assets/logo_tasik.svg">
    <link rel="stylesheet" href="<?= base_url('bs/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('bs/css/style.css') ?>">

</head>


<body class="min-vh-100" style="background-color: #eef5f9; overflow-x:hidden;">

    <?php echo $this->include("layout/header.php") ?>
    <?= view('components/modal_validation') ?>

    <?= view('components/modal_faq') ?>
    <?= view('components/modal_sop') ?>
    <div class="row px-3 px-md-0">
        <div class="col-xxl-3"></div>
        <div class="col-12 col-xxl-6">
            <div class="p-4 p-md-5 bg-white container mt-3 rounded-5 " style="min-height: 82vh;">
                <div class="row ">
                    <div class="col-12 text-center text-xxl-start">
                        <p class=" fs-3 fw-semibold">Pendaftaran Email tasikmalayakota.go.id</p>
                    </div>
                    <!-- radio -->
                    <div class="col-12 col-xxl-6 ">
                        <div class="row">
                            <div class="col-6">
                                <input type="radio" class="btn-check" name="pegawairadio" value="pegawai" id="pegawai" autocomplete="off" checked>
                                <label class="btn btn-outline-primary w-100" for="pegawai">Pegawai/OPD</label>
                            </div>
                            <div class="col-6">
                                <input type="radio" class="btn-check" name="pegawairadio" value="nonpegawai" id="nonpegawai" autocomplete="off">
                                <label class="btn btn-outline-primary w-100" for="nonpegawai">Non Pegawai</label>
                            </div>
                        </div>
                    </div>
                    <form action="" class="" enctype="multipart/form-data" method="post">

                        <?= view('components/formopd') ?>
                        <?= view('components/formnonopd') ?>



                    </form>
                </div>
            </div>
        </div>
        <div class="col-xxl-3"></div>
    </div>

    <?php echo $this->include("layout/footer.php") ?>

    <!-- SCRIPTS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="<?= base_url('bs/js/jquery.min.js') ?>"></script>
    <script src="<?= base_url('bs/js/bootstrap.min.js') ?>"></script>
    <script src="<?= base_url('bs/js/modal_validation.js') ?>"></script>

    <script src="<?= base_url('bs/js/main.js') ?>"></script>
    <script>
        const pegawaiRadio = document.getElementById("pegawai");
        const nonpegawaiRadio = document.getElementById("nonpegawai");
        const opdForm = document.getElementById("opdForm");
        const nonOpdForm = document.getElementById("nonOpdForm");

        pegawaiRadio.addEventListener("change", () => {
            if (pegawaiRadio.checked) {
                opdForm.classList.remove("d-none");
                nonOpdForm.classList.add("d-none");
            }
        });

        nonpegawaiRadio.addEventListener("change", () => {
            if (nonpegawaiRadio.checked) {
                nonOpdForm.classList.remove("d-none");
                opdForm.classList.add("d-none");
            }
        });
        const initialOpdFormHTML = opdForm.innerHTML;
        const initialNonOpdFormHTML = nonOpdForm.innerHTML;

        pegawaiRadio.addEventListener("change", () => {
            if (pegawaiRadio.checked) {
                opdForm.innerHTML = initialOpdFormHTML; // Restore the initial HTML
            }
        });

        nonpegawaiRadio.addEventListener("change", () => {
            if (nonpegawaiRadio.checked) {
                nonOpdForm.innerHTML = initialNonOpdFormHTML; // Restore the initial HTML
            }
        });
    </script>
    <script>
        const ktp = document.getElementById('ktp')
        const berkas = document.getElementById('berkas')
        const nonktp = document.getElementById('nonktp')
        const surattugas = document.getElementById('surattugas')

        berkas.addEventListener('change', (event) => {
            const target = event.target
            if (target.files && target.files[0]) {

                const maxAllowedSize = 800 * 1024; // 800KB
                if (target.files[0].size > maxAllowedSize) {
                    alert("Foto melebihi batas maksimal yang dapat diterima")
                    target.value = ''
                }
            }
        })
        nonktp.addEventListener('change', (event) => {
            const target = event.target
            if (target.files && target.files[0]) {

                const maxAllowedSize = 800 * 1024; // 800KB
                if (target.files[0].size > maxAllowedSize) {
                    alert("Foto melebihi batas maksimal yang dapat diterima")
                    target.value = ''
                }
            }
        })
        ktp.addEventListener('change', (event) => {
            const target = event.target
            if (target.files && target.files[0]) {

                const maxAllowedSize = 800 * 1024; // 800KB
                if (target.files[0].size > maxAllowedSize) {
                    alert("Foto melebihi batas maksimal yang dapat diterima")
                    target.value = ''
                }
            }
        })
        surattugas.addEventListener('change', (event) => {
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
        const tooltipTriggerList = document.querySelectorAll(
            '[data-bs-toggle="tooltip"]'
        );
        const tooltipList = [...tooltipTriggerList].map(
            (tooltipTriggerEl) => new bootstrap.Tooltip(tooltipTriggerEl)
        );
    </script>
    <!-- script -->


</body>

<!-- -->

</body>

</html>