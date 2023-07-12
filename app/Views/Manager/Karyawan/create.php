<?php $this->extend('Manager/layout'); ?>
<?php $this->section('content'); ?>
<!-- Content wrapper -->
<div class="content-wrapper">
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
                                        <img class="card-img card-img-left" id="output" src="<?= base_url('karyawan/dummyfoto.jpg') ?>" alt="Card image">
                                    </div>
                                    <div class="col-md-9">
                                        <form method="post" action="<?= base_url('manager/karyawan/add') ?>" enctype="multipart/form-data">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-md-9 col-sm-12">
                                                        <input type="text" class="form-control" id="nama_karyawan" name="nama_karyawan" placeholder="Masukan Nama Karyawan" required>
                                                    </div>
                                                    <div class="col-md-3 col-sm-12">
                                                        <input class="form-control w-100" type="file" id="foto_karyawan" name="foto_karyawan">
                                                    </div>
                                                </div>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-md-3 col-sm-12 mb-3">
                                                        <input type="number" class="form-control" id="nomor_telpon" name="nomor_telpon" placeholder="Masukan Nomor Telpon" required>
                                                    </div>
                                                    <div class="col-md-3 col-sm-12 mb-3">
                                                        <input type="text" class="form-control" id="username" name="username" placeholder="Masukan Username" required>
                                                    </div>
                                                    <div class="col-md-3 col-sm-12 mb-3">
                                                        <input type="password" class="form-control" id="password" name="password" placeholder="Masukan Password" required>
                                                    </div>
                                                    <div class="col-md-3 col-sm-12 mb-3">
                                                        <select id="role" name="role" class="form-select" required>
                                                            <option selected disabled>Pilih Role</option>
                                                            <option value="Kasir">Kasir</option>
                                                            <option value="Staff Gudang">Staff Gudang</option>
                                                            <option value="Staff Keuangan">Staff Keuangan</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-9 col-sm-12">
                                                        <textarea class="form-control" id="alamat_karyawan" name="alamat_karyawan" rows="3" placeholder="Masuan Alamat Karyawan" required></textarea>
                                                    </div>
                                                    <div class="col-md-3 mt-3 mt-sm-5">
                                                        <button type="submit" id="simpan" class="btn btn-primary w-100">Tambah</button>
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