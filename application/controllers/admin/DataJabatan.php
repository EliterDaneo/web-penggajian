<?php
class DataJabatan extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();

    if ($this->session->userdata('role') != 1) {
      $this->session->set_flashdata('error', 'Anda Tidak Mempunyai Akses! Silahkan Login Sesuai Role!!!');
      redirect('welcome');
    }
  }

  public function _rules()
  {
    $this->form_validation->set_rules('nama_jabatan', 'nama_jabatan', 'required');
    $this->form_validation->set_rules('tunjangan_jabatan', 'tunjangan_jabatan', 'required');
  }

  public function index()
  {
    $data = [
      'title' => 'Halaman Data Jabatan',
      'jabatan' => $this->AllModel->get_data_jabatan()
    ];
    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar');
    $this->load->view('admin/jabatan/index', $data);
    $this->load->view('templates/footer');
  }

  public function Import()
  {
    $data = [
      'title' => 'Halaman Import Jabatan',
    ];
    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar');
    $this->load->view('admin/jabatan/import', $data);
    $this->load->view('templates/footer');
  }

  public function ImportJabatan()
  {
    if (isset($_FILES["file"]["name"])) {
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

          $nama_jabatan = $worksheet->getCellByColumnAndRow(0, $row)->getValue();
          $tunjangan_jabatan = $worksheet->getCellByColumnAndRow(1, $row)->getValue();

          $data[] = array(
            'nama_jabatan' => $nama_jabatan,
            'tunjangan_jabatan' => $tunjangan_jabatan,
          );

          // $this->db->insert_batch('tbl_pegawai_new', $data);
        }
      }

      $this->AllModel->insert_batch_jabatan('tbl_jabatan', $data);

      $this->session->set_flashdata('success', 'Data Berhasil Diimport!');
      redirect('admin/DataJabatan');
    } else {
      $this->session->set_flashdata('error', 'Data Berhasil Diimport!');
      redirect('admin/DataJabatan');
    }
  }

  public function Create()
  {
    $data = [
      'title' => 'Halaman Tambah Jabatan',
    ];
    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar');
    $this->load->view('admin/jabatan/create', $data);
    $this->load->view('templates/footer');
  }

  public function Store()
  {
    $this->_rules();
    if ($this->form_validation->run() == FALSE) {
      $this->Create();
    } else {
      $nama_jabatan = $this->input->post('nama_jabatan');
      $tunjangan_jabatan = $this->input->post('tunjangan_jabatan');

      $data = array(
        'nama_jabatan' => $nama_jabatan,
        'tunjangan_jabatan' => $tunjangan_jabatan,
      );

      $this->AllModel->insert_data_jabatan($data, 'tbl_jabatan');
      $this->session->set_flashdata('success', 'Data Berhasil Disimpan!');
      redirect('admin/DataJabatan');
    }
  }

  public function Edit($id)
  {
    // $where = array('id' => $id);
    $data =
      [
        'id' => $id,
        'title' => 'Halaman Update Data Jabatan',
        'jabatan' => $this->db->query("SELECT * FROM tbl_jabatan WHERE id = '$id'")->result()
      ];

    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar');
    $this->load->view('admin/jabatan/edit', $data);
    $this->load->view('templates/footer');
  }

  public function Update()
  {
    $this->_rules();
    if ($this->form_validation->run() == FALSE) {
      $this->Edit();
    } else {
      $id = $this->input->post('id');
      $nama_jabatan = $this->input->post('nama_jabatan');
      $tunjangan_jabatan = $this->input->post('tunjangan_jabatan');
      $data = array(
        'nama_jabatan' => $nama_jabatan,
        'tunjangan_jabatan' => $tunjangan_jabatan,
      );

      $where = array(
        'id' => $id
      );

      $this->AllModel->update_data_jabatan('tbl_jabatan', $data, $where);
      $this->session->set_flashdata('success', 'Data Berhasil Diperbaharui!');
      redirect('admin/DataJabatan');
    }
  }

  public function Destroy($id)
  {
    $where = array(
      'id' => $id
    );
    $this->AllModel->delete_data_jabatan($where, 'tbl_jabatan');
    $this->session->set_flashdata('error', 'Data Berhasil DiHapus!');
    redirect('admin/DataJabatan');
  }
}