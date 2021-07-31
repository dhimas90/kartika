<?php 

class Crud_model extends CI_Model {

    public function getData()
    {
        return $query = $this->db->get('test')->result_array();
    }

    public function inputThis($data, $table) 
    {
        $this->db->insert($table, $data);
    }
    public function  getId($where, $table) 
    {
        return $query = $this->db->get_where($table, $where);
    }

    function update_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->replace($table, $data);
        return $this->db->affected_rows();
    }
}