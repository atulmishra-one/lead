<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Customer extends CI_Controller {

	function __construct(){
		parent::__construct();
		
		if(! $this->session->userdata('validated') )
		{
			redirect(site_url(), 'redirect');
		}
		$this->load->library('pagination');
		$this->load->library('form_validation');
		$this->load->model('customer/customer_model', 'cust');
	}
	
	public function index()
	{
		
		
		$config['base_url'] = base_url().'customer/index/page';
		$config['total_rows'] = $this->cust->record_count();
		
		$config['full_tag_open'] = '<div class="pagination"><ul>';
		
		$config['prev_link'] = '&laquo;&nbsp;Prev';
		$config['next_link'] = '&nbsp;Next &raquo;';
		$config['cur_tag_open'] = '<li class="active"><a>';
		$config['cur_tag_close'] = '</a></li>';
		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';
		$config['prev_tag_open'] = '<li>';
		$config['prev_tag_close'] = '</li>';
		$config['next_tag_open'] = '<li>';
		$config['next_tag_close'] = '</li>';
		$config['last_link'] = '';
		$config['first_link'] = '';
		
	    $config['full_tag_close'] = '<ul></div><!--CLOSE PAGINATION-->';
		
		
		$config['per_page'] = 20;
		$config["uri_segment"] = 4;
		
		$this->pagination->initialize($config); 
		
		$page = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0 ;
		
		$data['pagination'] = $this->pagination->create_links();
		
		$data['customers'] = $this->cust->show_customer($config['per_page'], $page);
		
		$data['total'] = $this->cust->record_count();
		
		$data['content'] = $this->load->view('customer/index', $data, true);
		$this->load->view('layout2', $data);
	}
	
	public function add_customer()
	{
		
		
		
		$config = array(
			'fname'=>array(
			 'label'=>'First name',
			 'field'=>'fname',
			 'rules'=>'required|min_length[3]|alpha'
			 ),
			 
			 'lname'=>array(
			 'label'=>'Last name',
			 'field'=>'lname',
			 'rules'=>'required|min_length[2]|alpha'
			 
			 ),
			 
			 'telephone'=>array(
			 'label'=> 'Telephone Number',
			 'field'=> 'telephone',
			 'rules'=>'required|numeric'
			 
			 ),
			 
			 'mobile'=>array(
			 'label'=> 'Mobile number',
			 'field'=> 'mobile',
			 'rules'=> 'required|numeric'
			 
			 ),
			 
			 'email'=>array(
			 'label'=>'Email address',
			 'field'=> 'email',
			 'rules'=> 'required|valid_email'
			 )
		
		);
		
		$this->form_validation->set_rules($config);
		
		if($this->input->post('btn') )
		{
			if ($this->form_validation->run() == FALSE)
			{
				echo strip_tags(validation_errors() );
			}
			else
			{
				echo $this->cust->add_customer();
			}
			exit;
		}
		/*************************************/
		
		$data['scripts'] = array(base_url().'public/js/add_customer.js');
		
		$data['content'] = $this->load->view('customer/add_customer', $data, true);
		$this->load->view('layout2', $data);
	}
	
	function edit($id = false)
	{
		if(!$id )
		{
			show_404();
		}
		
		
		$config = array(
			'fname'=>array(
			 'label'=>'First name',
			 'field'=>'fname',
			 'rules'=>'required|min_length[3]|alpha'
			 ),
			 
			 'lname'=>array(
			 'label'=>'Last name',
			 'field'=>'lname',
			 'rules'=>'required|min_length[2]|alpha'
			 
			 ),
			 
			 'telephone'=>array(
			 'label'=> 'Telephone Number',
			 'field'=> 'telephone',
			 'rules'=>'required|numeric'
			 
			 ),
			 
			 'mobile'=>array(
			 'label'=> 'Mobile number',
			 'field'=> 'mobile',
			 'rules'=> 'required|numeric'
			 
			 ),
			 
			 'email'=>array(
			 'label'=>'Email address',
			 'field'=> 'email',
			 'rules'=> 'required|valid_email'
			 )
		
		);
		
		$this->form_validation->set_rules($config);
		
		if($this->input->post('btn') )
		{
			if ($this->form_validation->run() == FALSE)
			{
				echo strip_tags(validation_errors() );
			}
			else
			{
				echo $this->cust->edit($id);
			}
			exit;
		}
		/*************************************/
		
		
		
		
		
		
		$data['v'] = $this->cust->view($id);
		
		$data['scripts'] = array(base_url().'public/js/edit_customer.js');
		
		$data['content'] = $this->load->view('customer/edit_customer', $data, true);
		$this->load->view('layout2', $data);
	}
	
	function view($id = false)
	{
		if(!$id )
		{
			show_404();
		}
		$data['v'] = $this->cust->view($id);
		$data['content'] = $this->load->view('customer/view_customer', $data, true);
		$this->load->view('layout2', $data);
	}
	
	function status($t, $id)
	{
		$this->cust->status($t, $id);
		$this->session->set_flashdata('msg', '<div class="success">Status Updated!</div>');
		redirect(base_url().'customer', 'refresh');
	}
	
	function delete($id)
	{
		$this->cust->delete($id);
	}
	
	
}
