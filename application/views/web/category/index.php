<?php $this->load->view("web/_partials/head.php") ?>
<?php $this->load->view("web/_partials/navbar.php") ?>
<?php $this->load->view("web/_partials/navbar-mobile.php") ?>

 <!-- Body Container -->
 <div id="page-content">
    <div class="page-header text-center">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 d-flex justify-content-between align-items-center">
                    <div class="page-title"><h1>Product</h1></div>
                    <!--Breadcrumbs-->
                    <!-- <div class="breadcrumbs"><a href="index.html" title="Back to the home page">Home</a><span class="main-title"><i class="icon anm anm-angle-right-l"></i>Your Shopping Cart Style1</span></div> -->
                    <!--End Breadcrumbs-->
                </div>
            </div>
        </div>
    </div>
    
    <div class="container">
        <div class="collection-style1 row col-row row-cols-xl-4 row-cols-lg-3 row-cols-md-2 row-cols-2">
            <?php foreach($categories as $c): ?>
            <div class="category-item col-item zoomscal-hov">
                <a href="<?= base_url("/category/view/").$c["id"] ?>" class="category-link clr-none">
                    <div class="zoom-scal zoom-scal-nopb"><img class="blur-up w-100 lazyloaded" data-src="<?= base_url('/uploads/category/').$c['image'] ?>" src="<?= base_url('/uploads/category/').$c['image'] ?>" alt="<?= $c["name"] ?>" title="<?= $c["name"] ?>" width="365" height="365"></div>
                    <div class="details mt-3 d-flex justify-content-between align-items-center">
                        <h4 class="category-title mb-0"><?= $c["name"] ?></h4>
                        <p class="counts"><?= $c["size"] ?> Items</p>
                    </div>
                </a>
            </div>
            <?php endforeach ?>
            
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