<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Layanan Pengembangan Aplikasi | Helpdesk Kominfo Kota Tasikmalaya</title>
    <link rel="shortcut icon" type="image/png" href="/assets/logo_tasik.svg">
    <link rel="stylesheet" href="<?= base_url('bs/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('bs/css/style.css') ?>">
</head>


<body class="min-vh-100" style="background-color: #eef5f9;">

    <?php echo $this->include("layout/header.php") ?>

    <?= view('components/modal_validation') ?>

    <?= view('components/modal_faq') ?>
    <?= view('components/modal_sop') ?>

    <div class="d-flex justify-content-center bg-white container mt-3 rounded-5 p-5" style="min-height: 82vh;">
        <form class="form-floating" enctype="multipart/form-data">
            <!-- method="post" -->
            <!-- action="POST" -->
            <div class="row">
                <div class="col-12 mb-5 text-center text-xxl-start">
                    <p class=" fs-3 fw-semibold text-uppercase">formulir pengajuan pengembangan aplikasi </p>
                </div>

                <div class="col-12 mb-3">
                    <div class="row mb-3">
                        <label for="tanggal_pengajuan" class="col-sm-2 col-form-label">Tanggal Pengajuan </label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control w-50" id="tanggal_pengajuan" placeholder="Masukan Tanggal Pengajuan" value="<?php echo date('Y-m-d'); ?>" required>
                        </div>
                    </div>

                </div>
                <div class="col-12 mb-3">
                    <div class="row mb-3">
                        <label for="nama_opd" class="col-sm-2 col-form-label">Nama OPD</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control w-50" id="nama_opd">
                        </div>
                    </div>
                </div>
                <div class="col-12 mb-3">
                    <div class="row mb-3">
                        <label for="nama_sistem" class="col-sm-2 col-form-label">Nama Sistem</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control w-50" id="nama_sistem">
                        </div>
                    </div>
                </div>
                <div class="col-12 mb-3">
                    <div class="row mb-3">
                        <label for="nama_pemohon" class="col-sm-2 col-form-label">Nama Pengaju</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control w-50" id="nama_pemohon">
                        </div>
                    </div>
                </div>
                <div class="col-12 mb-3">
                    <div class="row mb-3">
                        <label for="nama_kasie" class="col-sm-2 col-form-label">Nama Kasie</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control w-50" id="nama_kasie">
                        </div>
                    </div>
                </div>
                <div class="col-12 mb-3">
                    <div class="row mb-3">
                        <label for="nama_kabid" class="col-sm-2 col-form-label">Nama Kabid</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control w-50" id="nama_kabid">
                        </div>
                    </div>
                </div>
                <div class="col-12 mb-3">
                    <fieldset class="row mb-3">
                        <legend class="col-form-label col-sm-2 pt-0">Jenis</legend>
                        <div class="col-sm-10">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="jenis" id="sistem_baru" value="sistem_baru" checked required>
                                <label class="form-check-label" for="sistem_baru">
                                    Sistem Baru
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="jenis" id="pengembangan" value="pengembangan">
                                <label class="form-check-label" for="pengembangan">
                                    Pengembangan
                                </label>
                            </div>

                        </div>
                    </fieldset>


                </div>
                <div class="col-12 mb-3">
                    <fieldset class="row mb-3">
                        <legend class="col-form-label col-sm-2 pt-0">Rencana Kerja</legend>
                        <div class="col-sm-10">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="rencana_kerja" id="termasuk" value="termasuk" checked required>
                                <label class="form-check-label" for="termasuk">
                                    Termasuk Rencana Kerja
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="rencana_kerja" id="tdk_termasuk" value="tdk_termasuk">
                                <label class="form-check-label" for="tdk_termasuk">
                                    Tidak Termasuk
                                </label>
                            </div>

                        </div>
                    </fieldset>
                </div>
                <div class="col-12 mb-3">
                    <div class="row mb-3">
                        <label for="masalah_sistem" class="col-sm-12 col-form-label">Masalah pada sistem yang ada </label>
                        <div class="col-sm-12">
                            <textarea name="masalah_sistem" class="w-100" style="min-height: 10vh;" id="masalah_sistem" required></textarea>
                        </div>
                    </div>
                </div>
                <div class="col-12 mb-3">
                    <div class="row mb-3">
                        <label for="output_sistem" class="col-sm-12 col-form-label">Output/hasil yang diharapkan</label>
                        <div class="col-sm-12">
                            <textarea name="output_sistem" class="w-100" style="min-height: 10vh;" id="masalah_sistem" required></textarea>
                        </div>
                    </div>
                </div>
                <div class="col-12 mb-3">
                    <div class="row mb-3">
                        <label for="ekspektasi_manfaat" class="col-sm-12 col-form-label">Ekspektasi manfaat</label>
                        <div class="col-sm-12">
                            <textarea name="ekspektasi_manfaat" class="w-100" style="min-height: 10vh;" id="masalah_sistem" required></textarea>
                        </div>
                    </div>
                </div>
                <div class="col-12 mb-3">
                    <p class="small">
                        Dengan ini pemohon dan atasan pemohon menyatakan bahwa :
                    </p>
                    <ol class="small fw-bold">
                        <li class="w-75">
                            <p>Bertanggungjawab atas keberhasilan dan implentasi dan keamanan pengoperasian sistem</p>
                        </li>
                        <li>
                            <p>Bersedia kooperatif selama masa pengerjaan sistem</p>
                        </li>
                        <li>
                            <p>Bersedia menerima pernyataan bahwasannya SIMRS/EDP memiliki hak untuk menolak usulan pengembangan/perubahan berikutnya dari unit terkait apabila sistem yang diusulkan tidak dijalankan</p>
                        </li>
                    </ol>
                </div>
                <div class="col-12">
                    <button class="btn btn-success w-100 text-uppercase" type="submit">Kirim</button>
                </div>
            </div>
        </form>
    </div>

    <?php echo $this->include("layout/footer.php") ?>
    <!-- SCRIPTS -->

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="<?= base_url('bs/js/jquery.min.js') ?>"></script>
    <script src="<?= base_url('bs/js/bootstrap.min.js') ?>"></script>
    <script src="<?= base_url('bs/js/modal_validation.js') ?>"></script>

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