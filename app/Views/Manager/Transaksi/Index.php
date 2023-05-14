<?= $this->extend('Manager/Layout'); ?>
<?= $this->section('content'); ?>
<div class="container-fluid py-4">
    <div class="row">
        <div class="col">
            <div class="card h-100">
                <div class="card-header pb-0 p-3">
                    <div class="row">
                        <div class="col-6 d-flex align-items-center">
                            <h6 class="mb-0">Invoices</h6>
                        </div>

                    </div>
                </div>
                <div class="card-body p-3 pb-0 ">
                    <ul class="list-group">
                        <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                            <div class="d-flex flex-column">
                                <h6 class="mb-1 text-dark font-weight-bold text-sm">22 Mei 2023</h6>
                                <span class="text-xs">#KD232131</span>
                            </div>
                            <div class="d-flex align-items-center text-sm text-success">
                                <span class="badge badge-sm bg-gradient-success">Success</span>
                                <a href="<?= base_url('manager/detail-transaksi') ?>" class="btn btn-link text-dark text-sm mb-0 px-0 ms-4"><i class="fas fa-info-circle  me-1"></i> Details</a>
                            </div>

                        </li>
                        <hr class="horizontal dark mx-0">
                        <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                            <div class="d-flex flex-column">
                                <h6 class="mb-1 text-dark font-weight-bold text-sm">21 Mei 2023</h6>
                                <span class="text-xs">#KD232131</span>
                            </div>
                            <div class="d-flex align-items-center text-sm text-danger">
                                <span class="badge badge-sm bg-gradient-danger">Pending</span>
                                <a href="<?= base_url('manager/detail-transaksi') ?>" class="btn btn-link text-dark text-sm mb-0 px-0 ms-4"><i class="fas fa-info-circle  me-1"></i> Details</a>
                            </div>
                        </li>
                        <hr class="horizontal dark mx-0">

                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

</div>

<?= $this->endSection(); ?>