<?= $this->extend('Manager/Layout'); ?>
<?= $this->section('content'); ?>
<div class="container-fluid my-4">
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-body dataTable-container">
                    <div class="px-1 py-3">
                        <p class="px-2 text-sm"><a href="<?= base_url('manager/create-karyawan') ?>" class="text-primary">Tambah Data Karyawan</a></p>
                        <table class="table table-flush dataTable-table" style="width: 100%;" id="example">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Karyawan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($karyawan as $data) :
                                ?>
                                    <tr class="">
                                        <td class="row my-2">
                                            <div class="col-12">
                                                <div class="d-flex px-2">
                                                    <div>
                                                        <img src="<?= base_url('karyawan/') . $data->foto_karyawan ?>" class="border-radius-lg shadow me-2" alt="" width="80px" height="80px">
                                                    </div>
                                                    <div class="">
                                                        <h6 class="mb-0 text-sm ms-2"><?= $data->nama_karyawan ?></h6>
                                                        <p class="text-xs font-weight-bold mb-0 ms-2"><?= $data->role ?></p>
                                                        <p class="text-xs font-weight-bold mb-0 ms-2 mt-4"><a href="<?= base_url('manager/detail-karyawan') . '/' . $data->id_karyawan ?>" class="text-primary">Details </a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                <?php
                                endforeach
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        $('#example').DataTable({
            paging: false,
            ordering: false,
            info: false,
        });
    });
</script>
<?= $this->endSection(); ?>