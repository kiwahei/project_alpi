<?php $this->load->view("admin/_partials/head.php") ?>
<?php $this->load->view("admin/_partials/sidebar.php") ?>

<div id="main">
    <div class="page-heading">
        <div class="page-title">
            <h1>Add Courier</h1>
        <div>

    </div>
    <section class="section">
        <div class="card">
            <div class="card-header">
                <div>
                <h5 class="card-title col">
                    New Courier
                </h5>
                </div>
             
            </div>
            <div class="card-body">
                <!-- Menampilkan error jika ada -->
                <?php if (isset($error)): ?>
                    <div style="color: red;"><?php echo $error; ?></div>
                <?php endif; ?>
                <form method="POST" enctype="multipart/form-data" action="<?= base_url()?>admin/courier/store">
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Fufufafa">
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <input type="text" class="form-control" id="description" name="description" placeholder="insert product description">
                    </div>
                  
        
                    <div>
                        <button class="btn btn-primary" type="submit">Save</button>
                    </div>
                </form>
                
            </div>
        <div>
    </section>
    

</div>


<?php $this->load->view("admin/_partials/footer.php") ?>