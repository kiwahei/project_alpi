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
                        <source media="(max-width:767px)" srcset="assets/images/slideshow/demo4-banner1.jpg"
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
                        <source media="(max-width:767px)" srcset="assets/images/slideshow/demo4-banner2.jpg"
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
                    <a href="<?= base_url("/category") ?>" class="btn btn-primary">View All Category <i
                            class="icon anm anm-arw-right ms-2"></i></a>
                </div>
            </div>

          
            <div class="collection-slider-3items slick-arrow-dots gp15 arwOut5 hov-arrow circle-arrow">
                <?php foreach ($categories as $c): ?>
                   

                <div class="category-item zoomscal-hov overlay-content">
                    <a href="<?= base_url("/category/view/").$c["id"] ?>" class="category-link clr-none">
                        <div class="zoom-scal">
                            <img class="blur-up lazyload"
                                data-src="<?= base_url('/uploads/category/').$c['image'] ?>"
                                src="<?= base_url('/uploads/category/').$c['image'] ?>" alt="collection" title=""
                                width="416" height="416" />
                        </div>
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
                    <a href="<?= base_url("/product") ?>" class="btn btn-primary">View More <i
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
                                <div class="">
                                    <!-- Start Product Image -->
                                    <a href="<?= base_url("/product/view/").$p['id'] ?>" class="product-img">
                                        <!-- Image -->
                                        <img class="primary lazyload"
                                            data-src="<?= base_url("/uploads/product/").$p['image']?>"
                                            src="<?= base_url("/uploads/product/").$p['image']?>" alt="Product"
                                            title="Product" width="625" height="625" />
                                        
                                    </a>
                                    
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
                                        <a href="<?= base_url("/product/view/").$p['id'] ?>"><?= $p['name'] ?></a>
                                    </div>
                                    <!-- End Product Name -->
                                    <!-- Product Price -->
                                    <div class="product-price">
                                        <span class="price">Rp. <?= number_format($p['price'], 0, ',', '.')  ?></span>
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
                                        <div>
                                            <form  action="#" method="post">
                                                <a
                                                    class="btn btn-secondary addtocart add-to-cart-modal"
                                                    >
                                                    <i class="icon anm anm-basket-l me-2"></i>
                                                    <button class="text btn btn-link add-to-cart"  id="" data-product-id="<?= $p["id"] ?>" data-product-name="<?= $p["name"] ?>" data-product-price="<?= $p["price"] ?>"  data-product-image="<?= $p["image"] ?>" type="button">Add to Cart</button>
                                                  
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
        const product_name = $(this).data('product-name');
        const product_price = $(this).data('product-price');
        const product_image = $(this).data('product-image');

        
        $.ajax({
            url: base_url + 'cart/add_single/'+product_id,
            method: 'POST',
            data: { product_id: product_id },
            dataType: 'json',
            success: function(response) {
           
                if(response.status == "error"){
                    alert('Youre not logged in, please login first!');
                    window.location.href = base_url+"/auth/login"
                }else{
                    alert('Item added to cart!');
                    showAddToCartPopUp(product_name,product_price, product_image)
                }
            },
            error: function (xhr, ajaxOptions, thrownError) {
                window.location.href = base_url+"/auth/login";
                
            }
        });
    });

    function showAddToCartPopUp(name, price, image){
        console.log(name)
        
        $("#addtocart_modal").modal("show")
        $("#cart-price").text(price)
        $("#cart-title").text(name)
        $("#cart-image").attr('src',base_url+'/uploads/product/'+image)
    }
});
</script>



<?php $this->load->view("web/_partials/footer.php") ?>
<?php $this->load->view("web/_partials/foot.php") ?>


