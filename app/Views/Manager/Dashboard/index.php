<?php $this->extend('Manager/layout'); ?>
<?php $this->section('content'); ?>
<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <!-- Total Revenue -->
            <div class="col-12 order-2 order-md-3 order-lg-2 mb-4">
                <div class="card">
                    <div class="row row-bordered g-0">
                        <div class="col-md-12">
                            <div class="d-flex flex-row mb-3">
                                <div class="">
                                    <h5 class="card-header m-0 me-2 pb-3">Grafik Penjualan Bulanan</h5>
                                </div>
                                <div class="ms-auto p-3">
                                    <select id="bulan" class="form-select" onchange="updateGrafik()">
                                        <option value="-01-">Januari</option>
                                        <option value="-02-">Februari</option>
                                        <option value="-03-">Maret</option>
                                        <option value="-04-">April</option>
                                        <option value="-05-">Mei</option>
                                        <option value="-06-">Juni</option>
                                        <option value="-07-">Juli</option>
                                        <option value="-08-">Agustus</option>
                                        <option value="-09">September</option>
                                        <option value="-10-">Oktober</option>
                                        <option value="-11-">Novemebr</option>
                                        <option value="-12-">Desember</option>
                                    </select>
                                </div>
                            </div>
                            <div id="grafik-penjualan" class="px-2"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Script JavaScript untuk membuat dan mengupdate grafik -->
<script>
    // Inisialisasi grafik saat halaman dimuat
    var chart = null;

    // Fungsi untuk mengupdate atau membuat grafik baru berdasarkan bulan yang dipilih
    function updateGrafik() {
        var selectedMonth = document.getElementById("bulan").value;

        // Hapus elemen grafik-penjualan jika sudah ada
        if (chart !== null) {
            chart.destroy();
        }

        // Kirim permintaan ke controller untuk mendapatkan data penjualan berdasarkan bulan
        fetch('penjualan/getDataByMonth/' + selectedMonth)
            .then(response => response.json())
            .then(data => {
                // Konfigurasi grafik
                console.log(data);
                var options = {
                    chart: {
                        type: 'bar', // Ganti dengan 'line' untuk grafik garis atau jenis lainnya
                        height: 600,
                    },
                    xaxis: {
                        categories: data.map(item => item.nama_produk),
                    },
                    yaxis: {
                        labels: {
                            formatter: function(val) {
                                return Math.round(val) + " pcs";
                            }
                        },
                    },
                    series: [{
                        name: 'Penjualan',
                        data: data.map(item => item.total),
                    }],
                    plotOptions: {
                        bar: {
                            horizontal: false,
                            columnWidth: '10px', // Ganti dengan lebar yang diinginkan, misalnya '50px' atau '10%'
                        },
                    },
                };

                // Inisialisasi dan render grafik
                chart = new ApexCharts(document.getElementById("grafik-penjualan"), options);
                chart.render();
            });
    }

    // Inisialisasi grafik saat halaman dimuat
    window.onload = function() {
        updateGrafik();
    };
</script>


<?php $this->endSection(); ?>