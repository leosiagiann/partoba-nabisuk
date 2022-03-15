<style type="text/css">
#change_profil:disabled {
    cursor: not-allowed;
    background-color: green !important;
}

#change_pw:disabled {
    cursor: not-allowed;
    background-color: green !important;
}
</style>
<div class="main-content">
    <div class="row">
        <div class="col-md-7">
            <h4 class="alert alert-primary">Data Diri</h4>
            <p class="text-center">
                <img src="<?= base_url('assets/upload/admin/thumbs/' . $foto);
                            ?>" style="max-width: 150px; height: auto;" class="img img-circle img-thumbnail">
            </p>
            <form method="post" enctype="multipart/form-data" action="<?= base_url('admin/profile') ?>">
                <div class="form-group row">
                    <label class="col-sm-3 control-label text-right">Email <span class="text-danger">*</span></label>
                    <div class="col-sm-9">
                        <input type="email" name="email" id="email" class="form-control" placeholder="Email"
                            value="<?= $email ?>" readonly disabled>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 control-label text-right">Nama Admin <span
                            class="text-danger">*</span></label>
                    <div class="col-sm-9">
                        <input type="text" name="nama" id="nama" class="form-control" placeholder="Nama Pengguna"
                            value="<?= $nama ?>" onkeyup="s_()">
                        <input type="hidden" name="nama_" id="nama_" value="<?= $nama ?>" onkeyup="s_()">
                        <?= form_error('nama', '<small class="text-danger">', '</small>') ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 control-label text-right">Ganti Foto <span
                            class="text-danger">*</span></label>
                    <div class="col-sm-9">
                        <input type="file" name="foto" id="foto" class="form-control" onchange="ss_()">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 control-label text-right"></label>
                    <div class="col-sm-9">
                        <button type="submit" name="submit" class="btn bg-success btn-lg text-light" id="change_profil"
                            disabled><i class="fa fa-save"></i>
                            Update
                        </button>
                        <button type="reset" name="reset" class="btn btn-danger btn-lg"><i class="fa fa-cut"></i>
                            Reset
                        </button>
                    </div>
                </div>
            </form>
            <?= $this->session->userdata('elseya') ?>
        </div>
        <div class="col-md-5">
            <h4 class="alert alert-primary">Password</h4>
            <form method="post" action="<?= base_url('admin/gantipassword') ?>">
                <div class="form-group row">
                    <label class="col-sm-4 control-label text-right">Password lama<span
                            class="text-danger">*</span></label>
                    <div class="col-sm-8">
                        <input type="password" name="password3" id="password3" class="form-control"
                            placeholder="Password Lama" onkeyup="s()">
                        <?= form_error('password3', '<small class="text-danger">', '</small>') ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-4 control-label text-right">Password baru<span
                            class="text-danger">*</span></label>
                    <div class="col-sm-8">
                        <input type="password" name="password1" id="password1" class="form-control"
                            placeholder="Password baru" onkeyup="s()">
                        <?= form_error('password1', '<small class="text-danger">', '</small>') ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-4 control-label text-right"></label>
                    <div class="col-sm-8">
                        <button type="submit" name="submit" class="btn bg-success btn-lg text-light" id="change_pw"
                            disabled><i class="fa fa-save"></i>
                            Update
                        </button>
                        <button type="reset" name="reset" class="btn btn-danger btn-lg"><i class="fa fa-cut"></i>
                            Reset
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<script src="<?= base_url('assets/js/self/pf-1.js'); ?>"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php
if ($this->session->flashdata('edit-password-admin-failed')) {
?>
<script>
Swal.fire({
    icon: 'error',
    title: 'Ups... Gagal',
    text: 'Password Lama Anda Tidak Sesuai'
});
</script>
<?php
}
if ($this->session->flashdata('edit-password-admin')) {
?>
<script>
Swal.fire({
    icon: 'success',
    title: 'Yeay... Berhasil',
    text: 'Password Lama Anda Sudah Diubah'
});
</script>
<?php
}
if ($this->session->flashdata('edit-profil-admin')) {
?>
<script>
Swal.fire({
    icon: 'success',
    title: 'Yeay... Berhasil',
    text: 'Data Diri Anda Sudah Diubah'
});
</script>
<?php
}
?>