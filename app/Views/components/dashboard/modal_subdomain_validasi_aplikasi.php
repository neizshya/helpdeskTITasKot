    <div class="modal fade" id="modal_subdomain_validasi" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog  modal-lg">
            <div class="modal-content ">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">
                        Validasi Pembuatan Hosting & Subdomain
                    </h1>
                </div>
                <div class="modal-body">
                    <form action="">
                        <div class="row">
                            <div class="col-12 ">
                                <div class="row mb-3">
                                    <label for="tanggal_pengajuan_subdomain_diterima" class="col-sm-12 col-form-label">Diterima pada tanggal</label>
                                    <div class="col-sm-12">
                                        <input type="date" class="form-control w-50" id="tanggal_pengajuan_subdomain_diterima" placeholder="Masukan Tanggal Pengajuan diterima" value="<?php echo date('Y-m-d'); ?>" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 ">
                                <div class="row mb-3">
                                    <label for="nomor_pengajuan_subdomain_diterima" class="col-sm-12 col-form-label">Nomor Pengajuan Pembuatan Hosting & Subdomain </label>
                                    <div class="col-sm-12">
                                        <input type="text" class="form-control w-50" id="nomor_pengajuan_subdomain_diterima" placeholder="Masukan nomor pengajuan pembuatan hosting & domain" required>
                                    </div>
                                </div>

                            </div>
                            <div class="col-12 mb-3">
                                <fieldset class="row mb-3">
                                    <legend class="col-form-label col-sm-2 pt-0">Lokasi Server</legend>
                                    <div class="col-sm-10">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="server" id="server_opd" value="server_opd" checked>
                                            <label class="form-check-label" for="server_opd">
                                                Server OPD
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="server" id="server_kominfo" value="server_kominfo">
                                            <label class="form-check-label" for="server_kominfo">
                                                Server Kominfo
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="server" id="hosting_luar" value="hosting_luar">
                                            <label class="form-check-label" for="hosting_luar">
                                                Hosting diluar (IP / ns Hosting)
                                            </label>
                                        </div>
                                        <textarea class="w-100 d-none" name="hosting_luar" id="hosting_luar_text_area"></textarea>
                                    </div>

                            </div>
                            </fieldset>


                            <div class="col-12 mb-3">
                                <div class="row mb-3">
                                    <label for="alasan_subdomain_validasi" class="col-sm-12 col-form-label">Alasan</label>
                                    <div class="col-sm-12">
                                        <textarea name="alasan_subdomain_validasi" class="w-100" style="min-height: 10vh;" id="alasan_subdomain_validasi" required></textarea>
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