<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Team extends CI_Controller {

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
        $this->load->model('Team_model');
    }

	public function index()
	{
        $data['teams'] = $this->Team_model->get_all();
		$this->load->view('Back/Team/index', $data);
    }

    public function add(){
        $this->load->view('Back/Team/add');
    }

    public function insert(){
        $tgl=date('Y-m-d H:i:s');
		$th=date("Y");
		$b=date("m");
		$t=date("d");
		$h=date("H");
		$i=date("i");
		$s=date("s");
		$newfilename=$t.$b.$th.$h.$i.$s.str_replace(" ~[\\\\/:*?!","-",'Team');
		$config['upload_path']   = 'media/Team/';
		$config['max_size']	= '1000000000';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['file_name'] = $newfilename;
		$this->load->library('upload',$config);
        
		if($this->upload->do_upload('image')){
            $data = array(
                'name' => $this->input->post('name'),
                'description' => $this->input->post('description'),
                'image' => $this->upload->file_name
            );
            $this->Team_model->insert($data);
            redirect('Admin/Team');
        }else{
            var_dump($this->upload->display_errors());
        }
    }

    public function edit($id){
        $data['team'] = $this->Team_model->getById($id);
        $this->load->view('Back/Team/edit', $data);
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
            $newfilename=$t.$b.$th.$h.$i.$s.str_replace(" ~[\\\\/:*?!","-",'Team');
            $config['upload_path']   = 'media/Team/';
            $config['max_size']	= '1000000000';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['file_name'] = $newfilename;
            $this->load->library('upload',$config);
            
            if($this->upload->do_upload('image')){
                $data = array(
                    'name' => $this->input->post('name'),
                    'description' => $this->input->post('description'),
                    'image' => $this->upload->file_name
                );
                $this->Team_model->update($id, $data);
                redirect('Admin/Team');
            }else{
                var_dump($this->upload->display_errors());
            }
        }else{
            $data = array(
                'name' => $this->input->post('name'),
                'description' => $this->input->post('description')
            );
            $this->Team_model->update($id, $data);
            redirect('Admin/Team');
        }
    }

    public function delete($id){
        return $this->Team_model->delete($id);
    }
}
