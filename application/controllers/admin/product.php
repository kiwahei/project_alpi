<?php


class Product extends CI_Controller
{

    public function __construct() {
        parent::__construct();
        $this->load->model('product_model');
        $this->load->library(['form_validation', 'session']);
	}

  
    function index(){
        $data['products'] = $this->product_model->getAll();
        $this->load->view('admin/product/index', $data);
    }
    

    function show(){

    }

    function add(){
        $this->load->view('admin/product/add');
    }

    function edit($id){
        

        $data['product'] = $this->product_model->getById($id);
        $this->load->view('admin/product/edit', $data);
    }
    


    function store(){
        $name = $this->input->post('name');
        $description= $this->input->post('description');
        $price = $this->input->post('price');

        $data = [
            'name' => $name,
            'description' => $description,
            'price' => $price, 
            'created_at' => date('Y-m-d H:i:s'),
        ];

        $this->product_model->add($data);
        $this->session->set_flashdata('message', 'Data berhasil disimpan!');
        redirect('admin/product');
    }

    function update($id = null){
        $name = $this->input->post('name');
        $description= $this->input->post('description');
        $price = $this->input->post('price');

        $data = [
            'name' => $name,
            'description' => $description,
            'price' => $price, 
        ];

        
        $this->product_model->update($id, $data);
        $this->session->set_flashdata('message', 'Data berhasil diedit!');
        redirect('admin/product');
    }


    function delete($id){
        $this->product_model->delete($id);
        $this->session->set_flashdata('message', 'Data berhasil didelete!');
        redirect('admin/product');

    }


}   