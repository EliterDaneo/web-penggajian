<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Custom styles for this template-->
  <link href="<?= base_url('asset/css/sb-admin-2.min.css') ?>" rel="stylesheet">
  <title>
    <?= $title ?>
  </title>
  <style>
    @page {
      size: landscape;
    }

    body {
      font-family: Arial;
      color: black;
    }
  </style>
</head>

<body>
  <center>
    <h1>SMK MUTU WONOSOBO</h1>
    <h2>LAPORAN TRANSPORT, TUNJANGAN DAN POTONGAN</h2>
    <h2>GURU DAN KARYAWAN SMK MUTU WONOSOBO</h2>
  </center>

  <?php
  $tahun = $this->input->post('tahun');
  $bulan = $this->input->post('bulan');
  ?>

  <table>
    <tr>
      <td>Bulan</td>
      <td>:</td>
      <td>
        <?php echo $bulan ?>
      </td>
    </tr>
    <tr>
      <td>Tahun</td>
      <td>:</td>
      <td>
        <?php echo $tahun ?>
      </td>
    </tr>
  </table>

  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <thead>
      <tr>
        <th>No</th>
        <th>BULAN</th>
        <th>NBM</th>
        <th>NAMA </th>
        <th>JABATAN</th>
        <th>JENIS KELAMIN</th>
        <th>GAJI POKOK</th>
        <th>TMT MASUK</th>
        <th>ASPIRASI</th>
        <th>TJ. JABATAN</th>
        <th>TJ. JABATAN WALI KELAS</th>
        <th>TJ. JABATAN GURU EKSTRA</th>
        <th>BPJS</th>
        <th>DPLK</th>
        <th>A. BANK</th>
        <th>A. KOPERASI GUKAR</th>
        <th>S. KOPERASI GUKAR</th>
        <th>B. KOPERASI GUKAR</th>
        <th>I. ANGGOTA MUHAMMADIYAH</th>
        <th>BON SEKOLAH</th>
        <th>BON KOPERASI GUKAR</th>
        <th>SOSIAL</th>
        <th>A. BANK MINI</th>
        <th>T. BINGKISAN</th>
        <th>INFAQ BULANAN</th>
        <th>INFAQ QURBAN</th>
        <th>TABUNGAN KURBAN</th>
        <th>TUNJANGAN ANAK</th>
        <th>TUNJANGAN PANGAN</th>
        <th>TUNJANGAN PASANGAN</th>
        <th>KELEBIAN JAM MENGAJAR</th>
        <th>TUNJANGAN TRANSPORT</th>
        <th>TOTAL TUNJANGAN</th>
        <th>TOTAL POTONGAN</th>
        <th>TOTAL DITERIMA</th>
      </tr>
    </thead>
    <tbody>
      <?php $no = 1;
      foreach ($transport as $t): ?>
        <tr>
          <td>
            <?= $no++ ?>
          </td>
          <td>
            <?= $t->bulan ?>
          </td>
          <td>
            <?= $t->nbm ?>
          </td>
          <td>
            <?= $t->nama_pegawai ?>
          </td>
          <td>
            <?= $t->nama_jabatan ?>
          </td>
          <td>
            <?= $t->jenis_kelamin ?>
          </td>
          <td>Rp.
            <?= number_format($t->tunjangan_golongan, 0, ',', '.') ?>
          </td>
          <td>Rp.
            <?= number_format($t->tmt * 50000, 0, ',', '.') ?>
          </td>
          <td>Rp.
            <?= number_format($t->aspirasi * 10000, 0, ',', '.') ?>
          </td>
          <td>Rp.
            <?= number_format($t->tunjangan_jabatan, 0, ',', '.') ?>
          </td>
          <td>Rp.
            <?= number_format($t->tunjangan_walikelas, 0, ',', '.') ?>
            <!-- //note error -->
          </td>
          <td>Rp.
            <?= number_format($t->tunjangan_ekstra, 0, ',', '.') ?>
            <!-- error code -->
          </td>
          <td>Rp.
            <?php echo number_format($t->bpjs_kesehatan, 0, ',', '.') ?>
          </td>
          <td>Rp.
            <?php echo number_format($t->dplk, 0, ',', '.') ?>
          </td>
          <td>Rp.
            <?php echo number_format($t->angsuran_bank, 0, ',', '.') ?>
          </td>
          <td>Rp.
            <?php echo number_format($t->angsuran_koperasi_gukar, 0, ',', '.') ?>
          </td>
          <td>Rp.
            <?php echo number_format($t->simpanan_koperasi_gukar, 0, ',', '.') ?>
          </td>
          <td>Rp.
            <?php echo number_format($t->belanja_koperasi_gukar, 0, ',', '.') ?>
          </td>
          <td>Rp.
            <?php echo number_format($t->iuran_anggota_muhammadiyah, 0, ',', '.') ?>
          </td>
          <td>Rp.
            <?php echo number_format($t->bon_sekolah, 0, ',', '.') ?>
          </td>
          <td>Rp.
            <?php echo number_format($t->bon_koperasi_gukar, 0, ',', '.') ?>
          </td>
          <td>Rp.
            <?php echo number_format($t->sosial, 0, ',', '.') ?>
          </td>
          <td>Rp.
            <?php echo number_format($t->angsuran_bank_mini, 0, ',', '.') ?>
          </td>
          <td>Rp.
            <?php echo number_format($t->tabungan_bingkisan, 0, ',', '.') ?>
          </td>
          <td>Rp.
            <?php echo number_format($t->infaq_bulanan, 0, ',', '.') ?>
          </td>
          <td>Rp.
            <?php echo number_format($t->infaq_qurban, 0, ',', '.') ?>
          </td>
          <td>Rp.
            <?php echo number_format($t->tabungan_kurban, 0, ',', '.') ?>
          </td>
          <td>Rp.
            <?php echo number_format($t->tunjangan_anak, 0, ',', '.') ?>
          </td>
          <td>Rp.
            <?php echo number_format($t->tunjangan_pangan, 0, ',', '.') ?>
          </td>
          <td>Rp.
            <?php echo number_format($t->tunjangan_pasangan, 0, ',', '.') ?>
          </td>
          <td>Rp.
            <?php echo number_format($t->kelebihan_jam * 25000, 0, ',', '.') ?>
          </td>
          <td><b>Rp.
              <?= number_format($t->tunjangan_kehadiran, 0, ',', '.') ?>
            </b>
          </td>
          <td><b>
              Rp.
              <?php echo number_format($t->tunjangan_pasangan + $t->tunjangan_jabatan + $t->tunjangan_walikelas + $t->tunjangan_ekstra + $t->tunjangan_kehadiran + $t->tunjangan_anak + $t->tunjangan_pangan + ($t->kelebihan_jam * 25000), 0, ',', '.') ?>
            </b>
          </td>
          <td><b>
              Rp.
              <?php echo number_format($t->tabungan_kurban + $t->bpjs_kesehatan + $t->dplk + $t->angsuran_bank + $t->angsuran_koperasi_gukar + $t->simpanan_koperasi_gukar + $t->belanja_koperasi_gukar + $t->iuran_anggota_muhammadiyah + $t->bon_sekolah + $t->bon_koperasi_gukar + $t->sosial + $t->angsuran_bank_mini + $t->tabungan_bingkisan + $t->infaq_bulanan + $t->infaq_qurban, 0, ',', '.') ?>
            </b>
          </td>
          <td><b>Rp.
              <?= number_format(($t->tunjangan_anak + $t->tunjangan_pasangan + $t->tunjangan_pangan + $t->tunjangan_golongan + $t->tunjangan_jabatan + $t->tunjangan_walikelas + $t->tunjangan_ekstra + $t->tunjangan_kehadiran) + ($t->kelebihan_jam * 25000) + ($t->tmt * 50000) - ($t->tabungan_kurban + $t->bpjs_kesehatan + $t->dplk + $t->angsuran_bank + $t->angsuran_koperasi_gukar + $t->simpanan_koperasi_gukar + $t->belanja_koperasi_gukar + $t->iuran_anggota_muhammadiyah + $t->bon_sekolah + $t->bon_koperasi_gukar + $t->sosial + $t->angsuran_bank_mini + $t->tabungan_bingkisan + $t->infaq_bulanan + $t->infaq_qurban), 0, ',', '.') ?>
            </b>
          </td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>

  <table width="100%">
    <tr>
      <td></td>
      <td width="200px">
        <p>Wonosobo,
          <?php echo date("d M Y") ?><br> Keuangan
        </p>
        <br>
        <br>
        <p>_____________________________</p>
      </td>
    </tr>
  </table>

  <!-- Custom scripts for all pages-->
  <script src="<?= base_url('asset/js/sb-admin-2.min.js') ?>"></script>
  <script type="text/javascript">
    window.print();
  </script>
</body>

</html>