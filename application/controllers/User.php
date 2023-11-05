<?php
defined('BASEPATH') or exit('No direct script access allowed');

require_once APPPATH . 'third_party/Spout/Autoloader/autoload.php';

use Box\Spout\Reader\Common\Creator\ReaderEntityFactory;


class User extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        require 'vendor/autoload.php';
        if($this->session->level != 'admin'){
			redirect('home');
		}
        $this->load->model('UserModel', 'user');
    }
    public function index()
    {
        $data = $this->user->getUser();
        $generator = new Picqer\Barcode\BarcodeGeneratorSVG();
        $this->load->view('admin/user/table-user', ['data' => $data, 'generator' => $generator]);
    }
    public function form($id = null)
    {
        $kelas = $this->db->get('kelas')->result_array();
        if ($id == null) {
            $this->load->view('admin/user/form-user', ['data' => null, 'kelas' => $kelas]);
        } else {
            $data = $this->user->getUser($id);
            $this->load->view('admin/user/form-user', ['data' => $data[0],'kelas' => $kelas]);
        }
    }
    public function submit($id = null)
    {
        $nama = $this->input->post('nama');
        $kelas = $this->input->post('kelas');
        $level = $this->input->post('level');
        $token = random_string('alnum', 6);

        if ($id == null) {
            $status = 0;
        } else {
            $status = $this->input->post('status');
        }

        $data = [
            'nama' => $nama,
            'id_kelas' => $kelas,
            'token' => $token,
            'level' => $level,
            'status' => $status,
            'tanggal' => date('d-m-Y')
        ];
        if ($id == null) {
            $this->user->submitData($data);
        } else {
            $this->user->submitData($data, $id);
        }
    }
    public function importExc()
    {
        $this->load->view('admin/user/importExc');
    }
    public function import()
    {
        $config['upload_path']          = './uploads/files/';
        $config['allowed_types']        = 'xlsx|xls|ods';
        $config['file_name']            = 'user' . time();

        $this->load->library('upload', $config);
        if ($this->upload->do_upload('excel_file')) {
            $file = $this->upload->data();
            $reader = ReaderEntityFactory::createXLSXReader();
            $reader->open('uploads/files/' . $file['file_name']);
            foreach ($reader->getSheetIterator() as $sheet) {
                $no = 1;
                foreach ($sheet->getRowIterator() as $row) {
                    $token = random_string('alnum', 6);
                    if ($no > 1) {
                        $data = [
                            'id' => $row->getCellAtIndex(0),
                            'nama' => $row->getCellAtIndex(1),
                            'id_kelas' => $row->getCellAtIndex(2),
                            'level' => $row->getCellAtIndex(3),
                            'token' => $token,
                            'status' => $row->getCellAtIndex(4),
                            'tanggal' => date('d-m-Y')
                        ];
                        // var_dump($data['nama']);
                        $this->user->ImportExc($data);
                    }
                    $no++;
                }
                $reader->close();
                unlink('uploads/files/' . $file['file_name']);
                redirect('user');
            }
        } else {
            echo "Error :" . $this->upload->display_errors();
        }
    }

    public function print()
    {
        $data = $this->user->getUser();
        $generator = new Picqer\Barcode\BarcodeGeneratorSVG();
        $this->load->view('admin/user/print', ['data' => $data, 'gen' => $generator]);
    }
    public function delete($id)
    {
        $this->user->deleteUser($id);
    }
}
