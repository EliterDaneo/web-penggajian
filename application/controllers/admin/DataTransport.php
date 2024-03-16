<?php
defined('BASEPATH') or exit ('No direct script access allowed');
class DataTransport extends CI_Controller
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

    $data = [
      'title' => 'Halaman Data Absensi, Potongan Dan Tunjangan Gukar',
    ];

    if ((isset ($_GET['bulan']) && $_GET['bulan'] != '') && (isset ($_GET['tahun']) && $_GET['tahun'] != '')) {
      $bulan = $_GET['bulan'];
      $tahun = $_GET['tahun'];
      $bulantahun = $bulan . $tahun;
    } else {
      $bulan = date('m');
      $tahun = date('Y');
      $bulantahun = $bulan . $tahun;
    }

    $data['transport'] = $this->db->query("SELECT tbl_transport.*, tbl_pegawai.nama_pegawai, tbl_pegawai.jenis_kelamin, tbl_jabatan.nama_jabatan, tbl_jabatan.tunjangan_jabatan, tbl_golongan.nama_golongan, tbl_golongan.tunjangan_golongan, tbl_transport.tunjangan_kehadiran, tbl_transport.jumlah_potongan, tbl_transport.total_tunjangan, tbl_ekstra.nama_ekstra, tbl_ekstra.tunjangan_ekstra, tbl_walikelas.tunjangan_walikelas,tbl_walikelas.tunjangan_walikelas, tbl_pegawai.jabatan_wali_kelas, tbl_pegawai.jabatan_guru_ekstra, tbl_pegawai.no_rekening, tbl_transport.bpjs_kesehatan, tbl_transport.dplk, tbl_transport.angsuran_bank, tbl_transport.angsuran_koperasi_gukar, tbl_transport.simpanan_koperasi_gukar, tbl_transport.belanja_koperasi_gukar, tbl_transport.iuran_anggota_muhammadiyah, tbl_transport.bon_sekolah, tbl_transport.bon_koperasi_gukar, tbl_transport.sosial, tbl_transport.angsuran_bank_mini, tbl_transport.tabungan_bingkisan, tbl_transport.infaq_bulanan, tbl_transport.infaq_qurban, tbl_transport.tabungan_kurban, tbl_transport.tunjangan_anak, tbl_transport.tunjangan_pangan, tbl_transport.kelebihan_jam_mengajar
			FROM tbl_transport
			INNER JOIN tbl_pegawai ON tbl_transport.nbm= tbl_pegawai.nbm
			INNER JOIN tbl_jabatan ON tbl_pegawai.jabatan = tbl_jabatan.nama_jabatan
      INNER JOIN tbl_golongan ON tbl_golongan.nama_golongan = tbl_pegawai.golongan
      INNER JOIN tbl_ekstra ON tbl_ekstra.nama_ekstra = tbl_pegawai.jabatan_guru_ekstra
      INNER JOIN tbl_walikelas ON tbl_walikelas.nama_walikelas = tbl_pegawai.jabatan_wali_kelas
			WHERE tbl_transport.bulan='$bulantahun' ORDER BY tbl_pegawai.nama_pegawai ASC")->result();

    $this->load->view('templates/header', $data);
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
            'bulan' => $post['bulan'][$key],
            'nbm' => $post['nbm'][$key],
            'nama_jabatan' => $post['nama_jabatan'][$key],
            'jenis_kelamin' => $post['jenis_kelamin'][$key],
            'nama_pegawai' => $post['nama_pegawai'][$key],
            'tunjangan_kehadiran' => $post['tunjangan_kehadiran'][$key],
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
            'tunjangan_anak' => $post['tunjangan_anak'][$key],
            'tunjangan_pangan' => $post['tunjangan_pangan'][$key],
            'kelebihan_jam_mengajar' => $post['kelebihan_jam_mengajar'][$key],
          );
        }
      }

      $this->AllModel->insert_batch_transport('tbl_transport', $data);
      $this->session->set_flashdata('success', 'Data Berhasil Disimpan!');
      redirect('admin/DataTransport');
    }

    if ((isset ($_GET['bulan']) && $_GET['bulan'] != '') && (isset ($_GET['tahun']) && $_GET['tahun'] != '')) {
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
    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar');
    $this->load->view('admin/absensi/inputTransport', $data);
    $this->load->view('templates/footer');
  }

  public function ImportDataTransport()
  {
    if (isset ($_FILES["file"]["name"])) {
      // upload
      $file_tmp = $_FILES['file']['tmp_name'];
      $file_name = $_FILES['file']['name'];
      $file_size = $_FILES['file']['size'];
      $file_type = $_FILES['file']['type'];
      // move_uploaded_file($file_tmp,"uploads/".$file_name); // simpan filenya di folder uploads

      $object = PHPExcel_IOFactory::load($file_tmp);

      foreach ($object->getWorksheetIterator() as $worksheet) {

        $highestRow = $worksheet->getHighestRow();
        $highestColumn = $worksheet->getHighestColumn();

        for ($row = 3; $row <= $highestRow; $row++) {

          $bulan = $worksheet->getCellByColumnAndRow(0, $row)->getValue();
          $nbm = $worksheet->getCellByColumnAndRow(1, $row)->getValue();
          $nama_pegawai = $worksheet->getCellByColumnAndRow(2, $row)->getValue();
          $nama_jabatan = $worksheet->getCellByColumnAndRow(3, $row)->getValue();
          $jenis_kelamin = $worksheet->getCellByColumnAndRow(4, $row)->getValue();
          $tunjangan_kehadiran = $worksheet->getCellByColumnAndRow(5, $row)->getValue();
          $bpjs_kesehatan = $worksheet->getCellByColumnAndRow(6, $row)->getValue();
          $dplk = $worksheet->getCellByColumnAndRow(7, $row)->getValue();
          $angsuran_bank = $worksheet->getCellByColumnAndRow(8, $row)->getValue();
          $angsuran_koperasi_gukar = $worksheet->getCellByColumnAndRow(9, $row)->getValue();
          $simpanan_koperasi_gukar = $worksheet->getCellByColumnAndRow(10, $row)->getValue();
          $belanja_koperasi_gukar = $worksheet->getCellByColumnAndRow(11, $row)->getValue();
          $iuran_anggota_muhammadiyah = $worksheet->getCellByColumnAndRow(12, $row)->getValue();
          $bon_sekolah = $worksheet->getCellByColumnAndRow(13, $row)->getValue();
          $bon_koperasi_gukar = $worksheet->getCellByColumnAndRow(14, $row)->getValue();
          $sosial = $worksheet->getCellByColumnAndRow(15, $row)->getValue();
          $angsuran_bank_mini = $worksheet->getCellByColumnAndRow(16, $row)->getValue();
          $tabungan_bingkisan = $worksheet->getCellByColumnAndRow(17, $row)->getValue();
          $infaq_bulanan = $worksheet->getCellByColumnAndRow(18, $row)->getValue();
          $infaq_qurban = $worksheet->getCellByColumnAndRow(19, $row)->getValue();
          $tabungan_kurban = $worksheet->getCellByColumnAndRow(20, $row)->getValue();
          $tunjangan_anak = $worksheet->getCellByColumnAndRow(21, $row)->getValue();
          $tunjangan_pangan = $worksheet->getCellByColumnAndRow(22, $row)->getValue();
          $kelebihan_jam_mengajar = $worksheet->getCellByColumnAndRow(23, $row)->getValue();

          $data[] = array(
            'bulan' => $bulan,
            'nbm' => $nbm,
            'nama_pegawai' => $nama_pegawai,
            'nama_jabatan' => $nama_jabatan,
            'jenis_kelamin' => $jenis_kelamin,
            'tunjangan_kehadiran' => $tunjangan_kehadiran,
            'bpjs_kesehatan' => $bpjs_kesehatan,
            'dplk' => $dplk,
            'angsuran_bank' => $angsuran_bank,
            'angsuran_koperasi_gukar' => $angsuran_koperasi_gukar,
            'simpanan_koperasi_gukar' => $simpanan_koperasi_gukar,
            'belanja_koperasi_gukar' => $belanja_koperasi_gukar,
            'iuran_anggota_muhammadiyah' => $iuran_anggota_muhammadiyah,
            'bon_sekolah' => $bon_sekolah,
            'bon_koperasi_gukar' => $bon_koperasi_gukar,
            'sosial' => $sosial,
            'angsuran_bank_mini' => $angsuran_bank_mini,
            'tabungan_bingkisan' => $tabungan_bingkisan,
            'infaq_bulanan' => $infaq_bulanan,
            'infaq_qurban' => $infaq_qurban,
            'tabungan_kurban' => $tabungan_kurban,
            'tunjangan_anak' => $tunjangan_anak,
            'tunjangan_pangan' => $tunjangan_pangan,
            'kelebihan_jam_mengajar' => $kelebihan_jam_mengajar,
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