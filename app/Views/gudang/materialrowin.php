<?= $this->extend('layout/template'); ?>


<?= $this->section('content'); ?>

<div class="row">
    <div class="col">
        <table class="table table-hover" id="example">
            <thead>
                <tr class="text-center">
                    <!-- <th scope="col">No</th> -->
                    <th scope="col">Tanggal</th>
                    <th scope="col">Item Material</th>
                    <th scope="col">Oum</th>
                    <th scope="col">Harga /Kg</th>
                    <th scope="col">Total</th>
                    <th scope="col">Keterangan</th>

                    <!-- <th scope="col">Aksi</th> -->
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                <?php foreach ($list as $l) : ?>
                    <tr class="text-center">
                        <!-- <th scope="row"><?= $i++ ?></th> -->
                        <td><?= $l['created_at'];  ?></td>
                        <td class="text-left"><?= $l['itemmaterial_in'];  ?></td>
                        <td><?= $l['uom_in'];  ?> <?= $l['satuan_in'];  ?></td>
                        <td><?= $l['harga_in'];  ?></td>
                        <td><?= $l['total_in'];  ?></td>
                        <td><?= $l['ket_in'];  ?></td>

                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<?= $this->endSection(); ?>