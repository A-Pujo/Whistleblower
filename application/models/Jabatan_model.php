<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Jabatan_model extends CI_Model
{
    private $TableName = 'daftar_jabatan';

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
        $this->db->select($selectData)
            ->from($this->TableName);
        if ($whereParameter != null) {
            $this->db->where($whereParameter);
        }
        return $this->db->get()->result();
    }
}
