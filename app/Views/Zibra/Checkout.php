<?= $this->extend('Zibra/Layout'); ?>
<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class=" col-lg-6 md-12 sm-12">
            <h6 class="text-sm my-1">Kode Transaksi: <span>KD21231 </span> </h6>
            <h6 class="text-sm my-1">Tanggal Transaksi : <span>23/09/2023 </span> </h6>
            <h6 class="text-sm my-1">No Rekening : <span> BCA 02103123123 a/n Pak ajay </span> </h6>

        </div>
        <div class=" col-lg-6 md-12 sm-12">
            <h6 class="text-sm my-1">Nama Customer: <span>Katak Bizer </span> </h6>
            <h6 class="text-sm my-1">No Telepon: <span>089213123 </span> </h6>
            <h6 class="text-sm mt-3">Alamat:<span> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Atque ad sunt dolor error quas deleniti non! Nam reprehenderit soluta inventore similique consequatur minus necessitatibus cupiditate dolor nostrum alias, saepe a! </span> </h6>
        </div>
    </div>
    <hr color="black">
    <div class="shopping__cart__table">
        <table>
            <thead>
                <tr>
                    <th>Produk</th>
                    <th>Jumlah</th>
                    <th>Sub Total</th>

                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="product__cart__item">
                        <div class="product__cart__item__pic">
                            <img src="<?= base_url('fashion/img/hero/prod1.jpg') ?>" class="h-25 w-25" alt="">
                        </div>
                        <div class="product__cart__item__text">
                            <h6>T-shirt Contrast Pocket</h6>
                            <h5>$98.49</h5>
                        </div>
                    </td>
                    <td class="quantity__item">
                        <div class="quantity">

                            <p> 2</p>

                        </div>
                    </td>
                    <td class="cart__price">$ 30.00</td>

                </tr>

            </tbody>
        </table>
    </div>
    <hr color="black">
    <div class="row my-4">
        <strong> Upload Bukti Pembayaran</strong>
        <input class="form-control my-2" type="file" id="formFile">
        <a class="btn btn-dark text-light">Kirim</a>
    </div>
</div>
<?= $this->endSection(); ?>