<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Testimony extends CI_Controller {

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
        $this->load->model('Testimony_model');
    }

	public function index()
	{
        $data['testimonies'] = $this->Testimony_model->get_all();
		$this->load->view('Back/Testimony/index', $data);
    }

    public function add(){
        $this->load->view('Back/Testimony/add');
    }

    public function insert(){
        $tgl=date('Y-m-d H:i:s');
		$th=date("Y");
		$b=date("m");
		$t=date("d");
		$h=date("H");
		$i=date("i");
		$s=date("s");
		$newfilename=$t.$b.$th.$h.$i.$s.str_replace(" ~[\\\\/:*?!","-",'Testimony');
		$config['upload_path']   = 'media/Testimony/';
		$config['max_size']	= '1000000000';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['file_name'] = $newfilename;
		$this->load->library('upload',$config);
        
		if($this->upload->do_upload('image')){
            $data = array(
                'name' => $this->input->post('name'),
                'testimony' => $this->input->post('testimony'),
                'image' => $this->upload->file_name
            );
            $this->Testimony_model->insert($data);
            redirect('Admin/Testimony');
        }else{
            var_dump($this->upload->display_errors());
        }
    }

    public function edit($id){
        $data['testimony'] = $this->Testimony_model->getById($id);
        $this->load->view('Back/Testimony/edit', $data);
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
            $newfilename=$t.$b.$th.$h.$i.$s.str_replace(" ~[\\\\/:*?!","-",'Testimony');
            $config['upload_path']   = 'media/Testimony/';
            $config['max_size']	= '1000000000';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['file_name'] = $newfilename;
            $this->load->library('upload',$config);
            
            if($this->upload->do_upload('image')){
                $data = array(
                    'name' => $this->input->post('name'),
                    'testimony' => $this->input->post('testimony'),
                    'image' => $this->upload->file_name
                );
                $this->Testimony_model->update($id, $data);
                redirect('Admin/Testimony');
            }else{
                var_dump($this->upload->display_errors());
            }
        }else{
            $data = array(
                'name' => $this->input->post('name'),
                'testimony' => $this->input->post('testimony'),
                'image' => $this->upload->file_name
            );
            $this->Testimony_model->update($id, $data);
            redirect('Admin/Testimony');
        }
    }

    public function delete($id){
        return $this->Testimony_model->delete($id);
    }
}
