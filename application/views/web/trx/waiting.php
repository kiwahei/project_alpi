<?php $this->load->view("web/_partials/head.php") ?>
<?php $this->load->view("web/_partials/navbar.php") ?>
<?php $this->load->view("web/_partials/navbar-mobile.php") ?>

 <!-- Body Container -->
 <div id="page-content">
    <!--Page Header-->
    <div class="page-header text-center">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 d-flex justify-content-between align-items-center">
                    <div class="page-title"><h1>Order success</h1></div>
                    <!--Breadcrumbs-->
                    <div class="breadcrumbs"><a href="index.html" title="Back to the home page">Home</a><span class="main-title"><i class="icon anm anm-angle-right-l"></i>Order success</span></div>
                    <!--End Breadcrumbs-->
                </div>
            </div>
        </div>
    </div>
    <!--End Page Header-->

    <!--Main Content-->
    <div class="container">   
        <!--Order success-->
        <div class="success-text checkout-card text-center mb-4 mb-md-5">
            <i class="bi bi-clock-fill" style="font-size: 16rem; color: yellow;"></i>
            <h2>Thank you for your order!</h2>
            <p class="mb-1">Payment is successfully processsed and your order is on the way</p>
            <p class="mb-1">You will receive an order confirmation email with details of your order and a link to track its progress.</p>                                       
            <p class="text-order badge bg-success mt-3">Transaction ID: GHERT05764</p>
        </div>
        <!--End Order success-->

        <div class="card">
            <div class="card-header">
                <div class="card-title bold">Upload Bukti Pembayaran</div>
            </div>
            <div class="card-body">
                <form action="<?= base_url() ?>/trx/upload/<?= $trx->id ?>" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <input class="form-control form-control-lg" name="image" type="file">
                    </div>
                    <button class="btn btn-primary" type="submit">Upload</button>
                </form>
            </div>
          
        </div>

        <hr class="my-3">

        <div class="row checkout-form">
            <div class="col-12 col-sm-12 col-md-12 col-lg-6">   
                <!--Order Summary-->
                <div class="block order-summary">
                    <div class="block-content">
                        <h3 class="title mb-3">Order Summary</h3>
                        <div class="table-responsive-sm table-bottom-brd order-table"> 
                            <table class="table table-hover align-middle mb-0">
                                <thead>
                                    <tr>
                                        <th class="text-start">Image</th>
                                        <th class="text-start proName">Product</th>
                                        <th class="text-center">Qty</th>
                                        <th class="text-center">Price</th>
                                        <th class="text-center">Subtotal</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($products as $product): ?>
                                    <tr>
                                        <td class="text-start"><a href="product-layout1.html" class="thumb"><img class="rounded-0 blur-up lazyload" data-src="assets/images/products/product1-120x170.jpg" src="assets/images/products/product1-120x170.jpg" alt="product" title="product" width="120" height="170"></a></td>
                                        <td class="text-start proName">
                                            <div class="list-view-item-title">
                                                <a href="product-layout1.html"><?= $product->name ?></a>
                                            </div>
                                            <div class="cart-meta-text">
                                                Color: Black<br>Size: Small
                                            </div>
                                        </td>
                                        <td class="text-center"><?= $product->quantity ?></td>
                                        <td class="text-center"><?= $product->price ?></td>
                                        <td class="text-center"><strong>$198.00</strong></td>
                                    </tr>
                                    <?php endforeach ?>
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!--End Order Summary-->

                <!--Cart Summary-->
                <div class="cart-info mt-4 mb-4 mb-lg-0">
                    <div class="cart-order-detail cart-col">
                        <div class="row g-0 border-bottom pb-2">
                            <span class="col-6 col-sm-6 cart-subtotal-title"><strong>Subtotal</strong></span>
                            <span class="col-6 col-sm-6 cart-subtotal-title cart-subtotal text-end"><span class="money">$326.00</span></span>
                        </div>
                        <div class="row g-0 border-bottom py-2">
                            <span class="col-6 col-sm-6 cart-subtotal-title"><strong>Coupon Discount</strong></span>
                            <span class="col-6 col-sm-6 cart-subtotal-title cart-subtotal text-end"><span class="money">-$25.00</span></span>
                        </div>
                        <div class="row g-0 border-bottom py-2">
                            <span class="col-6 col-sm-6 cart-subtotal-title"><strong>Tax</strong></span>
                            <span class="col-6 col-sm-6 cart-subtotal-title cart-subtotal text-end"><span class="money">$10.00</span></span>
                        </div>
                        <div class="row g-0 border-bottom py-2">
                            <span class="col-6 col-sm-6 cart-subtotal-title"><strong>Shipping</strong></span>
                            <span class="col-6 col-sm-6 cart-subtotal-title cart-subtotal text-end"><span class="money">Free shipping</span></span>
                        </div>
                        <div class="row g-0 pt-2">
                            <span class="col-6 col-sm-6 cart-subtotal-title fs-6"><strong>Total</strong></span>
                            <span class="col-6 col-sm-6 cart-subtotal-title fs-5 cart-subtotal text-end text-primary"><b class="money">$311.00</b></span>
                        </div>
                    </div>                               
                </div>
                <!--Cart Summary-->                           
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                <!--Order Address-->
                <div class="block">
                    <div class="block-content">  
                        <div class="row g-0">
                            <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                                <div class="shipping-details mb-4 mb-sm-0">
                                    <h3 class="title mb-3">Shipping Address</h3>
                                    <p>No 40 Gallaxy Enque Street 133/2,</p>
                                    <p>New York,</p>
                                    <p>USA</p>
                                    <p>00004-1988</p>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                                <div class="billing-details">
                                    <h3 class="title mb-3">Billing Address</h3>
                                    <p>No 40 Gallaxy Enque Street 133/2,</p>
                                    <p>New York,</p>
                                    <p>USA</p>
                                    <p>00004-1988</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Order Address-->

                <!--Order Method-->
                <div class="block mt-4">
                    <div class="block-content">  
                        <div class="row g-0">
                            <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                                <div class="shipping-details mb-4 mb-sm-0">
                                    <h3 class="title mb-3">Shipping Method</h3>
                                    <p>Flat Rate - Fixeds</p>
                                    <p>Delivery Date: N/A</p>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                                <div class="billing-details">
                                    <h3 class="title mb-3">Payment Method</h3>
                                    <p>Check / Money order</p>
                                    <p>Cash on delivery</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Order Method-->

                <!--Order Details-->
                <div class="block mt-4">
                    <div class="block-content">  
                        <div class="row g-0">
                            <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                                <div class="shipping-details mb-4 mb-sm-0">
                                    <h3 class="title mb-3">Order details</h3>
                                    <p>Order ID: GHERT05764</p>
                                    <p>Order Date: October 14, 2023</p>
                                    <p>Order Total: $311.00</p>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                                <div class="billing-details">
                                    <h3 class="title mb-3">Expected date of delivery</h3>
                                    <p>Your order is on the way</p>
                                    <p class="h5 my-2">October 18, 2023</p>
                                    <p><a href="#" class="btn-link">Track order</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Order Details-->

                <!--Order Delivery-->
                <div class="d-flex-wrap w-100 mt-4 text-center">
                    <a href="index.html" class="d-inline-flex align-items-center btn btn-outline-primary me-2 mb-2 me-sm-3"><i class="me-2 icon an an-angle-left-r"></i>Continue Shopping</a>
                    <button type="button" class="d-inline-flex align-items-center btn me-2 mb-2 me-sm-3"><i class="me-2 icon an an-print"></i>Print Order</button>
                    <button type="button" class="d-inline-flex align-items-center btn me-2 mb-2 me-sm-3"><i class="me-2 icon an an-sync-ar"></i>Re-Order</button>
                </div>
                <!--Order delivery-->
            </div>
        </div>
    </div>
    <!--End Main Content-->
</div>
<!-- End Body Container -->



<?php $this->load->view("web/_partials/footer.php") ?>
<?php $this->load->view("web/_partials/foot.php") ?>