<?= $this->extend('Manager/Layout'); ?>
<?= $this->section('content'); ?>
<div class="container-fluid py-4">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header pb-0">
                    <div class="d-flex align-items-center">
                        <p class="mb-0">Tambah karyawan</p>
                    </div>
                    <hr class="horizontal dark">
                </div>
                <div class="card-body">
                    <form action="<?= base_url('manager/insert-karyawan') ?>" method="POST" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Username</label>
                                    <input class="form-control" type="text" placeholder="Masukan username" name="username" id="username" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Password</label>
                                    <input class="form-control" type="password" name="password" id="password" placeholder="Masukan Password" required>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="nama_karyawan" class="form-control-label">Nama Lengkap</label>
                                    <input class="form-control" type="text" name="nama_karyawan" id="nama_karyawan" placeholder="Masukan Nama" required>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="role" class="form-control-label">Role</label>
                                    <select class="form-control" id="role" name="role" required>
                                        <option value="Kasir">Kasir</option>
                                        <option value="Staff Gudang">Staff Gudang</option>
                                        <option value="Staff Keuangan">Staff Keuangan</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="foto" class="form-control-label">Foto</label>
                                    <input class="form-control" name="foto" id="foto" type="file" placeholder="">
                                </div>
                            </div>
                            <div class="col-md-12 mt-3">
                                <button class="btn btn-primary btn-sm ms-auto w-100">Simpan</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>