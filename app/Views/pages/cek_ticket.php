<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check Ticket | Helpdesk Kominfo Kota Tasikmalaya</title>
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
        <div class="w-50 d-none d-md-block">
            <div class="input-group ">
                <input type="text" class="form-control border border-black" placeholder="Masukan nomor ticket" aria-label="Ticket" aria-describedby="button-addon1">
                <button class="btn btn-outline-primary" type="button" id="button-addon1">Cari ticket</button>
            </div>
        </div>
        <div class="d-block d-md-none">
            <div class="input-group ">
                <input type="text" class="form-control border border-black" placeholder="Masukan nomor ticket" aria-label="Ticket" aria-describedby="button-addon1">
                <button class="btn btn-outline-primary" type="button" id="button-addon1">Cari ticket</button>
            </div>
        </div>
    </div>

    <?php echo $this->include("layout/footer.php") ?>
    <!-- SCRIPTS -->

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="<?= base_url('bs/js/jquery.min.js') ?>"></script>
    <script src="<?= base_url('bs/js/bootstrap.min.js') ?>"></script>
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