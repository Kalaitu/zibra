<?php $this->extend('Keuangan/layout'); ?>
<?php $this->section('content'); ?>
<div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-12">
                <div class="card shadow">
                    <div class="d-flex flex-row">
                        <div class="">
                            <h6 class="card-header">Detail Transaksi</h6>
                        </div>
                    </div>
                    <div class="p-4">
                        <div class="row mb-5">
                            <div class="col-md-12">
                                <div class="row mb-3">
                                    <div class="col-md-12">
                                        <div class="d-flex flex-row">
                                            <div class="">
                                                <h4>Invoice</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4 col-sm-12">
                                        <table class="">
                                            <tr>
                                                <td style="width: 150px;">Invoice</td>
                                                <td>:</td>
                                                <td><?= $datatransaksi[0]->kode_pemesanan ?></td>
                                            </tr>
                                            <tr>
                                                <td>Tanggal Pembayaran</td>
                                                <td>:</td>
                                                <td><?= $datatransaksi[0]->tanggal_pemesanan ?></td>
                                            </tr>
                                            <tr>
                                                <td>Tanggal Invoice</td>
                                                <td>:</td>
                                                <td>
                                                    <?php $currentDate2 = date('Y-m-d');
                                                    echo $currentDate2 ?>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                    <div class="col-md-8 col-sm-12">
                                        <table>
                                            <tr>
                                                <td style="width: 150px;">Nama Customer</td>
                                                <td>:</td>
                                                <td><?= $datatransaksi[0]->nama_customer ?></td>
                                            </tr>
                                            <tr>
                                                <td>Nomor Telpon</td>
                                                <td>:</td>
                                                <td><?= $datatransaksi[0]->nomor_telepon ?></td>
                                            </tr>
                                            <tr>
                                                <td style="vertical-align: top !important;">Alamat</td>
                                                <td style="vertical-align: top !important;">:</td>
                                                <td>
                                                    <?= $datatransaksi[0]->alamat_customer ?>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="table-responsive hidescroll">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Produk</th>
                                                <th scope="col">Harga</th>
                                                <th scope="col">Qty</th>
                                                <th scope="col">Sub Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $no = 0;
                                            $total = 0;
                                            $qty2 = 0;
                                            foreach ($datatransaksi as $data) :
                                                $no++;
                                                $total = $total + ($data->harga_produk * $data->qty);
                                                $qty2 = $qty2 + $data->qty;
                                            ?>
                                                <tr>
                                                    <th scope="row"><?= $no ?></th>
                                                    <td><?= $data->nama_produk ?></td>
                                                    <td><?= $data->harga_produk ?></td>
                                                    <td><?= $data->qty ?></td>
                                                    <td><?= $data->harga_produk * $data->qty ?></td>
                                                </tr>
                                            <?php
                                            endforeach
                                            ?>
                                            <tr class="fw-bold">
                                                <td colspan="3">
                                                    Total
                                                </td>
                                                <td>
                                                    <?= $qty2 ?>
                                                </td>
                                                <td>
                                                    <?= $total ?>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-5">
                            <div class="col-12">
                                <p>Bukti Pembayaran</p>
                                <img src="<?= base_url('pembayaran/' . $datatransaksi[0]->bukti_pembayaran) ?>" alt="" width="100%" class="rounded">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->endSection(); ?>