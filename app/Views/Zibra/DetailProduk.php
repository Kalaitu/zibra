<?= $this->extend('Zibra/Layout'); ?>
<?= $this->section('content'); ?>
<section class="shop-details">
    <div class="product__details__pic px-3" style="margin-bottom: 0 !important;">
        <div class="container">
            <div class="row py-5">
                <div class="col-lg-4 col-md-3 col-sm-12 mt-2">
                    <div class="product__details__pic__item">
                        <img src="<?= base_url('produk/' . $produk['0']->foto_produk) ?>" class="" alt="">
                    </div>
                </div>
                <div class="col-lg-8 col-md-9 col-sm-12 mt-2">
                    <div class="product__details__text text-left">
                        <h4><?= $produk['0']->nama_produk ?></h4>
                        <p><?= $produk['0']->deskripsi_produk ?></p>
                        <h3>Rp.<?= $produk['0']->harga_produk ?></h3>
                    </div>
                    <div class="product__details__option mb-1 text-left">
                        <div class="product__details__option__size">
                            <span>Size:</span>
                            <label for="xxl">xxl
                                <input type="radio" id="xxl">
                            </label>
                            <label class="active" for="xl">xl
                                <input type="radio" id="xl">
                            </label>
                            <label for="l">l
                                <input type="radio" id="l">
                            </label>
                            <label for="sm">s
                                <input type="radio" id="sm">
                            </label>
                        </div>
                    </div>
                    <form action="<?= base_url('zibra/tambahkeranjang') ?>" method="post" id="julahform">
                        <div class="product__details__option mb-1 mt-2 text-left">
                            <div class="product__details__cart__option">
                                <div class="quantity">
                                    <span>Jumlah :</span>
                                    <div class="pro-qty">
                                        <input type="number" value="1" name="qty">
                                    </div>
                                    <input hidden type="text" name="id_produk" value="<?= $produk['0']->id_produk ?>">
                                </div>
                            </div>
                        </div>
                        <div class="product__details__option mb-1 mt-5">
                            <div class="product__details__cart__option">
                                <a href="#" onclick="tambahin()" class="primary-btn w-100">add to cart</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    function tambahin() {
        var form = document.getElementById("julahform");
        form.submit();
    }
</script>
<?= $this->endSection(); ?>