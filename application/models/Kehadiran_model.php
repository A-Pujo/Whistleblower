<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kehadiran_model extends CI_Model
{
    private $TableName = 'data_kehadiran';

    public function readFirst($whereParameter, $selectData = '*')
    {
        return $this->db->select($selectData)
            ->from($this->TableName)
            ->where($whereParameter)
            ->get()
            ->row();
    }

    public function read($whereParameter = null, $OrderBy = null, $selectData = '*')
    {
        $this->db->select($selectData)
            ->from($this->TableName);
        if ($whereParameter != null) {
            $this->db->where($whereParameter);
        }
        if ($OrderBy != null) {
            $this->db->order_by($OrderBy['column'], $OrderBy['order']);
        }
        return $this->db->get();
    }

    public function readJoin($whereParameter = null, $JoinWith = null, $OrderBy = null, $selectData = '*')
    {
        $this->db->select($selectData)
            ->from($this->TableName);
        if ($JoinWith != null) {
            $this->db->join($JoinWith['table'], $JoinWith['condition'], 'left');
        }
        if ($whereParameter != null) {
            $this->db->where($whereParameter);
        }
        if ($OrderBy != null) {
            $this->db->order_by($OrderBy['column'], $OrderBy['order']);
        }
        return $this->db->get()->result();
    }

    public function readJoinDetail($whereParameter = null, $JoinWith = null, $OrderBy = null, $selectData = '*')
    {
        $this->db->select($selectData)
            ->from($this->TableName);
        if ($JoinWith != null) {
            $this->db->join($JoinWith['table'], $JoinWith['condition'], 'left');
        }
        if ($whereParameter != null) {
            $this->db->where($whereParameter);
        }
        if ($OrderBy != null) {
            $this->db->order_by($OrderBy['column'], $OrderBy['order']);
        }
        return $this->db->get()->row();
    }
}
