<?php 


class Transaction_Item_Model extends CI_Model {

    private $table = "transaction_item";

    public function __construct()
    {
        parent::__construct();
    }

    public function getAllByTransactionId($trxId){
        $trxItems = $this->db->get_where($this->table, array('transaction_id' => $trxId));
        return $trxItems->result_array();
    }

    public function add($data){
        $this->db->insert($this->table, $data);
    }
}