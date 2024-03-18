<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800">
    <?= $title ?>
  </h1>

  <div class="flash-data" data-flashdata="<?= $this->session->flashdata('success') ?>"></div>

  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <a href="<?= base_url('admin/DataEkstra/Create') ?>" class="btn btn-primary"><i class="fas fa-plus"></i> Tambah
        Ekstra</a>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama Ekstra</th>
              <th>Tunjangan </th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($ekstra as $no => $j): ?>
              <tr>
                <td>
                  <?= ++$no ?>
                </td>
                <td>
                  <?= $j->nama_ekstra ?>
                </td>
                <td>Rp.
                  <?= number_format($j->tunjangan_ekstra, 0, ',', '.') ?>
                </td>
                <td>
                  <div class="btn-group" role="group" aria-label="Basic example">
                    <a class="btn btn-primary btn-sm"
                      href="<?= base_url('admin/DataEkstra/Edit/' . $j->id) ?>"><i class="fas fa-edit"></i></a>
                    <a class="btn btn-danger btn-sm btn-delete" href="<?= base_url('admin/DataEkstra/Destroy/' . $j->id) ?>"><i
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