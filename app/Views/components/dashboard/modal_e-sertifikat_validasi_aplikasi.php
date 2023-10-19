    <div class="modal fade" id="modal_e-sertifikat_validasi" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog  modal-lg">
            <div class="modal-content ">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">
                        Validasi Tanda Tangan Elektronik
                    </h1>
                </div>
                <div class="modal-body">
                    <form action="">
                        <div class="row">
                            <div class="col-12 ">
                                <div class="row mb-3">
                                    <label for="tanggal_pengajuan_e-sertifikat_diterima" class="col-sm-12 col-form-label">Diterima pada tanggal</label>
                                    <div class="col-sm-12">
                                        <input type="date" class="form-control w-50" id="tanggal_pengajuan_e-sertifikat_diterima" placeholder="Masukan Tanggal Pengajuan diterima" value="<?php echo date('Y-m-d'); ?>" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 ">
                                <div class="row mb-3">
                                    <label for="nomor_pengajuan_e-sertifikat_diterima" class="col-sm-12 col-form-label">Nomor Pengajuan Tanda Tangan Elektronik </label>
                                    <div class="col-sm-12">
                                        <input type="text" class="form-control w-50" id="nomor_pengajuan_e-sertifikat_diterima" placeholder="Masukan nomor pengajuan tanda tangan elektronik" required>
                                    </div>
                                </div>

                            </div>


                            <div class="col-12 mb-3">
                                <div class="row mb-3">
                                    <label for="alasan_e-sertifikat_validasi" class="col-sm-12 col-form-label">Alasan</label>
                                    <div class="col-sm-12">
                                        <textarea name="alasan_e-sertifikat_validasi" class="w-100" style="min-height: 10vh;" id="alasan_e-sertifikat_validasi" required></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-success w-100">Validasi Pengajuan</button>
                            </div>
                        </div>
                    </form>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>

                    </div>
                </div>
            </div>
        </div>
    </div>