<?php
class auth extends CI_Controller {
	public function index()
	{
		$this->load->view('template/header');
		$this->load->view('auth/login');
		$this->load->view('template/footer');
	}
}




