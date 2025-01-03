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
                        <div class="page-title"><h1>Your Shopping Cart Style1</h1></div>
                        <!--Breadcrumbs-->
                        <div class="breadcrumbs"><a href="index.html" title="Back to the home page">Home</a><span class="main-title"><i class="icon anm anm-angle-right-l"></i>Your Shopping Cart Style1</span></div>
                        <!--End Breadcrumbs-->
                    </div>
                </div>
            </div>
        </div>
        <!--End Page Header-->

        <!--Main Content-->
        <div class="container">     
            <div class="row">
                <!--Cart Content-->
                <div class="col-12 col-sm-12 col-md-12 col-lg-8 main-col">
                    <?php if ($this->session->flashdata('message')): ?>
                        <div class="alert alert-success alert-dismissible fade show cart-alert" role="alert">
                                <?php echo $this->session->flashdata('message'); ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        
                    <?php endif; ?>
                    
                    <!--End Alert msg-->

                    <!--Cart Form-->
                    <form  method="post" class="cart-table table-bottom-brd">
                        <table class="table align-middle">
                            <thead class="cart-row cart-header small-hide position-relative">
                                <tr>
                                    <th class="action">&nbsp;</th>
                                    <th colspan="2" class="text-start">Product</th>
                                    <th class="text-center">Price</th>
                                    <th class="text-center">Quantity</th>
                                    <th class="text-center">Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($carts as $c): ?>
                                <tr class="cart-row cart-flex position-relative">
                                    <td class="cart-delete text-center small-hide">
                                        <a href="<?= base_url() ?>cart/remove/<?= $c['id']?>" class="cart-remove remove-icon position-static" data-bs-toggle="tooltip" data-bs-placement="top" title="Remove to Cart"><i class="icon anm anm-times-r"></i></a>
                                    </td>
                                    <td class="cart-image cart-flex-item">
                                        <a href="product-layout1.html"><img class="cart-image rounded-0 blur-up lazyload" data-src="assets/images/products/product1-120x170.jpg" src="assets/images/products/product1-120x170.jpg" alt="Sunset Sleep Scarf Top" width="120" height="170" /></a>
                                    </td>
                                    <td class="cart-meta small-text-left cart-flex-item">
                                        <div class="list-view-item-title">
                                            <a href="product-layout1.html"><?= $c["product_name"] ?></a>
                                        </div>
                                        <div class="cart-meta-text d-none">
                                            Color: Black<br>Size: Small<br>Qty: 2
                                        </div>
                                        <div class="cart-price d-md-none">
                                            <span class="money fw-500">Rp. <?= $c['product_price'] ?></span>
                                        </div>
                                    </td>
                                    <div class="product">
                                        <td class="cart-price cart-flex-item text-center small-hide">
                                            <span>Rp. </span><span class="money"> <?= $c['product_price'] ?></span>
                                        </td>
                                        <td class="cart-update-wrapper cart-flex-item text-end text-md-center">
                                            <div class="cart-qty d-flex justify-content-end justify-content-md-center">
                                                <div class="qtyField">
                                                    <a class="qtyBtn minus" data-cart-id="<?= $c['id'] ?>" href="#;"><i class="icon anm anm-minus-r"></i></a>
                                                    <input class="cart-qty-input qty" id="comm" data-id="<?= $c['id'] ?>" type="text" name="updates[]" value="<?= $c['quantity'] ?>" pattern="[0-9]*" />
                                                    <a class="qtyBtn plus" data-cart-id="<?= $c['id'] ?>" href="#;"><i class="icon anm anm-plus-r"></i></a>
                                                </div>
                                            </div>
                                            <a href="#" title="Remove" class="removeMb d-md-none d-inline-block text-decoration-underline mt-2 me-3">Remove</a>
                                        </td>
                                        <td class="cart-price cart-flex-item text-center small-hide">
                                            <span>Rp. </span><span class="money fw-500 total-product-price">0</span>
                                        </td>
                                    </div>
                                    
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="3" class="text-start"><a href="#" class="btn btn-outline-secondary btn-sm cart-continue"><i class="icon anm anm-angle-left-r me-2 d-none"></i> Continue shopping</a></td>
                                    <td colspan="3" class="text-end">
                                        <a href="<?= base_url() ?>cart/clear"  name="clear" class="btn btn-outline-secondary btn-sm small-hide"><i class="icon anm anm-times-r me-2 d-none"></i> Clear Shoping Cart</a>
                                        <button type="submit" name="update" class="btn btn-secondary btn-sm cart-continue ms-2"><i class="icon anm anm-sync-ar me-2 d-none"></i> Update Cart</button>
                                    </td>
                                </tr>
                            </tfoot>
                        </table> 
                    </form>    
                    <!--End Cart Form-->


                    <form action="<?= base_url() ?>trx/checkout" method="post">
                        <div class="row mb-3 pt-3">
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 mb-12 cart-col">
                                <div class="cart-note">
                                    <h5>Shipping Method</h5>
                                    <label for="cart-note">Fill ur shipping address</label>
                                    <select class="form-control form-select" name="courier" required    >
                                        <option value="" selected disabled>- SELECT -</option>
                                        <?php foreach($couriers as $c): ?>
                                        <option value="<?= $c['id'] ?>"><?= $c['name'] ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                        </div>

                        
                        <div class="row mb-3 pt-3">
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 mb-12 cart-col">
                                <div class="cart-note">
                                    <h5>Payment Method</h5>
                                    <label for="cart-note">Fill ur shipping address</label>
                                    <select class="form-control form-select" name="payment" required>
                                        <option value="" selected disabled>- SELECT -</option>
                                        <?php foreach($payments as $c): ?>
                                        <option value="<?= $c['id']?>"><?= $c['name'] ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                        </div>

                                    


                        <div class="row mb-3 pt-3">
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 mb-12 cart-col">
                                <div class="cart-note">
                                    <h5>Shipping Address</h5>
                                    <label for="cart-note">Fill ur shipping address</label>
                                    <textarea name="shippingAddress" id="shipping-address" class="form-control cart-note-input" rows="3" required></textarea>
                                </div>
                            </div>
                        </div>


                        <!--Note with Shipping estimates-->
                        <div class="row mb-3 pt-3">
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 mb-12 cart-col">
                                <div class="cart-note">
                                    <h5>Add a note to your order</h5>
                                    <label for="cart-note">Notes about your order, e.g. special notes for delivery.</label>
                                    <textarea name="note" id="note" class="form-control cart-note-input" rows="3"></textarea>
                                </div>
                            </div>
                        </div>

                        <button class="d-none" type="submit" id="submit"></button>
                    </form>

                    
                </div>
                <!--End Cart Content-->

                <!--Cart Sidebar-->
                <div class="col-12 col-sm-12 col-md-12 col-lg-4 cart-footer">
                    <div class="cart-info sidebar-sticky">
                        <div class="cart-order-detail cart-col">
                            <div class="row g-0 border-bottom pb-2">
                                <span class="col-6 col-sm-6 cart-subtotal-title"><strong>Subtotal</strong></span>
                                <span class="col-6 col-sm-6 cart-subtotal-title cart-subtotal text-end">Rp. <span class="money" id="subtotal"></span></span>
                            </div>
                            <div class="row g-0 border-bottom py-2 d-none">
                                <span class="col-6 col-sm-6 cart-subtotal-title"><strong>Coupon Discount</strong></span>
                                <span class="col-6 col-sm-6 cart-subtotal-title cart-subtotal text-end"><span class="money">-$25.00</span></span>
                            </div>
                            <div class="row g-0 border-bottom py-2">
                                <span class="col-6 col-sm-6 cart-subtotal-title"><strong>Shipping</strong></span>
                                <span class="col-6 col-sm-6 cart-subtotal-title cart-subtotal text-end"><span class="money">Free shipping</span></span>
                            </div>
                            <div class="row g-0 pt-2">
                                <span class="col-6 col-sm-6 cart-subtotal-title fs-6"><strong>Total</strong></span>
                                <span class="col-6 col-sm-6 cart-subtotal-title fs-5 cart-subtotal text-end text-warning">Rp. <b class="money" id="total">0</b></span>
                            </div>

                            <p class="cart-shipping mt-3">Shipping &amp; taxes calculated at checkout</p>
                            <p class="cart-shipping fst-normal freeShipclaim"><i class="me-2 align-middle icon anm anm-truck-l"></i><b>FREE SHIPPING</b> ELIGIBLE</p>
                            <div class="customCheckbox cart-tearm">
                                <input type="checkbox" value="allen-vela" id="cart-tearm">
                                <label for="cart-tearm">I agree with the terms and conditions</label>
                            </div>
                            
                            <button type="button" id="cartCheckout" class="btn btn-lg my-4 checkout w-100">Proceed To Checkout</button>
                            <div class="paymnet-img text-center"><img src="assets/images/icons/safepayment.png" alt="Payment" width="299" height="28" /></div>
                        </div>                               
                    </div>
                </div>
                <!--End Cart Sidebar-->
            </div>
        </div>
        <!--End Main Content-->
    </div>
    <!-- End Body Container -->

