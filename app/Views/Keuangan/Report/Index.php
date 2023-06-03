<?= $this->extend('Keuangan/Layout'); ?>
<?= $this->section('content'); ?>
<div class="container-fluid py-4">
    <div class="row">
        <div class="form">
            <input class="form-control datepicker" placeholder="KONTOL" type="text" onfocus="focused(this)" onfocusout="defocused(this)">
        </div>
        <div class="col">
            <div class="card h-100">
                <div class="card-header pb-0 p-3">
                    <div class="row">
                        <div class="col-6 d-flex align-items-center">
                            <h6 class="mb-0">Invoices</h6>
                        </div>

                    </div>
                </div>

                <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>Id-Laporan</th>
                            <th>Tanggal</th>
                            <th>Detail</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>123qweqe</td>
                            <td>13/12/2019</td>
                            <td>Details</td>
                        </tr>
                        <tr>
                            <td>123qweqe</td>
                            <td>11/12/2019</td>
                            <td>Details</td>
                        </tr>
                        <tr>
                            <td>123qweqe</td>
                            <td>05/12/2019</td>
                            <td>Details</td>
                        </tr>


                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</div>
</div>

</div>

<?= $this->endSection(); ?>