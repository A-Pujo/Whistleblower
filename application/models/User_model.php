<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model
{
    private $TableName = 'data_user';

    public function create($inputData)
    {
        $data = array_merge($inputData, [
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        $this->db->insert($this->TableName, $data);
        return $this->db->affected_rows();
    }

    public function readFirst($whereParameter, $selectData = '*')
    {
        return $this->db->select($selectData)
            ->from($this->TableName)
            ->where($whereParameter)
            ->get()
            ->row();
    }

    public function read($whereParameter = null, $selectData = '*')
    {
        $this->db->select($selectData);
        if ($whereParameter !== null) {
            $this->db->where($whereParameter);
        }
        return $this->db->from($this->TableName)
            ->get();
    }

    public function readFirstJoin($whereParameter, $JoinWith = null, $selectData = '*')
    {
        return $this->db->select($selectData)
            ->from($this->TableName)
            ->where($whereParameter)
            ->join($JoinWith['table'], $JoinWith['condition'])
            ->get()
            ->row();
    }

    public function update($whereParameter, $inputData)
    {
        $data = array_merge($inputData, [
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        $this->db->where($whereParameter)
            ->update($this->TableName, $data);
        return $this->db->affected_rows();
    }
}
