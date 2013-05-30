<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Index extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('login/login_model', 'logs');
		
	}
	
	public function index()
	{
		$this->load->view('index/login');
	}
	
	public function doLogin()
	{
		echo $this->logs->doLogin();
	}
	
	public function logout()
	{
		$this->session->sess_destroy();
		redirect(site_url(), 'redirect');
		exit;
	}
}
