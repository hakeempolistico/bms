<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Expenses extends CI_Controller {

	public function __construct()
	{
	    parent::__construct();
	    if(!isset($_SESSION['logged_in'])){
	    	redirect('/', 'refresh');
	    }
	}
	public function index()
	{
		$data = array();
		$data['active'] = 'expenses';
		$data['sidebar'] = $this->load->view('template/sidebar', $data, TRUE);
		$data['topnav'] = $this->load->view('template/topnav', $data, TRUE);
		$data['footer'] = $this->load->view('template/footer', $data, TRUE);
		$this->load->view('expenses/table', $data);
	}
}
