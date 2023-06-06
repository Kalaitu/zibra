<?= $this->extend('Zibra/Layout'); ?>
<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <ul class="filter__controls">
                <li class="active" data-filter="*">Our Products</li>
                <li data-filter=".new-arrivals">New Arrivals</li>
                <li data-filter=".hot-sales">Hot Sales</li>
            </ul>
        </div>
    </div>
    <div class="row product__filter">
        <?php
        foreach ($produk as $data) :
        ?>
            <div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix <?= $data->status == 'New Arival' ? 'new-arrivals' : 'hot-sales' ?>">
                <div class="product__item">
                    <div class="product__item__pic set-bg" data-setbg="<?= base_url('produk/' . $data->foto_produk) ?>">
                        <span class="label"><?= $data->status == 'New Arival' ? 'New' : 'Hot Sales' ?></span>
                    </div>
                    <div class="product__item__text">
                        <h6><?= $data->nama_produk ?></h6>
                        <a href="#" class="add-cart">+ Tambah Keranjang</a>
                        <h5>Rp.<?= $data->harga_produk ?>,-</h5>
                    </div>
                </div>
            </div>
        <?php
        endforeach
        ?>
    </div>
</div>
<?= $this->endSection(); ?>