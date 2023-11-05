<?php
defined('BASEPATH') or exit('No direct script access allowed');

class HomeModel extends CI_Model
{
    public function getPaslon()
    {
        return $this->db->get('paslon')->result_array();
    }
    public function login($data)
    {
        $cek = $this->db->get_where('user', ['token' => $data['token']]);
        if ($cek->num_rows() > 0) {
            $qu = $cek->result_array();
            if ($qu[0]['status'] == 1) {
                redirect('home');
                // echo "maaf kamu sudah mencoblos";
            } else {
                $sess = [
                    'id' => $qu[0]['id'],
                    'nama' => $qu[0]['nama'],
                    'level' => $qu[0]['level'],
                    'login' => true
                ];
                $this->session->set_userdata($sess);
                redirect('home');
            }
        } else {
            redirect('home');
        }
    }
    // public function golput($data)
    // {
    //     $this->db->insert('coblos', $data);
    //     return $this->logout();
    // }
    public function getAdmin()
    {
        return $this->db->query('SELECT COUNT(id) id FROM user WHERE level="admin"')->result_array();
    }
    public function getNyoblos()
    {
        return $this->db->query('SELECT COUNT(id) id FROM user WHERE status="1" AND level="user"')->result_array();
    }
    public function getUser()
    {
        return $this->db->query('SELECT COUNT(id) id FROM user WHERE level="user"')->result_array();
    }
    public function getTerbanyak()
    {
        return $this->db->query('SELECT * FROM paslon ORDER BY pemilih DESC LIMIT 1')->result_array();
    }
    public function getGolput()
    {
        return $this->db->query("SELECT COUNT(id) id FROM user WHERE status='0' AND level='user'")->result_array();
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('home');
    }
}
