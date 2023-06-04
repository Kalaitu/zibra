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
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2 d-none d-sm-table-cell">No HP</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2 d-none d-sm-table-cell">Point</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2 d-none d-sm-table-cell">Kode Refferal</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2" style="width: 5%;"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($customer as $data) :
                                ?>
                                    <tr>
                                        <td class="">
                                            <div class="d-flex px-2">
                                                <div>
                                                    <img src="<?= base_url('customer/' . $data['foto_customer']) ?>" class="avatar avatar-sm rounded-circle me-2" alt="">
                                                </div>
                                                <div class="my-auto">
                                                    <h6 class="mb-0 text-sm"><?= $data['nama_customer'] ?></h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="d-none d-sm-table-cell">
                                            <p class="text-sm font-weight-bold mb-0"><?= $data['nomor_telepon'] ?></p>
                                        </td>
                                        <td class="d-none d-sm-table-cell">
                                            <span class="text-xs font-weight-bold"><?= $data['point'] ?></span>
                                        </td>
                                        <td class="d-none d-sm-table-cell">
                                            <span class="text-xs font-weight-bold"><?= $data['kode_reveral'] ?></span>
                                        </td>
                                        <td>
                                            <a href="<?= base_url('manager/detail-customer/' . $data['id_customer']) ?>" class="btn btn-link text-primary text-xs mb-0 px-0 ms-4"><i class="fas fa-info-circle  me-1"></i>Details</a>
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