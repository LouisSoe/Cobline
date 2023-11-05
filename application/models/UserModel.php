<?php
defined('BASEPATH') or exit('No direct script access allowed');

class UserModel extends CI_Model
{
    public function getUser($id = null)
    {
        if ($id == null) {
            return $this->db->query("SELECT * FROM user INNER JOIN kelas ON user.id_kelas = kelas.id_kelas")->result_array();
        } else {
            return $this->db->get_where('user', ['id' => $id])->result_array();
        }
    }
    public function submitData($data, $id = null)
    {
        if ($id == null) {
            $submit = $this->db->insert('user', $data);
        } else {
            $submit = $this->db->update('user', $data, ['id' => $id]);
        }
        redirect('user');
    }
    public function deleteUser($id)
    {
        $this->db->delete('user', ['id' => $id]);
        redirect('user');
    }
    public function importExc($data)
    {
        // var_dump(count($data));
        if (count($data) > 0) {
            $this->db->replace('user', $data);
        }
    }
}
