<?php $this->extend('Keuangan/layout'); ?>
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
                                    <div class="col-md-12">
                                        <form method="post" action="<?= base_url('keuangan/promo/update') ?>" enctype="multipart/form-data">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-md-12 col-sm-12">
                                                        <label for="nama_promo" class="form-label">Nama Promo</label>
                                                        <input type="text" class="form-control" id="nama_promo" name="nama_promo" placeholder="Masukan Nama Promo" value="<?= $datapromo->nama_promo ?>" required>
                                                        <input type="text" class="form-control" id="id_promo" name="id_promo" placeholder="Masukan Nama Promo" value="<?= $datapromo->id_promo ?>" required hidden>
                                                    </div>
                                                    <div class="col-md-12 col-sm-12 mt-3">
                                                        <label for="poin" class="form-label">Poin yang Harus Dikumpulkan</label>
                                                        <input type="number" class="form-control" id="poin" name="poin" placeholder="Poin yang harus Dikumpulkan" value="<?= $datapromo->poin ?>"  required>
                                                    </div>
                                                    <div class="col-md-12 col-sm-12 mt-3">
                                                        <label for="diskon" class="form-label">Diskon yang Didapat (dalam %)</label>
                                                        <input type="number" class="form-control" id="diskon" name="diskon" placeholder="Diskon yang Didapat" value="<?= $datapromo->diskon ?>" required>
                                                    </div>
                                                    <div class="col-md-12 mt-3 mt-sm-5">
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