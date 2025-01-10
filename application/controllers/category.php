<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller {

	 
	public function __construct() {
        parent::__construct();
        $this->load->model('menu_model');
        $this->load->model('category_model');
        $this->load->model('product_model');
	}

    public function index() {
        $categories = $this->category_model->getAll();
        $dataCategorylist = [];
        foreach($categories as $category){
            $products = $this->product_model->getByCategoryId($category['id']);
			$productSize = is_countable($products) ? count($products) : 0;
			$dataCategorylist[] = [
				"id" => $category['id'],
				"name"=> $category['name'],
				"image"=> $category['image'],
				"size"=> $productSize,
			];
		}

        $data['menus'] = $this->menu_model->get_menus();
        $data["categories"] = $dataCategorylist;
        $this->load->view("web/category/index", $data);
    }
    public function view($id) {
        $category = $this->category_model->getById($id);

        $products = $this->product_model->getByCategoryId($id);
       
        $data['menus'] = $this->menu_model->get_menus();
        $data["products"] = $products;
        $data["category"] = $category;
        $this->load->view("web/category/view", $data);
    }

}