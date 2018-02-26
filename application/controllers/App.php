<?php

/**
*  
*/
class App extends CI_Controller
{
	
	public function home()
	{
		$this->load->view('home');
	}
	public function logout(){
		unset($_SESSION);
		session_destroy();
		redirect("app/home", "refresh");
	}




	

	public function register()
	{

		if (isset($_POST['register'])) {
			# code...
			$this->form_validation->set_rules('username','Username','required');

			if ($this->form_validation->run() == TRUE) {
				echo "form-validation";
				//add to database
				$data = array(
					'username' => $_POST['username'], 
					'email' => $_POST['email'],
					'password' => $_POST['password'],

				);
				$this->db->insert('users',$data);
				$this->session->set_flashdata('success','Your accout has been registered. You can now login');
				redirect("app/register","refresh");
			}
		}
		//load view
		$this->load->view('register');
	}
}