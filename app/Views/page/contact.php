<?= $this->include('layout/header') ?>
<?= $this->include('layout/navbar') ?>
<div id="banner-area" class="banner-area" style="background-image:url(<?= base_url('assets') ?>/images/banner/banner1.jpg)">
    <div class="banner-text">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="banner-heading">
                        <h1 class="banner-title">Contact</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Company</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                            </ol>
                        </nav>
                    </div>
                </div><!-- Col end -->
            </div><!-- Row end -->
        </div><!-- Container end -->
    </div><!-- Banner text end -->
</div><!-- Banner area end -->

<section id="main-container" class="main-container">
    <div class="container">

        <div class="row text-center">
            <div class="col-12">
                <h2 class="section-title">Mencari Kantor Kami</h2>
                <h3 class="section-sub-title">Lokasi Kantor Kami</h3>
            </div>
        </div>
        <!--/ Title row end -->

        <div class="row">
            <div class="col-md-4">
                <div class="ts-service-box-bg text-center h-100">
                    <a href="https://maps.app.goo.gl/f18B6Aw3SpAWqY4f9" target="_blank" class="ts-service-icon icon-round">
                        <i class="fas fa-map-marker-alt mr-0"></i>
                    </a>
                    <div class="ts-service-box-content">
                        <h4>Kantor Kami</h4>
                        <p>WTC Floor 18, Jl Jendral Sudirman No 30</p>
                    </div>
                </div>
            </div><!-- Col 1 end -->

            <div class="col-md-4">
                <div class="ts-service-box-bg text-center h-100">
                    <a href="mailto:signalenergi@gmail.com" class="ts-service-icon icon-round">
                        <i class="fa fa-envelope mr-0"></i>
                    </a>
                    <div class="ts-service-box-content">
                        <h4>Email Kami</h4>
                        <p>signalenergi@gmail.com</p>
                    </div>
                </div>
            </div><!-- Col 2 end -->

            <div class="col-md-4">
                <div class="ts-service-box-bg text-center h-100">
                    <a href="https://wa.me/6282122337673" target="_blank" class="ts-service-icon icon-round">
                        <i class="fa fa-phone-square mr-0"></i>
                    </a>
                    <div class="ts-service-box-content">
                        <h4>Kontak Kami</h4>
                        <p>(+62) 821-2233-7673</p>
                    </div>
                </div>
            </div><!-- Col 3 end -->

        </div><!-- 1st row end -->

        <div class="gap-60"></div>

        <div class="google-map">
            <div style="width: 90%; margin: 0 auto; text-align: center;">
                <iframe
                    src="https://www.google.com/maps?q=-6.214705943901799,106.82066840216467&hl=es;z=14&output=embed"
                    style="width: 100%; height: 450px; border: 0;"
                    allowfullscreen=""
                    loading="lazy">
                </iframe>
            </div>
        </div>

        <div class="gap-40"></div>

        <div class="row">
            <div class="col-md-12">
                <h3 class="column-title">Kirim Feedback Anda Tentang Layanan Kami</h3>
                <!-- contact form works with formspree.io  -->
                <!-- contact form activation doc: https://docs.themefisher.com/constra/contact-form/ -->
                <form id="contact-form" action="<?= base_url('contact/feedback')?>" method="post" role="form">
                    <div class="error-container"></div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Nama</label>
                                <input class="form-control form-control-name" name="nama" id="nama" placeholder="" type="text" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Email</label>
                                <input class="form-control form-control-email" name="email" id="email" placeholder="" type="email"
                                    required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Pesan</label>
                        <textarea class="form-control form-control-message" name="deskripsi" id="deskripsi" placeholder="" rows="10"
                            required></textarea>
                    </div>
                    <div class="text-right"><br>
                        <button class="btn btn-primary solid blank" type="submit">Kirim Feedback</button>
                    </div>
                </form>
            </div>

        </div><!-- Content row -->
    </div><!-- Conatiner end -->
</section><!-- Main container end -->
<?= $this->include('layout/footer') ?>