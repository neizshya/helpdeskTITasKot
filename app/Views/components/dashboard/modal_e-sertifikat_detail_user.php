    <div class="modal fade" id="modal_e-sertifikat_detail_user" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content ">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">
                        Detail Tanda Tangan Elektronik
                    </h1>
                </div>
                <div class="modal-body">
                    <div class="d-flex justify-content-center align-items-center">
                        <h2 class="text-uppercase">Status Tanda Tangan Elektronik</h2>
                    </div>
                    <div class="container ">
                        <div class="row">
                            <div class="col-12">
                                <div class="timeline">
                                    <?php foreach ($timeline as $event) : ?>
                                        <div class="timeline-event <?php echo $event['status'] ? 'event-green' : 'event-gray'; ?>">
                                            <div class="event-date"><?php echo $event['date']; ?></div>
                                            <div class="event-content"><?php echo $event['event']; ?></div>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>

                </div>
            </div>
        </div>
    </div>