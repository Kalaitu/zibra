<?= $this->extend('Manager/Layout'); ?>
<?= $this->section('content'); ?>
<div class="container-fluid my-4">
    <div class="row">
        <div class="col">
            <a href="<?= base_url('/manager/create-karyawan') ?>" class=" btn btn-light "> Tambah Karyawan </a>
        </div>
    </div>
    <div class=" row">
        <div class="col-xl-4 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
                <div class="card-body p-3">
                    <div class="row">
                        <div class="col-6">
                            <div class="numbers">
                                <p class="text-sm mb-0 text-uppercase font-weight-bold">Kasir</p>
                                <h5 class="font-weight-bolder">
                                    Raisa cans
                                </h5>

                                <p class="mb-0">
                                    <i class="fa fa-phone text-lg opacity-10" aria-hidden="true"></i>
                                    +628912378
                                </p>
                            </div>
                        </div>
                        <div class="col-6 text-center">
                            <img src="<?= base_url('boassets/img/team-1.jpg') ?>" alt="" class="h-80 w-80 rounded-circle mb-4">
                            <a href="<?= base_url('manager/detail-karyawan') ?>">Details </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>



    </div>
</div>
<?= $this->endSection(); ?>