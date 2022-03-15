<div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"
    id="myModal<?= $g->nip ?>">
    <div class="modal-dialog" role="document">
        <div class="modal-content">

            <!-- modal header -->
            <div class="modal-header">
                <h5 class="modal-title text-dark" id="myModalLabel">Detail Guru</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <!-- modal header -->

            <div class="modal-body">

                <!-- card info guru -->
                <div class="card bg-success">
                    <div class="row">
                        <div class="col-sm-5">
                            <img class="p-3" src="<?= base_url('assets/upload/guru/thumbs/' . $g->foto);
                                                    ?>" style="width: 160px; height: 180px;" class="img img-thumbnail">
                        </div>
                        <div class="col-sm-6 mt-5 mr-3">
                            <h5 class="text-white"><?= $g->nama; ?></h5>
                            <small class="text-white" style="position:relative; top:-10px;">NIP :
                                <?= $g->nip ?></small>
                            <h5 class="text-white"><?= $g->alamat; ?></h5>
                        </div>
                    </div>
                </div>
                <!-- card info guru -->

                <form class="user" method="post" action="<?= base_url('admin/ubah_guru'); ?>">

                    <!-- Form Email -->
                    <div class="row form-group">
                        <small class="pl-3">
                            Email Guru <span class="text-danger">*</span>
                        </small>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" name="email" id="email" value="<?= $g->email ?>"
                                readonly>
                        </div>
                    </div>
                    <!-- Form Email -->

                    <!-- Form NIP -->
                    <div class="row form-group">
                        <small class="pl-3">
                            NIP Guru <span class="text-danger">*</span>
                        </small>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" name="nip" id="nip" value="<?= $g->nip ?>" readonly>
                        </div>
                    </div>
                    <!-- Form NIP -->

                    <!-- Form Nama -->
                    <div class="row form-group">
                        <small class="pl-3">
                            Nama Guru <span class="text-danger">*</span>
                        </small>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" name="nama" id="nama" value="<?= $g->nama ?>"
                                readonly>
                        </div>
                    </div>
                    <!-- Form Nama -->

                    <!-- Form Nomor Telepon -->
                    <div class="row form-group">
                        <small class="pl-3">
                            No Telepon Guru <span class="text-danger">*</span>
                        </small>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" name="no_telp" id="no_telp"
                                value="<?= $g->no_telp ?>" readonly>
                        </div>
                    </div>
                    <!-- Form Nomor Telepon -->

                    <!-- Form Alamat -->
                    <div class="row form-group">
                        <small class="pl-3">
                            Alamat Guru <span class="text-danger">*</span>
                        </small>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" name="alamat" id="alamat" value="<?= $g->alamat ?>"
                                readonly>
                        </div>
                    </div>
                    <!-- Form Alamat -->

                    <!-- Form Jenis Kelamin -->
                    <div class="row form-group">
                        <small class="pl-3">
                            Jenis Kelamin Guru <span class="text-danger">*</span>
                        </small>
                        <div class="col-sm-12">
                            <select class="custom-select" name="j_kel" id="j_kel">
                                <?php if (strcmp($g->jenis_kelamin, "Laki - Laki") == 0) : ?>
                                <option value="Laki - Laki" selected>Laki - Laki</option>
                                <?php else : ?>
                                <option value="Perempuan">Perempuan</option>
                                <?php endif; ?>
                            </select>
                        </div>
                    </div>
                    <!-- Form Jenis Kelamin -->

                </form>
            </div>
        </div>
    </div>
</div>