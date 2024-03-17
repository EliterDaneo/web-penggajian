<?php
class DataEkstra extends CI_Controller
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
    $this->form_validation->set_rules('nama_ekstra', 'nama_ekstra', 'required');
    $this->form_validation->set_rules('tunjangan_ekstra', 'tunjangan', 'required');
  }

  public function index()
  {
    $data = [
      'title' => 'Halaman Data Ekstra',
      'ekstra' => $this->AllModel->get_data_ekstra()
    ];
    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar');
    $this->load->view('admin/ekstra/index', $data);
    $this->load->view('templates/footer');
  }

  public function Import()
  {
    $data = [
      'title' => 'Halaman Import Ekstra',
    ];
    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar');
    $this->load->view('admin/ekstra/import', $data);
    $this->load->view('templates/footer');
  }

  public function ImportEkstra()
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

          $nama_ekstra = $worksheet->getCellByColumnAndRow(0, $row)->getValue();
          $tunjangan_ekstra = $worksheet->getCellByColumnAndRow(1, $row)->getValue();

          $data[] = array(
            'nama_ekstra' => $nama_ekstra,
            'tunjangan_ekstra' => $tunjangan_ekstra,
          );

          // $this->db->insert_batch('tbl_pegawai_new', $data);
        }
      }

      $this->AllModel->insert_batch_ekstra('tbl_ekstra', $data);

      $this->session->set_flashdata('success', 'Data Berhasil Diimport!');
      redirect('admin/DataEkstra');
    } else {
      $this->session->set_flashdata('error', 'Data Berhasil Diimport!');
      redirect('admin/DataEkstra');
    }
  }

  public function Create()
  {
    $data = [
      'title' => 'Halaman Tambah Ekstra',
    ];
    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar');
    $this->load->view('admin/ekstra/create', $data);
    $this->load->view('templates/footer');
  }

  public function Store()
  {
    $this->_rules();
    if ($this->form_validation->run() == FALSE) {
      $this->Create();
    } else {
      $nama_ekstra = $this->input->post('nama_ekstra');
      $tunjangan_ekstra = $this->input->post('tunjangan_ekstra');

      $data = array(
        'nama_ekstra' => $nama_ekstra,
        'tunjangan_ekstra' => $tunjangan_ekstra,
      );

      $this->AllModel->insert_data_ekstra($data, 'tbl_ekstra');
      $this->session->set_flashdata('success', 'Data Berhasil Disimpan!');
      redirect('admin/DataEkstra');
    }
  }

  public function Edit($id)
  {
    // $where = array('id' => $id);
    $data =
      [
        'id' => $id,
        'title' => 'Halaman Update Data Ekstra',
        'ekstra' => $this->db->query("SELECT * FROM tbl_ekstra WHERE id = '$id'")->result()
      ];

    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar');
    $this->load->view('admin/ekstra/edit', $data);
    $this->load->view('templates/footer');
  }

  public function Update()
  {
    $this->_rules();
    if ($this->form_validation->run() == FALSE) {
      $this->Edit();
    } else {
      $id = $this->input->post('id');
      $nama_ekstra = $this->input->post('nama_ekstra');
      $tunjangan_ekstra = $this->input->post('tunjangan_ekstra');
      $data = array(
        'nama_ekstra' => $nama_ekstra,
        'tunjangan_ekstra' => $tunjangan_ekstra,
      );

      $where = array(
        'id' => $id
      );

      $this->AllModel->update_data_ekstra('tbl_ekstra', $data, $where);
      $this->session->set_flashdata('success', 'Data Berhasil Diperbaharui!');
      redirect('admin/DataEkstra');
    }
  }

  public function Destroy($id)
  {
    $where = array(
      'id' => $id
    );
    $this->AllModel->delete_data_ekstra($where, 'tbl_ekstra');
    $this->session->set_flashdata('error', 'Data Berhasil DiHapus!');
    redirect('admin/DataEkstra');
  }
}
