<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Team_model extends CI_Model {
    public function get_all(){
        $this->db->order_by('id', 'DESC');
        return $this->db->get('tb_team')->result();
    }

    public function getById($id){
        return $this->db->get_where('tb_team', ['id' => $id])->row();
    }

    public function insert($data){
        return $this->db->insert('tb_team', $data);
    }

    public function update($id, $data){
        $this->db->where('id', $id);
        return $this->db->update('tb_team', $data);
    }

    public function delete($id){
        $this->db->where('id', $id);
        return $this->db->delete('tb_team');
    }
}