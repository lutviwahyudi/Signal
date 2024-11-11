<?= $this->include('layout/header') ?>
<?= $this->include('layout/navbar') ?>
<section id="news" class="news">
    <div class="container">
        <div class="row text-center">
            <div class="col-12">
                <h2 class="section-title">Pengalaman Bersama Customer</h2>
                <h3 class="section-sub-title">Project Kami</h3>
            </div>
        </div>
        <!--/ Title row end -->
        <div class="row">
            <?php foreach ($projek as $pr) : ?>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="latest-post">
                        <div class="latest-post-media">
                            <a href="news-single.html" class="latest-post-img d-block">
                                <img loading="lazy" class="img-fluid fixed-size" src="<?= base_url($pr['img']) ?>" alt="img">
                            </a>
                        </div>
                        <div class="post-body">
                            <h4 class="post-title">
                                <a href="<?= base_url('project/' . $pr['id_proyek']) ?>" class="d-inline-block"><?= $pr['judul'] ?></a>
                            </h4>
                            <div class="latest-post-meta">
                                <span class="post-item-date">
                                    <i class="fa fa-clock-o"></i>
                                    <?= $pr['date'] ?>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <!--/ Container end -->
</section>
<!--/ News end -->
<?= $this->include('layout/footer') ?>