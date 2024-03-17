<?php
defined('BASEPATH') or exit ('No direct script access allowed');
class DashboardController extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();

    if ($this->session->userdata('role') != 1) {
      $this->session->set_flashdata('error', 'Anda Tidak Mempunyai Akses! Silahkan Login Sesuai Role!!!');
      redirect('welcome');
    }
  }

  public function index()
  {
    $id = $this->session->userdata('id');
    $data = [
      'title' => 'Halaman Dashboard',
      'jabatan' => $this->db->query("SELECT * FROM tbl_jabatan")->num_rows(),
      'pegawai' => $this->db->query("SELECT * FROM tbl_pegawai WHERE role = 1 ")->num_rows(),
      'sdm' => $this->db->query("SELECT * FROM tbl_pegawai WHERE role = 2")->num_rows(),
      'bendahara' => $this->db->query("SELECT * FROM tbl_pegawai WHERE role = 3")->num_rows(),
      'guru' => $this->db->query("SELECT * FROM tbl_pegawai WHERE role = 4")->num_rows(),
      'golongan' => $this->db->query("SELECT * FROM tbl_golongan")->num_rows(),
      'gukar' => $this->db->query("SELECT * FROM tbl_pegawai WHERE id = '$id'")->result()
    ];
    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar');
    $this->load->view('admin/dashboard', $data);
    $this->load->view('templates/footer');
  }
}
