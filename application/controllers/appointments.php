<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Appointments extends CI_Controller {

	function __construct(){
		parent::__construct();
		
		if(! $this->session->userdata('validated') )
		{
			redirect(site_url(), 'redirect');
		}
		$this->load->library('pagination');
		$this->load->library('form_validation');
		$this->load->model('appointments/appointments_model', 'appoint');
	}
	
	public function index()
	{
		
		$config['base_url'] = base_url().'appointments/index/page';
		$config['total_rows'] = $this->appoint->record_count();
		
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
		
		$data['appoint'] = $this->appoint->show_appoint($config['per_page'], $page);
		
		
		$data['total'] = $this->appoint->record_count();
		$data['content'] = $this->load->view('appointments/index', $data, true);
		$this->load->view('layout2', $data);
	}
	
	public function book()
	{
		
		
		$config = array(
			'name'=>array(
			 'label'=>'Name of the person',
			 'field'=>'name',
			 'rules'=>'required|min_length[3]'
			 ),
			 
			 'date'=>array(
			 'label'=>'Date of Appointment',
			 'field'=> 'date',
			 'rules'=> 'required'
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
				echo $this->appoint->book();
			}
			exit;
		}
		
		/***********************************************/
		
		$data['scripts'] = array(base_url().'public/js/book_appointment.js');
		$data['content'] = $this->load->view('appointments/book', $data, true);
		$this->load->view('layout2', $data);
	}
	
	
	public function edit($id = false)
	{
		
		
		if(!$id )
		{
			show_404();
		}
		
		
		$config = array(
			'name'=>array(
			 'label'=>'Name of the person',
			 'field'=>'name',
			 'rules'=>'required|min_length[3]'
			 ),
			 
			 'date'=>array(
			 'label'=>'Date of Appointment',
			 'field'=> 'date',
			 'rules'=> 'required'
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
				echo $this->appoint->edit($id);
			}
			exit;
		}
		
		/***********************************************/
		$data['v'] = $this->appoint->view($id);
		$data['scripts'] = array(base_url().'public/js/edit_appointment.js');
		$data['content'] = $this->load->view('appointments/edit', $data, true);
		$this->load->view('layout2', $data);
	}
	
	
	function view($id = false)
	{
		if(!$id )
		{
			show_404();
		}
		
		$data['v'] = $this->appoint->view($id);
		$data['content'] = $this->load->view('appointments/view', $data, true);
		$this->load->view('layout2', $data);
	}
	
	
	function delete($id)
	{
		$this->appoint->delete($id);
	}
	
	
	
	
	
	
	
	
	
	
	
	
}