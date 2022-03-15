<div class="p-2">
    <div class="table-responsive">
        <table id="example_" class="table align-items-center table-flush">
            <!-- thead -->
            <thead class="thead-light">
                <tr class="text-center">
                    <th scope="col">Nama Kelas</th>
                    <th scope="col">NIP</th>
                    <th scope="col">Detail</th>
                </tr>
            </thead>
            <!-- thead -->
            <!-- tbody -->
            <tbody>
                <?php
				foreach ($kelas as $k) {
					if ($k->status == 1) {
				?>
                <tr class="text-center">
                    <th scope="row">
                        <?= $k->nama ?>
                    </th>
                    <td scope="row">
                        <?php echo $k->nip ?>
                    </td>
                    <td class="text-center" scope="row">
                        <a href="#detail_<?= $k->id ?>" data-toggle="modal">
                            <button class="btn btn-primary">
                                Detail <i class="fas fa-eye"></i>
                            </button>
                        </a>
                    </td>
                </tr>
                <?php
						include('only_detail.php');
					}
				}
				?>
            </tbody>
            <!-- tbody -->
        </table>
        <!-- small -->
        <p class="small font-weight-bold">
            Pendaftaran guru hanya dapat dilakukan admin dan tidak bisa dilakukan sendiri
        </p>
        <!-- small -->
    </div>
</div>