<?= $this->extend('Zibra/Layout'); ?>
<?= $this->section('content'); ?>
<div class="map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.3016633774373!2d108.48827397417666!3d-6.973691968284227!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6f17feae84f10d%3A0x8e12db96610763d0!2sZIBRA%20ID!5e0!3m2!1sen!2sid!4v1684173882556!5m2!1sen!2sid" height="500" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
</div>
<section class="contact spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="contact__text">
                    <div class="section-title">
                        <span>Information</span>
                        <h2>Contact Us</h2>
                        <p>As you might expect of a company that began as a high-end interiors contractor, we pay
                            strict attention.</p>
                    </div>
                    <ul>

                        <li>
                            <h4>Kuningan</h4>
                            <p>Jl. Ir. H. Juanda No.201, Purwawinangun, Kec. Kuningan, Kabupaten Kuningan, Jawa Barat 45512 <br />08889752270</p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="contact__form">
                    <form action="#">
                        <div class="row">
                            <div class="col-lg-6">
                                <input type="text" placeholder="Name">
                            </div>
                            <div class="col-lg-6">
                                <input type="text" placeholder="Email">
                            </div>
                            <div class="col-lg-12">
                                <textarea placeholder="Message"></textarea>
                                <button type="submit" class="site-btn">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection(); ?>