<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

	public function index()
	{
		$this->_rules();
		if ($this->form_validation->run() == FALSE) {
			$data = [
				'title' => 'Halaman Login Gukar',
			];
			$this->load->view('templates/header', $data);
			$this->load->view('login', $data);
		} else {
			$email = $this->input->post('email');
			$password = $this->input->post('password');

			$cek = $this->AllModel->cek_login($email, $password);

			if ($cek == FALSE) {
				$this->session->set_flashdata('error', 'Email / Password Salah, Silahkan Coba Lagi..');
				redirect('welcome');
			} else {
				$this->session->set_userdata('role', $cek->role);
				$this->session->set_userdata('nama_pegawai', $cek->nama_pegawai);
				$this->session->set_userdata('foto', $cek->foto);
				$this->session->set_userdata('jabatan', $cek->jabatan);
				$this->session->set_userdata('id', $cek->id);
				$this->session->set_userdata('nbm', $cek->nbm);
				switch ($cek->role) {
					case 1:
						redirect('admin/DashboardController');
						break;
					case 2:
						redirect('sdm/dashboard');
						break;
					case 3:
						redirect('bendahara/dashboard');
						break;
					case 4:
						redirect('gukar/dashboard');
						break;
					default:
						break;
				}
			}
		}
	}
	public function _rules()
	{
		$this->form_validation->set_rules('email', 'email', 'required');
		$this->form_validation->set_rules('password', 'password', 'required');
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('welcome');
	}
}
