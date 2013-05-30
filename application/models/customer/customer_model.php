<?php

class Customer_Model extends CI_Model{
	
	function __construct()
	{
		parent::__construct();
	}
	function record_count()
	{
		$q = $this->db->get('customers');
		return $q->num_rows();
	}
	function show_customer($limit, $start)
	{
		$this->db->limit($limit, $start);
		$q = $this->db->get('customers');
		
		return $q->result_array();
	}
	
	function add_customer()
	{
		$date = date('Y-m-d', time());
		
		$data = array(
		'fname'=> $this->input->post('fname', true),
		'lname'=> $this->input->post('lname', true),
		'telephone'=> $this->input->post('telephone', true),
		'mobile'=> $this->input->post('mobile', true),
		'email'=> $this->input->post('email', true),
		'billing_address'=> $this->input->post('billing_address', true),
		'billing_po_box'=> $this->input->post('billing_po_box', true),
		'billing_city'=> $this->input->post('billing_city', true),
		'billing_state'=> $this->input->post('billing_state', true),
		'billing_post_code'=> $this->input->post('billing_postal_code', true),
		'shipping_address'=> $this->input->post('shipping_address', true),
		'shipping_po_box'=> $this->input->post('shipping_po_box', true),
		'shipping_city'=> $this->input->post('shipping_city', true),
		'shipping_state'=> $this->input->post('shipping_state', true),
		'shipping_post_code'=> $this->input->post('shipping_postal_code', true),
		'details'=> $this->input->post('details', true),
		'status'=> $this->input->post('status', true),
		'date_reg'=> $date
		);
		
		if($this->db->insert('customers', $data) )
		{
			return true;
		}
		else
		{
			return false;
		}
		
		
	}
	
	
	function edit($id)
	{
		$date = date('Y-m-d', time());
		
		$data = array(
		'fname'=> $this->input->post('fname', true),
		'lname'=> $this->input->post('lname', true),
		'telephone'=> $this->input->post('telephone', true),
		'mobile'=> $this->input->post('mobile', true),
		'email'=> $this->input->post('email', true),
		'billing_address'=> $this->input->post('billing_address', true),
		'billing_po_box'=> $this->input->post('billing_po_box', true),
		'billing_city'=> $this->input->post('billing_city', true),
		'billing_state'=> $this->input->post('billing_state', true),
		'billing_post_code'=> $this->input->post('billing_postal_code', true),
		'shipping_address'=> $this->input->post('shipping_address', true),
		'shipping_po_box'=> $this->input->post('shipping_po_box', true),
		'shipping_city'=> $this->input->post('shipping_city', true),
		'shipping_state'=> $this->input->post('shipping_state', true),
		'shipping_post_code'=> $this->input->post('shipping_postal_code', true),
		'details'=> $this->input->post('details', true),
		'status'=> $this->input->post('status', true),
		'date_reg'=> $date
		);
		$this->db->where('customers_id', $id);
		if($this->db->update('customers', $data) )
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	
	function status($t, $id)
	{
		$s = ($t == 1)? 1:0; 
		$data = array(
		'status'=>$t
		);
		
		$this->db->where('customers_id', $id);
		$this->db->update('customers', $data);
	}
	
	function view($id)
	{
		$q = $this->db->get_where('customers', array('customers_id'=>$id));
		return $q->result_array();
	}
	
	
	function delete($id)
	{
		$this->db->delete('customers', array('customers_id' => $id)); 
	}
	
	
	
}