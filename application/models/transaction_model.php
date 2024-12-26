<?php 


class Transaction_Model extends CI_Model {

    private $table = "transaction";

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

    public function add($transaction, $transaction_items){
        $this->db->insert($this->table, $transaction);
        $id = $this->db->insert_id();
        foreach($transaction_items as $item){
            $item['transaction_id'] = $id;
            $this->db->insert("transaction_item", $item);
        }

        
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