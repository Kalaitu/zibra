<?= $this->extend('Manager/Layout'); ?>
<?= $this->section('content'); ?>
<div class="container-fluid py-4">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header pb-0">
                    <div class="d-flex align-items-center">
                        <p class="mb-0">Tambah Kasir</p>

                    </div>
                    <hr class="horizontal dark">
                </div>
                <div class="card-body">
                    <p class="text-uppercase text-sm">Informasi Kasir</p>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="example-text-input" class="form-control-label">Username</label>
                                <input class="form-control" type="text" placeholder="Masukan username" name="username" id="username">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="example-text-input" class="form-control-label">Password</label>
                                <input class="form-control" type="password" name="password" id="password" placeholder="Masukan Password">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="example-text-input" class="form-control-label">Nama</label>
                                <input class="form-control" type="text" name="nama_kasir" id="nama_kasir" placeholder="Masukan Nama">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="example-text-input" class="form-control-label">Foto</label>
                                <input class="form-control" name="foto" id="foto" type="file" placeholder="">
                            </div>
                        </div>
                        <button class="btn btn-primary btn-sm ms-auto">Simpan</button>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>