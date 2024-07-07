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
                                            <?php foreach ($dataproduk as $data) : ?>
                                                <tr>
                                                    <td style="padding-left: 0px !important; padding-right: 0px !important;">
                                                        <div class="card border">
                                                            <div class="row">
                                                                <div class="col-md-3">
                                                                    <img class="card-img card-img-left" src="<?= base_url('produk/' . $data->foto_produk) ?>" alt="Card image">
                                                                </div>
                                                                <div class="col-md-9">
                                                                    <div class="card-body">
                                                                        <div class="d-flex flex-row">
                                                                            <div class="">
                                                                                <p class="card-title fw-bold"><?= $data->nama_produk ?></p>
                                                                            </div>
                                                                            <div class="ms-auto">
                                                                                <p class="card-title fw-bold"><span class="badge <?php if ($data->statusproduk == 'New Arival') {
                                                                                                                                        echo 'bg-label-primary';
                                                                                                                                    } else if ($data->statusproduk == 'Hot Sales') {
                                                                                                                                        echo 'bg-label-danger';
                                                                                                                                    } else {
                                                                                                                                        echo 'bg-label-success';
                                                                                                                                    } ?>"><?= $data->statusproduk ?></span></p>
                                                                            </div>
                                                                        </div>
                                                                        <hr>
                                                                        <p class="card-text">
                                                                            Rp.<?= $data->harga_produk ?>,-
                                                                            <br>
                                                                            <?= $data->deskripsi_produk ?>
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