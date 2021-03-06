<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bills extends CI_Controller {

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
		$data['count_bills'] = $this->global_model->count('bills');
		$data['count_unpaid'] = $this->global_model->count('bills', array('date_paid' => '0000-00-00'));
		$data['active'] = 'bills';
		$data['sidebar'] = $this->load->view('template/sidebar', $data, TRUE);
		$data['topnav'] = $this->load->view('template/topnav', $data, TRUE);
		$data['footer'] = $this->load->view('template/footer', $data, TRUE);

		$dataOfYear = $this->global_model->getRecords('bills', array('year(period_start)' => date("Y")));
		$data['yearly_amount'] = 0;
		foreach ($dataOfYear as $v) {
			$data['yearly_amount'] = $data['yearly_amount'] + $v->amount;
		}

		$dataOfMonth = $this->global_model->getRecords('bills', array('month(period_start)' => date("m")));
		$data['monthly_amount'] = 0;
		foreach ($dataOfMonth as $v) {
			$data['monthly_amount'] = $data['monthly_amount'] + $v->amount;
		}

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

	public function pay()
	{
		$data = $this->input->post();	
		$where = array('invoice_number' => $data['invoice_number'] );
		$set = array('date_paid' => $data['date_paid'], 'amount_paid' => $data['amount_paid'] );
		
		if($this->global_model->update('bills', $set, $where) == 1) {
            $this->session->set_flashdata('fd', 'SUCCESSFULLY UPDATED DATA');
            redirect('/bills', 'refresh');
		}else{
            $this->session->set_flashdata('fd', 'ERROR!');
            redirect('/bills', 'refresh');
		}
	}

	public function populateTable()
	{
		$data = $this->global_model->getRecords('bills');
		foreach ($data as $val) {
			if($val->date_paid=="0000-00-00"){
				$val->paid = '<i class="material-icons text-danger">clear</i>';
				$val->action = '<center>
				<button type="button" rel="tooltip" title="" class="btn btn-simple btn-xs btn-pay" data-original-title="Edit Task" data-toggle="modal" data-target="#modal-pay" style="margin: 0px;">
                                                                <i class="material-icons" style="font-size: 20px">developer_board</i>
                                                            <div class="ripple-container"></div></button></center>';
				$val->date_paid = '-'; 
				$val->amount_paid = '-'; 
			}else{
				$val->action = '<center>
				<button type="button" rel="tooltip" title="" class="btn btn-primary btn-simple btn-xs" data-original-title="Edit Task" data-toggle="modal" data-target="#modal-pay" style="margin: 0px;"> <b class="text-success" style="font-size: 12px">PAID</b><div class="ripple-container"></div></button></center><center>';
				$val->paid = '<i class="material-icons text-success">check</i>';
				$val->date_paid = date("F j, Y", strtotime($val->date_paid)); 
			}
			$val->period_start = date("F j, Y", strtotime($val->period_start)); 
			$val->period_end = date("F j, Y", strtotime($val->period_end)); 
		}
		echo json_encode($data);
	}


}
