<?php
	class post extends CI_Controller{
        public function index(){
			$data['title'] = 'Latest Post';
            
			$this->load->view('template/header');
			$this->load->view('post/index', $data);
			$this->load->view('template/footer');
		}
	}
	