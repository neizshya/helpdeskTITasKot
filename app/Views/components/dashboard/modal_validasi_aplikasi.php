    <div class="modal fade" id="modal_validasi" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog  modal-lg">
            <div class="modal-content ">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">
                        Validasi Pengajuan
                    </h1>
                </div>
                <div class="modal-body">
                    <form action="">
                        <div class="row">
                            <div class="col-12 ">
                                <div class="row mb-3">
                                    <label for="tanggal_pengajuan_diterima" class="col-sm-4 col-form-label">Diterima pada tanggal</label>
                                    <div class="col-sm-8">
                                        <input type="date" class="form-control w-50" id="tanggal_pengajuan_diterima" placeholder="Masukan Tanggal Pengajuan diterima" value="<?php echo date('Y-m-d'); ?>" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 ">
                                <div class="row mb-3">
                                    <label for="nomor_pengajuan_diterima" class="col-sm-2 col-form-label">Nomor Pengajuan Pengembangan</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control w-50" id="nomor_pengajuan_diterima" placeholder="Masukan nomor pengajuan pengembangan" required>
                                    </div>
                                </div>

                            </div>
                            <div class="col-12 mb-3">
                                <fieldset class="row mb-3">
                                    <legend class="col-form-label col-sm-2 pt-0">Pengerjaan</legend>
                                    <div class="col-sm-10">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="pengerjaan" id="pengerjaan_sendiri" value="sendiri" checked required>
                                            <label class="form-check-label" for="pengerjaan_sendiri">
                                                Sendiri
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="pengerjaan" id="pengerjaan_luar" value="pihak_luar">
                                            <label class="form-check-label" for="pengerjaan_luar">
                                                Pihak Luar
                                            </label>
                                        </div>

                                    </div>
                                </fieldset>


                            </div>
                            <div class="col-12 mb-3">
                                <div class="row mb-3">
                                    <label for="alasan_validasi" class="col-sm-12 col-form-label">Alasan</label>
                                    <div class="col-sm-12">
                                        <textarea name="alasan_validasi" class="w-100" style="min-height: 10vh;" id="alasan_validasi" required></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-success w-100">Validasi Pengajuan</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>

                </div>
            </div>
        </div>
    </div>