<?= $this->extend('Zibra/Layout'); ?>
<?= $this->section('content'); ?>
<div class="container">
    <div class="card shadow-lg mx-0 mx-sm-5 my-5">
        <div class="card-body p-3">
            <div class="row">
                <div class="col-md-2 col-sm-12">
                    <div class="avatar avatar-xl position-relative">
                        <img id="output" src="<?= base_url('/customer/' . $dataprofile->foto_customer) ?>" alt="profile_image" width="" class="w-100 border-radius-lg shadow-sm">
                    </div>
                </div>
                <div class="col-md-10 col-sm-12">
                    <h5 class="mb-1 mt-0 mt-3 mt-sm-0">
                        <?= $dataprofile->nama_customer ?>
                    </h5>
                    <p class="mb-0 font-weight-bold text-sm">
                        <?php
                        if ($dataprofile->point <= 50) {
                            $level = "Bronze";
                        } else if ($dataprofile->point <= 100) {
                            $level = "Silver";
                        } else {
                            $level = "Gold";
                        }
                        ?>
                        Member <?= $level ?> (<?= $dataprofile->point ?>)
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<div class="container">
    <div class="card shadow-lg mx-0 mx-sm-5 mb-5">
        <div class="card">
            <div class="card-header">
                <div class="d-flex align-items-center">
                    <p class="mb-0">Informasi Pengguna</p>
                </div>
            </div>
            <div class="card-body">
                <form action="<?= base_url('zibra/updateprofile') ?>" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="example-text-input" class="form-control-label">Nama Lengkap</label>
                                <input class="form-control" type="text" id="nama" name="nama" value="<?= $dataprofile->nama_customer ?>" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="example-text-input" class="form-control-label">Kode Reveral</label>
                                <input class="form-control" type="text" id="kode" name="kode" value="<?= $dataprofile->kode_reveral ?>" required readonly>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="example-text-input" class="form-control-label">Nomor Telpon</label>
                                <input class="form-control" type="number" id="nomor" name="nomor" value="<?= $dataprofile->nomor_telepon ?>" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="example-text-input" class="form-control-label">Alamat</label>
                                <textarea name="alamat" id="alamat" cols="30" rows="10" class="form-control"><?= $dataprofile->alamat_customer ?></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <hr class="horizontal dark">
                            <div class="form-group">
                                <label for="example-text-input" class="form-control-label">Update Foto</label>
                                <input class="form-control" type="file" id="foto" name="foto">
                            </div>
                            <hr class="horizontal dark">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <button type="submit" class="btn btn-dark text-light w-100">Update</button>
                        </div>
                    </div>
                </form>
                <div class="row mt-3">
                    <div class="col-12">
                        <h5 class="mb-2">Penguna Referal Anda</h5>
                        <table>
                            <?php
                            $no = 1;
                            foreach ($ref as $data) :
                            ?>
                                <tr>
                                    <td><?= $no++ ?>. <?= $data->nama_customer ?></td>
                                </tr>
                            <?php
                            endforeach
                            ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>