<?= $this->extend('Manager/Layout'); ?>
<?= $this->section('content'); ?>
<div class="container-fluid my-4">
    <div class="row mb-3">
        <div class="col-12 text-end">
            <a href="<?= base_url('/manager/create-karyawan') ?>" class="text-white fw-bold"> Tambah Karyawan </a>
        </div>
    </div>
    <div class=" row">
        <?php
        foreach ($karyawan as $data) :
        ?>
            <div class="col-xl-4 col-sm-6 mb-xl-0 mb-4">
                <div class="card">
                    <div class="card-body p-3">
                        <div class="row" style="height: 130px;">
                            <div class="col-6">
                                <div class="d-flex align-items-start flex-column mb-3" style="height: 130px;">
                                    <div class="mb-auto">
                                        <div class="numbers">
                                            <p class="text-sm mb-0 text-uppercase font-weight-bold"> <?= $data->role ?></p>
                                            <h5 class="font-weight-bolder">
                                                <?= $data->nama_karyawan ?>
                                            </h5>
                                        </div>
                                    </div>
                                    <div class=""><a href="<?= base_url('manager/detail-karyawan') . '/' . $data->id_karyawan ?>" class="text-primary">Details </a></div>
                                </div>
                            </div>
                            <div class="col-6 text-end">
                                <img width="120px" height="120px" src="<?= base_url('karyawan/') . $data->foto_karyawan ?>" alt="" class="rounded-circle mb-1">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php
        endforeach
        ?>
    </div>
</div>
<?= $this->endSection(); ?>