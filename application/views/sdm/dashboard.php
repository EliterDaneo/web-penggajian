<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
  </div>


  <div class="row">

    <!-- Area Chart -->
    <div class="col-xl-8 col-lg-7">
      <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h6 class="m-0 font-weight-bold text-primary">Data Diri</h6>
        </div>
        <!-- Card Body -->
        <div class="card-body">
          <div class="chart-area">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="<?= base_url('asset/img/photos/') . $this->session->userdata('foto') ?>"
                  class="img-fluid rounded-start" alt="...">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">
                    <?php echo $this->session->userdata('nama_pegawai') ?>
                  </h5>
                  <p class="card-text">
                    <?php echo $this->session->userdata('jabatan') ?>
                  </p>
                  <p class="card-text"><small class="text-muted">
                      <?php echo $this->session->userdata('nbm') ?>
                    </small></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Pie Chart -->
    <div class="col-xl-4 col-lg-5">
      <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h6 class="m-0 font-weight-bold text-primary">Update Password</h6>
        </div>
        <!-- Card Body -->
        <div class="card-body">
          <form>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Password Lama</label>
              <input type="email" class="form-control" name="" id="exampleInputEmail1">
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Password Baru</label>
              <input type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->