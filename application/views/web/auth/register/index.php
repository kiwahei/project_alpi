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
                    <div class="page-title"><h1>Register</h1></div>
                    <!--Breadcrumbs-->
                    <div class="breadcrumbs"><a href="<?php echo site_url('home'); ?>" title="Back to the home page">Home</a><span class="title"><i class="icon anm anm-angle-right-l"></i></span><span class="main-title fw-bold"></i>Register</span></div>
                    <!--End Breadcrumbs-->
                </div>
            </div>
        </div>
    </div>
    <div class="login-register pt-2">
        <div class="row">
            <div class="col-md-8 offset-md-2 col-lg-6 offset-lg-3">
                <form method="post" action="<?php echo site_url('auth/register'); ?>">
                    <h2 class="text-center fs-4 mb-3">REGISTER</h2>

                    <!-- Display validation errors -->
                    <?php echo validation_errors('<p class="alert alert-danger">', '</p>'); ?>

                    <!-- Flash messages -->
                    <?php if ($this->session->flashdata('success')): ?>
                        <p class="alert alert-success"><?php echo $this->session->flashdata('success'); ?></p>
                    <?php endif; ?>
                    <?php if ($this->session->flashdata('error')): ?>
                        <p class="alert alert-danger"><?php echo $this->session->flashdata('error'); ?></p>
                    <?php endif; ?>

                    <!-- Email field -->
                    <div class="form-group">
                        <label for="email" class="form-label">Email <span class="required text-danger">*</span></label>
                        <input 
                            type="email" 
                            id="email" 
                            name="email" 
                            class="form-control" 
                            placeholder="Enter your email" 
                            value="<?php echo set_value('email'); ?>" 
                            required>
                    </div>

                    <!-- Password field -->
                    <div class="form-group">
                        <label for="password" class="form-label">Password <span class="required text-danger">*</span></label>
                        <input 
                            type="password" 
                            id="password" 
                            name="password" 
                            class="form-control" 
                            placeholder="Enter your password" 
                            required>
                    </div>

                    <!-- Confirm Password field -->
                    <div class="form-group">
                        <label for="confirm_password" class="form-label">Confirm Password <span class="required text-danger">*</span></label>
                        <input 
                            type="password" 
                            id="confirm_password" 
                            name="confirm_password" 
                            class="form-control" 
                            placeholder="Confirm your password" 
                            required>
                    </div>

                    <!-- Submit button -->
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-lg w-100">Sign Up</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

            

            



<?php $this->load->view("web/_partials/cart.php") ?>
<?php $this->load->view("web/_partials/footer.php") ?>
<?php $this->load->view("web/_partials/foot.php") ?>
