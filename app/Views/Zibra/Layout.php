<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Male_Fashion Template">
    <meta name="keywords" content="Male_Fashion, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ZibraID</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&display=swap" rel="stylesheet">
    <link href="<?= base_url('boassets/css/nucleo-icons.css') ?>" rel="stylesheet" />
    <link href="<?= base_url('boassets/css/nucleo-svg.css') ?>" rel="stylesheet" />
    <link id="pagestyle" href="<?= base_url('boassets/css/argon-dashboard.css?v=2.0.4') ?>" rel="stylesheet" />
    <!-- Css Styles -->
    <link rel="stylesheet" href="<?= base_url('fashion/css/bootstrap.min.css') ?>" type="text/css">
    <link rel="stylesheet" href="<?= base_url('fashion/css/font-awesome.min.css') ?>" type="text/css">
    <link rel="stylesheet" href="<?= base_url('fashion/css/elegant-icons.css') ?>" type="text/css">
    <link rel="stylesheet" href="<?= base_url('fashion/css/magnific-popup.css') ?>" type="text/css">
    <link rel="stylesheet" href="<?= base_url('fashion/css/nice-select.css') ?>" type="text/css">
    <link rel="stylesheet" href="<?= base_url('fashion/css/owl.carousel.min.css') ?>" type="text/css">
    <link rel="stylesheet" href="<?= base_url('fashion/css/slicknav.min.css') ?>" type="text/css">
    <link rel="stylesheet" href="<?= base_url('fashion/css/style.css') ?>" type="text/css">

</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>
    <!-- Offcanvas Menu Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper">
        <div class="offcanvas__option">
            <div class="offcanvas__links">
                <a href="<?= base_url('login') ?>" class="text-dark <?= empty(session()->get('id_customer')) ? '' : 'd-none' ?>">Login</i></a>
                <a href="<?= base_url('login') ?>" class="text-dark <?= empty(session()->get('id_customer')) ? 'd-none' : '' ?>">Logout</i></a>
            </div>

        </div>
        <div class="offcanvas__nav__option">
            <a href="<?= base_url('zibra/profile') ?>" class="text-dark"> <i class="fa fa-user me-3"></i><?= session()->get('nama_customer') ?></a>
        </div>
        <div id="mobile-menu-wrap"></div>
    </div>
    <!-- Offcanvas Menu End -->

    <!-- Header Section Begin -->
    <header class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-2 px-3">
                    <div class="header__logo ">
                        <a href="<?= base_url('zibra') ?>"><img src="<?= base_url('boassets/img/LOGO.png') ?>" class="img-fluid" alt="" width="200px"></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <nav class="header__menu mobile-menu">
                        <ul>
                            <li class="<?= $aktif1 ?>"><a href="<?= base_url('zibra') ?>">Home</a></li>
                            <li class="<?= $aktif2 ?>"><a href="<?= base_url('zibra/product') ?>">Shop</a></li>
                            <li class="<?= $aktif3 ?>"><a href="<?= base_url('zibra/contact') ?>">Contacts</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="header__nav__option">
                        <a href="#" class="search-switch"><img src="<?= base_url('fashion/img/icon/search.png') ?>" alt=""></a>
                        <a href="<?= base_url('zibra/profile') ?>" class="text-dark"><i class="fa fa-user text-lg me-3"></i><?= session()->get('nama_customer') ?></a>
                        <a href="<?= base_url('login') ?>" class="text-dark d-inline <?= empty(session()->get('id_customer')) ? 'd-none' : '' ?>">Logout</i></a>
                        <a href="<?= base_url('login') ?>" class="text-dark <?= empty(session()->get('id_customer')) ? 'd-inline' : 'd-none' ?>">Login</i></a>
                    </div>
                </div>
            </div>
            <div class="canvas__open"><i class="fa fa-bars"></i></div>
        </div>
    </header>
    <!-- content section -->
    <?= $this->renderSection('content') ?>

    <!-- Footer Section Begin -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer__about">
                        <div class="footer__logo">
                            <a href="#"><img src="<?= base_url('boassets/img/LOGO2.png') ?>" alt=""></a>
                        </div>
                        <p>The customer is at the heart of our unique business model, which includes design.</p>
                        <a href="#"><img src="img/payment.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-2 offset-lg-1 col-md-3 col-sm-6">
                    <div class="footer__widget">
                        <h6>Shopping</h6>
                        <ul>
                            <li><a href="#">Clothing Store</a></li>
                            <li><a href="#">Trending Shoes</a></li>
                            <li><a href="#">Accessories</a></li>
                            <li><a href="#">Sale</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6">
                    <div class="footer__widget">
                        <h6>Shopping</h6>
                        <ul>
                            <li><a href="#">Contact Us</a></li>
                            <li><a href="#">Payment Methods</a></li>
                            <li><a href="#">Delivary</a></li>
                            <li><a href="#">Return & Exchanges</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 offset-lg-1 col-md-6 col-sm-6">
                    <div class="footer__widget">
                        <h6>NewLetter</h6>
                        <div class="footer__newslatter">
                            <p>Be the first to know about new arrivals, look books, sales & promos!</p>
                            <form action="#">
                                <input type="text" placeholder="Your email">
                                <button type="submit"><span class="icon_mail_alt"></span></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="footer__copyright__text">
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        <p>Copyright ©
                            <script>
                                document.write(new Date().getFullYear());
                            </script>2020
                            All rights reserved
                        </p>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Search Begin -->
    <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch">+</div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Search here.....">
            </form>
        </div>
    </div>
    <!-- Search End -->

    <!-- Js Plugins -->
    <script src="<?= base_url('fashion/js/jquery-3.3.1.min.js') ?>"></script>
    <script src="<?= base_url('fashion/js/bootstrap.min.js') ?>"></script>
    <script src="<?= base_url('fashion/js/jquery.nice-select.min.js') ?>"></script>
    <script src="<?= base_url('fashion/js/jquery.nicescroll.min.js') ?>"></script>
    <script src="<?= base_url('fashion/js/jquery.magnific-popup.min.js') ?>"></script>
    <script src="<?= base_url('fashion/js/jquery.countdown.min.js') ?>"></script>
    <script src="<?= base_url('fashion/js/jquery.slicknav.js') ?>"></script>
    <script src="<?= base_url('fashion/js/mixitup.min.js') ?>"></script>
    <script src="<?= base_url('fashion/js/owl.carousel.min.js') ?>"></script>
    <script src="<?= base_url('fashion/js/main.js') ?>"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>