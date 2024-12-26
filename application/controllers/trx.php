<?php
class Trx extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('transaction_model');
        $this->load->model('transactionItem_model');
        $this->load->model('cart_model');
        $this->load->model('product_model');
    }
    public function checkout() {
        $user_id = $this->session->userdata('user_id');
        $note = $this->input->post('note');


        $carts = $this->cart_model->getAllByUserId($user_id);

        $transaction_items = [];

        foreach ($carts as $cart) {
            $product = $this->product_model->getById($cart["product_id"]);
            
            $transaction_items[] = [
                "product_id"=> $cart["product_id"],
                "product_price"=> $product->price,
                "quantity"=> $cart["quantity"],
                "subtotal" => (int)$product->price * (int)$cart["quantity"],
            ];
            
        }

        
        $transaction = [
            'user_id' => $user_id,
            'note' => $note ,
            'status' => 1, 
            'created_at' => date('Y-m-d H:i:s'),
        ];
      
        $this->transaction_model->add($transaction, $transaction_items);
    }

    public function status($transaction_id) {
        $user_id = $this->session->userdata('user_id');
        $trxItems = $this->transactionItem_model->getAllByTransaksi($user_id);
        $data["trxItems"] = $trxItems;
        $transaction = $this->transaction_model->getById($transaction_id);
        $data["trx"] = $transaction;

        $this->load->view('web/trx/status', $data);
    }
}