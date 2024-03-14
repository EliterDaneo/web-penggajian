<?php
defined('BASEPATH') or exit('No direct script access allowed');
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
    $data = [
      'title' => 'Halaman Dashboard',
    ];
    $this->load->view('templates_sdm/header', $data);
    $this->load->view('templates_sdm/sidebar');
    $this->load->view('sdm/dashboard', $data);
    $this->load->view('templates_sdm/footer');
  }
}
