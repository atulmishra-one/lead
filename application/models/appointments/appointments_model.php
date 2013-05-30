<?php

class Appointments_Model extends CI_Model{
	
	function __construct()
	{
		parent::__construct();
	}
	
	function record_count()
	{
		$q = $this->db->get('appointments');
		return $q->num_rows();
	}
	
	function show_appoint($limit, $start)
	{
		$q = $this->db->query("select * from appointments order by date desc limit $start, $limit");
		return $q->result_array();
	}
	
	function view($id)
	{
		$q = $this->db->get_where('appointments', array('appointments_id'=>$id));
		
		return $q->result_array();
	}
	
	function book()
	{
		$data = array(
		'name'=> $this->input->post('name', true),
		'type'=> $this->input->post('type', true),
		'status'=> $this->input->post('status', true),
		'assigned_to' => $this->input->post('assigned_to', true),
		'date'=> $this->input->post('date', true),
		'time'=> $this->input->post('time', true),
		'details'=> $this->input->post('details', true),
		'reminder' => $this->input->post('reminder', true),
		);
		
		if($this->db->insert('appointments', $data) )
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
		$data = array(
		'name'=> $this->input->post('name', true),
		'type'=> $this->input->post('type', true),
		'status'=> $this->input->post('status', true),
		'assigned_to' => $this->input->post('assigned_to', true),
		'date'=> $this->input->post('date', true),
		'time'=> $this->input->post('time', true),
		'details'=> $this->input->post('details', true),
		'reminder' => $this->input->post('reminder', true),
		);
		
		$this->db->where('appointments_id', $id);
		
		if($this->db->update('appointments', $data) )
		{
			return true;
		}
		else
		{
			return false;
		}
		
	}
	
	
	function delete($id)
	{
		$this->db->delete('appointments', array('appointments_id' => $id)); 
	}
}