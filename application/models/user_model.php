<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
    }

    public function getAll(){
        $query = $this->db->query("SELECT * from user");
        return $query->result_array();
    }

    // Authenticate user by email and password
    public function authenticate($email, $password)
    {
        // Query the database for the user by email
        $this->db->where('email', $email);
        $this->db->where('is_active', 1); // Check if the user is active
        $query = $this->db->get('user');

        if ($query->num_rows() > 0) {
            $user = $query->row_array();

            // Verify the password with password_verify
            if (password_verify($password, $user['password'])) {
                return $user; // Return user data if authentication is successful
            }
        }
        return false; // Return false if authentication fails
    }

    public function changePassword($userId, $newPassword){
        $this->db->where('id_user', $userId);
        $this->db->update('user', array('password'=> password_hash($newPassword, PASSWORD_DEFAULT)));
    }

    public function edit($userId, $name, $email){
        $this->db->where('id_user', $userId);
        $this->db->update('user', array('name'=> $name,'email'=> $email));
    }

    public function getById($id){
        $this->db->where('id_user', $id);
        $query = $this->db->get('user');
        return $query->row();
    }

    // Create a new user
    public function create_user($data)
    {
        // Insert the new user into the database
        $this->db->insert('user', $data);
        return $this->db->insert_id(); // Return the ID of the newly created user
    }
    
}
