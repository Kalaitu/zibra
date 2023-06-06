<?= $this->extend('Keuangan/Layout'); ?>
<?= $this->section('content'); ?>
<div class="container-fluid my-4">
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-body dataTable-container">
                    <div class="px-1 py-3">
                        <!-- <p class="px-2 text-sm"><a href="<?= base_url('gudang/create-produk') ?>" class="text-primary">Tambah Data Produk</a></p> -->
                        <table class="table table-flush dataTable-table" style="width: 100%;" id="example">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Produk</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($produk as $data) :
                                ?>
                                    <tr class="">
                                        <td class="row my-2">
                                            <div class="col-12">
                                                <div class="d-flex px-2">
                                                    <div>
                                                        <img src="<?= base_url('produk/' . $data['foto_produk']) ?>" class="border-radius-lg shadow me-2" alt="" width="80px" height="80px">
                                                    </div>
                                                    <div class="">
                                                        <h6 class="mb-0 text-sm ms-2"><?= $data['nama_produk'] ?></h6>
                                                        <p class="text-xs font-weight-bold mb-0 ms-2">Rp.<?= $data['harga_produk'] ?>,-</p>
                                                        <p class="text-xs font-weight-bold mb-0 ms-2"><?= $data['status'] ?> Product</p>
                                                        <p class="text-xs font-weight-bold mb-0 ms-2 mt-2"><a href="<?= base_url('keuangan/detail-produk') . '/' . $data['id_produk'] ?>" class="text-primary">Details </a></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 mt-2">
                                                <p class="text-sm mb-0 text-wrap px-2"><?= $data['deskripsi_produk'] ?></p>
                                            </div>
                                        </td>
                                    </tr>
                                <?php
                                endforeach
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        $('#example').DataTable({
            paging: false,
            ordering: false,
            info: false,
        });
    });
</script>
<?= $this->endSection(); ?>