<?php
class Category extends CI_Controller
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

        $config['upload_path'] = FCPATH.'/uploads/';  // Tentukan folder tujuan upload
        $config['allowed_types'] = 'jpg|jpeg|png|gif'; // Jenis file yang diperbolehkan
        $config['max_size'] = 2048;  // Maksimal ukuran file (dalam kilobytes)
        // $config['max_width'] = 1024; // Lebar maksimum gambar
        // $config['max_height'] = 768; // Tinggi maksimum gambar
        $config['file_name'] = time().$_FILES['image']['name'];  // Nama file unik berdasarkan timestamp

        // Memuat konfigurasi file upload
        $this->load->library('upload', $config);

        // Melakukan validasi file upload
        if (!$this->upload->do_upload('image')) {
            // Jika gagal upload, tampilkan pesan error
            $error = array('error' => $this->upload->display_errors());
            $this->load->view('admin/category/add', $error);
        } else {
            // Jika sukses upload, ambil data file yang diupload
            $data = array('upload_data' => $this->upload->data());
            $this->load->view('upload_success', $data);
        }
    

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

        
        $this->category_model->update($id, $data);
        $this->session->set_flashdata('message', 'Data berhasil diedit!');
        redirect('admin/category');
    }


    function delete($id){
        $this->category_model-->delete($id);
        $this->session->set_flashdata('message', 'Data berhasil didelete!');
        redirect('admin/category');

    }

    
}