    <div class="modal fade" id="form_modal_tamu" tabindex="-1" aria-labelledby="form_modal_tamuLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Masukan Data Diri</h1>
                </div>
                <div class="modal-body">
                    <!--  -->
                    <div class="col-12" id="cameraSection">
                        <video class="w-100" id="cameraFeed" autoplay playsinline></video>
                    </div>
                    <!--  -->
                    <form>
                        <div class="form-group">
                            <label class="control-label mb-10" for="nama">Nama</label>
                            <input type="text" class="form-control" name="input_nama" id="input_nama" placeholder="Masukkan Nama" required>
                        </div>
                        <div class="form-group">
                            <label class="control-label mb-10" for="nama">NIK</label>
                            <input type="text" class="form-control" name="input_nik" id="input_nik" placeholder="Masukkan NIK" required>
                        </div>
                        <div class="form-group">
                            <label class="control-label mb-10" for="nominal">OPD/Instansi</label>
                            <input type="text" class="form-control" name="input_opd" id="input_opd" placeholder="Masukkan OPD/Instansi" required>
                        </div>
                        <div class="form-group">
                            <label class="control-label mb-10" for="jenis_kelamin">Jenis Server</label>
                            <select class="form-control" name="input_jeniskelamin" id="input_jeniskelamin" required>
                                <option value="Kominfo">Kominfo</option>
                                <option value="BKPP">BKPP</option>

                            </select>
                        </div>
                        <div class="form-group">
                            <label class="control-label mb-10" for="alamat">Keterangan</label>
                            <textarea name="input_alamat" class="form-control" id="input_alamat" cols="3" rows="3"></textarea>
                        </div>

                        <input type="text" class="visually-hidden" name="input_waktu" id="input_waktu">
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>