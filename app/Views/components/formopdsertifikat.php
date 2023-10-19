   <div id="opdForm">
       <!-- Nip -->
       <div class="col-12 mt-3">
           <div class="col-12 col-xxl-7">
               <div class="input-group">
                   <span class="input-group-text" id="addon-wrapping"> <img src="<?= base_url('/assets/icon/check-square.svg') ?>" alt=""></span>
                   <input type="text" class="form-control" placeholder="Cek NIP" aria-label="cek_nip" aria-describedby="addon-wrapping" id="nip_input">
                   <button type="button" class="btn btn-info rounded-end">Cek</button>&nbsp;
                   <a href="/form/e-sertifikat" type="button" class="btn btn-outline-secondary rounded" id="refreshbutton" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-trigger="hover" title="Refresh">
                       <img src="<?= base_url('/assets/icon/arrow-clockwise.svg') ?>" alt="">
                   </a>


               </div>
           </div>
           <p class="small text-muted mt-3">Silahkan pilih NIP Pegawai anda</p>
       </div>
       <!-- pengajuan -->
       <div class="col-12 mt-3">
           <div class="input-group">
               <span class="input-group-text" id="addon-wrapping"> <img src="<?= base_url('/assets/icon/person-lines-fill.svg') ?>" alt=""></span>
               <select class="form-control" name="status" required>
                   <option value="" selected hidden>Pilih Status</option>
                   <option value="1">Pengajuan Baru</option>
                   <option value="2">Perpanjangan</option>
               </select>
           </div>
       </div>

       <!-- Nama lengkap -->

       <div class="col-12 mt-3">
           <div class="col-12 ">
               <div class="input-group">
                   <span class="input-group-text" id="addon-wrapping"> <img src="<?= base_url('/assets/icon/people.svg') ?>" alt=""></span>
                   <input type="text" class="form-control bg-body-secondary disabled-cursor-input" name="fullName_input" id="fullName_input" placeholder="Nama Lengkap" aria-label="fullName" aria-describedby="addon-wrapping" required readonly>
               </div>
           </div>
       </div>

       <!-- Golongan -->
       <div class="col-12 mt-3">
           <div class="col-12 ">
               <div class="input-group">
                   <span class="input-group-text" id="addon-wrapping"> <img src="<?= base_url('/assets/icon/collect.svg') ?>" width="17vw" alt=""></span>
                   <input type="text" class="form-control bg-body-secondary disabled-cursor-input" name="golongan" id="golongan_input" placeholder="Pangkat / Gol. Ruang" aria-label="organisasi" aria-describedby="addon-wrapping" required readonly>
               </div>
           </div>
       </div>

       <!-- Jabatan -->
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
               <div class="input-group" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-trigger="hover" title="Instansi">
                   <span class="input-group-text" id="addon-wrapping"> <img src="<?= base_url('/assets/icon/agency.svg') ?>" width="17vw" alt=""></span>
                   <input type="text" class="form-control bg-body-secondary disabled-cursor-input" name="instansi_input" id="instansi_input" placeholder="Pemerintah Kota Tasikmalaya" value="Pemerintah Kota Tasikmalaya" aria-label="fullName" aria-describedby="addon-wrapping" required readonly>
               </div>
           </div>
       </div>
       <!-- Jabatan -->
       <div class="col-12 mt-3">
           <div class="col-12 ">
               <div class="input-group">
                   <span class="input-group-text" id="addon-wrapping"> <img src="<?= base_url('/assets/icon/briefcase-solid.svg') ?>" width="17vw" alt=""></span>
                   <input type="text" class="form-control " name="unit_input" id="unit_input" placeholder="Unit Kerja" aria-label="preferedEmail" aria-describedby="addon-wrapping" required>
               </div>
           </div>
       </div>

       <!-- Nomor HP -->
       <div class="col-12 mt-3">
           <div class="col-12">
               <div class="input-group">
                   <span class="input-group-text" id="addon-wrapping"> <img src="<?= base_url('/assets/icon/phone.svg') ?>" alt=""></span>
                   <input type="text" class="form-control bg-body-secondary disabled-cursor-input" name="noHP_input" id="noHP_input" placeholder="Nomor Telpon" value="" aria-label="fullName" aria-describedby="addon-wrapping" required readonly>
               </div>
           </div>
       </div>
       <!-- upload berkas -->
       <div class="col-12 mt-3">
           <div class="col-12">
               <div class="input-group">
                   <span class="input-group-text" id="addon-wrapping"> <img src="<?= base_url('/assets/icon/id-card-solid.svg') ?>" width="17vw" alt=""></span>
                   <input type="file" class="form-control" id="ktp" accept=".png, .jpg, .jpeg">
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
               <button class="btn btn-danger rounded me-2" type="submit" id="registrasi_ok" disabled>
                   Registrasi
               </button>
               <small id="klik_cek"> *Klik tombol Cek sebelum registrasi.</small>
           </div>
       </div>




   </div>