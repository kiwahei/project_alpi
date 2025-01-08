<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model('user_model');
        $this->load->model('transaction_model');

        if(!$this->session->userdata('user_id')){
            redirect(base_url("/auth/login"));
        }
    }

    public function index() {
        $userId= $this->session->userdata('user_id');
        $data['user'] = $this->user_model->getById($userId);
        $data['trxs'] = $this->transaction_model->getAllByUserId($userId);
        $this->load->view('web/profile/index', $data);
    }

    public function account() {
        $this->load->view('menu/pages/my_account/my-account');
    }
}
