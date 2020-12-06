<?= $this->extend('layout/template'); ?>


<?= $this->section('content'); ?>



<div class="row">
    <div class="col">
        <form action="<?= base_url('/gudang/save'); ?>" method="post">
            <?= csrf_field(); ?>
            <div class="form-group row">
                <label for="itemmaterial" class="col-sm-2 col-form-label">Item Material</label>
                <div class="col-sm-10">
                    <input type="text" autocomplete="off" class="form-control <?= ($validation->hasError('itemmaterial')) ? 'is-invalid' : '' ?>" name="itemmaterial" id="itemmaterial" autofocus value="<?= old('itemmaterial') ?>">
                    <div class="invalid-feedback">
                        <?= $validation->getError('itemmaterial'); ?>
                    </div>
                    </input>
                </div>
            </div>
            <div class="form-group row ">
                <label for="uom" class="col-sm-2 col-form-label">Uom</label>
                <div class="col-sm-6">
                    <input type="number" class="form-control createuom" required readonly id="uom" name="uom" value="0">
                </div>
                <div class=" col-sm-2">
                    <select class="form-control " id="satuan" name="satuan" required>
                        <option selected></option>
                        <option>kg</option>
                        <option>ctn</option>
                        <option>litter</option>
                        <option>btl</option>
                        <option>pack</option>
                        <option>gram</option>
                        <option>can</option>
                        <option>ball</option>
                        <option>pcs</option>
                        <option>sak</option>
                        <option>pck</option>
                        <option>drig</option>
                        <option>sisir</option>
                        <option>roll</option>
                    </select>
                </div>
            </div>
            <div class="form-group row ">
                <label for="harga" class="col-sm-2 col-form-label">Harga</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control createharga" required id="harga" autocomplete="off" name="harga" value="<?= old('harga') ?>">
                </div>
            </div>
            <div class="form-group row ">
                <label for="total" class="col-sm-2 col-form-label">Total</label>
                <div class="col-sm-10 ">
                    <input type="text" class="form-control createTotal" id="total" name="total" readonly value="<?= old('total') ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="ket" class="col-sm-2 col-form-label">Keterangan</label>
                <div class="col-sm-10">
                    <textarea type="text" class="form-control" id="ket" name="ket" rows="2" readonly>Material new</textarea>
                </div>
            </div>
            <div class="form-group row justify-content-sm-center">
                <div class="col-sm-auto">
                    <a href="<?= base_url('gudang/list'); ?>" class="btn btn-outline-info " role="button" aria-pressed="true">Back</a>
                </div>
                <div class="col-sm-auto">
                    <button type="submit" class="btn btn-outline-primary ">Add Material</button>
                </div>
            </div>
        </form>
    </div>
</div>




<?= $this->endSection(); ?>