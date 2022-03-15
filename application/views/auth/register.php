<div id="app">
    <section class="section">
        <div class="d-flex flex-wrap align-items-stretch">
            <div class="col-lg-4 col-md-6 col-12 order-lg-1 min-vh-100 order-2 bg-white">
                <div class="p-4 m-3">
                    <div class="row justify-content-center">
                        <a href="<?= base_url('auth/index') ?>">
                            <img src="<?= base_url('assets/') ?>/img/logo/logo_login.png" alt="logo" width="250">
                        </a>
                    </div>
                    <div class="row justify-content-center mb-3" style="margin-top: -20px">
                        <h4 class="text-dark font-weight-normal">Selamat datang di </br><span
                                class="font-weight-bold">Partoba Nabisuk 👋🏻</span>
                        </h4>
                    </div>
                    <form class="user" method="post" action="<?= base_url('auth/register'); ?>">
                        <div class="form-group">
                            <input type="text" class="form-control form-control-user" id="nama" placeholder="Nama Siswa"
                                name="nama" value="<?= set_value('nama') ?>">
                            <?= form_error('nama', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control form-control-user" id="email" placeholder="Email"
                                name="email" value="<?= set_value('email') ?>">
                            <?= form_error('email', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control form-control-user" id="no_telp"
                                placeholder="Nomor Telepon" name="no_telp" value="<?= set_value('no_telp') ?>">
                            <?= form_error('no_telp', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control form-control-user" id="password1"
                                placeholder="Password" name="password1">
                            <?= form_error('password1', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control form-control-user" id="password2"
                                placeholder="Ulangi Password" name="password2">
                        </div>
                        <button type="submit" class="btn btn-primary btn-user btn-block">
                            Register
                        </button>
                    </form>
                    <hr>
                    <div class="text-center">
                        <p class="text-dark">Sudah punya Akun ? <a href="<?= base_url('auth/index_login'); ?>"
                                style="color: blue">Login</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-12 order-lg-2 order-1 min-vh-100 background-walk-y position-relative overlay-gradient-bottom"
                data-background="<?= base_url('assets/') ?>img/Login/Login-3.jpg">
                <div class="absolute-bottom-left index-2">
                    <div class="text-light p-5 pb-2">
                        <div class="mb-5 pb-3">
                            <h1 class="mb-2 display-4 font-weight-bold text-white">Selamat datang !</h1>
                            <h5 class="font-weight-normal text-muted-transparent text-white">Daftarkan Akun untuk
                                mengakses Partoba Nabisuk !</h5>
                        </div>
                        Kelompok PA 02 <a class="text-light" target="_blank">IT Del</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>