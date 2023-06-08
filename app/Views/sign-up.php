<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="<?= base_url('boassets/img/apple-icon.png') ?>">
  <link rel="icon" type="image/png" href="<?= base_url('boassets/img/favicon.png') ?>">
  <title>
    ZibraID
  </title>
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
</head>

<body class="">
  <main class="main-content  mt-0">
    <div class="page-header align-items-start min-vh-50 pt-5 pb-11 m-3 border-radius-lg" style="background-image: url('https://raw.githubusercontent.com/creativetimofficial/public-assets/master/argon-dashboard-pro/assets/img/signup-cover.jpg'); background-position: top;">
      <span class="mask bg-gradient-dark opacity-6"></span>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-5 text-center mx-auto">
            <img src="<?= base_url('boassets/img/LOGO.png') ?>" class="img-fluid" alt="" width="300px">
            <h1 class="text-white mb-2 mt-2">Welcome!</h1>
            <p class="text-lead text-white">Tagline ZibraID Disini</p>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row mt-lg-n11 mt-md-n11 mt-n11 justify-content-center">
        <div class="col-xl-4 col-lg-5 col-md-7 mx-auto">
          <div class="card z-index-0">
            <div class="card-header text-center pt-4">
              <h5>Register</h5>
            </div>
            <div class="card-body">
              <form role="form" method="POST" action="<?= base_url('proses-register') ?>">
                <div class="mb-3">
                  <input type="text" class="form-control" placeholder="Username" name="username">
                </div>
                <div class="mb-3">
                  <input type="password" class="form-control" placeholder="Password" aria-label="Password" name="password">
                </div>
                <div class="mb-3">
                  <input type="text" class="form-control" placeholder="Nama Customer" name="nama_customer">
                </div>
                <div class="mb-3">
                  <input type="bumber" class="form-control" placeholder="Nomor Telepon" name="nomor_telepon">
                </div>
                <div class="mb-3">
                  <input type="text" class="form-control" placeholder="Alamat Customer" name="alamat_customer">
                </div>
                <div class="text-center">
                  <button type="submit" class="btn bg-gradient-dark w-100 my-4 mb-2">Sign up</button>
                </div>
                <p class="text-sm mt-3 mb-0">Already have an account? <a href="<?= base_url('login') ?>" class="text-dark font-weight-bolder">Sign in</a></p>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  <?php
  if (!empty(session()->getFlashdata('register-berhasil'))) {
  ?>
    <script>
      Swal.fire({
        position: 'center',
        icon: 'success',
        title: 'Registrasi Berhasil',
        text: "Selamat Bergabung Di ZibraID",
        showConfirmButton: false,
        timer: 1500
      }).then(function() {
        window.location = "login";
      });
    </script>
  <?php
  }
  ?>
  <!--   Core JS Files   -->
  <script src="<?= base_url('boassets/js/core/popper.min.js') ?>"></script>
  <script src="<?= base_url('boassets/js/core/bootstrap.min.js') ?>"></script>
  <script src="<?= base_url('boassets/js/plugins/perfect-scrollbar.min.js') ?>"></script>
  <script src="<?= base_url('boassets/js/plugins/smooth-scrollbar.min.js') ?>"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="<?= base_url('boassets/js/argon-dashboard.min.js?v=2.0.4') ?>"></script>
</body>

</html>