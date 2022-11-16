<?php
	class Jobs extends CI_Controller{
		public function index(){
			
			$data['title'] = 'Latest Jobs';
            
            $data['jobs'] = $this->JobsModel->get_jobs();

			$this->load->view('template/header');
			$this->load->view('jobs/index', $data);
			$this->load->view('template/footer');
		}
	}