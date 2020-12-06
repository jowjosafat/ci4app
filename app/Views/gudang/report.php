<?= $this->extend('layout/template'); ?>


<?= $this->section('content'); ?>


<hr class="sidebar-divider my-3">

<div class="container-fluid ">
    <div class="row">
                <!-- Begin Page Content -->
                <div class="container-fluid ">
                    <div class="row">
                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-12 col-md-4 mb-4">
                            <a class="text-decoration-none" href="<?= base_url('/gudang/report'); ?>">
                                <div class="card border-bottom-danger shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-lg font-weight-bold text-danger text-uppercase mb-1 text-center">Report Stok</div>
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
                    </div>
                </div>
                
    </div>

    <hr class="sidebar-divider my-3">
        
    

    <div class="row">
            <div class="col">
                <table class="table table-hover tablepdf" id="exampleTable" >
                    <thead>
                        <tr class="text-center">
                            <th scope="col" class="text-left">Item Material</th>
                            <th scope="col">Oum</th>
                            <th scope="col">Harga</th>
                            <th scope="col">Updata Terbaru</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($list as $l) : ?>
                            <tr class="text-center">
                                <td class="text-left"><?= $l['itemmaterial'];  ?></td>
                                <td><?= $l['uom'];  ?> <?= $l['satuan'];  ?></td>
                                <td><?= $l['harga'];  ?></td>
                                <td><?= $l['updated_at'];  ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
</div>


<?= $this->endSection(); ?>