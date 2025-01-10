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

        $totalProduct = count($this->product_model->getAll());
        $totalTransaction = count($this->transaction_model->getAll());
        $totalUser = count($this->User_model->getAll());



        $data['totalRevenueTransaction'] = $totalReveneuTransaction;
        $data['totalProduct'] = $totalProduct;
        $data['totalTransaction'] = $totalTransaction;
        $data['totalUser'] = $totalUser;
        $this->load->view('admin/dashboard/index', $data);
    }

}