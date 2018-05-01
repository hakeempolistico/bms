<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
	    parent::__construct();
	}

	public function index()
	{
		if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']){
	    	redirect('dashboard', 'refresh');
	    }else{
			$data = array();
			$this->load->view('Login', $data);
	    }
	}

	public function verify_login(){
		$this->load->model('Login_model');
		$data = $this->input->post();
		$res = $this->Login_model->login($data);
		if(count($res) == 1){

			//SESSION
			$userdata = array(
		        'username'  => $res[0]->username,
		        'first_name'     => $res[0]->first_name,
		        'last_name'     => $res[0]->last_name,
		        'user_type'     => $res[0]->user_type,
		        'email'     => $res[0]->email,
		        'date_added'     => $res[0]->date_added,
		        'logged_in' => TRUE
			);
			$this->session->set_userdata($userdata);

			redirect('dashboard', 'refresh');

		}else{
			$this->session->set_flashdata('fd', 'INCORRECT USERNAME OR PASSWORD.');
			redirect('/', 'refresh');
		}
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect('/', 'refresh');
	}
}
