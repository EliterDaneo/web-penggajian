<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800">
    <?= $title ?>
  </h1>

  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h3>Masukan Data dengan Benar</h3>
    </div>
    <div class="card-body">
      <?php foreach ($tmt as $e): ?>
        <form class="user" action="<?= base_url('admin/DataTMT/Update') ?>" method="POST">
          <div class="row">
            <div class="col-sm-6">
              <div class="form-group">
                <input type="hidden" class="form-control form-control-user" name="id" value="<?= $e->id ?>">
                <input type="text" class="form-control" name="nama_tmt" placeholder="Enter Nama Gololang..."
                  value="<?= $e->nama_tmt ?>">
                <?= form_error('nama_tmt', '<div class="text-small text-danger"></div>') ?>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <input type="text" class="form-control " name="tunjangan_tmt" placeholder="Enter tunjangan..."
                  value="<?= $e->tunjangan_tmt ?>">
                <?= form_error('tunjangan_tmt', '<div class="text-small text-danger"></div>') ?>
              </div>
            </div>
          </div>

          <button type="submit" class="btn btn-primary btn-user">
            Perbaharui
          </button>
        <?php endforeach; ?>
      </form>
    </div>
  </div>
</div>