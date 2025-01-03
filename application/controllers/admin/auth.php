<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Admin_model'); // Load the Admin model
        $this->load->library('session');   // Load session library
        $this->load->helper('url'); // Load Form Validation
        $this->load->library('form_validation');       // Load URL helper
    }

    // Login page
    public function login() {
        // If the user is already logged in, redirect to the admin dashboard
        if ($this->session->userdata('logged_in')) {
            redirect('admin/product');  // Redirect to the admin dashboard
        }

        // If the form is submitted
        if ($this->input->post()) {
            $email = $this->input->post('email');
            $password = $this->input->post('password');

            // Check if the email exists
            $admin = $this->Admin_model->get_admin_by_email($email);
            if ($admin) {
                // Verify password
                if (password_verify($password, $admin['password'])) {
                    // Password is correct, set session data
                    $session_data = array(
                        'logged_in' => TRUE,
                        'admin_id'  => $admin['id'],
                        'email'     => $admin['email'],
                        'role_id'   => $admin['role_id']
                    );
                    $this->session->set_userdata($session_data);

                    // Redirect to the admin dashboard (now in the 'admin' folder)
                    redirect('admin/product');  // Adjusted to reflect new folder structure
                } else {
                    // Incorrect password
                    $this->session->set_flashdata('error', 'Invalid email or password');
                }
            } else {
                // User not found
                $this->session->set_flashdata('error', 'Invalid email or password');
            }
        }

        // Load the login view (located in 'views/admin/auth/index.php')
        $this->load->view('admin/auth/index');
    }

    // Logout function
    public function logout() {
        $this->session->sess_destroy(); // Destroy session
    
        // Clear session cookies to ensure complete logout
        $this->input->set_cookie('ci_session', '', time() - 3600, '/', '', FALSE, TRUE);
        
        redirect('admin/auth/login');   // Redirect to the login page in the 'admin' folder
    }
}