<script>

    $(document).ready(function() {
        calculate()
      
    })

    function calculate(){
        calculateTotalCartPrice()
        setTimeout(calculateSubTotal(), 500);
    }



    

    function calculateSubTotal() {
        let total = 0;

        // Pilih semua elemen dengan class `total_product_price`
        $('.total-product-price').each(function() {
            // Ambil teks di dalam elemen, hilangkan "RP." dan spasi, lalu ubah menjadi angka
            const priceText = $(this).text().replace(',', '').replace('RP.', '').replace(/,/g, '').trim();
    
            const price = parseFloat(priceText);

            // Pastikan nilai price valid sebelum menambahkannya
            if (!isNaN(price)) {
                total += price;
            }
        });

        $('#subtotal').text(total.toLocaleString());
        $('#total').text(total.toLocaleString());
    }
    

    function calculateTotalCartPrice() {
    let totalCartPrice = 0;

    // Iterasi setiap elemen dengan class `product`
    $('.cart-row').each(function() {
        // Ambil harga produk
        const priceText = $(this).find('.cart-price .money').text().replace('Rp.', '').replace(/,/g, '').trim();
        const price = parseFloat(priceText);

        // Ambil kuantitas produk
        const quantityText = $(this).find('.qty').val();
        const quantity = parseInt(quantityText);

        // Pastikan harga dan kuantitas valid sebelum menghitung total
        if (!isNaN(price) && !isNaN(quantity)) {
            const totalPricePerProduct = price * quantity;
            totalCartPrice += totalPricePerProduct;

            // Perbarui total harga per produk di elemen
            $(this).find('.total-product-price').text(totalPricePerProduct.toLocaleString());
        }
    });

    // Tampilkan total keseluruhan di tempat yang diinginkan
    
}

