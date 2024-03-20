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

  <?php foreach ($gaji as $c): ?>
    <table>
      <tr>
        <td>Nama</td>
        <td>:</td>
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
        <td>Bulan</td>
        <td>:</td>
        <td>
          <?php echo substr($c->bulan, 0, 2) ?>
        </td>
      </tr>
      <tr>
        <td>Tahun</td>
        <td>:</td>
        <td>
          <?php echo substr($c->bulan, 2, 4) ?>
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
        <td>Tunjangan Golongan : </td>
        <th>Rp.
          <?= number_format($c->tunjangan_golongan, 0, ',', '.') ?>
        </th>
      </tr>
      <tr>
        <th>2</th>
        <td>Tunjangan Jabatan : </td>
        <th>Rp.
          <?= number_format($c->tunjangan_jabatan, 0, ',', '.') ?>
        </th>
      </tr>
      <tr>
        <th>3</th>
        <td>Tunjangan Wali Kelas : </td>
        <th>Rp.
          <?= number_format($c->tunjangan_walikelas, 0, ',', '.') ?>
        </th>
      </tr>
      <tr>
        <th>4</th>
        <td>Tunjangan Guru Ekstra : </td>
        <th>Rp.
          <?= number_format($c->tunjangan_ekstra, 0, ',', '.') ?>
        </th>
      </tr>
      <tr>
        <th>5</th>
        <td>Tunjangan Kehadiran : </td>
        <th>Rp.
          <?= number_format($c->tunjangan_kehadiran, 0, ',', '.') ?>
        </th>
      </tr>
      <tr>
        <th>6</th>
        <td>Tunjangan Kelebihan Jam : </td>
        <th>Rp.
          <?= number_format($c->kelebihan_jam * 25000, 0, ',', '.') ?>
        </th>
      </tr>
      <tr>
        <th>7</th>
        <td>Tunjangan Anak : </td>
        <th>Rp.
          <?= number_format($c->tunjangan_anak, 0, ',', '.') ?>
        </th>
      </tr>
      <tr>
        <th>8</th>
        <td>Tunjangan Pangan : </td>
        <th>Rp.
          <?= number_format($c->tunjangan_pangan, 0, ',', '.') ?>
        </th>
      </tr>
      <tr>
        <th>9</th>
        <td>Tunjangan Pasangan : </td>
        <th>Rp.
          <?= number_format($c->tunjangan_pasangan, 0, ',', '.') ?>
        </th>
      </tr>
      <tr>
        <td colspan="2" style="text-align: right;">Diterima + Tunjangan : </td>
        <th>Rp.
          <?= number_format($c->tunjangan_golongan + $c->tunjangan_jabatan + $c->tunjangan_walikelas + $c->tunjangan_ekstra + $c->tunjangan_kehadiran + $c->tunjangan_anak + $c->tunjangan_pangan + ($c->kelebihan_jam * 25000), 0, ',', '.') ?>
        </th>
      </tr>
    </table>


    <table class="table table-bordered table-striped">
      <center>
        <h4>Data Potongan Gaji :</h4>
      </center>
      <tr>
        <th class="text-center" style="width: 5px">No</th>
        <th class="text-center">KETERANGAN</th>
        <th class="text-center">JUMLAH </th>
      </tr>
      <tr>
        <th>1</th>
        <td>BPJS Kesehatan : </td>
        <th>Rp.
          <?= number_format($c->bpjs_kesehatan, 0, ',', '.') ?>
        </th>
      </tr>
      <tr>
        <th>2</th>
        <td>BPJS DPLK : </td>
        <th>Rp.
          <?= number_format($c->dplk, 0, ',', '.') ?>
        </th>
      </tr>
      <tr>
        <th>3</th>
        <td>Angsuran Bank : </td>
        <th>Rp.
          <?= number_format($c->angsuran_bank, 0, ',', '.') ?>
        </th>
      </tr>
      <tr>
        <th>4</th>
        <td>Angsuran Koperasi Gukar : </td>
        <th>Rp.
          <?= number_format($c->angsuran_koperasi_gukar, 0, ',', '.') ?>
        </th>
      </tr>
      <tr>
        <th>5</th>
        <td>Simpanan Koperasi Gukar : </td>
        <th>Rp.
          <?= number_format($c->simpanan_koperasi_gukar, 0, ',', '.') ?>
        </th>
      </tr>
      <tr>
        <th>6</th>
        <td>Belanja Koperasi Gukar : </td>
        <th>Rp.
          <?= number_format($c->belanja_koperasi_gukar, 0, ',', '.') ?>
        </th>
      </tr>
      <tr>
        <th>7</th>
        <td>Iuran Kemuhammadiyahan : </td>
        <th>Rp.
          <?= number_format($c->iuran_anggota_muhammadiyah, 0, ',', '.') ?>
        </th>
      </tr>
      <tr>
        <th>8</th>
        <td>Bon Sekolah : </td>
        <th>Rp.
          <?= number_format($c->bon_sekolah, 0, ',', '.') ?>
        </th>
      </tr>
      <tr>
        <th>9</th>
        <td>Bon Koperasi Gukar : </td>
        <th>Rp.
          <?= number_format($c->bon_koperasi_gukar, 0, ',', '.') ?>
        </th>
      </tr>
      <tr>
        <th>10</th>
        <td>Sosial: </td>
        <th>Rp.
          <?= number_format($c->sosial, 0, ',', '.') ?>
        </th>
      </tr>
      <tr>
        <th>11</th>
        <td>Bank Mini : </td>
        <th>Rp.
          <?= number_format($c->angsuran_bank_mini, 0, ',', '.') ?>
        </th>
      </tr>
      <tr>
        <th>12</th>
        <td>Tabungan Bingkisan : </td>
        <th>Rp.
          <?= number_format($c->tabungan_bingkisan, 0, ',', '.') ?>
        </th>
      </tr>
      <tr>
        <th>13</th>
        <td>Infaq Bulanan : </td>
        <th>Rp.
          <?= number_format($c->infaq_bulanan, 0, ',', '.') ?>
        </th>
      </tr>
      <tr>
        <th>14</th>
        <td>Infaq Qurban : </td>
        <th>Rp.
          <?= number_format($c->infaq_qurban, 0, ',', '.') ?>
        </th>
      </tr>
      <tr>
        <th>15</th>
        <td>Tabungan Qurban : </td>
        <th>Rp.
          <?= number_format($c->tabungan_kurban, 0, ',', '.') ?>
        </th>
      </tr>
      <tr>
        <th>16</th>
        <td>Belanja Wajib Koperasi : </td>
        <th>Rp.
          <?= number_format($c->belanja_wajib_koperasi, 0, ',', '.') ?>
        </th>
      </tr>
      <tr>
        <th>15</th>
        <td>Belanja Wajib BC : </td>
        <th>Rp.
          <?= number_format($c->belanja_wajib_bc, 0, ',', '.') ?>
        </th>
      </tr>
      <tr>
      <tr>
        <td colspan="2" style="text-align: right;">Total Potongan : </td>
        <th>Rp.
          <?php echo number_format($c->tabungan_kurban + $c->bpjs_kesehatan + $c->dplk + $c->angsuran_bank + $c->angsuran_koperasi_gukar + $c->simpanan_koperasi_gukar + $c->belanja_koperasi_gukar + $c->iuran_anggota_muhammadiyah + $c->bon_sekolah + $c->bon_koperasi_gukar + $c->sosial + $c->angsuran_bank_mini + $c->tabungan_bingkisan + $c->infaq_bulanan + $c->infaq_qurban + $c->belanja_wajib_koperasi + $c->belanja_wajib_bc, 0, ',', '.') ?>
        </th>
      </tr>
    </table>

    <table class="table table-bordered table-striped">
      <center>
        <h4>Total Penerimaan Gaji :</h4>
      </center>
      <tr>
        <th class="text-center" style="width: 5px">No</th>
        <th class="text-center">KETERANGAN</th>
        <th class="text-center">JUMLAH </th>
      </tr>
      <tr>
        <td colspan="2" style="text-align: right;">Total Gaji : </td>
        <th>Rp.
          <?= number_format(($c->tunjangan_anak + $c->tunjangan_pangan + $c->tunjangan_golongan + $c->tunjangan_jabatan + $c->tunjangan_walikelas + $c->tunjangan_ekstra + $c->tunjangan_kehadiran) + ($c->kelebihan_jam * 25000) - ($c->tabungan_kurban + $c->bpjs_kesehatan + $c->dplk + $c->angsuran_bank + $c->angsuran_koperasi_gukar + $c->simpanan_koperasi_gukar + $c->belanja_koperasi_gukar + $c->iuran_anggota_muhammadiyah + $c->bon_sekolah + $c->bon_koperasi_gukar + $c->sosial + $c->angsuran_bank_mini + $c->tabungan_bingkisan + $c->infaq_bulanan + $c->infaq_qurban + $c->belanja_wajib_koperasi + $c->belanja_wajib_bc), 0, ',', '.') ?>
        </th>
      </tr>
    </table>

    <table width="100%">
      <tr>
        <p class="mx-4"><b>
            Nomor Rekening :
            <?= $c->no_rekening ?>
          </b></p>
        <td></td>
        <p class="mx-4"><b>
            Nomor Pegawai :
            <?= $c->nama_pegawai ?>
          </b></p>
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
  <?php endforeach; ?>


  <script type="text/javascript">
    window.print();
  </script>
</body>

</html>