<?= $this->extend('Manager/Layout'); ?>
<?= $this->section('content'); ?>
<div class="container-fluid py-4">
    <div class="card shadow-lg mx-4 ">
        <div class="card-body p-3">
            <div class="row gx-4">
                <div class="col-auto">
                    <div class="avatar avatar-xl position-relative">
                        <img src="<?= base_url('boassets/img/team-4.jpg') ?>" alt="profile_image" class="w-100 border-radius-lg shadow-sm">
                    </div>
                </div>
                <div class="col-auto my-auto">
                    <div class="h-100">
                        <h5 class="mb-1">
                            Dia (Alex)
                        </h5>
                        <p class="mb-0 font-weight-bold text-sm">
                            Kasir
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header pb-0">
                        <div class="d-flex align-items-center">
                            <p class="mb-0">Edit Profile</p>

                        </div>
                    </div>
                    <div class="card-body">
                        <p class="text-uppercase text-sm">Informasi Kasir</p>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Username</label>
                                    <input class="form-control" type="text" placeholder="Masukan username">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Password</label>
                                    <input class="form-control" type="password" placeholder="Masukan Password">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Nama</label>
                                    <input class="form-control" type="text" placeholder="Masukan Nama">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Foto</label>
                                    <input class="form-control" type="file" placeholder="">
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