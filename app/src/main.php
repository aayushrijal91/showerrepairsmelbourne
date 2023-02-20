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
    <div class="container-fluid position-relative">
        <div class="banner" id="banner-slider">
            <div class="banner-slider-card card-1">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="heading">Melbourne's Leading shower Repair Experts</div>
                            <div class="fs-25 py-5">Call or book a free quote online</div>
                            <div class="row">
                                <div class="col-auto">
                                    <a href="#form" class="btn btn-light rounded-pill border-quarternary shadow-quarternary text-quarternary fs-23 px-5">Free quote</a>
                                </div>
                                <div class="col-auto">
                                    <a href="#form" class="btn btn-tertiary rounded-pill border-primary shadow-primary text-primary fs-23 px-5">Contact us</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 d-flex flex-column align-items-end">
                            <div class="d-inline-flex flex-column align-items-center">
                                <div class="pb-3 fs-17">See our services</div>
                                <a href="#services">
                                    <svg width="53" height="53" viewBox="0 0 53 53" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="26.0579" cy="26.0579" r="25.5579" stroke="#F3F7FB" />
                                        <path d="M34.5728 21.5657L27.1468 28.9917L19.7208 21.5657L17.9707 23.3157L26.2717 31.6168C26.5038 31.8488 26.8186 31.9792 27.1468 31.9792C27.475 31.9792 27.7897 31.8488 28.0218 31.6168L36.3229 23.3157L34.5728 21.5657Z" fill="#F3F7FB" />
                                    </svg>
                                </a>
                            </div>
                            <div>
                                <div class="fs-35 pt-6 pb-5">We have nothing but 5-star Reviews</div>
                                <div class="row align-items-center g-3">
                                    <div class="col-auto"><?= renderImg('google.png', 'icons') ?></div>
                                    <div class="col-auto">
                                        <div class="d-flex align-items-center gap-2 lh-1">
                                            <div><?= renderImg('stars.png', 'icons') ?></div>
                                            <div class="fs-23">(5.0)</div>
                                        </div>
                                        <hr>
                                        <div class="fw-600 fs-23 lh-1">200+ <span class="fw-300">Reviews</span></div>
                                    </div>
                                    <div class="col">
                                        <?= renderImg('local-reviews.png', 'icons') ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="banner-slider-card card-2">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="heading">10% OFF For Seniors!</div>
                            <div class="fs-25 fw-600 pt-3">Present your senior's card to us</div>
                            <div class="fs-25 py-5">Call or book a free quote online</div>
                            <div class="row">
                                <div class="col-auto">
                                    <a href="#form" class="btn btn-light rounded-pill border-quarternary shadow-quarternary text-quarternary fs-23 px-5">Free quote</a>
                                </div>
                                <div class="col-auto">
                                    <a href="#form" class="btn btn-tertiary rounded-pill border-primary shadow-primary text-primary fs-23 px-5">Contact us</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 d-flex flex-column align-items-end">
                            <div class="d-inline-flex flex-column align-items-center">
                                <div class="pb-3 fs-17">See our services</div>
                                <a href="#services">
                                    <svg width="53" height="53" viewBox="0 0 53 53" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="26.0579" cy="26.0579" r="25.5579" stroke="#F3F7FB" />
                                        <path d="M34.5728 21.5657L27.1468 28.9917L19.7208 21.5657L17.9707 23.3157L26.2717 31.6168C26.5038 31.8488 26.8186 31.9792 27.1468 31.9792C27.475 31.9792 27.7897 31.8488 28.0218 31.6168L36.3229 23.3157L34.5728 21.5657Z" fill="#F3F7FB" />
                                    </svg>
                                </a>
                            </div>
                            <div>
                                <div class="fs-35 pt-6 pb-5">We have nothing but 5-star Reviews</div>
                                <div class="row align-items-center g-3">
                                    <div class="col-auto"><?= renderImg('google.png', 'icons') ?></div>
                                    <div class="col-auto">
                                        <div class="d-flex align-items-center gap-2 lh-1">
                                            <div><?= renderImg('stars.png', 'icons') ?></div>
                                            <div class="fs-23">(5.0)</div>
                                        </div>
                                        <hr>
                                        <div class="fw-600 fs-23 lh-1">200+ <span class="fw-300">Reviews</span></div>
                                    </div>
                                    <div class="col">
                                        <?= renderImg('local-reviews.png', 'icons') ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="progressBarContainerWrapper">
            <div class="progressBarContainer row flex-nowrap">
                <div class="col-6">
                    <a class="banner_item" href="javascript:;">
                        <span data-slick-index="0" class="progressBar"></span>
                    </a>
                </div>
                <div class="col-6">
                    <a class="banner_item" href="javascript:;">
                        <span data-slick-index="1" class="progressBar"></span>
                    </a>
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