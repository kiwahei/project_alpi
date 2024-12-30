<?php $this->load->view("web/_partials/head.php") ?>
<?php $this->load->view("web/_partials/navbar.php") ?>
<?php $this->load->view("web/_partials/navbar-mobile.php") ?>

<div id="page-content" class="mb-0">
    <!--Home Slideshow-->
    <section class="slideshow slideshow-wrapper">
        <div class="home-slideshow slick-arrow-dots rounded-dots circle-arrow">
            <div class="slide">
                <div class="slideshow-wrap">
                    <picture>
                        <source media="(max-width:767px)" srcset="assets/images/slideshow/demo4-banner1-mbl.jpg"
                            width="1000" height="990">
                        <img class="blur-up lazyload" src="assets/images/slideshow/demo4-banner1.jpg"
                            alt="slideshow" title="" width="1920" height="990" />
                    </picture>
                    <div class="container">
                        <div class="slideshow-content slideshow-overlay middle-right">
                            <div class="slideshow-content-in">
                                <div class="wrap-caption animation style1 whiteText">
                                    <h2 class="ss-mega-title">Under Favorable <br>Gadgets</h2>
                                    <p class="ss-sub-title">The curved display has a curvature level
                                        equivalent<br> to that of a circle tracks the round.</p>
                                    <div class="ss-btnWrap">
                                        <a class="btn btn-primary" href="shop-grid-view.html">Explore Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slide">
                <div class="slideshow-wrap">
                    <picture>
                        <source media="(max-width:767px)" srcset="assets/images/slideshow/demo4-banner2-mbl.jpg"
                            width="1000" height="990">
                        <img class="blur-up lazyload" src="assets/images/slideshow/demo4-banner2.jpg"
                            alt="slideshow" title="" width="1920" height="990" />
                    </picture>
                    <div class="container">
                        <div class="slideshow-content slideshow-overlay middle-left">
                            <div class="slideshow-content-in">
                                <div class="wrap-caption animation style1 whiteText">
                                    <h2 class="ss-mega-title">Top Branded <br>Headphones</h2>
                                    <p class="ss-sub-title">Smart Home Gedget with <span
                                            class="text-primary fw-bold">50% </span>Discount</p>
                                    <div class="ss-btnWrap">
                                        <a class="btn btn-primary" href="shop-grid-view.html">Shop now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Home Slideshow-->

     <!-- Service section -->
     <section class="service-section section-md mt-m6 section-clr">
        <div class="container">
            <div
                class="service-info separate-line mdt-0 g-3 g-md-3 row row-cols-lg-3 row-cols-md-2 row-cols-sm-2 row-cols-1">
                <div
                    class="service-wrap d-flex-center justify-content-sm-center flex-nowrap py-lg-1 mb-2 mb-sm-3 mb-md-0">
                    <div class="service-icon d-flex align-items-center">
                        <i class="icon anm anm-truck-l"></i>
                    </div>
                    <div class="service-content ms-3">
                        <h6 class="head-font">Free Shipping & Return</h6>
                        <p class="text-muted">Free Shipping on all orders over $99</p>
                    </div>
                </div>
                <div
                    class="service-wrap d-flex-center justify-content-sm-center flex-nowrap py-lg-1 mb-2 mb-sm-3 mb-md-0">
                    <div class="service-icon d-flex align-items-center">
                        <i class="icon anm anm-credit-card-l"></i>
                    </div>
                    <div class="service-content ms-3">
                        <h6 class="head-font">Professional Support</h6>
                        <p class="text-muted">We're there when you need us! 24/7</p>
                    </div>
                </div>
                <div
                    class="service-wrap d-flex-center justify-content-sm-center flex-nowrap py-lg-1 mb-0 mb-sm-0 mb-md-0">
                    <div class="service-icon d-flex align-items-center">
                        <i class="icon anm anm-dollar-sign-l"></i>
                    </div>
                    <div class="service-content ms-3">
                        <h6 class="head-font">Money Back Guarantee</h6>
                        <p class="text-muted">If goods have problems</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Service section -->

    
    <!--Shop By Category-->
    <section class="section collection-slider pt-0 mt-3">
        <div class="container">
            <div class="section-header style2 d-flex-center justify-content-sm-between">
                <div class="section-header-left text-start">
                    <h2>Shop By Category</h2>
                    <p>Shop our new arrivals from established brands</p>
                </div>
                <div class="section-header-right text-start text-sm-end mt-3 mt-sm-0">
                    <a href="shop-left-sidebar.html" class="btn btn-primary">View All Category <i
                            class="icon anm anm-arw-right ms-2"></i></a>
                </div>
            </div>

          
            <div class="collection-slider-3items slick-arrow-dots gp15 arwOut5 hov-arrow circle-arrow">
                <?php foreach ($categories as $c): ?>

                <div class="category-item zoomscal-hov overlay-content">
                    <a href="shop-left-sidebar.html" class="category-link clr-none">
                        <div class="zoom-scal"><img class="blur-up lazyload"
                                data-src="assets/images/collection/demo4-ct2-img1.jpg"
                                src="assets/images/collection/demo4-ct2-img1.jpg" alt="collection" title=""
                                width="416" height="416" /></div>
                        <div class="details whiteText text-center p-0">
                            <h4 class="category-title h2 text-uppercase mb-2 pb-1"><?= $c["name"] ?></h4>
                            <span class="category-btn btn-brd fw-500 text-uppercase">Shop Now</span>
                        </div>
                    </a>
                </div>

                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <!--End Shop By Category-->

   

    <!--Products Slider-->
    <section class="section product-banner-slider">
        <div class="container">
            <div class="section-header style2 d-flex-center justify-content-sm-between">
                <div class="section-header-left text-start">
                    <h2>New Arrivals</h2>
                    <p>Shop our new arrivals from established brands</p>
                </div>
                <div class="section-header-right text-start text-sm-end mt-3 mt-sm-0">
                    <a href="shop-left-sidebar.html" class="btn btn-primary">View More <i
                            class="icon anm anm-arw-right ms-2"></i></a>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-3 mb-4 mb-lg-0">
                    <div class="ctg-bnr-wrap one position-relative h-100">
                        <div class="ctg-image ratio ratio-1x1 h-100">
                            <img class="blur-up lazyload"
                                data-src="assets/images/collection/demo3-side-bnr1.jpg"
                                src="assets/images/collection/demo3-side-bnr1.jpg" alt="collection" width="390"
                                height="483" />
                        </div>
                        <div class="ctg-content text-white d-flex-justify-center flex-nowrap flex-column h-100">
                            <h2 class="ctg-title text-white m-0"><span class="d-block">Lifestyle</span>
                                Collections</h2>
                            <p class="ctg-des mt-3 mb-4">Shop our weekly edit of what's new in online at Hema
                                collections.</p>
                            <a class="btn btn-secondary explore-btn" href="shop-left-sidebar.html">Explore Now
                                <i class="icon anm anm-arw-right ms-2"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-12 col-md-12 col-lg-9">
                    <div
                        class="grid-products product-slider-3items gp15 arwOut5 hov-arrow circle-arrow arrowlr-0">
                        <?php foreach ($products as $p): ?>
                        <div class="item col-item">
                            <div class="product-box">
                                <!-- Start Product Image -->
                                <div class="product-image">
                                    <!-- Start Product Image -->
                                    <a href="product-layout1.html" class="product-img">
                                        <!-- Image -->
                                        <img class="primary blur-up lazyload"
                                            data-src="assets/images/products/electronic-product8.jpg"
                                            src="assets/images/products/electronic-product8.jpg" alt="Product"
                                            title="Product" width="625" height="625" />
                                        <!-- End Image -->
                                        <!-- Hover Image -->
                                        <img class="hover blur-up lazyload"
                                            data-src="assets/images/products/electronic-product8-1.jpg"
                                            src="assets/images/products/electronic-product8-1.jpg" alt="Product"
                                            title="Product" width="625" height="625" />
                                        <!-- End Hover Image -->
                                    </a>
                                    <!-- End Product Image -->
                                    <!--Product Button-->
                                    <div class="button-set-top style1">
                                        <!--Quick View Button-->
                                        <a href="#quickview-modal"
                                            class="btn-icon rounded-5 quickview quick-view-modal"
                                            data-bs-toggle="modal" data-bs-target="#quickview_modal">
                                            <span class="icon-wrap d-flex-justify-center h-100 w-100"
                                                data-bs-toggle="tooltip" data-bs-placement="left"
                                                title="Quick View"><i
                                                    class="icon anm anm-search-plus-l"></i><span
                                                    class="text">Quick View</span></span>
                                        </a>
                                        <!--End Quick View Button-->
                                        <!--Wishlist Button-->
                                        <a href="wishlist-style2.html" class="btn-icon rounded-5 wishlist"
                                            data-bs-toggle="tooltip" data-bs-placement="left"
                                            title="Add To Wishlist"><i class="icon anm anm-heart-l"></i><span
                                                class="text">Add To Wishlist</span></a>
                                        <!--End Wishlist Button-->
                                        <!--Compare Button-->
                                        <a href="compare-style2.html" class="btn-icon rounded-5 compare"
                                            data-bs-toggle="tooltip" data-bs-placement="left"
                                            title="Add to Compare"><i class="icon anm anm-random-r"></i><span
                                                class="text">Add to Compare</span></a>
                                        <!--End Compare Button-->
                                    </div>
                                    <!--End Product Button-->
                                </div>
                                <!-- End Product Image -->
                                <!-- Start Product Details -->
                                <div class="product-details text-left">
                                    <!--Product Vendor-->
                                    <div class="product-vendor">Electronic</div>
                                    <!--End Product Vendor-->
                                    <!-- Product Name -->
                                    <div class="product-name">
                                        <a href="product-layout1.html"><?= $p['name'] ?></a>
                                    </div>
                                    <!-- End Product Name -->
                                    <!-- Product Price -->
                                    <div class="product-price">
                                        <span class="price">Rp. <?= $p['price'] ?></span>
                                    </div>
                                    <!-- End Product Price -->
                                    <!-- Product Review -->
                                    <div class="product-review">
                                        <i class="icon anm anm-star-o"></i><i class="icon anm anm-star-o"></i><i
                                            class="icon anm anm-star-o"></i><i
                                            class="icon anm anm-star-o"></i><i class="icon anm anm-star-o"></i>
                                        <span class="caption hidden ms-1">0 Reviews</span>
                                    </div>
                                    <!-- End Product Review -->
                                    <!-- Product Button -->
                                    <div class="button-action">
                                        <div class="addtocart-btn">
                                            <form class="addtocart" action="#" method="post">
                                                <a href="#addtocart-modal"
                                                    class="btn btn-secondary addtocart add-to-cart-modal"
                                                    data-bs-toggle="modal" data-bs-target="#addtocart_modal">
                                                    <i class="icon anm anm-basket-l me-2"></i>
                                                    <button class="text btn btn-link add-to-cart" data-product-id="<?= $p["id"] ?>" type="button">Add to Cart</button>
                                                  
                                                </a>
                                            </form>
                                        </div>
                                    </div>
                                    <!-- End Product Button -->
                                </div>
                                <!-- End product details -->
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Products Slider-->


    <!--Products Slider-->
    <section class="section product-banner-slider pt-0">
        <div class="container">
            <div class="section-header style2 d-flex-center justify-content-sm-between">
                <div class="section-header-left text-start">
                    <h2>This Week Top Picks</h2>
                    <p>Shop our new arrivals from established brands</p>
                </div>
                <div class="section-header-right text-start text-sm-end mt-3 mt-sm-0">
                    <a href="shop-left-sidebar.html" class="btn btn-primary">View More <i
                            class="icon anm anm-arw-right ms-2"></i></a>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-9">
                    <div
                        class="grid-products product-slider-3items gp15 arwOut5 hov-arrow circle-arrow arrowlr-0">
                        <div class="item col-item">
                            <div class="product-box">
                                <!-- Start Product Image -->
                                <div class="product-image">
                                    <!-- Start Product Image -->
                                    <a href="product-layout1.html" class="product-img">
                                        <!-- Image -->
                                        <img class="primary blur-up lazyload"
                                            data-src="assets/images/products/electronic-product4.jpg"
                                            src="assets/images/products/electronic-product4.jpg" alt="Product"
                                            title="Product" width="625" height="625" />
                                        <!-- End Image -->
                                        <!-- Hover Image -->
                                        <img class="hover blur-up lazyload"
                                            data-src="assets/images/products/electronic-product4-1.jpg"
                                            src="assets/images/products/electronic-product4-1.jpg" alt="Product"
                                            title="Product" width="625" height="625" />
                                        <!-- End Hover Image -->
                                    </a>
                                    <!-- End Product Image -->
                                    <!--Product Button-->
                                    <div class="button-set-top style1">
                                        <!--Quick View Button-->
                                        <a href="#quickview-modal"
                                            class="btn-icon rounded-5 quickview quick-view-modal"
                                            data-bs-toggle="modal" data-bs-target="#quickview_modal">
                                            <span class="icon-wrap d-flex-justify-center h-100 w-100"
                                                data-bs-toggle="tooltip" data-bs-placement="left"
                                                title="Quick View"><i
                                                    class="icon anm anm-search-plus-l"></i><span
                                                    class="text">Quick View</span></span>
                                        </a>
                                        <!--End Quick View Button-->
                                        <!--Wishlist Button-->
                                        <a href="wishlist-style2.html" class="btn-icon rounded-5 wishlist"
                                            data-bs-toggle="tooltip" data-bs-placement="left"
                                            title="Add To Wishlist"><i class="icon anm anm-heart-l"></i><span
                                                class="text">Add To Wishlist</span></a>
                                        <!--End Wishlist Button-->
                                        <!--Compare Button-->
                                        <a href="compare-style2.html" class="btn-icon rounded-5 compare"
                                            data-bs-toggle="tooltip" data-bs-placement="left"
                                            title="Add to Compare"><i class="icon anm anm-random-r"></i><span
                                                class="text">Add to Compare</span></a>
                                        <!--End Compare Button-->
                                    </div>
                                    <!--End Product Button-->
                                    <!--Product Availability-->
                                    <div class="product-availability rounded-5">
                                        <div class="lh-1 d-flex justify-content-between">
                                            <div class="text-sold">Sold:<strong
                                                    class="text-primary ms-1">34</strong></div>
                                            <div class="text-available">Available:<strong
                                                    class="text-primary ms-1">16</strong></div>
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar w-75" role="progressbar" aria-valuenow="75"
                                                aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <!--End Product Availability-->
                                </div>
                                <!-- End Product Image -->
                                <!-- Start Product Details -->
                                <div class="product-details text-left">
                                    <!--Product Vendor-->
                                    <div class="product-vendor">LG</div>
                                    <!--End Product Vendor-->
                                    <!-- Product Name -->
                                    <div class="product-name">
                                        <a href="product-layout1.html">Bluetooth Smart Wacthes</a>
                                    </div>
                                    <!-- End Product Name -->
                                    <!-- Product Price -->
                                    <div class="product-price">
                                        <span class="price old-price">$198.00</span><span
                                            class="price">$99.00</span>
                                    </div>
                                    <!-- End Product Price -->
                                    <!-- Product Review -->
                                    <div class="product-review">
                                        <i class="icon anm anm-star-o"></i><i class="icon anm anm-star-o"></i><i
                                            class="icon anm anm-star-o"></i><i
                                            class="icon anm anm-star-o"></i><i class="icon anm anm-star-o"></i>
                                        <span class="caption hidden ms-1">0 Reviews</span>
                                    </div>
                                    <!-- End Product Review -->
                                    <!-- Product Button -->
                                    <div class="button-action">
                                        <div class="addtocart-btn">
                                            <form class="addtocart" action="#" method="post">
                                                <a href="#addtocart-modal"
                                                    class="btn btn-secondary addtocart add-to-cart-modal"
                                                    data-bs-toggle="modal" data-bs-target="#addtocart_modal">
                                                    <i class="icon anm anm-basket-l me-2"></i><span
                                                        class="text">Add to Cart</span>
                                                </a>
                                            </form>
                                        </div>
                                    </div>
                                    <!-- End Product Button -->
                                </div>
                                <!-- End product details -->
                            </div>
                        </div>
                        <div class="item col-item">
                            <div class="product-box">
                                <!-- Start Product Image -->
                                <div class="product-image">
                                    <!-- Start Product Image -->
                                    <a href="product-layout1.html" class="product-img">
                                        <!-- Image -->
                                        <img class="primary blur-up lazyload"
                                            data-src="assets/images/products/electronic-product5.jpg"
                                            src="assets/images/products/electronic-product5.jpg" alt="Product"
                                            title="Product" width="625" height="625" />
                                        <!-- End Image -->
                                        <!-- Hover Image -->
                                        <img class="hover blur-up lazyload"
                                            data-src="assets/images/products/electronic-product5-1.jpg"
                                            src="assets/images/products/electronic-product5-1.jpg" alt="Product"
                                            title="Product" width="625" height="625" />
                                        <!-- End Hover Image -->
                                    </a>
                                    <!-- End Product Image -->
                                    <!-- Product label -->
                                    <div class="product-labels radius"><span class="lbl pr-label2">Hot</span>
                                    </div>
                                    <!-- End Product label -->
                                    <!--Product Button-->
                                    <div class="button-set-top style1">
                                        <!--Quick View Button-->
                                        <a href="#quickview-modal"
                                            class="btn-icon rounded-5 quickview quick-view-modal"
                                            data-bs-toggle="modal" data-bs-target="#quickview_modal">
                                            <span class="icon-wrap d-flex-justify-center h-100 w-100"
                                                data-bs-toggle="tooltip" data-bs-placement="left"
                                                title="Quick View"><i
                                                    class="icon anm anm-search-plus-l"></i><span
                                                    class="text">Quick View</span></span>
                                        </a>
                                        <!--End Quick View Button-->
                                        <!--Wishlist Button-->
                                        <a href="wishlist-style2.html" class="btn-icon rounded-5 wishlist"
                                            data-bs-toggle="tooltip" data-bs-placement="left"
                                            title="Add To Wishlist"><i class="icon anm anm-heart-l"></i><span
                                                class="text">Add To Wishlist</span></a>
                                        <!--End Wishlist Button-->
                                        <!--Compare Button-->
                                        <a href="compare-style2.html" class="btn-icon rounded-5 compare"
                                            data-bs-toggle="tooltip" data-bs-placement="left"
                                            title="Add to Compare"><i class="icon anm anm-random-r"></i><span
                                                class="text">Add to Compare</span></a>
                                        <!--End Compare Button-->
                                    </div>
                                    <!--End Product Button-->
                                </div>
                                <!-- End Product Image -->
                                <!-- Start Product Details -->
                                <div class="product-details text-left">
                                    <!--Product Vendor-->
                                    <div class="product-vendor">HP</div>
                                    <!--End Product Vendor-->
                                    <!-- Product Name -->
                                    <div class="product-name">
                                        <a href="product-layout1.html">Light with Tripod Stand</a>
                                    </div>
                                    <!-- End Product Name -->
                                    <!-- Product Price -->
                                    <div class="product-price">
                                        <span class="price">$39.00</span>
                                    </div>
                                    <!-- End Product Price -->
                                    <!-- Product Review -->
                                    <div class="product-review">
                                        <i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i
                                            class="icon anm anm-star-o"></i><i
                                            class="icon anm anm-star-o"></i><i class="icon anm anm-star-o"></i>
                                        <span class="caption hidden ms-1">3 Reviews</span>
                                    </div>
                                    <!-- End Product Review -->
                                    <!-- Product Button -->
                                    <div class="button-action">
                                        <div class="addtocart-btn">
                                            <form class="addtocart" action="#" method="post">
                                                <a href="#addtocart-modal"
                                                    class="btn btn-secondary addtocart add-to-cart-modal"
                                                    data-bs-toggle="modal" data-bs-target="#addtocart_modal">
                                                    <i class="icon anm anm-basket-l me-2"></i><span
                                                        class="text">Add to Cart</span>
                                                </a>
                                            </form>
                                        </div>
                                    </div>
                                    <!-- End Product Button -->
                                </div>
                                <!-- End product details -->
                            </div>
                        </div>
                        <div class="item col-item">
                            <div class="product-box">
                                <!-- Start Product Image -->
                                <div class="product-image">
                                    <!-- Start Product Image -->
                                    <a href="product-layout1.html" class="product-img">
                                        <!-- Image -->
                                        <img class="primary blur-up lazyload"
                                            data-src="assets/images/products/electronic-product6.jpg"
                                            src="assets/images/products/electronic-product6.jpg" alt="Product"
                                            title="Product" width="625" height="625" />
                                        <!-- End Image -->
                                        <!-- Hover Image -->
                                        <img class="hover blur-up lazyload"
                                            data-src="assets/images/products/electronic-product6-1.jpg"
                                            src="assets/images/products/electronic-product6-1.jpg" alt="Product"
                                            title="Product" width="625" height="625" />
                                        <!-- End Hover Image -->
                                    </a>
                                    <!-- End Product Image -->
                                    <!--Product Button-->
                                    <div class="button-set-top style1">
                                        <!--Quick View Button-->
                                        <a href="#quickview-modal"
                                            class="btn-icon rounded-5 quickview quick-view-modal"
                                            data-bs-toggle="modal" data-bs-target="#quickview_modal">
                                            <span class="icon-wrap d-flex-justify-center h-100 w-100"
                                                data-bs-toggle="tooltip" data-bs-placement="left"
                                                title="Quick View"><i
                                                    class="icon anm anm-search-plus-l"></i><span
                                                    class="text">Quick View</span></span>
                                        </a>
                                        <!--End Quick View Button-->
                                        <!--Wishlist Button-->
                                        <a href="wishlist-style2.html" class="btn-icon rounded-5 wishlist"
                                            data-bs-toggle="tooltip" data-bs-placement="left"
                                            title="Add To Wishlist"><i class="icon anm anm-heart-l"></i><span
                                                class="text">Add To Wishlist</span></a>
                                        <!--End Wishlist Button-->
                                        <!--Compare Button-->
                                        <a href="compare-style2.html" class="btn-icon rounded-5 compare"
                                            data-bs-toggle="tooltip" data-bs-placement="left"
                                            title="Add to Compare"><i class="icon anm anm-random-r"></i><span
                                                class="text">Add to Compare</span></a>
                                        <!--End Compare Button-->
                                    </div>
                                    <!--End Product Button-->
                                </div>
                                <!-- End Product Image -->
                                <!-- Start Product Details -->
                                <div class="product-details text-left">
                                    <!--Product Vendor-->
                                    <div class="product-vendor">Philips</div>
                                    <!--End Product Vendor-->
                                    <!-- Product Name -->
                                    <div class="product-name">
                                        <a href="product-layout1.html">Bullet Cameras with Audio</a>
                                    </div>
                                    <!-- End Product Name -->
                                    <!-- Product Price -->
                                    <div class="product-price">
                                        <span class="price">$299.00</span>
                                    </div>
                                    <!-- End Product Price -->
                                    <!-- Product Review -->
                                    <div class="product-review">
                                        <i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i
                                            class="icon anm anm-star"></i><i class="icon anm anm-star-o"></i><i
                                            class="icon anm anm-star-o"></i>
                                        <span class="caption hidden ms-1">15 Reviews</span>
                                    </div>
                                    <!-- End Product Review -->
                                    <!-- Product Button -->
                                    <div class="button-action">
                                        <div class="addtocart-btn">
                                            <form class="addtocart" action="#" method="post">
                                                <a href="#addtocart-modal"
                                                    class="btn btn-secondary addtocart add-to-cart-modal"
                                                    data-bs-toggle="modal" data-bs-target="#addtocart_modal">
                                                    <i class="icon anm anm-basket-l me-2"></i><span
                                                        class="text">Add to Cart</span>
                                                </a>
                                            </form>
                                        </div>
                                    </div>
                                    <!-- End Product Button -->
                                </div>
                                <!-- End product details -->
                            </div>
                        </div>
                        <div class="item col-item">
                            <div class="product-box">
                                <!-- Start Product Image -->
                                <div class="product-image">
                                    <!-- Start Product Image -->
                                    <a href="product-layout1.html" class="product-img">
                                        <!-- Image -->
                                        <img class="primary blur-up lazyload"
                                            data-src="assets/images/products/electronic-product7.jpg"
                                            src="assets/images/products/electronic-product7.jpg" alt="Product"
                                            title="Product" width="625" height="625" />
                                        <!-- End Image -->
                                        <!-- Hover Image -->
                                        <img class="hover blur-up lazyload"
                                            data-src="assets/images/products/electronic-product7-1.jpg"
                                            src="assets/images/products/electronic-product7-1.jpg" alt="Product"
                                            title="Product" width="625" height="625" />
                                        <!-- End Hover Image -->
                                    </a>
                                    <!-- End Product Image -->
                                    <!--Product Button-->
                                    <div class="button-set-top style1">
                                        <!--Quick View Button-->
                                        <a href="#quickview-modal"
                                            class="btn-icon rounded-5 quickview quick-view-modal"
                                            data-bs-toggle="modal" data-bs-target="#quickview_modal">
                                            <span class="icon-wrap d-flex-justify-center h-100 w-100"
                                                data-bs-toggle="tooltip" data-bs-placement="left"
                                                title="Quick View"><i
                                                    class="icon anm anm-search-plus-l"></i><span
                                                    class="text">Quick View</span></span>
                                        </a>
                                        <!--End Quick View Button-->
                                        <!--Wishlist Button-->
                                        <a href="wishlist-style2.html" class="btn-icon rounded-5 wishlist"
                                            data-bs-toggle="tooltip" data-bs-placement="left"
                                            title="Add To Wishlist"><i class="icon anm anm-heart-l"></i><span
                                                class="text">Add To Wishlist</span></a>
                                        <!--End Wishlist Button-->
                                        <!--Compare Button-->
                                        <a href="compare-style2.html" class="btn-icon rounded-5 compare"
                                            data-bs-toggle="tooltip" data-bs-placement="left"
                                            title="Add to Compare"><i class="icon anm anm-random-r"></i><span
                                                class="text">Add to Compare</span></a>
                                        <!--End Compare Button-->
                                    </div>
                                    <!--End Product Button-->
                                </div>
                                <!-- End Product Image -->
                                <!-- Start Product Details -->
                                <div class="product-details text-left">
                                    <!--Product Vendor-->
                                    <div class="product-vendor">Camera</div>
                                    <!--End Product Vendor-->
                                    <!-- Product Name -->
                                    <div class="product-name">
                                        <a href="product-layout1.html">FZ43 16 MP Digital Camera</a>
                                    </div>
                                    <!-- End Product Name -->
                                    <!-- Product Price -->
                                    <div class="product-price">
                                        <span class="price">$139.00</span>
                                    </div>
                                    <!-- End Product Price -->
                                    <!-- Product Review -->
                                    <div class="product-review">
                                        <i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i
                                            class="icon anm anm-star-o"></i><i
                                            class="icon anm anm-star-o"></i><i class="icon anm anm-star-o"></i>
                                        <span class="caption hidden ms-1">11 Reviews</span>
                                    </div>
                                    <!-- End Product Review -->
                                    <!-- Product Button -->
                                    <div class="button-action">
                                        <div class="addtocart-btn">
                                            <form class="addtocart" action="#" method="post">
                                                <a href="#addtocart-modal"
                                                    class="btn btn-secondary addtocart add-to-cart-modal"
                                                    data-bs-toggle="modal" data-bs-target="#addtocart_modal">
                                                    <i class="icon anm anm-basket-l me-2"></i><span
                                                        class="text">Add to Cart</span>
                                                </a>
                                            </form>
                                        </div>
                                    </div>
                                    <!-- End Product Button -->
                                </div>
                                <!-- End product details -->
                            </div>
                        </div>
                        <div class="item col-item">
                            <div class="product-box">
                                <!-- Start Product Image -->
                                <div class="product-image">
                                    <!-- Start Product Image -->
                                    <a href="product-layout1.html" class="product-img">
                                        <!-- Image -->
                                        <img class="primary blur-up lazyload"
                                            data-src="assets/images/products/electronic-product8.jpg"
                                            src="assets/images/products/electronic-product8.jpg" alt="Product"
                                            title="Product" width="625" height="625" />
                                        <!-- End Image -->
                                        <!-- Hover Image -->
                                        <img class="hover blur-up lazyload"
                                            data-src="assets/images/products/electronic-product8-1.jpg"
                                            src="assets/images/products/electronic-product8-1.jpg" alt="Product"
                                            title="Product" width="625" height="625" />
                                        <!-- End Hover Image -->
                                    </a>
                                    <!-- End Product Image -->
                                    <!--Product Button-->
                                    <div class="button-set-top style1">
                                        <!--Quick View Button-->
                                        <a href="#quickview-modal"
                                            class="btn-icon rounded-5 quickview quick-view-modal"
                                            data-bs-toggle="modal" data-bs-target="#quickview_modal">
                                            <span class="icon-wrap d-flex-justify-center h-100 w-100"
                                                data-bs-toggle="tooltip" data-bs-placement="left"
                                                title="Quick View"><i
                                                    class="icon anm anm-search-plus-l"></i><span
                                                    class="text">Quick View</span></span>
                                        </a>
                                        <!--End Quick View Button-->
                                        <!--Wishlist Button-->
                                        <a href="wishlist-style2.html" class="btn-icon rounded-5 wishlist"
                                            data-bs-toggle="tooltip" data-bs-placement="left"
                                            title="Add To Wishlist"><i class="icon anm anm-heart-l"></i><span
                                                class="text">Add To Wishlist</span></a>
                                        <!--End Wishlist Button-->
                                        <!--Compare Button-->
                                        <a href="compare-style2.html" class="btn-icon rounded-5 compare"
                                            data-bs-toggle="tooltip" data-bs-placement="left"
                                            title="Add to Compare"><i class="icon anm anm-random-r"></i><span
                                                class="text">Add to Compare</span></a>
                                        <!--End Compare Button-->
                                    </div>
                                    <!--End Product Button-->
                                </div>
                                <!-- End Product Image -->
                                <!-- Start Product Details -->
                                <div class="product-details text-left">
                                    <!--Product Vendor-->
                                    <div class="product-vendor">Instax</div>
                                    <!--End Product Vendor-->
                                    <!-- Product Name -->
                                    <div class="product-name">
                                        <a href="product-layout1.html">Fujifilm Instax Camera</a>
                                    </div>
                                    <!-- End Product Name -->
                                    <!-- Product Price -->
                                    <div class="product-price">
                                        <span class="price">$134.00</span>
                                    </div>
                                    <!-- End Product Price -->
                                    <!-- Product Review -->
                                    <div class="product-review">
                                        <i class="icon anm anm-star-o"></i><i class="icon anm anm-star-o"></i><i
                                            class="icon anm anm-star-o"></i><i
                                            class="icon anm anm-star-o"></i><i class="icon anm anm-star-o"></i>
                                        <span class="caption hidden ms-1">0 Reviews</span>
                                    </div>
                                    <!-- End Product Review -->
                                    <!-- Product Button -->
                                    <div class="button-action">
                                        <div class="addtocart-btn">
                                            <form class="addtocart" action="#" method="post">
                                                <a href="#addtocart-modal"
                                                    class="btn btn-secondary addtocart add-to-cart-modal"
                                                    data-bs-toggle="modal" data-bs-target="#addtocart_modal">
                                                    <i class="icon anm anm-basket-l me-2"></i>

                                                    <span class="text add-to-cart">Add to Cart</span>
                                                </a>
                                            </form>
                                        </div>
                                    </div>
                                    <!-- End Product Button -->
                                </div>
                                <!-- End product details -->
                            </div>
                        </div>
                
                        <div class="item col-item">
                            <div class="product-box">
                                <!-- Start Product Image -->
                                <div class="product-image">
                                    <!-- Start Product Image -->
                                    <a href="product-layout1.html" class="product-img">
                                        <!-- Image -->
                                        <img class="primary blur-up lazyload"
                                            data-src="assets/images/products/electronic-product3.jpg"
                                            src="assets/images/products/electronic-product3.jpg" alt="Product"
                                            title="Product" width="625" height="625" />
                                        <!-- End Image -->
                                        <!-- Hover Image -->
                                        <img class="hover blur-up lazyload"
                                            data-src="assets/images/products/electronic-product3-1.jpg"
                                            src="assets/images/products/electronic-product3-1.jpg" alt="Product"
                                            title="Product" width="625" height="625" />
                                        <!-- End Hover Image -->
                                    </a>
                                    <!-- End Product Image -->
                                    <!-- Product label -->
                                    <div class="product-labels radius"><span class="lbl pr-label3">New</span>
                                    </div>
                                    <!-- End Product label -->
                                    <!--Product Button-->
                                    <div class="button-set-top style1">
                                        <!--Quick View Button-->
                                        <a href="#quickview-modal"
                                            class="btn-icon rounded-5 quickview quick-view-modal"
                                            data-bs-toggle="modal" data-bs-target="#quickview_modal">
                                            <span class="icon-wrap d-flex-justify-center h-100 w-100"
                                                data-bs-toggle="tooltip" data-bs-placement="left"
                                                title="Quick View"><i
                                                    class="icon anm anm-search-plus-l"></i><span
                                                    class="text">Quick View</span></span>
                                        </a>
                                        <!--End Quick View Button-->
                                        <!--Wishlist Button-->
                                        <a href="wishlist-style2.html" class="btn-icon rounded-5 wishlist"
                                            data-bs-toggle="tooltip" data-bs-placement="left"
                                            title="Add To Wishlist"><i class="icon anm anm-heart-l"></i><span
                                                class="text">Add To Wishlist</span></a>
                                        <!--End Wishlist Button-->
                                        <!--Compare Button-->
                                        <a href="compare-style2.html" class="btn-icon rounded-5 compare"
                                            data-bs-toggle="tooltip" data-bs-placement="left"
                                            title="Add to Compare"><i class="icon anm anm-random-r"></i><span
                                                class="text">Add to Compare</span></a>
                                        <!--End Compare Button-->
                                    </div>
                                    <!--End Product Button-->
                                </div>
                                <!-- End Product Image -->
                                <!-- Start Product Details -->
                                <div class="product-details text-left">
                                    <!--Product Vendor-->
                                    <div class="product-vendor">Wirlpool</div>
                                    <!--End Product Vendor-->
                                    <!-- Product Name -->
                                    <div class="product-name">
                                        <a href="product-layout1.html">Canon EOS 1500D 24.1 Digital</a>
                                    </div>
                                    <!-- End Product Name -->
                                    <!-- Product Price -->
                                    <div class="product-price">
                                        <span class="price">$99.00</span>
                                    </div>
                                    <!-- End Product Price -->
                                    <!-- Product Review -->
                                    <div class="product-review">
                                        <i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i
                                            class="icon anm anm-star-o"></i><i
                                            class="icon anm anm-star-o"></i><i class="icon anm anm-star-o"></i>
                                        <span class="caption hidden ms-1">10 Reviews</span>
                                    </div>
                                    <!-- End Product Review -->
                                    <!-- Product Button -->
                                    <div class="button-action">
                                        <div class="addtocart-btn">
                                            <form class="addtocart" action="#" method="post">
                                                <a href="#addtocart-modal"
                                                    class="btn btn-secondary addtocart add-to-cart-modal"
                                                    data-bs-toggle="modal" data-bs-target="#addtocart_modal">
                                                    <i class="icon anm anm-basket-l me-2"></i><span
                                                        class="text">Add to Cart</span>
                                                </a>
                                            </form>
                                        </div>
                                    </div>
                                    <!-- End Product Button -->
                                </div>
                                <!-- End product details -->
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-12 col-md-12 col-lg-3 mt-4 mt-lg-0">
                    <div class="ctg-bnr-wrap two position-relative h-100">
                        <div class="ctg-image ratio ratio-1x1 h-100">
                            <img class="blur-up lazyload"
                                data-src="assets/images/collection/demo3-side-bnr2.jpg"
                                src="assets/images/collection/demo3-side-bnr2.jpg" alt="collection" width="309"
                                height="483" />
                        </div>
                        <div class="ctg-content text-white d-flex-justify-center flex-nowrap flex-column h-100">
                            <h2 class="ctg-title text-white m-0"><span class="d-block">Summer</span> Sale</h2>
                            <p class="saleText text-uppercase mb-0">30% Off</p>
                            <p class="ctg-des mt-1 mb-4">On all new arrival product</p>
                            <a class="btn btn-secondary explore-btn" href="shop-left-sidebar.html">Shop Now <i
                                    class="icon anm anm-arw-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Products Slider-->

    <!--Collection banner-->
    <section class="section collection-banners two-one-bnr py-0">
        <div class="container">
            <div class="collection-banner-grid two-bnr">
                <div class="row sp-row">
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 collection-banner-item">
                        <div class="collection-item sp-col">
                            <a href="shop-left-sidebar.html" class="zoom-scal clr-none">
                                <div class="img">
                                    <img class="blur-up lazyload"
                                        data-src="assets/images/collection/demo4-ct-img1.jpg"
                                        src="assets/images/collection/demo4-ct-img1.jpg" alt="collection"
                                        title="" width="647" height="439" />
                                </div>
                                <div class="details bottom-center">
                                    <div class="inner text-center">
                                        <h3 class="title">Mobiles Accessories</h3>
                                        <p class="subtitle">Everything You Love About Design</p>
                                        <span class="btn-brd fw-500 text-uppercase">Shop Now</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 collection-banner-item">
                        <div class="collection-item sp-col">
                            <a href="shop-left-sidebar.html" class="zoom-scal clr-none">
                                <div class="img">
                                    <img class="blur-up lazyload"
                                        data-src="assets/images/collection/demo4-ct-img2.jpg"
                                        src="assets/images/collection/demo4-ct-img2.jpg" alt="collection"
                                        title="" width="647" height="439" />
                                </div>
                                <div class="details bottom-center">
                                    <div class="inner text-center">
                                        <h3 class="title">Laptop & Computers</h3>
                                        <p class="subtitle">Effect if in up no depend</p>
                                        <span class="btn-brd fw-500 text-uppercase">Shop Now</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Collection banner-->

    <!--Newsletter Section-->
    <section class="section newsletter-section pb-0">
        <div class="container-fluid p-0">

        </div>
    </section>
    <!--Newsletter Section-->
</div>
<!-- End Body Container -->

<script>
$(document).ready(function() {
    var base_url = "<?= base_url(); ?>";
    // Add item to cart
    $('.add-to-cart').click(function(e) {
        e.preventDefault();
        const product_id = $(this).data('product-id');
        
        $.ajax({
            url: base_url + 'cart/add_single/'+product_id,
            method: 'POST',
            data: { product_id: product_id },
            dataType: 'json',
            success: function(response) {
                alert('Item added to cart!');
                // updateCartView(response);
            }
        });
    });
});
</script>



<?php $this->load->view("web/_partials/footer.php") ?>
<?php $this->load->view("web/_partials/foot.php") ?>


