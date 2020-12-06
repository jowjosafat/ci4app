<?= $this->extend('layout/template'); ?>


<?= $this->section('content'); ?>


<div class="row">
    <div class="col">
        <div class="row">
            <div class="col">
                <form action="<?= base_url('/gudang/update_other/'); ?>/<?= $l['id']; ?>" method=" post">
                    <?= csrf_field(); ?>
                    <div class="form-group row">
                        <label for="itemmaterial" class="col-sm-2 col-form-label">Item Material</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="itemmaterial" id="itemmaterial" value="<?= $l['itemmaterial']; ?>" readonly>
                            </input>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="uom" class="col-sm-2 col-form-label">Uom</label>
                        <div class="col-sm-6">
                            <input type="number" class="form-control awaluom" id="uom" name="uom" value="<?= $l['uom']; ?>">
                        </div>
                        <div class=" col-sm-2">
                            <input type="text" class="form-control " id="satuan" name="satuan" value="<?= $l['satuan']; ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="harga" class="col-sm-2 col-form-label">Harga</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control kaliuom" required autocomplete="off" id="harga" name="harga" value="<?= $l['harga']; ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="total" class="col-sm-2 col-form-label">Total</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control  hasiluom" id="total" name="total" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="ket" class="col-sm-2 col-form-label">Keterangan</label>
                        <div class="col-sm-10">
                            <textarea type="text" class="form-control" id="ket" readonly name="ket" rows="1">Material Update</textarea>
                        </div>
                    </div>
                    <div class="form-group row justify-content-sm-center ">
                        <div class="col-sm-auto">
                            <a href="<?= base_url('gudang/other'); ?>" class="btn btn-outline-info " role="button" aria-pressed="true">Back</a>
                        </div>
                        <div class="col-sm-auto ">
                            <button type="submit" class="btn btn-outline-primary">Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>