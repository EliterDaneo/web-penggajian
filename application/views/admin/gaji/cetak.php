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
    body {
      font-family: Arial;
      color: black;
      padding: 0;
      margin: 0;
    }
  </style>
</head>

<body>
  <center>
    <h1>SMK MUTU WONOSOBO</h1>
    <h2>Data Gaji Guru Karyawan</h2>
  </center>

  <?php if ((isset ($_GET['bulan']) && $_GET['bulan'] != '') && (isset ($_GET['tahun']) && $_GET['tahun'] != '')) {
    $bulan = $_GET['bulan'];
    $tahun = $_GET['tahun'];
    $bulantahun = $bulan . $tahun;
  } else {
    $bulan = date('m');
    $tahun = date('Y');
    $bulantahun = $bulan . $tahun;
  } ?>

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
        <th>GOLONGAN</th>
        <th>JENIS KELAMIN</th>
        <th>GAJI POKOK</th>
        <th>TJ. JABATAN</th>
        <th>TJ. JABATAN WALI KELAS</th>
        <th>TJ. JABATAN GURU EKSTRA</th>
        <th>TJ. KEHADIRAN</th>
        <th>TJ. ANAK</th>
        <th>TJ. PANGAN</th>
        <th>TJ. KELEBIHAN JAM</th>
        <th>POTONGAN</th>
        <th>TOTAL TERIMA</th>
      </tr>
    </thead>
    <tbody>
      <?php $no = 1;
      foreach ($cetak_gaji as $t): ?>
        <tr>
          <td>
            <?= $no++ ?>
          </td>
          <td>
            <?= $bulantahun ?>
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
            <?= $t->nama_golongan ?>
          </td>
          <td>
            <?= $t->jenis_kelamin ?>
          </td>
          <td>Rp.
            <?= number_format($t->tunjangan_golongan, 0, ',', '.') ?>
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
            <?= number_format($t->tunjangan_kehadiran, 0, ',', '.') ?>
          </td>
          <td>Rp.
            <?= number_format($t->tunjangan_anak, 0, ',', '.') ?>
          </td>
          <td>Rp.
            <?= number_format($t->tunjangan_pangan, 0, ',', '.') ?>
          </td>
          <td>Rp.
            <?= number_format($t->kelebihan_jam * 25000, 0, ',', '.') ?>
          </td>
          <td>Rp.
            <?= number_format($t->tabungan_kurban + $t->bpjs_kesehatan + $t->dplk + $t->angsuran_bank + $t->angsuran_koperasi_gukar + $t->simpanan_koperasi_gukar + $t->belanja_koperasi_gukar + $t->iuran_anggota_muhammadiyah + $t->bon_sekolah + $t->bon_koperasi_gukar + $t->sosial + $t->angsuran_bank_mini + $t->tabungan_bingkisan + $t->infaq_bulanan + $t->infaq_qurban, 0, ',', '.') ?>
          </td>
          <td><b>Rp.
              <?= number_format(($t->tunjangan_anak + $t->tunjangan_pangan + $t->tunjangan_golongan + $t->tunjangan_jabatan + $t->tunjangan_walikelas + $t->tunjangan_ekstra + $t->tunjangan_kehadiran) + ($t->kelebihan_jam * 25000) - ($t->tabungan_kurban + $t->bpjs_kesehatan + $t->dplk + $t->angsuran_bank + $t->angsuran_koperasi_gukar + $t->simpanan_koperasi_gukar + $t->belanja_koperasi_gukar + $t->iuran_anggota_muhammadiyah + $t->bon_sekolah + $t->bon_koperasi_gukar + $t->sosial + $t->angsuran_bank_mini + $t->tabungan_bingkisan + $t->infaq_bulanan + $t->infaq_qurban), 0, ',', '.') ?>
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