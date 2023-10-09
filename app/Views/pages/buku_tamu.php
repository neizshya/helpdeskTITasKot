<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buku Tamu | Helpdesk Kominfo Kota Tasikmalaya</title>
    <link rel="shortcut icon" type="image/png" href="/assets/logo_tasik.svg">
    <link rel="stylesheet" href="<?= base_url('bs/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('bs/css/style.css') ?>">
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
</head>


<body class="min-vh-100" style="background-color: #eef5f9;">

    <?php echo $this->include("layout/header.php") ?>

    <?= view('components/modal_validation') ?>

    <?= view('components/modal_faq') ?>
    <?= view('components/modal_sop') ?>
    <!-- 
        -->
    <?= view('components/form_modal_tamu') ?>


    <div class="d-flex justify-content-center bg-white container mt-3 rounded-5 p-3 overflow-hidden" style="min-height: 82vh; overflow-x:hidden;">
        <div class="row d-flex justify-content-center">

            <div class="col-12 text-center">
                <p class="text-info fs-3">Maintenance Server | Data Center Kota Tasikmalaya</p>
            </div>
            <div class="col-12 col-lg-6 d-flex justify-content-center">
                <lottie-player data-bs-toggle="modal" data-bs-target="#form_modal_tamu" class=" btn" src="<?= base_url('assets/list_animation.json') ?>" background="transparent" speed="1" loop autoplay></lottie-player>
            </div>
            <div class="col-12 text-center">

                <p class=" fw-semibold fs-4">Klik animasi untuk menambahkan data</p>
            </div>
        </div>
    </div>

    <?php echo $this->include("layout/footer.php") ?>
    <!-- SCRIPTS -->

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="<?= base_url('bs/js/jquery.min.js') ?>"></script>
    <script src="<?= base_url('bs/js/bootstrap.min.js') ?>"></script>
    <script>
        $(document).ready(function() {
            // Function to format the current date and time as YYYY-MM-DD HH:MM:SS
            function getCurrentDateTime() {
                const now = new Date();
                const year = now.getFullYear();
                const month = String(now.getMonth() + 1).padStart(2, '0');
                const day = String(now.getDate()).padStart(2, '0');
                const hours = String(now.getHours()).padStart(2, '0');
                const minutes = String(now.getMinutes()).padStart(2, '0');
                const seconds = String(now.getSeconds()).padStart(2, '0');
                return `${year}-${month}-${day} ${hours}:${minutes}:${seconds}`;
            }

            // Set the value of the input_waktu field with the current date and time
            const inputWaktu = document.getElementById('input_waktu');
            inputWaktu.value = getCurrentDateTime();
        });
    </script>
    <script>
        // Function to start the camera and display the video feed
        async function startCamera() {
            try {
                const cameraFeed = document.getElementById('cameraFeed');
                const stream = await navigator.mediaDevices.getUserMedia({
                    video: true
                });
                cameraFeed.srcObject = stream;
            } catch (error) {
                console.error('Error accessing the camera:', error);
            }
        }

        // Call the startCamera function when the modal is shown
        $('#form_modal_tamu').on('shown.bs.modal', function() {
            startCamera();
        });

        // Stop the camera when the modal is closed
        $('#form_modal_tamu').on('hidden.bs.modal', function() {
            const cameraFeed = document.getElementById('cameraFeed');
            const stream = cameraFeed.srcObject;
            if (stream) {
                const tracks = stream.getTracks();
                tracks.forEach(track => track.stop());
            }
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