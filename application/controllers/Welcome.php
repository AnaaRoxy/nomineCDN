<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __Construct()
	{
		parent::__Construct();
		$this->load->model("Wilayah");
		$this->load->model('ModelMitra');
		$this->load->library("form_validation");
	}

	public function index()
	{
		$data['wilayah'] = $this->Wilayah->getAll();
		$data['level'] = $this->ModelMitra->getLevel();
		$this->load->view('welcome_message', $data);
	}

	public function wil()
	{
		$regencies = $this->Wilayah->getAll();
		echo json_encode($regencies);
	}

	public function register()
	{
		$mitra = $this->ModelMitra;

		$validation = $this->form_validation;
		$validation->set_rules($mitra->rules());

		$post = $this->input->post();
		$nama = $post['nama'];
		$email = $post['email'];
		if($post['level']==1){
			$level = 'Distributor';
		}elseif($post['level']==2){
			$level = 'Agen';
		}elseif($post['level']==3){
			$level = 'Reseller';
		}

		if(!$validation->run()){
			$mitra->save();
			  $config = Array(    

			    'mailtype'  => 'html',
			    'charset'   => 'utf-8',
			    'protocol'  => 'smtp',
			    'smtp_host' => 'srv99.niagahoster.com',
			    'smtp_user' => 'cs@nomine.id',  // Email gmail
			    'smtp_pass'   => '#nominedeve12',  // Password gmail
			    'smtp_crypto' => 'ssl',
			    'smtp_port'   => 465,
			    'crlf'    => "\r\n",
			    'newline' => "\r\n"

			  );

			$this->load->library('email', $config);
			

			$this->email->from('no-reply@nomine.id', 'Nomine');

			$data = array('nama'=> $nama,
			              'level'=> $level);
			$this->email->to($email, $nama); // replace it with receiver mail id

			$this->email->subject('Verifikasi Kemitraan Kamu Segera'); // replace it with relevant subject

			$body = $this->load->view('email/try.php',$data,TRUE);

			$this->email->message($body); 

			$this->email->send();

			  if ($this->email->send()) {
			      $this->session->set_flashdata('success', 'Silahkan Cek Email Untuk Konfirmasi');
			      redirect(base_url());
			  } else {
			      echo 'Sukses! email tidak dapat dikirim.';
			  }

			}
		}
}
