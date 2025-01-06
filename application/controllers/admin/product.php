<?php


class Product extends CI_Controller
{

    public function __construct() {
        parent::__construct();
        $this->load->model('product_model');
        $this->load->model('category_model');
        $this->load->library(['form_validation', 'session']);
	}

  
    function index(){
        $data['products'] = $this->product_model->getAll();
        $this->load->view('admin/product/index', $data);
    }
    

    function show(){

    }

    function add(){
        $data['categories'] = $this->category_model->getAll();
        $this->load->view('admin/product/add' , $data);
    }

    function edit($id){
        $data['categories'] = $this->category_model->getAll();
        $data['product'] = $this->product_model->getById($id);
        $this->load->view('admin/product/edit', $data);
    }
    


    function store(){
        $name = $this->input->post('name');
        $description= $this->input->post('description');
        $price = $this->input->post('price');
        $category_id = $this->input->post('category');

        $config['upload_path'] = FCPATH.'/uploads/product/'; 
        $config['allowed_types'] = 'jpg|jpeg|png|gif'; 
        $config['max_size'] = 2048;
    
        $config['file_name'] = time().$_FILES['image']['name'];  
        $this->load->library('upload', $config);
        $this->upload->do_upload('image');

        $data = [
            'name' => $name,
            'description' => $description,
            'price' => $price, 
            'created_at' => date('Y-m-d H:i:s'),
            'image' =>  $config['file_name'],
            'category_id' => $category_id
        ];

        $this->product_model->add($data);
        $this->session->set_flashdata('message', 'Data berhasil disimpan!');
        redirect('admin/product');
    }

    function update($id = null){
        $name = $this->input->post('name');
        $description= $this->input->post('description');
        $price = $this->input->post('price');
        $category_id = $this->input->post('category');

        if($this->input->post('image')){
            unlink(FCPATH.'/uploads/product/'.$this->input->post('image'));
            $config['upload_path'] = FCPATH.'/uploads/product/'; 
            $config['allowed_types'] = 'jpg|jpeg|png|gif'; 
            $config['max_size'] = 2048;
        
            $config['file_name'] = time().$_FILES['image']['name'];  
            $this->load->library('upload', $config);
            $this->upload->do_upload('image');
        }
      


        $data = [
            'name' => $name,
            'description' => $description,
            'price' => $price, 
            'category_id' => $category_id
        ];

        if(isset($_FILES['image'])){
            $product= $this->product_model->getById($id);
            unlink(FCPATH.'/uploads/product/'.$product->image);
            $config['upload_path'] = FCPATH.'/uploads/product/'; 
            $config['allowed_types'] = 'jpg|jpeg|png|gif'; 
            $config['max_size'] = 2048;
        
            $config['file_name'] = time().$_FILES['image']['name'];  
            $this->load->library('upload', $config);
            $this->upload->do_upload('image');
            $data['image'] = $config['file_name'];
        }
       

        
        $this->product_model->update($id, $data);
        $this->session->set_flashdata('message', 'Data berhasil diedit!');
        redirect('admin/product');
    }


    function delete($id){
        $product = $this->product_model->getById($id);
        unlink(FCPATH.'/uploads/product/'.$product->image);
        $this->product_model->delete($id);
        $this->session->set_flashdata('message', 'Data berhasil didelete!');
        redirect('admin/product');

    }


}   