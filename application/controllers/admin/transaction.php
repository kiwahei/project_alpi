<?php

class Transaction extends CI_Controller
{

    public function __construct() {
        parent::__construct();
        $this->load->model('transaction_model');
        $this->load->model('transaction_item_model');
        $this->load->model('product_model');
        $this->load->model('user_model');
        $this->load->library(['form_validation', 'session']);
	}

    function index(){
        $trxs = $this->transaction_model->getAll();
        $confirm_trxs =  $this->transaction_model->getAllByStatus("WAITING_CONFIRMATION");
        $on_process_trxs =  $this->transaction_model->getAllByStatus("ON_PROCESS");
        $on_delivery_trxs =  $this->transaction_model->getAllByStatus("ON_DELIVERY");
        for($x = 0; $x < count($trxs); $x++){
            $user = $this->user_model->getById($trxs[$x]["user_id"]); 
            $trxs[$x]["user"] = $user;
        }

        for($x = 0; $x < count($confirm_trxs); $x++){
            $user = $this->user_model->getById($confirm_trxs[$x]["user_id"]); 
            $confirm_trxs[$x]["user"] = $user;
        }
      
        for($x = 0; $x < count($on_process_trxs); $x++){
            $user = $this->user_model->getById($on_process_trxs[$x]["user_id"]); 
            $on_process_trxs[$x]["user"] = $user;
        }
       
        for($x = 0; $x < count($on_delivery_trxs); $x++){
            $user = $this->user_model->getById($on_delivery_trxs[$x]["user_id"]); 
            $on_delivery_trxs[$x]["user"] = $user;
        }
        
        $data["trxs"] = $trxs;
        $data["confirm_trxs"] = $confirm_trxs;
        $data["on_process_trxs"] = $on_process_trxs;
        $data["on_delivery_trxs"] = $on_delivery_trxs;
        $this->load->view('admin/transaction/index', $data);
    }

    function all(){
        $trxs = $this->transaction_model->getAll();
        for($x = 0; $x < count($trxs); $x++){
            $user = $this->user_model->getById($trxs[$x]["user_id"]); 
            $trxs[$x]["user"] = $user;
        }

        $data["trxs"] = $trxs;
    
        $this->load->view('admin/transaction/index-all', $data);
    }

    function completed(){
     
        $completed_trxs =  $this->transaction_model->getAllByStatus("COMPLETED");
    
        for($x = 0; $x < count($completed_trxs); $x++){
            $user = $this->user_model->getById($completed_trxs[$x]["user_id"]); 
            $completed_trxs[$x]["user"] = $user;
        }
        $data["completed_trxs"] = $completed_trxs;
        $this->load->view('admin/transaction/index-completed', $data);
    }

    function canceled(){
     
        $canceled_trxs =  $this->transaction_model->getAllByStatus("CANCELED");
    
        for($x = 0; $x < count($canceled_trxs); $x++){
            $user = $this->user_model->getById($canceled_trxs[$x]["user_id"]); 
            $canceled_trxs[$x]["user"] = $user;
        }
        $data["canceled_trxs"] = $canceled_trxs;
        $this->load->view('admin/transaction/index-canceled', $data);
    }



    function view($trxId){
        $trx = $this->transaction_model->getById($trxId);
        $trxs = $this->transaction_item_model->getAllByTransactionId($trxId);

        $transaction_items = [];

        foreach ($trxs as $t) {
            $product = $this->product_model->getById($t["product_id"]);
            
            $transaction_items[] = [
                "product_name"=> $product->name,
                "product_id"=> $t["product_id"],
                "product_price"=> $product->price,
                "quantity"=> $t["quantity"],
                "subtotal" => (int)$product->price * (int)$t["quantity"],
            ];
            
        }

        $data['trx'] = $trx;
        $data['trxs'] = $transaction_items;
        $this->load->view('admin/transaction/view', $data);
        
    }

    function process($trxId){
        $this->transaction_model->process($trxId);
        redirect('admin/transaction');
    }
    function confirm($trxId){
        $this->transaction_model->confirm($trxId);
        redirect('admin/transaction');
    }


    function deliver($trxId){
        $this->transaction_model->deliver($trxId);
        redirect('admin/transaction');
    }

    function complete($trxId){
        $this->transaction_model->complete($trxId);
        redirect('admin/transaction');
    }

    function add(){
        $this->load->view('admin/product/add');
    }

    function edit($id){
        $data['product'] = $this->product_model->getById($id);
        $this->load->view('admin/product/edit', $data);
    }
    


    function store(){
        $customer_id = $this->input->post('name');
        $description= $this->input->post('description');
        $price = $this->input->post('price');

        $data = [
            'name' => $name,
            'description' => $description,
            'price' => $price, 
            'created_at' => date('Y-m-d H:i:s'),
        ];

        $this->product_model->add($data);
        $this->session->set_flashdata('message', 'Data berhasil disimpan!');
        redirect('admin/product');
    }

    function update($id = null){
        $customer_id = $this->input->post('name');
        $description= $this->input->post('description');
        $price = $this->input->post('price');

        $data = [
            'name' => $name,
            'description' => $description,
            'price' => $price, 
        ];

        
        $this->product_model->update($id, $data);
        $this->session->set_flashdata('message', 'Data berhasil diedit!');
        redirect('admin/product');
    }


    function delete($id){
        $this->product_model->delete($id);
        $this->session->set_flashdata('message', 'Data berhasil didelete!');
        redirect('admin/product');

    }
    
}
