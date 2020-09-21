<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __Construct()
	{
		parent::__Construct();
		$this->load->model('AdminModel');
	}

	public function index()
	{
		if($this->input->post()){
			if($this->AdminModel->doLogin()) redirect(base_url('dashboard'));
		}
		$this->load->view('helo');
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url('admin'));
	}

}