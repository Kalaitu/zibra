<?php $this->extend('Gudang/layout'); ?>
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
                                        <img class="card-img card-img-left" id="output" src="<?= base_url('produk/' . $dataproduk->foto_produk) ?>" alt="Card image">
                                    </div>
                                    <div class="col-md-9">
                                        <form method="post" action="<?= base_url('gudang/produk/update') ?>" enctype="multipart/form-data">
                                            <input type="text" name="id_produk" id="id_produk" hidden value="<?= $dataproduk->id_produk ?>">
                                            <div class="card-body">
                                                <div class="w-100">
                                                    <p class="card-title fw-bold">
                                                        <input type="text" class="form-control" id="namaproduk" name="namaproduk" placeholder="Masukan Nama Produk" required value="<?= $dataproduk->nama_produk ?>">
                                                    </p>
                                                </div>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-md-4 col-sm-12 mb-3">
                                                        <input type="number" class="form-control" id="hargaproduk" name="hargaproduk" placeholder="Harga Produk (Rp.0,-)" required value="<?= $dataproduk->harga_produk ?>">
                                                    </div>
                                                    <div class="col-md-4 col-sm-12 mb-3">
                                                        <select id="statusproduk" name="statusproduk" class="form-select" required>
                                                            <option selected disabled>Pilih Status Produk</option>
                                                            <option value="New Arival" <?= ($dataproduk->statusproduk == 'New Arival') ? 'selected' : '' ?>>New Arival</option>
                                                            <option value="Hot Sales" <?= ($dataproduk->statusproduk == 'Hot Sales') ? 'selected' : '' ?>>Hot Sales</option>
                                                            <option value="Reguler" <?= ($dataproduk->statusproduk == 'Reguler') ? 'selected' : '' ?>>Reguler</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4 col-sm-12 mb-3">
                                                        <input class="form-control" type="file" id="fotoproduk" name="fotoproduk">
                                                    </div>
                                                    <div class="col-md-8 col-sm-12">
                                                        <textarea class="form-control" id="deskripsiproduk" name="deskripsiproduk" rows="3" placeholder="Masuan Deskripsi Produk" required><?= $dataproduk->deskripsi_produk ?></textarea>
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