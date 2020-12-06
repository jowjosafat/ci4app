<?= $this->extend('layout/template'); ?>


<?= $this->section('content'); ?>
<div class="row">
    <div class="col">
        <div class="row">
            <div class="col">
                <table class="table table-hover" id="example">
                    <thead>
                        <tr class="text-center">
                            <!-- <th scope="col">No</th> -->
                            <th scope="col">Tanggal</th>
                            <th scope="col">Item Material</th>
                            <th scope="col">Oum</th>
                            <th scope="col">Departement</th>
                            <th scope="col">Keterangan</th>
                            <!-- <th scope="col">Aksi</th> -->
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($list as $l) : ?>
                            <tr class="text-center">
                                <!-- <th scope="row"><?= $i++ ?></th> -->
                                <td><?= $l['updated_at']; ?></td>
                                <td><?= $l['itemmaterial_out'];  ?></td>
                                <td><?= $l['uom_out'];  ?></td>
                                <td></td>
                                <td><?= $l['ket_out'];  ?></td>
                                <!-- <td><a href="<?= base_url('gudang/edit_out'); ?>/<?= $l['id']; ?>" class="btn btn-outline-danger btn-sm">Edit</a></td> -->
                            </tr>
                        <?php endforeach; ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>