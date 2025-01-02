<?php 
class Payment extends CI_Controller
{

    public function __construct() {
        parent::__construct();
        $this->load->model('payment_model');
        $this->load->library(['form_validation', 'session']);
	}

    function index()    {
        $data['payments'] = $this->payment_model->getAll();
        $this->load->view('admin/payment/index', $data);
    }

    function add() {
        $this->load->view('admin/payment/add');
    }

    function store(){
        $name = $this->input->post('name');
        $description= $this->input->post('description');

        $data = [
            'name' => $name,
            'description' => $description,
            'created_at' => date('Y-m-d H:i:s'),
        ];

        $this->payment_model->add($data);
        $this->session->set_flashdata('message', 'Data berhasil disimpan!');
        redirect('admin/payment');
    }

    
    function edit($id){
        $data['payment'] = $this->payment_model->getById($id);
        $this->load->view('admin/payment/edit', $data);
    }

    function update($id = null){
        $name = $this->input->post('name');
        $description= $this->input->post('description');

        $data = [
            'name' => $name,
            'description' => $description,
        ];

        
        $this->payment_model->update($id, $data);
        $this->session->set_flashdata('message', 'Data berhasil diedit!');
        redirect('admin/payment');
    }


    function delete($id){
        $this->payment_model->delete($id);
        $this->session->set_flashdata('message', 'Data berhasil didelete!');
        redirect('admin/payment');

    }

}