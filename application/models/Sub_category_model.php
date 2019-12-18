<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sub_category_model extends CI_Model {
    public function get_all(){
        $this->db->join('tb_category', 'tb_category.category_id = tb_sub_category.category_id', 'LEFT');
        $this->db->order_by('tb_sub_category.sub_category_id', 'DESC');
        return $this->db->get('tb_sub_category')->result();
    }

    public function getById($id){
        $this->db->join('tb_category', 'tb_category.category_id = tb_sub_category.category_id', 'LEFT');
        return $this->db->get_where('tb_sub_category', ['tb_sub_category.sub_category_id' => $id])->row();
    }

    public function getBySlug($slug){
        $this->db->join('tb_category', 'tb_category.category_id = tb_sub_category.category_id', 'LEFT');
        return $this->db->get_where('tb_sub_category', ['sub_category_id.sub_category_slug' => $slug])->row();
    }

    public function getByCategory($category_id){
        $this->db->join('tb_category', 'tb_category.category_id = tb_sub_category.category_id', 'LEFT');
        return $this->db->get_where('tb_sub_category', ['tb_sub_category.category_id' => $category_id])->result();
    }

    public function insert($data){
        return $this->db->insert('tb_sub_category', $data);
    }

    public function update($id, $data){
        $this->db->where('sub_category_id', $id);
        return $this->db->update('tb_sub_category', $data);
    }

    public function delete($id){
        $this->db->where('sub_category_id', $id);
        return $this->db->delete('tb_sub_category');
    }
}