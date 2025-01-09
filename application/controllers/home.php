<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	 
	public function __construct() {
        parent::__construct();
        $this->load->model('menu_model');
        $this->load->model('category_model');
        $this->load->model('product_model');
	}

    public function index() {
        $data['menus'] = $this->menu_model->get_menus();
        $data['categories'] = $this->category_model->getAll();
        $data['products'] = $this->product_model->getAllForHome();
        $this->load->view('web/home/index', $data);
    }
}