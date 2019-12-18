<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Settings_model extends CI_Model {
    public function getById($id){
        return $this->db->get_where('tb_settings', ['element_id' => $id])->row();
    }

    public function update($id, $data){
        $this->db->where('element_id', $id);
        return $this->db->update('tb_settings', $data);
    }
}