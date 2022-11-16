<?php
class Users extends CI_Controller
{
	//Register

	public function __construct()
	{
		parent::__construct();
		$this->load->model('UserModel', 'UM');
	}

	public function index()
	{
		echo "<h1>Hello Worl</h2>";
	}

	public function register()
	{
		$data['title'] = 'Sign Up';

		if ($_SERVER['REQUEST_METHOD'] == "POST") {
			$password = $_POST['password'];
			$confirmPassword = $_POST['password2'];
			
			if ($password === $confirmPassword){
				$inputArray = [];
				// data manipulation
				foreach(array_keys($_POST) as $key) {
					if ($key != 'password2'){
						$inputArray[$key] = $_POST[$key];
					}
				}
				// print_r($inputArray);
				$this->UM->register($inputArray);
				redirect('/login');
			}else {
				$this->session->set_flashdata('error', 'Password Must match !');
				$this->load->view('template/header');
				$this->load->view('users/register', $data);
				$this->load->view('template/footer');
			}
		} else {
			$this->form_validation->set_rules('name', 'Name', 'required');
			$this->form_validation->set_rules('username', 'Username', 'required');
			$this->form_validation->set_rules('email', 'Email', 'required');
			$this->form_validation->set_rules('password', 'Password', 'required');
			$this->form_validation->set_rules('password2', 'Confirm Password', 'matches[password]');

			if ($this->form_validation->run() === FALSE) {
				$this->load->view('template/header');
				$this->load->view('users/register', $data);
				$this->load->view('template/footer');
			} else {
				// Encrypt password
				$enc_password = md5($this->input->post('password'));

				$this->user_model->register($enc_password);

				// Set message
				$this->session->set_flashdata('user_registered', 'You are now registered and can log in');

				redirect();

			}
		}

	}

	public function login() 
	{
		echo "<h1> LOGIN PAGE WORKING </h1>";
	}
}