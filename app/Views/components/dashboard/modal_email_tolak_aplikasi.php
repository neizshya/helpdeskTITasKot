    <div class="modal fade" id="modal_email_tolak" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog  modal-lg">
            <div class="modal-content ">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">
                        Tolak Email Registration
                    </h1>
                </div>
                <div class="modal-body">
                    <form action="">
                        <div class="row">
                            <div class="col-12 ">
                                <div class="row mb-3">
                                    <label for="tanggal_pengajuan_email_ditolak" class="col-sm-4 col-form-label">Ditolak pada tanggal</label>
                                    <div class="col-sm-8">
                                        <input type="date" class="form-control w-50" id="tanggal_pengajuan_email_ditolak" placeholder="Masukan Tanggal Pengajuan ditolak" value="<?php echo date('Y-m-d'); ?>" required>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 mb-3">
                                <div class="row mb-3">
                                    <label for="alasan_email_ditolak" class="col-sm-12 col-form-label">Alasan</label>
                                    <div class="col-sm-12">
                                        <textarea name="alasan_email_ditolak" class="w-100" style="min-height: 10vh;" id="alasan_email_ditolak" required></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <button type="submit" class="btn btn-danger w-100">Tolak Pengajuan</button>
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