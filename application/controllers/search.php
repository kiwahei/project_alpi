<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search extends CI_Controller {
    // Menggunakan Database
    public function __construct() {
        parent::__construct();
        $this->load->model('menu_model');
        $this->load->model('product_model');
        $this->load->model('category_model');
	}

    public function index($keyword){
	
	}

}