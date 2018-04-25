<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bills extends CI_Controller {

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
		$data = array();
		$data['active'] = 'bills';
		$data['sidebar'] = $this->load->view('template/sidebar', $data, TRUE);
		$data['topnav'] = $this->load->view('template/topnav', $data, TRUE);
		$data['footer'] = $this->load->view('template/footer', $data, TRUE);
		$this->load->view('bills/table', $data);
	}

	public function insert()
	{
		$data = $this->input->post();	
		$this->form_validation->set_rules('invoice_number', 'Invoice Number', 'required|is_unique[bills.invoice_number]');

		if ($this->form_validation->run() == FALSE){
            $this->session->set_flashdata('fd', validation_errors());
	        $this->index();
	    }
        else{
        	$data['date_added'] = date("Y-m-d h:i:sa");	
            $this->global_model->insert('bills', $data);
            $this->session->set_flashdata('fd', 'SUCCESSFULLY ADDED DATA');
            redirect('/bills', 'refresh');
        }
	}

	public function populateTable()
	{
		$data = $this->global_model->getRecords('bills');
		foreach ($data as $val) {
			if($val->date_paid=="0000-00-00"){
				$val->paid = '<i class="material-icons text-primary">clear</i>';
				$val->action = '<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal-pay">Pay<div class="ripple-container"></div></button>';
			}else{
				$val->paid = '<i class="material-icons text-success">check</i>';
				$val->action = '-';				
			}
		}
		echo json_encode($data);
	}

}
