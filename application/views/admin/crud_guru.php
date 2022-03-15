<!-- Tanya Aksi -->
<div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"
    id="myModal<?= $g->nip ?>">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-dark" id="myModalLabel">Detail Guru</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="user" method="post" action="<?= base_url('admin/ubah_guru'); ?>">
                    <div class="row form-group">
                        <small class="pl-3">
                            Email <span class="text-danger">*</span>
                        </small>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" name="email" id="email" value="<?= $g->email ?>"
                                readonly>
                        </div>
                    </div>
                    <div class="row form-group">
                        <small class="pl-3">
                            NIP <span class="text-danger">*</span>
                        </small>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" name="nip" id="nip" value="<?= $g->nip ?>" readonly>
                        </div>
                    </div>
                    <div class="row form-group">
                        <small class="pl-3">
                            Nama <span class="text-danger">*</span>
                        </small>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" name="nama" id="nama" value="<?= $g->nama ?>">
                        </div>
                    </div>
                    <div class="row form-group">
                        <small class="pl-3">
                            No Telepon <span class="text-danger">*</span>
                        </small>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" name="no_telp" id="no_telp"
                                value="<?= $g->no_telp ?>">
                        </div>
                    </div>
                    <div class="row form-group">
                        <small class="pl-3">
                            Alamat <span class="text-danger">*</span>
                        </small>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" name="alamat" id="alamat" value="<?= $g->alamat ?>">
                        </div>
                    </div>
                    <div class="row form-group">
                        <small class="pl-3">
                            Jenis Kelamin <span class="text-danger">*</span>
                        </small>
                        <div class="col-sm-12">
                            <select class="custom-select" name="j_kel" id="j_kel">
                                <?php if (strcmp($g->jenis_kelamin, "Laki - Laki") == 0) : ?>
                                <option value="Laki - Laki" selected>Laki - Laki</option>
                                <?php else : ?>
                                <option value="Laki - Laki">Laki - Laki</option>
                                <?php endif; ?>
                                <?php if (strcmp($g->jenis_kelamin, "Perempuan") == 0) : ?>
                                <option value="Perempuan" selected>Perempuan</option>
                                <?php else : ?>
                                <option value="Perempuan">Perempuan</option>
                                <?php endif; ?>
                            </select>
                        </div>
                    </div>
                    <div class="row form-group col-12">
                        <div class="col-sm-6">
                            <button type="submit" name="edit"
                                class="btn btn-lg btn-block bg-success text-white position-center">Ubah
                                Data Guru</button>
                        </div>
                </form>
                <form method="post" action="<?= base_url('admin/hapus_guru'); ?>">
                    <input type="hidden" name="nip" id="nip" value="<?= $g->nip; ?>" />
                    <div class="col-sm-6">
                        <button type="submit" class="btn btn-lg btn-block btn-danger ml-4">Hapus Data
                            Guru</button>
                    </div>
            </div>
            </form>
        </div>
    </div>
</div>