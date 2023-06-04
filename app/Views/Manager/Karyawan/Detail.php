<?= $this->extend('Manager/Layout'); ?>
<?= $this->section('content'); ?>
<div class="container-fluid">
    <div class="card shadow-lg">
        <div class="card-body">
            <div class="row gx-4">
                <div class="col-auto">
                    <div class="avatar avatar-xl position-relative">
                        <img src="<?= base_url('karyawan/') . $karyawan->foto_karyawan ?>" alt="profile_image" class="w-100 border-radius-lg shadow-sm" height="70px">
                    </div>
                </div>
                <div class="col-auto my-auto">
                    <div class="h-100">
                        <h5 class="mb-1">
                            <?= $karyawan->nama_karyawan ?>
                        </h5>
                        <p class="mb-0 font-weight-bold text-sm">
                            <?= $karyawan->role ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header pb-0">
                    <div class="d-flex align-items-center">
                        <p class="mb-0">Edit Profile</p>

                    </div>
                </div>
                <div class="card-body">
                    <form action="<?= base_url('manager/edit-karyawan') ?>" method="POST" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="username" class="form-control-label">Username</label>
                                    <input class="form-control" type="text" placeholder="Masukan username" name="username" id="username" value="<?= $karyawan->username ?>" required>
                                    <input class="form-control" type="text" name="id_karyawan" id="id_karyawan" value="<?= $karyawan->id_karyawan ?>" hidden>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="password" class="form-control-label">Password</label>
                                    <input class="form-control" value="<?= $karyawan->password ?>" type="password" name="password" id="password" placeholder="Masukan Password" required>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="nama_karyawan" class="form-control-label">Nama Lengkap</label>
                                    <input class="form-control" value="<?= $karyawan->nama_karyawan ?>" type="text" name="nama_karyawan" id="nama_karyawan" placeholder="Masukan Nama Karyawan" required>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="role" class="form-control-label">Role</label>
                                    <input class="form-control" value="<?= $karyawan->role ?>" type="text" name="role" id="role" placeholder="" required readonly>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="foto" class="form-control-label">Foto</label>
                                    <input class="form-control" name="foto" id="foto" type="file" placeholder="">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12 mt-3">
                                <button class="btn btn-primary btn-sm ms-auto w-100">Update</button>
                            </div>
                            <div class="col-md-6 col-sm-12 mt-3">
                                <a onclick="hapus(<?= $karyawan->id_karyawan ?>)" class="btn btn-danger btn-sm ms-auto w-100">Delete</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    function hapus(id) {
        Swal.fire({
            title: 'Apakah Anda Yakin?',
            text: "Data yang dihapus tidak bisa dikembalikan!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yakin'
        }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire({
                    position: 'center',
                    icon: 'success',
                    text: 'Data Berhasil Dihapus',
                    showConfirmButton: false,
                    timer: 1500
                });
                window.location = '<?= base_url('manager/delete-karyawan') . '/' ?>' + id;
            }
        })
    }
</script>
<?= $this->endSection(); ?>