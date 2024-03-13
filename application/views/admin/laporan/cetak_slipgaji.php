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
    }
  </style>
</head>

<body>
  <center>
    <h1>SMK MUTU WONOSOBO</h1>
    <h2>Data Gaji Guru Karyawan</h2>
    <hr style="width: 100%; border-width: 3px; color: black">
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

  <?php foreach ($cetak_slip_gaji as $c): ?>
    <table style="width: 100px">
      <tr>
        <td style="width: 20px">Nama</td>
        <td style="width: 2px">:</td>
        <td>
          <?php echo $c->nama_pegawai ?>
        </td>
      </tr>
      <tr>
        <td>NBM</td>
        <td>:</td>
        <td>
          <?php echo $c->nbm ?>
        </td>
      </tr>
      <tr>
        <td>Jataban</td>
        <td>:</td>
        <td>
          <?php echo $c->nama_jabatan ?>
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

    <table class="table table-bordered table-striped">

      <tr>
        <th class="text-center" style="width: 5px">No</th>
        <th class="text-center">KETERANGAN</th>
        <th class="text-center">JUMLAH </th>
      </tr>

      <tr>
        <th>1</th>
        <th>
          <?= number_format($t->tunjangan_golongan, 0, ',', '.') ?>
        </th>
      </tr>
      <tr>
        <th>2</th>
        <th>
          <?= number_format($t->tunjangan_jabatan, 0, ',', '.') ?>
        </th>
      </tr>
      <tr>
        <th>3</th>
        <th>
          <?= number_format($t->tunjangan_walikelas, 0, ',', '.') ?>
        </th>
      </tr>
      <tr>
        <th>4</th>
        <th>
          <?= number_format($t->tunjangan_ekstra, 0, ',', '.') ?>
        </th>
      </tr>
      <tr>
        <th>5</th>
        <th>
          <?= number_format($t->tunjangan_kehadiran, 0, ',', '.') ?>
        </th>
      </tr>
      <tr>
        <th>6</th>
        <th>
          <?= number_format($t->total_tunjangan, 0, ',', '.') ?>
        </th>
      </tr>

      <tr>
        <th>7</th>
        <th>
          <?= number_format($t->jumlah_potongan, 0, ',', '.') ?>
        </th>
      </tr>

      <tr>
        <th>8</th>
        <th>
          <?= number_format($t->tunjangan_golongan + $t->tunjangan_jabatan + $t->tunjangan_walikelas + $t->tunjangan_ekstra + $t->tunjangan_kehadiran + $t->total_tunjangan - $t->jumlah_potongan, 0, ',', '.') ?>
        </th>
      </tr>
      <tr>
        <th>9</th>
        <th>
          <?= $t->no_rekening ?>
        </th>
      </tr>
    </table>
  <?php endforeach; ?>


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