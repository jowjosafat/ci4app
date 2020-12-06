<?= $this->extend('layout/template'); ?>


<?= $this->section('content'); ?>


<div class="row">
    <div class="col">
        <form action="<?= base_url('/gudang/update_profil/'); ?>/<?= $a['id']; ?>" method="post" enctype="multipart/form-data">
        <?= csrf_field(); ?>
            <div class="form-group row">
                <label for="nama" class="col-sm-2 col-form-label">nama</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control btn btn-outline-info" name="nama" autocomplete="off" id="nama" value="<?= $a['nama']; ?>">
                    </input>
                </div>
            </div>
            <div class="form-group row">
                <label for="email" class="col-sm-2 col-form-label">email</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control btn btn-outline-info" readonly id="email" name="email" value="<?= $a['email']; ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="image" class="col-sm-2 col-form-label">Image</label>
                <div class="col-sm-4">
                
                <input type="file" class="form-control-file" name="image" id="image">
                </div>
            </div>
            
            
            <div class="form-group row col-sm-6">
                <div class="col-sm-6 ">
                <!-- kosong -->
                </div>
                <div class="col-sm-6 ">
                    <div class="col-sm-auto">
                        <a href="<?= base_url('gudang/profile'); ?>" class="btn btn-outline-info " role="button" aria-pressed="true">Back</a>
                        <button type="submit" class="btn btn-outline-primary">Save</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>


<?= $this->endSection(); ?>