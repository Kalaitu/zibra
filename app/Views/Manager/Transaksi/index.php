<?php $this->extend('Manager/layout'); ?>
<?php $this->section('content'); ?>
<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <!-- Total Revenue -->
            <div class="col-12 col-lg-12 col-sm-12">
                <div class="card">
                    <div class="row g-0">
                        <div class="col-md-12">
                            <div class="d-flex flex-row">
                                <div class="">
                                    <h6 class="card-header fw-bold" style="padding-bottom: 0px !important;">List Transaksi</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="card-body">
                                <div class="table-responsive hidescroll">
                                    <table class="table table-borderless" id="tableproduk">
                                        <thead>
                                            <tr>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($datatransaksi as $data) : ?>
                                                <tr>
                                                    <td style="padding-left: 0px !important; padding-right: 0px !important;">
                                                        <div class="card border">
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="card-body">
                                                                        <div class="d-flex flex-row">
                                                                            <div class="">
                                                                                <p class="card-title fw-bold"><?= $data->tanggal_pembayaran ?></p>
                                                                            </div>
                                                                        </div>
                                                                        <hr>
                                                                        <p class="card-text">
                                                                            <?= $data->kode_pemesanan ?>
                                                                        </p>
                                                                        <p class="fw-bold mt-auto"><a href="<?= base_url('manager/transaksi/detail/' . $data->kode_pemesanan) ?>" class="text-danger"><span><i class='bx bx-edit'></i></span> Detail</a></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            <?php endforeach ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ Total Revenue -->
        </div>
    </div>
    <!-- / Content -->

    <!-- Footer -->
    <footer class="content-footer footer bg-footer-theme text-center">
        <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
            <div class="mb-2 mb-md-0">
                ©
                <script>
                    document.write(new Date().getFullYear());
                </script>
                , made with ❤️ by
                <a href="#" class="footer-link fw-bolder">ZibraID</a>
            </div>
        </div>
    </footer>
    <!-- / Footer -->

    <div class="content-backdrop fade"></div>
</div>

<?php
if (!empty(session()->getFlashdata('tambahkaryawan'))) {
?>
    <script>
        Swal.fire({
            position: 'center',
            icon: 'success',
            title: 'Notifikasi',
            text: "Berhasil menambahkan karyawan baru!",
            showConfirmButton: false,
            timer: 1500
        });
    </script>
<?php
}
?>

<script>
    function hapus(id) {
        Swal.fire({
            title: 'Hapus Data Karyawan',
            text: "Apakah anda yakin? Data yang sudah dihapus tidak bisa dikembalikan!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Hapus!'
        }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire({
                    position: 'center',
                    icon: 'success',
                    text: 'Data berhasil dihapus!',
                    showConfirmButton: false,
                    timer: 1500
                }).then(function() {
                    window.location = "<?= base_url('manager/karyawan/hapus') ?>" + "/" + id;
                });
            }
        })
    }
</script>
<!-- Content wrapper -->
<?php $this->endSection(); ?>