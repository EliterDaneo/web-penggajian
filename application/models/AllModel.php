<?php

class AllModel extends CI_model
{
  //transport
  public function import_batch_transport($table = null, $data = array())
  {
    $this->db->insert_batch($table, $data);
  }

  public function insert_batch_transport($table = null, $data = array())
  {
    $jumlah = count($data);
    if ($jumlah > 0) {
      $this->db->insert_batch($table, $data);
    }
  }

  //Golongan
  public function get_data_golongan()
  {
    $this->db->select('*');
    $this->db->from('tbl_golongan');
    $this->db->order_by('tbl_golongan.nama_golongan', 'ASC');
    return $this->db->get()->result();
  }

  public function insert_batch_golongan($table = null, $data = array())
  {
    $this->db->insert_batch($table, $data);
  }

  public function insert_data_golongan($data, $table)
  {
    $this->db->insert($table, $data);
  }

  public function update_data_golongan($table, $data, $where)
  {
    $this->db->update($table, $data, $where);
  }

  public function delete_data_golongan($where, $table)
  {
    $this->db->where($where);
    $this->db->delete($table);
  }


  //Jabatan
  public function get_data_jabatan()
  {
    $this->db->select('*');
    $this->db->from('tbl_jabatan');
    $this->db->order_by('tbl_jabatan.nama_jabatan', 'ASC');
    return $this->db->get()->result();
  }

  public function insert_batch_jabatan($table = null, $data = array())
  {
    $this->db->insert_batch($table, $data);
  }

  public function insert_data_jabatan($data, $table)
  {
    $this->db->insert($table, $data);
  }

  public function update_data_jabatan($table, $data, $where)
  {
    $this->db->update($table, $data, $where);
  }

  public function delete_data_jabatan($where, $table)
  {
    $this->db->where($where);
    $this->db->delete($table);
  }

  //Gukar
  public function get_data_gukar()
  {
    $this->db->select('*');
    $this->db->from('tbl_pegawai');
    $this->db->order_by('tbl_pegawai.nama_pegawai', 'ASC');
    return $this->db->get()->result();
  }

  public function insert_batch_gukar($table = null, $data = array())
  {
    $this->db->insert_batch($table, $data);
  }

  public function insert_data_gukar($data, $table)
  {
    $this->db->insert($table, $data);
  }

  public function update_data_gukar($table, $data, $where)
  {
    $this->db->update($table, $data, $where);
  }

  public function delete_data_gukar($where, $table)
  {
    $this->db->where($where);
    $this->db->delete($table);
  }

  //Ekstra
  public function get_data_ekstra()
  {
    $this->db->select('*');
    $this->db->from('tbl_ekstra');
    $this->db->order_by('tbl_ekstra.nama_ekstra', 'ASC');
    return $this->db->get()->result();
  }

  public function insert_batch_ekstra($table = null, $data = array())
  {
    $this->db->insert_batch($table, $data);
  }

  public function insert_data_ekstra($data, $table)
  {
    $this->db->insert($table, $data);
  }

  public function update_data_ekstra($table, $data, $where)
  {
    $this->db->update($table, $data, $where);
  }

  public function delete_data_ekstra($where, $table)
  {
    $this->db->where($where);
    $this->db->delete($table);
  }

  //Wali Kelas
  public function get_data_walikelas()
  {
    $this->db->select('*');
    $this->db->from('tbl_walikelas');
    $this->db->order_by('tbl_walikelas.nama_walikelas', 'ASC');
    return $this->db->get()->result();
  }

  public function insert_batch_walikelas($table = null, $data = array())
  {
    $this->db->insert_batch($table, $data);
  }

  public function insert_data_walikelas($data, $table)
  {
    $this->db->insert($table, $data);
  }

  public function update_data_walikelas($table, $data, $where)
  {
    $this->db->update($table, $data, $where);
  }

  public function delete_data_walikelas($where, $table)
  {
    $this->db->where($where);
    $this->db->delete($table);
  }
}