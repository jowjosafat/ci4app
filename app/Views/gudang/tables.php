<?= $this->extend('layout/template'); ?>


<?= $this->section('content'); ?>

<!-- <div class="row">

    <div class="col">
        <table class="table table-hover table table-bordered">
            <thead class="">
                <tr class="text-center ">
                    <th scope="col">Tanggal</th>
                    <th scope="col">Item Material</th>
                    <th scope="col">Oum</th>
                    <th scope="col">Harga /Kg</th>
                    <th scope="col">Total</th>
                    <th scope="col">Keterangan</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($list as $l) : ?>
                    <tr class="text-center">
                        <td><?= $l['created_at']; ?></td>
                        <td class="text-left"><?= $l['itemmaterial_h'];  ?></td>
                        <td><?= $l['uom_h'];  ?></td>
                        <td><?= $l['harga_h'];  ?></td>
                        <td><?= $l['total_h'];  ?></td>
                        <td><?= $l['ket_h'];  ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div> -->

<div class="container-fluid">

    <!-- Page Heading -->


    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover" id="example">
                    <thead>
                        <tr class="text-center ">
                            <th scope="col">Tanggal</th>
                            <th scope="col">Item Material</th>
                            <th scope="col">Oum</th>
                            <th scope="col">Harga /Kg</th>
                            <th scope="col">Total</th>
                            <th scope="col">Keterangan</th>
                        </tr>
                    </thead>
                    <?php foreach ($list as $l) : ?>
                        <tr class="text-center">
                            <td><?= $l['created_at']; ?></td>
                            <td class="text-left"><?= $l['itemmaterial_h'];  ?></td>
                            <td><?= $l['uom_h'];  ?></td>
                            <td><?= $l['harga_h'];  ?></td>
                            <td><?= $l['total_h'];  ?></td>
                            <td><?= $l['ket_h'];  ?></td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    <?= $this->endSection(); ?>