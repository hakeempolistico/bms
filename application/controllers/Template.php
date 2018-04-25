<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Template extends CI_Controller {

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
		$this->load->view('dashboard');
	}

	public function icons()
	{
		$this->load->view('icons');
	}

	public function maps()
	{
		$this->load->view('maps');
	}

	public function notifications()
	{
		$this->load->view('notifications');
	}

	public function table()
	{
		$this->load->view('table');
	}

	public function typography()
	{
		$this->load->view('typography');
	}

	public function upgrade()
	{
		$this->load->view('upgrade');
	}

	public function user()
	{
		$this->load->view('user');
	}
}
