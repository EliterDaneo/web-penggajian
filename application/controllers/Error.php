<?php
defined('BASEPATH') or exit ('No direct script access allowed');
class Error extends CI_Controller
{
  public function index()
  {
    $data = [
      'title' => 'Error Page',
    ];
    $this->load->view('errors/html/error_not_access', $data);
  }
}