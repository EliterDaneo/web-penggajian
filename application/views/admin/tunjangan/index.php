<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800">
    <?= $title ?>
  </h1>
  <?php if ($this->session->flashdata('success')) : ?>
  <div class="alert alert-success alert-dismissible fade show" role="alert">
    <?php echo $this->session->flashdata('success'); ?>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
  <?php endif; ?>

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
          <button type="submit" class="btn btn-primary"><i class="fas fa-eye"></i> Lihat Tunjangan</button>
          <a href="<?= base_url('admin/DataTunjangan/Create') ?>" class="btn btn-success ml-3"><i
              class="fas fa-plus"></i> Tambah
            Tunjangan</a>
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

  <div class=" card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Data Potongan</h6>
    </div>

    <?php
    $jumlah_data = count($tunjangan);
    if ($jumlah_data > 0) {
    ?>
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
              <th>TUNJANGAN ANAK</th>
              <th>TUNJANGAN PANGAN</th>
              <th>KELEBIAN JAM MENGAJAR</th>
              <th>TOTAL</th>
            </tr>
          </thead>
          <tbody>
            <?php $no = 1;
              foreach ($tunjangan as  $t) : ?>
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
      </div>
    </div>
    <?php } else { ?>
    <div class="container mt-2">
      <div class="alert alert-danger">Belum Ada Data Potongan Bulan Ini, Silahkan Input Data Potongan Pada Bulan Dan
        Tahun Yang Dipilih</div>
    </div>
    <?php } ?>
  </div>
</div>