</script>

<script>
    $(document).ready(function() {
    var base_url = "<?= base_url(); ?>";

    

    $('#cartCheckout').click(function(e) {
        $('#submit').click()

        // e.preventDefault();
        // $.ajax({
        //     url: base_url + 'trx/checkout',
        //     method: 'POST',
        //     dataType: 'json',
        //     data: {
        //         note: $('#note').val(),
        //         shippingAddress: $('#shipping-address').val()
        //     },
        //     success: function(response) {
        //         if (response.status === 'success') {
        //             // Redirect ke URL tujuan
        //             window.location.href = response.redirect_url;
        //         } else {
        //             // Tampilkan pesan error
        //             alert(response.message);
        //         }
        //     }
        // });
    });
});
</script>


<script>
    $(document).ready(function () {
        let delayTimer;
        $('.qtyBtn.plus').on('click', function () {
            console.log("test")
            clearTimeout(delayTimer);
            delayTimer = setTimeout(() => {
                var cartId = $(this).data('cart-id');
                var input = $('input[data-id="' + cartId + '"]');
                var currentQty = parseInt(input.val()); 
                
                calculate()

                $.ajax({
                    url: '<?= base_url("cart/updateQuantity") ?>',
                    type: 'POST',
                    data: {
                        cartId: cartId,
                        quantity: currentQty
                    },
                    success: function (response) {
                        // if (response.success) {
                        //     input.val(currentQty + 1); // Update input value
                        //     updateTotalPrice(productId, response.total_price); // Update total product price
                        // } else {
                        //     alert(response.message);
                        // }
                    },
                })
            }, 300); 
        })  

        $('.qtyBtn.minus').on('click', function () {
            console.log("test")
            clearTimeout(delayTimer);
            delayTimer = setTimeout(() => {
                var cartId = $(this).data('cart-id');
                var input = $('input[data-id="' + cartId + '"]');
                var currentQty = parseInt(input.val());          
                calculate()     

                $.ajax({
                    url: '<?= base_url("cart/updateQuantity") ?>',
                    type: 'POST',
                    data: {
                        cartId: cartId,
                        quantity: currentQty
                    },
                    success: function (response) {
                        

                        // if (response.success) {
                        //     input.val(currentQty + 1); // Update input value
                        //     updateTotalPrice(productId, response.total_price); // Update total product price
                        // } else {
                        //     alert(response.message);
                        // }
                    },
                })
            }, 300); 
        })  



        
    })

</script>



<?php $this->load->view("web/_partials/cart.php") ?>
<?php $this->load->view("web/_partials/footer.php") ?>
<?php $this->load->view("web/_partials/foot.php") ?>


