<?php
defined('BASEPATH') or exit ('No direct script access allowed');
class DataGaji extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();

    if ($this->session->userdata('role') != 4) {
      $this->session->set_flashdata('error', 'Anda Tidak Mempunyai Akses! Silahkan Login Sesuai Role!!!');
      redirect('welcome');
    }
  }

  public function index()
  {
    $nbm = $this->session->userdata('nbm');
    $data = [
      'title' => 'Halaman Data Gaji Gukar',
      'gaji' => $this->db->query("SELECT 
        tbl_pegawai.nbm, tbl_pegawai.nama_pegawai, tbl_pegawai.jenis_kelamin, tbl_jabatan.nama_jabatan, tbl_jabatan.tunjangan_jabatan, tbl_golongan.nama_golongan, tbl_golongan.tunjangan_golongan, tbl_transport.tunjangan_kehadiran, tbl_transport.tunjangan_pasangan, tbl_ekstra.nama_ekstra, tbl_ekstra.tunjangan_ekstra, tbl_walikelas.tunjangan_walikelas,tbl_walikelas.nama_walikelas, tbl_pegawai.jabatan_wali_kelas, tbl_pegawai.jabatan_guru_ekstra, tbl_pegawai.no_rekening, tbl_transport.bpjs_kesehatan, tbl_transport.dplk, tbl_transport.angsuran_bank, tbl_transport.angsuran_koperasi_gukar, tbl_transport.simpanan_koperasi_gukar, tbl_transport.belanja_koperasi_gukar, tbl_transport.iuran_anggota_muhammadiyah, tbl_transport.bon_sekolah, tbl_transport.bon_koperasi_gukar, tbl_transport.sosial, tbl_transport.angsuran_bank_mini, tbl_transport.tabungan_bingkisan, tbl_transport.infaq_bulanan, tbl_transport.infaq_qurban, tbl_transport.tabungan_kurban, tbl_transport.tunjangan_anak, tbl_transport.tunjangan_pangan, tbl_pegawai.kelebihan_jam, tbl_transport.id, tbl_transport.bulan,tbl_pegawai.aspirasi, tbl_transport.belanja_wajib_koperasi, tbl_transport.belanja_wajib_bc, tbl_pegawai.tmt
      FROM tbl_pegawai
      INNER JOIN tbl_transport ON tbl_transport.nbm = tbl_pegawai.nbm
      INNER JOIN tbl_jabatan ON tbl_jabatan.nama_jabatan = tbl_pegawai.jabatan
      INNER JOIN tbl_golongan ON tbl_golongan.nama_golongan = tbl_pegawai.golongan
      INNER JOIN tbl_ekstra ON tbl_ekstra.nama_ekstra = tbl_pegawai.jabatan_guru_ekstra
      INNER JOIN tbl_walikelas ON tbl_walikelas.nama_walikelas = tbl_pegawai.jabatan_wali_kelas
      WHERE tbl_transport.nbm = '$nbm'
      ORDER BY tbl_transport.bulan DESC")->result()
    ];

    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar');
    $this->load->view('gukar/index', $data);
    $this->load->view('templates/footer');
  }

  public function CetakGaji($id)
  {
    $data = [
      'title' => 'Halaman Data Gaji Gukar',
      'cetak_slip_gaji' => $this->db->query("SELECT 
        tbl_pegawai.nbm, tbl_pegawai.nama_pegawai, tbl_pegawai.jenis_kelamin, tbl_jabatan.nama_jabatan, tbl_jabatan.tunjangan_jabatan, tbl_golongan.nama_golongan, tbl_golongan.tunjangan_golongan, tbl_transport.tunjangan_kehadiran, tbl_transport.tunjangan_pasangan, tbl_ekstra.nama_ekstra, tbl_ekstra.tunjangan_ekstra, tbl_walikelas.tunjangan_walikelas,tbl_walikelas.nama_walikelas, tbl_pegawai.jabatan_wali_kelas, tbl_pegawai.jabatan_guru_ekstra, tbl_pegawai.no_rekening, tbl_transport.bpjs_kesehatan, tbl_transport.dplk, tbl_transport.angsuran_bank, tbl_transport.angsuran_koperasi_gukar, tbl_transport.simpanan_koperasi_gukar, tbl_transport.belanja_koperasi_gukar, tbl_transport.iuran_anggota_muhammadiyah, tbl_transport.bon_sekolah, tbl_transport.bon_koperasi_gukar, tbl_transport.sosial, tbl_transport.angsuran_bank_mini, tbl_transport.tabungan_bingkisan, tbl_transport.infaq_bulanan, tbl_transport.infaq_qurban, tbl_transport.tabungan_kurban, tbl_transport.tunjangan_anak, tbl_transport.tunjangan_pangan, tbl_pegawai.kelebihan_jam, tbl_transport.id, tbl_transport.bulan,tbl_pegawai.aspirasi, tbl_transport.belanja_wajib_koperasi, tbl_transport.belanja_wajib_bc, tbl_pegawai.tmt
      FROM tbl_pegawai
      INNER JOIN tbl_transport ON tbl_transport.nbm = tbl_pegawai.nbm
      INNER JOIN tbl_jabatan ON tbl_jabatan.nama_jabatan = tbl_pegawai.jabatan
      INNER JOIN tbl_golongan ON tbl_golongan.nama_golongan = tbl_pegawai.golongan
      INNER JOIN tbl_ekstra ON tbl_ekstra.nama_ekstra = tbl_pegawai.jabatan_guru_ekstra
      INNER JOIN tbl_walikelas ON tbl_walikelas.nama_walikelas = tbl_pegawai.jabatan_wali_kelas
      WHERE tbl_transport.id = '$id'")->result()
    ];

    $this->load->view('gukar/cetak', $data);
  }
}