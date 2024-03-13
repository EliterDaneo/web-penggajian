<?php
defined('BASEPATH') or exit('No direct script access allowed');
class DataPotongan extends CI_Controller
{
  public function index()
  {
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
      'title' => 'Halaman Data Potongan',
    ];

    $data['potongan'] = $this->db->query("SELECT tbl_potongan.*, tbl_pegawai.nama_pegawai, tbl_pegawai.jenis_kelamin, tbl_pegawai.jabatan
			FROM tbl_potongan
			INNER JOIN tbl_pegawai ON tbl_potongan.nbm = tbl_pegawai.nbm
			INNER JOIN tbl_jabatan ON tbl_pegawai.jabatan = tbl_jabatan.nama_jabatan
			WHERE tbl_potongan.bulan = '$bulantahun' ORDER BY tbl_pegawai.nama_pegawai ASC")->result();


    $this->load->view('templates/header');
    $this->load->view('templates/sidebar');
    $this->load->view('admin/potongan/index', $data);
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
            'nama_pagawai'        => $post['nama_pagawai'][$key],
            'bpjs_kesehatan' => $post['bpjs_kesehatan'][$key],
            'dplk' => $post['dplk'][$key],
            'angsuran_bank' => $post['angsuran_bank'][$key],
            'angsuran_koperasi_gukar' => $post['angsuran_koperasi_gukar'][$key],
            'simpanan_koperasi_gukar' => $post['simpanan_koperasi_gukar'][$key],
            'belanja_koperasi_gukar' => $post['belanja_koperasi_gukar'][$key],
            'iuran_anggota_muhammadiyah' => $post['iuran_anggota_muhammadiyah'][$key],
            'bon_sekolah' => $post['bon_sekolah'][$key],
            'bon_koperasi_gukar' => $post['bon_koperasi_gukar'][$key],
            'sosial' => $post['sosial'][$key],
            'angsuran_bank_mini' => $post['angsuran_bank_mini'][$key],
            'tabungan_bingkisan' => $post['tabungan_bingkisan'][$key],
            'infaq_bulanan' => $post['infaq_bulanan'][$key],
            'infaq_qurban' => $post['infaq_qurban'][$key],
            'tabungan_kurban' => $post['tabungan_kurban'][$key],
            'jumlah_potongan' => $post['jumlah_potongan'][$key],
          );
        }
      }

      $this->AllModel->insert_batch_potongan('tbl_potongan', $data);
      $this->session->set_flashdata('success', 'Data Berhasil Disimpan!');
      redirect('admin/DataPotongan');
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
      'title' => 'Halaman Input Data Potongan',
      'input_potongan' => $this->db->query("SELECT tbl_pegawai.*, tbl_jabatan.nama_jabatan FROM tbl_pegawai 
      INNER JOIN tbl_jabatan ON tbl_pegawai.jabatan = tbl_jabatan.nama_jabatan
      WHERE NOT EXISTS (SELECT * FROM tbl_potongan WHERE bulan = '$bulantahun' AND tbl_pegawai.nbm = tbl_potongan.nbm )
      ORDER BY tbl_pegawai.nama_pegawai ASC
      ")->result()
    ];
    $this->load->view('templates/header');
    $this->load->view('templates/sidebar');
    $this->load->view('admin/potongan/inputPotongan', $data);
    $this->load->view('templates/footer');
  }

  public function ImportDataPotongan()
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
          $nama_pagawai  = $worksheet->getCellByColumnAndRow(2, $row)->getValue();
          $nama_jabatan    = $worksheet->getCellByColumnAndRow(3, $row)->getValue();
          $jenis_kelamin    = $worksheet->getCellByColumnAndRow(4, $row)->getValue();
          $bpjs_kesehatan  = $worksheet->getCellByColumnAndRow(5, $row)->getValue();
          $dplk  = $worksheet->getCellByColumnAndRow(6, $row)->getValue();
          $angsuran_bank  = $worksheet->getCellByColumnAndRow(7, $row)->getValue();
          $angsuran_koperasi_gukar  = $worksheet->getCellByColumnAndRow(8, $row)->getValue();
          $simpanan_koperasi_gukar  = $worksheet->getCellByColumnAndRow(9, $row)->getValue();
          $belanja_koperasi_gukar  = $worksheet->getCellByColumnAndRow(10, $row)->getValue();
          $iuran_anggota_muhammadiyah  = $worksheet->getCellByColumnAndRow(11, $row)->getValue();
          $bon_sekolah  = $worksheet->getCellByColumnAndRow(12, $row)->getValue();
          $bon_koperasi_gukar  = $worksheet->getCellByColumnAndRow(13, $row)->getValue();
          $sosial  = $worksheet->getCellByColumnAndRow(14, $row)->getValue();
          $angsuran_bank_mini  = $worksheet->getCellByColumnAndRow(15, $row)->getValue();
          $tabungan_bingkisan  = $worksheet->getCellByColumnAndRow(16, $row)->getValue();
          $infaq_bulanan  = $worksheet->getCellByColumnAndRow(17, $row)->getValue();
          $infaq_qurban  = $worksheet->getCellByColumnAndRow(18, $row)->getValue();
          $tabungan_kurban  = $worksheet->getCellByColumnAndRow(19, $row)->getValue();
          $jumlah_potongan  = $worksheet->getCellByColumnAndRow(20, $row)->getValue();

          $data[] = array(
            'bulan'          => $bulan,
            'nbm'            => $nbm,
            'nama_pagawai'      => $nama_pagawai,
            'nama_jabatan'        => $nama_jabatan,
            'jenis_kelamin'        => $jenis_kelamin,
            'bpjs_kesehatan'      => $bpjs_kesehatan,
            'dplk'      => $dplk,
            'angsuran_bank'      => $angsuran_bank,
            'angsuran_koperasi_gukar'      => $angsuran_koperasi_gukar,
            'simpanan_koperasi_gukar'      => $simpanan_koperasi_gukar,
            'belanja_koperasi_gukar'      => $belanja_koperasi_gukar,
            'iuran_anggota_muhammadiyah'      => $iuran_anggota_muhammadiyah,
            'bon_sekolah'      => $bon_sekolah,
            'bon_koperasi_gukar'      => $bon_koperasi_gukar,
            'sosial'      => $sosial,
            'angsuran_bank_mini'      => $angsuran_bank_mini,
            'tabungan_bingkisan'      => $tabungan_bingkisan,
            'infaq_bulanan'      => $infaq_bulanan,
            'infaq_qurban'      => $infaq_qurban,
            'tabungan_kurban'      => $tabungan_kurban,
            'jumlah_potongan'      => $jumlah_potongan,
          );
        }
      }

      $this->AllModel->import_batch_potongan('tbl_potongan', $data);

      $this->session->set_flashdata('success', 'Data Berhasil Diimport!');
      redirect('admin/DataPotongan');
    } else {
      $this->session->set_flashdata('error', 'Data Berhasil Diimport!');
      redirect('admin/DataPotongan');
    }
  }
}