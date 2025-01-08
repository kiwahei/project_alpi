<?php
class Category extends CI_Controller
{

    public function __construct() {
        parent::__construct();
        if(!$this->session->userdata("admin_id")){
            redirect(base_url("/admin/auth/login"));
        }
        $this->load->model('category_model');
        $this->load->library(['form_validation', 'session']);
       
	}
    function index()    {
        $data['categories'] = $this->category_model->getAll();
        $this->load->view('admin/category/index', $data);
    }
    function show(){

    }

    function add(){
        $this->load->view('admin/category/add');
    }

    function edit($id){
        $data['category'] = $this->category_model->getById($id);
        $this->load->view('admin/category/edit', $data);
    }
    


    function store(){
        $name = $this->input->post('name');
        $description= $this->input->post('description');

        $config['upload_path'] = FCPATH.'/uploads/category/';  // Tentukan folder tujuan upload
        $config['allowed_types'] = 'jpg|jpeg|png|gif'; // Jenis file yang diperbolehkan
        $config['max_size'] = 2048;  // Maksimal ukuran file (dalam kilobytes)
        // $config['max_width'] = 1024; // Lebar maksimum gambar
        // $config['max_height'] = 768; // Tinggi maksimum gambar
        $config['file_name'] = time().$_FILES['image']['name'];  // Nama file unik berdasarkan timestamp

        // Memuat konfigurasi file upload
        $this->load->library('upload', $config);
        $this->upload->do_upload('image');

    
    

        $data = [
            'name' => $name,
            'description' => $description,
            'image' =>   $config['file_name'],
            'created_at' => date('Y-m-d H:i:s'),
        ];

        $this->category_model->add($data);
        $this->session->set_flashdata('message', 'Data berhasil disimpan!');
        redirect('admin/category');
    }

    function update($id = null){
        $name = $this->input->post('name');
        $description= $this->input->post('description');

        $data = [
            'name' => $name,
            'description' => $description,
        ];

        if(isset($_FILES['image'])){
            $category = $this->category_model->getById($id);
            unlink(FCPATH.'/uploads/category/'.$category->image);
            $config['upload_path'] = FCPATH.'/uploads/category/'; 
            $config['allowed_types'] = 'jpg|jpeg|png|gif'; 
            $config['max_size'] = 2048;
        
            $config['file_name'] = time().$_FILES['image']['name'];  
            $this->load->library('upload', $config);
            $this->upload->do_upload('image');
            $data['image'] = $config['file_name'];
        }

        
        $this->category_model->update($id, $data);
        $this->session->set_flashdata('message', 'Data berhasil diedit!');
        redirect('admin/category');
    }


    function delete($id){
        $category = $this->category_model->getById($id);
        unlink(FCPATH.'/uploads/category/'.$category->image);
        $this->category_model->delete($id);
        $this->session->set_flashdata('message', 'Data berhasil didelete!');
        redirect('admin/category');

    }

    
}