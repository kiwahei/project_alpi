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
                    View Transaction
                </h5>
                </div>
             
            </div>
            <div class="card-body">
                <ol class="list-group mb-3">
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                        <div class="ms-2 me-auto">
                        <div class="fw-bold">Transaction ID</div>
                            <?= $trx->id ?>
                        </div>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                        <div class="ms-2 me-auto">
                        <div class="fw-bold">Created at</div>
                            <?= $trx->created_at ?>
                        </div>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                        <div class="ms-2 me-auto">
                        <div class="fw-bold">Courier</div>
                            <?=  $courier->name ?>
                        </div>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                        <div class="ms-2 me-auto">
                        <div class="fw-bold">Payment</div>
                            <?=  $payment->name ?>
                        </div>
                    </li>
                </ol>

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
                            <td>Rp. <?= $t["product_price"] ?></td>
                            <td><?= $t["quantity"] ?></td>
                            <td class="text-end">Rp. <?= $t["subtotal"] ?></td>
                        </tr>
                        <?php endforeach; ?>
                        <tr class="bg-primary">
                            <td colspan="3" class="text-white">TOTAL</td>
                            <td class="text-end text-white" >Rp. <?= number_format($trx->total_price, 0, ',', '.') ?></td>
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