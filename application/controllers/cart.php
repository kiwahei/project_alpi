<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Cart extends CI_Controller {

	 
	public function __construct() {
        parent::__construct();
        $this->load->model('menu_model');
        $this->load->model('category_model');
        $this->load->model('cart_model');
        $this->load->model('product_model');
        $this->load->model('courier_model');
        $this->load->model('payment_model');
	}

    public function index() {
        $user_id = $this->session->userdata('user_id');
        $data['menus'] = $this->menu_model->get_menus();
        $data['categories'] = $this->category_model->getAll();
        $data['couriers'] = $this->courier_model->getAll();
        $data['payments'] = $this->payment_model->getAll();
        $data['carts'] = $this->cart_model->getAllByUserId($user_id);
    
        $this->load->view('web/cart/index', $data);
    }

    public function add_single($product_id)
    {
        $user_id = $this->session->userdata('user_id');
        $this->cart_model->add_to_cart_single($product_id, $user_id);
       
    }

    // Mengambil semua item dari keranjang
    public function get_cart($user_id)
    {
        $this->db->select('ci.id, p.name as product_name, p.price, ci.quantity');
        $this->db->from('cart_items ci');
        $this->db->join('products p', 'ci.product_id = p.id');
        $this->db->where('ci.user_id', $user_id);
        $query = $this->db->get();
        return $query->result();
    }

    // Menghapus item dari keranjang
    public function remove($cart_id)
    {
        $this->cart_model->remove_from_cart($cart_id);
        $this->session->set_flashdata('message', 'Data berhasil dihapus!');
        redirect('cart');
    }

    // Menghapus semua item di keranjang (misalnya saat checkout)
    public function clear()
    {
        $user_id = $this->session->userdata('user_id');
        $this->cart_model->clear($user_id);
        $this->session->set_flashdata('message', 'Data berhasil dihapus!');
        redirect('cart');
    }

    public function updateQuantity(){
        $quantity = $this->input->post('quantity');
        $cartId = $this->input->post('cartId');
        $this->cart_model->updateQuantity($cartId, $quantity);
    }
}