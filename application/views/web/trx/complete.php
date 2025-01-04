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
        <div class="success-text checkout-card mb-2 d-flex align-items-center">
            <div class="me-4">
                <i class="bi bi-bag-check" style="font-size: 8rem; color: #FFE893;"></i>
            </div>
            <div>
                <h2>Thank you for your order!</h2>
                <p class="mb-1">Payment is successfully processsed and your order is on the way</p>
                <p class="mb-1">You will receive an order confirmation email with details of your order and a link to track its progress.</p>                                       
                <p class="text-order badge bg-success mt-3">Transaction ID: <?= $trx->id ?></p>
                <p class="text-order badge bg-success mt-3">Status ID: Complete</p>
            </div>
           
          
        </div>
        <!--End Order success-->

        

        <?php $this->load->view("web/trx/_partials/trx-detail.php", array("products"=> $products, "trx"=> $trx, "courier"=> $courier, "payment"=> $payment)) ?>

        
    </div>
    <!--End Main Content-->
</div>
<!-- End Body Container -->



<?php $this->load->view("web/_partials/footer.php") ?>
<?php $this->load->view("web/_partials/foot.php") ?>