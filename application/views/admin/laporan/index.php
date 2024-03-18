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
      <form class="form-inline" action="<?= base_url('admin/LaporanGaji/CetakLaporanGaji') ?>" target="_blank"
        method="post">
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
          <button type="submit" class="btn btn-primary ml-3"><i class="fas fa-print"></i> Laporan Gaji</button>
          <a href="<?= base_url('admin/Laporangaji/ExportExcel') ?>" class="btn btn-success ml-3"><i
              class="fas fa-file-excel"></i> Cetak Laporan</a>
        </div>
      </form>
    </div>
  </div>
</div>