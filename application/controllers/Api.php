<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use chriskacerguis\RestServer\RestController;

require APPPATH . 'libraries/RestController.php';
require APPPATH . 'libraries/Format.php';

class Api extends RestController
{
	public function __construct()
	{
		parent::__construct();
		if($this->session->level != 'admin'){
			redirect('home');
		}
		$this->load->model('PaslonModel', 'paslon');
		$this->load->model('HomeModel', 'home');
	}
	public function index_get($id = null, $type = null)
	{

		if($id == null && $type == null)
		{
			$paslon = $this->paslon->getPaslonApi();
		}else
		{
			if($type == null){
				$paslon = $this->paslon->getPaslonApi($id);
			}else{
				$paslon = $this->paslon->getPaslonApi($id, $type);
			}
		}
		if($paslon){
			$this->response([
				'status' => true,
				'message' => 'Data paslon ditemukan',
				'data'  => $paslon
			], RestController::HTTP_OK);
		}else{
			$this->response([
				'status' => false,
				'message' => 'Id tidak ditemukan'
			], RestController::HTTP_NOT_FOUND);
		}
	}
	public function index_post()
	{
		$data = [
			'token' => $this->input->post('token'),
		];
		$cek = $this->db->get_where('user', ['token' => $data['token'], 'status' => 0, 'level' => 'user'])->result_array();
		if($cek != null){
			echo "berhasil login";
		}else{
			echo "gagal login";
		}
	}
	public function index_put($id, $id_user)
	{
		$cek = $this->db->get_where("paslon", ['no_kandidat' => $id])->result_array();
        $pemilih = $cek[0]['pemilih'];
        $pemilih += 1;
        $data = ['pemilih' => $pemilih];
        $user = ['status' => 1];
        $this->db->update("paslon", $data, ['no_kandidat' => $id]);
        $this->db->update("user", $user, ['id' => $id_user]);
	}
}