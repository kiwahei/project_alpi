<?php $this->load->view("admin/_partials/head.php") ?>
<?php $this->load->view("admin/_partials/sidebar.php") ?>



<div id="main">
    <div class="page-heading">
        <div class="page-title">
            <h1>Completed Transaction</h1>
        <div>

    </div>
    <section class="section">
        <div class="card">
            <div class="card-header">
                <div class="row justify-content-between align-items-center">
                    <h5 class="card-title col-auto">
                        All Transaction
                    </h5>
                    <div class="col-auto d-flex align-items-center">
                        <div class="me-3">Export</div>
                        <a href="<?= base_url("admin/transaction/export/all") ?>" class="btn btn-primary">PDF</a>
                    </div>
                   
                </div>
                
            </div>
            <div class="card-body">
                <table class="table table-striped" id="transaction_table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Status</th>
                            <th class="text-end">Action</th>
                        <tr>
                    </thead>
                    <tbody>
                    <?php foreach ($trxs as $t): ?>
                        <tr>
                            <td><?= $t["id"] ?></td>
                            <td><?= $t["user"]->email ?></td>
                            <td><?= $t["status"] ?></td>
                            <td class="text-end">
                                <!-- <a href="<?= base_url() ?>admin/transaction/process/<?=  $t['id']?>" class="btn btn-success">Process</a> -->
                                <a href="<?= base_url() ?>admin/transaction/view/<?=  $t['id']?>" class="btn btn-primary">View</a>
                                <a href="<?= base_url() ?>admin/transaction/delete/" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
        <?php if ($this->session->flashdata('message')): ?>
            <p><?php echo $this->session->flashdata('message'); ?></p>
        <?php endif; ?>
    </section>
    

</div>

<script src="<?= base_url()?>assets/admin/extensions/simple-datatables/umd/simple-datatables.js"></script>

<script>
    let dataTable = new simpleDatatables.DataTable(
        document.getElementById("transaction_table")
    )
</script>


<?php $this->load->view("admin/_partials/footer.php") ?>