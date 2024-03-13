<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800">
    <?= $title ?>
  </h1>

  <?php if ($this->session->flashdata('success')): ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      <?php echo $this->session->flashdata('success'); ?>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
  <?php endif; ?>

  <?php if ($this->session->flashdata('error')): ?>
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
      <?php echo $this->session->flashdata('error'); ?>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
  <?php endif; ?>

  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <a href="<?= base_url('admin/DataWaliKelas/Create') ?>" class="btn btn-primary"><i class="fas fa-plus"></i> Tambah
        Wali Kelas</a>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama Wali Kelas</th>
              <th>Tunjangan </th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($walikelas as $no => $j): ?>
              <tr>
                <td>
                  <?= ++$no ?>
                </td>
                <td>
                  <?= $j->nama_walikelas ?>
                </td>
                <td>Rp.
                  <?= number_format($j->tunjangan_walikelas, 0, ',', '.') ?>
                </td>
                <td>
                  <div class="btn-group" role="group" aria-label="Basic example">
                    <a class="btn btn-primary btn-sm" href="<?= base_url('admin/DataWaliKelas/Edit/' . $j->id) ?>"><i
                        class="fas fa-edit"></i></a>
                    <a class="btn btn-danger btn-sm" href="<?= base_url('admin/DataWaliKelas/Destroy/' . $j->id) ?>"><i
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