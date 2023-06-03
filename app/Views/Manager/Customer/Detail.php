<?= $this->extend('Manager/Layout'); ?>
<?= $this->section('content'); ?>
<div class="container-fluid py-4">

    <div class="container-fluid py-4">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header pb-0">
                        <div class="d-flex align-items-center">
                            <p class="mb-0">Detail Customer</p>

                        </div>

                    </div>
                    <div class="card-body">
                        <p class="text-uppercase text-sm">Informasi Customer</p>
                        <div class="row mb-2">
                            <div class="col-md-6 text-center">
                                <div class="form-group">
                                    <div class="form-group">
                                        <img src="<?= base_url('boassets/img/team-1.jpg') ?>" alt="" class="h-80 w-80 rounded">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 ">

                                <label for="example-text-input" class="form-control-label">Nama</label>
                                <input class="form-control" type="text" placeholder="Nama" name="nama" readonly>
                                <label for="example-text-input" class="form-control-label">Alamat</label>
                                <input class="form-control" type="text" placeholder="Alamat" name="alamat" readonly>
                                <label for="example-text-input" class="form-control-label">No HP</label>
                                <input class="form-control" type="number" placeholder="No HP" readonly name="no_hp">
                                <label for="example-text-input" class="form-control-label">Point</label>
                                <input class="form-control" type="number" placeholder="Point" readonly name="point">
                                <label for="example-text-input" class="form-control-label">Kode Refferal</label>
                                <input class="form-control" type="number" placeholder="Kode refferal" readonly name="kode">

                            </div>


                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <?= $this->endSection(); ?>