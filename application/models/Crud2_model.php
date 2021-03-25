<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Crud2_model extends CI_Model
{

    public function get1($table, $where, $select = '*')
    {

        $query = $this->db->select($select)
            ->from($table)
            ->where($where)
            ->get()
            ->row();
        return $query;
    }

    public function get2($table, $where, $order = 'url', $by = 'ASC', $search = null, $select = '*')
    {
        if ($search != null) {
            $this->db->like('judul', $search)
                ->or_like('tautan', $search)
                ->or_like('url', $search)
                ->or_like('deskripsi', $search);
        }
        $query = $this->db->select($select)
            ->from($table)
            ->where($where)
            ->order_by($order, $by)
            ->get()
            ->result();
        return $query;
    }

    public function insert1($table, $data)
    {
        $this->db->insert($table, $data);
        return $this->db->affected_rows();
    }

    public function update1($table, $data, $where)
    {
        $this->db->where($where)
            ->update($table, $data);
        return $this->db->affected_rows();
    }

    public function delete1($table, $where)
    {
        $this->db->where($where)
            ->delete($table);
        return $this->db->affected_rows();
    }

    ## clear ###

    public function getAll($prefix, $table, $urutan, $order, $where = null)
    {
        if ($where) {
            $this->db->where($where);
        }
        if ($prefix == 'view_data') {
            if ($table == 'peserta') {
                $this->db->select('data_peserta.*,
data_pendaftar.nama_lengkap as nama_pendaftar,
data_pendaftar.fg_status,
data_pendaftar.whatsapp,
ref_universitas.nama_universitas,
ref_cabor.nama_cabor');
                $this->db->join('data_pendaftar', 'data_pendaftar.id = data_peserta.id_pendaftar');
                $this->db->join('ref_universitas', 'ref_universitas.id = data_pendaftar.id_universitas');
                $this->db->join('ref_cabor', 'ref_cabor.id = data_peserta.id_cabor');
            } elseif ($table == 'pendaftar') {
                $this->db->select('data_pendaftar.*,
ref_universitas.nama_universitas,
ref_universitas.nama_singkat,
(select count(data_peserta.id) from data_peserta where data_peserta.id_pendaftar = data_pendaftar.id) as jumlah_peserta');
                $this->db->join('ref_universitas', 'ref_universitas.id = data_pendaftar.id_universitas');
            }
            $this->db->order_by($urutan, $order);
            $this->db->from('data' . '_' . $table);
        } else {
            $this->db->from($prefix . '_' . $table);
            $this->db->order_by($urutan, $order);
        }
        $query = $this->db->get();
        return $query->result();
    }

    public function insertOne($prefix, $table, $data, $where = null)
    {
        if ($where) {
            $this->db->where($where);
            $this->db->update($prefix . '_' . $table, $data);
        } else {
            $this->db->insert($prefix . '_' . $table, $data);
        }
        return $this->db->affected_rows();
    }

    public function deleteOne($prefix, $table, $where)
    {
        $this->db->where($where)
            ->delete($prefix . '_' . $table);
        return $this->db->affected_rows();
    }

    public function get3($table, $where, $select = '*')
    {
        return $this->db->select($select)
        ->from($table)
        ->where($where)
        ->get()
        ->result();
    }

    public function get_rows($table, $where = null, $search = null, $select = '*')
    {
        $this->db->select($select)
        ->from($table);
        if($where != null) $this->db->where($where);
        if($search != null){
            $this->db->like("judul",$search,'both');
            $this->db->or_like("detil_laporan",$search,'both');
        }
        return $this->db->get()->num_rows();
    }

    public function filter_get($table, $start = 0, $where = null, $order = 'DESC', $search = null, $select = '*')
    {
        $this->db->select($select)
        ->from($table)
        ->order_by('id', $order);
        if($where != null) $this->db->where($where);
        $this->db->limit(6, $start);
        if ($search != null) {
            $this->db->like("judul",$search,'both');
            $this->db->or_like("detil_laporan",$search,'both');
        }
        return $this->db->get()->result();
    }
}