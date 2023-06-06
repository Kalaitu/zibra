<?= $this->extend('Gudang/Layout'); ?>
<?= $this->section('content'); ?>
<div class="container-fluid py-4">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header pb-0">
                    <div class="d-flex align-items-center">
                        <p class="mb-0">Detail Produk</p>
                    </div>
                    <hr class="horizontal dark">
                </div>
                <div class="card-body">
                    <form action="<?= base_url('gudang/edit-produk') ?>" method="POST" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-6 col-sm-12">
                                <img src="<?= base_url('produk/') . $produk['foto_produk'] ?>" alt="" width="100%" class="rounded" id="output" height="500px">
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="nama_produk" class="form-control-label">Nama Produk</label>
                                        <input class="form-control" type="text" placeholder="Masukan Nama Produk" name="nama_produk" id="nama_produk" value="<?= $produk['nama_produk'] ?>" required>
                                        <input class="form-control" type="text" placeholder="Masukan Nama Produk" name="id_produk" id="id_produk" value="<?= $produk['id_produk'] ?>" hidden>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="deskripsi_produk" class="form-control-label">Deskripsi Produk</label>
                                        <textarea class="form-control" name="deskripsi_produk" id="deskripsi_produk" cols="30" rows="9" required><?= $produk['deskripsi_produk'] ?></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="foto" class="form-control-label">Foto</label>
                                        <input class="form-control" name="foto" id="foto" type="file" placeholder="">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-12">
                                            <button type="submit" class="btn btn-primary ms-auto w-100 mt-3">Update</button>
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <a onclick="hapus(<?= $produk['id_produk'] ?>)" class="btn btn-danger ms-auto w-100 mt-3">Delete</a>
                                        </div>
                                    </div>
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
                window.location = '<?= base_url('gudang/delete-produk') . '/' ?>' + id;
            }
        })
    }
</script>
<?= $this->endSection(); ?>