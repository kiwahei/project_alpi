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
                            <th class="text-end">Subtotal</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($trxs as $t): ?>
                        <tr>
                            <td><?= $t["product_name"] ?></td>
                            <td><?= $t["product_price"] ?></td>
                            <td><?= $t["quantity"] ?></td>
                            <td class="text-end"><?= $t["subtotal"] ?></td>
                        </tr>
                        <?php endforeach; ?>
                        <tr class="bg-primary">
                            <td colspan="3" class="text-white">TOTAL</td>
                            <td class="text-end text-white" ><?= $trx->total_price ?></td>
                        </tr>
                    </tbody>
                </table>
                <?php  if($trx->status == "WAITING_PAYMENT"): ?>
                    <a class="btn btn-primary" href="<?= base_url()?>admin/transaction/confirm/<?= $trx->id ?>">Confirm</a>
                <?php  elseif($trx->status == "WAITING_CONFIRMATION"): ?>
                    <a class="btn btn-primary" href="<?= base_url()?>admin/transaction/process/<?= $trx->id ?>">Process</a>
                <?php  elseif($trx->status == "ON_PROCESS"): ?>
                    <a class="btn btn-primary" href="<?= base_url()?>admin/transaction/deliver/<?= $trx->id ?>">Deliver</a>
                <?php  elseif($trx->status == "ON_DELIVERY"): ?>
                    <a class="btn btn-primary" href="<?= base_url()?>admin/transaction/complete/<?= $trx->id ?>">Complete</a>
                <?php endif; ?>
             
            </div>
        <div>
    </section>
    

</div>


<?php $this->load->view("admin/_partials/footer.php") ?>