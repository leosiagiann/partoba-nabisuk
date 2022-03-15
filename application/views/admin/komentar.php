<!-- Main Content -->
<div class="main-content">
    <div class="row">
        <section class="section col-md-12">
            <div class="section-header">
                <h1 style="color: black">Komentar</h1>
            </div>
            <div class="section-body">
                <div class="card p-3">
                    <div class="p-4">
                        <div class="table-responsive">
                            <table id="example" class="table align-items-center table-flush">
                                <thead class="thead-light">
                                    <tr class="text-center">
                                        <th scope="col">Nama</th>
                                        <th scope="col">E-mail</th>
                                        <th scope="col">Topik</th>
                                        <th scope="col">Pesan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($komentar as $k) {
                                    ?>
                                    <tr>
                                        <th scope="row">
                                            <?= $k->nama ?>
                                        </th>
                                        <th scope="row">
                                            <?= $k->email ?>
                                        </th>
                                        <th scope="row">
                                            <?= $k->judul ?>
                                        </th>
                                        <th scope="row">
                                            <?= $k->deskripsi ?>
                                        </th>
                                    </tr>
                                    <?php
                                    }
                                    ?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
<!-- End Main Content -->