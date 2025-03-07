<?php $this->load->view("admin/_partials/head.php") ?>
<?php $this->load->view("admin/_partials/sidebar.php") ?>

<div id="main">
    <div class="page-heading">
        <div class="page-title">
            <h1>Edit Product</h1>
        <div>

    </div>
    <section class="section">
        <div class="card">
            <div class="card-header">
                <div>
                <h5 class="card-title col">
                    
                </h5>
                </div>
             
            </div>
            <div class="card-body">
                <form method="POST" action="<?= base_url()?>admin/product/update/<?= $product->id ?>" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Fufufafa" value="<?= $product->name ?>">
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <input type="text" class="form-control" id="description" name="description" placeholder="insert product description"  value="<?= $product->description ?>">
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Price</label>
                        <input type="number" class="form-control" id="price" name="price" placeholder="insert product price"  value="<?= $product->price ?>">
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Category</label>
                        <select name="category" class="form-select">
                            <option value="" disabled>- SELECT -</option>
                            <?php foreach($categories as $category): ?>
                                <option value="<?=$category['id'] ?>" <?php if($product->category_id == $category['id'] ):?> selected <?php endif;?> ><?= $category['name']?></option>
                                
                            <?php endforeach ?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Photo</label>
                        <img src="<?= base_url("uploads/product/").$product->image ?>" alt="" class="d-block">
                        <input type="file" class="form-control" id="price" name="image" placeholder="insert product price">
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