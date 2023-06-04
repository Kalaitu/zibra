<?= $this->extend('Manager/Layout'); ?>
<?= $this->section('content'); ?>
<div class="container-fluid py-4">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header pb-0">
                    <div class="d-flex align-items-center">
                        <!-- <p class="mb-0">Detail Customer</p> -->
                    </div>
                </div>
                <div class="card-body">
                    <div class="row mb-2">
                        <div class="col-md-5 text-center">
                            <div class="form-group">
                                <div class="form-group">
                                    <img src="<?= base_url('customer/' . $customer['foto_customer']) ?>" alt="" width="100%" class="rounded">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <label for="example-text-input" class="form-control-label">Nama</label>
                            <input class="form-control mb-2" type="text" placeholder="Nama" name="nama" readonly value="<?= $customer['nama_customer'] ?>">
                            <label for="example-text-input" class="form-control-label">Alamat</label>
                            <textarea name="" id="" cols="30" rows="3" class="form-control mb-2" readonly><?= $customer['alamat_customer'] ?></textarea>
                            <label for="example-text-input" class="form-control-label">No HP</label>
                            <input class="form-control mb-2" type="number" placeholder="No HP" readonly name="no_hp" value="<?= $customer['nomor_telepon'] ?>">
                            <label for="example-text-input" class="form-control-label">Point</label>
                            <input class="form-control mb-2" type="number" placeholder="Point" readonly name="point" value="<?= $customer['point'] ?>">
                            <label for="example-text-input" class="form-control-label">Kode Refferal</label>
                            <input class="form-control" type="text" placeholder="Kode refferal" readonly name="kode" value="<?= $customer['kode_reveral'] ?>">
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <?= $this->endSection(); ?>