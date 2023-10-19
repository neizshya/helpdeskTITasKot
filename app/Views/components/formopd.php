   <div id="opdForm">
       <!-- Nip -->
       <div class="col-12 mt-3">
           <div class="col-12 col-xxl-7">
               <div class="input-group">
                   <span class="input-group-text" id="addon-wrapping"> <img src="<?= base_url('/assets/icon/check-square.svg') ?>" alt=""></span>
                   <input type="text" class="form-control" placeholder="Cek NIP" aria-label="cek_nip" aria-describedby="addon-wrapping" id="nip_input">
                   <button type="button" class="btn btn-info rounded-end">Cek</button>&nbsp;
                   <a href="/form/pendaftaran_email" type="button" class="btn btn-outline-secondary rounded" id="refreshbutton" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-trigger="hover" title="Refresh">
                       <img src="<?= base_url('/assets/icon/arrow-clockwise.svg') ?>" alt="">
                   </a>


               </div>
           </div>
           <p class="small text-muted mt-3">Silahkan pilih NIP Pegawai anda</p>
       </div>
       <!-- organisasi -->
       <div class="col-12 mt-3">
           <div class="col-12 ">
               <div class="input-group">
                   <span class="input-group-text" id="addon-wrapping"> <img src="<?= base_url('/assets/icon/building.svg') ?>" alt=""></span>
                   <input type="text" class="form-control bg-body-secondary disabled-cursor-input" name="organisasi_input" id="organisasi_input" placeholder="Organisasi/OPD/Desa" aria-label="organisasi" aria-describedby="addon-wrapping" required readonly>
               </div>
           </div>
       </div>
       <!-- email pendaftar lain -->
       <div class="col-12 mt-3">
           <div class="col-12 ">
               <div class="input-group">
                   <span class="input-group-text" id="addon-wrapping"> <img src="<?= base_url('/assets/icon/envelope.svg') ?>" alt=""></span>
                   <input type="email" class="form-control bg-body-secondary disabled-cursor-input" name="anotherEmail_input" id="anotherEmail_input" placeholder="Email Lain Pendaftar (Gmail/Yahoo/tasikmalayakota.go.id/dll )" aria-label="anotherEmail" aria-describedby="addon-wrapping" required readonly>
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
       <!-- upload berkas -->
       <div class="col-12 mt-3">
           <div class="col-12 ">
               <label for="berkas" class="form-label fw-bold">Upload Berkas</label>
               <input class="form-control" type="file" id="berkas" accept=".png, .jpg, .jpeg" required>
               <small><b> Upload KTP (format .png, .jpg, dan .jpeg) </b> serta max 800kb </small>

           </div>
       </div>
       <!-- button -->
       <div class="col-12 mt-3">
           <div class="input-group d-flex align-items-center">
               <!-- Standard button -->
               <button class="btn btn-danger rounded me-2" type="submit" id="registrasi_ok" disabled>
                   Registrasi
               </button>
               <small id="klik_cek"> *Klik tombol Cek sebelum registrasi.</small>
           </div>
       </div>
   </div>