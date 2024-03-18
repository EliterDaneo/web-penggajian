<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800">
    <?= $title ?>
  </h1>

  <div class="flash-data" data-flashdata="<?= $this->session->flashdata('success') ?>"></div>

  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <a href="<?= base_url('admin/DataGukar/Create') ?>" class="btn btn-primary"><i class="fas fa-plus"></i> Tambah
        Gukar</a>
      <a href="<?= base_url('admin/DataGukar/Import') ?>" class="btn btn-success ml-auto ml-3"><i
          class="fas fa-file-import"></i>
        Import
        Gukar</a>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>No</th>
              <th>Foto</th>
              <th>NBM</th>
              <th>Nama </th>
              <th>Jabatan</th>
              <th>TMT</th>
              <th>Golongan</th>
              <th>Jabatan Wali Kelas</th>
              <th>Jabatan Guru Ekstra</th>
              <th>Jenis Kelamain</th>
              <th>Alamat</th>
              <th>No HP</th>
              <th>ROLE</th>
              <th>NO REKENING</th>
              <th>KELEBIHAN JAM</th>
              <th>AKSI</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($pegawai as $no => $j): ?>
              <tr>
                <td>
                  <?= ++$no ?>
                </td>
                <td>
                  <img src="<?= base_url('asset/img/' . $j->foto) ?>" alt="">
                </td>
                <td>
                  <?= $j->nbm ?>
                </td>
                <td>
                  <?= $j->nama_pegawai ?>
                </td>
                <td>
                  <?= $j->jabatan ?>
                </td>
                <td>
                  <?= $j->tmt ?>
                </td>
                <td>
                  <?= $j->golongan ?>,
                </td>
                <td>
                  <?= $j->jabatan_wali_kelas ?>
                </td>
                <td>
                  <?= $j->jabatan_guru_ekstra ?>
                </td>
                <td>
                  <?php
                  if ($j->jenis_kelamin == 'p') {
                    echo "<span>Perempuan</span>";
                  } else {
                    echo "<span>Laki Laki</span>";
                  }
                  ?>
                </td>
                <td>
                  <?= $j->alamat ?>
                </td>
                <td>
                  <?= $j->no_hp ?>
                </td>
                <td>
                  <?php
                  if ($j->role == 1) {
                    echo "<span>Administrator</span>";
                  } else if ($j->role == 2) {
                    echo "<span>SDM</span>";
                  } else if ($j->role == 3) {
                    echo "<span>Bendahara</span>";
                  } else {
                    echo "<span>Gukar</span>";
                  }
                  ?>
                </td>
                <td>
                  <?= $j->no_rekening ?>
                </td>
                <td>
                  <?= $j->kelebihan_jam ?>
                </td>
                <td>
                  <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                    <a href="<?= base_url('admin/DataGukar/Edit/' . $j->id) ?>" class="btn btn-primary
                    btn-sm"><i class="fas fa-edit"></i></a>
                    <a href="<?= base_url('admin/DataGukar/Destroy/' . $j->id) ?>" class="btn btn-danger btn-delete"><i
                        class="fas fa-trash"></i></a>
                  </div>
                </td>
              </tr>
            <?php endforeach ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

</div>
<!-- /.container-fluid -->