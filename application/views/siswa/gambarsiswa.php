<!-- Bukti Pembayaran -->
<div class="modal fade" id="fotosiswa<?= $as->id ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-dark" id="myModalLabel">Foto Profil <?= $as->nama ?></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <div class="container-fluid">
                    <div class="card mb-2">
                        <div class="card-header">
                            <figure class="course-thumbnail-go">
                                <center>
                                    <img src="<?= base_url('assets/upload/siswa/') . $as->foto; ?>" alt="">
                                </center>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Bukti Pembayaran  -->