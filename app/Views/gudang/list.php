<?= $this->extend('layout/template'); ?>


<?= $this->section('content'); ?>

<div class="container-fluid ">
    <div class="row">
        <?php foreach ($list as $l) : ?>
            <div class="col-lg-3 mb-4">
                <div class="card bg-primary text-white shadow">
                    <div class="card-body">
                        <?= $l['itemmaterial'];  ?>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>


<?= $this->endSection(); ?>