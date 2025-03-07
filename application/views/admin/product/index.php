<?php $this->load->view("admin/_partials/head.php") ?>
<?php $this->load->view("admin/_partials/sidebar.php") ?>



<div id="main">
    <div class="page-heading">
        <div class="page-title">
            <h1>Product</h1>
        <div>

    </div>
    <section class="section">
        <div class="card">
            <div class="card-header">
                <div class="row justify-content-between">
                    <h5 class="card-title col">
                        List
                    </h5>
                    <div class="col-auto d-flex align-items-center">
                        <div class="me-1">Export</div>
                        <a href="<?= base_url()?>admin/product/export"  class="btn btn-primary" >PDF</a>
                        <div style="border-left:1px solid #000;height:100%;" class="mx-2"></div>
                        <a href="<?= base_url()?>admin/product/add"  class="btn btn-primary" >+ Add Product</a>
                    </div>
                </div>
                
            </div>
            <div class="card-body">
                <table class="table table-striped" id="product_table">
                    <thead>
                        <tr>
                            <th>Name</th>
                        <tr>
                    </thead>
                    <tbody>
                    <?php foreach ($products as $p): ?>
                        <tr>
                            <td><?php echo $p['name']; ?></td>
                            <td class="d-flex">
                                <a href="<?= base_url() ?>admin/product/edit/<?= $p["id"] ?> " class="btn btn-warning me-2">Edit</a>
                                <a href="<?= base_url() ?>admin/product/delete/<?= $p["id"] ?> " class="btn btn-danger">Delete</a>
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
        document.getElementById("product_table")
    )
</script>




<?php $this->load->view("admin/_partials/footer.php") ?>