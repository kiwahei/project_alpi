<?php $this->load->view("admin/_partials/head.php") ?>
<?php $this->load->view("admin/_partials/sidebar.php") ?>

<div id="main">
    <div class="page-heading">
        <div class="page-title">
            <h1>Transaction</h1>
        <div>

    </div>
    <section class="section">
        <div class="card">
            <div class="card-header">
                <div>
                <h5 class="card-title col">
                    New Transaction
                </h5>
                </div>
             
            </div>
            <div class="card-body">

                <table class="table">
                    <thead>
                        <tr>
                            <th>Product</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Subtotal</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($trxs as $t): ?>
                        <tr>
                            <td><?= $t["product_name"] ?></td>
                            <td><?= $t["product_price"] ?></td>
                            <td><?= $t["quantity"] ?></td>
                            <td><?= $t["subtotal"] ?></td>
                        </t>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <a class="btn btn-primary" href="<?= base_url()?>admin/transaction/complete/<?= $trx->id ?>">Complete</a>
            </div>
        <div>
    </section>
    

</div>


<?php $this->load->view("admin/_partials/footer.php") ?>