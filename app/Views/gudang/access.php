<?= $this->extend('layout/template'); ?>


<?= $this->section('content'); ?>



<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover" id="example">
                    <thead>
                        <tr class="text-center ">
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">image</th>
                            <th scope="col">Aktifasi</th>
                            <th scope="col">Level</th>
                            <th scope="col">Action</th>

                        </tr>
                    </thead>
                    <?php foreach ($access as $a) : ?>
                        <tr class="text-center">

                            <td><?= $a['nama']; ?></td>
                            <td><?= $a['email'];  ?></td>
                            <td><?= $a['image'];  ?></td>
                            <td>
                                <?php if ($a['is_active'] == 0) $b = 'Banned';
                                else $b = 'Aktif';
                                ?>
                                <?= $b;  ?>
                            </td>
                            <td>
                                <?php if ($a['role_id'] == 1) {
                                    $c = 'Administrator';
                                } elseif ($a['role_id'] == 2) {
                                    $c = 'User';
                                } else {
                                    $c = 'Preview';
                                }
                                ?>
                                <?= $c;  ?>
                            </td>
                            <td>
                                <a href="<?= base_url('gudang/editAccess'); ?>/<?= $a['id']; ?>" class="btn btn-outline-warning btn-sm">Edit</a>
                                <form action="<?= base_url('/gudang/deleteAccess'); ?>/<?= $a['id']; ?>" method="post" class="d-inline">
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