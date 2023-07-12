<?php $this->extend('Manager/layout'); ?>
<?php $this->section('content'); ?>
<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <!-- Total Revenue -->
            <div class="col-12 col-lg-12 col-sm-12">
                <div class="card">
                    <div class="row g-0">
                        <div class="col-md-12">
                            <div class="card-body">
                                <div class="table-responsive hidescroll">
                                    <table class="table table-borderless" id="tableproduk">
                                        <thead>
                                            <tr>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($datacustomer as $data) : ?>
                                                <tr>
                                                    <td style="padding-left: 0px !important; padding-right: 0px !important;">
                                                        <div class="card border">
                                                            <div class="row">
                                                                <div class="col-md-3">
                                                                    <img class="card-img card-img-left" src="<?= base_url('customer/' . $data->foto_customer) ?>" alt="Card image">
                                                                </div>
                                                                <div class="col-md-9">
                                                                    <div class="card-body">
                                                                        <p class="card-title fw-bold"><?= $data->nama_customer ?></p>
                                                                        <hr>
                                                                        <p class="card-text">
                                                                            Telpon <?= $data->nomor_telepon ?>
                                                                            <br>
                                                                            <?= $data->alamat_customer ?>
                                                                        </p>
                                                                        <p class="card-text">
                                                                            Level <span class="fw-bold">
                                                                                <?php
                                                                                if ($data->point <= 50) {
                                                                                    echo "Bronze (" . $data->point . " Poin)";
                                                                                } else if ($data->point <= 100) {
                                                                                    echo "Silver (" . $data->point . " Poin)";
                                                                                } else {
                                                                                    echo "Gold (" . $data->point . " Poin)";
                                                                                }
                                                                                ?></span>
                                                                            <br>
                                                                            Kode Reveral <span class="fw-bold"><?= $data->kode_reveral ?></span>
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            <?php endforeach ?>
                                        </tbody>
                                    </table>
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