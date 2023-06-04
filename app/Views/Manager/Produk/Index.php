<?= $this->extend('Manager/Layout'); ?>
<?= $this->section('content'); ?>
<div class="container-fluid my-4">
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-body dataTable-container">
                    <div class="table-responsive px-1 py-3">
                        <table class="table table-flush dataTable-table" id="example">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Produk</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2 ">Deskripsi Produk</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($produk as $data) :
                                ?>
                                    <tr>
                                        <td class="">
                                            <div class="d-flex px-2">
                                                <div>
                                                    <img src="<?= base_url('produk/' . $data['foto_produk']) ?>" class="avatar avatar-md rounded-circle me-2" alt="">
                                                </div>
                                                <div class="my-auto">
                                                    <h6 class="mb-0 text-sm"><?= $data['nama_produk'] ?></h6>
                                                    <p class="text-xs font-weight-bold mb-0">Rp.<?= $data['harga_produk'] ?>,-</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="col-sm-12">
                                            <p class="text-xs mb-0"><?= $data['deskripsi_produk'] ?></p>
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