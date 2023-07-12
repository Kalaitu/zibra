<?= $this->extend('Zibra/Layout'); ?>
<?= $this->section('content'); ?>
<section class="shopping-cart mt-5 mb-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="shopping__cart__table">
                    <table>
                        <thead>
                            <tr>
                                <th>Produk</th>
                                <th>Jumlah</th>
                                <th>Total</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $total = 0;
                            foreach ($datapesanan as $data) :
                            ?>
                                <tr>
                                    <td class="product__cart__item">
                                        <div class="product__cart__item__pic">
                                            <img src="<?= base_url('produk/' . $data->foto_produk) ?>" class="h-50 w-50" alt="">
                                            <p class="mt-3"><?= $data->nama_produk ?><br><span class="mt-2">Rp.<?= $data->harga_produk ?>,-</span></p>
                                        </div>
                                    </td>
                                    <td class="quantity__item">
                                        <div class="quantity">
                                            <div class="">
                                                <?= $data->qty ?>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="cart__price">Rp.<?= $data->harga_produk * $data->qty ?>,-</td>
                                    <td class="cart__close"><a href="<?= base_url('zibra/editcart/' . $data->id_pemesanan) ?>"><i class="fa fa-pencil-square-o text-primary" aria-hidden="true"></i></a></td>
                                </tr>
                            <?php
                                $total = $total + ($data->harga_produk * $data->qty);
                            endforeach
                            ?>
                        </tbody>
                    </table>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="continue__btn">
                            <a href="<?= base_url('zibra/product') ?>" class="w-100 text-center">Lanjutkan Belanja</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="cart__discount">
                    <h6>Reveral codes</h6>
                    <form action="<?= base_url('zibra/checkoutbray') ?>" method="post" id="formcheckout">
                        <input type="text" name="kode_pemesanan" id="" value="<?= $datapesanan[0]->kode_pemesanan ?>" hidden>
                        <input type="text" name="kode_reveral" placeholder="Coupon code">
                    </form>
                </div>
                <?php
                if ($datacustomer->point <= 50) {
                    $jenismember = "Bronze Member";
                    $potongan = 0;
                } else if ($datacustomer->point <= 100) {
                    $jenismember = "Silver Member";
                    $potongan = 0.1;
                } else {
                    $jenismember = "Gold Member";
                    $potongan = 0.15;
                }
                ?>
                <div class="cart__total">
                    <h6>Cart total</h6>
                    <ul class="text-start">
                        <li>Subtotal <span><?= $total ?></span></li>
                        <li>Diskon (<?= $jenismember ?>) <span><?= $total * $potongan ?></span></li>
                        <li>Total <span>Rp. <?= $total - ($total * $potongan) ?></span></li>
                    </ul>
                    <a href="#" onclick="checkout()" class="primary-btn">Lanjutkan Checkout</a>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    function checkout() {
        Swal.fire({
            title: 'Checkout',
            text: "Apakah anda yakin? Pesanan yang sudah di checkout tidak bisa dibatakkan",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yakin!'
        }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: 'Notifikasi',
                    text: 'Checkout berhasil, silahkan lakukan pembayaran!',
                    showConfirmButton: false,
                    timer: 1500
                }).then(function() {
                    var form = document.getElementById('formcheckout');
                    form.submit();
                });
            }
        })
    }
</script>
<?= $this->endSection(); ?>