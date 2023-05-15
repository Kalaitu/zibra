<?= $this->extend('Kasir/Layout'); ?>
<?= $this->section('content'); ?>
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-md-12 mt-4">
            <div class="card mb-4">
                <div class="card-header pb-0 px-3">
                    <h6 class="mb-0">Billing Information</h6>
                </div>
                <div class="card-body pt-4 p-3">
                    <div class="row px-3 mx-4">
                        <div class="col col-md-6 col-sm-12 col-xs-12">
                            <p class="text-sm">Kode Transaksi: <span>TRX001 </span> </p>
                            <p class="text-sm">Tanggal Transaksi: <span>23/01/2023 </span> </p>
                            <p class="text-sm">Kasir:<span> Dia (Alex) </span> </p>
                        </div>
                        <div class="col col-md-6 col-sm-12 col-xs-12">
                            <p class="text-sm">Nama Customer: <span>Katak Bizer </span> </p>
                            <p class="text-sm">No Telepon: <span>089213123 </span> </p>
                            <p class="text-sm">Alamat:<span> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Atque ad sunt dolor error quas deleniti non! Nam reprehenderit soluta inventore similique consequatur minus necessitatibus cupiditate dolor nostrum alias, saepe a! </span> </p>
                        </div>
                    </div>

                </div>

            </div>
            <div class="card">
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0 px-5">
                        <table class="table align-items-center justify-content-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Produk</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2 ">Nama Produk</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Harga Satuan</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">Qty</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">Sub Total</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="align-middle text-center">
                                        <div class="d-flex px-2">
                                            <div></div>
                                            <div class="my-auto">
                                                <img src="<?= base_url('boassets/img/team-1.jpg') ?>" class="avatar avatar-sm rounded-circle me-2" alt="spotify">
                                            </div>
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <span class="text-xs font-weight-bold"> Baju Bada</span>
                                    </td>
                                    <td class="">
                                        <span class="text-xs font-weight-bold">15.000</span>
                                    </td>
                                    <td class="align-middle text-center">
                                        <span class="text-xs font-weight-bold">2</span>
                                    </td>
                                    <td class="align-middle text-center">
                                        <div class="d-flex align-items-center justify-content-center">
                                            <span class="text-xs font-weight-bold">30.000</span>
                                        </div>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                        <hr class="horizontal dark">
                        <div class="d-flex">
                            <div class="flex-coloumn">
                                <p class="text-uppercase text-secondary  font-weight-bolder opacity-7"> Total </p>
                            </div>
                            <div class="ms-auto">
                                <p class="text-uppercase text-secondary  font-weight-bolder opacity-7 px-6"> 30.000 </p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-2">
                <div class="card">
                    <div class="card-header">

                        <p> Bukti Transfer</p>
                    </div>
                    <div class="card-body">
                        <div class="col-12 text-center">
                            <img src="<?= base_url('boassets/img/empty.jpg') ?>" alt="" class="h-30 w-30 rounded">
                        </div>
                        <div class="row mt-2">
                            <a href="" class="btn btn-primary   "> Approve</a>
                            <a href="" class="btn btn-light"> Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<?= $this->endSection(); ?>