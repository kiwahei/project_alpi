<?php 


class Product_Model extends CI_Model {

    private $table = "product";

    public function __construct()
    {
        parent::__construct();
    }


    public function getAll(){
        $query = $this->db->query("SELECT * from $this->table");
        return $query->result_array();
    }

    public function getById($id){
        $query = $this->db->get_where($this->table, array('id' => $id));
        if ($query->num_rows() > 0) {
            return $query->row(); 
        } else {
            return null;  
        }
       
    }

    public function add($data){
        $this->db->insert($this->table, $data);
    }

    public function update($id, $data){
        if(!empty($data)) {
            $this->db->where('id', $id);  
            return $this->db->update($this->table, $data);  
        }

        return false;
    }


    public function delete($id){
        $this->db->where('id', $id);
        return $this->db->delete($this->table); 
    }


}