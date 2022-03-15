<div id="app">
    <section class="section">
        <div class="d-flex flex-wrap align-items-stretch">
            <div class="col-lg-4 col-md-6 col-12 order-lg-1 min-vh-100 order-2 bg-white">
                <div class="p-4 m-3">
                    <div class="row justify-content-center">
                        <a href="<?= base_url('auth/index') ?>"> <img src="<?= base_url('assets/') ?>/img/logo/logo.png"
                                alt="logo" width="250"></a>
                    </div>
                    <div class="row justify-content-center" style="margin-top: -20px">
                        <div class="col-12 text-center">
                            <h4 class="text-dark font-weight-normal">Selamat datang di </br><span
                                    class="font-weight-bold">Partoba Nabisuk 👋🏻</span>
                            </h4>
                        </div>
                        <div class="col-12 text-center">
                            <small class="text-muted">
                                <?= $this->session->userdata('reset_password') ?>
                            </small>
                        </div>
                    </div>
                    <form class="user" method="post" action=" <?= base_url('auth/ubahPassword'); ?>">
                        <div class="form-group">
                            <input type="password" class="form-control form-control-user" id="password"
                                placeholder="Password" name="password">
                            <?= form_error('password', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <button type="submit" class="btn btn-danger btn-user btn-block">
                            Ubah
                        </button>
                    </form>
                </div>
            </div>
            <div class="col-lg-8 col-12 order-lg-2 order-1 min-vh-100 background-walk-y position-relative overlay-gradient-bottom"
                data-background="<?= base_url('assets/') ?>img/Login/Login-4.jpg">
                <div class="absolute-bottom-left index-2">
                    <div class="text-light p-5 pb-2">
                        <div class="mb-5 pb-3">
                            <h1 class="mb-2 display-4 font-weight-bold text-white">Selamat datang !</h1>
                            <h5 class="font-weight-normal text-muted-transparent text-white">Silahkan login untuk
                                masuk ke
                                halaman Partoba Nabisuk.</h5>
                        </div>
                        Kelompok PA 02 <a class="text-light" target="_blank">IT Del</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>