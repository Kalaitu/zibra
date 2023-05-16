<?= $this->extend('Zibra/Layout'); ?>
<?= $this->section('content'); ?>
<div class="container fixed">
    <div class="card shadow-lg mx-4">
        <div class="card-body p-3">
            <div class="row gx-4">
                <div class="col-auto">
                    <div class="avatar avatar-xl position-relative">
                        <img src="<?= base_url('boassets/img/team-1.jpg') ?>" alt="profile_image" class="w-100 border-radius-lg shadow-sm">
                    </div>
                </div>
                <div class="col-auto my-auto">
                    <div class="h-100">
                        <h5 class="mb-1">
                            Panji petualang
                        </h5>
                        <p class="mb-0 font-weight-bold text-sm">
                            Member silver
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3">
                    <div class="nav-wrapper position-relative end-0">
                        <ul class="nav nav-pills nav-fill p-1" role="tablist">
                            <li class="nav-item">
                                <i class="fa fa-money"></i>
                                <span class="ms-2">100 Point</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <i class="ni ni-cart"></i>
                                <span class="ms-2">2 Pembelian</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container fixed">
    <div class="card shadow-lg mx-4">
        <div class="row">
            <div class="card-body p-3">
                <div class="col-xl-4 col-sm-6 lg-4 mb-xl-0 mb-4">
                    <div class="card shadow rounded-25">
                        <div class="card-body bg-light p-3">
                            <div class="row ">
                                <div class="col-6 text-center">
                                    <img src="<?= base_url('fashion/img/LOGOGRAM.PNG') ?>" alt="" class="h-80 w-80 rounded-circle mb-1">

                                </div>
                                <div class="col-6">
                                    <div class="numbers">
                                        <p class="text-sm mb-0 text-uppercase font-weight-bold">Zibra Promo</p>
                                        <h5 class="font-weight-bolder">
                                            Nama Promo
                                        </h5>

                                        <p class="mb-0">
                                            <small class="text-sm">

                                                100 Points
                                            </small>
                                        </p>
                                        <p class="mb-0">
                                            <i class="fa fa-tag text-lg opacity-10" aria-hidden="true"></i>
                                            Discount 50%
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer bg-dark">
                            <div class="row text-center text-light">
                                <a href="" class="text-white">Tukarkan </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header pb-0">
                <div class="d-flex align-items-center">
                    <p class="mb-0">Edit Profile</p>
                </div>
            </div>
            <div class="card-body">
                <p class="text-uppercase text-sm">Informasi Pengguna</p>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="example-text-input" class="form-control-label">Username</label>
                            <input class="form-control" type="text" value="lucky.jesse">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="example-text-input" class="form-control-label">Email address</label>
                            <input class="form-control" type="email" value="jesse@example.com">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="example-text-input" class="form-control-label">Nama</label>
                            <input class="form-control" type="text">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="example-text-input" class="form-control-label">Nomor Telepon</label>
                            <input class="form-control" type="text" value="Lucky">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="example-text-input" class="form-control-label">Alamat</label>
                            <input class="form-control" type="text">
                        </div>
                    </div>

                    <hr class="horizontal dark">

                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="example-text-input" class="form-control-label">Update Foto</label>
                            <input class="form-control" type="file">
                        </div>
                    </div>

                    <hr class="horizontal dark">

                </div>
                <div class="row">
                    <a class="btn btn-dark text-light">Update</a>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>