<?php 
class Courier extends CI_Controller
{

    public function __construct() {
        parent::__construct();
        $this->load->model('courier_model');
        $this->load->library(['form_validation', 'session']);
	}

    function index()    {
        $data['couriers'] = $this->courier_model->getAll();
        $this->load->view('admin/courier/index', $data);
    }

    function add() {
        $this->load->view('admin/courier/add');
    }

    function store(){
        $name = $this->input->post('name');
        $description= $this->input->post('description');

        $data = [
            'name' => $name,
            'description' => $description,
            'created_at' => date('Y-m-d H:i:s'),
        ];

        $this->courier_model->add($data);
        $this->session->set_flashdata('message', 'Data berhasil disimpan!');
        redirect('admin/courier');
    }

    
    function edit($id){
        $data['courier'] = $this->courier_model->getById($id);
        $this->load->view('admin/courier/edit', $data);
    }

    function update($id = null){
        $name = $this->input->post('name');
        $description= $this->input->post('description');

        $data = [
            'name' => $name,
            'description' => $description,
        ];

        
        $this->courier_model->update($id, $data);
        $this->session->set_flashdata('message', 'Data berhasil diedit!');
        redirect('admin/courier');
    }


    function delete($id){
        $this->courier_model->delete($id);
        $this->session->set_flashdata('message', 'Data berhasil didelete!');
        redirect('admin/courier');

    }

}