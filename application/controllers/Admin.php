<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Admin_model');
	}

	public function index()
	{
		$this->load->view('admin/index');
	}

	public function prosesregister()
	{
		$data = array(
        	'account_name' => $this->input->post('username'),
        	'account_password' => md5($this->input->post('password')),
		 );
		 
		$data = $this->Admin_model->Insert('account', $data);
    	redirect(base_url('admin'));
	}
}