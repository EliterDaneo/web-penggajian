<?php
class DataWaliKelas extends CI_Controller
{

  public function _rules()
  {
    $this->form_validation->set_rules('nama_walikelas', 'nama_walikelas', 'required');
    $this->form_validation->set_rules('tunjangan_walikelas', 'tunjangan_walikelas', 'required');
  }

  public function index()
  {
    $data = [
      'title' => 'Halaman Data walikelas',
      'walikelas' => $this->AllModel->get_data_walikelas()
    ];
    $this->load->view('templates/header');
    $this->load->view('templates/sidebar');
    $this->load->view('admin/walikelas/index', $data);
    $this->load->view('templates/footer');
  }

  public function Import()
  {
    $data = [
      'title' => 'Halaman Import walikelas',
    ];
    $this->load->view('templates/header');
    $this->load->view('templates/sidebar');
    $this->load->view('admin/walikelas/import', $data);
    $this->load->view('templates/footer');
  }

  public function Importwalikelas()
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

          $nama_walikelas = $worksheet->getCellByColumnAndRow(0, $row)->getValue();
          $tunjangan_walikelas = $worksheet->getCellByColumnAndRow(1, $row)->getValue();

          $data[] = array(
            'nama_walikelas' => $nama_walikelas,
            'tunjangan_walikelas' => $tunjangan_walikelas,
          );

          // $this->db->insert_batch('tbl_pegawai_new', $data);
        }
      }

      $this->AllModel->insert_batch_walikelas('tbl_walikelas', $data);

      $this->session->set_flashdata('success', 'Data Berhasil Diimport!');
      redirect('admin/DataWaliKelas');
    } else {
      $this->session->set_flashdata('error', 'Data Berhasil Diimport!');
      redirect('admin/DataWaliKelas');
    }
  }

  public function Create()
  {
    $data = [
      'title' => 'Halaman Tambah walikelas',
    ];
    $this->load->view('templates/header');
    $this->load->view('templates/sidebar');
    $this->load->view('admin/walikelas/create', $data);
    $this->load->view('templates/footer');
  }

  public function Store()
  {
    $this->_rules();
    if ($this->form_validation->run() == FALSE) {
      $this->Create();
    } else {
      $nama_walikelas = $this->input->post('nama_walikelas');
      $tunjangan_walikelas = $this->input->post('tunjangan_walikelas');

      $data = array(
        'nama_walikelas' => $nama_walikelas,
        'tunjangan_walikelas' => $tunjangan_walikelas,
      );

      $this->AllModel->insert_data_walikelas($data, 'tbl_walikelas');
      $this->session->set_flashdata('success', 'Data Berhasil Disimpan!');
      redirect('admin/DataWaliKelas');
    }
  }

  public function Edit($id)
  {
    // $where = array('id' => $id);
    $data =
      [
        'id' => $id,
        'title' => 'Halaman Update Data walikelas',
        'walikelas' => $this->db->query("SELECT * FROM tbl_walikelas WHERE id = '$id'")->result()
      ];

    $this->load->view('templates/header');
    $this->load->view('templates/sidebar');
    $this->load->view('admin/walikelas/edit', $data);
    $this->load->view('templates/footer');
  }

  public function Update()
  {
    $this->_rules();
    if ($this->form_validation->run() == FALSE) {
      $this->Edit();
    } else {
      $id = $this->input->post('id');
      $nama_walikelas = $this->input->post('nama_walikelas');
      $tunjangan_walikelas = $this->input->post('tunjangan_walikelas');
      $data = array(
        'nama_walikelas' => $nama_walikelas,
        'tunjangan_walikelas' => $tunjangan_walikelas,
      );

      $where = array(
        'id' => $id
      );

      $this->AllModel->update_data_walikelas('tbl_walikelas', $data, $where);
      $this->session->set_flashdata('success', 'Data Berhasil Diperbaharui!');
      redirect('admin/DataWaliKelas');
    }
  }

  public function Destroy($id)
  {
    $where = array(
      'id' => $id
    );
    $this->AllModel->delete_data_walikelas($where, 'tbl_walikelas');
    $this->session->set_flashdata('error', 'Data Berhasil DiHapus!');
    redirect('admin/DataWaliKelas');
  }
}