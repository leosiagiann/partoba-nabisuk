<!-- Detail Kelas -->
<div class="modal fade" id="confir<?= $k->id ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-dark" id="myModalLabel">Konfirmasi Kelas</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <?php foreach ($guru as $g) {
                        if ($g->nip == $k->nip) { ?>
                    <div class="card bg-success">
                        <div class="row">
                            <div class="col-sm-5">
                                <img class="p-3" src="<?= base_url('assets/upload/guru/thumbs/' . $g->foto);
                                                                ?>" style="width: 160px; height: 200px;"
                                    class="img img-thumbnail">
                            </div>
                            <div class="col-sm-6 mt-5 mr-3">
                                <h5 class="text-white"><?= $g->nama; ?></h5>
                                <small class="text-white" style="position:relative; top:-10px;">NIP :
                                    <?= $g->nip ?></small>
                                <h5 class="text-white"><?= $g->alamat; ?></h5>
                            </div>
                        </div>
                    </div>
                    <?php }
                    } ?>
                    <form>
                        <div class="row form-group">
                            <small class="pl-3">
                                Nama Kelas <span class="text-danger">*</span>
                            </small>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" name="nama" id="nama" value="<?= $k->nama ?>"
                                    readonly>
                            </div>
                        </div>
                        <div class="row form-group">
                            <small class="pl-3">
                                Mata Pelajaran <span class="text-danger">*</span>
                            </small>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" name="mapel" id="mapel"
                                    value="<?= $k->mata_pelajaran ?>" readonly>
                            </div>
                        </div>
                        <div class="row form-group">
                            <small class="pl-3">
                                Kelas <span class="text-danger">*</span>
                            </small>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" name="kelas" id="kelas" value="<?= $k->kelas ?>"
                                    readonly>
                            </div>
                        </div>
                        <div class="row form-group">
                            <small class="pl-3">
                                Jadwal Kelas <span class="text-danger">*</span>
                            </small>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" name="kelas" id="kelas"
                                    value="<?= $k->jadwal ?>" readonly>
                            </div>
                        </div>
                    </form>
                    <div class="row form-group">
                        <div class="col-sm-6">
                            <form method="post" action="<?= base_url('admin/tolak_kelas') ?>">
                                <input type="hidden" name="id" id="id" value="<?= $k->id ?>">
                                <?php foreach ($guru as $g) {
                                    if ($g->nip == $k->nip) {
                                ?>
                                <input type="hidden" name="email" id="email" value="<?= $g->email ?>">
                                <?php }
                                } ?>
                                <input type="hidden" name="nama" id="nama" value="<?= $k->nama ?>">
                                <a href="<?= base_url('admin/tolak_kelas') ?>" style="text-decoration: none"><button
                                        class="btn btn-large btn-block bg-danger text-white">Tolak</button></a>
                            </form>
                        </div>
                        <div class="col-sm-6">
                            <form method="post" action="<?= base_url('admin/terima_kelas') ?>">
                                <input type="hidden" name="id" id="id" value="<?= $k->id ?>">
                                <?php foreach ($guru as $g) {
                                    if ($g->nip == $k->nip) {
                                ?>
                                <input type="hidden" name="email" id="email" value="<?= $g->email ?>">
                                <?php }
                                } ?>
                                <input type="hidden" name="nama" id="nama" value="<?= $k->nama ?>">
                                <a href="<?= base_url('admin/terima_kelas') ?>" style="text-decoration: none"><button
                                        class="btn btn-large btn-block bg-success text-white">Terima</button></a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>