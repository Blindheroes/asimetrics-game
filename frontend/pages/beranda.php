<?php
global $title;
global $seperator;
global $description;
?>



<!-- header/navbar -->
<?php require_once("frontend/pages/components/navbar.php"); ?>
<!-- end of header/navbar -->
<main>
    <!--Carousel -->
    <!-- <div id="carouselExample" class="carousel slide  rounded-3 ">
        <div class="carousel-inner ">
            <div class="carousel-item active rounded-3 ">
                <img src="assets\images\blog\blog-img-1.jpg" class="w-100" alt="carousel">
            </div>
            <div class="carousel-item rounded-3 ">
                <img src="assets\images\blog\blog-img-2.jpg" class="  h-50" alt="carousel">
            </div>
            <div class="carousel-item rounded-3 ">
                <img src="assets\images\blog\blog-img-3.jpg" class="  h-50" alt="carousel">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div> -->


    <!--hero section start-->
    <section class="right-slant-shape bg-primary pb-10 pt-4" data-cue="fadeIn">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 col-md-12 position-relaive">
                    <div class="text-white-stable text-center position-relaive my-lg-8 my-6" data-cue="zoomIn">
                        <span class="fw-medium fs-4">Hi there, my name is</span>
                        <h1 class="text-white-stable display-3 mt-3 mb-3">Lee Robinson</h1>
                        <p class="mb-0 pb-8 px-lg-7 text-opacity-75 lead">
                            I'm the VP of Developer Experience at Vercel where my team helps developers build a faster web. I'm an advisor and investor in early stage startups.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="position-absolute z-1 w-100 text-center top-25 mt-n8" data-cue="zoomIn">
            <img src="../../assets/images/perosnal-portfolio/personal-profile-img.jpg" alt="avatar" class="rounded-circle shadow-sm border border-white border-4" />
        </div>
    </section>
    <!--hero section end-->

    <!--Call to action start-->
    <section class="my-lg-7 py-5">
        <div class="container">
            <div class="row bg-pattern bg-light rounded-3 py-lg-7 py-5 g-0">
                <div class="col-md-8 offset-md-2">
                    <div class="text-center position-relative z-1 px-5">
                        <div class="mb-5">
                            <h3 class="h2 text-white-stable mb-3">Ready to
                                Trade?</h3>
                            <p class="mb-0 text-white-stable">
                                Start trading with us today and get access to
                                the best trading platform in the world.
                            </p>
                        </div>

                        <a href="#" class="btn btn-dark">Trade Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Call to action end-->

    <!--Case study start-->
    <section class="py-xl-9 py-5 bg-gray-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 col-12">
                    <div class="text-center mb-xl-7 mb-5">
                        <small class="text-uppercase ls-md fw-semibold text-primary">Case study</small>
                        <h2 class="my-3 text-white-stable">Explore Success Stories</h2>
                        <p class="mb-0 text-body">Explore Success Stories: Real-World Impact through Our Customer Case Studies</p>
                    </div>
                </div>
            </div>

            <!-- Blog Card -->
            <div class="table-responsive-lg">
                <div class="row g-5 flex-nowrap pb-4 pb-lg-0 me-5 me-lg-0">

                    <article class="col-lg-4 col-md-6 col-12">
                        <figure class="mb-4 zoom-img">
                            <a href="../blog-single.html">
                                <img src="assets\images\blog\blog-img-5.jpg" alt="blog" class="img-fluid rounded-3" />
                            </a>
                        </figure>

                        <a href="#!" class="badge bg-warning-subtle text-warning-emphasis rounded-pill text-uppercase">Learn</a>
                        <h3 class="my-3 lh-base h4">
                            <a href="../blog-single.html" class="text-reset">Block Template for startup
                                Learn</a>
                        </h3>

                    </article>
                    <article class="col-lg-4 col-md-6 col-12">
                        <figure class="mb-4 zoom-img">
                            <a href="../blog-single.html">
                                <img src="assets\images\blog\blog-img-4.jpg" alt="blog" class="img-fluid rounded-3" />
                            </a>
                        </figure>

                        <a href="#!" class="badge bg-warning-subtle text-warning-emphasis rounded-pill text-uppercase">Learn</a>
                        <h3 class="my-3 lh-base h4">
                            <a href="../blog-single.html" class="text-reset">Block Template for startup
                                Learn</a>
                        </h3>

                    </article>
                    <article class="col-lg-4 col-md-6 col-12">
                        <figure class="mb-4 zoom-img">
                            <a href="../blog-single.html">
                                <img src="assets\images\blog\blog-img-3.jpg" alt="blog" class="img-fluid rounded-3" />
                            </a>
                        </figure>

                        <a href="#!" class="badge bg-warning-subtle text-warning-emphasis rounded-pill text-uppercase">Learn</a>
                        <h3 class="my-3 lh-base h4">
                            <a href="../blog-single.html" class="text-reset">Block Template for startup
                                Learn</a>
                        </h3>

                    </article>


                </div>
            </div>


            <div class="d-flex gap-3 justify-content-center">
                <div class="btn-prev btn btn-icon btn-white rounded-pill">
                    <i class="bi bi-arrow-left-short fs-3 lh-1"></i>
                </div>
                <div class="btn-next btn btn-icon btn-white rounded-pill">
                    <i class="bi bi-arrow-right-short fs-3 lh-1"></i>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!--Case study end-->

    <style>
        .swiper-container {
            width: 100%;
            height: 100%;
        }

        .swiper-slide {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .card {
            width: 100%;
            max-width: 300px;
        }
    </style>

    <script>
        var swiper = new Swiper('.sliderSwiperThumbanil', {
            slidesPerView: 1,
            spaceBetween: 30,
            navigation: {
                nextEl: '.btn-next',
                prevEl: '.btn-prev',
            },
            breakpoints: {
                640: {
                    slidesPerView: 1,
                    spaceBetween: 20,
                },
                768: {
                    slidesPerView: 2,
                    spaceBetween: 40,
                },
                1024: {
                    slidesPerView: 3,
                    spaceBetween: 50,
                },
            },
        });
    </script>

    <!--Case study end-->

    <!--Our articles start-->
    <section class="my-xl-9 my-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="text-center mb-xl-7 mb-5">
                        <h2 class="h1 mb-3">News</h2>
                        <p class="mb-0">
                            Read the latest news and updates from our blog
                        </p>
                    </div>
                </div>
            </div>
            <!-- Blog Card -->
            <div class="table-responsive-lg">
                <div class="row g-5 flex-nowrap pb-4 pb-lg-0 me-5 me-lg-0">

                    <article class="col-lg-4 col-md-6 col-12">
                        <figure class="mb-4 zoom-img">
                            <a href="../blog-single.html">
                                <img src="assets\images\blog\blog-img-5.jpg" alt="blog" class="img-fluid rounded-3" />
                            </a>
                        </figure>


                        <h3 class="my-3 lh-base h4">
                            <a href="../blog-single.html" class="text-reset">Block Template for startup
                                Learn</a>
                        </h3>

                    </article>
                    <article class="col-lg-4 col-md-6 col-12">
                        <figure class="mb-4 zoom-img">
                            <a href="../blog-single.html">
                                <img src="assets\images\blog\blog-img-4.jpg" alt="blog" class="img-fluid rounded-3" />
                            </a>
                        </figure>


                        <h3 class="my-3 lh-base h4">
                            <a href="../blog-single.html" class="text-reset">Block Template for startup
                                Learn</a>
                        </h3>

                    </article>
                    <article class="col-lg-4 col-md-6 col-12">
                        <figure class="mb-4 zoom-img">
                            <a href="../blog-single.html">
                                <img src="assets\images\blog\blog-img-3.jpg" alt="blog" class="img-fluid rounded-3" />
                            </a>
                        </figure>


                        <h3 class="my-3 lh-base h4">
                            <a href="../blog-single.html" class="text-reset">Block Template for startup
                                Learn</a>
                        </h3>

                    </article>


                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="mt-lg-8 mt-5">
                        <a href="./blog.html" class="icon-link icon-link-hover text-dark">
                            Learn more
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Our articles end-->

    <section class="py-xl-9 py-5 bg-gray-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 col-12">
                    <div class="text-center mb-xl-7 mb-5">
                        <small class="text-uppercase ls-md fw-semibold text-primary">Case study</small>
                        <h2 class="my-3 text-white-stable">Explore Success Stories</h2>
                        <p class="mb-0 text-body">Explore Success Stories: Real-World Impact through Our Customer Case Studies</p>
                    </div>
                </div>
            </div>


            <!-- TradingView Widget BEGIN -->
            <center>
                <div class="item-center tradingview-widget-container">
                    <div class="tradingview-widget-container__widget"></div>
                    <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/" rel="noopener nofollow" target="_blank"><span class="blue-text">Track all markets on TradingView</span></a></div>
                    <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-hotlists.js" async>
                        {
                            "colorTheme": "dark",
                            "dateRange": "12M",
                            "exchange": "US",
                            "showChart": true,
                            "locale": "en",
                            "largeChartUrl": "",
                            "isTransparent": false,
                            "showSymbolLogo": false,
                            "showFloatingTooltip": false,
                            "width": "900",
                            "height": "550",
                            "plotLineColorGrowing": "rgba(41, 98, 255, 1)",
                            "plotLineColorFalling": "rgba(41, 98, 255, 1)",
                            "gridLineColor": "rgba(42, 46, 57, 0)",
                            "scaleFontColor": "rgba(209, 212, 220, 1)",
                            "belowLineFillColorGrowing": "rgba(41, 98, 255, 0.12)",
                            "belowLineFillColorFalling": "rgba(41, 98, 255, 0.12)",
                            "belowLineFillColorGrowingBottom": "rgba(41, 98, 255, 0)",
                            "belowLineFillColorFallingBottom": "rgba(41, 98, 255, 0)",
                            "symbolActiveColor": "rgba(41, 98, 255, 0.12)"
                        }
                    </script>
                </div>
            </center>
            <!-- TradingView Widget END -->




        </div>
    </section>

</main>
<!-- footer -->
<?php require_once("frontend/pages/components/footer.php"); ?>
<!-- end of footer -->