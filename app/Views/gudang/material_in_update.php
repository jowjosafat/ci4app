<?= $this->extend('layout/template'); ?>


<?= $this->section('content'); ?>



<div class="row">
    <div class="col">
        <form action="<?= base_url('/gudang/update_in_material/'); ?>/<?= $l['id']; ?>" method=" post">
            <?= csrf_field(); ?>
            <div class="form-group row">
                <label for="itemmaterial" class="col-sm-2 col-form-label">Item Material</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control text-center" name="itemmaterial" readonly id="itemmaterial" autofocus value="<?= $l['itemmaterial']; ?>"></input>
                </div>
            </div>
            <div class="form-group row">
                <label for="uom" class="col-sm-2 col-form-label ">Uom</label>
                <div class="col-sm-2">
                    <input class="form-control text-center createuomin" readonly value="<?= $l['uom']; ?>"></input>
                </div>
                <label for="uom" class="col-sm-0 col-form-label ">+</label>
                <div class="col-sm-2">
                    <input type="number" class="form-control text-center createhargaoum awaluoms" placeholder="Input Uom" id="uom_h" required name="uom_h">
                </div>
                <label for="uom" class="col-sm-0 col-form-label">=</label>
                <div class="col-sm-2 ">
                    <input type="number" class="form-control text-center createTotaloum awaluom" id="uom" name="uom" readonly>
                </div>
                <div class="col-sm-1 ">
                    <input type="text" class="form-control " id="satuan" name="satuan" readonly value="<?= $l['satuan']; ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="harga" class="col-sm-2 col-form-label">Harga Satuan</label>
                <div class="col-sm-2 text-center">
                    <input class="form-control text-center " readonly value=" <?= $l['harga']; ?>"></input>
                </div>
                <label for="harga" class="col-sm-0 col-form-label text-center">~</label>
                <div class="col-sm-2 text-center">
                    <input class="form-control text-center kaliuoms" required autocomplete="off" placeholder="Input harga satuan" id="harga" name="harga"></input>
                </div>
                <label for="harga" class="col-sm-0 col-form-label text-center ">~</label>
                <div class="col-sm-2 text-center">
                    <input class="form-control text-center kaliuom" required autocomplete="off" placeholder="Input harga satuan" id="harga" name="harga"></input>
                </div>

            </div>
            <div class="form-group row">
                <label for="total" class="col-sm-2 col-form-label">Total</label>
                <div class="col-sm-2">
                    <input class="form-control text-center" readonly value="<?= $l['total']; ?>"></input>
                </div>
                <label for="total" class="col-sm-0 col-form-label">+</label>
                <div class="col-sm-2">
                    <input type="number" class="form-control text-center hasiluoms" readonly id="total_h" name="total_h">
                </div>
                <label for="total" class="col-sm-0 col-form-label">=</label>
                <div class="col-sm-2">
                    <input type="number" class="form-control text-center hasiluom" readonly id="total" name="total">
                </div>
            </div>
            <div class=" form-group row">
                <label for="ket" class="col-sm-2 col-form-label">Keterangan</label>
                <div class="col-sm-9">
                    <input class="form-control text-center" id="ket" name="ket" readonly value="Material In"></input>
                </div>
            </div>
            <div class="form-group row justify-content-sm-center ">
                <div class="col-sm-auto">
                    <a href="<?= base_url('gudang/material_in'); ?>" class="btn btn-outline-info " role="button" aria-pressed="true">Back</a>
                </div>
                <div class="col-sm-auto ">
                    <button type="submit" class="btn btn-outline-primary">Save</button>
                </div>
            </div>
        </form>
    </div>
</div>


<?= $this->endSection(); ?>