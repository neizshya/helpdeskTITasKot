<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Backup | Restore DB | Helpdesk Kominfo Kota Tasikmalaya</title>
    <link rel="shortcut icon" type="image/png" href="/assets/logo_tasik.svg">
    <link rel="stylesheet" href="<?= base_url('bs/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('bs/css/style.css') ?>">
</head>


<body class="min-vh-100" style="background-color: #eef5f9;">

    <?php echo $this->include("layout/header.php") ?>

    <?= view('components/modal_validation') ?>

    <?= view('components/modal_faq') ?>
    <?= view('components/modal_sop') ?>

    <div class=" bg-white container w-50 mt-3 rounded-5 p-5" style="min-height: 82vh;">
        <div class="row ">
            <div class="col-12 d-flex justify-content-center">
                <p class="fs-4 fw-semibold">Form Isian Backup | Restore DB</p>
            </div>
            <div class="col-12 mt-3">
                <form class="d-flex justify-content-center" action="POST" enctype="multipart/form-data">
                    <div class="row  w-75">
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
                                <input type="text" class="form-control" placeholder="Nama Penanggung Jawab" aria-label="nama_penanggung_jawab" aria-describedby="addon-wrapping" id="nama_penanggung_jawab_input" required readonly disabled>

                            </div>
                        </div>
                        <div class="col-12 mb-3">
                            <div class="input-group ">
                                <span class="input-group-text" id="addon-wrapping"> <img src="<?= base_url('/assets/icon/check-square.svg') ?>" alt=""></span>
                                <input type="text" class="form-control" placeholder="Nama Aplikasi" aria-label="nama_aplikasi" aria-describedby="addon-wrapping" id="nama_aplikasi" required>
                            </div>
                        </div>
                        <div class="col-12 mb-3">
                            <div class="input-group ">
                                <span class="input-group-text" id="addon-wrapping"> <img src="<?= base_url('/assets/icon/check-square.svg') ?>" alt=""></span>
                                <input type="text" class="form-control" placeholder="Link Aplikasi" aria-label="link_aplikasi" aria-describedby="addon-wrapping" id="link_aplikasi" required>
                            </div>
                        </div>
                        <div class="col-12 mb-3">
                            <p>Keterangan :</p>
                            <textarea name="keterangan" id="keterangan" class="w-100"></textarea>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-success w-100" type="submit">Kirim Permintaan</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>


    <?php echo $this->include("layout/footer.php") ?>
    <!-- SCRIPTS -->

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="<?= base_url('bs/js/jquery.min.js') ?>"></script>
    <script src="<?= base_url('bs/js/bootstrap.min.js') ?>"></script>
    <script src="<?= base_url('bs/js/modal_validation.js') ?>"></script>
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
    <!-- -->
</body>

</html>