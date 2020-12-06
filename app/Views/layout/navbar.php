<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="<?= base_url('/'); ?>">BMP GUDANG</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link active" href="<?= base_url('/'); ?>">Home <span class="sr-only">(current)</span></a>

                <a class="nav-link" href="<?= base_url('/gudang/tables'); ?>">Stok Barang</a>
                <a class="nav-link" href="<?= base_url('/gudang/barangmasuk'); ?>">Barang Masuk</a>
                <a class="nav-link" href="<?= base_url('/gudang/barangkeluar'); ?>">Barang Keluar</a>
                <a class="nav-link" href="<?= base_url('/gudang/abaut'); ?>">Abaut</a>
            </div>
        </div>
    </div>
</nav>