<?= $this->extend('Gudang/Layout'); ?>
<?= $this->section('content'); ?>
<div class="container-fluid py-4">

    <div class="container-fluid py-4">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header pb-0">
                        <div class="d-flex align-items-center">
                            <p class="mb-0">Tambah Produk</p>

                        </div>

                    </div>
                    <div class="card-body">
                        <p class="text-uppercase text-sm">Informasi Produk</p>
                        <div class="row mb-2">
                            <div class="col-md-6 text-center">
                                <div class="form-group">
                                    <div class="form-group">
                                        <img src="<?= base_url('boassets/img/empty.jpg') ?>" alt="" class="h-80 w-80 rounded">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 ">
                                <label for="example-text-input" class="form-control-label">Id Produk</label>
                                <input class="form-control" type="text" placeholder="Masukan Id Produk">
                                <label for="example-text-input" class="form-control-label">Nama Produk</label>
                                <input class="form-control" type="text" placeholder="Masukan Nama Produk">
                                <label for="example-text-input" class="form-control-label">Deskripsi</label>
                                <input class="form-control" type="text" placeholder="Masukan Nama Produk">
                                <label for="example-text-input" class="form-control-label">Harga</label>
                                <input class="form-control" type="number" placeholder="Masukan Harga">
                                <label for="example-text-input" class="form-control-label">Stok</label>
                                <input class="form-control" type="number" placeholder="Masukan Stok">
                                <label for="example-text-input" class="form-control-label">Foto</label>
                                <input class="form-control" type="file" placeholder="">
                            </div>


                        </div>
                        <div class="row">
                            <button class="btn btn-primary btn-sm ms-auto">Simpan</button>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <?= $this->endSection(); ?>