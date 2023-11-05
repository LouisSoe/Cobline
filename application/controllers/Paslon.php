<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Paslon extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('PaslonModel', 'paslon');
        if($this->session->level != 'admin' ){
			redirect('home');
		}
    }

    public function index()
    {
        $data = $this->paslon->getPaslon();
        $this->load->view('admin/paslon/table-paslon', ['data' => $data]);
    }

    public function form($id = null)
    {
        if ($id == null) {
            $this->load->view('admin/paslon/form-paslon', ['data' => null]);
        } else {
            $data = $this->paslon->getPaslon($id);
            $calon = $this->input->get('calon');
            $this->load->view('admin/paslon/form-paslon', ['data' => $data[0], 'calon' => $calon]);
        }
    }
    public function submit()
    {
        $nama_ketua = $this->input->post('nama_ketua');
        $nama_wakil = $this->input->post('nama_wakil');
        $kandidat = $this->input->post('kandidat');

        $image = $_FILES['image']['name'];
        $path = base_url('uploads/images/');
        $config['upload_path']          = './uploads/images/';
        $config['allowed_types']        = 'jpeg|jpg|png';

        $this->load->library('upload', $config);
        $this->upload->do_upload('image');

        $data = [
            'no_kandidat' => $kandidat,
            'nama_ketua' => $nama_ketua,
            'nama_wakil' => $nama_wakil,
            'image' => $image
        ];
        $this->paslon->submitData($data);
    }
    public function update($id)
    {
        $nama_ketua = $this->input->post('nama_ketua');
        $nama_wakil = $this->input->post('nama_wakil');
        $image = $_FILES['gambar']['name'];
        $config['upload_path']          = './uploads/images/';
        $config['allowed_types']        = 'jpeg|jpg|png';

        $this->load->library('upload', $config);
        $old_image = $this->input->post('old_image');
        unlink($old_image);
        $this->upload->do_upload('gambar');



       $data = [
        'nama_ketua' => $nama_ketua,
        'nama_wakil' => $nama_wakil,
        'image'     => $image
       ];
        $this->paslon->submitData($data, $id);
    }

    public function delete($id)
    {
        $this->paslon->deleteData($id);
    }
}
