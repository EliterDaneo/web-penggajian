<?php
defined('BASEPATH') or exit('No direct script access allowed');
class DataTunjangan extends CI_Controller
{
  public function index()
  {

    $data = [
      'title' => 'Halaman Data Tunjangan',
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

    $data['tunjangan'] = $this->db->query("SELECT tbl_tunjangan.*, tbl_pegawai.nama_pegawai, tbl_pegawai.jenis_kelamin, tbl_pegawai.jabatan
			FROM tbl_tunjangan
			INNER JOIN tbl_pegawai ON tbl_tunjangan.nbm= tbl_pegawai.nbm
			INNER JOIN tbl_jabatan ON tbl_pegawai.jabatan = tbl_jabatan.nama_jabatan
			WHERE tbl_tunjangan.bulan='$bulantahun' ORDER BY tbl_pegawai.nama_pegawai ASC")->result();

    $this->load->view('templates/header');
    $this->load->view('templates/sidebar');
    $this->load->view('admin/tunjangan/index', $data);
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
            'tunjangan_anak' => $post['tunjangan_anak'][$key],
            'tunjangan_pangan' => $post['tunjangan_pangan'][$key],
            'kelebihan_jam_mengajar' => $post['kelebihan_jam_mengajar'][$key],
            'total_tunjangan' => $post['total_tunjangan'][$key],
          );
        }
      }

      $this->AllModel->insert_batch_tunjangan('tbl_tunjangan', $data);
      $this->session->set_flashdata('success', 'Data Berhasil Disimpan!');
      redirect('admin/DataTunjangan');
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
      'title' => 'Halaman Import Data Tunjangan',
      'input_tunjangan' => $this->db->query("SELECT tbl_pegawai.*, tbl_jabatan.nama_jabatan FROM tbl_pegawai 
      INNER JOIN tbl_jabatan ON tbl_pegawai.jabatan = tbl_jabatan.nama_jabatan
      WHERE NOT EXISTS (SELECT * FROM tbl_tunjangan WHERE bulan = '$bulantahun' AND tbl_pegawai.nbm = tbl_tunjangan.nbm )
      ORDER BY tbl_pegawai.nama_pegawai ASC
      ")->result()
    ];
    $this->load->view('templates/header');
    $this->load->view('templates/sidebar');
    $this->load->view('admin/tunjangan/inputTunjangan', $data);
    $this->load->view('templates/footer');
  }

  public function ImportDataTunjangan()
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
          $tunjangan_anak  = $worksheet->getCellByColumnAndRow(5, $row)->getValue();
          $tunjangan_pangan  = $worksheet->getCellByColumnAndRow(6, $row)->getValue();
          $kelebihan_jam_mengajar  = $worksheet->getCellByColumnAndRow(7, $row)->getValue();
          $total_tunjangan  = $worksheet->getCellByColumnAndRow(8, $row)->getValue();

          $data[] = array(
            'bulan'          => $bulan,
            'nbm'            => $nbm,
            'nama_pegawai'      => $nama_pegawai,
            'nama_jabatan'        => $nama_jabatan,
            'jenis_kelamin'        => $jenis_kelamin,
            'tunjangan_anak'      => $tunjangan_anak,
            'tunjangan_pangan'      => $tunjangan_pangan,
            'kelebihan_jam_mengajar'      => $kelebihan_jam_mengajar,
            'total_tunjangan'      => $total_tunjangan,
          );
        }
      }

      $this->AllModel->import_batch_tunjangan('tbl_tunjangan', $data);

      $this->session->set_flashdata('success', 'Data Berhasil Diimport!');
      redirect('admin/DataTunjangan');
    } else {
      $this->session->set_flashdata('error', 'Data Berhasil Diimport!');
      redirect('admin/DataTunjangan');
    }
  }
}
