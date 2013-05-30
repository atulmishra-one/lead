<?php

class Leads_Model extends CI_Model{
	
	function __construct()
	{
		parent::__construct();
	}
	
	function total()
	{
		$q = $this->db->get('leads');
		return $q->num_rows();
	}
	
	function show_leads($limit, $start)
	{
		$q = $this->db->query("select * from leads limit $start, $limit");
		return $q->result_array();	
	}
	
	function total_cleads()
	{
		$q = $this->db->get('customer_leads');
		return $q->num_rows();
	}
	function show_cleads($limit, $start)
	{
		$q = $this->db->query("select * from customer_leads INNER JOIN customers ON 
		customer_leads.customer_id=customers.customers_id limit $start, $limit");
		return $q->result_array();	
	}
	
	function getCustomers()
	{
		$q = $this->db->get('customers');
		return $q->result_array();
	}
	
	function add_lead()
	{
		$data = array(
		'fname'=>$this->input->post('fname', true),
		'lname'=>$this->input->post('lname', true),
		'designation'=>$this->input->post('designation', true),
		'telephone'=>$this->input->post('telephone', true),
		'mobile'=>$this->input->post('mobile', true),
		'email'=>$this->input->post('email', true),
		'website'=>$this->input->post('website', true),
		'company'=>$this->input->post('company', true),
		'lead_source'=>$this->input->post('lead_source', true),
		'contact_mode'=>$this->input->post('contact_mode', true),
		'lead_status'=>$this->input->post('lead_status', true),
		'lead_priority'=>$this->input->post('lead_priority', true),
		'date'=>$this->input->post('date', true),
		'referred_by'=>$this->input->post('referred_by', true),
		'assigned_to'=>$this->input->post('assigned_to', true),
		'summary'=>$this->input->post('summary', true)
		);
		
		
		if($this->db->insert('leads', $data) )
		{
			return true;
		}
		else
		{
			return false;
		}
		
		
	}
	
	function update_lead($id)
	{
		$data = array(
		'fname'=>$this->input->post('fname', true),
		'lname'=>$this->input->post('lname', true),
		'designation'=>$this->input->post('designation', true),
		'telephone'=>$this->input->post('telephone', true),
		'mobile'=>$this->input->post('mobile', true),
		'email'=>$this->input->post('email', true),
		'website'=>$this->input->post('website', true),
		'company'=>$this->input->post('company', true),
		'lead_source'=>$this->input->post('lead_source', true),
		'contact_mode'=>$this->input->post('contact_mode', true),
		'lead_status'=>$this->input->post('lead_status', true),
		'lead_priority'=>$this->input->post('lead_priority', true),
		'date'=>$this->input->post('date', true),
		'referred_by'=>$this->input->post('referred_by', true),
		'assigned_to'=>$this->input->post('assigned_to', true),
		'summary'=>$this->input->post('summary', true)
		);
		
		$this->db->where('leads_id', $id);
		
		if($this->db->update('leads', $data) )
		{
			return true;
		}
		else
		{
			return false;
		}
		
		
	}
	
	
	function add_lead1()
	{
		$data = array(
		'customer_id'=>$this->input->post('customer', true),
		'lead_status'=>$this->input->post('lead_status', true),
		'lead_priority'=>$this->input->post('lead_priority', true),
		'date'=>$this->input->post('date', true),
		'assigned_to'=>$this->input->post('assigned_to', true),
		'summary'=>$this->input->post('summary', true)
		);
		
		
		if($this->db->insert('customer_leads', $data) )
		{
			return true;
		}
		else
		{
			return false;
		}
		
		
	}
	
	function edit_lead1($id)
	{
		$data = array(
		'customer_id'=>$this->input->post('customer', true),
		'lead_status'=>$this->input->post('lead_status', true),
		'lead_priority'=>$this->input->post('lead_priority', true),
		'date'=>$this->input->post('date', true),
		'assigned_to'=>$this->input->post('assigned_to', true),
		'summary'=>$this->input->post('summary', true)
		);
		
		$this->db->where('customer_leads_id', $id);
		
		if($this->db->update('customer_leads', $data) )
		{
			return true;
		}
		else
		{
			return false;
		}
		
		
	}
	
	function view($id)
	{
		$q = $this->db->get_where('leads', array('leads_id'=>$id));
		return $q->result_array();
	}
	
	function cview($id)
	{
		$q = $this->db->get_where('customer_leads', array('customer_leads_id'=>$id));
		return $q->result_array();
	}
	
	function show_ccleads($id)
	{
		$q = $this->db->query("select * from customer_leads INNER JOIN customers ON 
		customer_leads.customer_id=customers.customers_id where customer_leads_id='$id'");
		return $q->result_array();	
	}
	
	
	function delete($id)
	{
		//$this->db->delete();
		$this->db->delete('leads', array('leads_id' => $id)); 
	}
	
	function cdelete($id)
	{
		//$this->db->delete();
		$this->db->delete('customer_leads', array('customer_leads_id' => $id)); 
	}
	
}