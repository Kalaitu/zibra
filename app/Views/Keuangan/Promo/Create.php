<?= $this->extend('Keuangan/Layout'); ?>
<?= $this->section('content'); ?>
<div class="container-fluid py-4">

    <div class="container-fluid py-4">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header pb-0">
                        <div class="d-flex align-items-center">
                            <p class="mb-0">Tambah Promo</p>

                        </div>

                    </div>
                    <div class="card-body">
                        <p class="text-uppercase text-sm">Informasi Promo</p>
                        <div class="row mb-2">
                            <div class="col-md-12 ">

                                <label for="example-text-input" class="form-control-label">Nama Promo</label>
                                <input class="form-control" type="text" placeholder="Masukan Nama Promo" name="nama_promo" id="nama_promo">
                                <label for="example-text-input" class="form-control-label">Deskripsi</label>
                                <input class="form-control" type="text" placeholder="Masukan Deskripsi" name="deskripsi" id="deskripsi">
                                <label for="example-text-input" class="form-control-label">Point</label>
                                <input class="form-control" type="number" placeholder="Masukan point" name="point" id="point">
                                <label for="example-text-input" class="form-control-label">Diskon</label>
                                <input class="form-control" type="number" placeholder="Masukan Diskon" name="diskon" id="diskon">
                            </div>


                        </div>
                        <div class="row mx-4">
                            <button class="btn btn-primary btn-sm ms-auto">Simpan</button>
                            <button class="btn btn-danger btn-sm ms-auto">Hapus </button>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <?= $this->endSection(); ?>