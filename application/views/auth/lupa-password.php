<style type="text/css">
#start_button:disabled:hover {
    cursor: not-allowed;
}

#start_button:disabled {
    background-color: red !important;
}
</style>
<div id="app">
    <section class="section">
        <div class="d-flex flex-wrap align-items-stretch">
            <div class="col-lg-4 col-md-6 col-12 order-lg-1 min-vh-100 order-2 bg-white">
                <div class="p-4 m-3">
                    <div class="row justify-content-center">
                        <a href="<?= base_url('auth/index') ?>"> <img src="<?= base_url('assets/') ?>/img/logo/logo.png"
                                alt="logo" width="250"></a>
                    </div>
                    <div class="row justify-content-center mb-3" style="margin-top: -20px">
                        <h4 class="text-dark font-weight-normal">Selamat datang di </br><span
                                class="font-weight-bold">Partoba Nabisuk 👋🏻</span>
                        </h4>
                    </div>
                    <?= $this->session->flashdata('pesan') ?>
                    <form class="user" method="post" action=" <?= base_url('auth/lupapw'); ?>">
                        <div class="form-group">
                            <input type="text" class="form-control form-control-user" id="email" placeholder="Email"
                                name="email" onkeyup="s()">
                            <?= form_error('email', '<small class="text-danger">', '</small>') ?>
                        </div>
                        <button type="submit" class="btn btn-danger btn-user btn-block" id="start_button" disabled>
                            Reset Password
                        </button>
                    </form>
                    <hr>
                    <div class="text-center">
                        <p class="text-dark">Kembali ke <a href="<?= base_url('auth/index_login'); ?>"
                                style="color: red">Login</a>
                        </p>
                    </div>
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
<script type="text/javascript">
function s() {
    var i = document.getElementById("email");
    if (i.value == "") {
        document.getElementById("start_button").disabled = true;
        $('#start_button').attr('disabled', 'disabled');
    } else {
        document.getElementById("start_button").disabled = false;
        $('#start_button').removeAttr('disabled');
    }
}
</script>