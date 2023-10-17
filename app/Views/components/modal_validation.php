<div class="modal fade" id="modal_Validation" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered" role="document">
        <div class="modal-content">
            <!-- login -->
            <div id="loginSection" class="d-block">
                <div class="modal-header">
                    <h5 class="modal-title" id="loginModalLabel">Masuk</h5>
                </div>
                <div class="modal-body">

                    <form id="loginForm" action="">
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="email" placeholder="username@tasikmalayakota.go.id" required>
                            <label for="floatingInput">Email</label>
                        </div>
                        <div class="form-floating mb-3 input-group">
                            <input type="password" class="form-control" id="password" placeholder="Password" required>
                            <label for="floatingPassword">Kata Sandi</label>
                            <button class="btn btn-light" type="button" id="button-addon1"><img id="icon_pass" src="<?= base_url('/assets/icon/eye.svg') ?>" alt=""></button>
                            <!--  <img src="<?= base_url('/assets/icon/eye.svg') ?>" alt="">-->
                        </div>
                        <div class="col-12">
                            for captcha
                        </div>
                        <div class="col-12 my-3">
                            <button class="btn rounded-3 btn-success w-100">Masuk</button>

                        </div>
                    </form>
                    <div class="col-12 d-flex justify-content-center">
                        <p>Belum punya akun? <a href="#" class="text-decoration-none" id="showRegisterLink">Daftar</a> | Lupa kata sandi? <a href="#" class="text-decoration-none" id="showForgotPasswordLink">Lupa Kata Sandi</a></p>
                    </div>
                </div>
            </div>
            <!--  -->
            <!-- Register -->
            <div id="registerSection" class="d-none">
                <div class="modal-header">
                    <h5 class="modal-title" id="registerModalLabel">Pendaftaran Helpdesk</h5>
                </div>
                <div class="modal-body">

                    <form id="registerForm" action="">
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="email" placeholder="username@tasikmalayakota.go.id" required>
                            <label for="floatingInput">Email</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="password" class="form-control" id="password" placeholder="Password" required>
                            <label for="password">Kata Sandi</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="nip" placeholder="NIP" required>
                            <label for="nip">NIP (tanpa spasi)</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="no_hp" placeholder="No. Telepon" required>
                            <label for="no_hp">No. Telepon</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="nama_opd" placeholder="Nama OPD" required>
                            <label for="nama_opd">Nama OPD</label>
                        </div>
                        <div class="mb-3">
                            For human challenge (captcha)
                        </div>
                        <div class="col-12 my-3">
                            <button class="btn btn-success w-100">Daftar</button>

                        </div>
                    </form>
                    <div class="col-12 d-flex justify-content-center">
                        <p>Sudah punya akun? <a href="#" class="text-decoration-none" id="showLoginLink">Masuk</a> </p>
                    </div>
                    <div class="col-12 d-flex justify-content-center">
                        <p>Belum punya email tasikmalayakota.go.id? <a href="/form/pendaftaran_email" class="text-decoration-none">Daftar</a></p>
                    </div>
                </div>
            </div>
            <!--  -->
            <!-- Forgot Password -->
            <div id="forgotPasswordSection" class="d-none">
                <div class="modal-header">
                    <h5 class="modal-title" id="ForgotModalLabel">Lupa Kata Sandi</h5>
                </div>
                <div class="modal-body">

                    <form id="forgotPasswordForm" action="">
                    </form>
                    <div class="col-12 d-flex justify-content-center">
                        <p>Sudah punya akun? <a href="#" id="showLoginLink2">Masuk</a> | Belum punya akun? <a href="#" id="showRegisterLink2">Daftar</a></p>
                    </div>
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
            </div>
        </div>
    </div>
</div>