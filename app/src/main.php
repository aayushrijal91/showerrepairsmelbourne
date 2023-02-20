<header>
    <div class="header-nav">
        <div class="container">
            <div class="row justify-content-center justify-content-md-between align-items-center">
                <div class="col-auto">
                    <a href="./">
                        <?= renderImg("logo.png", "logo") ?>
                    </a>
                </div>
                <div class="col-auto">
                    <div class="text-secondary fs-35 fw-600">Melbourne Wide</div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="banner" id="banner-slider">
            <div class="banner-slider-card">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="heading">Melbourne's Leading shower Repair Experts</div>
                            <div class="text-white fs-25 py-5">Call or book a free quote online</div>
                            <div class="row">
                                <div class="col-auto">
                                    <a href="#form" class="btn btn-light rounded-pill border-quarternary shadow-quarternary text-quarternary fs-23 px-5">Free quote</a>
                                </div>
                                <div class="col-auto">
                                    <a href="#form" class="btn btn-tertiary rounded-pill border-primary shadow-primary text-primary fs-23 px-5">Free quote</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<footer>
    <div class="container">
        <div class="row justify-content-center justify-content-lg-between align-items-center">
            <div class="col-auto">
                <div class="row gx-2 gx-md-3 text-white justify-content-center">
                    <div class="col-12 text-center pb-3 d-lg-none">
                        <a href="https://www.aiims.com.au/like-our-work/" target="_blank">
                            <?= renderImg("aiims.png", "logo") ?>
                        </a>
                    </div>
                    <div class="col-auto text-center">Copyright <?= date('Y') ?></div>
                    <div class="col-auto">|</div>
                    <div class="col-auto text-center"><?= $site ?></div>
                    <div class="col-auto">|</div>
                    <div class="col-auto text-center">All Rights Reserved</div>
                </div>
            </div>
            <div class="col-auto d-none d-lg-block">
                <a href="https://www.aiims.com.au/like-our-work/" target="_blank">
                    <?= renderImg("aiims.png", "logo") ?>
                </a>
            </div>
        </div>
    </div>
</footer>