<?php
	class UserModel extends CI_Model{
		public function register($payload){
       
			
            // User data array
			// $data = array(
			// 	'name' => $this->input->post('name'),
			// 	'email' => $this->input->post('email'),
            //     'username' => $this->input->post('username'),
            //     'password' => $enc_password,
            //     'zipcode' => $this->input->post('zipcode')
			// );

			// Insert user
			return $this->db->insert('users', $payload);
		}

		
	}