<?php
defined('BASEPATH') or exit('No direct script access allowed');
class DataGaji extends CI_Controller
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
      'title' => 'Halaman Data Gaji Gukar',
      'gaji' => $this->db->query("SELECT tbl_pegawai.nbm, tbl_pegawai.nama_pegawai, tbl_pegawai.jenis_kelamin, tbl_jabatan.nama_jabatan, tbl_jabatan.tunjangan_jabatan, tbl_golongan.nama_golongan, tbl_golongan.tunjangan_golongan, tbl_transport.tunjangan_kehadiran, tbl_transport.jumlah_potongan, tbl_transport.total_tunjangan, tbl_ekstra.nama_ekstra, tbl_ekstra.tunjangan_ekstra, tbl_walikelas.tunjangan_walikelas,tbl_walikelas.tunjangan_walikelas, tbl_pegawai.jabatan_wali_kelas, tbl_pegawai.jabatan_guru_ekstra
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
      'title' => 'Cetak Data Gaji Gukar',
      'cetak_gaji' => $this->db->query("SELECT tbl_pegawai.nbm, tbl_pegawai.nama_pegawai, tbl_pegawai.jenis_kelamin, tbl_jabatan.nama_jabatan, tbl_jabatan.tunjangan_jabatan, tbl_golongan.nama_golongan, tbl_golongan.tunjangan_golongan, tbl_transport.tunjangan_kehadiran, tbl_transport.jumlah_potongan, tbl_transport.total_tunjangan, tbl_ekstra.nama_ekstra, tbl_ekstra.tunjangan_ekstra, tbl_walikelas.tunjangan_walikelas,tbl_walikelas.tunjangan_walikelas, tbl_pegawai.jabatan_wali_kelas, tbl_pegawai.jabatan_guru_ekstra, tbl_pegawai.no_rekening
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
}