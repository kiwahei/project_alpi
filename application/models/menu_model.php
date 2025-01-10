<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu_model extends CI_Model {

    // // Mendapatkan semua menu utama
    // public function get_menus() {
    //     $this->db->where('parent_id', NULL);
    //     return $this->db->get('menus')->result();
    // }

    public function get_menus() {
        // Ambil menu utama
        $this->db->select('id, url, Menu');
        $menus = $this->db->get('menu')->result();

        // Ambil submenus untuk setiap menu
        foreach ($menus as $menu) {
            $menu->submenus = $this->get_submenus($menu->id); // Ambil submenus berdasarkan menu_id
        }

        return $menus;
    }

    public function addSubMenu($data){
        $this->db->insert("sub_menu", $data);
    }

    public function deleteSubMenuByCategoryId($catId){
        $this->db->where('category_id', $catId);
        $this->db->delete('sub_menu');
    }

    private function get_submenus($menu_id) {
        // Ambil submenu berdasarkan menu_id
        $this->db->select('name, url'); // Pastikan kolom "name" ada di tabel
        $this->db->where('menu_id', $menu_id);
        return $this->db->get('sub_menu')->result();
    }

    // public function get_menus() {
    //     $this->db->select('id, url, menu'); // Sesuaikan dengan nama kolom pada tabel `menu`
    //     return $this->db->get('menu')->result(); // Ambil semua data dari tabel `menu`
    // }

    // // Mengambil data submenu berdasarkan menu_id dari tabel `sub_menu`
    // public function get_submenus($menu_id) {
    //     $this->db->select('url, name'); // Sesuaikan dengan nama kolom pada tabel `sub_menu`
    //     $this->db->where('menu_id', $menu_id); // Relasi dengan menu_id
    //     return $this->db->get('sub_menu')->result(); // Ambil data submenu berdasarkan menu_id
    // }


    // // Mendapatkan sub-menu berdasarkan menu_id
    // public function get_sub_menus($menu_id) {
    //     $this->db->where('status', 'active');
    //     $this->db->where('menu_id', $menu_id);
    //     return $this->db->get('sub_menus')->result();
    // }

//     public function get_menus_by_role($role_id) {
//         $this->db->select('menus.*');
//         $this->db->from('menus');
//         $this->db->join('user_access_menu', 'menus.id = user_access_menu.menu_id');
//         $this->db->where('user_access_menu.role_id', $role_id);
//         $this->db->where('menus.status', 'active');
//         $this->db->where('menus.parent_id', NULL);
//         $this->db->order_by('menus.id', 'ASC');
//         $menus = $this->db->get()->result();

//         // Ambil sub-menu untuk setiap menu
//         foreach ($menus as $menu) {
//             $menu->sub_menus = $this->get_sub_menus_by_menu($menu->id);
//         }

//         return $menus;
//     }

//     public function get_sub_menus_by_menu($menu_id) {
//         $this->db->select('id, name, url');
//         $this->db->from('sub_menus');
//         $this->db->where('menu_id', $menu_id);
//         $this->db->where('status', 'active');
//         $this->db->order_by('id', 'ASC');
//         return $this->db->get()->result();
//     }

//         // Mendapatkan menu publik (untuk semua pengguna)
//         public function get_public_menus() {
//             $this->db->select('*');
//             $this->db->from('menus');
//             $this->db->where('is_public', 1);
//             $this->db->where('status', 'active');
//             $this->db->where('parent_id', NULL);
//             $this->db->order_by('id', 'ASC');
//             $menus = $this->db->get()->result();
    
//             // Ambil sub-menu untuk setiap menu
//             foreach ($menus as $menu) {
//                 $menu->sub_menus = $this->get_sub_menus_by_menu($menu->id);
//             }
    
//             return $menus;
//         }



//     // Menambahkan menu baru
//     public function add_menu($data) {
//         return $this->db->insert('menus', $data);
//     }

//     // Menambahkan sub-menu baru
//     public function add_sub_menu($data) {
//         return $this->db->insert('sub_menus', $data);
//     }

//     // Update menu
//     public function update_menu($id, $data) {
//         return $this->db->where('id', $id)->update('menus', $data);
//     }

//     // Update sub-menu
//     public function update_sub_menu($id, $data) {
//         return $this->db->where('id', $id)->update('sub_menus', $data);
//     }

//     // Menghapus menu
//     public function delete_menu($id) {
//         return $this->db->where('id', $id)->delete('menus');
//     }

//     // Menghapus sub-menu
//     public function delete_sub_menu($id) {
//         return $this->db->where('id', $id)->delete('sub_menus');
//     }

//     public function register($data)
//     {
//          $this->db->insert('user',$data);
//     }

//     public function login($email)
//     {
//         $this->db->get_where('user', ['email' => $email])->row_array();
//     }
}
?>