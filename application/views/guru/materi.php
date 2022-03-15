<link type="text/css" rel="stylesheet" href="<?= base_url('assets/css/self/pb-5.css'); ?>">
<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="row">
            <div class="col-md-12">
                <div class="bg-white p-4" style="border-radius:3px;box-shadow:rgba(0, 0, 0, 0.03) 0px 4px 8px 0px">
                    <div class="row form-group">
                        <div class="col-12">
                            <h2 class="mb-3"><?= $kelas_det['nama'] ?></h2>
                            <div class="p-3">
                                <nav>
                                    <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist"
                                        style="background-color: #f3f3f3;">
                                        <a class="nav-item nav-link active" id="nav_my_class" data-toggle="tab"
                                            href="#nav_class" role="tab" aria-controls="nav_class" aria-selected="true"
                                            style="color: black;">Teori
                                        </a>
                                        <a class="nav-item nav-link" id="nav_all_class" data-toggle="tab"
                                            href="#nav_all" role="tab" aria-controls="nav_all" aria-selected="false"
                                            style="color: black;">
                                            Praktikum
                                        </a>
                                    </div>
                                </nav>
                                <div class="tab-content text-dark" id="nav-tabContent">
                                    <div class="tab-pane fade show active" id="nav_class" role="tabpanel"
                                        aria-labelledby="nav_my_class">
                                        <div class="p-2">
                                            <?php
											$hit = 0;
											foreach ($materi as $m) {
												if ($m->id_kelas == $id_det && $m->id_guru == $saya['id']) {
													$hit = 1;
													break;
												}
											}
											if ($hit == 1) {
												$hit_bab = 1;
												foreach ($materi as $m) {
													if ($m->id_kelas == $id_det && $m->id_guru == $saya['id']) {
														$hit_bab++;
													}
												}
											?>
                                            <a href="#tambahAfterFirst" data-toggle="modal">
                                                <button class="btn bg-primary" style="color: white; font-weight: bold;">
                                                    Tambah BAB
                                                </button>
                                            </a>
                                            <div class="tab_panel_content">
                                                <?php
													$no = 1;
													foreach ($materi as $m) {
														if ($m->id_kelas == $id_det) {
													?>
                                                <ul class="dropdowns">
                                                    <div class="dropdown_item">
                                                        <div style="color: black; font-weight: bold;">
                                                            <i class="fa fa-book"></i><span> Bab <?= $no ?>:</span>
                                                            <?= $m->judul; ?>
                                                        </div>
                                                        <div class="dropdown_item_text">
                                                            <?php
																		foreach ($upload as $u) {
																			if ($u->id_materi == $m->id && $u->tipe == "teori") {
																		?>
                                                            <div class="btn bg-light mb-1"
                                                                style="width: 100%; text-align: left">
                                                                <text style="color: #28a745; font-weight: bold">
                                                                    <?= $u->file ?>
                                                                </text>
                                                                <text style="color: #bd2130 !important;"
                                                                    class="clickable-row"
                                                                    data-href="#hapus<?= $u->id ?>">
                                                                    <i class="fas fa-trash-alt"></i>
                                                                </text>
                                                            </div>
                                                            <?php
																				include('hapusteori.php');
																			}
																		}
																		?>
                                                            <a class="clickable-row"
                                                                data-href="#uploadteori<?= $m->id; ?>">
                                                                Upload Materi Teori
                                                            </a>
                                                        </div>
                                                    </div>
                                                </ul>
                                                <?php
															$no++;
															include('teori.php');
														}
													}
													?>
                                            </div>
                                            <?php
											} else if ($hit == 0) {
												$hit_bab = 1;
											?>
                                            <div class="tab_panel_content">
                                                <ul class="dropdowns">
                                                    <center>
                                                        <text>
                                                            Ups... Materi Anda Masih Kosong
                                                        </text>
                                                    </center>
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <center>
                                                                <a href="#tambah_first" data-toggle="modal">
                                                                    <button
                                                                        class="btn bg-primary text-light btn-block col-4">
                                                                        Tambah BAB
                                                                    </button>
                                                                </a>
                                                            </center>
                                                        </div>
                                                    </div>
                                                </ul>
                                            </div>
                                            <?php
											}
											?>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="nav_all" role="tabpanel"
                                        aria-labelledby="nav_all_class">
                                        <div class="p-2">
                                            <?php
											$hit = 0;
											foreach ($materi as $m) {
												if ($m->id_kelas == $id_det && $m->id_guru == $saya['id']) {
													$hit = 1;
													break;
												}
											}
											if ($hit == 0) {
											?>
                                            <div class="tab_panel_content">
                                                <ul class="dropdowns">
                                                    <center>
                                                        <text>
                                                            Ups... Materi Anda Masih Kosong
                                                        </text>
                                                    </center>
                                                </ul>
                                            </div>
                                            <?php
											} else {
												$hit_bab = 1;
												foreach ($materi as $m) {
													if ($m->id_kelas == $id_det && $m->id_guru == $saya['id']) {
														$hit_bab++;
													}
												}
											?>
                                            <div class="tab_panel_content">
                                                <?php
													$no = 1;
													foreach ($materi as $m) {
														if ($m->id_kelas == $id_det) {
													?>
                                                <ul class="dropdowns">
                                                    <div class="dropdown_item">
                                                        <div style="color: black; font-weight: bold;">
                                                            <i class="fa fa-book"></i><span> Bab <?= $no ?>:</span>
                                                            <?= $m->judul; ?>
                                                        </div>
                                                        <div class="dropdown_item_text">
                                                            <?php
																		foreach ($upload as $u) {
																			if ($u->id_materi == $m->id && $u->tipe == "praktikum") {
																		?>
                                                            <div class="btn bg-light mb-1"
                                                                style="width: 100%; text-align: left">
                                                                <text style="color: #28a745; font-weight: bold">
                                                                    <?= $u->file ?>
                                                                </text>
                                                                <text style="color: #bd2130 !important;"
                                                                    class="clickable-row"
                                                                    data-href="#hapus<?= $u->id ?>">
                                                                    <i class="fas fa-trash-alt"></i>
                                                                </text>
                                                            </div>
                                                            <?php
																				include('hapuspraktikum.php');
																			}
																		}
																		?>
                                                            <a class="clickable-row"
                                                                data-href="#uploadprak<?= $m->id; ?>">
                                                                Upload Materi Praktikum
                                                            </a>
                                                        </div>
                                                    </div>
                                                </ul>
                                                <?php
															$no++;
															include('praktikum.php');
														}
													}
													?>
                                            </div>
                                            <?php
											}
											?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
</section>
</div>
</div>
</div>
<!-- End Main Content -->
<?php
include('tambah_materi_first.php');
?>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<?php
if ($this->session->flashdata('tambah-materi')) {
?>
<script>
swal({
    title: "Berhasil Menambah Materi",
    icon: "success",
    button: "ok"
});
</script>
<?php
}
if ($this->session->flashdata('upload-teori')) {
?>
<script>
swal({
    title: "Berhasil Mengupload Materi Teori",
    icon: "success",
    button: "ok"
});
</script>
<?php
}
if ($this->session->flashdata('upload-prak')) {
?>
<script>
swal({
    title: "Berhasil Mengupload Materi Praktikum",
    icon: "success",
    button: "ok"
});
</script>
<?php
}
if ($this->session->flashdata('hapus-prak')) {
?>
<script>
swal({
    title: "Berhasil Menghapus Materi Praktikum",
    icon: "success",
    button: "ok"
});
</script>
<?php
}
if ($this->session->flashdata('hapus-teori')) {
?>
<script>
swal({
    title: "Berhasil Menghapus Materi Teori",
    icon: "success",
    button: "ok"
});
</script>
<?php
}
?>