<?= $this->extend('layout/template'); ?>


<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <table class="table table-hover" id="example">
                <thead>
                    <tr class="text-center">
                        <th scope="col">Tanggal</th>
                        <th class="text-left" scope="col">Item Material</th>
                        <th scope="col">Oum</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Total</th>
                        <th scope="col">Keterangan</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($list as $l) : ?>

                        <tr class="text-center">
                            <td><?= $l['created_at'];  ?></td>
                            <td class="text-left"><?= $l['itemmaterial'];  ?></td>
                            <td><?= $l['uom'];  ?></td>
                            <td><?= $l['harga'];  ?></td>
                            <td><?= $l['total'];  ?></td>
                            <td class="text-left"><?= $l['ket'];  ?></td>
                            <td>
                                <a href="<?= base_url('gudang/edit'); ?>/<?= $l['id']; ?>" class="btn btn-outline-warning btn-sm">Edit</a>

                                <form action="<?= base_url('/gudang/delete'); ?>/<?= $l['id']; ?>" method="post" class="d-inline">
                                    <?= csrf_field(); ?>
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button type="submit" class="btn btn-outline-danger btn-sm" onclick="return confirm ('Apakah anda yakin mau di DELETE');">Delete</button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; ?>

                </tbody>
            </table>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>