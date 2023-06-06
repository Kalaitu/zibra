<?= $this->extend('Gudang/Layout'); ?>
<?= $this->section('content'); ?>
<div class="container-fluid py-4">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header pb-0">
                    <div class="d-flex align-items-center">
                        <p class="mb-0">Tambah Produk</p>
                    </div>
                    <hr class="horizontal dark">
                </div>
                <div class="card-body">
                    <form action="<?= base_url('gudang/insert-produk') ?>" method="POST" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-6 col-sm-12">
                                <img src="<?= base_url('boassets/img/empty.jpg') ?>" alt="" width="100%" class="rounded" id="output" height="500px">
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="nama_produk" class="form-control-label">Nama Produk</label>
                                        <input class="form-control" type="text" placeholder="Masukan Nama Produk" name="nama_produk" id="nama_produk" required>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="deskripsi_produk" class="form-control-label">Deskripsi Produk</label>
                                        <textarea class="form-control" name="deskripsi_produk" id="deskripsi_produk" cols="30" rows="9" required></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="foto" class="form-control-label">Foto</label>
                                        <input class="form-control" name="foto" id="foto" type="file" placeholder="">
                                    </div>
                                </div>
                                <button class="btn btn-primary ms-auto w-100 mt-3">Simpan</button>
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
<?= $this->endSection(); ?>