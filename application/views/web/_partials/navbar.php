<header class="header d-flex align-items-center header-1 header-fixed">
    <div class="container">        
        <div class="row">
            <!--Logo-->
            <div class="logo col-5 col-sm-3 col-md-3 col-lg-2 align-self-center">
                <a class="logoImg" href="<?= base_url() ?>"><img src="<?= base_url() ?>assets/images/logo-white.png" alt="Hema Multipurpose Html Template" title="Hema Multipurpose Html Template" width="149" height="39"></a>
            </div>
            <!--End Logo-->
            <!--Menu-->
            <div class="col-1 col-sm-1 col-md-1 col-lg-8 align-self-center d-menu-col">
                <nav class="navigation" id="AccessibleNav">
                    <ul id="siteNav" class="site-nav medium center">
                    <?php if (!empty($menus)): ?>
                        <?php foreach ($menus as $menu): ?>
                        <li class="lvl1 parent dropdown">
                            <a href="<?= base_url($menu->url) ?>">   
                                <?= htmlspecialchars($menu->Menu) ?>
                                <?php if (!empty($menu->submenus)): ?>
                                    <i class="icon anm anm-angle-down-l"></i>
                                <?php endif; ?>
                            </a>    
                            <?php if (!empty($menu->submenus)): ?>
                            <ul class="dropdown">
                                <?php foreach ($menu->submenus as $sub_menu): ?>
                                <li>
                                    <a href="<?= base_url($sub_menu->url) ?>" class="site-nav lvl-2"><?= htmlspecialchars($sub_menu->name) ?></a>
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
            <!--End Menu-->
            <!--Right Icon-->
            <div class="col-7 col-sm-9 col-md-9 col-lg-2 align-self-center icons-col text-right">
                <!--Search-->
                <div class="search-parent iconset">
                    <div class="site-search" title="Search">
                        <a href="#;" class="search-icon clr-none" data-bs-toggle="offcanvas" data-bs-target="#search-drawer"><i class="hdr-icon icon anm anm-search-l"></i></a>
                    </div>
                    <div class="search-drawer offcanvas offcanvas-top" tabindex="-1" id="search-drawer">
                        <div class="container">
                            <div class="search-header d-flex-center justify-content-between mb-3">
                                <h3 class="title m-0">What are you looking for?</h3>
                                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                            </div>
                            <div class="search-body">
                                <form class="form minisearch" id="header-search" action="#" method="get">
                                    <!--Search Field-->
                                    <div class="d-flex searchField">
                                        <div class="input-box d-flex fl-1">
                                            <input type="text"  id="search-input"  class="input-text rounded-0 border-end-0" placeholder="Search for products..." value="">
                                            <button type="button" id="search-button" class="action search d-flex-justify-center btn rounded-start-0"><i class="icon anm anm-search-l"></i></button>
                                        </div>
                                    </div>
                                    <!--End Search Field-->
                                   
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Search-->
                <!--Account-->
                <div class="account-parent iconset">
                    <div class="account-link" title="Account"><i class="hdr-icon icon anm anm-user-al"></i></div>
                    <div id="accountBox">
                        <div class="customer-links">
                            <ul class="m-0">
                                <?php if(!$this->session->userdata("user_id")): ?>
                                <li><a href="<?= base_url("/auth/login") ?>"><i class="icon anm anm-sign-in-al"></i>Sign In</a></li>
                                <li><a href="<?= base_url("/auth/register") ?>"><i class="icon anm anm-user-al"></i>Register</a></li>
                                <?php else: ?>
                                <li><a href="<?= base_url("/profile") ?>"><i class="icon anm anm-user-cil"></i>My Account</a></li>
                                <li><a href="<?= base_url("/auth/logout") ?>"><i class="icon anm anm-sign-out-al"></i>Sign out</a></li>
                                <?php endif; ?>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--End Account-->
               
                <!--Minicart-->
                <div class="header-cart iconset" title="Cart">
                    <a href="<?= base_url("/cart") ?>" class="header-cart btn-minicart clr-none"><i class="hdr-icon icon anm anm-cart-l"></i></a>
                </div>
                <!--End Minicart-->
                <!--Mobile Toggle-->
                <button type="button" class="iconset pe-0 menu-icon js-mobile-nav-toggle mobile-nav--open d-lg-none" title="Menu"><i class="hdr-icon icon anm anm-times-l"></i><i class="hdr-icon icon anm anm-bars-r"></i></button>
                <!--End Mobile Toggle-->
            </div>
            <!--End Right Icon-->
        </div>
    </div>
</header>

<script>
    $(document).ready(function () {
        const base_url = "<?= base_url() ?>"
        $('#search-button').on('click', function (e) {
            e.preventDefault(); // Mencegah submit form default (jika ada)
            const keyword = $('#search-input').val().trim(); // Ambil nilai input
            if (keyword) {
                const url = base_url+`product/search/${encodeURIComponent(keyword)}`; // Encode keyword untuk URL
                window.location.href = url; // Redirect ke URL baru
            } else {
                alert('Please enter a search keyword!'); // Tampilkan pesan jika input kosong
            }
        });
    });
</script>