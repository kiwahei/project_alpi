<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {

    // Table name
    private $table = 'admin';

    public function __construct() {
        parent::__construct();
    }

    // Method to fetch all admins
    public function get_all_admins() {
        $query = $this->db->get($this->table);
        return $query->result_array();
    }

    // Method to get admin by ID
    public function get_admin_by_id($id) {
        $query = $this->db->get_where($this->table, array('id' => $id));
        return $query->row_array();
    }

    // Method to insert a new admin
    public function insert_admin($data) {
        return $this->db->insert($this->table, $data);
    }

    // Method to update admin information
    public function update_admin($id, $data) {
        $this->db->where('id', $id);
        return $this->db->update($this->table, $data);
    }

    // Method to delete an admin
    public function delete_admin($id) {
        $this->db->where('id', $id);
        return $this->db->delete($this->table);
    }

    // Method to check if an email exists
    public function email_exists($email) {
        $query = $this->db->get_where($this->table, array('email' => $email));
        return $query->num_rows() > 0;
    }

    // Method to get admins based on role
    public function get_admins_by_role($role_id) {
        $query = $this->db->get_where($this->table, array('role_id' => $role_id));
        return $query->result_array();
    }

    // Method to get admin by email (used for login)
    public function get_admin_by_email($email) {
        $query = $this->db->get_where($this->table, array('email' => $email));
        return $query->row_array();
    }

    // Method to check the password (used for login)
    public function verify_password($email, $password) {
        $admin = $this->get_admin_by_email($email);
        if ($admin) {
            // Verify password using password_verify function
            return password_verify($password, $admin['password']);
        }
        return false;
    }
}
