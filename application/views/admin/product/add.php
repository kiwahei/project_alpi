<?php $this->load->view("admin/_partials/head.php") ?>
<?php $this->load->view("admin/_partials/sidebar.php") ?>

<div id="main">
    <div class="page-heading">
        <div class="page-title">
            <h1>Add Product</h1>
        <div>

    </div>
    <section class="section">
        <div class="card">
            <div class="card-header">
                <div>
                <h5 class="card-title col">
                    New Product
                </h5>
                </div>
             
            </div>
            <div class="card-body">
                <form method="POST" action="<?= base_url()?>admin/product/store" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Insert Categori Name">
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <input type="text" class="form-control" id="description" name="description" placeholder="Insert Categori Description">
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Price</label>
                        <input type="number" class="form-control" id="price" name="price" placeholder="Insert Product Price">
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Category</label>
                        <select name="category" class="form-select">
                            <option value="" selected disabled>- SELECT -</option>
                            <?php foreach($categories as $category): ?>
                                <option value="<?=$category['id'] ?>"><?= $category['name']?></option>
                                
                            <?php endforeach ?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Photo</label>
                        <input type="file" class="form-control" id="img" name="image" placeholder="insert product price">
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