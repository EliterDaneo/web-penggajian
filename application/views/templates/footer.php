</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
  <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
      <div class="modal-footer">
        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
        <a class="btn btn-primary" href="<?= base_url('welcome/logout') ?>">Logout</a>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="import" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="form-group mt-3">
        <form action="<?= base_url('admin/DataGukarFix/ImportDataGukar') ?>" method="post"
          enctype="multipart/form-data">
          <div class="col-sm-12">
            <div class="form-group">
              <input type="file" class="form-control" name="file" accept=".xls, .xlsx" required">
            </div>
          </div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <button class="btn btn-primary" type="submit">Import Data</button>
          </div>
        </form>
      </div>

    </div>
  </div>
</div>

<div class="modal fade" id="importTransport" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Import Data Transport</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="form-group mt-3">
        <form action="<?= base_url('admin/DataTransport/ImportDataTransport') ?>" method="post"
          enctype="multipart/form-data">
          <div class="col-sm-12">
            <div class="form-group">
              <input type="file" class="form-control" name="file" accept=".xls, .xlsx" required">
            </div>
          </div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <button class="btn btn-primary" type="submit">Import Data</button>
          </div>
        </form>
      </div>

    </div>
  </div>
</div>

<!-- Bootstrap core JavaScript-->
<script src="<?= base_url('asset/vendor/jquery/jquery.min.js') ?>"></script>
<script src="<?= base_url('asset/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>

<!-- Core plugin JavaScript-->
<script src="<?= base_url('asset/vendor/jquery-easing/jquery.easing.min.js') ?>"></script>

<!-- Custom scripts for all pages-->
<script src="<?= base_url('asset/js/sb-admin-2.min.js') ?>"></script>

<!-- Page level plugins -->
<script src="<?= base_url('asset/vendor/datatables/jquery.dataTables.min.js') ?>"></script>
<script src="<?= base_url('asset/vendor/datatables/dataTables.bootstrap4.min.js') ?>"></script>

<!-- Page level custom scripts -->
<script src="<?= base_url('asset/js/demo/datatables-demo.js') ?>"></script>

<script src="<?= base_url('asset/js/sweetalert2.all.min.js') ?>"></script>
<script src="<?= base_url('asset/js/my-script.js') ?>"></script>

</body>

</html>