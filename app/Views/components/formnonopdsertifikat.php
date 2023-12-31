    <div class="d-none" id="nonOpdForm">



        <!-- Nik -->
        <div class="col-12 mt-3">
            <div class="col-12 ">
                <div class="input-group ">
                    <span class="input-group-text" id="addon-wrapping"> <img src="<?= base_url('/assets/icon/check-square.svg') ?>" alt=""></span>
                    <input type="text" class="form-control" placeholder="Masukan NIK" aria-label="cek_nik" aria-describedby="addon-wrapping" id="nik_input" required>
                </div>
            </div>
        </div>
        <!-- pengajuan -->
        <div class="col-12 mt-3">
            <div class="col-12 ">
                <div class="input-group">
                    <span class="input-group-text" id="addon-wrapping"> <img src="<?= base_url('/assets/icon/person-lines-fill.svg') ?>" alt=""></span>
                    <select class="form-control" name="status" required>
                        <option value="" selected hidden>Pilih Status</option>
                        <option value="1">Pengajuan Baru</option>
                        <option value="2">Perpanjangan</option>
                    </select>
                </div>
            </div>
        </div>
        <!-- nama lengkap -->
        <div class="col-12 mt-3">
            <div class="col-12 ">
                <div class="input-group">
                    <span class="input-group-text" id="addon-wrapping"> <img src="<?= base_url('/assets/icon/people.svg') ?>" alt=""></span>
                    <input type="text" class="form-control    " name="fullName_input" id="fullName_input" placeholder="Nama Lengkap" aria-label="fullName" aria-describedby="addon-wrapping" required>
                </div>
            </div>
        </div>


        <!-- jabatan -->

        <div class="col-12 mt-3">
            <div class="col-12 ">
                <div class="input-group">
                    <span class="input-group-text" id="addon-wrapping"> <img src="<?= base_url('/assets/icon/person-vcard.svg') ?>" alt=""></span>
                    <input type="text" class="form-control " name="jabatan_input" id="jabatan_input" placeholder="Jabatan" aria-label="jabatan" aria-describedby="addon-wrapping" required>
                </div>
            </div>
        </div>
        <!-- instansi -->

        <div class="col-12 mt-3">
            <div class="col-12">
                <div class="input-group">
                    <span class="input-group-text" id="addon-wrapping"> <img src="<?= base_url('/assets/icon/agency.svg') ?>" width="17vw" alt=""></span>
                    <input type="text" class="form-control " name="instansi_input" id="instansi_input" placeholder="Instansi" value="Pemerintah Kota Tasikmalaya" aria-label="fullName" aria-describedby="addon-wrapping">
                </div>
            </div>
        </div>
        <!-- unit kerja-->
        <div class="col-12 mt-3">
            <div class="col-12 ">
                <div class="input-group">
                    <span class="input-group-text" id="addon-wrapping"> <img src="<?= base_url('/assets/icon/briefcase-solid.svg') ?>" width="17vw" alt=""></span>
                    <input type="text" class="form-control " name="unit_input" id="unit_input" placeholder="Unit Kerja" aria-label="unit kerja" aria-describedby="addon-wrapping" required>
                </div>
            </div>
        </div>
        <!-- Nomor HP -->
        <div class="col-12 mt-3">
            <div class="col-12">
                <div class="input-group">
                    <span class="input-group-text" id="addon-wrapping"> <img src="<?= base_url('/assets/icon/phone.svg') ?>" alt=""></span>
                    <input type="text" class="form-control    " name="noHP_input" id="noHP_input" placeholder="Nomor Telpon" value="" aria-label="fullName" aria-describedby="addon-wrapping" required>
                </div>
            </div>
        </div>
        <!-- email -->
        <div class="col-12 mt-3">
            <div class="col-12 ">
                <div class="input-group">
                    <span class="input-group-text" id="addon-wrapping"> <img src="<?= base_url('/assets/icon/envelope.svg') ?>" alt=""></span>

                    <input type="email" class="form-control" name="email" id="email_input" placeholder="Email berakhiran tasikamalayakota.go.id" aria-label="email" aria-describedby="addon-wrapping" required>
                </div>
            </div>
        </div>
        <!-- upload berkas -->
        <div class="col-12 mt-3">
            <div class="col-12">
                <div class="input-group">
                    <span class="input-group-text" id="addon-wrapping"> <img src="<?= base_url('/assets/icon/id-card-solid.svg') ?>" width="17vw" alt=""></span>
                    <input type="file" class="form-control" id="nonktp" accept=".png, .jpg, .jpeg">
                </div>
                <small>*) Upload Identitas KTP (format png, jpg, jpeg). Max File Size : 800Kb </small>
            </div>
        </div>
        <div class="col-12 mt-3">
            <p class="small fw-bold">Bermaksud untuk mengajukan permohonan penerbitan Tanda Tangan Elektronik. </p>
        </div>
        <div class="col-12 mt-3">
            <p class="small">
                Dengan ini saya menyatakan bahwa :
            </p>
            <ol class="small fw-bold">
                <li class="">
                    <p>Data yang saya isikan di atas adalah benar dan dapat dipertanggungjawabkan, jika di kemudian hari ditemukan bahwa data tersebut adalah tidak benar, maka saya bersedia dikenakan sanksi administrasi dan/atau pidana sesuai dengan ketentuan peraturan perundang-undangan; dan</p>
                </li>
                <li>
                    <p>Bersedia melaksanakan kewajiban Pemilik Tanda Tangan Elektronik.</p>
                </li>
            </ol>
        </div>
        <!-- button -->
        <div class="col-12 mt-3">
            <div class="input-group d-flex align-items-center">
                <!-- Standard button -->
                <button class="btn btn-danger rounded me-2" type="submit" id="registrasi_ok">
                    Registrasi
                </button>
            </div>
        </div>
    </div>