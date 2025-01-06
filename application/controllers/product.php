<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {
    // Menggunakan Database
    public function __construct() {
        parent::__construct();
        $this->load->model('menu_model');
        $this->load->model('product_model');
	}
	
	public function index()
	{
		$menus = $this->menu_model->get_menus();
		$data['menus'] = $menus;
		$this->load->view('menu/product/index', $data);
	}

	public function view($id){
		$product = $this->product_model->getById($id);
		$menus = $this->menu_model->get_menus();
		$data['menus'] = $menus;
		$data['product'] = $product;
		$this->load->view('web/product/single', $data);
	}
    
}