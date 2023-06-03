<?= $this->extend('Keuangan/Layout'); ?>
<?= $this->section('content'); ?>
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <input class="form-control datepicker" placeholder="Please select date" type="datetime-local" id="tanggalnya" onfocus="focused(this)" onfocusout="defocused(this)">
        </div>
    </div>
</div>
<?= $this->endSection(); ?>