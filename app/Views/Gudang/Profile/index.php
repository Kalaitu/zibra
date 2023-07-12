<?php $this->extend('Gudang/layout'); ?>
<?php $this->section('content'); ?>
<!-- Content wrapper -->
<div class="content-wrapper">
    <?php
    if (!empty(session()->getFlashdata('updatekaryawan'))) {
    ?>
        <script>
            Swal.fire({
                position: 'center',
                icon: 'success',
                title: 'Notifikasi',
                text: "Berhasil udpate profile!",
                showConfirmButton: false,
                timer: 1500
            });
        </script>
    <?php
    }
    ?>
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-12 col-lg-12 col-sm-12">
                <div class="card">
                    <div class="row g-0">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="row">
                                    <div class="col-md-3">
                                        <img class="card-img card-img-left" id="output" src="<?= base_url('karyawan/' . $datakaryawan->foto_karyawan) ?>" alt="Card image">
                                    </div>
                                    <div class="col-md-9">
                                        <form method="post" action="<?= base_url('gudang/profile/update') ?>" enctype="multipart/form-data">
                                            <div class="card-body">
                                                <div class="w-100">
                                                    <p class="card-title fw-bold">
                                                        <input type="text" class="form-control" id="nama_karyawan" name="nama_karyawan" placeholder="Masukan Nama Karyawan" required value="<?= $datakaryawan->nama_karyawan ?>">
                                                    </p>
                                                </div>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-md-3 col-sm-12 mb-3">
                                                        <input type="number" class="form-control" id="nomor_telpon" name="nomor_telpon" placeholder="Masukan Nomor Telpon" required value="<?= $datakaryawan->nomor_telpon ?>">
                                                    </div>
                                                    <div class="col-md-3 col-sm-12 mb-3">
                                                        <input type="text" class="form-control" id="username" name="username" placeholder="Masukan Username" required value="<?= $datakaryawan->username ?>">
                                                    </div>
                                                    <div class="col-md-3 col-sm-12 mb-3">
                                                        <input type="password" class="form-control" id="password" name="password" placeholder="Masukan Password" required value="<?= $datakaryawan->password ?>">
                                                    </div>
                                                    <div class="col-md-3 col-sm-12 mb-3">
                                                        <input class="form-control" type="file" id="foto_karyawan" name="foto_karyawan">
                                                    </div>
                                                    <div class="col-md-8 col-sm-12">
                                                        <textarea class="form-control" id="alamat_karyawan" name="alamat_karyawan" rows="3" placeholder="Masuan Alamat Karyawan" required><?= $datakaryawan->alamat_karyawan ?></textarea>
                                                    </div>
                                                    <div class="col-md-4 mt-3 mt-sm-5">
                                                        <button type="submit" id="simpan" class="btn btn-primary w-100">Update</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ Total Revenue -->
        </div>
    </div>
    <!-- / Content -->

    <!-- Footer -->
    <footer class="content-footer footer bg-footer-theme text-center">
        <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
            <div class="mb-2 mb-md-0">
                ©
                <script>
                    document.write(new Date().getFullYear());
                </script>
                , made with ❤️ by
                <a href="#" class="footer-link fw-bolder">ZibraID</a>
            </div>
        </div>
    </footer>
    <!-- / Footer -->

    <div class="content-backdrop fade"></div>
</div>
<!-- Content wrapper -->
<?php $this->endSection(); ?>