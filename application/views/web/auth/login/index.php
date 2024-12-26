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
                    <div class="page-title"><h1>Login</h1></div>
                    <!--Breadcrumbs-->
                    <div class="breadcrumbs"><a href="<?php echo site_url('home'); ?>" title="Back to the home page">Home</a><span class="title"><i class="icon anm anm-angle-right-l"></i></span><span class="main-title fw-bold"></i>Login</span></div>
                    <!--End Breadcrumbs-->
                </div>
            </div>
        </div>
    </div>
    <!--End Page Header-->

    <!--Main Content-->
    <div class="container">
        <div class="login-register pt-4">
            <div class="row justify-content-center">
                <div class="col-12 col-md-8 col-lg-6">
                    <div class="card shadow-sm border-0">
                        <div class="card-body p-4">
                            <!-- Form Open -->
                            <?php echo form_open('auth/login', ['class' => 'customer-form']); ?>
                            
                            <h2 class="text-center fs-4 mb-3">LOGIN</h2>
                            <p class="text-center mb-4">If you have an account with us, please log in.</p>

                            <!-- Display error message if login fails -->
                            <?php if ($this->session->flashdata('error')): ?>
                                <div class="alert alert-danger">
                                    <?php echo $this->session->flashdata('error'); ?>
                                </div>
                            <?php endif; ?>

                            <!-- Form fields -->
                            <div class="form-group mb-3">
                                <label for="CustomerEmail" class="form-label">Email <span class="required text-danger">*</span></label>
                                <input 
                                    type="email" 
                                    name="email" 
                                    placeholder="Enter your email" 
                                    id="CustomerEmail" 
                                    value="<?php echo set_value('email'); ?>" 
                                    required 
                                    class="form-control" 
                                />
                                <?php echo form_error('email', '<div class="text-danger small mt-1">', '</div>'); ?>
                            </div>

                            <div class="form-group mb-3">
                                <label for="CustomerPassword" class="form-label">Password <span class="required text-danger">*</span></label>
                                <input 
                                    type="password" 
                                    name="password" 
                                    placeholder="Enter your password" 
                                    id="CustomerPassword" 
                                    required 
                                    class="form-control" 
                                />
                                <?php echo form_error('password', '<div class="text-danger small mt-1">', '</div>'); ?>
                            </div>

                            <div class="form-group">
                                <input 
                                    type="submit" 
                                    class="btn btn-primary btn-lg w-100" 
                                    value="Sign In" 
                                />
                            </div>

                            <!-- Additional Links -->
                            <div class="text-center mt-4">
                                <p class="text-muted mb-0">
                                    Don't have an account? 
                                    <a href="<?php echo site_url('auth/register'); ?>" class="btn-link">Register Now</a>
                                </p>
                            </div>

                            <?php echo form_close(); ?>
                            <!-- Form Close -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>





<?php $this->load->view("web/_partials/cart.php") ?>
<?php $this->load->view("web/_partials/footer.php") ?>
<?php $this->load->view("web/_partials/foot.php") ?>


