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

<section class="awards">
    <div class="container">
        <div class="row">
            <div class="col-5">
                <div class="fw-600 fs-57 lh-1 text-primary">Professional, Affordable &amp; Considerate Technicians</div>
                <div class="row align-items-center g-3 pt-7">
                    <div class="col-auto"><?= renderImg('google.svg', 'icons') ?></div>
                    <div class="col-auto text-primary">
                        <div class="d-flex align-items-center gap-2 lh-1">
                            <div><?= renderImg('stars.png', 'icons') ?></div>
                            <div class="fs-23">(5.0)</div>
                        </div>
                        <hr class="my-2">
                        <div class="fw-600 fs-23 lh-1">200+ <span class="fw-300">Reviews</span></div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="awards-container">
                    <div class="fs-17 lh-1_7">We offer renovation and expansion services for all waterproofing and sealing projects. Our experts will guide you through the process and help you visualise your dream outcome. Our valuable advice and support is the key to successful waterproofing and sealing projects in Melbourne. So, if you're looking for the best shower sealing company in the city, let us show you our expertise.</div>
                    <div class="text-capitalize fs-25 fw-600 lh-1 pt-5 pb-4">Best shower seal company award winner</div>
                    <div class="row pt-4 justify-content-around">
                        <div class="col-auto"><?= renderImg('award-2020.png', 'lib') ?></div>
                        <div class="col-auto"><?= renderImg('award-2021.png', 'lib') ?></div>
                        <div class="col-auto"><?= renderImg('award-2022.png', 'lib') ?></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="why-us">
    <div class="container">
        <div class="row">
            <div class="col-5">
                <div class="fw-600 fs-57 lh-1 text-primary">Why should you choose Shower Repair Melbourne?</div>
            </div>
            <div class="col">
                <div class="fs-17 lh-1_7 text-dark">
                    <p>We have seen the negative effects of poor workmanship in the industry, with discoloration, cracks, mould growth, unpleasant odours, and black spots in ceilings being just a few of the consequences. This is why we take pride in our work and ensure that every project is completed to the highest standards.</p>
                    <p>Don't settle for less when it comes to renovating your home. Trust the experts at Shower Repairs Melbourne and get the peace of mind that comes with a job done right.</p>
                </div>
                <div class="row pt-6">
                    <div class="col-auto">
                        <a href="#form" class="btn btn-light rounded-pill border-quarternary shadow-quarternary text-quarternary fs-23 px-5">Free quote</a>
                    </div>
                    <div class="col-auto">
                        <a href="#form" class="btn btn-quarternary rounded-pill border-primary shadow-primary text-white fs-23 px-5">Contact us</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row pt-7 gx-3">
            <div class="col-4">
                <div class="why-us-card bg-tertiary active">
                    <div>
                        <div class="fs-16 text-primary">Why should you choose Shower Repairs Melbourne?</div>
                        <div class="heading pt-5">We consult &amp; give practical advice</div>
                        <div class="fs-17 text-primary fw-600 py-4">We're the best in the industry</div>
                        <div class="fw-300 fs-16 lh-2 pt-2 pb-6">
                            At Shower Repairs Melbourne, we have been providing shower repair services to the <span class="fw-600">Melbourne community since 2010</span>, with over <span class="fw-600">3600 successful bathroom renovations to date</span>. Our success is driven by our superior designs and unparalleled workmanship. Choose us for your next shower repair project and experience the best in the industry. Shower repairs are a highly personal project, and it requires a <span class="fw-600">company with both creativity and experience</span> to ensure a seamless repair that meets the latest styles and trends.
                        </div>
                    </div>
                    <div class="divider bg-primary"></div>
                </div>
            </div>
            <div class="col-4">
                <div class="why-us-card bg-tertiary">
                    <div>
                        <div class="fs-16 text-primary">Why should you choose Shower Repairs Melbourne?</div>
                        <div class="heading pt-5">Offering the best water proofing service in Melbourne</div>
                        <div class="fs-17 text-primary fw-600 py-4">We have Lifetime Warranty</div>
                        <div class="fw-300 fs-16 lh-2 pt-2 pb-6">
                            We offer renovation and expansion services for all waterproofing and sealing projects. <span class="fw-600">Our experts will guide you through the process</span> and help you visualise your dream outcome. Our <span class="fw-600">valuable advice and support</span> is the key to successful waterproofing and sealing projects in Melbourne. So, if you're looking for the <span class="fw-600">best shower sealing company</span> in the city, let us show you our expertise.
                        </div>
                    </div>
                    <div class="divider bg-primary"></div>
                </div>
            </div>
            <div class="col-4">
                <div class="why-us-card bg-secondary">
                    <div>
                        <div class="fs-16 text-white">Why should you choose Shower Repairs Melbourne?</div>
                        <div class="heading pt-5">We consult &amp; give practical advice</div>
                        <div class="fs-17 text-white fw-600 py-4">We're the best in the industry</div>
                        <div class="fw-300 fs-16 lh-2 pt-2 pb-6 text-white">
                            Shower Repairs Melbourne - <span class="fw-600">Quality Workmanship You Can Count On!</span>
                            At Shower Repairs Melbourne, we understand the importance of quality workmanship in shower sealing and waterproofing. Unlike some contractors who offer quick and cheap services, we are fully licensed and committed to providing you with a sealing and waterproofing solution <span class="fw-600">that lasts a lifetime.</span>
                        </div>
                    </div>
                    <div class="divider bg-white"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="services">
    <div class="bg-light text-primary pb-7">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-auto fs-57 fw-600">What services we offer</div>
                <div class="col-auto fs-17 fw-300">Explore what we do</div>
            </div>
        </div>
    </div>
    <div class="bg-light-blue py-9">
        <?php
        $services = [
            [
                "name" => "Shower Sealing",
                "icon" => "shower-sealing.png",
                "description" => "We'll be at your door within the hour."
            ],
            [
                "name" => "Gutter Cleaning",
                "icon" => "gutter-cleaning.png",
                "description" => "We provide a free quote for all gutter and downpipe jobs, ensuring that you know the cost before any work begins. From a basic gutter clean to a full replacement, we offer expert services for all your gutter needs."
            ],
        ];
        ?>
        <div class="container">
            <div class="row g-4">
                <?php foreach ($services as $index => $service) { ?>
                    <div class="col-md-6 col-lg-4">
                        <div class="service-card">
                            <div>
                                <div class="row align-items-center px-2">
                                    <div class="col-auto"><?= renderImg($service['icon'], 'icons') ?></div>
                                    <div class="col fs-25 fw-500 lh-1"><?= $service['name'] ?></div>
                                </div>
                                <div class="image">
                                    <?= renderImg('service-' . ($index + 1) . '.jpg', 'lib') ?>
                                </div>
                                <div class="px-2 fs-17 fw-300 pt-2 pb-6 description"><?= $service['description'] ?></div>
                            </div>
                            <div>
                                <div class="divider"></div>
                                <div class="row justify-content-between align-items-center px-2 pt-3 text-light-blue">
                                    <div class="col-4 fw-600 ls-0_195"><?= ($index + 1) . '/' . count($services) ?></div>
                                    <div class="col-4 text-center">
                                        <a href="javascript:void(0)" class="showMoreServiceDescription">
                                            <svg width="53" height="53" viewBox="0 0 53 53" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <circle cx="26.0579" cy="26.0579" r="25.5579" stroke="#F3F7FB" />
                                                <path d="M34.5728 21.5657L27.1468 28.9917L19.7208 21.5657L17.9707 23.3157L26.2717 31.6168C26.5038 31.8488 26.8186 31.9792 27.1468 31.9792C27.475 31.9792 27.7897 31.8488 28.0218 31.6168L36.3229 23.3157L34.5728 21.5657Z" fill="#F3F7FB" />
                                            </svg>
                                        </a>
                                    </div>
                                    <div class="col-4 fw-300 text-end">Our services</div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</section>

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