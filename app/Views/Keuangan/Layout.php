<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="<?= base_url('boassets/img/apple-icon.png') ?>">
    <link rel="icon" type="image/png" href="<?= base_url('fashion/img/LOGOGRAM.png') ?>">
    <title>
        ZIBRA.ID
    </title>
    <!-- Data Table -->
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Nucleo Icons -->
    <link href="<?= base_url('boassets/css/nucleo-icons.css') ?>" rel="stylesheet" />
    <link href="<?= base_url('boassets/css/nucleo-svg.css') ?>" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="<?= base_url('boassets/css/nucleo-svg.css') ?>" rel="stylesheet" />
    <!-- CSS Files -->
    <link id="pagestyle" href="<?= base_url('boassets/css/argon-dashboard.css?v=2.0.4') ?>" rel="stylesheet" />
    <!-- swal 2 -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- jquery -->
    <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.css" integrity="sha512-Z0kTB03S7BU+JFU0nw9mjSBcRnZm2Bvm0tzOX9/OuOuz01XQfOpa0w/N9u6Jf2f1OAdegdIPWZ9nIZZ+keEvBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        .dataTables_filter {
            width: 100% !important;
            /* border-radius: 50%; */
        }
    </style>
</head>

<body class="g-sidenav-show bg-gray-100 ">
    <div class="min-height-300 bg-primary position-absolute w-100">

    </div>
    <aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 " id="sidenav-main">
        <div class="sidenav-header">
            <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
            <a class="navbar-brand m-0" href="">
                <img src="<?= base_url('boassets/img/LOGO.png') ?>" class="navbar-brand-img h-100" alt="main_logo">
            </a>
        </div>
        <hr class="horizontal dark mt-0">
        <div class="collapse navbar-collapse  w-auto" style="overflow-y: hidden; height:70%;" id="sidenav-collapse-main">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link <?= $aktif1 ?>" href="<?= base_url('keuangan') ?>">
                        <div class=" icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="ni ni-tv-2 text-primary text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">Promo</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= $aktif2 ?>" href="<?= base_url('keuangan/produk') ?>">
                        <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="ni ni-cart text-primary text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">Produk</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= $aktif3 ?>" href="<?= base_url('keuangan/transaksi') ?>">
                        <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="ni ni-credit-card text-success text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">Transaksi</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link <?= $aktif4 ?>" href="<?= base_url('/keuangan/report') ?>">
                        <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="fa fa-info-circle text-success text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">Report</span>
                    </a>
                </li>
            </ul>
        </div>
    </aside>

    <main class="main-content position-relative border-radius-lg ">
        <!-- Navbar -->
        <nav class="navbar navbar-main navbar-expand-lg px-0 shadow-none border-radius-xl" id="navbarBlur" data-scroll="false">
            <div class="container-fluid py-1 mt-4">
                <nav aria-label="breadcrumb">
                    <h6 class="text-white font-weight-bolder ms-2 mt-2"><?= $halaman ?></h6>
                </nav>
                <div class="collapse navbar-collapse me-md-0 me-sm-4 mt-sm-0" id="navbar">
                    <ul class="ms-md-auto navbar-nav justify-content-end">
                        <li class="nav-item d-flex align-items-center">
                            <a href="#" onclick="logout()" class="nav-link text-white font-weight-bold px-0">
                                <i class="fa fa-user me-sm-1" aria-hidden="true"></i>
                                <span class="d-sm-inline d-none">Staff Keuangan</span>
                            </a>
                        </li>
                        <li class="nav-item d-xl-none ps-3 pe-0 d-flex align-items-center">
                            <a href="javascript:;" class="nav-link text-white p-0">
                            </a><a href="javascript:;" class="nav-link text-white p-0" id="iconNavbarSidenav">
                                <div class="sidenav-toggler-inner">
                                    <i class="sidenav-toggler-line bg-white"></i>
                                    <i class="sidenav-toggler-line bg-white"></i>
                                    <i class="sidenav-toggler-line bg-white"></i>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- End Navbar -->
        <?= $this->renderSection('content') ?>
    </main>
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
                        window.location = "/";
                    });
                }
            })
        }
    </script>
    <!--   Core JS Files   -->
    <script src="<?= base_url('boassets/js/plugins/chartjs.min.js') ?>"></script>
    <script src="<?= base_url('boassets/js/core/popper.min.js') ?>"></script>
    <script src="<?= base_url('boassets/js/core/bootstrap.min.js') ?>"></script>
    <script src="<?= base_url('boassets/js/plugins/perfect-scrollbar.min.js') ?>"></script>
    <script src="<?= base_url('boassets/js/plugins/smooth-scrollbar.min.js') ?>"></script>
    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="<?= base_url('boassets/js/argon-dashboard.min.js?v=2.0.4') ?>"></script>
    <script src="//cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="//cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>

</body>

</html>