<?= $this->extend('layout/template'); ?>


<?= $this->section('content'); ?>


<hr class="sidebar-divider my-3">

<div class="container-fluid ">
    <div class="row">
        <!-- Begin Page Content -->
        <div class="container-fluid ">
            <div class="row">
                <!-- Earnings (Monthly) Card Example -->
                <div class="col-xl-4 col-md-4 mb-4">
                    <a class="text-decoration-none" href="<?= base_url('/gudang/report'); ?>">
                        <div class="card border-bottom-danger shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Report Stok</div>
                                        <div class="h5 mb-0 font-weight-bold text-drak-800">
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- Earnings (Monthly) Card Example -->
                <div class="col-xl-4 col-md-4 mb-4">
                    <a class="text-decoration-none" href="<?= base_url('/gudang/report_in'); ?>">
                        <div class="card border-bottom-dark shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-dark text-uppercase mb-1">Report Material in</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- Pending Requests Card Example -->

                <div class="col-xl-4 col-md-6 mb-4">
                    <a class="text-decoration-none" href="<?= base_url('/gudang/report_out'); ?>">
                        <div class="card border-bottom-warning shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1 ">Report Material Out </div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

        </div>
    </div>


    <?= $this->endSection(); ?>