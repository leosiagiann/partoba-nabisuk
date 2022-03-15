<link type="text/css" rel="stylesheet" href="<?= base_url('assets/css/self/pb-4.css'); ?>">
<?php
$nama_guru = "";
$kategori = "";
foreach ($guru as $g) {
	if ($g->nip == $dk['nip']) {
		$nama_guru = $g->nama;
		break;
	}
}
if ($dk['kelas'] == 7 || $dk['kelas'] == 8 || $dk['kelas'] == 9) {
	$kategori = "SMP";
} else {
	$kategori = "SMA";
}
$tanggalnya;
foreach ($kelas_siswa as $ks) {
	if ($ks->id_kelas == $dk['id'] && $ks->id_siswa == $siswa['id']) {
		$tanggalnya = new DateTime($ks->tanggal);
		break;
	}
}
$hariini = new DateTime();
$jumlah_hari = $hariini->diff($tanggalnya);
?>
<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="row">
            <div class="col-md-12">
                <div class="bg-white p-4" style="border-radius:3px;box-shadow:rgba(0, 0, 0, 0.03) 0px 4px 8px 0px;">
                    <!-- Course -->
                    <div class="course">
                        <div class="container">
                            <div class="row">
                                <!-- Course -->
                                <div class="col-lg-12">
                                    <div class="course_container">
                                        <div class="course_title"><?= $dk['nama'] ?></div>
                                        <div
                                            class="course_info d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-start mt-4">
                                            <!-- Course Info Item -->
                                            <div class="course_info_item">
                                                <div class="course_info_title">Guru</div>
                                                <div class="course_info_text text-dark"><?= $nama_guru ?></div>
                                            </div>
                                            <!-- Course Info Item -->
                                            <div class="course_info_item">
                                                <div class="course_info_title">Kategori</div>
                                                <div class="course_info_text text-dark"><?= $kategori ?></div>
                                            </div>
                                            <!-- Course Info Item -->
                                            <div class="course_info_item">
                                                <div class="course_info_title">Waktu Siswa Aktif</div>
                                                <div class="course_info_text text-dark"><?= $jumlah_hari->d ?> Hari
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Course Image -->
                                        <div class="course_image"><img src="<?= base_url('assets/img/course/1.jpg') ?>"
                                                alt=""></div>
                                        <!-- Course Tabs -->
                                        <div class="course_tabs_container">
                                            <nav>
                                                <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist"
                                                    style="background-color: #f3f3f3;">
                                                    <a class="nav-item nav-link active" id="nav_my_class"
                                                        data-toggle="tab" href="#nav_class" role="tab"
                                                        aria-controls="nav_class" aria-selected="true"
                                                        style="color: black;">Teori
                                                    </a>
                                                    <a class="nav-item nav-link" id="nav_all_class" data-toggle="tab"
                                                        href="#nav_all" role="tab" aria-controls="nav_all"
                                                        aria-selected="false" style="color: black;">
                                                        Praktikum
                                                    </a>
                                                </div>
                                            </nav>
                                            <div class="tab-content text-dark" id="nav-tabContent">
                                                <div class="tab-pane fade show active" id="nav_class" role="tabpanel"
                                                    aria-labelledby="nav_my_class">
                                                    <div class="p-2">
                                                        <div class="tab_panel_title">Teori</div>
                                                        <?php
														$hit = 0;
														foreach ($materi as $m) {
															if ($m->id_kelas == $dk['id']) {
																$hit++;
															}
														}
														if ($hit == 0) {
														?>
                                                        <div class="tab_panel_content">
                                                            <ul class="dropdowns">
                                                                <center>
                                                                    <text>
                                                                        Bab Pembelajaran Masih kosong
                                                                    </text>
                                                                </center>
                                                            </ul>
                                                        </div>
                                                        <?php
														} else {
															$no = 1;
															foreach ($materi as $m) {
																if ($m->id_kelas == $dk['id']) {
															?>
                                                        <ul class="dropdowns">
                                                            <div class="dropdown_item">
                                                                <div style="color: black; font-weight: bold;">
                                                                    <i class="fa fa-book"></i><span> Bab
                                                                        <?= $no ?>:</span>
                                                                    <?= $m->judul; ?>
                                                                </div>
                                                                <div class="dropdown_item_text">
                                                                    <?php
																				foreach ($upload as $u) {
																					if ($u->id_materi == $m->id && $u->tipe == "teori") {
																				?>
                                                                    <div class="btn bg-light mb-1"
                                                                        style="width: 100%; text-align: left">
                                                                        <a
                                                                            href="<?= base_url('siswa/dw_teori/') . $u->id  ?>">
                                                                            <?= $u->file ?> <i
                                                                                class="fas fa-download"></i>
                                                                        </a>
                                                                    </div>
                                                                    <?php
																					}
																				}
																				?>
                                                                </div>
                                                            </div>
                                                        </ul>
                                                        <?php
																	$no++;
																}
															}
														}
														?>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="nav_all" role="tabpanel"
                                                    aria-labelledby="nav_all_class">
                                                    <div class="p-2">
                                                        <div class="tab_panel_title">Praktikum</div>
                                                        <?php
														$hit = 0;
														foreach ($materi as $m) {
															if ($m->id_kelas == $dk['id']) {
																$hit++;
															}
														}
														if ($hit == 0) {
														?>
                                                        <div class="tab_panel_content">
                                                            <ul class="dropdowns">
                                                                <center>
                                                                    <text>
                                                                        Bab Pembelajaran Masih kosong
                                                                    </text>
                                                                </center>
                                                            </ul>
                                                        </div>
                                                        <?php
														} else {
															$no = 1;
															foreach ($materi as $m) {
																if ($m->id_kelas == $dk['id']) {
															?>
                                                        <ul class="dropdowns">
                                                            <div class="dropdown_item">
                                                                <div style="color: black; font-weight: bold;">
                                                                    <i class="fa fa-book"></i><span> Bab
                                                                        <?= $no ?>:</span>
                                                                    <?= $m->judul; ?>
                                                                </div>
                                                                <div class="dropdown_item_text">
                                                                    <?php
																				foreach ($upload as $u) {
																					if ($u->id_materi == $m->id && $u->tipe == "praktikum") {
																				?>
                                                                    <div class="btn bg-light mb-1"
                                                                        style="width: 100%; text-align: left">
                                                                        <a
                                                                            href="<?= base_url('siswa/dw_prak/') . $u->id  ?>">
                                                                            <?= $u->file ?> <i
                                                                                class="fas fa-download"></i>
                                                                        </a>
                                                                    </div>
                                                                    <?php
																					}
																				}
																				?>
                                                                </div>
                                                            </div>
                                                        </ul>
                                                        <?php
																	$no++;
																}
															}
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
                    <!-- Course -->
                </div>
            </div>
        </div>
    </section>
</div>
</div>
</div>
<!-- End Main Content -->