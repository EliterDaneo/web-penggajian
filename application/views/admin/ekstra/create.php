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
      <form class="user" action="<?= base_url('admin/DataEkstra/Store') ?>" method="POST">
        <div class="row">
          <div class="col-sm-6">
            <div class="form-group">
              <input type="text" class="form-control" name="nama_ekstra" placeholder="Enter nama ekstra...">
              <?= form_error('nama_ekstra', '<div class="text-small text-danger"></div>') ?>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <input type="number" class="form-control" name="tunjangan_ekstra" placeholder="Enter tunjangan...">
              <?= form_error('tunjangan_ekstra', '<div class="text-small text-danger"></div>') ?>
            </div>
          </div>
        </div>

        <button type="submit" class="btn btn-primary btn-user">
          Simpan
        </button>
      </form>
    </div>
  </div>
</div>