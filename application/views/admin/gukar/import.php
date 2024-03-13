<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800">
    <?= $title ?>
  </h1>

  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h3>Masukan Data dengan Excel Sesuai Format</h3>
    </div>
    <div class="card-body">
      <div class="alert alert-warning">
        <p>Atau bisa didownload di link dibawah ini : <a
            href="<?= base_url('asset/file/DATA GUKAR.xlsx') ?>">Download</a>
        </p>
      </div>
      <form action=" <?= base_url('admin/DataGukar/ImportGukar') ?>" method="post" enctype="multipart/form-data">
        <div class="col-sm-12">
          <div class="form-group">
            <label for="file">Upload File</label>
            <input type="file" class="form-control" id="file" name="file" accept=".xls, .xlsx" required">
          </div>
        </div>
        <div class="modal-footer">
          <button class="btn btn-primary" type="submit">Import Data</button>
        </div>
      </form>
    </div>
  </div>
</div>