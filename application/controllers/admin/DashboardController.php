<?php
defined('BASEPATH') or exit('No direct script access allowed');
class DashboardController extends CI_Controller
{
  public function index()
  {
    $data = [
      'title' => 'Halaman Dashboard',
      'jabatan' => $this->db->query('SELECT * FROM tbl_jabatan')->num_rows(),
      'pegawai' => $this->db->query('SELECT * FROM tbl_pegawai')->num_rows(),
      'golongan' => $this->db->query('SELECT * FROM tbl_golongan')->num_rows(),
    ];
    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar');
    $this->load->view('admin/dashboard', $data);
    $this->load->view('templates/footer');
  }
}
