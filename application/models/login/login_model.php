<?php

class Login_Model extends CI_Model{
	
	function __construct()
	{
		parent::__construct();
	}
	
	function doLogin()
	{
		$q = $this->db->get_where('users', array('username'=> $this->input->post('username', true) ) );
		
		if($q->num_rows() > 0 )
		{
			
			
			$qb = $this->db->get_where('users', array(
			
			'username'=> $this->input->post('username', true) ,
			'password'=> $this->input->post('password', true)
			
			
			) );
			
			if($qb->num_rows() > 0 )
			{
				$row = $qb->row();
				
				$data = array(
				'users_id'=> $row->users_id,
				'users_role'=> $row->users_role,
				'validated'=>true
				);
				
				$this->session->set_userdata($data);
				
				echo 's';
			}
			else
			{
				echo 'p';
			}
			
			
		}
		else{
			return 'u';
		}
	}
}