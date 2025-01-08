<div class="classic-topHeader">
    <!--Header-->
    <header class="header classicHeader d-flex align-items-center header-4 header-fixed">
    <div class="container-fluid">
        <div class="row">
            <!-- Menu -->
            <div class="col-1 col-sm-1 col-md-1 col-lg-5 align-self-center d-menu-col hdr-menu-left menu-position-left">
                <nav class="navigation" id="AccessibleNav">
                    <ul id="siteNav" class="site-nav medium left">
                        <?php if (!empty($menus)): ?>
                            <?php foreach ($menus as $menu): ?>
                                <li class="lvl1 parent dropdown">
                                    <a href="<?= base_url($menu->url) ?>">
                                        <?= htmlspecialchars($menu->Menu) ?>
                                        <?php if (!empty($menu->submenus)): ?>
                                            <i class="icon anm anm-angle-down-l"></i>
                                        <?php endif; ?>
                                    </a>

                                    <!-- Submenu -->
                                    <?php if (!empty($menu->submenus)): ?>
                                        <ul class="dropdown">
                                            <?php foreach ($menu->submenus as $sub_menu): ?>
                                                <li>
                                                    <a href="<?= base_url($sub_menu->url) ?>">
                                                        <?= htmlspecialchars($sub_menu->name) ?>
                                                    </a>
                                                </li>
                                            <?php endforeach; ?>
                                        </ul>
                                    <?php endif; ?>
                                </li>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <li><a href="#">No menu available</a></li>
                        <?php endif; ?>
                    </ul>
                </nav>
            </div>
            <!-- End Menu -->

            <!-- Logo -->
            <div class="logo col-4 col-sm-4 col-md-4 col-lg-2 align-self-center">
                <a class="logoImg" href="<?php echo site_url('home'); ?>">
                    <img class="mx-lg-auto default-logo" src="<?= base_url() ?>assets/images/logo-white.png"
                        alt="Hema Multipurpose Html Template" title="Hema Multipurpose Html Template"
                        width="149" height="39" />
                    <span class="logo-txt d-none">Hema</span>
                </a>
            </div>
            <!-- End Logo -->

            <!-- Right Icon -->
            <div class="col-8 col-sm-8 col-md-8 col-lg-5 align-self-center icons-col text-right">
                
    <!-- Cart -->
    <div class="account-parent iconset">
    <div class="account-link" title="Account">
        <a href="menu/pages/my_account/my-account.php">
            <i class="bi bi-cart" style="font-size: 1rem; color: white;"></i>
        </a>
    </div>
</div>


    <!-- Account (Duplicate Section for User Profile) -->
    <div class="account-parent iconset">
        <div class="account-link" title="Account">
            <i class="hdr-icon icon anm anm-user-al"></i>
        </div>
        <div id="accountBox">
            <div class="customer-links">
                <ul class="m-0">
                    <?php if ($this->session->userdata('user_id')): ?>
                        <li>
                            <a href="<?php echo site_url('profile'); ?>">
                                <i class="icon anm anm-user-cil"></i>My Account
                            </a>
                        </li>

                        <li>
                            <a href="<?php echo site_url('auth/logout'); ?>">
                                <i class="icon anm anm-sign-out-al"></i>Sign Out
                            </a>
                        </li>
                    <?php else: ?>
                        <li>
                            <a href="<?php echo site_url('auth/login'); ?>">
                                <i class="icon anm anm-sign-in-al"></i>Sign In
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo site_url('auth/register'); ?>">
                                <i class="icon anm anm-user-al"></i>Register
                            </a>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </div>

    <!-- Mobile Menu Toggle -->
    <button type="button" class="iconset pe-0 menu-icon js-mobile-nav-toggle mobile-nav--open d-lg-none" title="Menu">
        <i class="hdr-icon icon anm anm-times-l"></i>
        <i class="hdr-icon icon anm anm-bars-r"></i>
    </button>
</div>
        </div>
    </div>
</header>


    <!--End Header-->
</div>