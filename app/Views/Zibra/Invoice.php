<?= $this->extend('Zibra/Layout'); ?>
<?= $this->section('content'); ?>
<div class="container mt-5">
    <div class="row">
        <div class="col-12 mb-3">
            <h4 class="fw-bold">INVOICE TRANSAKSI <?= $datapemesanan[0]->kode_pemesanan ?></h4>
        </div>
        <div class=" col-lg-6 md-12 sm-12">
            <table>
                <tr>
                    <td style="width: 120px;">Kode Transaksi</td>
                    <td>:</td>
                    <td><?= $datapemesanan[0]->kode_pemesanan ?></td>
                </tr>
                <tr>
                    <td>Tanggal</td>
                    <td>:</td>
                    <td><?= $datapemesanan[0]->tanggal_pemesanan ?></td>
                </tr>
            </table>
        </div>
        <div class=" col-lg-6 md-12 sm-12">
            <table>
                <tr>
                    <td style="width: 120px;">Nama Customer</td>
                    <td>:</td>
                    <td><?= $datapemesanan[0]->nama_customer ?></td>
                </tr>
                <tr>
                    <td>No Telepon</td>
                    <td>:</td>
                    <td><?= $datapemesanan[0]->nomor_telepon ?></td>
                </tr>
                <tr>
                    <td valign="top">Alamat</td>
                    <td valign="top">:</td>
                    <td><?= $datapemesanan[0]->alamat_customer ?></td>
                </tr>
            </table>
        </div>
    </div>
    <hr color="black">
    <div class="d-flex justify-content-center">
        <img src="<?= base_url('fashion/img/banner/spay.jpeg') ?>" class="img-fluid" style="max-width:250px; min-width:100px; height-auto" alt="">
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="shopping__cart__table">
                <table>
                    <thead>
                        <tr>
                            <th>Product</th>
                            <th>Qty</th>
                            <th>SUB Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $total = 0;
                        foreach ($datapemesanan as $data) :
                        ?>
                            <tr>
                                <td class=" product__cart__item">
                                    <div class="product__cart__item__pic">
                                        <p class="mb-3"><?= $data->nama_produk ?><br><span class="mt-2">Rp.100000,-</span></p>
                                        <img src="<?= base_url('produk/' . $data->foto_produk) ?>" class="h-50 w-50" alt="">
                                    </div>
                                </td>
                                <td class="quantity__item" valign="top">
                                    <div class="quantity">
                                        <div class="">
                                            <?= $data->qty ?>
                                        </div>
                                    </div>
                                </td>
                                <td class="cart__price" valign="top"><?= $data->harga_produk * $data->qty ?>,-</td>
                            </tr>
                        <?php
                            $total = $total = $data->harga_produk * $data->qty;
                        endforeach;
                        ?>
                        <tr>
                            <td class="cart__price" valign="top" colspan="2">SUB TOTAL</td>
                            <td class="cart__price" valign="top">Rp.<?= $total ?>,-</td>
                        </tr>
                        <tr>
                            <?php
                            if ($datapemesanan[0]->point <= 50) {
                                $statusmember = "Bronze";
                                $diskon = 0;
                            } else if ($datapemesanan[0]->point <= 100) {
                                $statusmember = "Silver";
                                $diskon = 0.1;
                            } else {
                                $statusmember = "Gold";
                                $diskon = 0.15;
                            }
                            ?>
                            <td class="cart__price" valign="top" colspan="2">DISKON (<?= $statusmember ?>)</td>
                            <td class="cart__price" valign="top">Rp.<?= $total * $diskon ?>,-</td>
                        </tr>
                        <tr>
                            <td class="cart__price" valign="top" colspan="2">TOTAL</td>
                            <td class="cart__price" valign="top">Rp.<?= $total - ($total * $diskon) ?>,-</td>
                        </tr>
                        <tr>
                            <td class="cart__price" valign="top" colspan="3">Pembayaran Daapat Dilakukan Transfer Bank BCA (763 0414 673) a.n Zibra ID</td>
                        </tr>
                        <tr>
                            <td class="cart__price" valign="top" colspan="3">Pembayaran Daapat Dilakukan Dengan QRis <br><img width="200px" src="<?= base_url('qr.png') ?>" class="img-fluid" style="" alt=""> </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="row lg-mx-5 md-mx-5 sm-mx-2">
        <div class="categories__deal__countdown">
            <center>
                <h6 class="my-3">Harap Lakukan Pembayaran Sebelum</h6>
            </center>
            <div class="categories__deal__countdown__timer" id="timer">
                <div class="cd-item">
                    <span id="days">0</span>
                    <p>Days</p>
                </div>
                <div class="cd-item">
                    <span id="hours">23</span>
                    <p>Hours</p>
                </div>
                <div class="cd-item">
                    <span id="minutes">59</span>
                    <p>Minutes</p>
                </div>
                <div class="cd-item">
                    <span id="seconds">59</span>
                    <p>Seconds</p>
                </div>
            </div>
        </div>
    </div>
    <div class="row lg-mx-5 md-mx-5 sm-mx-2 mb-3">
        <div class="categories__deal__countdown">
            <strong> Upload Bukti Pembayaran</strong>
            <form action="<?= base_url('zibra/prosesbayar') ?>" method="post" enctype="multipart/form-data">
                <input class="form-control my-2" type="file" id="bukti_pembayaran" name="bukti_pembayaran" required>
                <input class="form-control my-2" type="text" id="kode_pemesanan" name="kode_pemesanan" value="<?= $datapemesanan[0]->kode_pemesanan ?>" hidden>
                <img src="" id="output" alt="" width="100%" class="mb-3">
                <button class="btn btn-dark text-light w-100 my-2">Kirim</button>
            </form>
        </div>
    </div>
</div>
<script>
    let countdownDate = new Date().setSeconds(new Date().getSeconds() + 84600);
    let timerInterval;
    const daysElem = document.getElementById("days"),
        hoursElem = document.getElementById("hours"),
        minutesElem = document.getElementById("minutes"),
        secondsElem = document.getElementById("seconds"),
        timer = document.getElementById("timer"),
        content = document.getElementById("content");

    const formatTime = (time) => {
        return time == 1 ? `${time} ` : `${time} `;
    };

    const startCountdown = () => {
        const now = new Date().getTime();
        const countdown = new Date(countdownDate).getTime();

        const difference = (countdown - now) / 1000;

        if (difference < 1) {
            endCountdown();
        }

        let days = Math.floor(difference / (60 * 60 * 24));
        let hours = Math.floor((difference % (60 * 60 * 24)) / (60 * 60));
        let minutes = Math.floor((difference % (60 * 60)) / 60);
        let seconds = Math.floor(difference % 60);

        daysElem.innerHTML = formatTime(days);
        hoursElem.innerHTML = formatTime(hours);
        minutesElem.innerHTML = formatTime(minutes);
        secondsElem.innerHTML = formatTime(seconds);
    };

    const endCountdown = () => {
        clearInterval(timerInterval);
        timer.remove();
        content.classList.add("visible");
    };

    window.addEventListener("load", () => {
        startCountdown();
        timerInterval = setInterval(startCountdown, 1000);
    });
</script>
<?= $this->endSection(); ?>