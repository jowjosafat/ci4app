<?= $this->extend('layout/template'); ?>


<?= $this->section('content'); ?>


<form action="<?= base_url('/gudang/material_out_update/'); ?>" method="post">
    <div class="row">
        <div class="col">
            <div class="form-group row">
                <label for="itemmaterial" class="col-sm-2 col-form-label">Item Material</label>
                <div class="col-sm-10">
                    <div class="input-group">
                        <select class="custom-select " name="id" aria-label="Example select with button addon">
                            <option required></option>
                            <?php foreach ($list as $l) : ?>
                                <option value="<?= $l['id'];  ?>"> <?= $l['itemmaterial'];  ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
            </div>
            <div class="form-group row justify-content-sm-center">
                <div class="col-sm-auto">
                    <a href="<?= base_url('gudang'); ?>" class="btn btn-outline-info " role="button" aria-pressed="true">Back</a>
                </div>
                <div class="col-sm-1">
                    <button type="submit" class="btn btn-outline-primary ">Next</button>
                </div>
            </div>
        </div>
    </div>
</form>


<?= $this->endSection(); ?>