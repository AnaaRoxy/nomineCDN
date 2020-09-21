<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __Construct()
	{
		parent::__Construct();
		$this->load->model('ModelMitra');
		$this->load->model("AdminModel");
		if($this->AdminModel->isNotLogin()) redirect(base_url('admin'));
	}


	public function index()
	{
		$active = $this->uri->segment(2);
		$data['content'] = 'admin/content/home';
		$data['active'] = $active;
		$data['title'] = 'Admin | Home';
		$data['data'] = $this->ModelMitra->total();
		$data['dist'] = $this->ModelMitra->totalDb();
		$data['mitra'] = $this->ModelMitra->totalMitra();
		$data['agen'] = $this->ModelMitra->totalAgen();
		$this->load->view('admin/layout', $data);
	}

	public function pendaftar()
	{
		if($this->uri->segment(3) != 'print'){
			$active = $this->uri->segment(2);
			$data['content'] = 'admin/content/data';
			$data['active'] = $active;
			$data['title'] = 'Admin | Data Pendaftar';
			$data['data'] = $this->ModelMitra->getAll();
			$this->load->view('admin/layout', $data);
		}else{
			$active = $this->uri->segment(2);
			$data['content'] = 'admin/content/data';
			$data['active'] = $active;
			$data['title'] = 'Report-'.date('d-m-Y');
			$data['data'] = $this->ModelMitra->getAll();
			$this->load->view('admin/layout', $data);
		}
	}

}