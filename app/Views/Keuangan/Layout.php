<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="../assets/" data-template="vertical-menu-template-free">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
  <title>ZibraID | Staff Keuangan</title>
  <meta name="description" content="" />
  <link rel="icon" type="image/x-icon" href="<?= base_url('fashion/img/logo.png') ?>" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet" />
  <link href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="<?= base_url('assets/vendor/fonts/boxicons.css') ?>" />
  <link rel="stylesheet" href="<?= base_url('assets/vendor/css/core.css') ?>" class="template-customizer-core-css" />
  <link rel="stylesheet" href="<?= base_url('assets/vendor/css/theme-default.css') ?>" class="template-customizer-theme-css" />
  <link rel="stylesheet" href="<?= base_url('assets/css/demo.css') ?>" />
  <link rel="stylesheet" href="<?= base_url('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') ?>" />
  <link rel="stylesheet" href="<?= base_url('assets/vendor/libs/apex-charts/apex-charts.css') ?>" />
  <script src="<?= base_url('assets/vendor/js/helpers.js') ?>"></script>
  <script src="<?= base_url('assets/js/config.js') ?>"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <style>
    .pull-left {
      float: right !important;
    }

    div.dataTables_wrapper div.dataTables_filter input {
      width: 310px !important;
      margin: 0px 0px 0px 0px !important;
    }
  </style>
</head>

<body class="hidescroll">
  <?php if (session()->get('statuskaryawan') != true) : ?>
    <script>
      window.location.href = '<?= base_url('login') ?>';
    </script>
  <?php endif; ?>
  <!-- Layout wrapper -->
  <div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
      <!-- Menu -->

      <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
        <div class="app-brand demo">
          <a href="#" class="app-brand-link">
            <span class="app-brand-logo demo">
              <img src="<?= base_url('fashion/img/logologinregister.png') ?>" alt="" width="200px">
            </span>
          </a>

          <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
          </a>
        </div>

        <div class="menu-inner-shadow"></div>

        <ul class="menu-inner py-1">
          <li class="menu-item <?= $aktif1 ?>">
            <a href="<?= base_url('keuangan/promo') ?>" class="menu-link">
              <i class="menu-icon tf-icons bx bx-cube-alt"></i>
              <div data-i18n="Analytics">Promo</div>
            </a>
          </li>
          <li class="menu-item <?= $aktif2 ?>">
            <a href="<?= base_url('keuangan/transaksi') ?>" class="menu-link">
              <i class="menu-icon tf-icons bx bx-file"></i>
              <div data-i18n="Analytics">Transaksi</div>
            </a>
          </li>
        </ul>
      </aside>
      <!-- / Menu -->
      <!-- Layout container -->
      <div class="layout-page">
        <!-- Navbar -->
        <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme" id="layout-navbar">
          <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
            <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
              <i class="bx bx-menu bx-sm"></i>
            </a>
          </div>
          <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
            <!-- Search -->
            <div class="navbar-nav align-items-center">
              <span class="fw-bold"><?= $halaman ?></span>
            </div>
            <!-- /Search -->
            <ul class="navbar-nav flex-row align-items-center ms-auto">
              <!-- Place this tag where you want the button to render. -->
              <li class="nav-item lh-1 me-3">
                <span><?= session()->get('nama') ?></span>
              </li>
              <!-- User -->
              <li class="nav-item navbar-dropdown dropdown-user dropdown">
                <a class="" href="#" onclick="logout()">
                  <div class="avatar avatar-online">
                    <img src="<?= base_url('assets/img/avatars/1.png') ?>" alt class="w-px-40 h-auto rounded-circle" />
                  </div>
                </a>
              </li>
              <!--/ User -->
            </ul>
          </div>
        </nav>
        <!-- / Navbar -->
        <?= $this->renderSection('content'); ?>
      </div>
      <!-- / Layout page -->
    </div>

    <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>
  </div>
  <!-- / Layout wrapper -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css" />
  <script src="<?= base_url('assets/vendor/libs/jquery/jquery.js') ?>"></script>
  <script src="<?= base_url('assets/vendor/libs/popper/popper.js') ?>"></script>
  <script src="<?= base_url('assets/vendor/js/bootstrap.js') ?>"></script>
  <script src="<?= base_url('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') ?>"></script>
  <script src="<?= base_url('assets/vendor/js/menu.js') ?>"></script>
  <script src="<?= base_url('assets/vendor/libs/apex-charts/apexcharts.js') ?>"></script>
  <script src="<?= base_url('assets/js/main.js') ?>"></script>
  <script src="<?= base_url('assets/js/dashboards-analytics.js') ?>"></script>
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
  <script>
    $(document).ready(function() {
      $('#tablekaryawan').DataTable({
        paging: true,
        ordering: false,
        info: false,
        searching: true,
        language: {
          search: "",
          search: "_INPUT_",
          searchPlaceholder: "Keyword Pencarian Disini"
        },
        "lengthChange": false,
        "pageLength": 15,
      });
      $('.dataTables_filter').addClass('pull-left');
      $('.dataTables_paginate').addClass('pull-left');
    });

    $(document).ready(function() {
      $('#tableproduk').DataTable({
        paging: false,
        ordering: false,
        info: false,
        searching: true,
        language: {
          search: "",
          search: "_INPUT_",
          searchPlaceholder: "Keyword Pencarian Disini"
        },
        "lengthChange": false,
        "pageLength": 15,
      });
      $('.dataTables_filter').addClass('pull-left');
      $('.dataTables_paginate').addClass('pull-left');
    });

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

    $('input[type="file"]').change(function(e) {
      var output = document.getElementById('output');
      output.src = URL.createObjectURL(event.target.files[0]);
    });
  </script>
</body>

</html>