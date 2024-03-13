<?php
class DataGolongan extends CI_Controller
{

  public function _rules()
  {
    $this->form_validation->set_rules('nama_golongan', 'nama_golongan', 'required');
    $this->form_validation->set_rules('tunjangan_golongan', 'tunjangan_golongan', 'required');
  }

  public function index()
  {
    $data = [
      'title' => 'Halaman Data Golongan',
      'golongan' => $this->AllModel->get_data_golongan()
    ];
    $this->load->view('templates/header');
    $this->load->view('templates/sidebar');
    $this->load->view('admin/golongan/index', $data);
    $this->load->view('templates/footer');
  }

  public function Import()
  {
    $data = [
      'title' => 'Halaman Import Golongan',
    ];
    $this->load->view('templates/header');
    $this->load->view('templates/sidebar');
    $this->load->view('admin/golongan/import', $data);
    $this->load->view('templates/footer');
  }

  public function ImportGolongan()
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

          $nama_golongan = $worksheet->getCellByColumnAndRow(0, $row)->getValue();
          $tunjangan_golongan = $worksheet->getCellByColumnAndRow(1, $row)->getValue();

          $data[] = array(
            'nama_golongan'      => $nama_golongan,
            'tunjangan_golongan'          => $tunjangan_golongan,
          );

          // $this->db->insert_batch('tbl_pegawai_new', $data);
        }
      }

      $this->AllModel->insert_batch_golongan('tbl_golongan', $data);

      $this->session->set_flashdata('success', 'Data Berhasil Diimport!');
      redirect('admin/DataGolongan');
    } else {
      $this->session->set_flashdata('error', 'Data Berhasil Diimport!');
      redirect('admin/DataGolongan');
    }
  }

  public function Create()
  {
    $data = [
      'title' => 'Halaman Tambah Golongan',
    ];
    $this->load->view('templates/header');
    $this->load->view('templates/sidebar');
    $this->load->view('admin/golongan/create', $data);
    $this->load->view('templates/footer');
  }

  public function Store()
  {
    $this->_rules();
    if ($this->form_validation->run() == FALSE) {
      $this->Create();
    } else {
      $nama_golongan = $this->input->post('nama_golongan');
      $tunjangan_golongan = $this->input->post('tunjangan_golongan');

      $data = array(
        'nama_golongan' => $nama_golongan,
        'tunjangan_golongan' => $tunjangan_golongan,
      );

      $this->AllModel->insert_data_golongan($data, 'tbl_golongan');
      $this->session->set_flashdata('success', 'Data Berhasil Disimpan!');
      redirect('admin/DataGolongan');
    }
  }

  public function Edit($id)
  {
    // $where = array('id' => $id);
    $data =
      [
        'id' => $id,
        'title' => 'Halaman Update Data Golongan',
        'golongan' => $this->db->query("SELECT * FROM tbl_golongan WHERE id = '$id'")->result()
      ];

    $this->load->view('templates/header');
    $this->load->view('templates/sidebar');
    $this->load->view('admin/golongan/edit', $data);
    $this->load->view('templates/footer');
  }

  public function Update()
  {
    $this->_rules();
    if ($this->form_validation->run() == FALSE) {
      $this->Edit();
    } else {
      $id = $this->input->post('id');
      $nama_golongan = $this->input->post('nama_golongan');
      $tunjangan_golongan = $this->input->post('tunjangan_golongan');
      $data = array(
        'nama_golongan' => $nama_golongan,
        'tunjangan_golongan' => $tunjangan_golongan,
      );

      $where = array(
        'id' => $id
      );

      $this->AllModel->update_data_golongan('tbl_golongan', $data, $where);
      $this->session->set_flashdata('success', 'Data Berhasil Diperbaharui!');
      redirect('admin/DataGolongan');
    }
  }

  public function Destroy($id)
  {
    $where = array(
      'id' => $id
    );
    $this->AllModel->delete_data_golongan($where, 'tbl_golongan');
    $this->session->set_flashdata('error', 'Data Berhasil DiHapus!');
    redirect('admin/DataGolongan');
  }
}
