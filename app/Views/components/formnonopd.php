    <div class="d-none" id="nonOpdForm">
        <!-- organisasi -->
        <div class="col-12 mt-3">
            <div class="col-12 ">
                <div class="input-group">
                    <span class="input-group-text" id="addon-wrapping"> <img src="<?= base_url('/assets/icon/building.svg') ?>" alt=""></span>
                    <input type="text" class="form-control " name="organisasi_input" id="organisasi_input" placeholder="Organisasi/OPD/Desa" aria-label="organisasi" aria-describedby="addon-wrapping" required>
                </div>
            </div>
        </div>
        <!-- email pendaftar lain -->
        <div class="col-12 mt-3">
            <div class="col-12 ">
                <div class="input-group">
                    <span class="input-group-text" id="addon-wrapping"> <img src="<?= base_url('/assets/icon/envelope.svg') ?>" alt=""></span>
                    <input type="email" class="form-control " name="anotherEmail_input" id="anotherEmail_input" placeholder="Email Lain Pendaftar (Gmail/Yahoo/tasikmalayakota.go.id/dll )" aria-label="anotherEmail" aria-describedby="addon-wrapping" required>
                </div>
            </div>
        </div>
        <!-- email ajuan -->
        <div class="col-12 mt-3">
            <div class="col-12 ">
                <div class="input-group">
                    <span class="input-group-text" id="addon-wrapping"> <img src="<?= base_url('/assets/icon/people.svg') ?>" alt=""></span>
                    <input type="email" class="form-control " name="preferedEmail_input" id="preferedEmail_input" placeholder="Email Ajuan (username@tasikmalayakota.go.id)" aria-label="preferedEmail" aria-describedby="addon-wrapping" required>
                </div>
            </div>
        </div>
        <!-- password -->
        <div class="col-12 mt-3">
            <div class="input-group">
                <span class="input-group-text " id="addon-wrapping"> <img src="<?= base_url('/assets/icon/key.svg') ?>" alt=""></span>
                <input type="password" class="form-control" data-bs-toggle="tooltip" name="password_input_non" id="password_input_non" data-bs-placement="top" placeholder="Password" aria-label="password" aria-describedby="addon-wrapping" required>
            </div>
        </div>

        <!-- Nama lengkap -->

        <div class="col-12 mt-3">
            <div class="col-12 ">
                <div class="input-group">
                    <span class="input-group-text" id="addon-wrapping"> <img src="<?= base_url('/assets/icon/people.svg') ?>" alt=""></span>
                    <input type="text" class="form-control " name="fullName_input" id="fullName_input" placeholder="Nama Lengkap" aria-label="fullName" aria-describedby="addon-wrapping" required>
                </div>
            </div>
        </div>

        <!-- Nomor HP -->
        <div class="col-12 mt-3">
            <div class="col-12 ">
                <div class="input-group">
                    <span class="input-group-text" id="addon-wrapping"> <img src="<?= base_url('/assets/icon/phone.svg') ?>" alt=""></span>
                    <input type="text" class="form-control " name="phone_input" id="phone_input" placeholder="Nomor HP" aria-label="phone" aria-describedby="addon-wrapping" required>
                </div>
            </div>
        </div>
        <!-- upload ktp -->
        <div class="col-12 mt-3">
            <div class="col-12 ">
                <label for="berkas" class="form-label fw-bold">Upload Berkas</label>
                <input class="form-control" type="file" id="berkas" accept=".png, .jpg, .jpeg" required>
                <small><b> Upload KTP (format .png, .jpg, dan .jpeg) </b> serta max 800kb </small>

                <input class="form-control mt-2" type="file" id="surattugas" accept=".pdf" required>
                <small><b> Upload surat tugas (PDF) </b> serta max 800kb </small>
            </div>
        </div>
        <!-- button -->
        <div class="col-12 mt-3">
            <div class="input-group d-flex align-items-center">
                <!-- Standard button -->
                <button class="btn btn-danger rounded me-2" type="submit" id="registrasi_ok" disabled>
                    Registrasi
                </button>
            </div>
        </div>
    </div>