<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Category_model extends CI_Model {
    public function get_all(){
        $this->db->order_by('category_id', 'DESC');
        return $this->db->get('tb_category')->result();
    }

    public function getById($id){
        return $this->db->get_where('tb_category', ['category_id' => $id])->row();
    }

    public function getBySlug($id){
        return $this->db->get_where('tb_category', ['category_slug' => $id])->row();
    }

    public function insert($data){
        return $this->db->insert('tb_category', $data);
    }

    public function update($id, $data){
        $this->db->where('category_id', $id);
        return $this->db->update('tb_category', $data);
    }

    public function delete($id){
        $this->db->where('category_id', $id);
        return $this->db->delete('tb_category');
    }
}