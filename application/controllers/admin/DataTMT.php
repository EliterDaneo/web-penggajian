<?php
class DataTMT extends CI_Controller
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
    $this->form_validation->set_rules('nama_tmt', 'nama_tmt', 'required');
    $this->form_validation->set_rules('tunjangan_tmt', 'tunjangan_tmt', 'required');
  }

  public function index()
  {
    $data = [
      'title' => 'Halaman Data TMT',
      'tmt' => $this->AllModel->get_data_tmt()
    ];
    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar');
    $this->load->view('admin/tmt/index', $data);
    $this->load->view('templates/footer');
  }

  public function Import()
  {
    $data = [
      'title' => 'Halaman Import TMT',
    ];
    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar');
    $this->load->view('admin/tmt/import', $data);
    $this->load->view('templates/footer');
  }

  public function ImportTMT()
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

          $nama_tmt = $worksheet->getCellByColumnAndRow(0, $row)->getValue();
          $tunjangan_tmt = $worksheet->getCellByColumnAndRow(1, $row)->getValue();

          $data[] = array(
            'nama_tmt' => $nama_tmt,
            'tunjangan_tmt' => $tunjangan_tmt,
          );

          // $this->db->insert_batch('tbl_pegawai_new', $data);
        }
      }

      $this->AllModel->insert_batch_tmt('tbl_tmt', $data);

      $this->session->set_flashdata('success', 'Data Berhasil Diimport!');
      redirect('admin/DataTMT');
    } else {
      $this->session->set_flashdata('success', 'Data Berhasil Diimport!');
      redirect('admin/DataTMT');
    }
  }

  public function Create()
  {
    $data = [
      'title' => 'Halaman Tambah TMT',
    ];
    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar');
    $this->load->view('admin/tmt/create', $data);
    $this->load->view('templates/footer');
  }

  public function Store()
  {
    $this->_rules();
    if ($this->form_validation->run() == FALSE) {
      $this->Create();
    } else {
      $nama_tmt = $this->input->post('nama_tmt');
      $tunjangan_tmt = $this->input->post('tunjangan_tmt');

      $data = array(
        'nama_tmt' => $nama_tmt,
        'tunjangan_tmt' => $tunjangan_tmt,
      );

      $this->AllModel->insert_data_tmt($data, 'tbl_tmt');
      $this->session->set_flashdata('success', 'Data Berhasil Disimpan!');
      redirect('admin/DataTMT');
    }
  }

  public function Edit($id)
  {
    // $where = array('id' => $id);
    $data =
      [
        'id' => $id,
        'title' => 'Halaman Update Data tmt',
        'tmt' => $this->db->query("SELECT * FROM tbl_tmt WHERE id = '$id'")->result()
      ];

    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar');
    $this->load->view('admin/tmt/edit', $data);
    $this->load->view('templates/footer');
  }

  public function Update()
  {
    $this->_rules();
    if ($this->form_validation->run() == FALSE) {
      $this->Edit();
    } else {
      $id = $this->input->post('id');
      $nama_tmt = $this->input->post('nama_tmt');
      $tunjangan_tmt = $this->input->post('tunjangan_tmt');
      $data = array(
        'nama_tmt' => $nama_tmt,
        'tunjangan_tmt' => $tunjangan_tmt,
      );

      $where = array(
        'id' => $id
      );

      $this->AllModel->update_data_tmt('tbl_tmt', $data, $where);
      $this->session->set_flashdata('success', 'Data Berhasil Diperbaharui!');
      redirect('admin/DataTMT');
    }
  }

  public function Destroy($id)
  {
    $where = array(
      'id' => $id
    );
    $this->AllModel->delete_data_tmt($where, 'tbl_tmt');
    $this->session->set_flashdata('success', 'Data Berhasil DiHapus!');
    redirect('admin/DataTMT');
  }
}