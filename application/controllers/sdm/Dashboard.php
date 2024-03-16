<?php
defined('BASEPATH') or exit ('No direct script access allowed');
class Dashboard extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();

    if ($this->session->userdata('role') != 2) {
      $this->session->set_flashdata('error', 'Anda Tidak Mempunyai Akses! Silahkan Login Sesuai Role!!!');
      redirect('welcome');
    }
  }

  public function index()
  {
    $id = $this->session->userdata('id');
    $data = [
      'title' => 'Halaman Dashboard',
      'gukar' => $this->db->query("SELECT * FROM tbl_pegawai WHERE id = '$id'")->result()
    ];
    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar');
    $this->load->view('sdm/dashboard', $data);
    $this->load->view('templates/footer');
  }
}
