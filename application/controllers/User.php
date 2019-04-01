<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function index()
	{
		$this->load->view('depan');
	}
	public function about()
	{
		$this->load->view('about');
	}
	public function contact ()
	{
		$this->load->view('contact');
	}
	public function daftar_blog()
	{
		$this->load->view('daftar_blog');
	}
	public function blog()
	{
		$this->load->view('blog');
	}
}
