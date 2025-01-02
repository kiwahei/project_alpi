<!DOCTYPE html>
<html class="no-js" lang="en">
    
<!-- Mirrored from www.annimexweb.com/items/hema/sub-collection-style2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 01 Sep 2024 03:43:13 GMT -->
<head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="description" content="description">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Title Of Site -->
        <title>Outfit - Project PWE</title>
        <base href="/pemrograman_web_enterprise/tugas_berkelanjutan_pwe/">
        <!-- Favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.png" />
        <!-- Plugins CSS -->
        <link rel="stylesheet" href="assets/css/plugins.css">
        <!-- Main Style CSS -->
        <link rel="stylesheet" href="assets/css/style-min.css">
        <link rel="stylesheet" href="assets/css/responsive.css">
        <script src="assets/js/script.js"></script>
    </head>

    <body class="sub-collection-page sub-collection-style2-page">
        <!--Page Wrapper-->
        <div class="page-wrapper">
            <!--Top Header-->
            
            <!--End Top Header-->

            <!--Header-->
            <header class="header d-flex align-items-center header-1 header-fixed">
                <div class="container">        
                    <div class="row">
                        <!--Logo-->
                        <div class="logo col-5 col-sm-3 col-md-3 col-lg-2 align-self-center">
                            <a class="logoImg" href="<?php echo site_url('home'); ?>"><img src="assets/images/logo.png" alt="Hema Multipurpose Html Template" title="Hema Multipurpose Html Template" width="149" height="39" /></a>
                        </div>
                        <!--End Logo-->
                        <!--Menu-->
                        <div class="col-1 col-sm-1 col-md-1 col-lg-8 align-self-center d-menu-col">
                            <nav class="navigation" id="AccessibleNav">
                                
                            </nav>
                        </div>
                        <!--End Menu-->
                        <!--Right Icon-->
                        <div class="col-7 col-sm-9 col-md-9 col-lg-2 align-self-center icons-col text-right">
                            <!--Search-->
                            
                            <!--End Search-->
                            <!--Account-->
                            <div class="account-parent iconset">
                                <div class="account-link" title="Account"><i class="hdr-icon icon anm anm-user-al"></i></div>
                                <div id="accountBox">
        <div class="customer-links">
            <ul class="m-0">
                <?php if ($this->session->userdata('id_user')): ?>
                    <!-- Show these links when the user is logged in -->
                    <li>
                        <a href="<?php echo site_url('pages/my-account'); ?>">
                            <i class="icon anm anm-user-cil"></i>My Account
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('pages/logout'); ?>">
                            <i class="icon anm anm-sign-out-al"></i>Sign Out
                        </a>
                    </li>
                <?php else: ?>
                    <!-- Show these links when the user is not logged in -->
                    <li>
                        <a href="<?php echo site_url('auth/login'); ?>">
                            <i class="icon anm anm-sign-in-al"></i>Sign In
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('auth/register'); ?>">
                            <i class="icon anm anm-user-al"></i>Register
                        </a>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
                            </div>
                            <!--End Account-->
                            <!--Wishlist-->
                            
                            <!--End Wishlist-->
                            <!--Minicart-->
                            
                            <!--End Minicart-->
                            <!--Mobile Toggle-->
                            <button type="button" class="iconset pe-0 menu-icon js-mobile-nav-toggle mobile-nav--open d-lg-none" title="Menu"><i class="hdr-icon icon anm anm-times-l"></i><i class="hdr-icon icon anm anm-bars-r"></i></button>
                            <!--End Mobile Toggle-->
                        </div>
                        <!--End Right Icon-->
                    </div>
                </div>
            </header>
            <!--End Header-->
            <!--Mobile Menu-->
            <div class="mobile-nav-wrapper" role="navigation">
                <div class="closemobileMenu">Close Menu <i class="icon anm anm-times-l"></i></div>
                <ul id="MobileNav" class="mobile-nav">
                    <li class="lvl1 parent dropdown"><a href="index.html">Home <i class="icon anm anm-angle-down-l"></i></a>
                        <ul class="lvl-2">
                            <li><a href="index.html" class="site-nav">Home 01 - Fashion</a></li>
                            <li><a href="index2-footwear.html" class="site-nav">Home 02 - Footwear</a></li>
                            <li><a href="index3-bags.html" class="site-nav">Home 03 - Bags</a></li>
                            <li><a href="index4-electronic.html" class="site-nav">Home 04 - Electronic</a></li>
                            <li><a href="index5-tools-parts.html" class="site-nav">Home 05 - Tools &amp; Parts</a></li>
                            <li><a href="index6-jewelry.html" class="site-nav">Home 06 - Jewelry</a></li>
                            <li><a href="index7-organic-food.html" class="site-nav">Home 07 - Organic Food</a></li>
                            <li><a href="index8-cosmetics.html" class="site-nav">Home 08 - Cosmetics</a></li>
                            <li><a href="index9-furniture.html" class="site-nav">Home 09 - Furniture</a></li>
                            <li><a href="index10-sunglasses.html" class="site-nav">Home 10 - Sunglasses</a></li> 
                            <li><a href="index11-medical.html" class="site-nav">Home 11 - Medical</a></li>
                            <li><a href="index12-christmas.html" class="site-nav last">Home 12 - Christmas</a></li>                   
                        </ul>
                    </li>
                    <li class="lvl1 parent megamenu"><a href="#">Shop <i class="icon anm anm-angle-down-l"></i></a>
                        <ul class="lvl-2">
                            <li><a href="#;" class="site-nav">Collection Page <i class="icon anm anm-angle-down-l"></i></a>
                                <ul class="lvl-3">
                                    <li><a href="collection-style1.html" class="site-nav">Collection style1</a></li>
                                    <li><a href="collection-style2.html" class="site-nav">Collection style2</a></li>
                                    <li><a href="collection-style3.html" class="site-nav">Collection style3</a></li>
                                    <li><a href="collection-style4.html" class="site-nav">Collection style4</a></li>
                                    <li><a href="sub-collection-style1.html" class="site-nav">Sub Collection style1</a></li>
                                    <li><a href="sub-collection-style2.html" class="site-nav">Sub Collection style2</a></li>
                                    <li><a href="collection-empty.html" class="site-nav">Collection Empty</a></li>
                                    <li><a href="shop-search-results.html" class="site-nav">Shop Search Results</a></li>
                                    <li><a href="shop-swatches-style.html" class="site-nav last">Shop Swatches style</a></li>
                                </ul>
                            </li>
                            <li><a href="#;" class="site-nav">Shop Page <i class="icon anm anm-angle-down-l"></i></a>
                                <ul class="lvl-3">
                                    <li><a href="shop-grid-view.html" class="site-nav">Shop Grid View</a></li>
                                    <li><a href="shop-list-view.html" class="site-nav">Shop List View</a></li>
                                    <li><a href="shop-left-sidebar.html" class="site-nav">Shop Left Sidebar</a></li>
                                    <li><a href="shop-right-sidebar.html" class="site-nav">Shop Right Sidebar</a></li>
                                    <li><a href="shop-top-filter.html" class="site-nav">Shop Top Filter</a></li>
                                    <li><a href="shop-masonry-grid.html" class="site-nav">Shop Masonry Grid</a></li>
                                    <li><a href="shop-with-category.html" class="site-nav">Shop With Category</a></li>
                                    <li><a href="shop-grid-view.html" class="site-nav">Classic Pagination</a></li>
                                    <li><a href="shop-right-sidebar.html" class="site-nav last">Infinite Scrolling</a></li>
                                </ul>
                            </li>
                            <li><a href="#;" class="site-nav">Shop Other Page <i class="icon anm anm-angle-down-l"></i></a>
                                <ul class="lvl-3">
                                    <li><a href="wishlist-style1.html" class="site-nav">Wishlist Style1</a></li>
                                    <li><a href="wishlist-style2.html" class="site-nav">Wishlist Style2</a></li>
                                    <li><a href="compare-style1.html" class="site-nav">Compare Style1</a></li>
                                    <li><a href="compare-style2.html" class="site-nav">Compare Style2</a></li>
                                    <li><a href="cart-style1.html" class="site-nav">Cart Style1</a></li>
                                    <li><a href="cart-style2.html" class="site-nav">Cart Style2</a></li>
                                    <li><a href="checkout-style1.html" class="site-nav">Checkout Style1</a></li>
                                    <li><a href="checkout-style2.html" class="site-nav">Checkout Style2</a></li>
                                    <li><a href="order-success.html" class="site-nav last">Order Success</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="lvl1 parent megamenu"><a href="product-layout1.html">Product <i class="icon anm anm-angle-down-l"></i></a>
                        <ul class="lvl-2">
                            <li><a href="product-layout1.html" class="site-nav">Product Page <i class="icon anm anm-angle-down-l"></i></a>
                                <ul class="lvl-3">
                                    <li><a href="product-layout1.html" class="site-nav">Product Layout1</a></li>
                                    <li><a href="product-layout2.html" class="site-nav">Product Layout2</a></li>
                                    <li><a href="product-layout3.html" class="site-nav">Product Layout3</a></li>
                                    <li><a href="product-layout4.html" class="site-nav">Product Layout4</a></li>
                                    <li><a href="product-layout5.html" class="site-nav">Product Layout5</a></li>
                                    <li><a href="product-layout6.html" class="site-nav">Product Layout6</a></li>
                                    <li><a href="product-layout7.html" class="site-nav">Product Layout7</a></li>
                                    <li><a href="product-3d-ar-models.html" class="site-nav last">Product 3D, AR models</a></li>
                                </ul>
                            </li>
                            <li><a href="product-standard.html" class="site-nav">Product Page Types <i class="icon anm anm-angle-down-l"></i></a>
                                <ul class="lvl-3">
                                    <li><a href="product-standard.html" class="site-nav">Standard Product</a></li>
                                    <li><a href="product-variable.html" class="site-nav">Variable Product</a></li>
                                    <li><a href="product-grouped.html" class="site-nav">Grouped Product</a></li>
                                    <li><a href="product-layout4.html" class="site-nav">Product Back in stock</a></li>
                                    <li><a href="product-layout6.html" class="site-nav">Product Accordion</a></li>
                                    <li><a href="product-layout7.html" class="site-nav">Product Tabs Left</a></li>
                                    <li><a href="product-layout6.html" class="site-nav">Product Bundle</a></li>
                                    <li><a href="prodcut-360-view.html" class="site-nav last">Product 360 View</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="lvl1 parent dropdown"><a href="#;">Pages <i class="icon anm anm-angle-down-l"></i></a>
                        <ul class="lvl-2">
                            <li><a href="aboutus-style1.html" class="site-nav">About Us <i class="icon anm anm-angle-down-l"></i></a>
                                <ul class="lvl-3 dropdown">
                                    <li><a href="aboutus-style1.html" class="site-nav">About Us Style1</a></li>
                                    <li><a href="aboutus-style2.html" class="site-nav">About Us Style2</a></li>
                                </ul>
                            </li>
                            <li><a href="contact-style1.html" class="site-nav">Contact Us <i class="icon anm anm-angle-down-l"></i></a>
                                <ul class="lvl-3 dropdown">
                                    <li><a href="contact-style1.html" class="site-nav">Contact Us Style1</a></li>
                                    <li><a href="contact-style2.html" class="site-nav">Contact Us Style2</a></li>
                                </ul>
                            </li>
                            <li><a href="my-account.html" class="site-nav">My Account <i class="icon anm anm-angle-down-l"></i></a>
                                <ul class="lvl-3 dropdown">
                                    <li><a href="my-account.html" class="site-nav">My Account</a></li>
                                    <li><a href="login.html" class="site-nav">Login</a></li>
                                    <li><a href="register.html" class="site-nav">Register</a></li>
                                    <li><a href="forgot-password.html" class="site-nav">Forgot Password</a></li>
                                </ul>
                            </li>
                            <li><a href="lookbook-grid.html" class="site-nav">Lookbook <i class="icon anm anm-angle-down-l"></i></a>
                                <ul class="lvl-3 dropdown">
                                    <li><a href="lookbook-grid.html" class="site-nav">Lookbook Grid</a></li>
                                    <li><a href="lookbook-masonry.html" class="site-nav">Lookbook Masonry</a></li>
                                    <li><a href="lookbook-shop.html" class="site-nav">Lookbook Shop</a></li>
                                </ul>
                            </li>
                            <li><a href="portfolio-page.html" class="site-nav">Portfolio Page</a></li>
                            <li><a href="faqs-page.html" class="site-nav">FAQs Page</a></li>
                            <li><a href="brands-page.html" class="site-nav">Brands Page</a></li>
                            <li><a href="cms-page.html" class="site-nav">CMS Page</a></li>
                            <li><a href="elements-icons.html" class="site-nav">Icons</a></li>
                            <li><a href="error-404.html" class="site-nav">Error 404</a></li>
                            <li><a href="coming-soon.html" class="site-nav">Coming soon <span class="lbl nm_label2">New</span></a></li>
                        </ul>
                    </li>
                    <li class="lvl1 parent dropdown"><a href="blog-grid.html">Blog <i class="icon anm anm-angle-down-l"></i></a>
                        <ul class="lvl-2">
                            <li><a href="blog-grid.html" class="site-nav">Grid View</a></li>
                            <li><a href="blog-list.html" class="site-nav">List View</a></li>
                            <li><a href="blog-grid-sidebar.html" class="site-nav">Left Sidebar</a></li>
                            <li><a href="blog-list-sidebar.html" class="site-nav">Right Sidebar</a></li>
                            <li><a href="blog-masonry.html" class="site-nav">Masonry Grid</a></li>
                            <li><a href="blog-details.html" class="site-nav">Blog Details</a></li>
                        </ul>
                    </li>

                    <li class="mobile-menu-bottom">
                        <div class="mobile-links"> 
                            <ul class="list-inline d-inline-flex flex-column w-100">
                                <li><a href="login.html" class="d-flex align-items-center"><i class="icon anm anm-sign-in-al"></i>Sign In</a></li>
                                <li><a href="register.html" class="d-flex align-items-center"><i class="icon anm anm-user-al"></i>Register</a></li>
                                <li><a href="my-account.html" class="d-flex align-items-center"><i class="icon anm anm-user-cil"></i>My Account</a></li>
                                <li class="title h5">Need Help?</li>
                                <li><a href="tel:401234567890" class="d-flex align-items-center"><i class="icon anm anm-phone-l"></i> (+40) 123 456 7890</a></li>
                                <li><a href="mailto:info@example.com" class="d-flex align-items-center"><i class="icon anm anm-envelope-l"></i> info@example.com</a></li>
                            </ul>
                        </div>
                        <div class="mobile-follow mt-2">  
                            <h5 class="title">Follow Us</h5>
                            <ul class="list-inline social-icons d-inline-flex mt-1">
                                <li class="list-inline-item"><a href="#" title="Facebook"><i class="icon anm anm-facebook-f"></i></a></li>
                                <li class="list-inline-item"><a href="#" title="Twitter"><i class="icon anm anm-twitter"></i></a></li>
                                <li class="list-inline-item"><a href="#" title="Pinterest"><i class="icon anm anm-pinterest-p"></i></a></li>
                                <li class="list-inline-item"><a href="#" title="Linkedin"><i class="icon anm anm-linkedin-in"></i></a></li>
                                <li class="list-inline-item"><a href="#" title="Instagram"><i class="icon anm anm-instagram"></i></a></li>
                                <li class="list-inline-item"><a href="#" title="Youtube"><i class="icon anm anm-youtube"></i></a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
            <!--End Mobile Menu-->

            <!-- Body Container -->
            <div id="page-content"> 
                <!--Page Header-->
                <div class="page-header text-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 d-flex justify-content-between align-items-center">
                                <div class="page-title"><h1>Outfit</h1></div>
                                <!--Breadcrumbs-->
                                <div class="breadcrumbs"><a href="<?php echo site_url('home'); ?>" title="Back to the home page">Home</a><span class="title"><i class="icon anm anm-angle-right-l"></i>Shop</span><span class="main-title"><i class="icon anm anm-angle-right-l"></i>Outfit</span></div>
                                <!--End Breadcrumbs-->
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Page Header-->

                <!--Main Content-->
                <div class="container">     
                    <!--Sub Collection-->
                    
                    <!--End Sub Collection-->

                    <!--Sub Products--> 
                    <!--Product Infinite-->
                    <div class="sub-collectio-products product-four-loadmore section pb-0">
                        <div class="section-header">
                            <h2>Outfit Products</h2>
                            <p>Our most popular products based on sales. Updated daily.</p>
                        </div>

                        <!--Product Grid-->
                        <div class="grid-products grid-view-items">
                            <div class="row col-row product-options row-cols-lg-4 row-cols-md-3 row-cols-sm-3 row-cols-2">
                                <div class="item col-item">
                                    <div class="product-box">
                                        <!-- Start Product Image -->
                                        <div class="product-image">
                                            <!-- Start Product Image -->
                                            <a href="product-layout1.html" class="product-img rounded-0"><img class="rounded-0 blur-up lazyload" src="assets/images/products/product1.jpg" alt="Product" title="Product" width="625" height="808" /></a>
                                            <!-- End Product Image -->
                                            <!-- Product label -->
                                            
                                            <!-- End Product label -->
                                            <!--Product Button-->
                                            <div class="button-set style1">
                                                <!--Cart Button-->
                                                <a href="#addtocart-modal" class="btn-icon addtocart add-to-cart-modal" data-bs-toggle="modal" data-bs-target="#addtocart_modal">
                                                    <span class="icon-wrap d-flex-justify-center h-100 w-100" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to Cart"><i class="icon anm anm-cart-l"></i><span class="text">Add to Cart</span></span>
                                                </a>
                                                
                                            </div>
                                            <!--End Product Button-->
                                        </div>
                                        <!-- End Product Image -->
                                        <!-- Start Product Details -->
                                        <div class="product-details text-center">
                                            <!-- Product Name -->
                                            <div class="product-name">
                                                <a href="product-layout1.html">Oxford Cuban Shirt</a>
                                            </div>
                                            <!-- End Product Name -->
                                            <!-- Product Price -->
                                            <div class="product-price">
                                                <span class="price">$99.00</span>
                                            </div>
                                            <!-- End Product Price -->
                                            <!-- Product Review -->
                                            
                                            <!-- End Product Review -->
                                            <!--Color Variant -->
                                            
                                            <!-- End Variant -->
                                        </div>
                                        <!-- End product details -->
                                    </div>
                                </div>
                                <div class="item col-item">
                                    <div class="product-box">
                                        <!-- Start Product Image -->
                                        <div class="product-image">
                                            <!-- Start Product Image -->
                                            <a href="product-layout1.html" class="product-img rounded-0">
                                                <!-- Image -->
                                                <img class="primary rounded-0 blur-up lazyload" data-src="assets/images/products/product2.jpg" src="assets/images/products/product2.jpg" alt="Product" title="Product" width="625" height="808" />
                                                <!-- End Image -->
                                                <!-- Hover Image -->
                                                <img class="hover rounded-0 blur-up lazyload" data-src="assets/images/products/product2-1.jpg" src="assets/images/products/product2-1.jpg" alt="Product" title="Product" width="625" height="808" />
                                                <!-- End Hover Image -->
                                            </a>
                                            <!-- End Product Image -->
                                            <!--Product Button-->
                                            <div class="button-set style1">
                                                <!--Cart Button-->
                                                <a href="#addtocart-modal" class="btn-icon addtocart add-to-cart-modal" data-bs-toggle="modal" data-bs-target="#addtocart_modal">
                                                    <span class="icon-wrap d-flex-justify-center h-100 w-100" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to Cart"><i class="icon anm anm-cart-l"></i><span class="text">Add to Cart</span></span>
                                                </a>
                                                <!--End Cart Button-->
                                                <!--Quick View Button-->
                                                
                                            </div>
                                            <!--End Product Button-->
                                        </div>
                                        <!-- End Product Image -->
                                        <!-- Start Product Details -->
                                        <div class="product-details text-center">
                                            <!-- Product Name -->
                                            <div class="product-name">
                                                <a href="product-layout1.html">Cuff Beanie Cap</a>
                                            </div>
                                            <!-- End Product Name -->
                                            <!-- Product Price -->
                                            <div class="product-price">
                                                <span class="price">$128.00</span>
                                            </div>
                                            <!-- End Product Price -->
                                            <!-- Product Review -->
                                            
                                            <!-- End Variant -->
                                        </div>
                                        <!-- End product details -->
                                    </div>
                                </div>
                                <div class="item col-item">
                                    <div class="product-box">
                                        <!-- Start Product Image -->
                                        <div class="product-image">
                                            <!-- Start Product Image -->
                                            <a href="product-layout1.html" class="product-img rounded-0">
                                                <!-- Image -->
                                                <img class="primary rounded-0 blur-up lazyload" data-src="assets/images/products/product3.jpg" src="assets/images/products/product3.jpg" alt="Product" title="Product" width="625" height="808" />
                                                <!-- End Image -->
                                                <!-- Hover Image -->
                                                <img class="hover rounded-0 blur-up lazyload" data-src="assets/images/products/product3-1.jpg" src="assets/images/products/product3-1.jpg" alt="Product" title="Product" width="625" height="808" />
                                                <!-- End Hover Image -->
                                            </a>
                                            <!-- End Product Image -->
                                            <!-- Product label -->
                                            
                                            <!-- End Product label -->
                                            <!--Product Button-->
                                            <div class="button-set style1">
                                                <!--Cart Button-->
                                                <a href="#addtocart-modal" class="btn-icon addtocart add-to-cart-modal" data-bs-toggle="modal" data-bs-target="#addtocart_modal">
                                                    <span class="icon-wrap d-flex-justify-center h-100 w-100" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to Cart"><i class="icon anm anm-cart-l"></i><span class="text">Add to Cart</span></span>
                                                </a>
                                                <!--End Cart Button-->
                                                
                                            </div>
                                            <!--End Product Button-->
                                        </div>
                                        <!-- End Product Image -->
                                        <!-- Start Product Details -->
                                        <div class="product-details text-center">
                                            <!-- Product Name -->
                                            <div class="product-name">
                                                <a href="product-layout1.html">Flannel Collar Shirt</a>
                                            </div>
                                            <!-- End Product Name -->
                                            <!-- Product Price -->
                                            <div class="product-price">
                                                <span class="price">$99.00</span>
                                            </div>
                                            <!-- End Product Price -->
                                            <!-- Product Review -->
                                            
                                            <!-- End Variant -->
                                        </div>
                                        <!-- End product details -->
                                    </div>
                                </div>
                                <div class="item col-item">
                                    <div class="product-box">
                                        <!-- Start Product Image -->
                                        <div class="product-image">
                                            <!-- Start Product Image -->
                                            <a href="product-layout1.html" class="product-img rounded-0">
                                                <!-- Image -->
                                                <img class="primary rounded-0 blur-up lazyload" data-src="assets/images/products/product4.jpg" src="assets/images/products/product4.jpg" alt="Product" title="Product" width="625" height="808" />
                                                <!-- End Image -->
                                                <!-- Hover Image -->
                                                <img class="hover rounded-0 blur-up lazyload" data-src="assets/images/products/product4-1.jpg" src="assets/images/products/product4-1.jpg" alt="Product" title="Product" width="625" height="808" />
                                                <!-- End Hover Image -->
                                            </a>
                                            <!-- End Product Image -->
                                            <!-- Product label -->
                                            
                                            <!-- End Product label -->
                                            <!--Product Button-->
                                            <div class="button-set style1">
                                                <!--Cart Button-->
                                                <a href="#addtocart-modal" class="btn-icon addtocart add-to-cart-modal" data-bs-toggle="modal" data-bs-target="#addtocart_modal">
                                                    <span class="icon-wrap d-flex-justify-center h-100 w-100" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to Cart"><i class="icon anm anm-cart-l"></i><span class="text">Add to Cart</span></span>
                                                </a>
                                                <!--End Cart Button-->
                                                
                                            </div>
                                            <!--End Product Button-->
                                            <!--Product Availability-->
                                            
                                            <!--End Product Availability-->
                                        </div>
                                        <!-- End Product Image -->
                                        <!-- Start Product Details -->
                                        <div class="product-details text-center">
                                            <!-- Product Name -->
                                            <div class="product-name">
                                                <a href="product-layout1.html">Cotton Hooded Hoodie</a>
                                            </div>
                                            <!-- End Product Name -->
                                            <!-- Product Price -->
                                            <div class="product-price">
                                                <span class="price">$99.00</span>
                                            </div>
                                            <!-- End Product Price -->
                                            
                                            <!-- End Variant -->
                                        </div>
                                        <!-- End product details -->
                                    </div>
                                </div>
                                <div class="item col-item">
                                    <div class="product-box">
                                        <!-- Start Product Image -->
                                        <div class="product-image">
                                            <!-- Start Product Image -->
                                            <a href="product-layout1.html" class="product-img rounded-0">
                                                <!-- Image -->
                                                <img class="primary rounded-0 blur-up lazyload" data-src="assets/images/products/product5.jpg" src="assets/images/products/product5.jpg" alt="Product" title="Product" width="625" height="808" />
                                                <!-- End Image -->
                                                <!-- Hover Image -->
                                                <img class="hover rounded-0 blur-up lazyload" data-src="assets/images/products/product5-1.jpg" src="assets/images/products/product5-1.jpg" alt="Product" title="Product" width="625" height="808" />
                                                <!-- End Hover Image -->
                                            </a>
                                            <!-- End Product Image -->
                                            <!-- Product label -->
                                            
                                            <!-- End Product label -->
                                            <!--Product Button-->
                                            <div class="button-set style1">
                                                <!--Cart Button-->
                                                <a href="#addtocart-modal" class="btn-icon addtocart add-to-cart-modal" data-bs-toggle="modal" data-bs-target="#addtocart_modal">
                                                    <span class="icon-wrap d-flex-justify-center h-100 w-100" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to Cart"><i class="icon anm anm-cart-l"></i><span class="text">Add to Cart</span></span>
                                                </a>
                                                <!--End Cart Button-->
                                                <!--Quick View Button-->
                                                
                                            </div>
                                            <!--End Product Button-->
                                        </div>
                                        <!-- End Product Image -->
                                        <!-- Start Product Details -->
                                        <div class="product-details text-center">
                                            <!-- Product Name -->
                                            <div class="product-name">
                                                <a href="product-layout1.html">Hooded Neck Hoodies</a>
                                            </div>
                                            <!-- End Product Name -->
                                            <!-- Product Price -->
                                            <div class="product-price">
                                                <span class="price">$39.00</span>
                                            </div>
                                            <!-- End Product Price -->
                                            <!-- Product Review -->
                                            
                                            <!-- End Variant -->
                                        </div>
                                        <!-- End product details -->
                                    </div>
                                </div>
                                <div class="item col-item">
                                    <div class="product-box">
                                        <!-- Start Product Image -->
                                        <div class="product-image">
                                            <!-- Start Product Image -->
                                            <a href="product-layout1.html" class="product-img rounded-0">
                                                <!-- Image -->
                                                <img class="primary rounded-0 blur-up lazyload" data-src="assets/images/products/product6.jpg" src="assets/images/products/product6.jpg" alt="Product" title="Product" width="625" height="808" />
                                                <!-- End Image -->
                                                <!-- Hover Image -->
                                                <img class="hover rounded-0 blur-up lazyload" data-src="assets/images/products/product6-1.jpg" src="assets/images/products/product6-1.jpg" alt="Product" title="Product" width="625" height="808" />
                                                <!-- End Hover Image -->
                                            </a>
                                            <!-- End Product Image -->
                                            <!-- Product label -->
                                            
                                            <!-- End Product label -->
                                            <!--Product Button-->
                                            <div class="button-set style1">
                                                <!--Cart Button-->
                                                <a href="#addtocart-modal" class="btn-icon addtocart add-to-cart-modal" data-bs-toggle="modal" data-bs-target="#addtocart_modal">
                                                    <span class="icon-wrap d-flex-justify-center h-100 w-100" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to Cart"><i class="icon anm anm-cart-l"></i><span class="text">Add to Cart</span></span>
                                                </a>
                                                <!--End Cart Button-->
                                                <!--Quick View Button-->
                                                
                                            </div>
                                            <!--End Product Button-->
                                        </div>
                                        <!-- End Product Image -->
                                        <!-- Start Product Details -->
                                        <div class="product-details text-center">
                                            <!-- Product Name -->
                                            <div class="product-name">
                                                <a href="product-layout1.html">Foldable Duffel Bag</a>
                                            </div>
                                            <!-- End Product Name -->
                                            <!-- Product Price -->
                                            <div class="product-price">
                                                <span class="price">$299.00</span>
                                            </div>
                                            <!-- End Product Price -->
                                            
                                        </div>
                                        <!-- End product details -->
                                    </div>
                                </div>
                                <div class="item col-item">
                                    <div class="product-box">
                                        <!-- Start Product Image -->
                                        <div class="product-image">
                                            <!-- Start Product Image -->
                                            <a href="product-layout1.html" class="product-img rounded-0">
                                                <!-- Image -->
                                                <img class="primary rounded-0 blur-up lazyload" data-src="assets/images/products/product7.jpg" src="assets/images/products/product7.jpg" alt="Product" title="Product" width="625" height="808" />
                                                <!-- End Image -->
                                                <!-- Hover Image -->
                                                <img class="hover rounded-0 blur-up lazyload" data-src="assets/images/products/product7-1.jpg" src="assets/images/products/product7-1.jpg" alt="Product" title="Product" width="625" height="808" />
                                                <!-- End Hover Image -->
                                            </a>
                                            <!-- End Product Image -->
                                            
                                            <!--Product Button-->
                                            <div class="button-set style1">
                                                <!--Cart Button-->
                                                <a href="#addtocart-modal" class="btn-icon addtocart add-to-cart-modal" data-bs-toggle="modal" data-bs-target="#addtocart_modal">
                                                    <span class="icon-wrap d-flex-justify-center h-100 w-100" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to Cart"><i class="icon anm anm-cart-l"></i><span class="text">Add to Cart</span></span>
                                                </a>
                                                <!--End Cart Button-->
                                                
                                            </div>
                                            <!--End Product Button-->
                                        </div>
                                        <!-- End Product Image -->
                                        <!-- Start Product Details -->
                                        <div class="product-details text-center">
                                            <!-- Product Name -->
                                            <div class="product-name">
                                                <a href="product-layout1.html">High-Waisted Pant</a>
                                            </div>
                                            <!-- End Product Name -->
                                            <!-- Product Price -->
                                            <div class="product-price">
                                                <span class="price">$139.00</span>
                                            </div>
                                            <!-- End Product Price -->
                                            
                                        </div>
                                        <!-- End product details -->
                                    </div>
                                </div>
                                <div class="item col-item">
                                    <div class="product-box">
                                        <!-- Start Product Image -->
                                        <div class="product-image">
                                            <!-- Start Product Image -->
                                            <a href="product-layout1.html" class="product-img rounded-0">
                                                <!-- Image -->
                                                <img class="primary rounded-0 blur-up lazyload" data-src="assets/images/products/product8.jpg" src="assets/images/products/product8.jpg" alt="Product" title="Product" width="625" height="808" />
                                                <!-- End Image -->
                                                <!-- Hover Image -->
                                                <img class="hover rounded-0 blur-up lazyload" data-src="assets/images/products/product8-1.jpg" src="assets/images/products/product8-1.jpg" alt="Product" title="Product" width="625" height="808" />
                                                <!-- End Hover Image -->
                                            </a>
                                            <!-- End Product Image -->
                                            <!--Product Button-->
                                            <div class="button-set style1">
                                                <!--Cart Button-->
                                                <a href="#addtocart-modal" class="btn-icon addtocart add-to-cart-modal" data-bs-toggle="modal" data-bs-target="#addtocart_modal">
                                                    <span class="icon-wrap d-flex-justify-center h-100 w-100" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to Cart"><i class="icon anm anm-cart-l"></i><span class="text">Add to Cart</span></span>
                                                </a>
                                                <!--End Cart Button-->
                                                
                                            </div>
                                            <!--End Product Button-->
                                        </div>
                                        <!-- End Product Image -->
                                        <!-- Start Product Details -->
                                        <div class="product-details text-center">
                                            <!-- Product Name -->
                                            <div class="product-name">
                                                <a href="product-layout1.html">Narror Neck Tie</a>
                                            </div>
                                            <!-- End Product Name -->
                                            <!-- Product Price -->
                                            <div class="product-price">
                                                <span class="price">$134.00</span>
                                            </div>
                                            <!-- End Product Price -->
                                            
                                        </div>
                                        <!-- End product details -->
                                    </div>
                                </div>
                                <div class="item col-item">
                                    <div class="product-box">
                                        <!-- Start Product Image -->
                                        <div class="product-image">
                                            <!-- Start Product Image -->
                                            <a href="product-layout1.html" class="product-img rounded-0">
                                                <!-- Image -->
                                                <img class="primary rounded-0 blur-up lazyload" data-src="assets/images/products/product9.jpg" src="assets/images/products/product9.jpg" alt="Product" title="Product" width="625" height="808" />
                                                <!-- End Image -->
                                                <!-- Hover Image -->
                                                <img class="hover rounded-0 blur-up lazyload" data-src="assets/images/products/product9-1.jpg" src="assets/images/products/product9-1.jpg" alt="Product" title="Product" width="625" height="808" />
                                                <!-- End Hover Image -->
                                            </a>
                                            <!-- End Product Image -->
                                            
                                            <!--Product Button-->
                                            <div class="button-set style1">
                                                <!--Cart Button-->
                                                <a href="#addtocart-modal" class="btn-icon addtocart add-to-cart-modal" data-bs-toggle="modal" data-bs-target="#addtocart_modal">
                                                    <span class="icon-wrap d-flex-justify-center h-100 w-100" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to Cart"><i class="icon anm anm-cart-l"></i><span class="text">Add to Cart</span></span>
                                                </a>
                                                <!--End Cart Button-->
                                                
                                            </div>
                                            <!--End Product Button-->
                                        </div>
                                        <!-- End Product Image -->
                                        <!-- Start Product Details -->
                                        <div class="product-details text-center">
                                            <!-- Product Name -->
                                            <div class="product-name">
                                                <a href="product-layout1.html">Men's Cheater Jacket</a>
                                            </div>
                                            <!-- End Product Name -->
                                            <!-- Product Price -->
                                            <div class="product-price">
                                                <span class="price">$99.00</span>
                                            </div>
                                            <!-- End Product Price -->
                                            
                                        </div>
                                        <!-- End product details -->
                                    </div>
                                </div>
                                <div class="item col-item">
                                    <div class="product-box">
                                        <!-- Start Product Image -->
                                        <div class="product-image">
                                            <!-- Start Product Image -->
                                            <a href="product-layout1.html" class="product-img rounded-0">
                                                <!-- Image -->
                                                <img class="primary rounded-0 blur-up lazyload" data-src="assets/images/products/product10.jpg" src="assets/images/products/product10.jpg" alt="Product" title="Product" width="625" height="808" />
                                                <!-- End Image -->
                                                <!-- Hover Image -->
                                                <img class="hover rounded-0 blur-up lazyload" data-src="assets/images/products/product10-1.jpg" src="assets/images/products/product10-1.jpg" alt="Product" title="Product" width="625" height="808" />
                                                <!-- End Hover Image -->
                                            </a>
                                            <!-- End Product Image -->
                                            <!--Product Button-->
                                            <div class="button-set style1">
                                                <!--Cart Button-->
                                                <a href="#addtocart-modal" class="btn-icon addtocart add-to-cart-modal" data-bs-toggle="modal" data-bs-target="#addtocart_modal">
                                                    <span class="icon-wrap d-flex-justify-center h-100 w-100" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to Cart"><i class="icon anm anm-cart-l"></i><span class="text">Add to Cart</span></span>
                                                </a>
                                                <!--End Cart Button-->
                                                
                                            </div>
                                            <!--End Product Button-->
                                        </div>
                                        <!-- End Product Image -->
                                        <!-- Start Product Details -->
                                        <div class="product-details text-center">
                                            <!-- Product Name -->
                                            <div class="product-name">
                                                <a href="product-layout1.html">Casual Mustard Shirt</a>
                                            </div>
                                            <!-- End Product Name -->
                                            <!-- Product Price -->
                                            <div class="product-price">
                                                <span class="price">$167.00</span>
                                            </div>
                                            <!-- End Product Price -->
                                            
                                        </div>
                                        <!-- End product details -->
                                    </div>
                                </div>
                                <div class="item col-item">
                                    <div class="product-box">
                                        <!-- Start Product Image -->
                                        <div class="product-image">
                                            <!-- Start Product Image -->
                                            <a href="product-layout1.html" class="product-img rounded-0">
                                                <!-- Image -->
                                                <img class="primary rounded-0 blur-up lazyload" data-src="assets/images/products/product11.jpg" src="assets/images/products/product11.jpg" alt="Product" title="Product" width="625" height="808" />
                                                <!-- End Image -->
                                                <!-- Hover Image -->
                                                <img class="hover rounded-0 blur-up lazyload" data-src="assets/images/products/product11-1.jpg" src="assets/images/products/product11-1.jpg" alt="Product" title="Product" width="625" height="808" />
                                                <!-- End Hover Image -->
                                            </a>
                                            <!-- End Product Image -->
                                            <!--Product Button-->
                                            <div class="button-set style1">
                                                <!--Cart Button-->
                                                <a href="#addtocart-modal" class="btn-icon addtocart add-to-cart-modal" data-bs-toggle="modal" data-bs-target="#addtocart_modal">
                                                    <span class="icon-wrap d-flex-justify-center h-100 w-100" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to Cart"><i class="icon anm anm-cart-l"></i><span class="text">Add to Cart</span></span>
                                                </a>
                                                <!--End Cart Button-->
                                                
                                            </div>
                                            <!--End Product Button-->
                                        </div>
                                        <!-- End Product Image -->
                                        <!-- Start Product Details -->
                                        <div class="product-details text-center">
                                            <!-- Product Name -->
                                            <div class="product-name">
                                                <a href="product-layout1.html">Sleeve Round T-Shirt</a>
                                            </div>
                                            <!-- End Product Name -->
                                            <!-- Product Price -->
                                            <div class="product-price">
                                                <span class="price">$154.00</span>
                                            </div>
                                            <!-- End Product Price -->
                                            
                                        </div>
                                        <!-- End product details -->
                                    </div>
                                </div>
                                <div class="item col-item">
                                    <div class="product-box">
                                        <!-- Start Product Image -->
                                        <div class="product-image">
                                            <!-- Start Product Image -->
                                            <a href="product-layout1.html" class="product-img rounded-0">
                                                <!-- Image -->
                                                <img class="primary rounded-0 blur-up lazyload" data-src="assets/images/products/product12.jpg" src="assets/images/products/product12.jpg" alt="Product" title="Product" width="625" height="808" />
                                                <!-- End Image -->
                                                <!-- Hover Image -->
                                                <img class="hover rounded-0 blur-up lazyload" data-src="assets/images/products/product12-1.jpg" src="assets/images/products/product12-1.jpg" alt="Product" title="Product" width="625" height="808" />
                                                <!-- End Hover Image -->
                                            </a>
                                            <!-- End Product Image -->
                                            <!--Product Button-->
                                            <div class="button-set style1">
                                                <!--Cart Button-->
                                                <a href="#addtocart-modal" class="btn-icon addtocart add-to-cart-modal" data-bs-toggle="modal" data-bs-target="#addtocart_modal">
                                                    <span class="icon-wrap d-flex-justify-center h-100 w-100" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to Cart"><i class="icon anm anm-cart-l"></i><span class="text">Add to Cart</span></span>
                                                </a>
                                                <!--End Cart Button-->
                                                
                                            </div>
                                            <!--End Product Button-->
                                        </div>
                                        <!-- End Product Image -->
                                        <!-- Start Product Details -->
                                        <div class="product-details text-center">
                                            <!-- Product Name -->
                                            <div class="product-name">
                                                <a href="product-layout1.html">Backpack Laptop Bag</a>
                                            </div>
                                            <!-- End Product Name -->
                                            <!-- Product Price -->
                                            <div class="product-price">
                                                <span class="price">$121.00</span>
                                            </div>
                                            <!-- End Product Price -->
                                            
                                        </div>
                                        <!-- End product details -->
                                    </div>
                                </div>
                            </div>                          
                        </div>
                        <!--End Product Grid-->    

                        <!--Load More Button-->
                        <div class="infinitpaginOuter text-center mt-5">
                            <div class="infiniteload"><a href="#" class="btn btn-xl loadMore4">Load More</a></div>    
                        </div>
                        <!--End Load More Button-->
                    </div>
                    <!--End Product Infinite-->
                    <!--End Sub Products--> 
                </div>
                <!--End Main Content-->
            </div>
            <!-- End Body Container -->

            <!--Footer-->
            <div class="footer">
                
                <div class="footer-top clearfix">
                    <div class="container">
                        <div class="row">
                            
                            <div class="col-12 col-sm-12 col-md-3 col-lg-3 footer-contact">
                                <h4 class="h4 text-uppercase">Contact Us</h4>
                                <p class="address d-flex"><i class="icon anm anm-map-marker-al pt-1"></i> Jl. Ungaran Ujung No.14, Kel. Pasar Manggis, Kec. Setia Budi, Jakarta Selatan 12970</p>
                                <p class="phone d-flex align-items-center"><i class="icon anm anm-phone-l"></i>  <b class="me-1 d-none">Phone:</b> <a href="tel:401234567890">(+62) 857 7933 7943</a></p>
                                <p class="email d-flex align-items-center"><i class="icon anm anm-envelope-l"></i> <b class="me-1 d-none">Email:</b> <a href="mailto:info@example.com">alfiansyaharesta1412@gmail.com</a></p>
                                <p class="work-hour d-flex mb-0"><i class="icon anm anm-clock-r pt-1"></i><span class="hour-time">Working Hours: <br/>Monday - Friday | 9:00 AM - 10:00 PM</span></p>
                            </div>
                        </div>               
                    </div>
                </div>
                <div class="footer-bottom clearfix">
                    <div class="container">
                        <div class="row">
                            
                            <div class="copytext text-center">&copy; 2024 Aleena. All Rights Reserved.</div>
                            
                        </div>
                    </div>
                </div>
            </div>
            <!--End Footer-->

            <!--Scoll Top-->
            <div id="site-scroll"><i class="icon anm anm-arw-up"></i></div>
            <!--End Scoll Top-->

            <!--MiniCart Drawer-->
            <div id="minicart-drawer" class="minicart-right-drawer offcanvas offcanvas-end" tabindex="-1">
                <!--MiniCart Empty-->
                <div id="cartEmpty" class="cartEmpty d-flex-justify-center flex-column text-center p-3 text-muted d-none">
                    <div class="minicart-header d-flex-center justify-content-between w-100">
                        <h4 class="fs-6">Your cart (0 Items)</h4>
                        <button class="close-cart border-0" data-bs-dismiss="offcanvas" aria-label="Close"><i class="icon anm anm-times-r" data-bs-toggle="tooltip" data-bs-placement="left" title="Close"></i></button>
                    </div>
                    <div class="cartEmpty-content mt-4">
                        <i class="icon anm anm-cart-l fs-1 text-muted"></i> 
                        <p class="my-3">No Products in the Cart</p>
                        <a href="index.html" class="btn btn-primary cart-btn">Continue shopping</a>
                    </div>
                </div>
                <!--End MiniCart Empty-->

                <!--MiniCart Content-->
                <div id="cart-drawer" class="block block-cart">
                    <div class="minicart-header">
                        <button class="close-cart border-0" data-bs-dismiss="offcanvas" aria-label="Close"><i class="icon anm anm-times-r" data-bs-toggle="tooltip" data-bs-placement="left" title="Close"></i></button>
                        <h4 class="fs-6">Your cart (2 Items)</h4>
                    </div>
                    <div class="minicart-content">
                        <ul class="m-0 clearfix">
                            <li class="item d-flex justify-content-center align-items-center">
                                <a class="product-image rounded-0" href="product-layout1.html">
                                    <img class="rounded-0 blur-up lazyload" data-src="assets/images/products/cart-product-img1.jpg" src="assets/images/products/cart-product-img1.jpg" alt="product" title="Product" width="120" height="170" />
                                </a>
                                <div class="product-details">
                                    <a class="product-title" href="product-layout1.html">Women Sandals</a>
                                    <div class="variant-cart my-2">Black / XL</div>
                                    <div class="priceRow">
                                        <div class="product-price">
                                            <span class="price">$54.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="qtyDetail text-center">
                                    <div class="qtyField">
                                        <a class="qtyBtn minus" href="#;"><i class="icon anm anm-minus-r"></i></a>
                                        <input type="text" name="quantity" value="1" class="qty">
                                        <a class="qtyBtn plus" href="#;"><i class="icon anm anm-plus-r"></i></a>
                                    </div>
                                    <a href="#" class="edit-i remove"><i class="icon anm anm-pencil-ar" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"></i></a>
                                    <a href="#" class="remove"><i class="icon anm anm-times-r" data-bs-toggle="tooltip" data-bs-placement="top" title="Remove"></i></a>
                                </div>
                            </li>
                            <li class="item d-flex justify-content-center align-items-center">
                                <a class="product-image rounded-0" href="product-layout1.html">
                                    <img class="rounded-0 blur-up lazyload" data-src="assets/images/products/cart-product-img2.jpg" src="assets/images/products/cart-product-img2.jpg" alt="product" title="Product" width="120" height="170" />
                                </a>
                                <div class="product-details">
                                    <a class="product-title" href="product-layout1.html">Sleeve Round T-Shirt</a>
                                    <div class="variant-cart my-2">Yellow / M</div>
                                    <div class="priceRow">
                                        <div class="product-price">
                                            <span class="price old-price">$114.00</span><span class="price">$99.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="qtyDetail text-center">
                                    <div class="qtyField">
                                        <a class="qtyBtn minus" href="#;"><i class="icon anm anm-minus-r"></i></a>
                                        <input type="text" name="quantity" value="1" class="qty">
                                        <a class="qtyBtn plus" href="#;"><i class="icon anm anm-plus-r"></i></a>
                                    </div>
                                    <a href="#" class="edit-i remove"><i class="icon anm anm-pencil-ar" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"></i></a>
                                    <a href="#" class="remove"><i class="icon anm anm-times-r" data-bs-toggle="tooltip" data-bs-placement="top" title="Remove"></i></a>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="minicart-bottom">
                        <div class="shipinfo">
                            <div class="progress mb-2"><div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</div></div>
                            <div class="freeShipMsg"><i class="icon anm anm-truck-l fs-6 me-2 align-middle"></i>Only <span class="money" data-currency-usd="$199.00" data-currency="USD">$199.00</span> away from <b>Free Shipping</b></div>
                            <div class="freeShipMsg d-none"><i class="icon anm anm-truck-l fs-6 me-2 align-middle"></i>Congrats! You are eligible for <b>Free Shipping</b></div>
                        </div>
                        <div class="subtotal clearfix my-3">
                            <div class="totalInfo clearfix mb-1 d-none"><span>Shipping:</span><span class="item product-price">$10.00</span></div>
                            <div class="totalInfo clearfix mb-1 d-none"><span>Tax:</span><span class="item product-price">$0.00</span></div>
                            <div class="totalInfo clearfix"><span>Total:</span><span class="item product-price">$163.00</span></div>

                        </div>
                        <div class="agree-check customCheckbox">
                            <input id="prTearm" name="tearm" type="checkbox" value="tearm" required />
                            <label for="prTearm"> I agree with the </label><a href="#" class="ms-1 text-link">Terms &amp; conditions</a>
                        </div>
                        <div class="minicart-action d-flex mt-3">
                            <a href="checkout-style1.html" class="proceed-to-checkout btn btn-primary w-50 me-1">Check Out</a>
                            <a href="cart-style1.html" class="cart-btn btn btn-secondary w-50 ms-1">View Cart</a>
                        </div>
                    </div>
                </div>
                <!--MiniCart Content-->
            </div>
            <!--End MiniCart Drawer-->

            
            <!-- Including Jquery/Javascript -->
            <!-- Plugins JS -->
            <script src="assets/js/plugins.js"></script>
            <!-- Main JS -->
            <script src="assets/js/main.js"></script>

        </div>
        <!--End Page Wrapper-->
    </body>

<!-- Mirrored from www.annimexweb.com/items/hema/sub-collection-style2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 01 Sep 2024 03:43:22 GMT -->
</html>