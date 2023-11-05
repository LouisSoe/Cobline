<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PaslonModel extends CI_Model {
    public function getPaslon($id = null)
    {
        if($id == null){
            return $this->db->get('paslon')->result_array();
        }else{
            return $this->db->get_where('paslon', ['no_kandidat' => $id])->result_array();
        }
    }
    public function getPaslonApi($id = null, $type = null)
    {
        if ($id == null && $type == null) {
            return $this->db->get('paslon')->result_array();
        } else {
            if ($type == null) {
                return $this->db->get_where('paslon', ['no_kandidat' => $id])->result_array();
            } else {
                if ($type == 'ketua') {
                    return $this->db->query("SELECT image_ketua FROM paslon WHERE no_kandidat=$id")->result_array();
                } else if ($type == 'wakil') {
                    return $this->db->query("SELECT image_wakil FROM paslon WHERE no_kandidat=$id")->result_array();
                }
            }
        }
    }
    public function submitData($data, $id = null)
    {
        if($id == null){
            $this->db->insert('paslon', $data);
        }else{
            $this->db->update('paslon', $data, ['no_kandidat' => $id]);
        }
        redirect('paslon');
        
    }
    public function deleteData($id)
    {
        $this->db->delete('paslon',['id' => $id]);
        redirect('paslon');
    }
}
