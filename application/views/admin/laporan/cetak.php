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
    <h2>Data Gaji Guru Karyawan</h2>
  </center>

  <?php if ((isset($_GET['bulan']) && $_GET['bulan'] != '') && (isset($_GET['tahun']) && $_GET['tahun'] != '')) {
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
        <th>NBM</th>
        <th>NAMA </th>
        <th>JABATAN</th>
        <th>JENIS KELAMIN</th>
        <th>TRANSPORT</th>
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
        <th>TOTAL POTONGAN</th>
        <th>TUNJANGAN ANAK</th>
        <th>TUNJANGAN PANGAN</th>
        <th>KELEBIAN JAM MENGAJAR</th>
        <th>TOTAL TUNJANGAN</th>
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
            <?= $t->nbm ?>
          </td>
          <td>
            <?= $t->nama_pegawai ?>
          </td>
          <td>
            <?= $t->jabatan ?>
          </td>
          <td>
            <?= $t->jenis_kelamin ?>
          </td>
          <td><b>Rp.
              <?= number_format($t->tunjangan_kehadiran, 0, ',', '.') ?>
            </b>
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
          <td><b>
              Rp.
              <?php echo number_format($t->jumlah_potongan, 0, ',', '.') ?>
            </b>
          </td>
          <td>Rp.
            <?php echo number_format($t->tunjangan_anak, 0, ',', '.') ?>
          </td>
          <td>Rp.
            <?php echo number_format($t->tunjangan_pangan, 0, ',', '.') ?>
          </td>
          <td>Rp.
            <?php echo number_format($t->kelebihan_jam_mengajar, 0, ',', '.') ?>
          </td>
          <td><b>
              Rp.
              <?php echo number_format($t->total_tunjangan, 0, ',', '.') ?>
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