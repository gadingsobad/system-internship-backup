<?php
defined('BASEPATH') or exit('No direct script access allowed');
class M_kegiatan extends CI_Model
{
    public function input_kegiatan($data)
    {
        $this->db->insert('kegiatan', $data);
    }

    public function option_pembimbing()
    {
        $this->db->from('pembimbing');
        $query = $this->db->get();

        return $query->result_array();
    }

    public function option_divisi()
    {
        $res = $this->db->get('divisi');
        return $res->result_array();
    }

    //mengambil dan memfilter data dari table "project" sesuai session
    public function get_kegiatan($id_user = '', $limit, $start)
    {
        $this->db->select('*');
        $this->db->limit($limit, $start);
        $this->db->from('kegiatan');
        $this->db->where("(id_user=$id_user)");
        $query = $this->db->get();

        return $query;
    }

    public function count_kegiatan()
    {
        return $this->db->get('kegiatan')->num_rows();
    }

    function get_mentor_name($name_id = '')
    {
        $this->db->select('user_name');
        $this->db->from('pembimbing');
        $this->db->where('user_id', $name_id);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function option_edit_mentor($id = '')
    {
        $this->db->select('*');
        $this->db->from('pembimbing');
        $this->db->join('kegiatan', 'pembimbing.user_id = kegiatan.pembimbing', 'left');
        $this->db->where('pembimbing', $id);
        $query = $this->db->get();

        return $query->result_array();
    }

    public function option_edit_divisi($id = '')
    {
        $this->db->select('*');
        $this->db->from('divisi');
        $this->db->join('kegiatan', 'divisi.team_id = kegiatan.divisi', 'left');
        $this->db->where('team_id', $id);
        $query = $this->db->get();

        return $query->result_array();
    }

    function get_divisi_name($id = '')
    {
        $this->db->select('team_name');
        $this->db->from('divisi');
        $this->db->where('team_id', $id);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function deleted($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function edit_data($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    public function update_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    public function get_keyword($keyword)
    {
        $this->db->select('*');
        $this->db->from('kegiatan');
        $this->db->like('tittle', $keyword);
        $this->db->or_like('date', $keyword);
        $this->db->or_like('pembimbing', $keyword);
        $this->db->or_like('divisi', $keyword);
        $this->db->or_like('detail', $keyword);
        return $this->db->get()->result_array();
    }
}
