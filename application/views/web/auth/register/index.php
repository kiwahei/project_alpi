<?php $this->load->view("web/_partials/head.php") ?>
<?php $this->load->view("web/_partials/navbar.php") ?>
<?php $this->load->view("web/_partials/navbar-mobile.php") ?>

   <!--Page Wrapper-->
   <div class="page-wrapper">
            
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
                                <ul id="siteNav" class="site-nav medium center">
                                    
                                </ul>
                            </nav>
                        </div>
                        <!--End Menu-->
                        <!--Right Icon-->
                        <div class="col-7 col-sm-9 col-md-9 col-lg-2 align-self-center icons-col text-right">
                            <!--Search-->
                            <div class="search-parent iconset">
                                <!-- <div class="site-search" title="Search">
                                    <a href="#;" class="search-icon clr-none" data-bs-toggle="offcanvas" data-bs-target="#search-drawer"><i class="hdr-icon icon anm anm-search-l"></i></a>
                                </div> -->
                                <div class="search-drawer offcanvas offcanvas-top" tabindex="-1" id="search-drawer">
                                    <div class="container">
                                        <div class="search-header d-flex-center justify-content-between mb-3">
                                            <h3 class="title m-0">What are you looking for?</h3>
                                            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                        </div>
                                        <div class="search-body">
                                            <form class="form minisearch" id="header-search" action="#" method="get">
                                                <!--Search Field-->
                                                <div class="d-flex searchField">
                                                    <div class="search-category">
                                                        <select class="rgsearch-category rounded-end-0">
                                                            <option value="0">All Categories</option>
                                                            <option value="1">- All</option>
                                                            <option value="2">- Fashion</option>
                                                            <option value="3">- Shoes</option>
                                                            <option value="4">- Electronic</option>
                                                            <option value="5">- Jewelry</option>
                                                            <option value="6">- Vegetables</option>
                                                            <option value="7">- Furniture</option>
                                                            <option value="8">- Accessories</option>
                                                        </select>
                                                    </div>
                                                    <div class="input-box d-flex fl-1">
                                                        <input type="text" class="input-text rounded-0 border-start-0 border-end-0" placeholder="Search for products..." value="" />
                                                        <button type="submit" class="action search d-flex-justify-center btn rounded-start-0"><i class="icon anm anm-search-l"></i></button>
                                                    </div>
                                                </div>
                                                <!--End Search Field-->
                                                <!--Search popular-->
                                                <div class="popular-searches d-flex-justify-center mt-3">
                                                    <span class="title fw-600">Trending Now:</span>
                                                    <div class="d-flex-wrap searches-items">
                                                        <a class="text-link ms-2" href="#">T-Shirt,</a>
                                                        <a class="text-link ms-2" href="#">Shoes,</a>
                                                        <a class="text-link ms-2" href="#">Bags</a>
                                                    </div>
                                                </div>
                                                <!--End Search popular-->
                                                <!--Search products-->
                                                <div class="search-products">
                                                    <ul class="items g-2 g-md-3 row row-cols-lg-4 row-cols-md-3 row-cols-sm-2">
                                                        <li class="item empty w-100 text-center text-muted d-none">You don't have any items in your search.</li>
                                                        <li class="item">                                                       
                                                            <div class="mini-list-item d-flex align-items-center w-100 clearfix">
                                                                <div class="mini-image text-center"><a class="item-link" href="product-layout1.html"><img class="rounded-0 blur-up lazyload" data-src="assets/images/products/product1-120x170.jpg" src="assets/images/products/product1-120x170.jpg" alt="image" title="product" width="120" height="170" /></a></div>
                                                                <div class="ms-3 details text-left">
                                                                    <div class="product-name"><a class="item-title" href="product-layout1.html">Oxford Cuban Shirt</a></div>
                                                                    <div class="product-price"><span class="old-price">$114.00</span><span class="price">$99.00</span></div>
                                                                    <div class="product-review d-flex align-items-center justify-content-start">
                                                                        <i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star-o"></i><i class="icon anm anm-star-o"></i>
                                                                        <span class="caption hidden ms-2">3 reviews</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="item">
                                                            <div class="mini-list-item d-flex align-items-center w-100 clearfix">
                                                                <div class="mini-image text-center"><a class="item-link" href="product-layout1.html"><img class="rounded-0 blur-up lazyload" data-src="assets/images/products/product2-120x170.jpg" src="assets/images/products/product2-120x170.jpg" alt="image" title="product" width="120" height="170" /></a></div>
                                                                <div class="ms-3 details text-left">
                                                                    <div class="product-name"><a class="item-title" href="product-layout1.html">Cuff Beanie Cap</a></div>
                                                                    <div class="product-price"><span class="price">$128.00</span></div>
                                                                    <div class="product-review d-flex align-items-center justify-content-start">
                                                                        <i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star"></i>
                                                                        <span class="caption hidden ms-2">9 reviews</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="item">
                                                            <div class="mini-list-item d-flex align-items-center w-100 clearfix">
                                                                <div class="mini-image text-center"><a class="item-link" href="product-layout1.html"><img class="rounded-0 blur-up lazyload" data-src="assets/images/products/product3-120x170.jpg" src="assets/images/products/product3-120x170.jpg" alt="image" title="product" width="120" height="170" /></a></div>
                                                                <div class="ms-3 details text-left">
                                                                    <div class="product-name"><a class="item-title" href="product-layout1.html">Flannel Collar Shirt</a></div>
                                                                    <div class="product-price"><span class="price">$99.00</span></div>
                                                                    <div class="product-review d-flex align-items-center justify-content-start">
                                                                        <i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star-o"></i>
                                                                        <span class="caption hidden ms-2">30 reviews</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <!--End Search products-->
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                                        
                        </div>
                        
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
                                <div class="page-title"><h1>Register</h1></div>
                                <!--Breadcrumbs-->
                                <div class="breadcrumbs"><a href="<?php echo site_url('home'); ?>" title="Back to the home page">Home</a><span class="title"><i class="icon anm anm-angle-right-l"></i></span><span class="main-title fw-bold"></i>Register</span></div>
                                <!--End Breadcrumbs-->
                            </div>
                        </div>
                    </div>
                </div>
    <div class="login-register pt-2">
        <div class="row">
            <div class="col-md-8 offset-md-2 col-lg-6 offset-lg-3">
                <form method="post" action="<?php echo site_url('auth/register'); ?>">
                    <h2 class="text-center fs-4 mb-3">REGISTER</h2>

                    <!-- Display validation errors -->
                    <?php echo validation_errors('<p class="alert alert-danger">', '</p>'); ?>

                    <!-- Flash messages -->
                    <?php if ($this->session->flashdata('success')): ?>
                        <p class="alert alert-success"><?php echo $this->session->flashdata('success'); ?></p>
                    <?php endif; ?>
                    <?php if ($this->session->flashdata('error')): ?>
                        <p class="alert alert-danger"><?php echo $this->session->flashdata('error'); ?></p>
                    <?php endif; ?>

                    <!-- Email field -->
                    <div class="form-group">
                        <label for="email" class="form-label">Email <span class="required text-danger">*</span></label>
                        <input 
                            type="email" 
                            id="email" 
                            name="email" 
                            class="form-control" 
                            placeholder="Enter your email" 
                            value="<?php echo set_value('email'); ?>" 
                            required>
                    </div>

                    <!-- Password field -->
                    <div class="form-group">
                        <label for="password" class="form-label">Password <span class="required text-danger">*</span></label>
                        <input 
                            type="password" 
                            id="password" 
                            name="password" 
                            class="form-control" 
                            placeholder="Enter your password" 
                            required>
                    </div>

                    <!-- Confirm Password field -->
                    <div class="form-group">
                        <label for="confirm_password" class="form-label">Confirm Password <span class="required text-danger">*</span></label>
                        <input 
                            type="password" 
                            id="confirm_password" 
                            name="confirm_password" 
                            class="form-control" 
                            placeholder="Confirm your password" 
                            required>
                    </div>

                    <!-- Submit button -->
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-lg w-100">Sign Up</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

            

            



<?php $this->load->view("web/_partials/cart.php") ?>
<?php $this->load->view("web/_partials/footer.php") ?>
<?php $this->load->view("web/_partials/foot.php") ?>
