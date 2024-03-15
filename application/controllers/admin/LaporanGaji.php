<?php
class LaporanGaji extends CI_Controller
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
      'title' => 'Halaman Laporan Gaji',
    ];
    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar');
    $this->load->view('admin/laporan/index', $data);
    $this->load->view('templates/footer');
  }

  public function CetakLaporanGaji()
  {

    $data = [
      'title' => 'Halaman Data Absensi',
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

    $data['transport'] = $this->db->query("SELECT tbl_transport.*, tbl_pegawai.nama_pegawai, tbl_pegawai.jenis_kelamin, tbl_pegawai.jabatan
			FROM tbl_transport
			INNER JOIN tbl_pegawai ON tbl_transport.nbm= tbl_pegawai.nbm
			INNER JOIN tbl_jabatan ON tbl_pegawai.jabatan = tbl_jabatan.nama_jabatan
			WHERE tbl_transport.bulan='$bulantahun' ORDER BY tbl_pegawai.nama_pegawai ASC")->result();

    $this->load->view('admin/laporan/cetak', $data);
  }

  public function SlipGaji()
  {

    $data = [
      'title' => 'Halaman Slip Gaji',
      'gukar' => $this->AllModel->get_data_gukar()
    ];
    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar');
    $this->load->view('admin/laporan/slipgaji', $data);
    $this->load->view('templates/footer');
  }

  public function CetakSlipGaji()
  {
    // Retrieve input values from POST method
    $nama_pegawai = $this->input->post('nama_pegawai');
    $tahun = $this->input->post('tahun');
    $bulan = $this->input->post('bulan');

    // Concatenate $tahun and $bulan to form $bulantahun
    $bulantahun = $bulan . $tahun;

    // Initialize data array
    $data = [
      'title' => 'Halaman Slip Gaji',
      'cetak_slip_gaji' => $this->db->query("SELECT 
        tbl_pegawai.nbm, tbl_pegawai.nama_pegawai, tbl_pegawai.jenis_kelamin, tbl_jabatan.nama_jabatan, tbl_jabatan.tunjangan_jabatan, tbl_golongan.nama_golongan, tbl_golongan.tunjangan_golongan, tbl_transport.tunjangan_kehadiran, tbl_transport.jumlah_potongan, tbl_transport.total_tunjangan, tbl_ekstra.nama_ekstra, tbl_ekstra.tunjangan_ekstra, tbl_walikelas.tunjangan_walikelas,tbl_walikelas.tunjangan_walikelas, tbl_pegawai.jabatan_wali_kelas, tbl_pegawai.jabatan_guru_ekstra, tbl_pegawai.no_rekening
        FROM tbl_pegawai
        INNER JOIN tbl_transport ON tbl_transport.nbm = tbl_pegawai.nbm
        INNER JOIN tbl_jabatan ON tbl_jabatan.nama_jabatan = tbl_pegawai.jabatan
        INNER JOIN tbl_golongan ON tbl_golongan.nama_golongan = tbl_pegawai.golongan
        INNER JOIN tbl_ekstra ON tbl_ekstra.nama_ekstra = tbl_pegawai.jabatan_guru_ekstra
        INNER JOIN tbl_walikelas ON tbl_walikelas.nama_walikelas = tbl_pegawai.jabatan_wali_kelas
        WHERE tbl_transport.bulan = '$bulantahun' AND tbl_transport.nama_pegawai = '$nama_pegawai' 
    ")->result()
    ];

    // Load the view with data
    $this->load->view('admin/laporan/cetak_slipgaji', $data);
  }

}