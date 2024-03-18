<?php
class LaporanGaji extends CI_Controller
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

    $tahun = $this->input->post('tahun');
    $bulan = $this->input->post('bulan');
    $bulantahun = $bulan . $tahun;

    $data['transport'] = $this->db->query("SELECT tbl_transport.*, tbl_pegawai.nbm, tbl_pegawai.nama_pegawai, tbl_pegawai.jenis_kelamin, tbl_jabatan.nama_jabatan, tbl_jabatan.tunjangan_jabatan, tbl_golongan.nama_golongan, tbl_golongan.tunjangan_golongan, tbl_transport.tunjangan_kehadiran, tbl_transport.jumlah_potongan, tbl_transport.tunjangan_pasangan, tbl_ekstra.nama_ekstra, tbl_ekstra.tunjangan_ekstra, tbl_walikelas.tunjangan_walikelas,tbl_walikelas.tunjangan_walikelas, tbl_pegawai.jabatan_wali_kelas, tbl_pegawai.jabatan_guru_ekstra, tbl_pegawai.no_rekening, tbl_transport.bpjs_kesehatan, tbl_transport.dplk, tbl_transport.angsuran_bank, tbl_transport.angsuran_koperasi_gukar, tbl_transport.simpanan_koperasi_gukar, tbl_transport.belanja_koperasi_gukar, tbl_transport.iuran_anggota_muhammadiyah, tbl_transport.bon_sekolah, tbl_transport.bon_koperasi_gukar, tbl_transport.sosial, tbl_transport.angsuran_bank_mini, tbl_transport.tabungan_bingkisan, tbl_transport.infaq_bulanan, tbl_transport.infaq_qurban, tbl_transport.tabungan_kurban, tbl_transport.tunjangan_anak, tbl_transport.tunjangan_pangan, tbl_pegawai.kelebihan_jam, tbl_pegawai.tmt
			FROM tbl_transport
			INNER JOIN tbl_pegawai ON tbl_transport.nbm= tbl_pegawai.nbm
			INNER JOIN tbl_jabatan ON tbl_pegawai.jabatan = tbl_jabatan.nama_jabatan
      INNER JOIN tbl_golongan ON tbl_golongan.nama_golongan = tbl_pegawai.golongan
      INNER JOIN tbl_ekstra ON tbl_ekstra.nama_ekstra = tbl_pegawai.jabatan_guru_ekstra
      INNER JOIN tbl_walikelas ON tbl_walikelas.nama_walikelas = tbl_pegawai.jabatan_wali_kelas
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
        tbl_pegawai.nbm, tbl_pegawai.nama_pegawai, tbl_pegawai.jenis_kelamin, tbl_jabatan.nama_jabatan, tbl_jabatan.tunjangan_jabatan, tbl_golongan.nama_golongan, tbl_golongan.tunjangan_golongan, tbl_transport.tunjangan_kehadiran, tbl_transport.jumlah_potongan, tbl_transport.tunjangan_pasangan, tbl_ekstra.nama_ekstra, tbl_ekstra.tunjangan_ekstra, tbl_walikelas.tunjangan_walikelas,tbl_walikelas.tunjangan_walikelas, tbl_pegawai.jabatan_wali_kelas, tbl_pegawai.jabatan_guru_ekstra, tbl_pegawai.no_rekening, tbl_transport.bpjs_kesehatan, tbl_transport.dplk, tbl_transport.angsuran_bank, tbl_transport.angsuran_koperasi_gukar, tbl_transport.simpanan_koperasi_gukar, tbl_transport.belanja_koperasi_gukar, tbl_transport.iuran_anggota_muhammadiyah, tbl_transport.bon_sekolah, tbl_transport.bon_koperasi_gukar, tbl_transport.sosial, tbl_transport.angsuran_bank_mini, tbl_transport.tabungan_bingkisan, tbl_transport.infaq_bulanan, tbl_transport.infaq_qurban, tbl_transport.tabungan_kurban, tbl_transport.tunjangan_anak, tbl_transport.tunjangan_pangan, tbl_pegawai.kelebihan_jam, tbl_transport.bulan, tbl_pegawai.tmt
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

  public function ExportLaporanGaji()
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

    $data['cetak_gaji'] = $this->db->query("SELECT tbl_transport.*, tbl_pegawai.nbm, tbl_pegawai.nama_pegawai, tbl_pegawai.jenis_kelamin, tbl_jabatan.nama_jabatan, tbl_jabatan.tunjangan_jabatan, tbl_golongan.nama_golongan, tbl_golongan.tunjangan_golongan, tbl_transport.tunjangan_kehadiran, tbl_transport.jumlah_potongan, tbl_transport.tunjangan_pasangan, tbl_ekstra.nama_ekstra, tbl_ekstra.tunjangan_ekstra, tbl_walikelas.tunjangan_walikelas, tbl_pegawai.jabatan_wali_kelas, tbl_pegawai.jabatan_guru_ekstra, tbl_pegawai.no_rekening, tbl_transport.bpjs_kesehatan, tbl_transport.dplk, tbl_transport.angsuran_bank, tbl_transport.angsuran_koperasi_gukar, tbl_transport.simpanan_koperasi_gukar, tbl_transport.belanja_koperasi_gukar, tbl_transport.iuran_anggota_muhammadiyah, tbl_transport.bon_sekolah, tbl_transport.bon_koperasi_gukar, tbl_transport.sosial, tbl_transport.angsuran_bank_mini, tbl_transport.tabungan_bingkisan, tbl_transport.infaq_bulanan, tbl_transport.infaq_qurban, tbl_transport.tabungan_kurban, tbl_transport.tunjangan_anak, tbl_transport.tunjangan_pangan, tbl_pegawai.kelebihan_jam, tbl_transport.bulan, tbl_pegawai.tmt
            FROM tbl_transport
            INNER JOIN tbl_pegawai ON tbl_transport.nbm = tbl_pegawai.nbm
            INNER JOIN tbl_jabatan ON tbl_pegawai.jabatan = tbl_jabatan.nama_jabatan
            INNER JOIN tbl_golongan ON tbl_golongan.nama_golongan = tbl_pegawai.golongan
            INNER JOIN tbl_ekstra ON tbl_ekstra.nama_ekstra = tbl_pegawai.jabatan_guru_ekstra
            INNER JOIN tbl_walikelas ON tbl_walikelas.nama_walikelas = tbl_pegawai.jabatan_wali_kelas
            WHERE tbl_transport.bulan = '$bulantahun' ORDER BY tbl_pegawai.nama_pegawai ASC")->result();

    $this->load->library('PHPExcel');

    $objPHPExcel = new PHPExcel();

    // Add data to excel
    $objPHPExcel->setActiveSheetIndex(0);
    $objPHPExcel->getActiveSheet()->setCellValue('A1', 'NBM');
    $objPHPExcel->getActiveSheet()->setCellValue('B1', 'Nama Pegawai');
    $objPHPExcel->getActiveSheet()->setCellValue('C1', 'Jabatan');
    $objPHPExcel->getActiveSheet()->setCellValue('D1', 'Jenis Kelamin');
    $objPHPExcel->getActiveSheet()->setCellValue('E1', 'Gaji Pokok');
    $objPHPExcel->getActiveSheet()->setCellValue('F1', 'TMT Masuk');
    $objPHPExcel->getActiveSheet()->setCellValue('G1', 'TJ. Jabatan');
    $objPHPExcel->getActiveSheet()->setCellValue('H1', 'TJ. Jabatan Wali Kelas');
    $objPHPExcel->getActiveSheet()->setCellValue('I1', 'TJ. Jabatan Guru Ekstra');
    $objPHPExcel->getActiveSheet()->setCellValue('J1', 'BPJS');
    $objPHPExcel->getActiveSheet()->setCellValue('K1', 'DPLK');
    $objPHPExcel->getActiveSheet()->setCellValue('L1', 'A. Bank');
    $objPHPExcel->getActiveSheet()->setCellValue('M1', 'A. Koperasi Gukar');
    $objPHPExcel->getActiveSheet()->setCellValue('N1', 'S. Koperasi Gukar');
    $objPHPExcel->getActiveSheet()->setCellValue('O1', 'B. Koperasi Gukar');
    $objPHPExcel->getActiveSheet()->setCellValue('P1', 'I. Anggota Muhammadiyah');
    $objPHPExcel->getActiveSheet()->setCellValue('Q1', 'Bon Sekolah');
    $objPHPExcel->getActiveSheet()->setCellValue('R1', 'Bon Koperasi');
    $objPHPExcel->getActiveSheet()->setCellValue('S1', 'Sosial');
    $objPHPExcel->getActiveSheet()->setCellValue('T1', 'A. Bank Mini');
    $objPHPExcel->getActiveSheet()->setCellValue('U1', 'T. Bingkisan');
    $objPHPExcel->getActiveSheet()->setCellValue('V1', 'Infaq Bulanan');
    $objPHPExcel->getActiveSheet()->setCellValue('W1', 'Infaq Qurban');
    $objPHPExcel->getActiveSheet()->setCellValue('X1', 'Tunjangan Anak');
    $objPHPExcel->getActiveSheet()->setCellValue('Y1', 'Tunjangan Pangan');
    $objPHPExcel->getActiveSheet()->setCellValue('Z1', 'Kelebihan Jam');
    $objPHPExcel->getActiveSheet()->setCellValue('AA1', 'Tunjangan Transportasi');
    $objPHPExcel->getActiveSheet()->setCellValue('AB1', 'Total Tunjangan');
    $objPHPExcel->getActiveSheet()->setCellValue('AC1', 'Total Potongan');
    $objPHPExcel->getActiveSheet()->setCellValue('AD1', 'Total Diterima');

    $row = 2;
    foreach ($data['cetak_gaji'] as $gaji) {
      $objPHPExcel->getActiveSheet()->setCellValue('A' . $row, $gaji->nbm);
      $objPHPExcel->getActiveSheet()->setCellValue('B' . $row, $gaji->nama_pegawai);
      $objPHPExcel->getActiveSheet()->setCellValue('C' . $row, $gaji->nama_jabatan);
      $objPHPExcel->getActiveSheet()->setCellValue('D' . $row, $gaji->jenis_kelamin);
      $objPHPExcel->getActiveSheet()->setCellValue('E' . $row, $gaji->tunjangan_golongan);
      $objPHPExcel->getActiveSheet()->setCellValue('F' . $row, $gaji->tmt * 50000);
      $objPHPExcel->getActiveSheet()->setCellValue('G' . $row, $gaji->tunjangan_jabatan);
      $objPHPExcel->getActiveSheet()->setCellValue('H' . $row, $gaji->tunjangan_walikelas);
      $objPHPExcel->getActiveSheet()->setCellValue('I' . $row, $gaji->tunjangan_ekstra);
      $objPHPExcel->getActiveSheet()->setCellValue('J' . $row, $gaji->bpjs_kesehatan);
      $objPHPExcel->getActiveSheet()->setCellValue('K' . $row, $gaji->dplk);
      $objPHPExcel->getActiveSheet()->setCellValue('L' . $row, $gaji->angsuran_bank);
      $objPHPExcel->getActiveSheet()->setCellValue('M' . $row, $gaji->angsuran_koperasi_gukar);
      $objPHPExcel->getActiveSheet()->setCellValue('N' . $row, $gaji->simpanan_koperasi_gukar);
      $objPHPExcel->getActiveSheet()->setCellValue('O' . $row, $gaji->belanja_koperasi_gukar);
      $objPHPExcel->getActiveSheet()->setCellValue('P' . $row, $gaji->iuran_anggota_muhammadiyah);
      $objPHPExcel->getActiveSheet()->setCellValue('Q' . $row, $gaji->bon_sekolah);
      $objPHPExcel->getActiveSheet()->setCellValue('R' . $row, $gaji->bon_koperasi_gukar);
      $objPHPExcel->getActiveSheet()->setCellValue('S' . $row, $gaji->sosial);
      $objPHPExcel->getActiveSheet()->setCellValue('T' . $row, $gaji->angsuran_bank_mini);
      $objPHPExcel->getActiveSheet()->setCellValue('U' . $row, $gaji->tabungan_bingkisan);
      $objPHPExcel->getActiveSheet()->setCellValue('V' . $row, $gaji->infaq_bulanan);
      $objPHPExcel->getActiveSheet()->setCellValue('W' . $row, $gaji->infaq_qurban);
      $objPHPExcel->getActiveSheet()->setCellValue('X' . $row, $gaji->tabungan_kurban);
      $objPHPExcel->getActiveSheet()->setCellValue('Y' . $row, $gaji->tunjangan_anak);
      $objPHPExcel->getActiveSheet()->setCellValue('Z' . $row, $gaji->tunjangan_pangan);
      $objPHPExcel->getActiveSheet()->setCellValue('AA' . $row, $gaji->kelebihan_jam * 25000);
      $objPHPExcel->getActiveSheet()->setCellValue('AB' . $row, $gaji->tunjangan_kehadiran);
      $objPHPExcel->getActiveSheet()->setCellValue('AC' . $row, $gaji->tunjangan_golongan + $gaji->tunjangan_jabatan + $gaji->tunjangan_walikelas + $gaji->tunjangan_ekstra + $gaji->tunjangan_kehadiran + $gaji->tunjangan_anak + $gaji->tunjangan_pangan + ($gaji->kelebihan_jam * 25000) + ($gaji->tmt * 50000));
      $objPHPExcel->getActiveSheet()->setCellValue('AD' . $row, $gaji->tabungan_kurban + $gaji->bpjs_kesehatan + $gaji->dplk + $gaji->angsuran_bank + $gaji->angsuran_koperasi_gukar + $gaji->simpanan_koperasi_gukar + $gaji->belanja_koperasi_gukar + $gaji->iuran_anggota_muhammadiyah + $gaji->bon_sekolah + $gaji->bon_koperasi_gukar + $gaji->sosial + $gaji->angsuran_bank_mini + $gaji->tabungan_bingkisan + $gaji->infaq_bulanan + $gaji->infaq_qurban);

      $row++;
    }

    $objPHPExcel->setActiveSheetIndex(0);

    // Redirect output to a client’s web browser (Excel2007)
    header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
    header('Content-Disposition: attachment;filename="DataGaji.xlsx"');
    header('Cache-Control: max-age=0');
    header('Cache-Control: max-age=1');
    header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
    header('Last-Modified: ' . gmdate('D, d M Y H:i:s') . ' GMT');
    header('Cache-Control: cache, must-revalidate');
    header('Pragma: public');

    $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
    $objWriter->save('php://output');
  }


}