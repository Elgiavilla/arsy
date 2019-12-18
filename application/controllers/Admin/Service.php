<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Service extends CI_Controller {

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
        $this->load->model('Sub_category_model');
        $this->load->model('Category_model');
        $this->load->model('Service_model');
    }

	public function index()
	{
        $data['services'] = $this->Service_model->get_all();
		$this->load->view('Back/Service/index', $data);
    }

    public function add(){
        $data['categories'] = $this->Category_model->get_all();
        $this->load->view('Back/Service/add', $data);
    }

    public function ajaxSubCat($cat_id){
        $data['subcat'] = $this->Sub_category_model->getByCategory($cat_id);
        $this->load->view('Back/Service/sub_cat_ajax', $data);
    }

    public function insert(){
        $tgl=date('Y-m-d H:i:s');
		$th=date("Y");
		$b=date("m");
		$t=date("d");
		$h=date("H");
		$i=date("i");
		$s=date("s");
		$newfilename=$t.$b.$th.$h.$i.$s.str_replace(" ~[\\\\/:*?!","-",'Service');
		$config['upload_path']   = 'media/Service/';
		$config['max_size']	= '1000000000';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['file_name'] = $newfilename;
		$this->load->library('upload',$config);
        
		if($this->upload->do_upload('image')){
            $data = array(
				'category_id' => $this->input->post('category_id'),
                'service_name' => $this->input->post('service_name'),
                'description' => $this->input->post('description'),
                'itenary' => $this->input->post('itenary'),
                'location' => $this->input->post('location'),
                'service_slug' => url_title($this->input->post('service_name')),
                'service_image' => $this->upload->file_name
            );
            $this->Service_model->insert($data);
            redirect('Admin/Service');
        }else{
            var_dump($this->upload->display_errors());
        }
    }

    public function edit($id){
        $data['service'] = $this->Service_model->getById($id);
        $data['categories'] = $this->Category_model->get_all();
        $this->load->view('Back/Service/edit', $data);
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
            $newfilename=$t.$b.$th.$h.$i.$s.str_replace(" ~[\\\\/:*?!","-",'Service');
            $config['upload_path']   = 'media/Service/';
            $config['max_size']	= '1000000000';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['file_name'] = $newfilename;
            $this->load->library('upload',$config);
            
            if($this->upload->do_upload('image')){
                $data = array(
					'category_id' => $this->input->post('category_id'),
                    'service_name' => $this->input->post('service_name'),
                    'description' => $this->input->post('description'),
                    'itenary' => $this->input->post('itenary'),
                    'location' => $this->input->post('location'),
                    'service_slug' => url_title($this->input->post('service_name')),
                    'service_image' => $this->upload->file_name
                );
                $this->Service_model->update($id, $data);
                redirect('Admin/Service');
            }else{
                var_dump($this->upload->display_errors());
            }
        }else{
            $data = array(
				'category_id' => $this->input->post('category_id'),
                'service_name' => $this->input->post('service_name'),
                'description' => $this->input->post('description'),
                'itenary' => $this->input->post('itenary'),
                'location' => $this->input->post('location'),
                'service_slug' => url_title($this->input->post('service_name'))
            );
            $this->Service_model->update($id, $data);
            redirect('Admin/Service');
        }
    }

    public function delete($id){
        return $this->Service_model->delete($id);
    }
}
