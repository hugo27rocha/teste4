<?php

/**
* 
*/
class Aluno extends CI_Controller
{




	public function profile(){

		
		 $data['main_content'] = 'aluno_profile';
        $this->load->view('profile',$data);
	}

	public function login()
	{
		$this->form_validation->set_rules('username','Username','required');
		$this->form_validation->set_rules('password','Password','required');

		if ($this->form_validation->run() == TRUE) {
			# check user in db

			$username = $_POST['username'];
			$password = $_POST['password'];

			$this->db->select('*');
			$this->db->from('alunos_table');
			$this->db->where(array('username' => $username, 'password' => $password  ));
			$query = $this->db->get();

			$user = $query->row();

			if ($user->email) {
				//temporary message
				$this->session->set_flashdata("success", "You are logged in");

				//set session variables
				$_SESSION['user_logged'] = TRUE;
				$_SESSION['username'] = $user->username;

				//redirect to profile page
				redirect("aluno/profile", "refresh");



			} else{
				$this->session->set_flashdata("error", "No such accout in database");
				redirect("app/home", "refresh");
			}
		}



		$this->load->view('login');
	}
	
}