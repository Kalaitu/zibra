<?= $this->extend('Zibra/Layout'); ?>
<?= $this->section('content'); ?>
<section class="shop-details">
    <div class="product__details__pic">
        <div class="container">

            <div class="row">
                <div class="col-lg-4 col-md-3 mt-2 pr-2">
                    <div class="product__details__pic__item">
                        <img src="<?= base_url('fashion/img/hero/prod1.jpg') ?>" class="" alt="">
                    </div>
                </div>
                <div class="col-lg-8 col-md-9 mt-2">
                    <div class="product__details__text text-left mx-5">
                        <h4>Hooded thermal anorak</h4>
                        <p>Coat with quilted lining and an adjustable hood. Featuring long sleeves with adjustable
                            cuff tabs, adjustable asymmetric hem with elastic side tabs and a front zip fastening
                            with placket.</p>
                        <h3>$270.00 <span>70.00</span></h3>
                    </div>
                    <div class="product__details__option mb-1 text-left mx-5">
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
                    <div class="product__details__option mb-1 text-left mx-5">
                        <div class="product__details__option__color">
                            <span>Color:</span>
                            <label class="c-1" for="sp-1">
                                <input type="radio" id="sp-1">
                            </label>
                            <label class="c-2" for="sp-2">
                                <input type="radio" id="sp-2">
                            </label>
                            <label class="c-3" for="sp-3">
                                <input type="radio" id="sp-3">
                            </label>
                            <label class="c-4" for="sp-4">
                                <input type="radio" id="sp-4">
                            </label>
                            <label class="c-9" for="sp-9">
                                <input type="radio" id="sp-9">
                            </label>
                        </div>
                    </div>
                    <div class="product__details__option mb-1 text-left mx-5">
                        <div class="product__details__cart__option">
                            <div class="quantity">
                                <span>Jumlah :</span>
                                <div class="pro-qty">
                                    <input type="text" value="1">
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="product__details__option mb-1 text-left mx-5">
                        <div class="product__details__cart__option">
                            <a href="#" class="primary-btn">add to cart</a>
                        </div>
                    </div>

                </div>
            </div>


        </div>
    </div>

</section>
<?= $this->endSection(); ?>