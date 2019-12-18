<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

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
	public function index()
	{
		$this->load->view('Back/login');
    }
    
    public function login(){
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $query = $this->db->get_where('tb_admin', ['email' => $email, 'password' => md5($password)]);
        if($query->num_rows() > 0){
            $data = $query->row();
            $session = array(
                'id' => $data->id,
                'name' => $data->name
            );
            $this->session->set_userdata($session);
            redirect('Admin/Admin/dashboard');
        }else{
            redirect('Admin');
        }
    }

    public function dashboard(){
        $this->load->view('Back/dashboard');
    }

    public function logout(){
        $this->session->sess_destroy();
        redirect('Admin');
    }
}
