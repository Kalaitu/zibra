<!DOCTYPE html>
<html lang="zxx" translate="no">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Male_Fashion Template">
    <meta name="keywords" content="Male_Fashion, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ZibraID</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/bootstrap-icons.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&display=swap" rel="stylesheet">
    <!-- Css Styles -->
    <link rel="stylesheet" href="<?= base_url('fashion/css/bootstrap.min.css') ?>" type="text/css">
    <link rel="stylesheet" href="<?= base_url('fashion/css/font-awesome.min.css') ?>" type="text/css">
    <link rel="stylesheet" href="<?= base_url('fashion/css/elegant-icons.css') ?>" type="text/css">
    <link rel="stylesheet" href="<?= base_url('fashion/css/magnific-popup.css') ?>" type="text/css">
    <link rel="stylesheet" href="<?= base_url('fashion/css/nice-select.css') ?>" type="text/css">
    <link rel="stylesheet" href="<?= base_url('fashion/css/owl.carousel.min.css') ?>" type="text/css">
    <link rel="stylesheet" href="<?= base_url('fashion/css/slicknav.min.css') ?>" type="text/css">
    <link rel="stylesheet" href="<?= base_url('fashion/css/style.css') ?>" type="text/css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <meta name="theme-color" content="#343A3F" />
    <link rel="manifest" href="<?= base_url('assets/js/web.webmanifest') ?>" />
    <link rel="shortcut icon" href="<?= base_url('assets/images/icon.png') ?>" />
</head>

<body class="hidescroll">
    <!-- Offcanvas Menu Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper">
        <div class="offcanvas__option">
            <div class="offcanvas__links">
                <img src="<?= base_url('fashion/img/logologinregister.png') ?>" alt="" class="mb-3">
                <a href="#" onclick='logout()' class="fw-bold text-dark <?= (session()->get('statuscustomer') == null ? 'd-none' : 'd-inline') ?>">Logout</i></a>
                <a href="<?= base_url('login') ?>" class="fw-bold text-dark <?= (session()->get('statuscustomer') ? 'd-none' : 'd-inline') ?>">Login</i></a>
            </div>
        </div>
        <div class="offcanvas__nav__option text-left">
            <p>
                <a href="<?= base_url('zibra/profile') ?>" class="fw-bold text-dark <?= (session()->get('statuscustomer') == null ? 'd-none' : 'd-inline') ?>"><i class="fa fa-user-circle-o me-3"></i><?= session()->get('nama') ?></a>
            </p>
            <p>
                <a href="#" onclick='logout()' class="fw-bold text-dark <?= (session()->get('statuscustomer') == null ? 'd-none' : 'd-inline') ?>"><i class="fa fa-shopping-cart me-3"></i>Keranjang</a>
            </p>
        </div>
        <div id="mobile-menu-wrap"></div>
    </div>
    <!-- Offcanvas Menu End -->

    <!-- Header Section Begin -->
    <header class="header shadow">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-2 px-3">
                    <div class="header__logo ">
                        <a href="<?= base_url('zibra') ?>"><img src="<?= base_url('fashion/img/logologinregister.png') ?>" class="img-fluid" alt="" width="200px"></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <nav class="header__menu mobile-menu">
                        <ul>
                            <li class="<?= $aktif1 ?>"><a href="<?= base_url('zibra') ?>">Home</a></li>
                            <li class="<?= $aktif2 ?>"><a href="<?= base_url('zibra/product') ?>">Shop</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="header__nav__option">
                        <a href="<?= base_url('zibra/profile') ?>" class="text-dark <?= (session()->get('statuscustomer') == null ? 'd-none' : 'd-inline') ?>"><i class="fa fa-user-circle-o text-lg me-3"></i><?= session()->get('nama') ?></a>
                        <a href="<?= base_url('zibra/cart') ?>" class="text-dark <?= (session()->get('statuscustomer') == null ? 'd-none' : 'd-inline') ?>">Keranjang</a>
                        <a href="<?= base_url('login') ?>" class="fw-bold text-dark <?= (session()->get('statuscustomer') ? 'd-none' : 'd-inline') ?>">Login</i></a>
                        <a href="#" onclick='logout()' class="fw-bold text-dark <?= (session()->get('statuscustomer') == null ? 'd-none' : 'd-inline') ?>">Logout</i></a>
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

    <script>
        function logout() {
            Swal.fire({
                title: 'Logout',
                text: "Apakah anda yakin?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Logout!'
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire({
                        position: 'center',
                        icon: 'success',
                        text: 'Berhasil Logout',
                        showConfirmButton: false,
                        timer: 2000
                    }).then(function() {
                        window.location = "<?= base_url('logout') ?>";
                    });
                }
            })
        }
    </script>

    <script>
        $('input[type="file"]').change(function(e) {
            var output = document.getElementById('output');
            output.src = URL.createObjectURL(event.target.files[0]);
        });
    </script>
</body>

</html>