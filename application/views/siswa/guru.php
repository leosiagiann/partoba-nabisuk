<div class="main-content">
    <div class="row">
        <section class="section col-md-12">

            <!-- Alert -->
            <h4 class="alert alert-primary">Guru</h4>
            <!-- Alert -->

            <div class="section-body">
                <div class="card p-3">
                    <div class="p-4">
                        <div class="table-responsive">
                            <table id="example" class="table table-flush">

                                <!-- thead -->
                                <thead class="thead-light">
                                    <tr class="text-center">
                                        <th scope="col">NIP</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">E-mail</th>
                                        <th scope="col">Alamat</th>
                                        <th scope="col">No Telepon</th>
                                        <th scope="col">Jenis Kelamin</th>
                                    </tr>
                                </thead>
                                <!-- thead -->

                                <!-- tbody -->
                                <tbody>
                                    <?php
                                    foreach ($guru as $g) {
                                    ?>
                                    <tr class="text-center clickable-row" data-href="#myModal<?= $g->nip ?>">
                                        <th scope="row">
                                            <?= $g->nip ?>
                                        </th>
                                        <th scope="row">
                                            <?= $g->nama ?>
                                        </th>
                                        <th scope="row">
                                            <?= $g->email ?>
                                        </th>
                                        <th scope="row">
                                            <?= $g->alamat ?>
                                        </th>
                                        <th scope="row">
                                            <?= $g->no_telp ?>
                                        </th>
                                        <th scope="row">
                                            <?= $g->jenis_kelamin ?>
                                        </th>
                                    </tr>
                                    <?php
                                        include('detail_guru.php');
                                    }
                                    ?>

                                </tbody>
                                <!-- tbody -->

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>