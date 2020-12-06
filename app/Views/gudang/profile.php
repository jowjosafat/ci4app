<?= $this->extend('layout/template'); ?>


<?= $this->section('content'); ?>

<form action="<?= base_url('/gudang/update_user'); ?>/<?php if (!empty(session()->get('id'))) {
                                                            echo session()->get('id');
                                                        } ?>" method="post">
    <?= csrf_field(); ?>
    <div class="row">
        <div class="col-6">
            <div class="form-group row">
                <div class="card-header col-sm-4 ">
                    <h6 class="m-0 font-weight-bold text-primary">Nama</h6>
                </div>
                <div class="col-sm-8">
                    <div class="form-control text-center font-weight-bold btn btn-outline-info">
                        <code><?php if (!empty(session()->get('nama'))) {
                                    echo session()->get('nama');
                                } ?></code>
                    </div>
                </div>

            </div>
            <div class="form-group row">
                <div class="card-header col-sm-4 ">
                    <h6 class="m-0 font-weight-bold text-primary">Email</h6>
                </div>
                <div class="col-sm-8">
                    <div class="form-control text-center font-weight-bold btn btn-outline-info">
                        <code><?php if (!empty(session()->get('email'))) {
                                    echo session()->get('email');
                                } ?></code>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <div class="card-header col-sm-4 ">
                    <h6 class="m-0 font-weight-bold text-primary">Status</h6>
                </div>
                <div class="col-sm-8">
                    <div class="form-control text-center font-weight-bold btn btn-outline-info">
                        <code><?php if (!empty(session()->get('is_active') == 1)) {
                                    echo 'Aktif';
                                } else {
                                    if (!empty(session()->get('is_active') == 0)) {
                                        echo 'Banned';
                                    }
                                } ?></code>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <div class="card-header col-sm-4 ">
                    <h6 class="m-0 font-weight-bold text-primary">Level</h6>
                </div>
                <div class="col-sm-8">
                    <div class="form-control text-center font-weight-bold btn btn-outline-info">
                        <code><?php if (!empty(session()->get('role_id') == 1)) {
                                    echo 'Administrator';
                                } else {
                                    if (!empty(session()->get('role_id') == 2)) {
                                        echo 'User';
                                    } else {
                                        if (!empty(session()->get('role_id') == 3)) {
                                            echo 'User Preview';
                                        }
                                    }
                                } ?></code>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <div class="card-header col-sm-4 ">
                    <h6 class="m-0 font-weight-bold text-primary ">Tanggal Daftar</h6>
                </div>
                <div class="col-sm-8">
                    <div class="form-control text-center font-weight-bold btn btn-outline-info">
                        <code><?php if (!empty(session()->get('created_at'))) {
                                    echo session()->get('created_at');
                                } ?></code>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-auto">
            <div class="card ">
                <div>
                    <img class="rounded float-left" width="190px" src="<?= base_url(); ?>/assets/img/<?php echo session()->get('image'); ?>" alt="Card image cap">
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="form-group row justify-content-sm-center">
                <div class="col-sm-auto">
                    <a href="<?= base_url('gudang'); ?>" class="btn btn-outline-info " role="button" aria-pressed="true">Back</a>
                </div>
                <div class="col-sm-auto">
                    <button type="submit" class="btn btn-outline-primary ">Edit</button>
                </div>
            </div>
        </div>
    </div>



    <?= $this->endSection(); ?>