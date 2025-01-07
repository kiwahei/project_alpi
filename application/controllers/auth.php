<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */

     public function __construct() {
        parent::__construct();
        // Load the necessary models, libraries, and helpers
        $this->load->model('User_model');
        $this->load->model('menu_model');
        $this->load->library(['form_validation', 'session']);
        $this->load->helper(['url', 'form']);
    }

    public function login() {
        // Redirect if already logged in
        if ($this->session->userdata('user_id')) {
            redirect('home');
        }

        // Set form validation rules
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required');

        // If form validation fails
        if ($this->form_validation->run() == FALSE) {
            $data['menus'] = $this->menu_model->get_menus();
            $this->load->view('web/auth/login/index', $data);
        } else {
            $email = $this->input->post('email');
            $password = $this->input->post('password');

            $user = $this->User_model->authenticate($email, $password);

            if ($user && password_verify($password, $user['password'])) {
                // Set session
                $this->session->set_userdata([
                    'user_id' => $user['id_user'],
                    'email' => $user['email']
                ]);
                redirect('home');
            } else {
                $this->session->set_flashdata('error', 'Invalid email or password.');
                redirect('auth/login');
            }
        }
    }

    public function register() {
        // Redirect if the user is logged in
        if ($this->session->userdata('user_id')) {
            redirect('home');
        }

        // Set form validation rules
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[user.email]');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[6]');
        $this->form_validation->set_rules('confirm_password', 'Confirm Password', 'required|matches[password]');

        // If form validation fails
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('web/auth/register/index');
        } else {
            // If form validation passes, proceed with registration
            $email = $this->input->post('email');
            $password = password_hash($this->input->post('password'), PASSWORD_DEFAULT); // Hash password

            // Prepare data to insert into the database
            $data = [
                'email' => $email,
                'password' => $password,
                'is_active' => 1,  // Active user by default
                'created_at' => date('Y-m-d H:i:s')  // Timestamp for registration
            ];

            // Insert user data into the database
            $user_id = $this->User_model->create_user($data);

            if ($user_id) {
                // Set flashdata for success message
                $this->session->set_flashdata('success', 'Registration successful! You can now log in.');
                redirect('auth/login');
            } else {
                // Set flashdata for error message
                $this->session->set_flashdata('error', 'Failed to register. Please try again.');
                redirect('auth/register');
            }
        }
    }

    public function logout() {
        // Destroy session data
        $this->session->sess_destroy();

        // Clear session cookies to ensure complete logout
        $this->input->set_cookie('ci_session', '', time() - 3600, '/', '', FALSE, TRUE);

        // Redirect to home page after logout
        redirect('auth/login');
    }
}