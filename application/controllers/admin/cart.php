<?php
class Cart extends CI_Controller
{

    public function __construct() {
        parent::__construct();
        $this->load->model('category_model');
        $this->load->library(['form_validation', 'session']);
	}
    function index()    {
        $data['categories'] = $this->category_model->getAll();
        $this->load->view('admin/category/index', $data);
    }

}