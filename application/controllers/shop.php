<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Shop extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */


    
    // Menggunakan Database
    public function __construct() {
        parent::__construct();
        $this->load->model('mdl_home');
	}
	
	public function index()
	{
		$menus = $this->mdl_home->get_menus();
		$data['menus'] = $menus;
		// print_r($data['menus']); die;
		$this->load->view('menu/home/index', $data);
	}
	


    

    // Static
	## COLLECTION PAGE
	
	public function collection_style1() {
        $this->load->view('menu/shop/collection_page/collection-style1.html');
    }

	public function collection_style2() {
        $this->load->view('menu/shop/collection_page/collection-style2.html');
    }

	public function collection_style3() {
        $this->load->view('menu/shop/collection_page/collection-style3.html');
    }

	public function collection_style4() {
        $this->load->view('menu/shop/collection_page/collection-style4.html');
    }

	public function sub_collection_style1() {
        $this->load->view('menu/shop/collection_page/sub-collection-style1.html');
    }

	public function sub_collection_style2() {
        $this->load->view('menu/shop/collection_page/sub-collection-style2');
    }

	public function collection_empty() {
        $this->load->view('menu/shop/collection_page/collection-empty.html');
    }

	public function shop_search_results() {
        $this->load->view('menu/shop/collection_page/shop-search-results.html');
    }

	public function shop_swatches_style() {
        $this->load->view('menu/shop/collection_page/shop-swatches-style.html');
    }


	## SHOP PAGE

	public function shop_grid_view() {
        $this->load->view('menu/shop/shop_page/shop-grid-view.html');
    }

	public function shop_list_view() {
        $this->load->view('menu/shop/shop_page/shop-list-view.html');
    }

	public function shop_masonry_grid() {
        $this->load->view('menu/shop/shop_page/shop-masonry-grid.html');
    }

	public function shop_left_sidebar() {
        $this->load->view('menu/shop/shop_page/shop-left-sidebar.html');
    }

	public function shop_right_sidebar() {
        $this->load->view('menu/shop/shop_page/shop-right-sidebar.html');
    }

	public function shop_top_filter() {
        $this->load->view('menu/shop/shop_page/shop-top-filter.html');
    }

	public function shop_with_category() {
        $this->load->view('menu/shop/shop_page/shop-with-category.html');
    }


	## SHOP OTHER PAGE
	
	public function cart_style1() {
        $this->load->view('menu/shop/shop_other_page/cart-style1.html');
    }

	public function cart_style2() {
        $this->load->view('menu/shop/shop_other_page/cart-style2.html');
    }

	public function checkout_style1() {
        $this->load->view('menu/shop/shop_other_page/checkout-style1.html');
    }

	public function checkout_style2() {
        $this->load->view('menu/shop/shop_other_page/checkout-style2.html');
    }

	public function compare_style1() {
        $this->load->view('menu/shop/shop_other_page/compare-style1.html');
    }

	public function compare_style2() {
        $this->load->view('menu/shop/shop_other_page/compare-style2.html');
    }

	public function order_success() {
        $this->load->view('menu/shop/shop_other_page/order-success.html');
    }

	public function wishlist_style1() {
        $this->load->view('menu/shop/shop_other_page/wishlist-style1.html');
    }

	public function wishlist_style2() {
        $this->load->view('menu/shop/shop_other_page/wishlist-style2.html');
    }
}
