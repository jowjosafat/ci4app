<?= $this->extend('layout/template'); ?>


<?= $this->section('content'); ?>



        <div class="row">
            <div class="col">
                <form action="<?= base_url('/gudang/update_access/'); ?>/<?= $a['id']; ?>" method=" post">
                    <?= csrf_field(); ?>
                    <div class="form-group row">
                        <label for="nama" class="col-sm-2 col-form-label">nama</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="nama" autocomplete="off" id="nama" value="<?= $a['nama']; ?>">
                            </input>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="email" class="col-sm-2 col-form-label">email</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="email" autocomplete="off" name="email" value="<?= $a['email']; ?>">
                        </div>
                        <label for="password" class="col-sm-1 col-form-label">Password</label>
                        <div class="col-sm-4">
                            <input type="password" class="form-control" id="password" readonly name="password" value="<?= $a['password']; ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="image" class="col-sm-2 col-form-label">Image</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" readonly id="image" name="image" value="<?= $a['image']; ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="role_id" class="col-sm-2 col-form-label">Level</label>
                        <div class="col-sm-4">
                            <div class="input-group">
                                <select class="custom-select " name="role_id" id="role_id" aria-label="Example select with button addon">
                                    <option selected value="<?= $a['role_id'];  ?>"></option>
                                    <option value="3">Preview</option>
                                    <option value="2">User</option>
                                </select>
                            </div>
                        </div>
                        <label for="is_active" class="col-sm-1 col-form-label">Aktifitas</label>
                        <div class="col-sm-4">
                            <div class="input-group">
                                <select class="custom-select " name="is_active" id="is_active" aria-label="Example select with button addon">
                                    <option selected value="<?= $a['is_active'];  ?>"></option>
                                    <option value="0">Banned</option>
                                    <option value="1">aktif</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row justify-content-sm-center ">
                        <div class="col-sm-auto">
                            <a href="<?= base_url('gudang/access'); ?>" class="btn btn-outline-info " role="button" aria-pressed="true">Back</a>
                        </div>
                        <div class="col-sm-auto ">
                            <button type="submit" class="btn btn-outline-primary">Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>


<?= $this->endSection(); ?>