<?= $this->extend('layout/template'); ?>


<?= $this->section('content'); ?>


<div class="row">
    <div class="col">
        <div class="row">
            <div class="col">
                <table class="table table-hover" id="example">
                    <thead>
                        <tr class="text-center">
                            <th scope="col">No</th>
                            <th class="text-left" scope="col">Item Material</th>
                            <th scope="col">Harga /Kg</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($list as $l) : ?>
                            <tr class="text-center">
                                <th scope="row"><?= $i++ ?></th>
                                <td class="text-left"><?= $l['itemmaterial'];  ?> </td>
                                <td><?= $l['harga'];  ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>