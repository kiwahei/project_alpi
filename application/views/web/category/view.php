<?php $this->load->view("web/_partials/head.php") ?>
<?php $this->load->view("web/_partials/navbar.php") ?>
<?php $this->load->view("web/_partials/navbar-mobile.php") ?>

 <!-- Body Container -->
 <div id="page-content">
    <div class="page-header text-center">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 d-flex justify-content-between align-items-center">
                    <div class="page-title"><h1>Category: <?= $category->name ?></h1></div>
                    <!--Breadcrumbs-->
                    <!-- <div class="breadcrumbs"><a href="index.html" title="Back to the home page">Home</a><span class="main-title"><i class="icon anm anm-angle-right-l"></i>Your Shopping Cart Style1</span></div> -->
                    <!--End Breadcrumbs-->
                </div>
            </div>
        </div>
    </div>
    
    <div class="container">
    <div class="grid-products grid-view-items">
            <div class="row col-row product-options row-cols-xl-5 row-cols-lg-4 row-cols-md-3 row-cols-sm-3 row-cols-2">       
                <?php foreach($products as $p): ?>                            
                <div class="item col-item">
                    <div class="product-box">
                        <!-- Start Product Image -->
                        <div>
                            <!-- Start Product Image -->
                            <a href="<?= base_url("/product/view/").$p["id"] ?>" class="product-img rounded-0">
                                <!-- Image -->
                                <img class="primary rounded-0 blur-up lazyloaded" data-src="<?= base_url("/uploads/product/").$p['image']  ?>" src="<?= base_url("/uploads/product/").$p['image']  ?>" alt="Product" title="Product" width="625" height="625">
                                <!-- End Image -->
                            </a>
                            <!-- End Product Image -->
                        </div>
                        <!-- End Product Image -->
                        <!-- Start Product Details -->
                        <div class="product-details text-left">
                            
                            <!-- Product Name -->
                            <div class="product-name">
                                <a href="product-layout1.html"><?= $p['name'] ?></a>
                            </div>
                            <!-- End Product Name -->
                            <!-- Product Price -->
                            <div class="product-price">
                                <span class="price">Rp. <?= number_format($p['price'], 0, ',', '.') ?></span>
                            </div>
                            <!-- End Product Price -->
                            <!-- Product Review -->
                            <!-- <div class="product-review mb-2"> -->
                                <!-- <i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star"></i>
                                <span class="caption hidden ms-1">8 Reviews</span>
                            </div> -->
                            <!-- End Product Review -->
                                <button class="btn btn-primary add-to-cart" data-product-id="<?= $p["id"] ?>" data-product-name="<?= $p["name"] ?>" data-product-price="<?= $p["price"] ?>" data-product-image="<?= $p["image"] ?>">Add to cart</button>
                            <!--Sort Description-->
                            <!-- <p class="sort-desc hidden">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage...</p> -->
                            <!--End Sort Description-->
                        
                        
                        </div>
                        <!-- End product details -->
                    </div>
                </div>
                <?php endforeach ?>
            </div>

            <!-- Pagination -->
            <!-- <nav class="clearfix pagination-bottom">
                <ul class="pagination justify-content-center">
                    <li class="page-item disabled"><a class="page-link" href="#"><i class="icon anm anm-angle-left-l"></i></a></li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link dot" href="#">...</a></li>
                    <li class="page-item"><a class="page-link" href="#">5</a></li>
                    <li class="page-item"><a class="page-link" href="#"><i class="icon anm anm-angle-right-l"></i></a></li>
                </ul>
            </nav> -->
            <!-- End Pagination -->
        </div>
    </div>
</div>


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