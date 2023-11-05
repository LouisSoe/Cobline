<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('HomeModel', 'home');
    }
    public function index()
    {
        if($this->session->login == false){
            $this->load->view('login');
        }else{
            if($this->session->level == 'admin'){
                $admin = $this->home->getAdmin();
                $nyoblos = $this->home->getNyoblos();
                $user = $this->home->getUser();
                $golput = $this->home->getGolput();
                $terbanyak = $this->home->getTerbanyak();
                $this->load->view('admin/dashboard', [
                    'admin' => $admin[0],
                    'nyoblos' => $nyoblos[0],
                    'user' => $user[0],
                    'terbanyak' => $terbanyak,
                    'golput' => $golput[0]['id']
                ]);
            }else{
                $data = $this->home->getPaslon();
                $this->load->view('index', ['data' => $data]);    
            }
        }
    }
   
    public function login()
    {
        $token = $this->input->post('token');

        $data = [
            'token' => $token
        ];
        $this->home->login($data);
    }

    public function logout()
    {
        $this->home->logout();
    }
    public function coblos($id)
    {
        $id_user = $this->session->id;
        $cek = $this->db->get_where("paslon", ['no_kandidat' => $id])->result_array();
        $pemilih = $cek[0]['pemilih'];
        $pemilih += 1;
        $data = ['pemilih' => $pemilih];
        $user = ['status' => 1];
        $this->db->update("paslon", $data, ['no_kandidat' => $id]);
        $this->db->update("user", $user, ['id' => $id_user]);
        $this->session->sess_destroy();
        redirect('home');
    }
    // public function golput()
    // {
    //     $data = [
    //         'id_user' => $this->session->id,
    //         'id_paslon' => 0,
    //         'tanggal' => date('d-m-Y')
    //     ];
    //     $this->home->golput($data);
    // }
	public function dashboard()
	{
		$this->load->view('admin/dashboard');
	}
    public function print()
    {
        $data = $this->db->query("SELECT no_kandidat, nama_ketua, pemilih FROM paslon")->result_array();
        $this->load->view('admin/print', ['data' => $data]);
    }
}
