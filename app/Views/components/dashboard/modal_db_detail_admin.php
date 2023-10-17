    <div class="modal fade" id="modal_db_detail_admin" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog  modal-lg">
            <div class="modal-content ">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">
                        Detail Backup | Restore DB
                    </h1>
                </div>
                <div class="modal-body">
                    <div class="d-flex row justify-content-center align-items-center">
                        <div class="col-12 text-center">

                            <p class="text-uppercase fw-semibold">Status Backup dan Restore</p>
                        </div>
                        <div class="col-12">
                            <table class="table table-bordered table-striped text-center">
                                <thead>
                                    <tr>
                                        <th>Proses</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $processes = ['Permohonan', 'Proses', 'Selesai'];
                                    foreach ($processes as $process) : ?>
                                        <tr>
                                            <td><?= $process ?></td>
                                            <td>
                                                <button class="btn btn-secondary btn-sm status-button" data-process="false" data-process-name="<?= $process ?>">Selesai</button>
                                                <p class="d-none status-text" data-process="false" data-process-name="<?= $process ?>">Proses Selesai</p>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>


                                </tbody>
                            </table>
                        </div>

                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
                </div>
            </div>
        </div>
    </div>