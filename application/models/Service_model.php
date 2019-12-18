<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Service_model extends CI_Model {
    public function get_all(){
		$this->db->join('tb_category', 'tb_category.category_id = tb_service.category_id', 'LEFT');
        $this->db->order_by('tb_service.service_id', 'DESC');
        return $this->db->get('tb_service')->result();
    }

    public function getById($id){
		$this->db->join('tb_category', 'tb_category.category_id = tb_service.category_id', 'LEFT');
        return $this->db->get_where('tb_service', ['tb_service.service_id' => $id])->row();
    }

    public function getBySlug($slug){
		$this->db->join('tb_category', 'tb_category.category_id = tb_service.category_id', 'LEFT');
        return $this->db->get_where('tb_service', ['tb_service.service_slug' => $slug])->row();
    }

    public function getByCategory($category_id){
		$this->db->join('tb_category', 'tb_category.category_id = tb_service.category_id', 'LEFT');
        return $this->db->get_where('tb_service', ['tb_category.category_slug' => $category_id])->result();
    }

    public function getBySubCategory($category_id){
        return $this->db->get_where('tb_service', ['tb_service.sub_category_id' => $category_id])->result();
    }

    public function insert($data){
        return $this->db->insert('tb_service', $data);
    }

    public function update($id, $data){
        $this->db->where('service_id', $id);
        return $this->db->update('tb_service', $data);
    }

    public function delete($id){
        $this->db->where('service_id', $id);
        return $this->db->delete('tb_service');
    }
}