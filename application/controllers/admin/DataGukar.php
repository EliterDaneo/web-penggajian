<?php
class DataGukar extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();

    $role = $this->session->userdata('role');

    if ($role != 1 && $role != 2) { // Check if user role is not 1 or 2
      $this->session->set_flashdata('error', 'Anda Tidak Mempunyai Akses! Silahkan Login Sesuai Role!!!'); // Set flashdata error message
      $this->session->sess_destroy(); //
      redirect('Error'); // Redirect to welcome page
    }
  }

  public function _rules()
  {
    $this->form_validation->set_rules('nbm', 'nbm', 'required');
    $this->form_validation->set_rules('nama_pegawai', 'nama_pegawai', 'required');
    $this->form_validation->set_rules('jabatan', 'jabatan', 'required');
    $this->form_validation->set_rules('golongan', 'golongan', 'required');
    $this->form_validation->set_rules('jabatan_wali_kelas', 'jabatan_wali_kelas', 'required');
    $this->form_validation->set_rules('jabatan_guru_ekstra', 'jabatan_guru_ekstra', 'required');
    $this->form_validation->set_rules('jenis_kelamin', 'jenis_kelamin', 'required');
    $this->form_validation->set_rules('alamat', 'alamat', 'required');
    $this->form_validation->set_rules('no_hp', 'no_hp', 'required');
    $this->form_validation->set_rules('role', 'role', 'required');
    $this->form_validation->set_rules('no_rekening', 'no_rekening', 'required');
    $this->form_validation->set_rules('email', 'email', 'required');
    $this->form_validation->set_rules('password', 'password', 'required');
    $this->form_validation->set_rules('kelebihan_jam', 'kelebihan_jam', 'required');
  }
  public function _ruless()
  {
    $this->form_validation->set_rules('nbm', 'nbm', 'required');
    $this->form_validation->set_rules('nama_pegawai', 'nama_pegawai', 'required');
    $this->form_validation->set_rules('jabatan', 'jabatan', 'required');
    $this->form_validation->set_rules('golongan', 'golongan', 'required');
    $this->form_validation->set_rules('jabatan_wali_kelas', 'jabatan_wali_kelas', 'required');
    $this->form_validation->set_rules('jabatan_guru_ekstra', 'jabatan_guru_ekstra', 'required');
    $this->form_validation->set_rules('jenis_kelamin', 'jenis_kelamin', 'required');
    $this->form_validation->set_rules('alamat', 'alamat', 'required');
    $this->form_validation->set_rules('no_hp', 'no_hp', 'required');
    $this->form_validation->set_rules('role', 'role', 'required');
    $this->form_validation->set_rules('no_rekening', 'no_rekening', 'required');
    $this->form_validation->set_rules('email', 'email', 'required');
    $this->form_validation->set_rules('kelebihan_jam', 'kelebihan_jam', 'required');
  }

  public function index()
  {
    $data = [
      'title' => 'Halaman Data Guru dan Karyawan',
      'pegawai' => $this->AllModel->get_data_gukar()
    ];
    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar');
    $this->load->view('admin/gukar/index', $data);
    $this->load->view('templates/footer');
  }

  public function Import()
  {
    $data = [
      'title' => 'Halaman Import Gukar',
    ];
    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar');
    $this->load->view('admin/gukar/import', $data);
    $this->load->view('templates/footer');
  }

  public function ImportGukar()
  {
    if (isset ($_FILES["file"]["name"])) {
      // upload
      $file_tmp = $_FILES['file']['tmp_name'];
      $file_name = $_FILES['file']['name'];
      $file_size = $_FILES['file']['size'];
      $file_type = $_FILES['file']['type'];
      // move_uploaded_file($file_tmp,"uploads/".$file_name); // simpan filenya di folder uploads

      $object = PHPExcel_IOFactory::load($file_tmp);

      foreach ($object->getWorksheetIterator() as $worksheet) {

        $highestRow = $worksheet->getHighestRow();
        $highestColumn = $worksheet->getHighestColumn();

        for ($row = 3; $row <= $highestRow; $row++) {

          $nbm = $worksheet->getCellByColumnAndRow(0, $row)->getValue();
          $nama_pegawai = $worksheet->getCellByColumnAndRow(1, $row)->getValue();
          $jabatan = $worksheet->getCellByColumnAndRow(2, $row)->getValue();
          $golongan = $worksheet->getCellByColumnAndRow(3, $row)->getValue();
          $jabatan_wali_kelas = $worksheet->getCellByColumnAndRow(4, $row)->getValue();
          $jabatan_guru_ekstra = $worksheet->getCellByColumnAndRow(5, $row)->getValue();
          $jenis_kelamin = $worksheet->getCellByColumnAndRow(6, $row)->getValue();
          $alamat = $worksheet->getCellByColumnAndRow(7, $row)->getValue();
          $no_hp = $worksheet->getCellByColumnAndRow(8, $row)->getValue();
          $role = $worksheet->getCellByColumnAndRow(9, $row)->getValue();
          $foto = $worksheet->getCellByColumnAndRow(10, $row)->getValue();
          $no_rekening = $worksheet->getCellByColumnAndRow(11, $row)->getValue();
          $email = $worksheet->getCellByColumnAndRow(12, $row)->getValue();
          $password = $worksheet->getCellByColumnAndRow(13, $row)->getValue();
          $kelebihan_jam = $worksheet->getCellByColumnAndRow(14, $row)->getValue();

          $data[] = array(
            'nbm' => $nbm,
            'nama_pegawai' => $nama_pegawai,
            'jabatan' => $jabatan,
            'golongan' => $golongan,
            'jabatan_wali_kelas' => $jabatan_wali_kelas,
            'jabatan_guru_ekstra' => $jabatan_guru_ekstra,
            'jenis_kelamin' => $jenis_kelamin,
            'alamat' => $alamat,
            'no_hp' => $no_hp,
            'role' => $role,
            'foto' => $foto,
            'no_rekening' => $no_rekening,
            'email' => $email,
            'password' => $password,
            'kelebihan_jam' => $kelebihan_jam,
          );
        }
      }

      $this->AllModel->insert_batch_gukar('tbl_pegawai', $data);

      $this->session->set_flashdata('success', 'Data Berhasil Diimport!');
      redirect('admin/DataGukar');
    } else {
      $this->session->set_flashdata('success', 'Data Berhasil Diimport!');
      redirect('admin/DataGukar');
    }
  }

  public function Create()
  {
    $data = [
      'title' => 'Halaman Tambah Gukar',
      'jabatan' => $this->AllModel->get_data_jabatan(),
      'golongan' => $this->AllModel->get_data_golongan(),
      'ekstra' => $this->AllModel->get_data_ekstra(),
      'walikelas' => $this->AllModel->get_data_walikelas(),
    ];
    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar');
    $this->load->view('admin/gukar/create', $data);
    $this->load->view('templates/footer');
  }

  public function Store()
  {
    $this->_rules();
    if ($this->form_validation->run() == FALSE) {
      $this->Create();
    } else {
      $nbm = $this->input->post('nbm');
      $nama_pegawai = $this->input->post('nama_pegawai');
      $jabatan = $this->input->post('jabatan');
      $golongan = $this->input->post('golongan');
      $jabatan_wali_kelas = $this->input->post('jabatan_wali_kelas');
      $jabatan_guru_ekstra = $this->input->post('jabatan_guru_ekstra');
      $jenis_kelamin = $this->input->post('jenis_kelamin');
      $alamat = $this->input->post('alamat');
      $no_hp = $this->input->post('no_hp');
      $role = $this->input->post('role');
      $no_rekening = $this->input->post('no_rekening');
      $email = $this->input->post('email');
      $password = md5($this->input->post('password'));
      $kelebihan_jam = $this->input->post('kelebihan_jam');
      $foto = $_FILES['foto']['name'];
      if ($foto = '') {
      } else {
        $config['upload_path'] = './asset/img/photos';
        $config['allowed_types'] = 'jpg|jpeg|png|svg';
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('foto')) {
          echo "Foto Gagal Di Upload";
        } else {
          $foto = $this->upload->data('file_name');
        }
      }

      $data = array(
        'nbm' => $nbm,
        'nama_pegawai' => $nama_pegawai,
        'jabatan' => $jabatan,
        'golongan' => $golongan,
        'jabatan_wali_kelas' => $jabatan_wali_kelas,
        'jabatan_guru_ekstra' => $jabatan_guru_ekstra,
        'jenis_kelamin' => $jenis_kelamin,
        'alamat' => $alamat,
        'no_hp' => $no_hp,
        'role' => $role,
        'foto' => $foto,
        'no_rekening' => $no_rekening,
        'email' => $email,
        'password' => $password,
        'kelebihan_jam' => $kelebihan_jam,
      );

      $this->AllModel->insert_data_gukar($data, 'tbl_pegawai');
      $this->session->set_flashdata('success', 'Data Berhasil Disimpan!');
      redirect('admin/DataGukar');
    }
  }

  public function Edit($id)
  {
    $data = [
      'id' => $id,
      'title' => 'Halaman Update Data Gukar',
      'gukar' => $this->db->query("SELECT * FROM tbl_pegawai WHERE id = '$id'")->result(),
      'jabatan' => $this->AllModel->get_data_jabatan(),
      'golongan' => $this->AllModel->get_data_golongan(),
      'ekstra' => $this->AllModel->get_data_ekstra(),
      'walikelas' => $this->AllModel->get_data_walikelas(),
    ];

    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar');
    $this->load->view('admin/gukar/edit', $data);
    $this->load->view('templates/footer');
  }

  public function Update()
  {
    $this->_ruless();
    if ($this->form_validation->run() == FALSE) {
      $this->Edit();
    } else {
      $id = $this->input->post('id');
      $nbm = $this->input->post('nbm');
      $nama_pegawai = $this->input->post('nama_pegawai');
      $jabatan = $this->input->post('jabatan');
      $golongan = $this->input->post('golongan');
      $jabatan_wali_kelas = $this->input->post('jabatan_wali_kelas');
      $jabatan_guru_ekstra = $this->input->post('jabatan_guru_ekstra');
      $jenis_kelamin = $this->input->post('jenis_kelamin');
      $alamat = $this->input->post('alamat');
      $no_hp = $this->input->post('no_hp');
      $role = $this->input->post('role');
      $no_rekening = $this->input->post('no_rekening');
      $email = $this->input->post('email');
      $kelebihan_jam = $this->input->post('kelebihan_jam');
      $foto = $_FILES['foto']['name'];
      if ($foto) {
        $config['upload_path'] = './asset/img/photos';
        $config['allowed_types'] = 'jpg|jpeg|png|svg';
        $this->load->library('upload', $config);
        if ($this->upload->do_upload('foto')) {
          $foto = $this->upload->data('file_name');
          $this->db->set('foto', $foto);
        } else {
          echo $this->upload->display_errors();
        }
      }

      $data = array(
        'nbm' => $nbm,
        'nama_pegawai' => $nama_pegawai,
        'jabatan' => $jabatan,
        'golongan' => $golongan,
        'jabatan_wali_kelas' => $jabatan_wali_kelas,
        'jabatan_guru_ekstra' => $jabatan_guru_ekstra,
        'jenis_kelamin' => $jenis_kelamin,
        'alamat' => $alamat,
        'no_hp' => $no_hp,
        'role' => $role,
        'no_rekening' => $no_rekening,
        'email' => $email,
        'kelebihan_jam' => $kelebihan_jam,
      );

      $where = array(
        'id' => $id
      );

      $this->AllModel->update_data_gukar('tbl_pegawai', $data, $where);
      $this->session->set_flashdata('success', 'Data Berhasil Diperbaharui!');
      redirect('admin/DataGukar');
    }
  }

  public function Destroy($id)
  {
    $where = array(
      'id' => $id
    );
    $this->AllModel->delete_data_gukar($where, 'tbl_pegawai');
    $this->session->set_flashdata('success', 'Data Berhasil DiHapus!');
    redirect('admin/DataGukar');
  }
}