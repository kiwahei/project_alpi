<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	 
	public function __construct() {
        parent::__construct();
        if(!$this->session->userdata("admin_id")){
            redirect(base_url("/admin/auth/login"));
        }
        $this->load->model('menu_model');
        $this->load->model('User_model');
        $this->load->model('product_model');
        $this->load->model('product_model');
        $this->load->model('transaction_model');
	}

    public function index(){
        $transactions = $this->transaction_model->getAll();
        $totalReveneuTransaction = 0;
        foreach($transactions as $transaction){
            $totalReveneuTransaction += $transaction["total_price"];
        }
        $products = $this->product_model->getAll();
        $users = $this->User_model->getAll();
        $totalProduct = is_countable($products) ? count($products) : 0;;
        $totalTransaction = is_countable($transactions) ? count($transactions) : 0;;
        $totalUser = is_countable($users) ? count($users) : 0;



        $data['totalRevenueTransaction'] = $totalReveneuTransaction;
        $data['totalProduct'] = $totalProduct;
        $data['totalTransaction'] = $totalTransaction;
        $data['totalUser'] = $totalUser;
        $this->load->view('admin/dashboard/index', $data);
    }

}