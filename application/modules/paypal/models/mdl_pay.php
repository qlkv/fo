<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * 
 *
 * @package	Freelancer Office
 */
class Mdl_pay extends CI_Model
{
	
	function invoice_info($invoice)
	{
		$this->db->where('inv_id',$invoice);
		$query = $this->db->get('invoices');
		if ($query->num_rows() > 0){
			return $query->row_array();
		} 
	}
}

/* End of file mdl_pay.php */
/* Location: ./application/models/auth/users.php */