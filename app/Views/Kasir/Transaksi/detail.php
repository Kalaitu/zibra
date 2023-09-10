<?php $this->extend('Kasir/layout'); ?>
<?php $this->section('content'); ?>
<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <!-- Total Revenue -->
            <div class="col-12 col-lg-12 col-sm-12">
                <div class="card p-5">
                    <div class="row">
                        <div class="col-12 mb-3">
                            <h4 class="fw-bold">INVOICE TRANSAKSI <?= $datapemesanan[0]->kode_pemesanan ?></h4>
                        </div>
                        <div class=" col-lg-6 md-12 sm-12">
                            <table>
                                <tr>
                                    <td style="width: 120px;">Kode Transaksi</td>
                                    <td>:</td>
                                    <td><?= $datapemesanan[0]->kode_pemesanan ?></td>
                                </tr>
                                <tr>
                                    <td>Tanggal</td>
                                    <td>:</td>
                                    <td><?= $datapemesanan[0]->tanggal_pemesanan ?></td>
                                </tr>
                            </table>
                        </div>
                        <div class=" col-lg-6 md-12 sm-12">
                            <table>
                                <tr>
                                    <td style="width: 120px;">Nama Customer</td>
                                    <td>:</td>
                                    <td><?= $datapemesanan[0]->nama_customer ?></td>
                                </tr>
                                <tr>
                                    <td>No Telepon</td>
                                    <td>:</td>
                                    <td><?= $datapemesanan[0]->nomor_telepon ?></td>
                                </tr>
                                <tr>
                                    <td valign="top">Alamat</td>
                                    <td valign="top">:</td>
                                    <td><?= $datapemesanan[0]->alamat_customer ?></td>
                                </tr>
                            </table>
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