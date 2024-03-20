<div class="container-fluid">
  <div class="d-sm-flex align-items-center justify-content-center">
    <h1 class="h3 mb-0 text-gray-800">
      <?= $title ?>
    </h1>
  </div>

  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>No</th>
            <th>BULAN</th>
            <th>NBM</th>
            <th>NAMA </th>
            <th>JABATAN</th>
            <th>GOLONGAN</th>
            <th>WALI KELAS</th>
            <th>GURU EKSTRA</th>
            <th>JENIS KELAMIN</th>
            <th>TJ. GOLONGAN</th>
            <th>TJ. JABATAN</th>
            <th>TJ. JABATAN WALI KELAS</th>
            <th>TJ. JABATAN GURU EKSTRA</th>
            <th>ASPIRASI</th>
            <th>BPJS</th>
            <th>DPLK</th>
            <th>A. BANK</th>
            <th>A. KOPERASI GUKAR</th>
            <th>S. KOPERASI GUKAR</th>
            <th>B. KOPERASI GUKAR</th>
            <th>I. ANGGOTA MUHAMMADIYAH</th>
            <th>BON SEKOLAH</th>
            <th>BON KOPERASI GUKAR</th>
            <th>SOSIAL</th>
            <th>A. BANK MINI</th>
            <th>T. BINGKISAN</th>
            <th>INFAQ BULANAN</th>
            <th>INFAQ QURBAN</th>
            <th>TABUNGAN KURBAN</th>
            <th>BELANJA WAJIB KOPERASI</th>
            <th>BELANJA WAJIB BC</th>
            <th>TUNJANGAN ANAK</th>
            <th>TUNJANGAN PANGAN</th>
            <th>TUNJANGAN PASANGAN</th>
            <th>KELEBIAN JAM MENGAJAR</th>
            <th>TUNJANGAN TRANSPORT</th>
            <th>TOTAL TUNJANGAN</th>
            <th>TOTAL POTONGAN</th>
            <th>TOTAL DITERIMA</th>
            <th>CETAK</th>
          </tr>
        </thead>
        <tbody>
          <?php $no = 1;
          foreach ($gaji as $t): ?>
            <tr>
              <td>
                <?= $no++ ?>
              </td>
              <td>
                <?= $t->bulan ?>
              </td>
              <td>
                <?= $t->nbm ?>
              </td>
              <td>
                <?= $t->nama_pegawai ?>
              </td>
              <td>
                <?= $t->nama_jabatan ?>
              </td>
              <td>
                <?= $t->nama_golongan ?>
              </td>
              <td>
                <?= $t->nama_walikelas ?>
              </td>
              <td>
                <?= $t->nama_ekstra ?>
              </td>
              <td>
                <?= $t->jenis_kelamin ?>
              </td>
              <td>Rp.
                <?= number_format($t->tunjangan_golongan, 0, ',', '.') ?>
              </td>
              <td>Rp.
                <?= number_format($t->tunjangan_jabatan, 0, ',', '.') ?>
              </td>
              <td>Rp.
                <?= number_format($t->tunjangan_walikelas, 0, ',', '.') ?>
                <!-- //note error -->
              </td>
              <td>Rp.
                <?= number_format($t->tunjangan_ekstra, 0, ',', '.') ?>
                <!-- error code -->
              </td>
              <td>Rp.
                <?= number_format($t->aspirasi * 10000, 0, ',', '.') ?>
              </td>
              <td>Rp.
                <?php echo number_format($t->bpjs_kesehatan, 0, ',', '.') ?>
              </td>
              <td>Rp.
                <?php echo number_format($t->dplk, 0, ',', '.') ?>
              </td>
              <td>Rp.
                <?php echo number_format($t->angsuran_bank, 0, ',', '.') ?>
              </td>
              <td>Rp.
                <?php echo number_format($t->angsuran_koperasi_gukar, 0, ',', '.') ?>
              </td>
              <td>Rp.
                <?php echo number_format($t->simpanan_koperasi_gukar, 0, ',', '.') ?>
              </td>
              <td>Rp.
                <?php echo number_format($t->belanja_koperasi_gukar, 0, ',', '.') ?>
              </td>
              <td>Rp.
                <?php echo number_format($t->iuran_anggota_muhammadiyah, 0, ',', '.') ?>
              </td>
              <td>Rp.
                <?php echo number_format($t->bon_sekolah, 0, ',', '.') ?>
              </td>
              <td>Rp.
                <?php echo number_format($t->bon_koperasi_gukar, 0, ',', '.') ?>
              </td>
              <td>Rp.
                <?php echo number_format($t->sosial, 0, ',', '.') ?>
              </td>
              <td>Rp.
                <?php echo number_format($t->angsuran_bank_mini, 0, ',', '.') ?>
              </td>
              <td>Rp.
                <?php echo number_format($t->tabungan_bingkisan, 0, ',', '.') ?>
              </td>
              <td>Rp.
                <?php echo number_format($t->infaq_bulanan, 0, ',', '.') ?>
              </td>
              <td>Rp.
                <?php echo number_format($t->infaq_qurban, 0, ',', '.') ?>
              </td>
              <td>Rp.
                <?php echo number_format($t->tabungan_kurban, 0, ',', '.') ?>
              </td>
              <td>Rp.
                <?php echo number_format($t->belanja_wajib_koperasi, 0, ',', '.') ?>
              </td>
              <td>Rp.
                <?php echo number_format($t->belanja_wajib_bc, 0, ',', '.') ?>
              </td>
              <td>Rp.
                <?php echo number_format($t->tunjangan_anak, 0, ',', '.') ?>
              </td>
              <td>Rp.
                <?php echo number_format($t->tunjangan_pangan, 0, ',', '.') ?>
              </td>
              <td>Rp.
                <?php echo number_format($t->kelebihan_jam * 25000, 0, ',', '.') ?>
              </td>
              <td><b>Rp.
                  <?= number_format($t->kelebihan_jam * 25000, 0, ',', '.') ?>
                </b>
              </td>
              <td>Rp.
                <?php echo number_format($t->kelebihan_jam * 25000, 0, ',', '.') ?>
              </td>
              <td><b>Rp.
                  <?= number_format($t->tunjangan_kehadiran, 0, ',', '.') ?>
                </b>
              </td>
              <td><b>
                  Rp.
                  <?php echo number_format($t->tunjangan_jabatan + $t->tunjangan_walikelas + $t->tunjangan_ekstra + $t->tunjangan_anak + $t->tunjangan_pangan + $t->tunjangan_pasangan, 0, ',', '.') ?>
                </b>
              </td>
              <td><b>
                  Rp.
                  <?php echo number_format($t->tabungan_kurban + $t->bpjs_kesehatan + $t->dplk + $t->angsuran_bank + $t->angsuran_koperasi_gukar + $t->simpanan_koperasi_gukar + $t->belanja_koperasi_gukar + $t->iuran_anggota_muhammadiyah + $t->bon_sekolah + $t->bon_koperasi_gukar + $t->sosial + $t->angsuran_bank_mini + $t->tabungan_bingkisan + $t->infaq_bulanan + $t->infaq_qurban + $t->belanja_wajib_koperasi + $t->belanja_wajib_bc, 0, ',', '.') ?>
                </b>
              </td>
              <td><b>Rp.
                  <?= number_format(($t->tunjangan_anak + $t->tunjangan_pangan + $t->tunjangan_golongan + $t->tunjangan_jabatan + $t->tunjangan_walikelas + $t->tunjangan_ekstra + $t->tunjangan_kehadiran + $t->tunjangan_pasangan) + ($t->kelebihan_jam * 25000) - ($t->tabungan_kurban + $t->bpjs_kesehatan + $t->dplk + $t->angsuran_bank + $t->angsuran_koperasi_gukar + $t->simpanan_koperasi_gukar + $t->belanja_koperasi_gukar + $t->iuran_anggota_muhammadiyah + $t->bon_sekolah + $t->bon_koperasi_gukar + $t->sosial + $t->angsuran_bank_mini + $t->tabungan_bingkisan + $t->infaq_bulanan + $t->infaq_qurban), 0, ',', '.') ?>
                </b>
              </td>
              <td>
                <a href="<?= base_url('gukar/DataGaji/CetakGaji/' . $t->id) ?>" class="btn btn-primary" target="_blank"><i
                    class="fas fa-print"></i>Cetak</a>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</div>