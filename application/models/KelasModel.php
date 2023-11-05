<?php
defined('BASEPATH') or exit('No direct script access allowed');

class KelasModel extends CI_Model
{
    public function getKelas($id = null)
    {
        if ($id == null) {
            return $this->db->get('kelas')->result_array();
        } else {
            return $this->db->get_where('kelas', ['id_kelas' => $id])->result_array();
        }
    }
    public function submitData($data, $id = null)
    {
        if ($id == null) {
            $submit = $this->db->insert('kelas', $data);
        } else {
            $submit = $this->db->update('kelas', $data, ['id_kelas' => $id]);
        }
        redirect('kelas');
    }
    public function deleteKelas($id)
    {
        $this->db->delete('kelas', ['id_kelas' => $id]);
        redirect('kelas');
    }
}
