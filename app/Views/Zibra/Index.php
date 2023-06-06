<?= $this->extend('Zibra/Layout'); ?>
<?= $this->section('content'); ?>
<!-- Hero Section Begin -->
<section class="hero">
    <div class="hero__slider owl-carousel">
        <div class="hero__items set-bg" data-setbg="<?= base_url('fashion/img/hero/bg1.png') ?>">
            <div class="container">
                <div class="row">
                    <div class="col-xl-5 col-lg-7 col-md-8">
                        <div class="hero__text">
                            <h6>Summer Collection</h6>
                            <h2>Fall - Winter Collections 2030</h2>
                            <p>A specialist label creating luxury essentials. Ethically crafted with an unwavering
                                commitment to exceptional quality.</p>
                            <a href="#" class="primary-btn">Shop now <span class="arrow_right"></span></a>
                            <div class="hero__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-pinterest"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="hero__items set-bg" data-setbg="<?= base_url('fashion/img/hero/bg2.png') ?>">
            <div class="container">
                <div class="row">
                    <div class="col-xl-5 col-lg-7 col-md-8">
                        <div class="hero__text">
                            <h6>Summer Collection</h6>
                            <h2>Fall - Winter Collections 2030</h2>
                            <p>A specialist label creating luxury essentials. Ethically crafted with an unwavering
                                commitment to exceptional quality.</p>
                            <a href="#" class="primary-btn">Shop now <span class="arrow_right"></span></a>
                            <div class="hero__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-pinterest"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Hero Section End -->
<!-- Banner Section Begin -->
<section class="banner spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 offset-lg-4">
                <div class="banner__item">
                    <div class="banner__item__pic">
                        <img src="<?= base_url('fashion/img/hero/front.jpg') ?>" alt="">
                    </div>
                    <div class="banner__item__text">

                        <a href="#">Shop now</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="banner__item banner__item--middle">
                    <div class="banner__item__pic">
                        <img src="<?= base_url('fashion/img/hero/bird.jpg') ?>" alt="">
                    </div>
                    <div class="banner__item__text">
                        <h2>Accessories</h2>
                        <a href="#">Shop now</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="banner__item banner__item--last">
                    <div class="banner__item__pic">
                        <img src="<?= base_url('fashion/img/hero/045.jpg') ?>" class="h-80 w-80" alt="">
                    </div>
                    <div class="banner__item__text">
                        <h2>Shoes Spring 2030</h2>
                        <a href="#">Shop now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Banner Section End -->

<!-- Product Section Begin -->
<section class="product spad">
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
            foreach ($produkhotsales as $data) :
            ?>
                <div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix hot-sales">
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
            <?php
            foreach ($produknewarival as $data) :
            ?>
                <div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix new-arrivals">
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
</section>
<!-- Latest Blog Section End -->
<?= $this->endSection(); ?>