<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Settings extends CI_Controller {

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
        $this->load->model('Settings_model');
    }

    public function home(){
        $data['about_text'] = $this->Settings_model->getById('about_text');
        $data['home_bg_image'] = $this->Settings_model->getById('home_bg_image');
        $this->load->view('Back/Settings/home', $data);
    }

    public function updateHomePage(){
        if (!empty($_FILES['image']['name']))
		{
            $tgl=date('Y-m-d H:i:s');
            $th=date("Y");
            $b=date("m");
            $t=date("d");
            $h=date("H");
            $i=date("i");
            $s=date("s");
            $newfilename=$t.$b.$th.$h.$i.$s.str_replace(" ~[\\\\/:*?!","-",'home');
            $config['upload_path']   = 'media/Settings/';
            $config['max_size']	= '1000000000';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['file_name'] = $newfilename;
            $this->load->library('upload',$config);
                
            if($this->upload->do_upload('image')){
                $dataText = array(
                    'value' => $this->input->post('text')
                );
                $this->Settings_model->update('about_text' ,$dataText);

                $dataImage = array(
                    'value' => $this->upload->file_name
                );
                $this->Settings_model->update('home_bg_image' ,$dataImage);
                redirect('Admin/Settings/home');
            }else{
                var_dump($this->upload->display_errors());
            }
        }else{
            $dataText = array(
                'value' => $this->input->post('text')
            );
            $this->Settings_model->update('about_text' ,$dataText);
            redirect('Admin/Settings/home');
        }
    }

    public function about(){
        $data['about_description'] = $this->Settings_model->getById('about_description');
        $data['about_bg_image'] = $this->Settings_model->getById('about_bg_image');
        $data['about_us_text'] = $this->Settings_model->getById('about_us_text');
        $this->load->view('Back/Settings/about', $data);
    }

    public function editAboutUs(){
        if (!empty($_FILES['image']['name']))
		{
            $tgl=date('Y-m-d H:i:s');
            $th=date("Y");
            $b=date("m");
            $t=date("d");
            $h=date("H");
            $i=date("i");
            $s=date("s");
            $newfilename=$t.$b.$th.$h.$i.$s.str_replace(" ~[\\\\/:*?!","-",'about');
            $config['upload_path']   = 'media/Settings/';
            $config['max_size']	= '1000000000';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['file_name'] = $newfilename;
            $this->load->library('upload',$config);
                
            if($this->upload->do_upload('image')){
                $dataText = array(
                    'value' => $this->input->post('text')
                );
                $this->Settings_model->update('about_description' ,$dataText);

                $dataImage = array(
                    'value' => $this->upload->file_name
                );
                $this->Settings_model->update('about_bg_image' ,$dataImage);
                redirect('Admin/Settings/about');
            }else{
                var_dump($this->upload->display_errors());
            }
        }else{
            $dataText = array(
                'value' => $this->input->post('text')
            );
            $this->Settings_model->update('about_description' ,$dataText);
            redirect('Admin/Settings/about');
        }
    }

    public function shortTextAboutUs(){
        $dataText = array(
            'value' => $this->input->post('text')
        );
        $this->Settings_model->update('about_us_text' ,$dataText);
        redirect('Admin/Settings/about');
    }

    public function mission(){
        $data['our_vision_desc'] = $this->Settings_model->getById('our_vision_desc');
        $data['our_mission_desc'] = $this->Settings_model->getById('our_mission_desc');
        $data['our_mission_img'] = $this->Settings_model->getById('our_mission_img');
        $data['our_vision_img'] = $this->Settings_model->getById('our_vision_img');
        $this->load->view('Back/Settings/mission', $data);
    }

    public function editVision($text, $img){
        if (!empty($_FILES['image']['name']))
		{
            $tgl=date('Y-m-d H:i:s');
            $th=date("Y");
            $b=date("m");
            $t=date("d");
            $h=date("H");
            $i=date("i");
            $s=date("s");
            $newfilename=$t.$b.$th.$h.$i.$s.str_replace(" ~[\\\\/:*?!","-",'about');
            $config['upload_path']   = 'media/Settings/';
            $config['max_size']	= '1000000000';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['file_name'] = $newfilename;
            $this->load->library('upload',$config);
                
            if($this->upload->do_upload('image')){
                $dataText = array(
                    'value' => $this->input->post('text')
                );
                $this->Settings_model->update($text ,$dataText);

                $dataImage = array(
                    'value' => $this->upload->file_name
                );
                $this->Settings_model->update($img ,$dataImage);
                redirect('Admin/Settings/mission');
            }else{
                var_dump($this->upload->display_errors());
            }
        }else{
            $dataText = array(
                'value' => $this->input->post('text')
            );
            $this->Settings_model->update($text ,$dataText);
            redirect('Admin/Settings/mission');
        }
    }

    public function contact(){
        $data['contact_telp'] = $this->Settings_model->getById('contact_telp');
        $data['contact_address'] = $this->Settings_model->getById('contact_address');
        $data['contact_ig'] = $this->Settings_model->getById('contact_ig');
        $data['contact_fb'] = $this->Settings_model->getById('contact_fb');
        $data['contact_linkedin'] = $this->Settings_model->getById('contact_linkedin');
        $data['contact_email'] = $this->Settings_model->getById('contact_email');
		$data['hp_number'] = $this->Settings_model->getById('hp_number');
        $this->load->view('Back/Settings/contact', $data);
    }

    public function settingsContact($id){
        $data = array(
            'value' => $this->input->post('value')
        );
        $this->Settings_model->update($id ,$data);
        redirect('Admin/Settings/contact');
    }

	// public function index()
	// {
    //     $data['testimonies'] = $this->Testimony_model->get_all();
	// 	$this->load->view('Back/Testimony/index', $data);
    // }

    // public function add(){
    //     $this->load->view('Back/Testimony/add');
    // }

    // public function insert(){
    //     $tgl=date('Y-m-d H:i:s');
	// 	$th=date("Y");
	// 	$b=date("m");
	// 	$t=date("d");
	// 	$h=date("H");
	// 	$i=date("i");
	// 	$s=date("s");
	// 	$newfilename=$t.$b.$th.$h.$i.$s.str_replace(" ~[\\\\/:*?!","-",'Testimony');
	// 	$config['upload_path']   = 'media/Testimony/';
	// 	$config['max_size']	= '1000000000';
	// 	$config['allowed_types'] = 'gif|jpg|png|jpeg';
	// 	$config['file_name'] = $newfilename;
	// 	$this->load->library('upload',$config);
        
	// 	if($this->upload->do_upload('image')){
    //         $data = array(
    //             'name' => $this->input->post('name'),
    //             'testimony' => $this->input->post('testimony'),
    //             'image' => $this->upload->file_name
    //         );
    //         $this->Testimony_model->insert($data);
    //         redirect('Admin/Testimony');
    //     }else{
    //         var_dump($this->upload->display_errors());
    //     }
    // }

    // public function edit($id){
    //     $data['testimony'] = $this->Testimony_model->getById($id);
    //     $this->load->view('Back/Testimony/edit', $data);
    // }

    // public function update($id){
    //     if (!empty($_FILES['image']['name']))
	// 	{
    //         $tgl=date('Y-m-d H:i:s');
    //         $th=date("Y");
    //         $b=date("m");
    //         $t=date("d");
    //         $h=date("H");
    //         $i=date("i");
    //         $s=date("s");
    //         $newfilename=$t.$b.$th.$h.$i.$s.str_replace(" ~[\\\\/:*?!","-",'Testimony');
    //         $config['upload_path']   = 'media/Testimony/';
    //         $config['max_size']	= '1000000000';
    //         $config['allowed_types'] = 'gif|jpg|png|jpeg';
    //         $config['file_name'] = $newfilename;
    //         $this->load->library('upload',$config);
            
    //         if($this->upload->do_upload('image')){
    //             $data = array(
    //                 'name' => $this->input->post('name'),
    //                 'testimony' => $this->input->post('testimony'),
    //                 'image' => $this->upload->file_name
    //             );
    //             $this->Testimony_model->update($id, $data);
    //             redirect('Admin/Testimony');
    //         }else{
    //             var_dump($this->upload->display_errors());
    //         }
    //     }else{
    //         $data = array(
    //             'name' => $this->input->post('name'),
    //             'testimony' => $this->input->post('testimony'),
    //             'image' => $this->upload->file_name
    //         );
    //         $this->Testimony_model->update($id, $data);
    //         redirect('Admin/Testimony');
    //     }
    // }

    // public function delete($id){
    //     return $this->Testimony_model->delete($id);
    // }
}
