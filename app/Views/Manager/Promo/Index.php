<?= $this->extend('Manager/Layout'); ?>
<?= $this->section('content'); ?>
<div class="container-fluid my-4">
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-body dataTable-container">
                    <div class="px-1 py-3">
                        <table class="table table-flush dataTable-table" style="width: 100%;" id="example">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Customer</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($promo as $data) :
                                ?>
                                    <tr class="">
                                        <td class="row my-2">
                                            <div class="col-12">
                                                <div class="d-flex px-2">
                                                    <div>
                                                        <img src="<?= base_url('promo/' . $data['foto_promo']) ?>" class="border-radius-lg shadow me-2" alt="" width="80px" height="80px">
                                                    </div>
                                                    <div class="">
                                                        <h6 class="mb-0 text-sm"><?= $data['nama_promo'] ?></h6>
                                                        <p class="text-xs font-weight-bold mb-0">Diskon <?= $data['diskon'] ?> %</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 mt-2">
                                                <p class="text-sm mb-0 text-wrap px-2"><?= $data['deskripsi_promo'] ?></p>
                                                <p class="text-sm mb-0 text-wrap px-2">Untuk menjadi member ini dibutuhkan poin sebesar <?= $data['poin'] ?> Poin</p>
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