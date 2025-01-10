<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {
    // Menggunakan Database
    public function __construct() {
        parent::__construct();
        $this->load->model('menu_model');
        $this->load->model('product_model');
        $this->load->model('category_model');
	}
	

	public function view($id){
		$product = $this->product_model->getById($id);
		$menus = $this->menu_model->get_menus();
		$data['menus'] = $menus;
		$data['product'] = $product;
		$data['product']->price = $currency = number_format($product->price, 0, ',', '.'); 
		$this->load->view('web/product/single', $data);
	}

	public function index(){
		$products = $this->product_model->getAll();
		$categories = $this->category_model->getAll();
		$menus = $this->menu_model->get_menus();
		$data['menus'] = $menus;
		$dataCategorylist = [];
		$datalist = [];
		
		foreach($categories as $category){
			$productsByCat = $this->product_model->getByCategoryId($category['id']);
			$productSize = is_countable($productsByCat) ? count($productsByCat) :0;
			$dataCategorylist[] = [
				"id" => $category['id'],
				"name"=> $category['name'],
				"image"=> $category['image'],
				"size"=> $productSize,
			];
		}
		foreach($products as $product){
			$category = $this->category_model->getById($product['category_id']);
			$datalist[] = [
				"id" => $product["id"],
				"name"=> $product["name"],
				"image"=> $product["image"],
				"price"=> $product["price"],
				"category"=> $category->name,
			];
		}

		$data["products"] = $datalist;
		$data["categories"] = $dataCategorylist;

		$this->load->view('web/product/index', $data);
	}

	public function search($keyword){
		$products = $this->product_model->search($keyword);
		$menus = $this->menu_model->get_menus();
		$data['menus'] = $menus;
		$datalist = [];
		
	
		foreach($products as $product){
			$category = $this->category_model->getById($product['category_id']);
			$datalist[] = [
				"id" => $product["id"],
				"name"=> $product["name"],
				"image"=> $product["image"],
				"price"=> $product["price"],
				"category"=> $category->name,
			];
		}

		$data["products"] = $datalist;
		$data["keyword"] = $keyword;

		$this->load->view('web/product/search', $data);
	}
    
}