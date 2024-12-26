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
                <div class="row justify-content-between">
                    <h5 class="card-title col">
                        List
                    </h5>
                    <div class="col-auto">
                        <a href="<?= base_url()?>admin/Transaction/add"  class="btn btn-primary" >Add Transaction</a>
                    </div>
                </div>
                
            </div>
            <div class="card-body">
                    <table class="table table-striped" id="transaction_table">
                        <thead>
                            <tr>
                                <th>Name</th>
                            <tr>
                        </thead>
                        <tbody>
                        <?php foreach ($transactions as $t): ?>
                            <tr>
                                <td>Test</td>
                                <td>
                                    <a href="<?= base_url() ?>admin/transaction/edit/" class="btn btn-warning">Edit</a>
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

<script scr="<?= base_url()?>assets/admin/extensions/simple-datatables/umd/simple-datatables.js"></script>

<script>
    let dataTable = new simpleDatatables.DataTable(
        document.getElementById("transaction_table")
    )
</script>


<?php $this->load->view("admin/_partials/footer.php") ?>