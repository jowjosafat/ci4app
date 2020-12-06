<?= $this->extend('layout/template'); ?>


<?= $this->section('content'); ?>

        <div class="row">
            <div class="col">
                <table class="table table-hover" id="example">
                    <thead>
                        <tr class="text-center">
                            <th scope="col" class="text-left">Item Material</th>
                            <th scope="col">Oum</th>
                            <th scope="col">Tgl | Jam Updata Terbaru</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($list as $l) : ?>
                            <tr class="text-center">
                                <td class="text-left"><?= $l['itemmaterial'];  ?></td>
                                <td><?= $l['uom'];  ?> <?= $l['satuan'];  ?></td>
                                <td><?= $l['updated_at'];  ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>

<?= $this->endSection(); ?>