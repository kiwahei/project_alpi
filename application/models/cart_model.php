<?php

class Cart_Model extends CI_Model {

    private $table = "cart";

    public function __construct() {
        parent::__construct();
        $this->load->model('product_model'); // Untuk mengambil data produk
    }

    public function getAllByUserId($user_id) {
        $carts = $this->db->get_where($this->table, array('user_id' => $user_id));
        $cartArray = $carts->result_array();
        foreach ($cartArray as &$item) {
            $product = $this->product_model->getById($item['product_id']);
            $item['product_name'] = $product ? $product->name : 'Unknown';
            $item['product_price'] = $product ? $product->price : '0';
            $item['product_image'] = $product ? $product->image : 'empty';
        }
        return $cartArray; 
    
    }

    public function deleteByUserId($userId){
        $this->db->where('user_id', $userId);
        return $this->db->delete($this->table); 
    }

    public function add_to_cart_single($product_id, $user_id) {
        // Ambil detail produk dari database
        $this->db->where('user_id', $user_id);
        $this->db->where('product_id', $product_id);
        $query = $this->db->get('cart');

        if ($query->num_rows() > 0) {
            // Jika ada, update quantity
            $this->db->set('quantity', 'quantity + ' . (int)1, FALSE);
            $this->db->where('user_id', $user_id);
            $this->db->where('product_id', $product_id);
            return $this->db->update('cart');
        } else {
            // Jika tidak ada, insert item baru
            $data = [
                'user_id' => $user_id,
                'product_id' => $product_id,
                'quantity' => "1"
            ];
            return $this->db->insert('cart', $data);
        }
    }

    // Menambah item ke dalam cart
    public function add_to_cart($product_id, $quantity) {
        // Ambil detail produk dari database
        $product = $this->produk_model->get_product_by_id($product_id);

        if (!$product) {
            return 'Produk tidak ditemukan';
        }

        // Ambil cart dari session
        $cart = $this->session->userdata('cart');
        if (!$cart) {
            $cart = [];
        }

        // Cek apakah produk sudah ada dalam cart
        $found = false;
        foreach ($cart as &$item) {
            if ($item['product_id'] == $product_id) {
                // Jika sudah ada, update quantity
                $item['quantity'] += $quantity;
                $found = true;
                break;
            }
        }

        // Jika produk belum ada, tambahkan ke cart
        if (!$found) {
            $cart[] = [
                'product_id' => $product_id,
                'product_name' => $product->product_name,
                'price' => $product->price,
                'quantity' => $quantity
            ];
        }

        // Simpan kembali cart ke session
        $this->session->set_userdata('cart', $cart);
        return 'Produk berhasil ditambahkan ke keranjang';
    }

    // Menghapus item dari cart
    public function remove_from_cart($cart_id) {
        return $this->db->where('id', $cart_id)->delete('cart');
    }

    // Mengupdate quantity produk dalam cart
    public function update_cart($product_id, $quantity) {
        // Ambil cart dari session
        $cart = $this->session->userdata('cart');

        if (!$cart) {
            return 'Keranjang kosong';
        }

        // Cari produk dan update quantity
        foreach ($cart as &$item) {
            if ($item['product_id'] == $product_id) {
                if ($quantity <= 0) {
                    $this->remove_from_cart($product_id);
                    return 'Produk dihapus dari keranjang';
                }
                $item['quantity'] = $quantity;
                break;
            }
        }

        // Simpan cart yang telah diperbarui ke session
        $this->session->set_userdata('cart', $cart);
        return 'Keranjang berhasil diperbarui';
    }

    
    public function updateQuantity($cartId, $quantity) {
        $this->db->where('id', $cartId);
        return $this->db->update('cart', ['quantity' => $quantity]);
    
    }



    // Mengambil semua item dalam cart
    public function get_cart_items() {
        return $this->session->userdata('cart');
    }

    // Menghitung total harga dalam cart
    public function get_cart_total() {
        $cart = $this->session->userdata('cart');
        $total = 0;
        if ($cart) {
            foreach ($cart as $item) {
                $total += $item['price'] * $item['quantity'];
            }
        }
        return $total;
    }

    public function clear($user_id) {
        $this->db->where('user_id', $user_id);
        return $this->db->delete('cart');
    }
}