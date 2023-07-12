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
                                    <h6 class="card-header fw-bold" style="padding-bottom: 0px !important;">List Karyawan</h6>
                                </div>
                                <div class="ms-auto">
                                    <h6 class="card-header" style="padding-bottom: 0px !important;"><a href="<?= base_url('manager/karyawan/create') ?>" class="fw-bold"><span><i class='bx bx-plus-circle'></i></span> Tambah</a></h6>
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
                                            <?php foreach ($datakaryawan as $data) : ?>
                                                <tr>
                                                    <td style="padding-left: 0px !important; padding-right: 0px !important;">
                                                        <div class="card border">
                                                            <div class="row">
                                                                <div class="col-md-3">
                                                                    <img class="card-img card-img-left" src="<?= base_url('karyawan/' . $data->foto_karyawan) ?>" alt="Card image">
                                                                </div>
                                                                <div class="col-md-9">
                                                                    <div class="card-body">
                                                                        <div class="d-flex flex-row">
                                                                            <div class="">
                                                                                <p class="card-title fw-bold"><?= $data->nama_karyawan ?></p>
                                                                            </div>
                                                                            <div class="ms-auto">
                                                                                <p class="card-title fw-bold"><span class="badge <?php if ($data->role == 'Kasir') {
                                                                                                                                        echo 'bg-label-primary';
                                                                                                                                    } else if ($data->role == 'Staff Gudang') {
                                                                                                                                        echo 'bg-label-danger';
                                                                                                                                    } else {
                                                                                                                                        echo 'bg-label-success';
                                                                                                                                    } ?>"><?= $data->role ?></span></p>
                                                                            </div>
                                                                        </div>
                                                                        <hr>
                                                                        <p class="card-text">
                                                                            Telpon <?= $data->nomor_telpon ?>
                                                                            <br>
                                                                            <?= $data->alamat_karyawan ?>
                                                                        </p>
                                                                        <p class="fw-bold mt-auto"><a href="#" class="text-danger" onclick="hapus(<?= $data->id_karyawan ?>)"><span><i class='bx bx-edit'></i></span> Hapus</a></p>
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