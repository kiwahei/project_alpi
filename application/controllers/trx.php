<?php
class Trx extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('transaction_model');
        $this->load->model('transaction_item_model');
        $this->load->model('cart_model');
        $this->load->model('product_model');
        $this->load->model('courier_model');
        $this->load->model('payment_model');
    }
    public function checkout() {
        $user_id = $this->session->userdata('user_id');
        $note = $this->input->post('note');
        $shippingAddress = $this->input->post('shippingAddress');
        $courier_id = $this->input->post('courier');
        $payment_id = $this->input->post('payment');


        $carts = $this->cart_model->getAllByUserId($user_id);

        $transaction_items = [];

        $total = 0;

        foreach ($carts as $cart) {
            $product = $this->product_model->getById($cart["product_id"]);
            $subTotal =(int)$product->price * (int)$cart["quantity"];
            $transaction_items[] = [
                "product_id"=> $cart["product_id"],
                "product_price"=> $product->price,
                "quantity"=> $cart["quantity"],
                "subtotal" => $subTotal,
            ];

            $total += $subTotal;
        }

        
        $transaction = [
            'user_id' => $user_id,
            'note' => $note ,
            'shipping_address'=> $shippingAddress,
            'status' => "WAITING_PAYMENT", 
            "courier_id"=> $courier_id,
            "payment_id"=> $payment_id,
            'created_at' => date('Y-m-d H:i:s'),
            'total_price' => $total
        ];
      
        $insertId = $this->transaction_model->add($user_id, $transaction, $transaction_items);
        $this->cart_model->clear($user_id);
        redirect('trx/status/'. $insertId, );

        // $success = true;
        // if ($success) {
        //     $this->cart_model->deleteByUserId($user_id);
        //     $response = array(
        //         'status' => 'success',
        //         'redirect_url' => base_url('trx/status/'.$insertId) // URL tujuan
        //     );
        // } else {
        //     $response = array(
        //         'status' => 'error',
        //         'message' => 'Checkout failed, please try again.'
        //     );
        // }
       
    }
    public function status($transaction_id) {
        $user_id = $this->session->userdata('user_id');
        $trxItems = $this->transaction_item_model->getAllByTransactionId($transaction_id);
        $data["trxItems"] = $trxItems;
        $transaction = $this->transaction_model->getById($transaction_id);
        $data["trx"] = $transaction;
        $data["courier"] = $this->courier_model->getById($transaction->courier_id);
        $data["payment"] = $this->payment_model->getById($transaction->payment_id);

        $products = [];
        foreach ($trxItems as $trxItem) {
            $product = $this->product_model->getById($trxItem["product_id"]);
            $product->quantity = $trxItem["quantity"];
            $product->subtotal = $trxItem["subtotal"];
            $products[] = $product;
        }

        $data["products"] = $products;

        if($transaction->status == "WAITING_PAYMENT") {
            $this->load->view('web/trx/waiting-payment', $data);
        }elseif($transaction->status == "WAITING_CONFIRMATION"){
            $this->load->view('web/trx/waiting-confirmation', $data);
        }elseif($transaction->status == "ON_PROCESS") {
            $this->load->view('web/trx/on-process', $data);
        }elseif($transaction->status == "COMPLETE") {
            $this->load->view('web/trx/complete', $data);
        }

       
    }

    public function upload($transaction_id) {
        $config['upload_path'] = FCPATH.'/uploads/';  // Tentukan folder tujuan upload
        $config['allowed_types'] = 'jpg|jpeg|png|gif'; // Jenis file yang diperbolehkan
        $config['max_size'] = 2048;  // Maksimal ukuran file (dalam kilobytes)
        // $config['max_width'] = 1024; // Lebar maksimum gambar
        // $config['max_height'] = 768; // Tinggi maksimum gambar
        $config['file_name'] = time().$_FILES['image']['name'];  // Nama file unik berdasarkan timestamp

        // Memuat konfigurasi file upload
        $this->load->library('upload', $config);

        // Melakukan validasi file upload
        if (!$this->upload->do_upload('image')) {
            // Jika gagal upload, tampilkan pesan error
            $error = array('error' => $this->upload->display_errors());
            // $this->load->view('admin/category/add', $error);
        } else {
            // Jika sukses upload, ambil data file yang diupload
            $data = array('upload_data' => $this->upload->data());
            $this->transaction_model->uploadPaymentPhoto($transaction_id, $config['file_name']);
            // $this->load->view('upload_success', $data);
        }
        redirect(base_url('/trx/status/'.$transaction_id));
        
    }
}