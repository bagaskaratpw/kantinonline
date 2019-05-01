<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller 
{
	public function index()
	{
		$this->load->view('admin/index');
	}

	public function prosesregister()
	{
		$this->load->model('Admin_model');
		$data = array(
        'username' => $this->input->post('username'),
        'password' => md5($this->input->post('password')),
		 );
		 
		$data = $this->Admin_model->Insert('account', $data);
    	redirect(base_url('admin/index'));
	}
}