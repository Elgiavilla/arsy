<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
		$this->load->model('Settings_model');
		$this->load->model('Sub_category_model');
		$this->load->model('Service_model');
		$this->load->model('Testimony_model');
		$this->load->model('Team_model');
		$this->load->model('Article_model');
		$this->load->library('pagination');
    }

	public function index()
	{
		$data['categories'] = $this->Category_model->get_all();
		$data['about_text'] = $this->Settings_model->getById('about_text');
		$data['home_bg_image'] = $this->Settings_model->getById('home_bg_image');
		$data['testimonials'] = $this->Testimony_model->get_all();
		$data['articles'] = $this->Article_model->getLimit(4, 0);
		$this->load->view('Front/home', $data);
	}

	public function service(){
		$data['categories'] = $this->Category_model->get_all();
		$this->load->view('Front/Service/index', $data);
	}
	
	public function serviceByCategory($slug){
		$data['services'] = $this->Service_model->getByCategory($slug);
		$data['category'] = $this->Category_model->getBySlug($slug);
		$this->load->view('Front/Service/category', $data);
	}

	public function detailService($slug){
		$data['service'] = $this->Service_model->getBySlug($slug);
		$this->load->view('Front/Service/detail', $data);
	}

	public function contactService($slug){
		$data = array(
			'service_id' => $this->input->post('service_id'),
			'name' => $this->input->post('name'),
			'email' => $this->input->post('email'),
			'phone_number' => $this->input->post('phone_number'),
			'company_name' => $this->input->post('company_name'),
			'tanggal' => date('Y-m-d h:i:s')
		);
		$this->db->insert('tb_contact', $data);
		redirect('service/detail/'.$slug);
	}

	public function about(){
		$data['our_vision_desc'] = $this->Settings_model->getById('our_vision_desc');
		$data['our_mission_desc'] = $this->Settings_model->getById('our_mission_desc');
		$data['our_mission_img'] = $this->Settings_model->getById('our_mission_img');
		$data['our_vision_img'] = $this->Settings_model->getById('our_vision_img');
		$data['about_description'] = $this->Settings_model->getById('about_description');
		$data['about_bg_image'] = $this->Settings_model->getById('about_bg_image');
		
		$data['teams'] = $this->Team_model->get_all();
		$this->load->view('Front/about', $data);
	}

	public function contact(){
		$data['contact_address'] = $this->Settings_model->getById('contact_address');
		$data['contact_telp'] = $this->Settings_model->getById('contact_telp');
		$data['contact_email'] = $this->Settings_model->getById('contact_email');
		$this->load->view('Front/contact', $data);
	}

	public function contactSubmit(){
		$data = array(
			'name' => $this->input->post('name'),
			'email' => $this->input->post('email'),
			'phone_number' => $this->input->post('phone_number'),
			'company_name' => $this->input->post('company_name'),
			'tanggal' => date('Y-m-d h:i:s')
		);
		$this->db->insert('tb_contact', $data);
		redirect('contact');
	}
	
	public function getTeamById($id){
		echo json_encode($this->Team_model->getById($id));
	}
	
	public function getArticle(){
		$config['base_url'] = site_url('Welcome/getArticle'); //site url
        $config['total_rows'] = $this->db->count_all('tb_article'); //total row
        $config['per_page'] = 12;  //show record per halaman
        $config["uri_segment"] = 3;  // uri parameter
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = floor($choice);
 
        // Membuat Style pagination untuk BootStrap v4
      $config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['next_link']        = 'Next';
        $config['prev_link']        = 'Prev';
        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';
 
        $this->pagination->initialize($config);
        $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
 
        //panggil function get_mahasiswa_list yang ada pada mmodel mahasiswa_model. 
        $data['articles'] = $this->Article_model->getLimit($config["per_page"], $data['page']);           
 
        $data['pagination'] = $this->pagination->create_links();
		$this->load->view('Front/Article/index', $data);
	}
	
	public function getArticleDetail($slug){
		$data['article'] = $this->Article_model->getBySlug($slug);
		$data['articles'] = $this->Article_model->getLimit(6, 0);
		$this->load->view('Front/Article/detail', $data);
	}
}
