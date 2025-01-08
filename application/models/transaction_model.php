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

    public function getAllByStatus($status){

        $query = $this->db->query("SELECT * from $this->table WHERE status = '$status'");
        return $query->result_array();
    }

    public function getAllByUserId($userId){

        $query = $this->db->query("SELECT * from $this->table WHERE user_id = '$userId'");
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

    
    public function process($trxId){
        $this->db->set('status', "ON_PROCESS");
        $this->db->where('id', $trxId);
        $this->db->update($this->table);
    }

    public function deliver($trxId){
        $this->db->set('status', "ON_DELIVERY");
        $this->db->where('id', $trxId);
        $this->db->update($this->table);
    }

    public function confirm($trxId){
        $this->db->set('status', "WAITING_CONFIRMATION");
        $this->db->where('id', $trxId);
        $this->db->update($this->table);
    }


    public function complete($trxId){
        $this->db->set('status', "COMPLETE");
        $this->db->where('id', $trxId);
        $this->db->update($this->table);
    }

    public function add($userId, $transaction, $transaction_items){
        $random = rand(100, 999);
        $customId = "ELGA-".$userId.date("YmdHis").$random;
        $transaction["id"] = $customId;
        $this->db->insert($this->table, $transaction);
        foreach($transaction_items as $item){
            $item['transaction_id'] = $customId;
            $this->db->insert("transaction_item", $item);
        }

        return $customId;
        
    }


    public function update($id, $data){
        if(!empty($data)) {
            $this->db->where('id', $id);  
            return $this->db->update($this->table, $data);  
        }

        return false;
    }

    public function uploadPaymentPhoto($id, $file){
        $this->db->set('payment_photo', $file);
        $this->db->set('status', "WAITING_CONFIRMATIOn");
        $this->db->where('id', $id);
        $this->db->update($this->table);
    }


    public function delete($id){
        $this->db->where('id', $id);
        return $this->db->delete($this->table); 
    }

}