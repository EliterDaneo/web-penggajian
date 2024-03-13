<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800">
    <?= $title ?>
  </h1>

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
          <button type="submit" class="btn btn-primary"><i class="fas fa-eye"></i> Lihat Data</button>
        </div>

      </form>
    </div>
  </div>

  <?php
  if ((isset($_GET['bulan']) && $_GET['bulan'] != '') && (isset($_GET['tahun']) && $_GET['tahun'] != '')) {
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
  <form method="POST">
    <div class=" card shadow mb-4">
      <div class="card-header py-3">
        <a href="#" data-toggle="modal" data-target="#importTransport" class="btn btn-primary"><i class="fas fa-file-import"></i>
          Import</a>
        <button type="submit" value="submit" name="submit" class="btn btn-success"><i class="fas fa-plus"></i>Tambah</button>

        <a href="<?= base_url('asset/file/DATA TRANSPORT.xlxs') ?>" class="btn btn-secondary"><i class="fas fa-download"></i>
          Download</a>
      </div>

      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>No</th>
                <th>NBM</th>
                <th>NAMA </th>
                <th>JABATAN</th>
                <th>JENIS KELAMIN</th>
                <th>TRANSPORT</th>
              </tr>
            </thead>
            <tbody>
              <?php $no = 1;
              foreach ($input_transport as $t) : ?>
                <tr>

                  <input type="hidden" name="bulan[]" class="form-control" value="<?= $bulantahun ?>">
                  <input type="hidden" name="nbm[]" class="form-control" value="<?= $t->nbm ?>">
                  <input type="hidden" name="nama_jabatan[]" class="form-control" value="<?= $t->nama_jabatan ?>">
                  <input type="hidden" name="nama_pegawai[]" class="form-control" value="<?= $t->nama_pegawai ?>">
                  <input type="hidden" name="jenis_kelamin[]" class="form-control" value="<?= $t->jenis_kelamin ?>">

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
                    <?= $t->nama_jabatan ?>
                  </td>
                  <td>
                    <?= $t->jenis_kelamin ?>
                  </td>
                  <td>
                    <input type="number" name="tunjangan_kehadiran[]" class="form-control" value="0">
                  </td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </form>
</div>