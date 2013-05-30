<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Leads extends CI_Controller {

	function __construct(){
		parent::__construct();
		
		if(! $this->session->userdata('validated') )
		{
			redirect(site_url(), 'redirect');
		}
		
		$this->load->model('leads/leads_model', 'lead');
		$this->load->library('pagination');
		$this->load->library('form_validation'); //
	}
	
	public function index()
	{
		
		
		
		$config['base_url'] = base_url().'leads/index/page';
		$config['total_rows'] = $this->lead->total();
		
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
		
		$data['total'] = $this->lead->total();
		
		$data['leads'] = $this->lead->show_leads($config['per_page'], $page);
		
		$data['content'] = $this->load->view('leads/index', $data, true);
		$this->load->view('layout2', $data);
	}
	
	public function customers_lead()
	{
		
		
		$config['base_url'] = base_url().'leads/customers_lead/page';
		$config['total_rows'] = $this->lead->total_cleads();
		
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
		
		
		
		$page = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0 ;
		
		$this->pagination->initialize($config); 
		
		$data['pagination'] = $this->pagination->create_links();
		
		$data['total'] = $this->lead->total_cleads();
		
		$data['leads'] = $this->lead->show_cleads($config['per_page'], $page);
		
		$data['content'] = $this->load->view('leads/customers_lead', $data, true);
		
		$this->load->view('layout2', $data);
	}
	
	
	
	public function create_lead()
	{
		
		$this->load->library('form_validation'); //
		
		if($this->input->post('btn') )
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
			
			if ($this->form_validation->run() == FALSE)
			{
				echo strip_tags(validation_errors() );
			}
			else
			{
				echo $this->lead->add_lead();
				
			}
			
			exit;
		}
		
		if($this->input->post('btn1') )
		{
			
			$config = array(
			'customer'=>array(
			'label'=>'Customer name',
			'field'=>'customer',
			'rules'=>'required|greater_than[0]'
			)
			
			
			);
			
			$this->form_validation->set_rules($config);
			if ($this->form_validation->run() == FALSE) {
				
				echo strip_tags(validation_errors() );
				
			}
			else
			{
				echo $this->lead->add_lead1();
			}
			exit;
		}
		
		$data['customers'] = $this->lead->getCustomers();
		$data['scripts'] = array(base_url().'public/js/add_lead.js');
		$data['content'] = $this->load->view('leads/add_lead', $data, true);
		$this->load->view('layout2', $data);
	}
	
	public function view($id = false)
	{
		if(!$id )
		{
			show_404();
		}
		

		
		
		$data['v'] = $this->lead->view($id);
		
		$data['content'] = $this->load->view('leads/view_lead', $data, true);
		
		$this->load->view('layout2', $data);
	}
	
	public function cview($id = false)
	{
		if(!$id )
		{
			show_404();
		}
		
		
		$data['v'] = $this->lead->show_ccleads($id);
		
		$data['content'] = $this->load->view('leads/view_cust_lead', $data, true);
		
		$this->load->view('layout2', $data);
	}
	
	public function edit_new($id = false)
	{
		if(!$id )
		{
			show_404();
		}
		
		
		if($this->input->post('btn') )
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
			
			if ($this->form_validation->run() == FALSE)
			{
				echo strip_tags(validation_errors() );
			}
			else
			{
				echo $this->lead->update_lead($id);
				
			}
			
			exit;
		}
		
		
		
		$data['v'] = $this->lead->view($id);
		$data['scripts'] = array(base_url().'public/js/edit_lead.js');
		$data['content'] = $this->load->view('leads/edit_lead', $data, true);
		$this->load->view('layout2', $data);
	}
	
	public function edit_exist($id = false)
	{
		if(!$id )
		{
			show_404();
		}
		
		if($this->input->post('btn1') )
		{
			
			$config = array(
			'customer'=>array(
			'label'=>'Customer name',
			'field'=>'customer',
			'rules'=>'required|greater_than[0]'
			)
			
			
			);
			
			$this->form_validation->set_rules($config);
			if ($this->form_validation->run() == FALSE) {
				
				echo strip_tags(validation_errors() );
				
			}
			else
			{
				echo $this->lead->edit_lead1($id);
			}
			exit;
		}
		
		$data['v'] = $this->lead->cview($id);
		$data['customers'] = $this->lead->getCustomers();
		$data['scripts'] = array(base_url().'public/js/edit_cust_lead.js');
		$data['content'] = $this->load->view('leads/edit_cust_lead', $data, true);
		$this->load->view('layout2', $data);
		
	}
	
	public function delete($id)
	{
		$this->lead->delete($id);
	}
	
	public function cdelete($id)
	{
		$this->lead->cdelete($id);
	}
}