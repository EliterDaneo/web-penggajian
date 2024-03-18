<?php
defined('BASEPATH') or exit ('No direct script access allowed');
class DataGaji extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();

    $role = $this->session->userdata('role');

    if ($role != 1 && $role != 3) { // Check if user role is not 1 or 2
      $this->session->set_flashdata('error', 'Anda Tidak Mempunyai Akses! Silahkan Login Sesuai Role!!!'); // Set flashdata error message
      $this->session->sess_destroy(); //
      redirect('Error'); // Redirect to welcome page
    }
  }

  public function index()
  {
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
      'title' => 'Halaman Data Gaji Gukar',
      'gaji' => $this->db->query("SELECT 
        tbl_pegawai.nbm, tbl_pegawai.nama_pegawai, tbl_pegawai.jenis_kelamin, tbl_jabatan.nama_jabatan, tbl_jabatan.tunjangan_jabatan, tbl_golongan.nama_golongan, tbl_golongan.tunjangan_golongan, tbl_transport.tunjangan_kehadiran, tbl_transport.tunjangan_pasangan, tbl_ekstra.nama_ekstra, tbl_ekstra.tunjangan_ekstra, tbl_walikelas.tunjangan_walikelas,tbl_walikelas.tunjangan_walikelas, tbl_pegawai.jabatan_wali_kelas, tbl_pegawai.jabatan_guru_ekstra, tbl_pegawai.no_rekening, tbl_transport.bpjs_kesehatan, tbl_transport.dplk, tbl_transport.angsuran_bank, tbl_transport.angsuran_koperasi_gukar, tbl_transport.simpanan_koperasi_gukar, tbl_transport.belanja_koperasi_gukar, tbl_transport.iuran_anggota_muhammadiyah, tbl_transport.bon_sekolah, tbl_transport.bon_koperasi_gukar, tbl_transport.sosial, tbl_transport.angsuran_bank_mini, tbl_transport.tabungan_bingkisan, tbl_transport.infaq_bulanan, tbl_transport.infaq_qurban, tbl_transport.tabungan_kurban, tbl_transport.tunjangan_anak, tbl_transport.tunjangan_pangan, tbl_pegawai.kelebihan_jam, tbl_pegawai.tmt
      FROM tbl_pegawai
      INNER JOIN tbl_transport ON tbl_transport.nbm = tbl_pegawai.nbm
      INNER JOIN tbl_jabatan ON tbl_jabatan.nama_jabatan = tbl_pegawai.jabatan
      INNER JOIN tbl_golongan ON tbl_golongan.nama_golongan = tbl_pegawai.golongan
      INNER JOIN tbl_ekstra ON tbl_ekstra.nama_ekstra = tbl_pegawai.jabatan_guru_ekstra
      INNER JOIN tbl_walikelas ON tbl_walikelas.nama_walikelas = tbl_pegawai.jabatan_wali_kelas
      WHERE tbl_transport.bulan = '$bulantahun'
      ORDER BY tbl_pegawai.nama_pegawai ASC ")->result()
    ];
    // , tbl_jabatan.nama_jabatan = tbl_pegawai.jabatan_wali_kelas, tbl_jabatan.nama_jabatan = tbl_pegawai.jabatan_guru_ekstra
    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar');
    $this->load->view('admin/gaji/index', $data);
    $this->load->view('templates/footer');
  }

  public function CetakGaji()
  {
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
      'title' => 'Cetak Data Gaji Gukar',
      'cetak_gaji' => $this->db->query("SELECT 
        tbl_pegawai.nbm, tbl_pegawai.nama_pegawai, tbl_pegawai.jenis_kelamin, tbl_jabatan.nama_jabatan, tbl_jabatan.tunjangan_jabatan, tbl_golongan.nama_golongan, tbl_golongan.tunjangan_golongan, tbl_transport.tunjangan_kehadiran, tbl_transport.tunjangan_pasangan, tbl_ekstra.nama_ekstra, tbl_ekstra.tunjangan_ekstra, tbl_walikelas.tunjangan_walikelas,tbl_walikelas.tunjangan_walikelas, tbl_pegawai.jabatan_wali_kelas, tbl_pegawai.jabatan_guru_ekstra, tbl_pegawai.no_rekening, tbl_transport.bpjs_kesehatan, tbl_transport.dplk, tbl_transport.angsuran_bank, tbl_transport.angsuran_koperasi_gukar, tbl_transport.simpanan_koperasi_gukar, tbl_transport.belanja_koperasi_gukar, tbl_transport.iuran_anggota_muhammadiyah, tbl_transport.bon_sekolah, tbl_transport.bon_koperasi_gukar, tbl_transport.sosial, tbl_transport.angsuran_bank_mini, tbl_transport.tabungan_bingkisan, tbl_transport.infaq_bulanan, tbl_transport.infaq_qurban, tbl_transport.tabungan_kurban, tbl_transport.tunjangan_anak, tbl_transport.tunjangan_pangan, tbl_pegawai.kelebihan_jam
      FROM tbl_pegawai
        INNER JOIN tbl_transport ON tbl_transport.nbm = tbl_pegawai.nbm
        INNER JOIN tbl_jabatan ON tbl_jabatan.nama_jabatan = tbl_pegawai.jabatan
        INNER JOIN tbl_golongan ON tbl_golongan.nama_golongan = tbl_pegawai.golongan
        INNER JOIN tbl_ekstra ON tbl_ekstra.nama_ekstra = tbl_pegawai.jabatan_guru_ekstra
        INNER JOIN tbl_walikelas ON tbl_walikelas.nama_walikelas = tbl_pegawai.jabatan_wali_kelas
      WHERE tbl_transport.bulan = '$bulantahun'
      ORDER BY tbl_pegawai.nama_pegawai ASC ")->result()
    ];

    $this->load->view('admin/gaji/cetak', $data);
  }

  public function ExportExcel()
  {
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
      'cetak_gaji' => $this->db->query("SELECT 
        tbl_pegawai.nbm, tbl_pegawai.nama_pegawai, tbl_pegawai.jenis_kelamin, tbl_jabatan.nama_jabatan, tbl_jabatan.tunjangan_jabatan, tbl_golongan.nama_golongan, tbl_golongan.tunjangan_golongan, tbl_transport.tunjangan_kehadiran, tbl_transport.tunjangan_pasangan, tbl_ekstra.nama_ekstra, tbl_ekstra.tunjangan_ekstra, tbl_walikelas.tunjangan_walikelas,tbl_walikelas.tunjangan_walikelas, tbl_pegawai.jabatan_wali_kelas, tbl_pegawai.jabatan_guru_ekstra, tbl_pegawai.no_rekening, tbl_transport.bpjs_kesehatan, tbl_transport.dplk, tbl_transport.angsuran_bank, tbl_transport.angsuran_koperasi_gukar, tbl_transport.simpanan_koperasi_gukar, tbl_transport.belanja_koperasi_gukar, tbl_transport.iuran_anggota_muhammadiyah, tbl_transport.bon_sekolah, tbl_transport.bon_koperasi_gukar, tbl_transport.sosial, tbl_transport.angsuran_bank_mini, tbl_transport.tabungan_bingkisan, tbl_transport.infaq_bulanan, tbl_transport.infaq_qurban, tbl_transport.tabungan_kurban, tbl_transport.tunjangan_anak, tbl_transport.tunjangan_pangan, tbl_pegawai.kelebihan_jam
        FROM tbl_pegawai
        INNER JOIN tbl_transport ON tbl_transport.nbm = tbl_pegawai.nbm
        INNER JOIN tbl_jabatan ON tbl_jabatan.nama_jabatan = tbl_pegawai.jabatan
        INNER JOIN tbl_golongan ON tbl_golongan.nama_golongan = tbl_pegawai.golongan
        INNER JOIN tbl_ekstra ON tbl_ekstra.nama_ekstra = tbl_pegawai.jabatan_guru_ekstra
        INNER JOIN tbl_walikelas ON tbl_walikelas.nama_walikelas = tbl_pegawai.jabatan_wali_kelas
        WHERE tbl_transport.bulan = '$bulantahun'
        ORDER BY tbl_pegawai.nama_pegawai ASC ")->result()
    ];

    $this->load->library('PHPExcel');

    $objPHPExcel = new PHPExcel();

    //tambah data excel
    $objPHPExcel->setActiveSheetIndex(0);
    $objPHPExcel->getActiveSheet()->setCellValue('A1', 'Bulan');
    $objPHPExcel->getActiveSheet()->setCellValue('B1', 'NBM');
    $objPHPExcel->getActiveSheet()->setCellValue('C1', 'Nama Pegawai');
    $objPHPExcel->getActiveSheet()->setCellValue('D1', 'Jabatan');
    $objPHPExcel->getActiveSheet()->setCellValue('E1', 'Golongan');
    $objPHPExcel->getActiveSheet()->setCellValue('F1', 'Jenis Kelamin');
    $objPHPExcel->getActiveSheet()->setCellValue('G1', 'TJ. Golongan');
    $objPHPExcel->getActiveSheet()->setCellValue('H1', 'TJ. Jabatan');
    $objPHPExcel->getActiveSheet()->setCellValue('I1', 'TJ. Jabatan Wali Kelas');
    $objPHPExcel->getActiveSheet()->setCellValue('J1', 'TJ. Jabatan Guru Ekstra');
    $objPHPExcel->getActiveSheet()->setCellValue('K1', 'TJ. Kehadiran ');
    $objPHPExcel->getActiveSheet()->setCellValue('L1', 'TJ. Anka');
    $objPHPExcel->getActiveSheet()->setCellValue('M1', 'TJ. Pangan');
    $objPHPExcel->getActiveSheet()->setCellValue('N1', 'TJ. Kelebihan Jam');
    $objPHPExcel->getActiveSheet()->setCellValue('O1', 'Potongan');
    $objPHPExcel->getActiveSheet()->setCellValue('P1', 'Total Terima');
    $objPHPExcel->getActiveSheet()->setCellValue('Q1', 'No Rekening');

    $row = 2;
    foreach ($data['cetak_gaji'] as $gaji) {
      $objPHPExcel->getActiveSheet()->setCellValue('A' . $row, $bulan . $tahun);
      $objPHPExcel->getActiveSheet()->setCellValue('B' . $row, $gaji->nbm);
      $objPHPExcel->getActiveSheet()->setCellValue('C' . $row, $gaji->nama_pegawai);
      $objPHPExcel->getActiveSheet()->setCellValue('D' . $row, $gaji->nama_jabatan);
      $objPHPExcel->getActiveSheet()->setCellValue('E' . $row, $gaji->nama_golongan);
      $objPHPExcel->getActiveSheet()->setCellValue('F' . $row, $gaji->jenis_kelamin);
      $objPHPExcel->getActiveSheet()->setCellValue('G' . $row, $gaji->tunjangan_golongan);
      $objPHPExcel->getActiveSheet()->setCellValue('H' . $row, $gaji->tunjangan_jabatan);
      $objPHPExcel->getActiveSheet()->setCellValue('I' . $row, $gaji->tunjangan_walikelas);
      $objPHPExcel->getActiveSheet()->setCellValue('J' . $row, $gaji->tunjangan_ekstra);
      $objPHPExcel->getActiveSheet()->setCellValue('K' . $row, $gaji->tunjangan_kehadiran);
      $objPHPExcel->getActiveSheet()->setCellValue('L' . $row, $gaji->tunjangan_anak);
      $objPHPExcel->getActiveSheet()->setCellValue('M' . $row, $gaji->tunjangan_pangan);
      $objPHPExcel->getActiveSheet()->setCellValue('N' . $row, $gaji->kelebihan_jam * 25000);
      $objPHPExcel->getActiveSheet()->setCellValue('O' . $row, $gaji->tabungan_kurban + $gaji->bpjs_kesehatan + $gaji->dplk + $gaji->angsuran_bank + $gaji->angsuran_koperasi_gukar + $gaji->simpanan_koperasi_gukar + $gaji->belanja_koperasi_gukar + $gaji->iuran_anggota_muhammadiyah + $gaji->bon_sekolah + $gaji->bon_koperasi_gukar + $gaji->sosial + $gaji->angsuran_bank_mini + $gaji->tabungan_bingkisan + $gaji->infaq_bulanan + $gaji->infaq_qurban);
      $objPHPExcel->getActiveSheet()->setCellValue('P' . $row, ($gaji->tunjangan_anak + $gaji->tunjangan_pangan + $gaji->tunjangan_golongan + $gaji->tunjangan_jabatan + $gaji->tunjangan_walikelas + $gaji->tunjangan_ekstra + $gaji->tunjangan_kehadiran) + ($gaji->kelebihan_jam * 25000) - ($gaji->tabungan_kurban + $gaji->bpjs_kesehatan + $gaji->dplk + $gaji->angsuran_bank + $gaji->angsuran_koperasi_gukar + $gaji->simpanan_koperasi_gukar + $gaji->belanja_koperasi_gukar + $gaji->iuran_anggota_muhammadiyah + $gaji->bon_sekolah + $gaji->bon_koperasi_gukar + $gaji->sosial + $gaji->angsuran_bank_mini + $gaji->tabungan_bingkisan + $gaji->infaq_bulanan + $gaji->infaq_qurban));
      $objPHPExcel->getActiveSheet()->setCellValue('Q' . $row, $gaji->no_rekening);

      $row++;
    }

    $objPHPExcel->setActiveSheetIndex(0);

    // Redirect output to a client’s web browser (Excel2007)
    header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
    header('Content-Disposition: attachment;filename="DataGaji.xlsx"');
    header('Cache-Control: max-age=0');
    // If you're serving to IE 9
    header('Cache-Control: max-age=1');

    // If you're serving to IE over SSL
    header('Expires: Mon, 26 Jul 1997 05:00:00 GMT'); // Date in the past
    header('Last-Modified: ' . gmdate('D, d M Y H:i:s') . ' GMT'); // always modified
    header('Cache-Control: cache, must-revalidate'); // HTTP/1.1
    header('Pragma: public'); // HTTP/1.0

    $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
    $objWriter->save('php://output');
  }

}