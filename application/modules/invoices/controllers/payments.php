<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 *
 * @package	Freelancer Office
 * 
 */


class Payments extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->library('tank_auth');
		if ($this->tank_auth->user_role($this->tank_auth->get_role_id()) != 'admin') {
			$this->session->set_flashdata('message', lang('access_denied'));
			redirect('');
		}
		$this->load->model('invoice_model','invoice');
	}
	function index()
	{
	$this->load->module('layouts');
	$this->load->library('template');
	$this->template->title(lang('payments').' - '.$this->config->item('company_name'). ' '. $this->config->item('version'));
	$data['page'] = lang('payments');
	$status = $this->uri->segment(4);
	$data['payments'] = $this->invoice->get_all_records($table = 'payments',
		$array = array(
			'inv_deleted' => 'No'
			),
		$join_table = 'users',$join_criteria = 'users.id = payments.paid_by','created_date');
	$this->template
	->set_layout('users')
	->build('payments',isset($data) ? $data : NULL);
	}

	function details()
	{		
		$this->load->module('layouts');
		$this->load->library('template');
		$this->template->title(lang('payments').' - '.$this->config->item('company_name'). ' '. $this->config->item('version'));
		$data['page'] = lang('payments');
		$data['payment_details'] = $this->invoice->payment_details($this->uri->segment(4));
		$data['payments'] = $this->invoice->get_all_records($table = 'payments',
		$array = array(
			'inv_deleted' => 'No'
			),
		$join_table = 'users',$join_criteria = 'users.id = payments.paid_by','created_date');
		$this->template
		->set_layout('users')
		->build('payment_details',isset($data) ? $data : NULL);
	}	

	function search()
	{
		if ($this->input->post()) {
	$this->load->module('layouts');
	$this->load->library('template');
	$this->template->title(lang('payments').' - '.$this->config->item('company_name'). ' '. $this->config->item('version'));
	$data['page'] = lang('payments');
	$keyword = $this->input->post('keyword', TRUE);
	$data['payments'] = $this->invoice->search_payment($keyword);
	$this->template
	->set_layout('users')
	->build('payments',isset($data) ? $data : NULL);
		}else{
			redirect('invoices/payments');
		}
	}

	function _log_activity($invoice_id,$activity,$icon){
			$this->db->set('module', 'invoices');
			$this->db->set('module_field_id', $invoice_id);
			$this->db->set('user', $this->tank_auth->get_user_id());
			$this->db->set('activity', $activity);
			$this->db->set('icon', $icon);
			$this->db->insert('activities'); 
	}

}

/* End of file payments.php */