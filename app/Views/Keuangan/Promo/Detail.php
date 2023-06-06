<?= $this->extend('Keuangan/Layout'); ?>
<?= $this->section('content'); ?>
<div class="container-fluid py-4">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header pb-0">
                    <div class="d-flex align-items-center">
                        <p class="mb-0">Detail Promo</p>
                    </div>
                    <hr class="horizontal dark">
                </div>
                <div class="card-body">
                    <form action="<?= base_url('keuangan/edit-promo') ?>" method="POST" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-6 col-sm-12">
                                <img src="<?= base_url('promo/') . $promo['foto_promo'] ?>" alt="" width="100%" class="rounded" id="output" height="500px">
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="nama_promo" class="form-control-label">Nama Promo</label>
                                        <input class="form-control" type="text" placeholder="Masukan Nama promo" name="nama_promo" id="nama_promo" value="<?= $promo['nama_promo'] ?>" required>
                                        <input class="form-control" type="text" placeholder="Masukan Nama promo" name="id_promo" id="id_promo" value="<?= $promo['id_promo'] ?>" hidden>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="deskripsi_promo" class="form-control-label">Deskripsi Promo</label>
                                        <textarea class="form-control" name="deskripsi_promo" id="deskripsi_promo" cols="30" rows="2" required><?= $promo['deskripsi_promo'] ?></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="poin" class="form-control-label">Poin</label>
                                        <input class="form-control" type="number" placeholder="Masukan Poin" name="poin" id="poin" value="<?= $promo['poin'] ?>" required>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="diskon" class="form-control-label">Diskon</label>
                                        <input class="form-control" type="number" placeholder="Masukan Diskon" name="diskon" id="diskon" value="<?= $promo['diskon'] ?>" required>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="foto" class="form-control-label">Foto</label>
                                        <input class="form-control" name="foto" id="foto" type="file" placeholder="">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-primary ms-auto w-100 mt-2">Update</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="application/javascript">
    $('input[type="file"]').change(function(e) {
        var output = document.getElementById('output');
        output.src = URL.createObjectURL(event.target.files[0]);
        var fileName = e.target.files[0].name;
        $('.custom-file-label').html(fileName);
    });
</script>
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
                window.location = '<?= base_url('keuangan/delete-promo') . '/' ?>' + id;
            }
        })
    }
</script>
<?= $this->endSection(); ?>