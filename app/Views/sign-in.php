<!DOCTYPE html>
<html lang="en" translate="no" class="light-style customizer-hide" dir="ltr" data-theme="theme-default" data-assets-path="../assets/" data-template="vertical-menu-template-free">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
  <title>ZibraID</title>
  <meta name="description" content="" />
  <link rel="icon" type="image/x-icon" href="<?= base_url('fashion/img/logo.png') ?>" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="<?= base_url('assets/vendor/fonts/boxicons.css') ?>" />
  <link rel="stylesheet" href="<?= base_url('assets/vendor/css/core.css') ?>" class="template-customizer-core-css" />
  <link rel="stylesheet" href="<?= base_url('assets/vendor/css/theme-default.css') ?>" class="template-customizer-theme-css" />
  <link rel="stylesheet" href="<?= base_url('assets/css/demo.css') ?>" />
  <link rel="stylesheet" href="<?= base_url('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') ?>" />
  <link rel="stylesheet" href="<?= base_url('assets/vendor/css/pages/page-auth.css') ?>" />
  <script src="<?= base_url('assets/vendor/js/helpers.js') ?>"></script>
  <script src="<?= base_url('assets/js/config.js') ?>"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body style="background-image: url(<?= base_url('fashion/img/hero/hero-2.jpg') ?>);">
  <!-- Content -->
  <div class="container-xxl">
    <div class="authentication-wrapper authentication-basic container-p-y">
      <div class="authentication-inner">
        <!-- Register -->
        <div class="card">
          <div class="card-body">
            <!-- Logo -->
            <div class="app-brand justify-content-center mt-3 mb-4">
              <a href="#" class="app-brand-link gap-2">
                <span class="app-brand-logo demo">
                  <img src="<?= base_url('fashion/img/logologinregister.png') ?>" alt="" width="250px">
                </span>
              </a>
            </div>
            <!-- /Logo -->
            <h4 class="mb-2">Welcome to ZibraID! 👋</h4>
            <p class="mb-4">Please sign-in to your account and start the adventure</p>

            <form id="formAuthentication" class="mb-3" action="loginproses" method="POST">
              <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" id="username" name="username" placeholder="Enter your username here" autofocus />
              </div>
              <div class="mb-3 form-password-toggle">
                <div class="d-flex justify-content-between">
                  <label class="form-label" for="password">Password</label>
                </div>
                <div class="input-group input-group-merge">
                  <input type="password" id="password" class="form-control" name="password" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="password" />
                  <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                </div>
              </div>
              <div class="my-4">
                <button class="btn btn-primary d-grid w-100" type="submit">Sign in</button>
              </div>
            </form>

            <p class="text-center">
              <span>New on our platform?</span>
              <a href="register">
                <span>Create an account</span>
              </a>
            </p>
          </div>
        </div>
        <!-- /Register -->
      </div>
    </div>
  </div>
  <!-- / Content -->

  <script src="<?= base_url('assets/vendor/libs/jquery/jquery.js') ?>"></script>
  <script src="<?= base_url('assets/vendor/libs/popper/popper.js') ?>"></script>
  <script src="<?= base_url('assets/vendor/js/bootstrap.js') ?>"></script>
  <script src="<?= base_url('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') ?>"></script>
  <script src="<?= base_url('assets/vendor/js/menu.js') ?>"></script>
  <script src="<?= base_url('assets/js/main.js') ?>"></script>
  <script async defer src="https://buttons.github.io/buttons.js"></script>

  <!-- Notifikasi -->
  <?php
  if (!empty(session()->getFlashdata('login-gagal'))) {
  ?>
    <script>
      Swal.fire({
        position: 'center',
        icon: 'error',
        title: 'Login Gagal',
        text: "Username atau password salah",
        showConfirmButton: false,
        timer: 1500
      }).then(function() {
        window.location = "login";
      });
    </script>
  <?php
  }
  ?>
  
  <?php
  if (!empty(session()->getFlashdata('belumlogin'))) {
  ?>
    <script>
      Swal.fire({
        position: 'center',
        icon: 'error',
        title: 'Notifikasi',
        text: "Silahkan login terlebih dahulu untuk mulai berbelanja",
        showConfirmButton: false,
        timer: 2000
      }).then(function() {
        window.location = "login";
      });
    </script>
  <?php
  }
  if (!empty(session()->getFlashdata('login-manager'))) {
  ?>
    <script>
      Swal.fire({
        position: 'center',
        icon: 'success',
        title: 'Login Berhasil',
        text: "Selamat Datang <?= session()->get('nama') ?>",
        showConfirmButton: false,
        timer: 1500
      }).then(function() {
        window.location = "manager";
      });
    </script>
  <?php
  }
  if (!empty(session()->getFlashdata('login-kasir'))) {
  ?>
    <script>
      Swal.fire({
        position: 'center',
        icon: 'success',
        title: 'Login Berhasil',
        text: "Selamat Datang <?= session()->get('nama') ?>",
        showConfirmButton: false,
        timer: 1500
      }).then(function() {
        window.location = "kasir";
      });
    </script>
  <?php
  }
  if (!empty(session()->getFlashdata('login-gudang'))) {
  ?>
    <script>
      Swal.fire({
        position: 'center',
        icon: 'success',
        title: 'Login Berhasil',
        text: "Selamat Datang <?= session()->get('nama') ?>",
        showConfirmButton: false,
        timer: 1500
      }).then(function() {
        window.location = "gudang";
      });
    </script>
  <?php
  }
  if (!empty(session()->getFlashdata('login-keuangan'))) {
  ?>
    <script>
      Swal.fire({
        position: 'center',
        icon: 'success',
        title: 'Login Berhasil',
        text: "Selamat Datang <?= session()->get('nama') ?>",
        showConfirmButton: false,
        timer: 1500
      }).then(function() {
        window.location = "keuangan";
      });
    </script>
  <?php
  }
  if (!empty(session()->getFlashdata('login-customer'))) {
  ?>
    <script>
      Swal.fire({
        position: 'center',
        icon: 'success',
        title: 'Login Berhasil',
        text: "Selamat Datang <?= session()->get('nama') ?>",
        showConfirmButton: false,
        timer: 1500
      }).then(function() {
        window.location = "zibra";
      });
    </script>
  <?php
  }
  ?>
  
</body>

</html>