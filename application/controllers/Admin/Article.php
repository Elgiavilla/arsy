<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Article extends CI_Controller {

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
		$this->load->model('Article_model');
    }

	public function index()
	{
        $data['articles'] = $this->Article_model->get_all();
		$this->load->view('Back/Article/index', $data);
    }

    public function add(){
        $this->load->view('Back/Article/add');
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
		$config['upload_path']   = 'media/Article/';
		$config['max_size']	= '1000000000';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['file_name'] = $newfilename;
		$this->load->library('upload',$config);
		
		if($this->upload->do_upload('image')){
            $data = array(
                    'title' => $this->input->post('title'),
					'excerpt' => $this->input->post('excerpt'),
					'content' => $this->input->post('content'),
                    'slug' => url_title($this->input->post('title')),
                    'image' => $this->upload->file_name,
					'date_posted' => date('Y:m:d')
            );
            $this->Article_model->insert($data);
            redirect('Admin/Article');
        }else{
            var_dump($this->upload->display_errors());
        }
    }

    public function edit($id){
        $data['article'] = $this->Article_model->getById($id);
        $this->load->view('Back/Article/edit', $data);
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
            $config['upload_path']   = 'media/Article/';
            $config['max_size']	= '1000000000';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['file_name'] = $newfilename;
            $this->load->library('upload',$config);
            
            if($this->upload->do_upload('image')){
                $data = array(
                    'title' => $this->input->post('title'),
					'excerpt' => $this->input->post('excerpt'),
					'content' => $this->input->post('content'),
                    'slug' => url_title($this->input->post('title')),
                    'image' => $this->upload->file_name,
					'date_posted' => date('Y:m:d')
                );
                $this->Article_model->update($id, $data);
                redirect('Admin/Article');
            }else{
                var_dump($this->upload->display_errors());
            }
        }else{
            $data = array(
                    'title' => $this->input->post('title'),
					'excerpt' => $this->input->post('excerpt'),
					'content' => $this->input->post('content'),
                    'slug' => url_title($this->input->post('title'))
                );
            $this->Article_model->update($id, $data);
            redirect('Admin/Article');
        }
    }

    public function delete($id){
        return $this->Article_model->delete($id);
    }
}
