<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800">
    <?= $title ?>
  </h1>

  <div class="flash-data" data-flashdata="<?= $this->session->flashdata('success') ?>"></div>

  <div class="card mb-3">
    <div class="card-header bg-primary text-white">
      Filter Bulan Dan Tahun
    </div>
    <div class="card-body">
      <form class="form-inline">
        <div class="form-group mb-3 ml-3">
          <label for="bulan">Bulan : </label>
          <select class="form-control ml-3" name="bulan" id="bulan">
            <option value="" selected>-- Pilih Bulan --</option>
            <option value="01"> Januari </option>
            <option value="02"> Februari </option>
            <option value="03"> Maret </option>
            <option value="04"> April </option>
            <option value="05"> Mei </option>
            <option value="06"> Juni </option>
            <option value="07"> Juli </option>
            <option value="08"> Agustus </option>
            <option value="09"> September </option>
            <option value="10"> Oktober </option>
            <option value="11"> November </option>
            <option value="12"> Desember </option>
          </select>
        </div>
        <div class="form-group mb-3 ml-3">
          <label for="tahun">Tahun : </label>
          <select class="form-control ml-3" name="tahun" id="tahun">
            <option value="" selected>-- Pilih Tahun --</option>
            <?php $tahun = date('Y');
            for ($t = 2024; $t < $tahun + 5; $t++) {
              ?>
              <option value="<?= $t ?>">
                <?= $t ?>
              </option>
            <?php } ?>
          </select>
        </div>
        <div class="form-group mb-3 ml-auto">
          <?php
          if ((isset ($_GET['bulan']) && $_GET['bulan'] != '') && (isset ($_GET['tahun']) && $_GET['tahun'] != '')) {
            $bulan = $_GET['bulan'];
            $tahun = $_GET['tahun'];
            $bulantahun = $bulan . $tahun;
          } else {
            $bulan = date('m');
            $tahun = date('Y');
            $bulantahun = $bulan . $tahun;
          }
          ?>
          <button type="submit" class="btn btn-primary"><i class="fas fa-eye"></i> Lihat Data</button>
          <?php if (count($gaji) > 0) { ?>
            <a target="_blank" href="<?= base_url('admin/DataGaji/CetakGaji?bulan=' . $bulan), '$tahun=' . $tahun ?>"
              class="btn btn-success ml-3"><i class="fas fa-print"></i> Cetak Gaji</a>
            <a target="_blank" href="<?= base_url('admin/DataGaji/ExportExcel?bulan=' . $bulan), '&tahun=' . $tahun ?>"
              class="btn btn-info ml-3"><i class="fas fa-file-excel"></i> Export Excel</a>
          <?php } else { ?>
            <button class="btn btn-success ml-3" type="button" data-toggle="modal" data-target="#gaji"><i
                class="fas fa-print"></i> Cetak Gaji</button>
            <button class="btn btn-info ml-3" type="button" data-toggle="modal" data-target="#gaji"><i
                class="fas fa-file-excel"></i> Export Excel</button>
          <?php } ?>

        </div>
      </form>
    </div>
  </div>

  <?php
  if ((isset ($_GET['bulan']) && $_GET['bulan'] != '') && (isset ($_GET['tahun']) && $_GET['tahun'] != '')) {
    $bulan = $_GET['bulan'];
    $tahun = $_GET['tahun'];
    $bulantahun = $bulan . $tahun;
  } else {
    $bulan = date('m');
    $tahun = date('Y');
    $bulantahun = $bulan . $tahun;
  }
  ?>

  <div class="alert alert-info">
    Menampilkan Data Transport Pada Bulan : <span class="font-weight-bold">
      <?= $bulan ?>
    </span> Tahun : <span class="font-weight-bold">
      <?= $tahun ?>
    </span>
  </div>

  <div class=" card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Data Gaji</h6>
    </div>

    <?php
    $jumlah_data = count($gaji);
    if ($jumlah_data > 0) {
      ?>
      <div class="card-body">
        <div class="table-responsive">
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
                <th>TMT KERJA</th>
                <th>TJ. JABATAN</th>
                <th>TJ. JABATAN WALI KELAS</th>
                <th>TJ. JABATAN GURU EKSTRA</th>
                <th>TJ. KEHADIRAN</th>
                <th>TJ. ANAK</th>
                <th>TJ. PANGAN</th>
                <th>TJ. KELEBIHAN JAM</th>
                <th>POTONGAN</th>
                <th>TOTAL TERIMA</th>
                <th>NO REKENING</th>
              </tr>
            </thead>
            <tbody>
              <?php $no = 1;
              foreach ($gaji as $t): ?>
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
                    <?= number_format($t->tmt * 50000, 0, ',', '.') ?>
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
                      <?= number_format(($t->tunjangan_anak + $t->tunjangan_pangan + $t->tunjangan_golongan + $t->tunjangan_jabatan + $t->tunjangan_walikelas + $t->tunjangan_ekstra + $t->tunjangan_kehadiran) + ($t->kelebihan_jam * 25000) + ($t->tmt * 50000) - ($t->tabungan_kurban + $t->bpjs_kesehatan + $t->dplk + $t->angsuran_bank + $t->angsuran_koperasi_gukar + $t->simpanan_koperasi_gukar + $t->belanja_koperasi_gukar + $t->iuran_anggota_muhammadiyah + $t->bon_sekolah + $t->bon_koperasi_gukar + $t->sosial + $t->angsuran_bank_mini + $t->tabungan_bingkisan + $t->infaq_bulanan + $t->infaq_qurban), 0, ',', '.') ?>
                    </b>
                  </td>
                  <td>
                    <?= $t->no_rekening ?>
                  </td>

                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>
    <?php } else { ?>
      <div class="container mt-2">
        <div class="alert alert-danger">Belum Ada Data Transport Bulan Ini, Silahkan Input Data Transport Pada Bulan Dan
          Tahun Yang Dipilih</div>
      </div>
    <?php } ?>
  </div>
</div>