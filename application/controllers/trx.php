<?php
class Trx extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('transaction_model');
        $this->load->model('transaction_item_model');
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
        $trxItems = $this->transaction_item_model->getAllByTransactionId($transaction_id);
        $data["trxItems"] = $trxItems;
        $transaction = $this->transaction_model->getById($transaction_id);
        $data["trx"] = $transaction;

        $products = [];
        foreach ($trxItems as $trxItem) {
            $product = $this->product_model->getById($trxItem["product_id"]);
            $product->quantity = $trxItem["quantity"];
            $products[] = $product;
        }

        $data["products"] = $products;

        // 1 waiting
        if($transaction->status == 1) {
            $this->load->view('web/trx/waiting', $data);
        }else{
            $this->load->view('web/trx/status', $data);
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
            $this->load->view('admin/category/add', $error);
        } else {
            // Jika sukses upload, ambil data file yang diupload
            $data = array('upload_data' => $this->upload->data());
            $this->transaction_model->uploadPaymentPhoto($transaction_id, $config['file_name']);
            $this->load->view('upload_success', $data);
        }
    }
}