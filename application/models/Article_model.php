<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Article_model extends CI_Model {
    public function get_all(){
        $this->db->order_by('id', 'DESC');
        return $this->db->get('tb_article')->result();
    }
	
	public function getLimit($limit, $start){
		$this->db->limit($limit, $start);
		$this->db->order_by('id', 'DESC');
        return $this->db->get('tb_article')->result();
	}
	
	public function getCount(){
		$query = $this->db->query("SELECT COUNT(id) as jumlah FROM tb_article");
		return $query->row();
	}

    public function getById($id){
        return $this->db->get_where('tb_article', ['id' => $id])->row();
    }

    public function getBySlug($id){
        return $this->db->get_where('tb_article', ['slug' => $id])->row();
    }

    public function insert($data){
        return $this->db->insert('tb_article', $data);
    }

    public function update($id, $data){
        $this->db->where('id', $id);
        return $this->db->update('tb_article', $data);
    }

    public function delete($id){
        $this->db->where('id', $id);
        return $this->db->delete('tb_article');
    }
}