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
      <form class="user" action="<?= base_url('admin/DataGukar/Store') ?>" method="POST" enctype="multipart/form-data">
        <div class="row">
          <div class="col-sm-6">
            <div class="form-group">
              <label for="">Nama</label>
              <input type="text" class="form-control " name="nama_pegawai">
              <?= form_error('nama_pegawai', '<div class="text-small text-danger"></div>') ?>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label for="">NBM</label>
              <input type="number" class="form-control" name="nbm" placeholder="Enter nbm...">
              <?= form_error('nbm', '<div class="text-small text-danger"></div>') ?>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label for="">Jabatan</label>
              <select name="jabatan" id="" class="form-control">
                <option value="" selected> >-- Pilih Jawabatan --< </option>
                    <?php foreach ($jabatan as $j): ?>
                  <option value="<?= $j->nama_jabatan ?>">
                    <?= $j->nama_jabatan ?>
                  </option>
                <?php endforeach; ?>
              </select>
              <?= form_error('jabatan', '<div class="text-small text-danger"></div>') ?>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label for="">Golongan</label>
              <select name="golongan" id="" class="form-control">
                <option value="" selected> >-- Pilih Golongan --< </option>
                    <?php foreach ($golongan as $j): ?>
                  <option value="<?= $j->nama_golongan ?>">
                    <?= $j->nama_golongan ?>
                  </option>
                <?php endforeach; ?>
              </select>
              <?= form_error('golongan', '<div class="text-small text-danger"></div>') ?>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label for="">Jabatan Wali Kelas</label>
              <select name="jabatan_wali_kelas" id="" class="form-control">
                <option value="" selected> >-- Pilih Jabatan Wali Kelas --< </option>
                    <?php foreach ($walikelas as $j): ?>
                  <option value="<?= $j->nama_walikelas ?>">
                    <?= $j->nama_walikelas ?>
                  </option>
                <?php endforeach; ?>
              </select>
              <?= form_error('jabatan_wali_kelas', '<div class="text-small text-danger"></div>') ?>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label for="">Jabatan Guru Ekstra</label>
              <select name="jabatan_guru_ekstra" id="" class="form-control">
                <option value="" selected> >-- Pilih Jabatan - Guru Ekstra --< </option>
                    <?php foreach ($ekstra as $j): ?>
                  <option value="<?= $j->nama_ekstra ?>">
                    <?= $j->nama_ekstra ?>
                  </option>
                <?php endforeach; ?>
              </select>
              <?= form_error('jabatan_guru_ekstra', '<div class="text-small text-danger"></div>') ?>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label for="">Jenis Kelamin</label>
              <select name="jenis_kelamin" id="" class="form-control">
                <option value="" selected> >-- Pilih Jenis Kelamin --< </option>
                <option value="L">Laki - Laki</option>
                <option value="P">Perempuan</option>
              </select>
              <?= form_error('jenis_kelamin', '<div class="text-small text-danger"></div>') ?>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label for="">Alamat</label>
              <textarea type="text" class="form-control" name="alamat" placeholder="Enter alamat...">
                </textarea>
              <?= form_error('alamat', '<div class="text-small text-danger"></div>') ?>
            </div>
          </div>
          <div class=" col-sm-6">
            <div class="form-group">
              <label for="">No HP</label>
              <input type="number" class="form-control" name="no_hp" placeholder="Enter no_hp...">
              <?= form_error('no_hp', '<div class="text-small text-danger"></div>') ?>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label for="">Role</label>
              <select name="role" id="" class="form-control">
                <option value="" selected> >-- Pilih Role --< </option>
                <option value="1">Administrator</option>
                <option value="4">Gukar</option>
                <option value="3">Keungan</option>
                <option value="2">SDM</option>
              </select>
              <?= form_error('role', '<div class="text-small text-danger"></div>') ?>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label for="">Foto</label>
              <input type="file" class="form-control" name="foto" placeholder="Enter foto...">
              <?= form_error('foto', '<div class="text-small text-danger"></div>') ?>
            </div>
          </div>
          <div class=" col-sm-6">
            <div class="form-group">
              <label for="">No Rekening</label>
              <input type="number" class="form-control" name="no_rekening" placeholder="Enter No Rekening...">
              <?= form_error('no_rekening', '<div class="text-small text-danger"></div>') ?>
            </div>
          </div>
          <div class=" col-sm-6">
            <div class="form-group">
              <label>Email</label>
              <input type="email" class="form-control" name="email" placeholder="Enter No Email...">
              <?= form_error('email', '<div class="text-small text-danger"></div>') ?>
            </div>
          </div>
          <div class=" col-sm-6">
            <div class="form-group">
              <label>Password</label>
              <input type="text" class="form-control" name="password" placeholder="Enter No Password...">
              <?= form_error('password', '<div class="text-small text-danger"></div>') ?>
            </div>
          </div>
        </div>

        <button type="submit" class="btn btn-primary btn-user">
          Perbaharui
        </button>
      </form>
    </div>
  </div>
</div>