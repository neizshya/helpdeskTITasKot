<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verifikasi PDF | Helpdesk Kominfo Kota Tasikmalaya</title>
    <link rel="shortcut icon" type="image/png" href="/assets/logo_tasik.svg">
    <link rel="stylesheet" href="<?= base_url('bs/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('bs/css/style.css') ?>">
</head>


<body class="min-vh-100" style="background-color: #eef5f9; overflow-x:hidden;">

    <?php echo $this->include("layout/header.php") ?>
    <?= view('components/modal_validation') ?>

    <?= view('components/modal_faq') ?>
    <?= view('components/modal_sop') ?>
    <div class="container-fluid">
        <div class="row px-3 px-md-0" style="min-height: 82vh;">
            <div class="col-xxl-4 "></div>
            <div class="col-12 col-xxl-4 d-flex align-items-center" style="min-height: 84vh;">
                <div class="p-4 p-md-5 bg-white container mt-3 rounded-5" style="min-height: 40vh;">
                    <div class="row ">
                        <div class="col-12 text-center">
                            <p class="fs-3 fw-bold">Verifikasi Dokumen PDF anda</p>
                        </div>
                        <form id="verificationForm" action="" method="post">
                            <div class="col-12">
                                <div class="mb-3">
                                    <label for="formFile" class="form-label fw-semibold">Upload dokumen yang akan di-verifikasi</label>
                                    <input class="form-control" type="file" id="formFile" accept=".pdf">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="g-recaptcha" data-sitekey="YOUR_SITE_KEY"> this for is captcha</div>
                            </div>
                            <div class="bottom-0 col-12 d-flex justify-content-end">
                                <button class="btn btn-info" type="submit" id="submitBtn" disabled>Check Dokumen</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
            <div class="col-xxl-4 "></div>
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
    <!-- need to add script for recaptcha -->
    <!-- <script src="https://www.google.com/recaptcha/api.js?render=YOUR_SITE_KEY"></script> -->

    <!--  -->
    <!-- <script>
        // Function to enable/disable the submit button based on reCAPTCHA completion
        function enableSubmitButton() {
            const submitBtn = document.getElementById("submitBtn");
            const captchaResponse = grecaptcha.getResponse(); // Get reCAPTCHA response

            if (captchaResponse) {
                // If reCAPTCHA challenge is completed, enable the submit button
                submitBtn.disabled = false;
            } else {
                // If reCAPTCHA challenge is not completed, disable the submit button
                submitBtn.disabled = true;
            }
        }

        // Callback function to execute when reCAPTCHA challenge is completed
        function recaptchaCallback() {
            enableSubmitButton();
        }

        // Add an event listener to the reCAPTCHA widget
        grecaptcha.ready(function() {
            grecaptcha.execute('YOUR_SITE_KEY', {
                action: 'submit'
            }).then(function(token) {
                // Verify the reCAPTCHA response on your server using 'token' before enabling the submit button
                // You can make an AJAX request to your server to validate the reCAPTCHA response
                // If validation is successful, call enableSubmitButton();
            });
        });

        // Add an event listener for form submission
        document.getElementById("verificationForm").addEventListener("submit", function(event) {
            const captchaResponse = grecaptcha.getResponse(); // Get reCAPTCHA response

            if (!captchaResponse) {
                // If reCAPTCHA challenge is not completed, prevent form submission
                event.preventDefault();
                alert("Please complete the reCAPTCHA challenge.");
            }
        });
    </script> -->

    <!-- -->
</body>

</html>