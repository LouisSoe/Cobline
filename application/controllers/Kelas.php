<?php
defined('BASEPATH') or exit('No direct script access allowed');

require_once APPPATH . 'third_party/Spout/Autoloader/autoload.php';

use Box\Spout\Reader\Common\Creator\ReaderEntityFactory;


class Kelas extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if($this->session->level != 'admin'){
			redirect('home');
		}
        $this->load->model('KelasModel', 'kelas');
    }
    public function index()
    {
        $data = $this->kelas->getKelas();
        $this->load->view('admin/kelas/table-kelas', ['data' => $data]);
    }
    public function form($id = null)
    {
        if ($id == null) {
            $this->load->view('admin/kelas/form-kelas', ['data' => null]);
        } else {
            $data = $this->kelas->getKelas($id);
            $this->load->view('admin/kelas/form-kelas', ['data' => $data[0]]);
        }
    }
    public function submit($id = null)
    {
        $nama_kelas = $this->input->post('nama_kelas');

        $data = [
            'nama_kelas' => $nama_kelas,
        ];
        if ($id == null) {
            $this->kelas->submitData($data);
        } else {
            $this->kelas->submitData($data, $id);
        }
    }
    public function delete($id)
    {
        $this->kelas->deleteKelas($id);
    }
}
