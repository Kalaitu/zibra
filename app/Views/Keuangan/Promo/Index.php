<?= $this->extend('Keuangan/Layout'); ?>
<?= $this->section('content'); ?>
<div class="container-fluid my-4">
    <div class="row">
        <div class="col-6">
            <a href="<?= base_url('/keuangan/create-promo') ?>" class=" btn btn-light ">Add promo </a>
        </div>
        <div class="col-6">
            <div class="input-group">

                <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
                <input type="text" class="form-control" placeholder="Cari promo">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h6>Promo on ZibraID</h6>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0 px-5">
                        <table class="table align-items-center justify-content-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">promo</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2 ">Deskripsi</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Point</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">Diskon</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">Aksi</th>


                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td align-middle text-center>
                                        <div class="d-flex px-2">
                                            <div></div>
                                            <div class="my-auto">
                                                <h6 class="mb-0 text-sm">Spotify</h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td align-middle text-center>
                                        <span class="text-xs font-weight-bold">Lorem ipsum dolor, sit amet consectetur adipisicing elit.</span>
                                    </td>
                                    <td align-middle text-center>
                                        <span class="text-xs font-weight-bold">33</span>
                                    </td>
                                    <td align-middle text-center>
                                        <span class="text-xs font-weight-bold">33%</span>
                                    </td>
                                    <td class="align-middle text-center">
                                        <div class="d-flex align-items-center justify-content-center">
                                            <a href="<?= base_url('keuangan/detail-promo') ?>"> <span class="text-xs font-weight-bold">Detail</span> </a>
                                        </div>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>