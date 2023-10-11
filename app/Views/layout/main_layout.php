<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Home | Helpdesk Kominfo Kota Tasikmalaya</title>
    <meta name="description" content="The small framework with powerful features">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="/assets/logo_tasik.svg">

    <!-- STYLES -->
    <link rel="stylesheet" href="<?= base_url('bs/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('bs/css/style.css') ?>">

</head>

<body class="min-vh-100" style="background-color: #eef5f9;">

    <?php echo $this->include("layout/header.php") ?>



    <div style="min-height: 82vh;">
        <div class="container-fluid">


            <?= view('components/modal_validation') ?>
            <?= view('components/modal_faq') ?>
            <?= view('components/modal_sop') ?>
            <div class="mt-3 col-12 d-flex  justify-content-center align-items-center">
                <p class="fs-3 fw-semibold" style="color: #000080;">LAYANAN TIK KOTA TASIKMALAYA</p>
            </div>
        </div>
        <div class="container-fluid px-5 ">

            <div class="row row-gap-3 ">
                <!--  baris pertama -->

                <?= view('components/home_card', [
                    'imageSrc' => '/assets/icon/data-center.png',
                    'text' => 'Akses Servers | Data Center',
                    // if logged in can access, if not, showing modal
                    'link' => '#'
                ]) ?>

                <?= view('components/home_card', [
                    'imageSrc' => '/assets/icon/hosting.png',
                    'text' =>
                    'Hosting & Subdomain Web',
                    // if logged in can access, if not, showing modal

                    'link' => '#'
                ]) ?>
                <?= view('components/home_card', [
                    'imageSrc' => '/assets/icon/support-ticket.png',
                    'text' =>
                    'Cek Ticket',
                    'link' => '/form/cek_ticket'
                ]) ?>
                <?= view('components/home_card', [
                    'imageSrc' => '/assets/icon/open-book.png',
                    'text' =>
                    'Layanan Pengetahuan',
                    'link' => '#'
                ]) ?>




                <!--  -->
                <!-- baris kedua -->

                <?= view('components/home_card', [
                    'imageSrc' => '/assets/icon/guest-list.png',
                    'text' =>
                    'Tamu Data Center',
                    'link' => '/tamu'
                ]) ?>
                <?= view('components/home_card', [
                    'imageSrc' => '/assets/icon/database.png',
                    'text' =>
                    'Backup | Restore DB',
                    // if logged in can access, if not, showing modal

                    'link' => '#'
                ]) ?>
                <?= view('components/home_card', [
                    'imageSrc' => '/assets/icon/sertificate.png',
                    'text' =>
                    'Sertifikat Elektronik',
                    'link' => '/form/e-sertifikat'
                ]) ?>
                <?= view('components/home_card', [
                    'imageSrc' => '/assets/icon/verification.png',
                    'text' =>
                    'Verifikasi PDF',
                    'link' => '/verifikasi_pdf'
                ]) ?>





                <!--  -->
                <!-- baris ketiga -->


                <div class="d-none col-lg-3 d-xl-flex  justify-content-center align-items-center ">

                </div>
                <?= view('components/home_card', [
                    'imageSrc' => '/assets/icon/connection.png',
                    'text' =>
                    'Jaringan',
                    // if logged in can access, if not, showing modal

                    'link' => '#'
                ]) ?>
                <?= view('components/home_card', [
                    'imageSrc' => '/assets/icon/email.png',
                    'text' =>
                    'E-mail',
                    'link' => '/form/pendaftaran_email'
                ]) ?>
                <div class="d-none col-lg-3 d-xl-flex  justify-content-center align-items-center ">

                </div>
                <!--  -->
                <!-- 3 garis terakhir -->
                <!--  -->
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
        const passwordInput = document.getElementById("password");
        const button = document.getElementById("button-addon1");
        const iconPass = document.getElementById("icon_pass");
        let isPasswordVisible = false;

        button.addEventListener("click", () => {
            if (isPasswordVisible) {
                passwordInput.type = "password";
                iconPass.src = "<?= base_url('/assets/icon/eye.svg') ?>";
            } else {
                passwordInput.type = "text";
                iconPass.src = "<?= base_url('/assets/icon/eye-slash.svg') ?>";
            }
            isPasswordVisible = !isPasswordVisible;
        });
    </script>

    <!-- -->

</body>

</html>