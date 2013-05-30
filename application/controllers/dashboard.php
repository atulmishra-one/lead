<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	function __construct(){
		parent::__construct();
		
		if(! $this->session->userdata('validated') )
		{
			redirect(site_url(), 'redirect');
		}
		
		$this->load->library('pagination');
		$this->load->model('leads/leads_model', 'lead');
		
	}
	
	public function index()
	{
		
		$config['base_url'] = base_url().'dashboard/index/page';
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
		
		$data['content'] = $this->load->view('dashboard/dashboard', $data, true);
		$this->load->view('layout2', $data);
	}
	
	
}
