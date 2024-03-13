<?php
defined('BASEPATH') or exit('No direct script access allowed');
class DataTransport extends CI_Controller
{
  public function index()
  {

    $data = [
      'title' => 'Halaman Data Absensi',
    ];

    if ((isset($_GET['bulan']) && $_GET['bulan'] != '') && (isset($_GET['tahun']) && $_GET['tahun'] != '')) {
      $bulan = $_GET['bulan'];
      $tahun = $_GET['tahun'];
      $bulantahun = $bulan . $tahun;
    } else {
      $bulan = date('m');
      $tahun = date('Y');
      $bulantahun = $bulan . $tahun;
    }

    $data['transport'] = $this->db->query("SELECT tbl_transport.*, tbl_pegawai.nama_pegawai, tbl_pegawai.jenis_kelamin, tbl_pegawai.jabatan
			FROM tbl_transport
			INNER JOIN tbl_pegawai ON tbl_transport.nbm= tbl_pegawai.nbm
			INNER JOIN tbl_jabatan ON tbl_pegawai.jabatan = tbl_jabatan.nama_jabatan
			WHERE tbl_transport.bulan='$bulantahun' ORDER BY tbl_pegawai.nama_pegawai ASC")->result();

    $this->load->view('templates/header');
    $this->load->view('templates/sidebar');
    $this->load->view('admin/absensi/index', $data);
    $this->load->view('templates/footer');
  }

  public function Create()
  {
    if ($this->input->post('submit', TRUE) == 'submit') {
      $post = $this->input->post();
      foreach ($post['bulan'] as $key => $value) {
        if ($post['bulan'][$key] != '' || $post['nbm'][$key] != '') {
          $data[] = array(
            'bulan'               => $post['bulan'][$key],
            'nbm'                 => $post['nbm'][$key],
            'nama_jabatan'        => $post['nama_jabatan'][$key],
            'jenis_kelamin'       => $post['jenis_kelamin'][$key],
            'nama_pegawai'        => $post['nama_pegawai'][$key],
            'tunjangan_kehadiran' => $post['tunjangan_kehadiran'][$key],
          );
        }
      }

      $this->AllModel->insert_batch_transport('tbl_transport', $data);
      $this->session->set_flashdata('success', 'Data Berhasil Disimpan!');
      redirect('admin/DataTransport');
    }

    if ((isset($_GET['bulan']) && $_GET['bulan'] != '') && (isset($_GET['tahun']) && $_GET['tahun'] != '')) {
      $bulan = $_GET['bulan'];
      $tahun = $_GET['tahun'];
      $bulantahun = $bulan . $tahun;
    } else {
      $bulan = date('m');
      $tahun = date('Y');
      $bulantahun = $bulan . $tahun;
    }
    $data = [
      'title' => 'Halaman Import Data Transport',
      'input_transport' => $this->db->query("SELECT tbl_pegawai.*, tbl_jabatan.nama_jabatan FROM tbl_pegawai 
      INNER JOIN tbl_jabatan ON tbl_pegawai.jabatan = tbl_jabatan.nama_jabatan
      WHERE NOT EXISTS (SELECT * FROM tbl_transport WHERE bulan = '$bulantahun' AND tbl_pegawai.nbm = tbl_transport.nbm )
      ORDER BY tbl_pegawai.nama_pegawai ASC
      ")->result()
    ];
    $this->load->view('templates/header');
    $this->load->view('templates/sidebar');
    $this->load->view('admin/absensi/inputTransport', $data);
    $this->load->view('templates/footer');
  }

  public function ImportDataTransport()
  {
    if (isset($_FILES["file"]["name"])) {
      // upload
      $file_tmp   = $_FILES['file']['tmp_name'];
      $file_name  = $_FILES['file']['name'];
      $file_size  = $_FILES['file']['size'];
      $file_type  = $_FILES['file']['type'];
      // move_uploaded_file($file_tmp,"uploads/".$file_name); // simpan filenya di folder uploads

      $object = PHPExcel_IOFactory::load($file_tmp);

      foreach ($object->getWorksheetIterator() as $worksheet) {

        $highestRow     = $worksheet->getHighestRow();
        $highestColumn  = $worksheet->getHighestColumn();

        for ($row = 3; $row <= $highestRow; $row++) {

          $bulan      = $worksheet->getCellByColumnAndRow(0, $row)->getValue();
          $nbm        = $worksheet->getCellByColumnAndRow(1, $row)->getValue();
          $nama_pegawai  = $worksheet->getCellByColumnAndRow(2, $row)->getValue();
          $nama_jabatan    = $worksheet->getCellByColumnAndRow(3, $row)->getValue();
          $jenis_kelamin    = $worksheet->getCellByColumnAndRow(4, $row)->getValue();
          $tunjangan_kehadiran  = $worksheet->getCellByColumnAndRow(5, $row)->getValue();

          $data[] = array(
            'bulan'          => $bulan,
            'nbm'            => $nbm,
            'nama_pegawai'      => $nama_pegawai,
            'nama_jabatan'        => $nama_jabatan,
            'jenis_kelamin'        => $jenis_kelamin,
            'tunjangan_kehadiran'      => $tunjangan_kehadiran,
          );
        }
      }

      $this->AllModel->import_batch_transport('tbl_transport', $data);

      $this->session->set_flashdata('success', 'Data Berhasil Diimport!');
      redirect('admin/DataTransport');
    } else {
      $this->session->set_flashdata('error', 'Data Berhasil Diimport!');
      redirect('admin/DataTransport');
    }
  }
}