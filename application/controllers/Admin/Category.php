<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
    function __construct() {
        parent::__construct();
        $this->load->model('Category_model');
    }

	public function index()
	{
        $data['categories'] = $this->Category_model->get_all();
		$this->load->view('Back/Category/index', $data);
    }

    public function add(){
        $this->load->view('Back/Category/add');
    }

    public function insert(){
        $tgl=date('Y-m-d H:i:s');
		$th=date("Y");
		$b=date("m");
		$t=date("d");
		$h=date("H");
		$i=date("i");
		$s=date("s");
		$newfilename=$t.$b.$th.$h.$i.$s.str_replace(" ~[\\\\/:*?!","-",'Category');
		$config['upload_path']   = 'media/Category/';
		$config['max_size']	= '1000000000';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['file_name'] = $newfilename;
		$this->load->library('upload',$config);
		
		if($this->upload->do_upload('image')){
            $data = array(
                'name_category' => $this->input->post('name_category'),
                'category_slug' => url_title($this->input->post('name_category')),
                'cat_image' => $this->upload->file_name
            );
            $this->Category_model->insert($data);
            redirect('Admin/Category');
        }else{
            var_dump($this->upload->display_errors());
        }
    }

    public function edit($id){
        $data['category'] = $this->Category_model->getById($id);
        $this->load->view('Back/Category/edit', $data);
    }

    public function update($id){
        if (!empty($_FILES['image']['name']))
		{
            $tgl=date('Y-m-d H:i:s');
            $th=date("Y");
            $b=date("m");
            $t=date("d");
            $h=date("H");
            $i=date("i");
            $s=date("s");
            $newfilename=$t.$b.$th.$h.$i.$s.str_replace(" ~[\\\\/:*?!","-",'Category');
            $config['upload_path']   = 'media/Category/';
            $config['max_size']	= '1000000000';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['file_name'] = $newfilename;
            $this->load->library('upload',$config);
            
            if($this->upload->do_upload('image')){
                $data = array(
                    'name_category' => $this->input->post('name_category'),
                    'category_slug' => url_title($this->input->post('name_category')),
                    'cat_image' => $this->upload->file_name
                );
                $this->Category_model->update($id, $data);
                redirect('Admin/Category');
            }else{
                var_dump($this->upload->display_errors());
            }
        }else{
            $data = array(
                'name_category' => $this->input->post('name_category'),
                'category_slug' => url_title($this->input->post('name_category'))
            );
            $this->Category_model->update($id, $data);
            redirect('Admin/Category');
        }
    }

    public function delete($id){
        return $this->Category_model->delete($id);
    }
}
