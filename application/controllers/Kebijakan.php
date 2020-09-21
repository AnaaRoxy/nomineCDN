<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kebijakan extends CI_Controller {

	public function ketentuan()
	{
		$url = $this->uri->segment(3);

		if($url == 'syarat-dan-ketentuan'){
			$data['title'] = 'Nomine | Syarat & Ketentuan';
			$data['header'] = 'Syarat Dan Ketentuan';
			$data['active'] = $url;
			$this->load->view('kebijakan', $data);

		}elseif($url == 'ketentuan-privasi'){
			$data['title'] = 'Nomine | Ketentuan Privasi';
			$data['header'] = 'Ketentuan Privasi';
			$data['active'] = $url;
			$this->load->view('kebijakan', $data);

		}else{
			redirect(base_url());
		}
	}

}