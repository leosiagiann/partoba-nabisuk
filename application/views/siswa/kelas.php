<link rel="stylesheet" href="<?= base_url('assets/css/self/pb-1.css') ?>">
<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="row">
            <div class="col-md-12">
                <div class="bg-white p-4" style="border-radius:3px;box-shadow:rgba(0, 0, 0, 0.03) 0px 4px 8px 0px;">

                    <!-- Title Card -->
                    <h2 class="card-title" style="color: black;">Kelas</h2>
                    <!-- Title Card -->

                    <div class="tabs-container">

                        <!-- Pilihan Tab Menu -->
                        <ul class="tabs">
                            <li class="active">
                                <a href="">Semua Kelas</a>
                            </li>
                            <li>
                                <a href="">Kelas Saya</a>
                            </li>
                        </ul>
                        <!-- Pilihan Tab Menu -->

                        <div class="tabs-content">

                            <!-- Tab Panel 1 -->
                            <div class="tabs-panel active" data-index="0">
                                <div class="row">
                                    <div class="col-12 col-lg-11" style="margin: auto">
                                        <div class="featured-courses courses-wrap">
                                            <?php
                                            $no = 1;
                                            foreach ($kelas as $k) {
                                                if ($k->status == 1) {
                                                    if ($no == 1) {
                                            ?>
                                            <div class="row mx-m-25">
                                                <?php
                                                    }
                                                        ?>
                                                <!-- Main Course -->

                                                <!-- Course By ID -->
                                                <div class="col-12 col-md-4 px-25">
                                                    <div class="course-content">
                                                        <!-- .course-thumbnail-go -->
                                                        <figure class="course-thumbnail-go p-2">
                                                            <img src="<?= base_url('assets/img/course/') . $k->avatar; ?>"
                                                                alt="">
                                                        </figure>
                                                        <!-- .course-thumbnail-go -->
                                                        <div class="course-content-wrap">
                                                            <header class="entry-header">
                                                                <h2 class="entry-title"><text
                                                                        class="text-dark"><?= $k->nama; ?></text>
                                                                </h2>
                                                                <div
                                                                    class="entry-meta flex flex-wrap align-items-center">
                                                                    <div class="course-author">
                                                                        <text class="text-dark">
                                                                            <?php
                                                                                    foreach ($guru as $g) {
                                                                                        if ($g->nip == $k->nip) {
                                                                                            echo $g->nama;
                                                                                        }
                                                                                    }
                                                                                    ?>
                                                                        </text>
                                                                    </div>
                                                                    <small class="text-muted"><?= $k->nip ?></small>
                                                                </div>
                                                            </header><!-- .entry-header -->
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Course By ID -->

                                                <!-- Main Course -->
                                                <?php
                                                        if ($no % 3 == 0) {
                                                        ?>
                                            </div>
                                            <div class="row mx-m-25">
                                                <?php
                                                        }
                                                        $no++;
                                                    }
                                                }
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Tab Panel 1 -->

                            <!-- Tab Panel 2 -->
                            <div class="tabs-panel" data-index="1">
                                <div class="row">
                                    <div class="col-12 col-lg-11" style="margin: auto">
                                        <div class="featured-courses courses-wrap">
                                            <?php
                                            $no = 1;
                                            foreach ($kelas as $k) {
                                                if ($k->status == 1) {
                                                    foreach ($kelas_siswa as $ks) {
                                                        if ($ks->id_kelas == $k->id && $ks->id_siswa == $id && $ks->status == 2) {

                                                            if ($no == 1) {
                                            ?>
                                            <div class="row mx-m-25">
                                                <?php
                                                            }
                                                                ?>

                                                <!-- Main Course -->
                                                <div class="col-12 col-md-4 px-25">
                                                    <div class="course-content">

                                                        <!-- .course-thumbnail-go -->
                                                        <figure class="course-thumbnail-go p-2">
                                                            <a href="<?= base_url('siswa/all_siswa/' . $k->id) ?>">
                                                                <img src="<?= base_url('assets/img/course/') . $k->avatar; ?>"
                                                                    alt="">
                                                            </a>
                                                        </figure>
                                                        <!-- .course-thumbnail-go -->

                                                        <div class="course-content-wrap">
                                                            <header class="entry-header">
                                                                <h2 class="entry-title"><text
                                                                        class="text-dark"><?= $k->nama; ?></text>
                                                                </h2>
                                                                <div
                                                                    class="entry-meta flex flex-wrap align-items-center">
                                                                    <div class="course-author">
                                                                        <text class="text-dark">
                                                                            <?php
                                                                                            foreach ($guru as $g) {
                                                                                                if ($g->nip == $k->nip) {
                                                                                                    echo $g->nama;
                                                                                                }
                                                                                            }
                                                                                            ?>
                                                                        </text>
                                                                    </div>
                                                                    <small class="text-muted"><?= $k->nip ?></small>
                                                                </div>
                                                            </header>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Main Course -->

                                                <?php
                                                                if ($no % 3 == 0) {
                                                                ?>
                                            </div>
                                            <div class="row mx-m-25">
                                                <?php
                                                                }
                                                                $no++;
                                                            }
                                                        }
                                                    }
                                                }
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Tab Panel 2 -->

                        </div>
                    </div>
                </div>
            </div>
    </section>
</div>
</div>
</div>
<!-- End Main Content -->
<script src="<?= base_url('assets/js/self/pb-1.js'); ?>"></script>