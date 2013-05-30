<?php

class Accounts_Model extends CI_Model{
	
	function __construct()
	{
		parent::__construct();
	}
	
	function record_count()
	{
		$q = $this->db->get('users');
		return $q->num_rows();
	}
	
	function show_users($limit, $start)
	{
		$q = $this->db->query("select * from users order by name limit $start, $limit");
		return $q->result_array();
	}
	
	function view($id)
	{
		$q = $this->db->get_where('users', array('users_id'=>$id));
		
		return $q->result_array();
	}
	
	function add()
	{
		
		$username = strtolower(substr($this->input->post('name', true),0 , 3).substr(uniqid(rand(),true), 0 , 4));
		
		$q = $this->db->get_where('users', array('username' => $username) );
		
		
		if( $q->num_rows() == false ) : 
		
		$data = array(
		'username' => $username,
		'name'=> $this->input->post('name', true),
		'email'=> $this->input->post('email', true),
		'mobile' => $this->input->post('mobile', true),
		'password'=> $username,
		'users_role'=> 'user',
		'notes'=> $this->input->post('details', true)
		);
		
		if($this->db->insert('users', $data) )
		{
			return $username;
		}
		else
		{
			return 'e';
		}
		
		else :
			return 'u';
		endif;
		
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