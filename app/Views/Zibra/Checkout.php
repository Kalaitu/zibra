<?= $this->extend('Zibra/Layout'); ?>
<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class=" col-lg-6 md-12 sm-12">
            <h6 class="text-sm my-1">Kode Transaksi: <span>KD21231 </span> </h6>
            <h6 class="text-sm my-1">Tanggal Transaksi : <span>23/09/2023 </span> </h6>


        </div>
        <div class=" col-lg-6 md-12 sm-12">
            <h6 class="text-sm my-1">Nama Customer: <span>Katak Bizer </span> </h6>
            <h6 class="text-sm my-1">No Telepon: <span>089213123 </span> </h6>
            <h6 class="text-sm mt-3">Alamat:<span> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Atque ad sunt dolor error quas deleniti non! Nam reprehenderit soluta inventore similique consequatur minus necessitatibus cupiditate dolor nostrum alias, saepe a! </span> </h6>
        </div>
    </div>
    <hr color="black">
    <div class="d-flex justify-content-center">


        <img src="<?= base_url('fashion/img/banner/spay.jpeg') ?>" class="img-fluid" style="max-width:250px; min-width:100px; height-auto" alt="">

    </div>
    <div class="row lg-mx-5 md-mx-5 sm-mx-2">
        <div class="categories__deal__countdown">

            <h6 class="mx-5">Harap Lakukan Pembayaran Sebelum :</h6>
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
    <hr color="black">
    <div class="row my-4">
        <strong> Upload Bukti Pembayaran</strong>
        <input class="form-control my-2" type="file" id="formFile">
        <a class="btn btn-dark text-light">Kirim</a>
    </div>
</div>
<script>
    /* Set countdown date as a future date with a 24 hour format */
    // let countdownDate = new Date('01 January 2023 00:00')

    /* Set countdown date by adding hours to current date */
    // let countdownDate = new Date().setHours(new Date().getHours() + 1)

    /* Set countdown date by adding minutes to current date */
    // let countdownDate = new Date().setMinutes(new Date().getMinutes() + 5);

    /* Set countdown date by adding seconds to current date */
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