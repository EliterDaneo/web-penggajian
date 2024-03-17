<?php
defined('BASEPATH') or exit ('No direct script access allowed');
class Dashboard extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();

    if ($this->session->userdata('role') != 3) {
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

  public function GantiPassword()
  {
    $password = $this->input->post('password');
    $password2 = $this->input->post('password2');

    $this->form_validation->set_rules('password', 'password', 'required|matches[password2]');
    $this->form_validation->set_rules('password2', 'password2', 'required');

    if ($this->form_validation->run() != FALSE) {
      $id = array('id' => $this->session->userdata('id'));
      $data = array(
        'password' => md5($password)
      );
      $this->AllModel->GantiPassword('tbl_pegawai', $data, $id);
      $this->session->set_flashdata('success', 'Password Berhasil Di Ganti');
      $this->session->sess_destroy();
      redirect('welcome');
    } else {
      $data = [
        'title' => 'Halaman Dashboard',
      ];
      $this->load->view('templates/header', $data);
      $this->load->view('templates/sidebar');
      $this->load->view('bendahara/dashboard', $data);
      $this->load->view('templates/footer');
    }
  }
}
